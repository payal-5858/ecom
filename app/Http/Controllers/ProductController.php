<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Session;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Cart;
use App\Models\Order;
use Illuminate\Support\Facades\DB;


class ProductController extends Controller
{
    public function index()
    {
        $data =  Product::all();
        return view('product', [
            'products' => $data
        ]);
    }
    public function detail($id)
    {
        $data = Product::find($id);
        return view('detail', [
            'product' => $data
        ]);
    }
    public function search(Request $req)
    {
        $data = Product::where('name', 'like', '%' . $req->input('query') . '%')->get();
        return view('search', ['products' => $data]);
    }
    public function addToCart(Request $req)
    {

        if ($req->session()->has('user')) {
            $cart = new Cart;
            $cart->user_id = $req->session()->get('user')['id'];
            $cart->product_id = $req->product_id;
            $cart->save();
            return redirect('/login');
        } else {
            return redirect('/login');
        }
    }
    static function cartItem()
    {
        $userId = Session::get('user')['id'];
        return Cart::where('user_id', $userId)->count();
    }

    public function cartlist()
    {
        $userId = Session::get('user')['id'];
        $data= DB::table('cart')
        ->join('products', 'cart.product_id', 'products.id')
        ->select('products.*','cart.id as cart_id')
        ->where('cart.user_id', $userId)
        ->get();
        return view('cartlist',['products'=>$data]);
    }
    public function removeProduct($id){
        Cart::destroy($id);
        return redirect('cartlist');
    }

     public function orderNow(){
        $userId = Session::get('user')['id'];
        $total =  DB::table('cart')
        ->join('products', 'cart.product_id', 'products.id')
        ->where('cart.user_id', $userId)
        ->sum('products.price');
        return view('order-now',['total'=>$total]);
     }

     public function orderPlace( Request $request){

        $userId = Session::get('user')['id'];
        $allcart =Cart::where('user_id',$userId)->get();
        foreach($allcart as $cart)
        {
            $order = new Order();
            $order->product_id= $cart['product_id'];
            $order->user_id= $cart['user_id'];
            $order->address= $request->address;
            $order->status= "pending";
            $order->payment_method =$request->payment;
            $order->payment_status ="pending";
            $order->save();
        }
        Cart::where('user_id',$userId)->delete();
        return redirect('/');

     }

}

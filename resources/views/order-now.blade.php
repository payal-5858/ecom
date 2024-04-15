@extends('master')

@section('content')
    <div class="custom-product">
        <div class="col-sm-6">
            <table class="table table-striped">
                <tbody>
                    <tr>
                        <td>Price</td>
                        <td>{{ $total }} Rs</td>
                    </tr>
                    <tr>
                        <td>Tex</td>
                        <td>0 Rs</td>
                    </tr>
                    <tr>
                        <td>Delivery charges</td>
                        <td>100 Rs</td>
                    </tr>
                    <tr>
                        <td>Total Amount</td>
                        <td>{{ $total + 100 }}</td>
                    </tr>
                </tbody>
            </table>

            <form method="POST" action="/order-place">
                @csrf
                <div class="form-group">
                    <textarea placeholder="Enter your address" name="address" class="form-control"> </textarea>
                </div>
                <div class="form-group">
                    <label for=""> Payment Method</label>
                    <p>
                         <p><input type="radio"value="cash" name="payment"> <span> Online payment</span> </p>
                         <p><input type="radio" value="cash"name="payment"> <span> EMI payment</span> </p>
                         <p><input type="radio" value="cash" name="payment"> <span>  Payment on delivery</span> </p>
                </div>

                <button type="submit" class="btn btn-success">Order now</button>
            </form>
        </div>
    </div>
@endsection

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>E-Comm Project</title>
    {{-- bootstrap --}}
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css">
    {{-- jquery --}}
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
</head>

<body>
    {{View::make('header')}}

@yield('content')

{{View::make('footer')}}

</body>

{{-- <script>
    $(document).ready(function() {
        $('button').click(function() {
            // alert('all set')
        })
    })
</script> --}}
<style>
    .custom-login{
        height: 500px;
        padding-top: 100px;
    }
    img.slider-img{
        height: 400px !important;
    }
    .custom-product{
        height: 600px;
        margin: 20px;
    }
    .slider-text{
        background-color: #24465454 !important;

    }
    .trending-img{
        height: 100px;
    }
    .trending-item{
        float: left;
        width: 20%;
    }
    .trending-block{
        margin: 20px;
    }
    .detail-img{
        height: 200px;
    }
    .search-box{
        width: 500px !important;
    }
</style>

</html>

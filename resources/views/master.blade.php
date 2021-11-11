<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-comm Project</title>
    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Jquery --> 
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</head>
<body>
    {{View::make('header')}}

    @yield('content')

    {{View::make('footer')}}
</body>
<style>
    .custom-login{
        height: 85vh;
        padding-top: 100px;
    }

    .custom-product{
        height: 85vh;
    }
    img.slider-img{
        height: 400px !important;
        width: 100%;
    }

    .slider-text{
        background-color: #35443585;
    }

    .trending-wrapper{
        margin: 30px;
    }

    .trending-image{
        height: 100px;
    }

    .trending-item{
        float: left;
        width: 20%;
    }

    .detail-img{
        height: 200px;
    }

</style>

</html>
<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>
    <link rel="stylesheet" type="text/css" href="{{URL::to('libs/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{URL::to('css/style.css')}}">
    <script src="{{ URL::to('libs/bootstrap/js/bootstrap.min.js') }}" type="text/javascript"></script>

</head>
<body>
@include('partials.headear')
<div class="container">
    @yield('content')
</div>
</body>
</html>
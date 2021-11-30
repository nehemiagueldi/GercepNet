<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=This is, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/template/main.css')}}">
    <title>Gercepnet | {{ $title }}</title>
    @yield('custom_css')
</head>
<body>
    @include('partials.navbar')

    <div class="text-center container mt-5">
        @yield('container')
    </div>
</body>
</html>
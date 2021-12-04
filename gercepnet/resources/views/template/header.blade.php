<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=This is, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/template/main.css')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.1/font/bootstrap-icons.css">
    {{-- <link rel="stylesheet" href="{{asset('css/homeuser.css')}}"> --}}
    {{-- <link rel="stylesheet" href="{{asset('css/user/dashboard.css')}}"> --}}
    <link rel="stylesheet" href="{{asset('css/navbar/navbar-u.css')}}">
    <link rel="stylesheet" href="{{asset('css/template/main.css')}}">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <title>Gercepnet | {{ $title }}</title>
    @yield('custom_css')
</head>
<body>
    <div class="text-center container mt-5">
        @yield('container')
    </div>
    <script>
        AOS.init();
      </script>
</body>
</html>
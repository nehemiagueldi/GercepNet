<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=This is, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/template/main.css')}}">
    <link rel="stylesheet" href="{{asset('css/gameover.css')}}">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <title>Welcome</title>
</head>
<body>
    <div class="text-center container mt-5">
        <h1>Sorry you don't have permission</h1>
        <div class="row">
            <a href="{{ URL::previous() }}" class="col-6 text-end">
                <button type="submit" class="btn mt-3 px-5"> Back</button>
            </a>
            <form action="/logout" method="POST" class="col-6 text-start">
                @csrf
                <button type="submit" class="btn mt-3 px-5"> Logout</button>
            </form>
        </div>
    </div>
    <script>
    </script>
</body>
</html>
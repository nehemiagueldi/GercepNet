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
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <title>Welcome</title>
</head>
<body>
    <div class="text-center container mt-5">
        <h1 data-aos="fade-up"  data-aos-duration="2000"> Sorry you don't have permission</h1>
        <div class="row mt-5" data-aos="fade-up"  data-aos-duration="2000">
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
        AOS.init();
      </script>
</body>
</html>
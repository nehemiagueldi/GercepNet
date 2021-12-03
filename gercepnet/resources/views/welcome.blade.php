<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=This is, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('bootstrap/css/bootstrap.min.css')}}">
    {{-- <link rel="stylesheet" href="{{asset('css/template/main.css')}}"> --}}
    <link rel="stylesheet" href="{{asset('css/welcome.css')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.1/font/bootstrap-icons.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <title>Welcome</title>
</head>
<body>
    <div class="bg-1">
        <div class="text-center container">
            <div id="section1">
                <h3 class="minititle louis pt-5">Welcome to our website</h2>
                <h1 class="title">GERCEPNET</h1>
                <h3 class="minititle louis pt-3">Gercepnet adalah warnet yang dibentuk oleh koorporasi gercep.
                  Gercepnet menyediakan segala bentuk platform untuk bermain game dan streaming . 
                  Untuk memberikan pelayanan terbaik, gercepnet hanya menyediakan layanan seperti hotel bintang 
                  5 dengan spesifikasi untuk pro player.</h3>
                <a class="nav-link navbar-dark" href="#section2"><h1 class="mt-5 text-light">Gallery</h1></a>
                <div class="button mx-auto">
                    <a href="/login" class="btn-login">Login</a>
                    <a href="/register" class="btn-signup">SignUp</a>
                </div>
            </div>
        </div>
    </div>
        <div id="section2" class="container">
            <h1 class="text-center py-5 title">Gallery</h1>
            <div class="grid image-grid">

                <div class="grid-block">
                  <div class="tile">
                    <a class="tile-link" href="#">
                      <img class="tile-img tile-img1" src="{{asset('image/gallery/g1.png')}}" alt="Image">
                    </a>
                  </div>
                </div>
              
                <div class="grid-block">
                  <div class="tile">
                    <a class="tile-link" href="#">
                      <img class="tile-img tile-img2" src="{{asset('image/gallery/g2.png')}}" alt="Image">
                    </a>
                  </div>
                </div>
              
                <div class="grid-block">
                  <div class="tile">
                    <a class="tile-link" href="#">
                      <img class="tile-img tile-img3" src="{{asset('image/gallery/g3.png')}}" alt="Image">
                    </a>
                  </div>
                </div>
              
                <div class="grid-block">
                  <div class="tile">
                    <a class="tile-link" href="#">
                      <img class="tile-img tile-img4" src="{{asset('image/gallery/g4.png')}}" alt="Image">
                    </a>
                  </div>
                </div>
              
                <div class="grid-block">
                  <div class="tile">
                    <a class="tile-link" href="#">
                      <img class="tile-img tile-img5" src="{{asset('image/gallery/g5.png')}}" alt="Image">
                    </a>
                  </div>
                </div>
              
                <div class="grid-block">
                  <div class="tile">
                    <a class="tile-link" href="#">
                      <img class="tile-img tile-img6" src="{{asset('image/gallery/g6.png')}}" alt="Image">
                    </a>
                  </div>
                </div>
              </div>
        </div>
        {{-- <div id="section3" class="container mb-5">
            <div class="mt-4  text-center">
                <h1 class="title">Our Team</h1>
            </div>
            <article class="flow">
            <div class="team">
            <div class="auto-grid text-center row" role="list">
            <div class="col-lg-3 col-md- mt-5">
                <div class="profile" data-aos="fade-right"  data-aos-duration="1000">
                <h2 class="profile__name">Joanne Kessie</h2>
                <p class="text-foto">00000043458</p>
                <img alt="Joanne Kessie" src="{{asset('image/about/joen.jpg')}}" width=800 class="rounded" />
                </div>
            </div>
            <div class="col-lg-3 col-md- mt-5">
                <div  class="profile" data-aos="fade-down"  data-aos-duration="1000">
                <h2 class="profile__name">Raphael Gregorius</h2>
                <p class="text-foto">00000043340</p>
                <img alt="./image/joen.jpg" src="{{asset('image/about/pael.jpg')}}"width=800 class="rounded" />
                </div>
            </div>
            <div class="col-lg-3 col-md- mt-5">
                <div class="profile" data-aos="fade-up"  data-aos-duration="1000">
                <h2 class="profile__name">Nehemia Gueldi</h2>
                <p class="text-foto">00000043202</p>
                <img alt="Nehemia Gueldi" src="{{asset('image/about/nehe.jpg')}}"width=800 class="rounded" />
                </div>
            </div>
            <div class="col-lg-3 col-md- mt-5">
                <div class="profile" data-aos="fade-left"  data-aos-duration="1000">
                <h2 class="profile__name">Yonas Kurnia</h2>
                <p class="text-foto">00000042669</p>
                <img alt="Yonas Kurnia" src="{{asset('image/about/yonas.jpg')}}" width=800 class="rounded"/>
                </div>
            </div>
            </div>
            </div>
        </div> --}}
    <script>
    </script>
</body>
</html>
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
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <title>Welcome</title>
</head>
<body>
    <div class="bg-1">
        <div class="text-center container" >
            <div id="section1">
                <h3 class="minititle louis pt-5" data-aos="fade-right"  data-aos-duration="3000">Welcome to our website</h2>
                <h1 class="title" data-aos="fade-left"  data-aos-duration="3000">GERCEPNET</h1>
                <h3 class="minititle louis pt-3" data-aos="fade-up"  data-aos-duration="3000">Gercepnet adalah warnet yang dibentuk oleh koorporasi gercep.
                  Gercepnet menyediakan segala bentuk platform untuk bermain game dan streaming . 
                  Untuk memberikan pelayanan terbaik, gercepnet hanya menyediakan layanan seperti hotel bintang 
                  5 dengan spesifikasi untuk pro player.</h3>
                <a class="nav-link navbar-dark" href="#section2"><h1 class="mt-5 text-light" data-aos="fade-up"  data-aos-duration="3000">Gallery</h1></a>
                <div class="button mx-auto" data-aos="fade-up"  data-aos-duration="3000">
                    <a href="/login" class="mx-3 mt-3" >
                      <button class="btn41-43 btn-43">Login</button>
                    </a>
                    <a href="/register" class="mx-3 mt-3">
                      <button class="btn41-43 btn-43">SignUp</button>
                    </a>
                </div>
            </div>
        </div>
    </div>
        <div id="section2" class="container">
            <h1 class="text-center py-5 title" data-aos="fade-down"  data-aos-duration="3000">Gallery</h1>
            <div class="grid image-grid">

                <div class="grid-block"  data-aos="fade-right"  data-aos-duration="2000">
                  <div class="tile">
                    <a class="tile-link" href="#">
                      <img class="tile-img tile-img1" src="{{asset('image/gallery/g1.png')}}" alt="Image">
                    </a>
                  </div>
                </div>
              
                <div class="grid-block"  data-aos="fade-left" data-aos-duration="2000">
                  <div class="tile">
                    <a class="tile-link" href="#">
                      <img class="tile-img tile-img2" src="{{asset('image/gallery/g2.png')}}" alt="Image">
                    </a>
                  </div>
                </div>
              
                <div class="grid-block"  data-aos="fade-right" data-aos-duration="2000">
                  <div class="tile">
                    <a class="tile-link" href="#">
                      <img class="tile-img tile-img3" src="{{asset('image/gallery/g3.png')}}" alt="Image">
                    </a>
                  </div>
                </div>
              
                <div class="grid-block" data-aos="fade-left" data-aos-duration="2000">
                  <div class="tile">
                    <a class="tile-link" href="#">
                      <img class="tile-img tile-img4" src="{{asset('image/gallery/g4.png')}}" alt="Image">
                    </a>
                  </div>
                </div>
              
                <div class="grid-block"  data-aos="fade-right" data-aos-duration="3000">
                  <div class="tile">
                    <a class="tile-link" href="#">
                      <img class="tile-img tile-img5" src="{{asset('image/gallery/g5.png')}}" alt="Image">
                    </a>
                  </div>
                </div>
              
                <div class="grid-block"  data-aos="fade-left" data-aos-duration="3000">
                  <div class="tile">
                    <a class="tile-link" href="#">
                      <img class="tile-img tile-img6" src="{{asset('image/gallery/g6.png')}}" alt="Image">
                    </a>
                  </div>
                </div>
              </div>
        </div>
        <script>
          AOS.init();
        </script>
</body>
</html>
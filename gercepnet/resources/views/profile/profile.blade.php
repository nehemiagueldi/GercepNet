
@auth
<div class="container">
<img src="{{ asset('storage/' . auth()->user()->image) }}" style="width:150px; height:150px; float:left; border-radius:50%; margin-right:25px;">
<h1>{{ auth()->user()->name }}'s {{ $title }}</h1>
<div class="row justify-content-center"> 
  <div class="col-lg-5"> </div>
    <main class="form-registration"> 
      <form action="/profile" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-floating">
          <input type="text" name="name" class="form-control rounded-top @error('name') is-invalid @enderror" id="name" placeholder="Name" autofocus value="{{ old('name', auth()->user()->name) }}">
          <label for="name">Name</label>
          @error('name')
            <div class="invalid-feedback">
              {{ $message }}
            </div>    
          @enderror
        </div>
        <div class="form-floating">
          <input type="text" name="username" class="form-control @error('username') is-invalid @enderror" id="username" placeholder="Username" value="{{ old('username', auth()->user()->username) }}">
          <label for="name">Username</label>
          @error('username')
            <div class="invalid-feedback">
              {{ $message }}
            </div>    
          @enderror
        </div>
        <div class="form-floating">
          <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="name@example.com" value="{{ old('email', auth()->user()->email) }}">
          <label for="floatingInput">Email address</label>
          @error('email')
            <div class="invalid-feedback">
              {{ $message }}
            </div>    
          @enderror
        </div>
        <div class="form-floating">
          <input type="password" name="password" class="form-control rounded-bottom @error('password') is-invalid @enderror" id="password" placeholder="Password">
          <label for="password">Password</label>
          @error('password')
            <div class="invalid-feedback">
              {{ $message }}
            </div>    
          @enderror
        </div>
        <label for="image">Update Profile Image</label>
        <input type="hidden" name="oldImage" value="{{ old('image', auth()->user()->image) }}">
          @if ( auth()->user()->image )
            <img src="{{ asset('storage/' . auth()->user()->image) }}" class= "img-preview img-fluid mb-3 col-sm-5 d-block">
          @else
            <img class= "img-preview img-fluid mb-3 col-sm-5">
          @endif
          <input class="form-control @error('image') is-invalid @enderror" type="file" id="image" name="image" onchange="previewImage()">
          @error('image')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
          @enderror

          <div class="form-group mt-4 mb-4">
          <div class="captcha">
            <img src="{{captcha_src('flat')}}" onclick="this.src='/captcha/flat?'+Math.random()" id="captchaCode" alt="" class="captcha">
            <a rel="nofollow" href="javascript:;" onclick="document.getElementById('captchaCode').src='captcha/flat?'+Math.random()" class="refresh">             
              <button type="button" class="btn btn-danger btn-refresh" class="reload" id="reload"><i class="fas fa-sync-alt">
              &#x21bb;
              </i></button>
            </a>
          </div>
        </div>
        <div class="form-group mb-4">
            <input id="captcha" type="text" class="input form-control @error('captcha') is-invalid @enderror" placeholder="Enter Captcha" name="captcha">
            @error('captcha')
            <div class="invalid-feedback">
              {{ $message }}
            </div>    
            @enderror
        </div>
          <button class="w-100 btn btn-lg btn-primary mt-3" type="submit">Submit</button>  
        </form>  
    </main>
  </div>
</div>
<script>
  function previewImage() {
    const image = document.querySelector('#image');
    const imgPreview = document.querySelector('.img-preview');
    imgPreview.style.display = 'block';

    const oFReader = new FileReader();
    oFReader.readAsDataURL(image.files[0]);

    oFReader.onload = function(oFREvent){
      imgPreview.src = oFREvent.target.result;
    }
  }
</script>
@endauth


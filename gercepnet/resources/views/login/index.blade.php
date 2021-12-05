@extends('template.header')

@section('custom_css')
<link rel="stylesheet" href="{{asset('css/login.css')}}">
@endsection

@section('container')
<div class="row justify-content-center">
  <h1 class="title mb-5" data-aos="fade-down"  data-aos-duration="2000">GERCEPNET</h1>
  <div class="col-md-6 col-lg-4 col-sm-8 login" data-aos="fade-down"  data-aos-duration="2000">
    @if (session()->has('success'))    
    <div class="alert alert-success alert-dismissible fade show" role="alert">
      {{ session('success') }}
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif

    @if (session()->has('loginError'))    
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
      {{ session('loginError') }}
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif

    <main class="form-signin">
      <h1 class="h3 mb-5 fw-normal text-center title-login">Welcome Back!</h1>
      <form action="{{ url('login') }}" method="POST">
        @csrf
        <div class="form-floating">
          <input type="email" name="email" class="input mb-4 form-control @error ('email') is-invalid @enderror" id="email" placeholder="name@example.com" autofocus value="{{ old('email') }}">
          <label for="email ">Email address</label>
          @error('email')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
          @enderror
        </div>
        <div class="form-floating">
          <input type="password" name="password" class="input form-control mb-4" id="password" placeholder="Password">
          <label for="password">Password</label> 
        </div>
        <button class="w-100 btn btn-lg btn-login" type="submit">Log in</button>
      </form>
      <small class="d-block text-center mt-3">Not Registered? <a href="/register">Register Now</a></small>
    </main>
  </div>
</div>
@endsection
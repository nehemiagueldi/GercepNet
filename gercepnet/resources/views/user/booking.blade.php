@extends('template.header')

@section('custom_css')
<link rel="stylesheet" href="{{asset('css/homeuser.css')}}">
@endsection
@include('navbar.usernavbar')

@section('container')
    <h1>{{ $title }}</h1>

    <form action="/login" method="POST">
        <div class="form-floating">
          <select type="room" name="email" class="" id="email" placeholder="name@example.com" autofocus value="">
          <label for="email">Email address</label>
              <div class="invalid-feedback">
              </div>
        </div>
        <div class="form-floating">
          <input type="password" name="password" class="form-control" id="" placeholder="">
          <label for="password">Password</label> 
        </div>
        <button class="w-100 btn btn-lg btn-primary" type="submit">Log in</button>
      </form>

@endsection
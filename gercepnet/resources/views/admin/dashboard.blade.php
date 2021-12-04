@extends('template.header')

@section('custom_css')
<link rel="stylesheet" href="{{asset('css/navbar/navbar.css')}}">
<link rel="stylesheet" href="{{asset('css/admin/dashboard.css')}}">
{{-- <link rel="stylesheet" href="{{asset('css/admin.css')}}"> --}}
@endsection
@include('navbar.adminnavbar')

@section('container')
<div class="bg" >
    <h3 class="minititle louis" data-aos="fade-up"  data-aos-duration="2000">Welcome to</h2>
        <h1 data-aos="fade-up"  data-aos-duration="2000">gercepnet</h1>
        <h1 class="title" data-aos="fade-left"  data-aos-duration="2000">{{auth()->user()->username}}</h1>
        <h1 class="arrow" data-aos="fade-right"  data-aos-duration="2000"><i class="bi bi-caret-down"></i></h1>
        <button class="btn-dashboard">
            <a href="/admin/userlist">
                See What We Have
            </a>
        </button>
  </div>
@endsection
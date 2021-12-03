@extends('template.header')

@section('custom_css')
<link rel="stylesheet" href="{{asset('css/user/dashboard.css')}}">
<link rel="stylesheet" href="{{asset('css/navbar/navbar.css')}}">

@endsection
@include('navbar.usernavbar')

@section('container')
    {{-- <h3 class="minititle louis pt-5">Welcome to our website</h2>
    <h1 class="title">USER</h1>
    <h3 class="minititle louis pt-3">Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
            Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer \
            took a galley of type and scrambled it to make a type specimen book.</h3> --}}

            <!-- Header -->
<div class="bg">
    <h3 class="minititle louis">Welcome to</h2>
        <h1>gercepnet</h1>
        <h1 class="title">{{auth()->user()->username}}</h1>
        <h1 class="arrow"><i class="bi bi-caret-down"></i></h1>
        <button class="btn-dashboard">
            <a href="/userlisting">
                See What We Have
            </a>
        </button>
  </div>
  
  
@endsection
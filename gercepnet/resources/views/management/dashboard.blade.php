@extends('template.header')

@section('custom_css')
<link rel="stylesheet" href="{{asset('css/management/dashboard.css')}}">
<link rel="stylesheet" href="{{asset('css/navbar/navbar.css')}}">
@endsection
@include('navbar.managenavbar')

@section('container')
<div class="bg">
    <h3 class="minititle louis">Welcome to</h2>
        <h1>gercepnet</h1>
        <h1 class="title">{{auth()->user()->username}}</h1>
        <h1 class="arrow"><i class="bi bi-caret-down"></i></h1>
        <button class="btn-dashboard">
            <a href="/facility">
                See What We Have
            </a>
        </button>
  </div>
@endsection
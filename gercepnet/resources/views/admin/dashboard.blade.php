@extends('template.header')

@section('custom_css')
<link rel="stylesheet" href="{{asset('css/navbar/navbar.css')}}">
<link rel="stylesheet" href="{{asset('css/admin/dashboard.css')}}">
{{-- <link rel="stylesheet" href="{{asset('css/admin.css')}}"> --}}
@endsection
@include('navbar.adminnavbar')

@section('container')
<div class="bg">
    <h3 class="minititle louis">Welcome to</h2>
        <h1>gercepnet</h1>
        <h1 class="title">{{auth()->user()->username}}</h1>
        <h1 class="arrow"><i class="bi bi-caret-down"></i></h1>
        <button class="btn-dashboard">
            <a href="/admin/userlist">
                See What We Have
            </a>
        </button>
  </div>
@endsection
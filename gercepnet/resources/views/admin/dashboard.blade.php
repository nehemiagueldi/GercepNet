@extends('template.header')

@section('custom_css')
<link rel="stylesheet" href="{{asset('css/navbar/navbar-a.css')}}">
<link rel="stylesheet" href="{{asset('css/admin/dashboard.css')}}">
<link rel="stylesheet" href="{{asset('css/admin.css')}}">
@endsection
@include('navbar.adminnavbar')

@section('container')
    <h3 class="minititle louis pt-5">Welcome to our website</h2>
    <h1 class="title">ADMIN</h1>
    <h3 class="minititle louis pt-3">Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
            Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer \
            took a galley of type and scrambled it to make a type specimen book.
    </h3>
@endsection
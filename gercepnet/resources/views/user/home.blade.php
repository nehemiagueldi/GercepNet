@extends('template.header')

@section('custom_css')
<link rel="stylesheet" href="{{asset('css/homeuser.css')}}">
@endsection
@include('navbar.usernavbar')

@section('container')
    <h1>Facilities Listing</h1>
    <p>Ini Foto Fasilitas</p>
    <p>Ini nama Fasilitas</p>
    <ul><a href="/detailuser">Ini Show More</a></ul>
@endsection
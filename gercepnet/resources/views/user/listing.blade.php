@extends('template.header')

@section('custom_css')
<link rel="stylesheet" href="{{asset('css/homeuser.css')}}">
@endsection
@include('navbar.usernavbar')

@section('container')
    <h1>{{ $title }}</h1>

    @foreach($data as $key)
    <article class="mb-5">
            <h2><a href="/userdetail/{{ $key["slug"] }}">{{ $key["nama"] }}</a></h2>
            <h2>{{ $key["kapasitas"] }}</h2>
            <h2>{{ $key["deskripsi"] }}</h2>
        </article>
    @endforeach

@endsection
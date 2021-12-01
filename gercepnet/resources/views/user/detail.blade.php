@extends('template.header')

@section('custom_css')
<link rel="stylesheet" href="{{asset('css/homeuser.css')}}">
@endsection
@include('navbar.usernavbar')

@section('container')
    <h1>{{ $title }}</h1>

    <article>
        <h2>{{ $facility->namaFasilitas }}</h2>
        <h2>{{ $facility->jenisFasilitas }}</h2>
        <h2>{{ $facility->descFasilitas }}</h2>
    </article>

    <a href="/userlisting">Back</a>
@endsection
@extends('template.header')

@section('custom_css')
<link rel="stylesheet" href="{{asset('css/homeuser.css')}}">
@endsection
@include('navbar.usernavbar')

@section('container')
    <h1>{{ $title }}</h1>

    <article>
        <p>{{ $facility->namaFasilitas }}</p>
        <p>{{ $facility->jenisFasilitas }}</p>
        <p>{{ $facility->descFasilitas }}</p>
    </article>

    <a href="/userlisting">Back</a>
@endsection
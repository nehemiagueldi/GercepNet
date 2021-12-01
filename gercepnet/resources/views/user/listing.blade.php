@extends('template.header')

@section('custom_css')
<link rel="stylesheet" href="{{asset('css/homeuser.css')}}">
@endsection
@include('navbar.usernavbar')

@section('container')
    <h1>{{ $title }}</h1>

    @foreach($data as $key)
    <article class="mb-5">
            <img src="https://picsum.photos/200/300" alt="Foto">
            <p><a href="/userdetail/{{ $key->id }}">{{ $key->namaFasilitas }}</a></p>
            <p>{{ $key->jenisFasilitas }}</p>
            <p>{{ $key->descFasilitas }}</p>
        </article>
    @endforeach

@endsection
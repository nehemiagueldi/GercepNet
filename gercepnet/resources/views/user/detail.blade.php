@extends('template.header')

@section('custom_css')
<link rel="stylesheet" href="{{asset('css/navbar/navbar.css')}}">
@endsection
@include('navbar.usernavbar')

@section('container')
<div class="mb-3">
    <img src="https://picsum.photos/200/300" class="img-fluid" alt="{{ $title }}">
    <div class="card-body">
        <h1 class="card-title">{{ $title }}</h1>

        <article>
            <p class="card-text">{{ $facility->nameFasilitas }}</p>
            <p class="card-text">{{ $facility->jenisFasilitas }}</p>
            <p class="card-text">{{ $facility->descFasilitas }}</p>
        </article>

    <button onclick="location.href='/booking/add/{{ $facility->id }}'" type="button" class="btn btn-primary">Book</button>
    <button onclick="location.href='/userlisting'" type="button" class="btn btn-primary">Back</button>

    </div>
  </div>

@endsection
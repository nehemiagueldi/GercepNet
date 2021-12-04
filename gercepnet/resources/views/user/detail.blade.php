@extends('template.header')

@section('custom_css')
<link rel="stylesheet" href="{{asset('css/navbar/navbar.css')}}">
<link rel="stylesheet" href="{{asset('css/user/detail.css')}}">

@endsection
@include('navbar.usernavbar')

@section('container')
<div class="mb-5 box" >
    <h1 class="card-title title-f mb-5" data-aos="fade-down"  data-aos-duration="2000">{{ $title }}</h1>
    <img src="{{ asset('storage/' . $facility->fotoFasilitas) }}" class="img-detail" alt="{{ $title }}" data-aos="fade-down"  data-aos-duration="2000">
    <div class="card-body " >

        <article class="mb-5">
            <h1 class="card-text title-card">{{ $facility->nameFasilitas }}</h1>
            <p class="card-text ">{{ $facility->jenisFasilitas }}</p>
            <p class="card-text desc">{{$facility->descFasilitas }}</p>
        </article>

    <button onclick="location.href='/booking/add/{{ $facility->id }}'" type="button" class="btn-dashboard mt-3">Book</button>
    <button onclick="location.href='/userlisting'" type="button" class="btn-dashboard mt-3">Back</button>

    </div>
  </div>

@endsection
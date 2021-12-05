@extends('template.header')

@section('custom_css')
<link rel="stylesheet" href="{{asset('css/navbar/navbar.css')}}">
<link rel="stylesheet" href="{{asset('css/user/listing.css')}}">

@endsection
@include('navbar.usernavbar')

@section('container')
    <h1 class="title-f  mb-5" data-aos="fade-right"  data-aos-duration="2000">Our Facility</h1>

    <div class="row g-4 justify-content-center">
    @foreach($data as $key)
        <article class="col-md-6 col-lg-4 col-sm-12 mb-5 justify-content-center d-flex kotak">
            <div class="card" data-aos="fade-left"  data-aos-duration="2000">
                <a href="/userdetail/{{ $key->nameFasilitas }}">
                    <img src="{{ asset('storage/' . $key->fotoFasilitas) }}" class="card-img-top" alt="{{ $key->namaFasilitas }}">
                </a>
                <div class="card-body">
                    <p class="card-text title-card"><a href="/userdetail/{{ $key->nameFasilitas }}">{{ $key->nameFasilitas }}</a></p>
                    <p class="card-text">{{ $key->jenisFasilitas }}</p>
                    <p class="card-text desc">{{ Str::limit($key->descFasilitas, 100) }}</>
                </div>
            </div>
        </article>
    @endforeach
    </div>

@endsection
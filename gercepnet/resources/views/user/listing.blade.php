@extends('template.header')

@section('custom_css')
@endsection
@include('navbar.usernavbar')

@section('container')
    <h1>{{ $title }}</h1>

    <div class="row row-cols-1 row-cols-md-4 g-4">
    @foreach($data as $key)
        <article class="col mb-5">
            <div class="card" style="width: 18rem;">
                <img src="https://picsum.photos/200/300" style="width: 18rem; height:18rem" class="card-img-top" alt="{{ $key->namaFasilitas }}">
                <div class="card-body">
                    <p class="card-text"><a href="/userdetail/{{ $key->namaFasilitas }}">{{ $key->namaFasilitas }}</a></p>
                    <p class="card-text">{{ $key->jenisFasilitas }}</>
                    <p class="card-text">{{ $key->descFasilitas }}</>
                </div>
            </div>
        </article>
    @endforeach
    </div>

@endsection
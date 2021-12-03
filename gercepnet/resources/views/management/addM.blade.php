@extends('template.header')

@section('custom_css')
<link rel="stylesheet" href="{{asset('css/facility-m.css')}}">
<link rel="stylesheet" href="{{asset('css/navbar/navbar-m.css')}}">

@endsection
@include('navbar.managenavbar')

@section('container')
    <h1>Facility Listing</h1>
        <form action="/facility/store" method="POST" enctype="multipart/form-data">
					@csrf
		{{-- {{ csrf_field() }} --}}
			Nama Fasilitas <input type="text" class="@error('nameFasilitas') is-invalid @enderror" name="nameFasilitas" id="nameFasilitas" value="{{ old('nameFasilitas') }}"> <br/>
			@error('nameFasilitas')
			<div class="invalid-feedback">
				{{ $message }}
			</div>    
			@enderror
			Deskripsi <input type="text" name="descFasilitas" id="descFasilitas" value="{{ old('descFasilitas') }}"> <br/>
			@error('descFasilitas')
			<div class="invalid-feedback">
				{{ $message }}
			</div>    
			@enderror
			Jenis <input type="text" name="jenisFasilitas" id="jenisFasilitas" value="{{ old('jenisFasilitas') }}"> <br/>
			@error('jenisFasilitas')
			<div class="invalid-feedback">
				{{ $message }}
			</div>    
			@enderror
		<div class="mb-3">
			<label for="image" class="form-label">Foto Fasilitas</label>
			<img class= "img-preview img-fluid mb-3 col-sm-5">
			<input class="form-control @error('fotoFasilitas') is-invalid @enderror" type="file" id="fotoFasilitas" name="fotoFasilitas" onchange="previewImage()">
			@error('fotoFasilitas')
			  <div class="invalid-feedback">
				{{ $message }}
			  </div>    
			@enderror
		  </div>
			<button class="w-100 btn btn-lg btn-register mt-3" type="submit">Submit Data</button>
	</form>
@endsection
@extends('template.header')

@section('custom_css')
<link rel="stylesheet" href="{{asset('css/management/add.css')}}">
<link rel="stylesheet" href="{{asset('css/navbar/navbar.css')}}">

@endsection
@include('navbar.managenavbar')

@section('container')
    <h1 class="title-f">Add Facility</h1>
	<div class="box mx-auto">
		<div class="row form-group justify-content-center ">
        <form action="/facility/store" method="POST" enctype="multipart/form-data">
					@csrf
		{{-- {{ csrf_field() }} --}}
		<a href="/facility" class="float-end"> <i class="bi bi-x-square text-dark"></i></a>

			<div class="text-start mb-1">
				Nama Fasilitas 
			</div>
			<input type="text" class="@error('nameFasilitas') is-invalid @enderror form-control mb-3" name="nameFasilitas" id="nameFasilitas" value="{{ old('nameFasilitas') }}">
			@error('nameFasilitas')
			<div class="invalid-feedback">
				{{ $message }}
			</div>    
			@enderror
			<div class="text-start mb-1">
				Deskripsi 
			</div> 
			<input type="text" class="form-control mb-3" name="descFasilitas" id="descFasilitas" value="{{ old('descFasilitas') }}">
			@error('descFasilitas')
			<div class="invalid-feedback">
				{{ $message }}
			</div>    
			@enderror
			<div class="text-start mb-1">
				Jenis Fasilitas
			</div>
			<input type="text" class="form-control mb-3" name="jenisFasilitas" id="jenisFasilitas" value="{{ old('jenisFasilitas') }}">
			@error('jenisFasilitas')
			<div class="invalid-feedback">
				{{ $message }}
			</div>    
			@enderror
		<div class="mb-3">
			<div class="text-start mb-1">
				Foto Fasilitas 
			</div>
			{{-- <label for="image" class="form-label">Foto Fasilitas</label> --}}
			<img class= "img-preview img-fluid mb-3 col-sm-5">
			<input class="form-control @error('fotoFasilitas') is-invalid @enderror" type="file" id="fotoFasilitas" name="fotoFasilitas" onchange="previewImage()">
			@error('fotoFasilitas')
			  <div class="invalid-feedback">
				{{ $message }}
			  </div>    
			@enderror
		  </div>
			<button class="btn-dashboard mt-3" type="submit">Submit Data</button>
	</form>
</div>

</div>
@endsection
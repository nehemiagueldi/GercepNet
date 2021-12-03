@extends('template.header')

@section('custom_css')
<link rel="stylesheet" href="{{asset('css/facility-m.css')}}">
<link rel="stylesheet" href="{{asset('css/navbar/navbar-m.css')}}">

@endsection
@include('navbar.managenavbar')

@section('container')
    <h1>Facility Listing</h1>
        <form action="/facility/store" method="post" enctype="multipart/form-data">
		{{ csrf_field() }}
		Nama Fasilitas <input type="text" name="namaFasilitas" required="required"> <br/>
		Deskripsi <input type="text" name="descFasilitas" required="required"> <br/>
		Jenis <input type="text" name="jenisFasilitas" required="required"> <br/>
		<div class="mb-3">
			<label for="image" class="form-label">Foto Fasilitas</label>
			<img class= "img-preview img-fluid mb-3 col-sm-5">
			<input class="form-control @error('image') is-invalid @enderror" type="file" id="image" name="image" onchange="previewImage()">
			@error('image')
			  <div class="invalid-feedback">
				{{ $message }}
			  </div>    
			@enderror
		  </div>
		<input type="submit" value="Simpan Data">
	</form>
@endsection
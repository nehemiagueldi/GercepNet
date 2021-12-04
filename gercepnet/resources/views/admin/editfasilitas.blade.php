@extends('template.header')

@section('custom_css')
<link rel="stylesheet" href="{{asset('css/admin/edit.css')}}">
<link rel="stylesheet" href="{{asset('css/navbar/navbar.css')}}">

@endsection
@include('navbar.adminnavbar')

@section('container')
<h1 class="title-f" data-aos="fade-up"  data-aos-duration="2000">Facility Listing</h1>
<div class="box mx-auto" data-aos="fade-up"  data-aos-duration="2000">
	<div class="row form-group justify-content-center ">
		@foreach($facilities as $f)
		<form action="/admin/facility/update" method="post">
			{{ csrf_field() }}
			<a href="/admin/facility" class="float-end"> <i class="bi bi-x-square text-dark"></i></a>
			<input class="form-control mb-3" type="hidden" name="id" value="{{ $f->id }}"> <br/>
			<div class="text-start mb-1">
				Nama Fasilitas 
			</div>
			<input class="form-control mb-3" type="text" required="required" name="nameFasilitas" value="{{ $f->nameFasilitas }}">
			<div class="text-start mb-1">
				Deskripsi 
			</div> 
			<input class="form-control mb-3" type="text" required="required" name="descFasilitas" value="{{ $f->descFasilitas }}">
			<div class="text-start mb-1">
				Jenis Fasilitas
			</div>
			<input class="form-control mb-3" type="text" required="required" name="jenisFasilitas" value="{{ $f->jenisFasilitas }}">
			<input class="btn-dashboard mt-3" type="submit" value="Simpan Data">
		</form>
		@endforeach
		</div>
	</div>
@endsection

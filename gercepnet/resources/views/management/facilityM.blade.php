@extends('template.header')

@section('custom_css')
<link rel="stylesheet" href="{{asset('css/management/facility.css')}}">
<link rel="stylesheet" href="{{asset('css/navbar/navbar-m.css')}}">

@endsection
@include('navbar.managenavbar')

@section('container')
    <h1>Facility Listing</h1> <br>
	    <a href="/facility/add" class="btn-add float-end mb-3"> Add New</a> 
	<table class="table">
		<tr>
			<th>Nama Fasilitas</th>
			<th>Deskipsi</th>
			<th>Jenis</th>
			<th>Operation</th>
		</tr>
		@foreach($facilities as $f)
		<tr>
			<td>{{ $f->namaFasilitas}}</td>
			<td>{{ $f->descFasilitas}}</td>
			<td>{{ $f->jenisFasilitas}}</td>
			<td>
				<a href="/facility/edit/{{ $f->id}}">Edit</a>
				|
				<a href="/facility/delete/{{ $f->id}}">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>
@endsection
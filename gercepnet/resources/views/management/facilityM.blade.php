@extends('template.header')

@section('custom_css')
<link rel="stylesheet" href="{{asset('css/management/facility.css')}}">
<link rel="stylesheet" href="{{asset('css/navbar/navbar-m.css')}}">

@endsection
@include('navbar.managenavbar')

@section('container')
    <h1>Facility Listing</h1> <br>
	    <a href="/facility/add" class="btn-add float-end mb-3"> Add New</a> 
	<table class="table p-5">
		<thead>
			<tr>
				<th>Nama Fasilitas</th>
				<th>Deskipsi</th>
				<th>Jenis</th>
				<th>Operation</th>
			</tr>
		</thead>
		@foreach($facilities as $f)
		<tr>
			<td>{{ $f->nameFasilitas}}</td>
			<td>{{ $f->descFasilitas}}</td>
			<td>{{ $f->jenisFasilitas}}</td>
			<td>
				<a href="/facility/edit/{{ $f->id}}" class="operation">
					<i class="bi bi-pencil-square"></i>
				</a>
				
				<a href="/facility/delete/{{ $f->id}}" class="operation">
					<i class="bi bi-trash"></i>
				</a>
			</td>
		</tr>
		@endforeach
	</table>
@endsection
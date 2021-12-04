@extends('template.header')

@section('custom_css')
<link rel="stylesheet" href="{{asset('css/management/facility.css')}}">
<link rel="stylesheet" href="{{asset('css/navbar/navbar.css')}}">

@endsection
@include('navbar.managenavbar')

@section('container')
    <h1 class="title-f" data-aos="fade-right"  data-aos-duration="3000">Facility Listing</h1>
		<button class="btn41-43 btn-43 mb-4" data-aos="fade-left"  data-aos-duration="3000">
			<a href="/facility/add" > Add New</a> 
		</button>
		<div class="respon" data-aos="fade-right"  data-aos-duration="3000">
		<table class="table p-5 box text-center">
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
		</div>
@endsection
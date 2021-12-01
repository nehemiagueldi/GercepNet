@extends('template.header')

@section('custom_css')
<link rel="stylesheet" href="{{asset('css/facility-m.css')}}">
<link rel="stylesheet" href="{{asset('css/navbar/navbar-m.css')}}">

@endsection
@include('navbar.managenavbar')

@section('container')
    <h1>Facility Listing</h1>
	    <a href="/facility/add"> + Tambah Pegawai Baru</a>
	<br/>
	<br/>
 
	<table class="table table-striped">
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
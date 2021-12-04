@extends('template.header')

@section('custom_css')
<link rel="stylesheet" href="{{asset('css/navbar/navbar.css')}}">
<link rel="stylesheet" href="{{asset('css/admin/request.css')}}">
@endsection
@include('navbar.adminnavbar')

@section('container')
	<h1 class="title-f" data-aos="fade-up"  data-aos-duration="2000">{{ $title }}</h1>
	<div class="table-responsive-md" data-aos="fade-up"  data-aos-duration="2000">
	<table class="table box p-5 text-center">
		<thead>
			<tr>
				<th>No.</th>
				<th>nama peminjam</th>
				<th>nama fasilitas</th>
				<th>jam mulai</th>
				<th>jam selesai</th>
				<th>status</th>
				<th>operation</th>
			</tr>
		</thead>
		@php($count = 1)
		@foreach($sewas as $s)
		<tr>
			<td>{{$count}}</td>
			<td>{{$s->username}}</td>
			<td>{{$s->namaFasilitas}}</td>
			<td>{{$s->jam_mulai}}</td>
			<td>{{$s->jam_selesai}}</td>
			<td> 
				@if($s->status == 0)
					<span class="label label-primary">Pending</span>
				@elseif($s->status == 1)
					<span class="label label-success">Approved</span>
				@else
					<span class="label label-danger">Rejected</span>
				@endif
				</td>
			<td>	
				<a href="/admin/request/delete/{{ $s->id}}" class="operation">
					<i class="bi bi-trash"></i>
				</a>
			</td>
		</tr>
		@php($count++)
		@endforeach
	</table>
@endsection
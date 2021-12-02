@extends('template.header')

@section('custom_css')
<link rel="stylesheet" href="{{asset('css/admin.css')}}">
@endsection
@include('navbar.adminnavbar')

@section('container')
    <h1>User List</h1>
    <a href="#" class="btn-add float-end mb-3"> Add New</a> 
	<table class="table p-5">
		<thead>
			<tr>
				<th>Nama</th>
				<th>Email</th>
				<th>Role</th>
				<th>Operation</th>
			</tr>
		</thead>
		@foreach($users as $u)
		<tr>
			<td>{{ $u->name}}</td>
			<td>{{ $u->email}}</td>
			<td>{{ $u->role}}</td>
			<td>
				<a href="#" class="operation">
					<i class="bi bi-pencil-square"></i>
				</a>
				
				<a href="delete/{{ $u->id }}" class="operation">
					<i class="bi bi-trash"></i>
				</a>
			</td>
		</tr>
		@endforeach
	</table>
@endsection
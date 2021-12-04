@extends('template.header')

@section('custom_css')
<link rel="stylesheet" href="{{asset('css/admin/user.css')}}">
<link rel="stylesheet" href="{{asset('css/navbar/navbar.css')}}">
@endsection
@include('navbar.adminnavbar')

@section('container')
    <h1 class="title-f" data-aos="fade-up"  data-aos-duration="2000">User List</h1>
	<div class="table-responsive-md"data-aos="fade-up"  data-aos-duration="2000">
	<table class="table p-5 box text-center">
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
				<a href="userlist/edit/{{ $u->id }}" class="operation">
					<i class="bi bi-pencil-square"></i>
				</a> 
				
				<a href="userlist/delete/{{ $u->id }}" class="operation">
					<i class="bi bi-trash"></i>
				</a>
			</td>
		</tr>
		@endforeach
	</table>
</div>
@endsection
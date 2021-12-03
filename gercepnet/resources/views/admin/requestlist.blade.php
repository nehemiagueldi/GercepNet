@extends('template.header')

@section('custom_css')
<link rel="stylesheet" href="{{asset('css/admin.css')}}">
@endsection
@include('navbar.adminnavbar')

@section('container')
    <h1>Request List</h1>
    <a href="admin/" class="btn-add float-end mb-3"> Add New</a> 
	<table class="table p-5">
		<thead>
			<tr>
				<th>Requester</th>
				<th>Requested Facility</th>
				<th>Date</th>
                <th>Start Time</th>
                <th>End Time</th>
                <th>Operation</th>
			</tr>
		</thead>
		<!-- foreach$request as $r -->
		<tr>
            <td>#</td>
			<td>#</td>
            <td>#</td>
            <td>#</td>
            <td>#</td>
			<td>
				<a href="#" class="operation">
					<i class="bi bi-pencil-square"></i>
				</a>
				
				<a href="# class="operation">
					<i class="bi bi-trash"></i>
				</a>
			</td>
		</tr>
		<!-- endforeach -->
	</table>
@endsection
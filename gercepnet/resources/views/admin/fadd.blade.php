@extends('template.header')

@section('custom_css')
<link rel="stylesheet" href="{{asset('css/admin.css')}}">
@endsection
@include('navbar.adminnavbar')

@section('container')
    <h1>Add Facility</h1>
@endsection
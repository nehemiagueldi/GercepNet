@extends('template.header')

@section('custom_css')
<link rel="stylesheet" href="{{asset('css/facility-m.css')}}">
<link rel="stylesheet" href="{{asset('css/navbar/navbar-m.css')}}">

@endsection
@include('navbar.managenavbar')

@section('container')
    <h1>Facility Listing</h1>
    @foreach($facility as)
@endsection
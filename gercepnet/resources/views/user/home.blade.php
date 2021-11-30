@extends('template.header')

@section('custom_css')
<link rel="stylesheet" href="{{asset('css/homeuser.css')}}">
@endsection

@section('container')
    @include('layouts.usernavbar')
    <h1>Facilities Listing</h1>
@endsection

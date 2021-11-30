@extends('template.header', ['title'=>'Booking'])

@section('custom_css')
<link rel="stylesheet" href="{{asset('css/homeuser.css')}}">
@endsection

@section('container')
    @include('layouts.usernavbar')
    <h1>Booking Listing</h1>
@endsection

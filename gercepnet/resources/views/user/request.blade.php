@extends('template.header', ['title'=>'Request Listing'])

@section('custom_css')
<link rel="stylesheet" href="{{asset('css/homeuser.css')}}">
@endsection

@section('container')
    @include('layouts.usernavbar')
    <h1>Request Listing</h1>
@endsection

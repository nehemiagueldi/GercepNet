@extends('template.header', ['title'=>'Facilities Listing'])

@section('custom_css')
<link rel="stylesheet" href="{{asset('css/homeuser.css')}}">
@endsection

@section('container')
    @include('layouts.usernavbar')
    
    @component('user.components.listing')
        <h1>Facility Listing</h1>
    @endcomponent

@endsection

@extends('template.header')

@section('custom_css')
<link rel="stylesheet" href="{{asset('css/facility-m.css')}}">
<link rel="stylesheet" href="{{asset('css/navbar/navbar-m.css')}}">
@endsection
@include('navbar.managenavbar')

@section('container')
    <h1>Ini contoh template</h1>
    <form>
        <input class="form-control" type="datetime-local">
    </form>
    <script>
        flatpickr("input", {});
    </script>
@endsection
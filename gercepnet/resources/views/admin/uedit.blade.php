@extends('template.header')

@section('custom_css')
<link rel="stylesheet" href="{{asset('css/admin/edit.css')}}">
<link rel="stylesheet" href="{{asset('css/navbar/navbar.css')}}">
@endsection
@include('navbar.adminnavbar')

@section('container')
    <h1 class="title-f" data-aos="fade-up"  data-aos-duration="2000">Edit User</h1>
    <div class="box mx-auto" data-aos="fade-up"  data-aos-duration="2000">
	    <div class="row form-group justify-content-center ">
            @foreach($users as $u)
            <a href="/admin/userlist" class="float-end text-end mb-3" > <i class="bi bi-x-square text-dark"></i></a>
            <form action="/admin/userlist/store" method="POST">
                {{ csrf_field() }}
                <div class="text-start mb-1">
                    ID 
                </div>
                    <input type="text" name="id" class="input form-control" id="id" value="{{ $u->id }}" readonly>
                <div class="text-start mb-1">
                    Nama 
                </div>
                    <input type="text" name="name" class="input form-control" id="name" placeholder="Name" value="{{ $u->name }}">
                    {{-- @error('name')
                        <div class="invalid-feedback">
                        {{ $message }}
                        </div>    
                    @enderror --}}
                <div class="text-start mb-1">
                    Username
                </div>
                    <input type="text" name="username" class="input form-control" id="username" placeholder="Username" value="{{ $u->username }}">
                    {{-- @error('username')
                        <div class="invalid-feedback">
                        {{ $message }}
                        </div>
                    @enderror --}}
                <div class="text-start mb-1">
                    Email Address
                </div>
                    <input type="email" name="email" class="input form-control" id="email" placeholder="name@example.com" value="{{ $u->email }}">
                    {{-- @error('email')
                        <div class="invalid-feedback">
                        {{ $message }}
                        </div>    
                    @enderror --}}
                <button class="btn-dashboard mt-3" type="submit">Edit</button>
            </form>
            @endforeach
        </div>
    </div>

@endsection
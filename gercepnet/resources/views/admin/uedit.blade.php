@extends('template.header')

@section('custom_css')
<link rel="stylesheet" href="{{asset('css/admin.css')}}">
@endsection

@section('container')
    <a href="/admin/userlist">KEMBALI</a>
    <h1>Edit User</h1>
    <div class="col-lg-5 registrasi">
        <main class="form-registration">
            @foreach($users as $u)
            <form action="/admin/userlist/edit/{{ $u->id }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-floating">
                    <input type="text" name="id" class="input form-control" id="id" value="{{ $u->id }}" readonly>
                    <label for="id">ID</label>
                </div>

                <div class="form-floating">
                    <input type="text" name="name" class="input form-control @error('name') is-invalid @enderror" id="name" placeholder="Name" value="{{ $u->name }}">
                    <label for="name">Name</label>
                    @error('name')
                        <div class="invalid-feedback">
                        {{ $message }}
                        </div>    
                    @enderror
                </div>

                <div class="form-floating">
                    <input type="text" name="username" class="input form-control @error('username') is-invalid @enderror" id="username" placeholder="Username" value="{{ $u->username }}">
                    <label for="name">Username</label>
                    @error('username')
                        <div class="invalid-feedback">
                        {{ $message }}
                        </div>    
                    @enderror
                </div>

                <div class="form-floating">
                    <input type="email" name="email" class="input form-control @error('email') is-invalid @enderror" id="email" placeholder="name@example.com" value="{{ $u->email }}">
                    <label for="floatingInput">Email address</label>
                    @error('email')
                        <div class="invalid-feedback">
                        {{ $message }}
                        </div>    
                    @enderror
                </div>
                <button class="w-100 btn btn-lg btn-register mt-3" type="submit">Edit</button>
            </form>
            @endforeach
        </main>
    </div>
@endsection
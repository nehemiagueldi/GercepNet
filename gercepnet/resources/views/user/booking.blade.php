@extends('template.header')

@section('custom_css')
<link rel="stylesheet" href="{{asset('css/homeuser.css')}}">
@endsection
@include('navbar.usernavbar')

@section('container')
    <h1>{{ $title }}</h1>

        <div class="form-floating">
          <!-- component -->
          <section class="antialiased text-gray-600 h-screen px-4">
            <div class="flex flex-col justify-center h-full">
                <!-- Table -->
                <form>
                  <div class="mb-3">
                    <label for="Select" class="form-label">Select fasilitas</label>
                    <select id="Select" class="form-select">
                      <option>Nama 1</option>
                    </select>
                  </div>
                  <div class="mb-3">
                    <label for="Select" class="form-label">Select menu</label>
                    <select id="Select" class="form-select">
                      <option>Disabled select</option>
                    </select>
                  </div>
                  <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
          </section>
        </div>

@endsection
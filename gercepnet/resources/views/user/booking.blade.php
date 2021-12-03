@extends('template.header')

@section('custom_css')
<link rel="stylesheet" href="{{asset('css/homeuser.css')}}">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>

@endsection
@include('navbar.usernavbar')

@section('container')
{{-- @dd($sewa) --}}
    <h1>{{ $title }}</h1>

        <div class="form-floating">
          <!-- component -->
          <section class="antialiased text-gray-600 h-screen px-4">
            <div class="flex flex-col justify-center h-full">
                <div class="row form-group">
                  <form action="/booking/request" method="post">
		                {{ csrf_field() }}
                    {{-- <input type="hidden" name="category_id"> --}}
                    <select  name="namaFasilitas" class="form-select" aria-label="Default select example">
                      <option selected>Open this select menu</option>
                      @foreach($facilities as $f)
                        <option value="{{$f->namaFasilitas}}">{{$f->namaFasilitas}}</option>
                      @endforeach
                    </select>
                    <div class="col-md-2">
                        Appointment Time 
                    </div>
                    
                    <input class="form-control" type="datetime-local" name="jam_mulai">
                    <input class="form-control" type="datetime-local" name="jam_selesai">
                    <button type="submit" value="submit">Submit</button>
                </form>
            </div>
          </section>
        </div>

@endsection
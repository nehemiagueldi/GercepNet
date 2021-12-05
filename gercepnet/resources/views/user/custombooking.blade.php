@extends('template.header')

@section('custom_css')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
<link rel="stylesheet" href="{{asset('css/navbar/navbar.css')}}">
<link rel="stylesheet" href="{{asset('css/user/booking.css')}}">


@endsection
@include('navbar.usernavbar')

@section('container')
{{-- @dd($sewa) --}}
    <h1 class="title-f" data-aos="fade-down"  data-aos-duration="2000">{{ $title }}</h1>

        <div class="form-floating box mx-auto" data-aos="fade-down"  data-aos-duration="2000">
          <!-- component -->
          <section class="antialiased">
            <div class="flex flex-col justify-center h-full">
                <div class="row form-group">
                  <form action="/booking/request" method="post">
		                {{ csrf_field() }}
                    {{-- <input type="hidden" name="category_id"> --}}
                    <div class="text-start mb-1">
                      Facility 
                    </div>
                    {{-- <select  name="namaFasilitas" class="form-select mb-3" aria-label="Default select example">
                    @foreach($facilities as $f)
                        @if (Input::old('namaFasilitas') == $key)
                            <option value="{{ $key }}" selected>{{ $val }}</option>
                        @else
                            <option value="{{ $key }}">{{ $val }}</option>
                        @endif
                    @endforeach
                    </select> --}}
	                @foreach($facilities as $f)
                        <input type="hidden" name="id" value="{{ $f->id }}">
                        <input type="text" class="form-control mb-3" id="namaFasilitas" name="namaFasilitas" value="{{$f->nameFasilitas}}" readonly>
                    @endforeach

                        <div class="text-start mb-1">
                            Appointment Time 
                        </div>
                        
                        <input class="form-control mb-3 @error('jam_mulai') is-invalid @enderror" type="datetime-local" name="jam_mulai">
                        @error('jam_mulai')
                        <div class="invalid-feedback">
                          {{ $message }}
                        </div>    
                        @enderror
                        <input class="form-control mb-3 @error('jam_selesai') is-invalid @enderror" type="datetime-local" name="jam_selesai">
                        @error('jam_selesai')
                        <div class="invalid-feedback">
                          {{ $message }}
                        </div>    
                        @enderror
                        <button type="submit" value="submit" class="btn-dashboard">Submit</button>
                </form>
            </div>
          </section>
        </div>

@endsection
@extends('template.header')

@section('custom_css')
<link rel="stylesheet" href="{{asset('css/homeuser.css')}}">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>

@endsection
@include('navbar.usernavbar')

@section('container')
    <h1>{{ $title }}</h1>

        <div class="form-floating">
          <!-- component -->
          <section class="antialiased text-gray-600 h-screen px-4">
            <div class="flex flex-col justify-center h-full">
                <!-- Table -->
                <!-- <form> -->
                  <!-- <div class="mb-3">
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
                  </div> -->
                <div class="row form-group">
                    <div class="col-md-2">
                        Appointment Time 
                    </div>
                    <form action="/booking/request" method="post">
		                {{ csrf_field() }}
                    <input type="hidden" name="category_id">
                    <input class="form-control" type="datetime-local" name="jam_mulai">
                    <input class="form-control" type="datetime-local" name="jam_selesai">
                    <button type="submit">Submit</button>
                </form>

                <table class="table p-5">
                <thead>
                  <tr>
                    <th>id</th>
                    <th>nama peminjam</th>
                    <th>jam mulai</th>
                    <th>jam selesai</th>
                  </tr>
                </thead>
                @foreach($sewas as $s)
                <tr>
                  <td>{{ $s->id}}</td>
                  <td>{{$s->user->username}}</td>
                  <td>{{ $s->jam_mulai}}</td>
                  <td>{{ $s->jam_selesai}}</td>
                </tr>
                @endforeach
              </table>

            </div>
          </section>
        </div>

@endsection
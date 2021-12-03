@extends('template.header')

@section('custom_css')
@endsection
@include('navbar.usernavbar')

@section('container')
    <h1>{{ $title }}</h1>

    <table class="table p-5">
        <thead>
          <tr>
            <th>No.</th>
            <th>nama peminjam</th>
            <th>nama fasilitas</th>
            <th>jam mulai</th>
            <th>jam selesai</th>
            <th>status</th>
          </tr>
        </thead>
        @php($count = 1)
        @foreach($sewas as $s)
        <tr>
          {{-- <td>{{ $s->id}}</td> --}}
          <td>{{$count}}</td>
          <td>{{$s->username}}</td>
          <td>{{$s->namaFasilitas}}</td>
          <td>{{$s->jam_mulai}}</td>
          <td>{{$s->jam_selesai}}</td>
          <td> 
            @if($s->status == 0)
                <span class="label label-primary">Pending</span>
            @elseif($s->status == 1)
                <span class="label label-success">Approved</span>
            @else
                <span class="label label-danger">Rejected</span>
            @endif
            </td>
        </tr>
        @php($count++)
        @endforeach
      </table>
@endsection
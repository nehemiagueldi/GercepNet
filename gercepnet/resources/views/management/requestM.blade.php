@extends('template.header')

@section('custom_css')
<link rel="stylesheet" href="{{asset('css/facility-m.css')}}">
<link rel="stylesheet" href="{{asset('css/navbar/navbar-m.css')}}">
@endsection
@include('navbar.managenavbar')

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
        <th>operation</th>
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
        <td>
            <form method="post" action="/request/store">
		        {{ csrf_field() }}
                <input type="hidden" name="id" value="{{ $s->id }}"> <br/>
                <select name="status" value="{{ old('status') }}">
                    <option value="1">Approve</option>
                    <option value="2">Reject</option>
                </select>
                <input type="submit" value="Update">
            </form>
        </td>
    </tr>
    @php($count++)
    @endforeach
  </table>
@endsection
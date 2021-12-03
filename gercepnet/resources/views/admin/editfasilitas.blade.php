@extends('template.header')

@section('custom_css')
<link rel="stylesheet" href="{{asset('css/facility-m.css')}}">
<link rel="stylesheet" href="{{asset('css/navbar/navbar-a.css')}}">

@endsection
@include('navbar.managenavbar')

@section('container')

	<h3>Edit Pegawai</h3>
 
	<a href="/admin/facility"> Kembali</a>
	
	<br/>
	<br/>
 
	@foreach($facilities as $f)
	<h1>Facility Listing</h1>
        <form action="/admin/facility/update" method="post">
		{{ csrf_field() }}
        <input type="hidden" name="id" value="{{ $f->id }}"> <br/>
	    Nama Fasilitas <input type="text" required="required" name="namaFasilitas" value="{{ $f->namaFasilitas }}"> <br/>
	    Deskripsi Fasilitas <input type="text" required="required" name="descFasilitas" value="{{ $f->descFasilitas }}"> <br/>
	    Jenis Fasilits <input type="text" required="required" name="jenisFasilitas" value="{{ $f->jenisFasilitas }}"> <br/>
	    <input type="submit" value="Simpan Data">
	</form>
	@endforeach
@endsection

@extends('layout.bahagia')

@section('title', 'DATA PENDAPATAN')

@section('konten')
	<h3>Edit Pendapatan</h3>

	<a href="/pendapatan" class="btn btn-primary"> Kembali</a>

	<br/>
	<br/>

	@foreach($pendapatan as $c)
	<form action="/pendapatan/update" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="id" value="{{ $c->ID }}">
        <br>
        ID Pegawai<input type="number" required="required" name="idpegawai" value="{{ $c->IDPegawai }}"> <br/>
        Bulan <input type="number" required="required" name="bulan" value="{{ $c->Bulan }}"> <br/>
        Tahun <input type="number" required="required" name="tahun" value="{{ $c->Tahun }}"> <br/>
        Gaji <input type="number" required="required" name="gaji" value="{{ $c->Gaji }}"> <br/>
        Tunjangan <input type="number" required="required" name="tunjangan" value="{{ $c->Tunjangan }}"> <br/>
		<input type="submit" class='btn btn-success' value="Simpan Data">

	</form>
	@endforeach
@endsection

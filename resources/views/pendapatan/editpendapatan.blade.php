@extends('layout.bahagia')

@section('title', 'DATA PENDAPATAN')

@section('konten')
	<h3>Edit Pendapatan</h3>

	<a href="/pendapatan" class="btn btn-primary"> Kembali</a>

	<br/>
	<br/>

	@foreach($pendapatan as $p)
	<form action="/pendapatan/update" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="id" value="{{ $p->pendapatan_id }}"> <br/>
		Nama pegawai <input type="number" required="required" name="idpegawai" value="{{ $p->pendapatan_idpegawai }}"> <br/>
        bulan <input type="number" required="required" name="bulan" value="{{ $p->pendapatan_bulan }}"> <br/>
        tahun <input type="number" required="required" name="tahun" value="{{ $p->pendapatan_tahun }}"> <br/>
        gaji <input type="number" required="required" name="gaji" value="{{ $p->pendapatan_gaji }}"> <br/>
        tunjangan <input type="number" required="required" name="tunjangan" value="{{ $p->pendapatan_tunjangan }}"> <br/>
		<input type="submit" class='btn btn-success' value="Simpan Data">
	</form>
	@endforeach
@endsection

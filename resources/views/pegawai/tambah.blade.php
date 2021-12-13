@extends('layout.bahagia')

@section('title', 'TAMBAH DAFTAR PEGAWAI')

@section('konten')


<h3> TAMBAH PEGAWAI </h3>
	<a href="/pegawai" class="btn btn-secondary"> Kembali</a>

	<br/>
	<br/>

	<form action="/pegawai/store" method="post">
		{{ csrf_field() }}
		Nama <input type="text" name="nama" required="required"> <br/>
		Jabatan <input type="text" name="jabatan" required="required"> <br/>
		Umur <input type="number" name="umur" required="required"> <br/>
		Alamat <textarea name="alamat" required="required"></textarea> <br/>
		<input type="submit" class='btn btn-success' value="Simpan Data">
	</form>

@endsection

@extends('layout.bahagia')
@section('title', 'Daftar Pegawai')
@section('konten')
<!DOCTYPE html>
<html>
<head>
	<title>Detail Pegawai Sedot WC</title>
</head>
<body>

	<h3>Detail Pegawai Sedot WC</h3>

	<a href="/pegawai"> Kembali</a>

	<br/>
	<br/>

	@foreach($pegawai as $p)
		Nama <{{ $p->pegawai_nama }}"> <br/>
		Jabatan <{{ $p->pegawai_jabatan }}"> <br/>
		Umur <{{ $p->pegawai_umur }}"> <br/>
		Alamat <{{ $p->pegawai_alamat }}</textarea> <br/>
	@endforeach


</body>
</html>

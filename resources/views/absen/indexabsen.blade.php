@extends('layout.bahagia')
@section('title', 'Data Absen')
@section('konten')

<!DOCTYPE html>
<html>
<head>
	<title>Tabel Absen Pegawai Sedot WC</title>
</head>
<body>

	<h3>Daftar Absensi Pegawai</h3>


	<a href="/absen/add" class="btn btn-primary"> + Tambah Absensi</a>

	<br/>
	<br/>

	<table border="2">
		<tr>
			<th>IDPegawai</th>
			<th>Tanggal</th>
			<th>Status</th>
			<th>Opsi</th>
		</tr>
		@foreach($absen as $a)
		<tr>
			<td>{{ $a->IDPegawai }}</td>
			<td>{{ $a->Tanggal }}</td>
			<td>{{ $a->Status }}</td>
			<td>
				<a href="/absen/edit/{{ $a->ID }}">Edit Absensi</a>
				|
				<a href="/absen/hapus/{{ $a->ID }}">Delete Absensi</a>
			</td>
		</tr>
		@endforeach
	</table>
    {{$absen->links()}}
    <p>
        Keterangan Status: <br>
        H : Hadir
        I : Izin <br>
        S : Sakit <br>
        A : Alfa <br>
        </p>

</body>
</html>

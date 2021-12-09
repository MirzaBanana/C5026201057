@extends('layout.bahagia')
@section('title', 'Data Pendapatan')
@section('konten')

<!DOCTYPE html>
<html>
<head>
	<title>Data Pendapatan Karyawan Perusahaan Sedot WC</title>
</head>
<body>


	<h3>Data Pendapatan Karyawan Sedot WC</h3>

	<a href="/pendapatan/tambah" class="btn btn-primary"> + Tambah Pendapatan Pegawai</a>

	<br/>
	<br/>

	<table border="2">
		<tr>
			<th>IDPegawai</th>
			<th>Bulan</th>
			<th>Tahun</th>
			<th>Gaji</th>
            <th>Tunjangan</th>
			<th>Opsi</th>
		</tr>
		@foreach($pendapatan as $p)
		<tr>
			<td>{{ $p->IDPegawai }}</td>
			<td>{{ $p->Bulan }}</td>
			<td>{{ $p->Tahun }}</td>
			<td>{{ $p->Gaji }}</td>
            <td>{{ $p->Tunjangan }}</td>
			<td>
				<a href="/pendapatan/edit/{{ $p->ID }}">Edit</a>
				|
				<a href="/pendapatan/hapus/{{ $p->ID }}">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>


</body>
</html>

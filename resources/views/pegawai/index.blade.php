@extends('layout.bahagia')
@section('title', 'Daftar Pegawai')
@section('konten')

<!DOCTYPE html>
<html>
<head>
	<title>Data Pegawai Sedot WC</title>
</head>
<body>


	<h3>Data Pegawai Sedot WC</h3>

<a href="/pegawai/tambah" class="btn btn-primary">  + Tambah Pegawai Baru</a>
<div class="container" align="center">
	<form action="/pegawai/cari" method="GET">
		<input type="text" class="form-control" name="cari" placeholder="Cari Pegawai berdasarkan nama atau alamat .." value="{{ old('cari') }}">
		<input type="submit" class="btn btn-default" value="CARI">
	</form>
</div>
	<table border="2">
		<tr>
			<th>Nama</th>
			<th>Alamat</th>
			<th>Opsi</th>
		</tr>
		@foreach($pegawai as $p)
		<tr>
			<td>{{ $p->pegawai_nama }}</td>
			<td>{{ $p->pegawai_alamat }}</td>
			<td>
                <a href="/pegawai/view/{{ $p->pegawai_id }}">Details</a>


				<a href="/pegawai/edit/{{ $p->pegawai_id }}">Edit</a>

				<a href="/pegawai/hapus/{{ $p->pegawai_id }}">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>

{{ $pegawai->links() }}

</body>
</html>

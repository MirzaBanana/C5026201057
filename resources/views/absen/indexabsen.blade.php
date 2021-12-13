@extends('layout.bahagia')

@section('title', 'DATA ABSEN')

@section('konten')

	<h3>ABSEN PEGAWAI</h3>

	<a href="/absen/tambah" class="btn btn-primary" > + Tambah Absen Pegawai Baru</a>

	<br/>
	<br/>

	<table class="table table-success table-striped">
		<tr>
			<th>Nama Pegawai</th>
			<th>Tanggal</th>
			<th>Status</th>
			<th>Opsi</th>
		</tr>
		@foreach($absen as $p)
		<tr>
			<td>{{ $p->pegawai_nama }}</td>
			<td>{{ $p->Tanggal }}</td>
			<td>{{ $p->Status }}</td>
			<td>
				<a href="/absen/edit/{{ $p->ID }}" class="btn btn-warning" >Edit</a>
				|
				<a href="/absen/hapus/{{ $p->ID }}" class="btn btn-danger" >Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>
    {{ $absen->links() }}

@endsection

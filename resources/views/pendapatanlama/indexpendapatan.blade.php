@extends('layout.bahagia')

@section('title', 'DATA PENDAPATAN')

@section('konten')

	<h3>DATA PENDAPATAN</h3>

	<a href="/pendapatan/tambah" class="btn btn-primary"> + Tambah tabel pendapatan</a>

	<br/>
	<br/>

	<table class="table table-success table-striped">
		<tr>
			<th>ID Pegawai</th>
			<th>bulan</th>
			<th>tahun</th>
			<th>gaji</th>
            <th>tunjangan</th>
			<th>Opsi</th>
		</tr>
		@foreach($pendapatan as $c)
		<tr>
			<td>{{ $c->IDPegawai }}</td>
			<td>{{ $c->Bulan }}</td>
			<td>{{ $c->Tahun }}</td>
			<td>{{ $c->Gaji }}</td>
            <td>{{ $c->Tunjangan }}</td>
			<td>
				<a href="/pendapatan/edit/{{ $c->ID }}" class="btn btn-warning" >Edit</a>
				|
				<a href="/pendapatan/hapus/{{ $c->ID }}" class="btn btn-danger" >Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>
@endsection

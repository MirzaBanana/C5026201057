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
		@foreach($pendapatan as $p)
		<tr>
			<td>{{ $p->IDPegawai }}</td>
			<td>{{ $p->bulan }}</td>
			<td>{{ $p->tahun }}</td>
			<td>{{ $p->gaji }}</td>
            <td>{{ $p->tunjangan }}</td>
			<td>
				<a href="/pendapatan/edit/{{ $p->pendapatan_id }}" class="btn btn-warning" >Edit</a>
				|
				<a href="/pendapatan/hapus/{{ $p->pendapatan_id }}" class="btn btn-danger" >Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>
    {{ $pendapatan->links() }}
@endsection

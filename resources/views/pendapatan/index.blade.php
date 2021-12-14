@extends('layout.bahagia')
@section('title', 'DATA PENDAPATAN')

@section('konten')
	<a href="/pendapatan/tambah"> + Tambah Pendapatan Baru</a>

	<br/>
	<br/>

	<table class="table table-success table-striped">
        <thead>
		<tr>
            <th>No</th>
			<th>Nama Pegawai</th>
			<th>Bulan</th>
			<th>Tahun</th>
			<th>Gaji</th>
            <th>Tunjangan</th>
            <th>Opsi</th>
		</tr>
    </thead>
		@foreach($pendapatan as $c)
		<tr>
            <td>{{ $loop->iteration }}</td>
			<td>{{ $c->pegawai_nama }}</td>
			<td>{{ $c->Bulan }}</td>
			<td>{{ $c->Tahun }}</td>
			<td>{{ $c->Gaji }}</td>
            <td>{{ $c->Tunjangan }}</td>
			<td>
				<a href="/absen/edit/{{ $c->ID }}" class="btn btn-warning" >Edit</a>
				|
				<a href="/absen/hapus/{{ $c->ID }}" class="btn btn-danger" >Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>
    @endsection


</body>
</html>

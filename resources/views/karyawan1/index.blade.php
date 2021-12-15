@extends('layout.bahagia')

@section('title', 'DAFTAR KARYAWAN')

@section('konten')

    <h3> DAFTAR KARYAWAN </h3>


	<br/>
	<br/>
<div class="col-sm-8container" align='center'>
</div>
	<table class="table table-success table-striped">
		<tr>
            <th></th>
            <th>NIP</th>
			<th>Nama</th>
			<th>Pangkat</th>
			<th>Gaji</th>
            <th>Opsi</th>
		</tr>
		@foreach($karyawan1 as $p)
		<tr>
            <td>{{ $loop->iteration }}</td>
			<td>{{ $p->NIP }}</td>
			<td>{{ $p->Nama }}</td>
            <td>{{ $p->Pangkat }}</td>
            <td>{{ number_format($p->Gaji, 0, ',', '.') }}</td>
			<td>
                <a href="/karyawan1/tambah" class="btn btn-primary">Tambah Data</a>
				|
				<a href="/karyawan1/hapus" class="btn btn-danger" >Hapus Data</a>

			</td>
		</tr>
		@endforeach
	</table>
    {{ $karyawan1->links()  }}

@endsection

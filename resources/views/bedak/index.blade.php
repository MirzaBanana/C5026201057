@extends('layout.bahagia')

@section('title', 'DAFTAR BEDAK')

@section('konten')

    <h3> DAFTAR BEDAK </h3>
	<a href="/bedak/tambah" class="btn btn-primary">  + Tambah Bedak Baru</a>

	<br/>
	<br/>
<div class="col-sm-8container" align='center'>
    <p>Cari Data Bedak Berdasarkan Nama:</p>
	<form action="/bedak/cari" method="GET">
		<input class="form-control" type="text" name="cari" placeholder="Cari Bedak ..." value="{{ old('cari') }}">
		<input class="form-control btn-primary" type="submit" value="CARI">
	</form>
</div>
	<table class="table table-success table-striped">
		<tr>
            <th>Merk</th>
			<th>Stok Bedak</th>
			<th>Ketersediaan</th>
			<th>Opsi</th>
		</tr>
		@foreach($bedak as $p)
		<tr>
            <td>{{ $loop->iteration }}</td>
			<td>{{ $p->merkbedak }}</td>
			<td>{{ $p->stockbedak }}</td>
            <td>{{ $p->tersedia }}</td>
			<td>
                <a href="/bedak/detail/{{ $p->kodebedak }}" class="btn btn-default btn-sm" >View Detail</a>
				<a href="/bedak/edit/{{ $p->kodebedak }}" class="btn btn-warning" >Edit</a>
				|
				<a href="/bedak/hapus/{{ $p->kodebedak }}" class="btn btn-danger" >Hapus</a>

			</td>
		</tr>
		@endforeach
	</table>
    {{ $bedak->links()  }}

@endsection

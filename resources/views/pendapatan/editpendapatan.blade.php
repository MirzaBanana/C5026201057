<!DOCTYPE html>
<html>
<head>
	<title>Edit pendapatan karyawan sedot wc</title>
</head>
<body>Edit pendapatan karyawan sedot wc

	<h2>Edit pendapatan karyawan sedot wc</h2>
	<h3>Edit Pendapatan</h3>

	<a href="/pendapatan"> Kembali</a>

	<br/>
	<br/>

	@foreach($pendapatan as $p)
	<form action="/pendapatan/update" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="id" value="{{ $p->ID }}"> <br/>
        IDPegawai <input type="number" name="IDPegawai" required="required" value="{{ $p->IDPegawai }}"> <br/>
		Bulan <input type="number" name="Bulan" required="required" value="{{ $p->Bulan }}"> <br/>
		Tahun <input type="text" maxlength="4" name="Tahun" required="required" value="{{ $p->Tahun }}" > <br/>
        Gaji <input type="number" name="Gaji" required="required" value="{{ $p->Gaji }}"> <br/>
        Tunjangan <input type="number" name="Tunjangan" required="required" value="{{ $p->Tunjangan }}"> <br/>
		<input type="submit" value="Simpan Data">
	</form>
	@endforeach


</body>
</html>

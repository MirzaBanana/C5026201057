<!DOCTYPE html>
<html>
<head>
	<title>Data Pendapatan Karyawan Perusahaan Sedot WC</title>
</head>
<body>

	<h2>Tambah Pendapatan Karyawan Perusahaan Sedot WC</a></h2>
	<h3>Tambah Pendapatan</h3>

	<a href="/pendapatan"> Kembali</a>

	<br/>
	<br/>

	<form action="/pendapatan/store" method="post">
		{{ csrf_field() }}
		IDPegawai <input type="number" name="nama" required="required"> <br/>
		Bulan <input type="number" name="bulan" required="required"> <br/>
		Tahun <input type="char" name="tahun" maxlength="4" required="required"> <br/>
        Gaji <input type="number" name="gaji" required="required"> <br/>
        Tunjangan <input type="number" name="tunjangan" required="required"> <br/>
		<input type="submit" value="Simpan Data">
	</form>

</body>
</html>

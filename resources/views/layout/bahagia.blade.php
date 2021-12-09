<!DOCTYPE html>
<html>

<head>
	<title>@yield('title')</title>
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
    <link href="http://cdn.rawgit.com/Eonasdan/bootstrap-datetimepicker/e8bddc60e73c1ec2475f827be36e1957af72e2ea/build/css/bootstrap-datetimepicker.css" rel="stylesheet">
    <script type="text/javascript" src="http://code.jquery.com/jquery-2.1.1.min.js"></script>
	<script type="text/javascript" src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment-with-locales.js"></script>
	<script src="http://cdn.rawgit.com/Eonasdan/bootstrap-datetimepicker/e8bddc60e73c1ec2475f827be36e1957af72e2ea/src/js/bootstrap-datetimepicker.js"></script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<style>
    body{
        background-color: rgb(255, 255, 255);
    }
.jumbotron{
        background-color: #55c078;

    }

</style>

<body>
<div class="jumbotron text-center" style="margin-bottom:0">
  <img src="layouo\image0.jpg" class="rounded" alt="foto pembuat">
  <h6>Mirza Aditya Badarudin</h6>
</div>
    <div class="container">
  <ul class="nav flex-column">
    <li>
      <a href="/pegawai">Daftar Pegawai Sedot WC</a>
    </li>
    <li>
      <a href="/absen">Absensi Pegawai Sedot WC</a>
    </li>
    <li>
      <a href="/pendapatan">Data Pendapatan Pegawai Sedot WC</a>
    </li>
    <li>
      <a href="#">Minggu Depan</a>
    </li>
    <li>
      <li><a href="#">Praktikum</a>
    </li>
  </ul>
</div>
    <div class="col-sm-8">
    @section('konten')
    @show
    </div>
    <div class="jumbotron text-center" style="margin-bottom:0">
  <h6>Copyrights Mirza Aditya Badarudin</h6>
  <h6>2021</h6>
</div>
</div>

</body>

</html>

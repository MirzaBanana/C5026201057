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
    body {
        background-color: #f2f2f2
    }
    .header{
        background-color: #a87aff;
        border-bottom: 5px solid black;

    }
    .footer{
        background-color: #a87aff;
        border-top: 2px solid black;
    }
</style>
<body>
<div class="header">
    <center><img src="imageo.jpg" class="mx-auto d-block">
            <h4> 5026201057 Mirza Aditya Badarudin </h4>
    </center>

</div>
<div class="container container m-2">
    <div class="col-sm-2">
        <h3 class="text-center">Menu</h3>
                    <h4 class="a">
                        <a  href="/pegawai">Pegawai</a> <br>
                        <a  href="/absen">Absen</a> <br>
                        <a  href="/pendapatan">Pendapatan</a> <br>
                        <a  href="/#">Minggu Depan</a> <br>
                        <a  href="/#">Praktikum</a> <br>
                    </h4>
    </div>
    <div class="col-sm-8">
    @section('konten')
    @show
    </div>
</div>
<footer>
<div class="footer">
    <center>
    <h5> Copyrights by Mirza Aditya Badarudin </h5>
    <h5> 2021 </h5>
    </center>
</footer>
</div>
</body>
</html>

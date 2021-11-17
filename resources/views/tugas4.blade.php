<!DOCTYPE html>
<html>

<head>
    <title>Kalkulator Volume Tabung</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

<style>
    body {
        background-color: rgb(224, 248, 255);
    }

    img {
        border-radius: 15px;
    }

    form {
        padding-left: 15px
    }

    h1{
        padding-left: 15px
    }

    p{
        padding-left: 15px
    }

</style>
</head>

<body>
    <center><h1>Kalkulator Volume Tabung</h1>    </center>
    <hr>
    <center> <img style="text-align:center;" src="ss/volumeTabung.png" width="400" height="200" alt=Rumus Volume Tabung></center>
    <p>Masukkan informasi yang dibutuhkan di kolom-kolom dibawah!</p>
    <form name="Kalkulator">
        <label for="fname">Jari-jari:
        </label>
        <br>
        <input type="number" id="jariJari" name="jariJari">
        <br>
        <br>
        <label for="lname">Tinggi:
        </label>
        <br>
        <input type="number" id="tinggi" name="tinggi">
        <br>
        <br>
        <input type="button" id="hitung" value="Hitung">
    </form>

    <p id="#volumeTabung"></p>

    <script language="javascript">

        $(document).ready(function () {

            $("#hitung").click(function () {
                var pi = 3.14;
                var jariJari = $("#jariJari").val()
                var tinggi = $("#tinggi").val()
                var Volume = pi * jariJari * jariJari * tinggi;
                alert("Volume Tabung: " + Volume);


            });
        });

    </script>

</body>

</html>

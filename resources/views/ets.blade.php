<!DOCTYPE html>
<html>
  <head>
    <title>Registration Form</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
    />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"></script>
  </head>
  <style>
    body {
        font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
    }
    body {
      margin-top: 50px;
      margin-bottom: 50px;
      margin-right: 40px;
      margin-left: 30px;
      padding: 10px;
      outline-style: solid;
      outline-color: rgb(0, 0, 0);
      outline-width: 2px;
    }
    p{
      margin-left: 15px;
      margin-top: 15px;
    }
    label {
      font-size: 24px;
    }
    #submit {
        background-color: #515dff;
        border-color: #515dff;
        font-size:24px;
        margin-top: 10px;
        width: 200px;

        color: rgb(255, 255, 255);
    }
    #reset {
        border-color: rgb(15, 255, 47);
        font-size:24px;
        background-color:rgb(15, 255, 47);
        margin-top: 10px;
        width: 200px;

        color: #000000;
    }


  </style>
  <body>
<p>Mirza Aditya Badarudin</p>
<p>Mirza</p>
<p>5026201057</p>
<center><h2>Form Input Peminjaman Buku</h2></center>
<br>
<br>
<div class="container">
      <div class="row">
       <div class="col-lg-8 m-auto d-block">
          <form id="inputForm" action="https://www.google.com/?hl=id">
            <div class="form-group row">
                <label class="col-sm-5" for="namaBuku">Judul Buku </label>
                <div class="col-sm-1"><h6>:</h6></div>
                <div class="col-6">
                    <input
                type="text"
                required
                id="judul"
                name="judul"
                class="form-control"
                minlength="10"
                title="Minimum 10 characters"
                pattern="[a-zA-Z0-9]+"
              />
                </div>
            </div>
           <div class="form-group row">
                <label class="col-sm-5" for="bookNo">Nomor Buku </label>
                <div class="col-sm-1"><h6>:</h6></div>
                <div class="col-sm-6">
                    <input
                    type="text"
                required
                id="nomorBuku"
                minlength="5"
                maxlength="5"
                pattern="[0-9]*"
                class="form-control"
                title="Must contain 7 numbers or more"
                name="nomorBuku">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-5" for="sel1">Jenis Peminjaman  </label>
                <div class="col-sm-1"><h6>:</h6></div>
                <div class="col-sm-6">
                    <select class="form-control" id="sel1" required>
                <option selected value=""></option>
                <option>Biasa</option>
                <option>Kilat</option>
                <option>Lama</option>
              </select>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-5" for="tanggal">Tanggal Peminjaman </label>
                <div class="col-sm-1"><h6>:</h6></div>
                <div class="col-sm-6">
                    <input
                type="date"
                class="form-control"
                id="date"
                name="date"
                required>
                </div>
            </div>
            <span style="display: inline-block;
            margin-left: 110px;">
            </span>
            <div class="row mb-5">
               <div class="col-sm-6 text-center ">
                        <button type="submit"  id="submit" placeholder="Submit">Submit</button>
                    </div>
                    <div class="col-sm-6 text-center  ">
                      <button type="reset"  id="reset" placeholder="Reset">Reset</button>
                    </div>

            </div>

            </form>
            </div>
            </div>
            </div>
            </div>

  </body>
  </html>

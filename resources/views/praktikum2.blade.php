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
    #registrationForm {
      margin-top: 50px;
      margin-bottom: 50px;
      margin-right: 40px;
      margin-left: 30px;
      padding: 10px;
      outline-style: solid;
      outline-color: rgb(131, 131, 131);
      outline-width: 5px;
    }
    body {
      background-color: #f1f1f1e8;
      font-family: Verdana, Geneva, Tahoma, sans-serif;
    }
    #kirim {
      padding: 11px;
      border-radius: 5px;
      text-decoration-color: #f2f2f2;
      background-color: #0400ff;
    }
    #kirim:hover {
      padding: 11px;
      border-radius: 5px;
      border-color: #f2f2f2;
      text-decoration-color: #ffffff;
      background-color: #0400ffbb;
    }
    #ulang {
      padding: 11px;
      border-radius: 5px;
      text-decoration-color: #000000;
      text-align: center;
      background-color: #d1d1d1;
    }
    #ulang:hover {
      padding: 11px;
      border-radius: 5px;
      border-color: #f2f2f2;
      text-decoration-color: #000000;
      text-align: center;
      background-color: #d6d5d5d7;
    }
  </style>
  <body>
    <center><h1>REGISTRATION FORM</h1></center>

    <div class="container">
      <div class="row">
        <div class="col-12">
          <form id="registrationForm" action="https://www.google.com/?hl=id">
            <div class="form-group">
              <label for="nama"><b>Name: </b> </label>
              <br />
              <input
                type="text"
                required
                id="nama"
                name="nama"
                class="form-control"
                placeholder="Name"
                title="Alphabet only"
                pattern="[a-zA-Z]+"
              />
            </div>
            <div class="form-group">
              <label for="alamat"><b>Address:</b> </label>
              <br />
              <input
                type="text"
                required
                id="alamat"
                name="alamat"
                placeholder="Address"
                class="form-control"
              />
            </div>
            <div class="form-group">
              <label for="surel"><b>Email Address:</b> </label>
              <br />
              <input
                type="email"
                class="form-control"
                id="email"
                placeholder="Email"
                pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$"
                title="Must be a valid email (Required)"
                name="email"
                required
              />
            </div>
            <div class="form-group">
              <label for="pwd"><b>Password:</b></label>
              <br />
              <input
                type="password"
                required
                id="pwd"
                name="pwd"
                minlength="8"
                maxlength="16"
                class="form-control"
                placeholder="Password"
                title="Must contain at least 8 to 16 characters"
              />
            </div>
            <div class="form-group">
              <label for="telpon"><b>Telephone:</b> </label>
              <br />
              <input
                type="text"
                required
                id="telpon"
                minlength="7"
                placeholder="Telephone"
                pattern="[0-9]*"
                class="form-control"
                title="Must contain 7 numbers or more"
                name="telpon"
              />
            </div>
            <div class="form-group">
              <label for="sel1"><b>Select your Course</b></label>
              <select class="form-control" id="sel1" required>
                <option selected value=""></option>
                <option>BTECH</option>
                <option>BBA</option>
                <option>BCA</option>
                <option>B COM</option>
                <option>GEEKFORGEEKS</option>
              </select>
            </div>
            <div class="form-group">
              <label for="kodePos"><b>ZIP Code:</b> </label>
              <br />
              <input
                type="text"
                required
                id="kodePos"
                minlength="6"
                placeholder="ZIP Code"
                pattern="[0-9]*"
                class="form-control"
                title="Numerical only, consist of 6 characters or more"
                name="kodePos"
              />
            </div>

            <br />
            <br />
            <div class="form-group">
              <input
                type="reset"
                class="btn btn-block"
                id="ulang"
                placeholder="Reset"
              />
            </div>
            <div class="form-group">
              <input
                type="submit"
                class="btn btn-primary btn-block"
                id="kirim"
                placeholder="Sent"
              />
            </div>
          </form>
        </div>
      </div>
    </div>
    <script>
      $(document).ready(function () {
        $("form").submit(function () {
          alert("All data that is submitted will be kept secret");
        });
      });
    </script>
  </body>
</html>

<!DOCTYPE html>
<html>
    <style>
        .error {color: #FF0000;}
    </style>
  <body>
    <center><h1>Kalkulator Volume Tabung</h1></center>
    <hr />
    <center>
      <img
        style="text-align: center"
        src="ss/volumeTabung.png"
        width="400"
        height="200"
        alt="Rumus Volume Tabung"

      />
    </center>
    <p>Masukkan informasi yang dibutuhkan di kolom-kolom dibawah!</p>
    <?php
     $jariJariErr = $tinggiErr = "";
   $jariJari = $tinggi = "";

   if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["jariJari"])) {
    $jariJariErr = "This field is required";
  } else {
    $jariJari = test_input($_POST["jariJari]);
    // check if jariJari only contains numbers
    if (!preg_match("/^[0-9]*$/",$jariJari)) {
      $jariJariErr = "Only numbers allowed";
    }
  }

  if (empty($_POST["tinggi"])) {
    $tinggiErr = "Tinggi is required";
  } else {
    $tinggi = test_input($_POST["tinggi"]);
    // check if tinggi only contains numbers
    if (!filter_var($tinggi, FILTER_VALIDATE_TINGGI)) {
      $emailErr = "Only numbers allowed";
    }
  }

  function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
   ?>

    <p><span class="error">* required field</span></p>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>
    Jari-jari: <input type="number" name="jariJari" value="<?php echo $jariJari;?>" />
    <span class="error"
      >*
      <?php echo $jariJariErr;?></span
    >
    <br /><br />
    Tinggi: <input type="number" name="tinggi" value="<?php echo $tinggi;?>" />
    <span class="error"
      >*
      <?php echo $tinggiErr;?></span
    >
    <br /><br />
   <input type="submit" name="submit" value="Submit">
</form>

<?php
<?php
echo "<h2>Your Input:</h2>";
echo $jariJari;
echo "<br>";
echo $tinggi;
echo "<br>";
?>

  </body>
</html>

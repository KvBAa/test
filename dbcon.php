<?php
$con = mysqli_connect("localhost","root","","2c_pawlowski_ksiegarnia");

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
?>

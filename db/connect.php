<?php
  $servername = "localhost";
  $username = "phpmyadmin";
  $password = "26264605050";
  $dbname = "bd_lab02";

  // Create connection
  $conn = mysqli_connect($servername, $username, $password, $dbname);
  // Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
?>

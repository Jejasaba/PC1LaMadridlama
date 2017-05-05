<?php
  $servername = "us-cdbr-iron-east-03.cleardb.net";
  $username = "b274da356beea4";
  $password = "99e94da4";
  $dbname = "ad_7900928d6d5bc55";
  // Create connection
  $conn = new mysqli($servername, $username, $password, $dbname);
  // Check connection
  if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
  } ?>
  
  

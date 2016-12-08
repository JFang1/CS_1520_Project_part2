<?php
  ########## MySql details (Replace with yours) #############
  $username = "root"; //mysql username
  $password = ""; //mysql password
  $hostname = "localhost"; //hostname
  $databasename = 'my_website_form'; //databasename

  //connect to database
  $mysqli = new mysqli($hostname, $username, $password, $databasename);

  if ($mysqli->connect_errno) {
    echo "Connect failed: ".$mysqli->connect_error;
    exit();
}

?>

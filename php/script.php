<?php
  /* REFERENCES:
   *
   * For how to integrate form submission using PHP, AJAX, and mysqli:
   * https://www.sanwebe.com/2012/04/ajax-add-delete-sql-records-jquery-php
   *
   * For debugging:
   *  http://php.net/manual/en/mysqli.error.php
   *  http://stackoverflow.com/questions/13040334/mysqli-query-not-returning-anything
   */

  // Fetching data from $_POST
  $nameP = $_POST['name'];
  $emailP = $_POST['email'];
  $subjectP = $_POST['subject'];
  $messageP = $_POST['message'];

  $username = "root";
  $password = "";
  $address = "localhost";
  $database = 'my_website_form';

  // creating instance of mysqli connection
  $mysqli = new mysqli($address, $username, $password, $database);
  if ($mysqli->connect_errno) {
    echo "Connection failed: ".$mysqli->connect_error;
    exit();
  }

  if (isset($_POST['name'])) {
    $query = "INSERT INTO messages (`Sender`, `Email address`, `Subject`, `Message`) VALUES ('$nameP', '$emailP', '$subjectP', '$messageP')";
    // Apparently, using backticks (`) in a query will help prevent errors in case one of the column names is a keyword: http://stackoverflow.com/questions/27782435/you-have-an-error-in-your-sql-syntax-mariadb

    $result = $mysqli->query($query);
    if (!$result) {
      echo "Query error: ".$query.$mysqli->error;
    }
    else {
      echo "Form submitted succesfully!";
    }
  }

  $mysqli->close();
?>

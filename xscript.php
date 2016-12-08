<?php
  // Referenced http://stackoverflow.com/questions/5143191/inserting-into-mysql-from-php-jquery-ajax
<script>console.log('In the script.php file!');</script>

  function post($key) {
      if (isset($_POST[$key])) {
          console.log('line 5');
          return $_POST[$key];
      }
      return false;
  }

  // setup the database connect
  $cxn = mysql_connect('localhost', 'root', '');
  if (!$cxn) {
      exit;
  }
  mysql_select_db('my_website_form', $cxn);

  // check if we can get hold of the form field
  if (!post('message-subject')) {
    alert("Error: php line 20");
    exit;
  }

  // let make sure we escape the data
  $name = mysql_real_escape_string(post('contact-name'), $cxn);
  // $email = mysql_real_escape_string(post('email-address'), $cxn);
  // $subject = mysql_real_escape_string(post('message-subject'), $cxn);
  // $message = mysql_real_escape_string(post('message-area'), $cxn);


  console.log($name);


  // lets setup our insert query
//  $sql = sprintf("INSERT INTO messages (sender, email address, subject, message) VALUES (%s, %s, %s, %s)", $name, $email, $subject, $message);
  $sql = sprintf("INSERT INTO messages (sender) VALUES (%s)", $name);
  alert($sql);

  // lets run our query
  $result = mysql_query($sql, $cxn);

  // setup our response "object"
  $resp = new stdClass();
  $resp->success = false;
  if($result) {
      $resp->success = true;
  }

  print json_encode($resp);
?>

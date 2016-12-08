<?php
// Fetching Values From URL
$nameP = $_POST['name'];
$emailP = $_POST['email'];
$subjectP = $_POST['subject'];
$messageP = $_POST['message'];
$connection = mysql_connect("localhost", "root", ""); // Establishing Connection with Server..
$db = mysql_select_db("my_website_form", $connection); // Selecting Database
if (isset($_POST['name'])) {
$query = mysql_query("insert into messages (name, email, subject, messsage) values ('$nameP', '$emailP', '$subjectP','$messageP')");
echo "Form Submitted succesfully";
}
mysql_close($connection); // Connection Closed
?>

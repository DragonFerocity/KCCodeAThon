<?php
$email = $_POST["email"]; //Get the email variable from the form on the index.php
$password = $_POST["password"]; //Get the password variable from the form on the index.php

$connection = new mysqli("localhost", "dragon34_kcuser", "p@ssw0rd", "dragon34_kc"); //Connect to a database
//                        Hostname,   username,           password,   database_name
$result = $connection->query("SELECT Name FROM Volunteers WHERE Email=\"$email\" AND Password=\"$password\"");
//Use the $connection object to query the database for user information.
//SELECT the Name row FROM the Volunteers table WHERE email is equal to the entered email AND password is equal to the entered password

if ($result->num_rows == 0) {
  //If the number of results returned from the query is 0, that means the user is logging in as an organization
  $result = $connection->query("SELECT Name FROM Organizations WHERE Email=\"$email\" AND Password=\"$password\"");
  //Query the database but this time look in the Organizations table
  $rows = $result->fetch_assoc();
  //Now fetch an associative array containing the returned results
}
else {
  $rows = $result->fetch_assoc();
  //If a volunteer is signing in, fetch an associative array containing the returned results
}
setcookie("email", $email, time() + 60*60*24*30, "/");
//Set a cookie so that we know the user is logged in
?>
<script>
location.href = "/";
//Redirect to the main page.
</script>
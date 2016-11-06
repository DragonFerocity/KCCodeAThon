<?php
  $error = "";
  $success = true;

  if (isset($_POST["age"])) {
    $volunteer = true;
    $name = $_POST["first"] . " " . $_POST["last"];
    $age = $_POST["age"];
    $gender = ($_POST["gender"] != "Male" ? $_POST["gender"] != "Female" ? "U" : "F" : "M");
    $location = $_POST["AreaCodeV"];
  }
  else {
    $volunteer = false;
    $name = $_POST["first"];
    $phone_ext = $_POST["phoneext"];
    $location = $_POST["AreaCodeO"];
  }
  $email = $_POST["email"];
  $phone = $_POST["phone"];
  $password = $_POST["password"];

  $connection = new mysqli("localhost", "dragon34_kcuser", "p@ssw0rd", "dragon34_kc");
  if ($volunteer) {
    if (!$connection->query("INSERT INTO Volunteers (Name, Age, Gender, Location, Email, Phone, Password) VALUES (\"$name\", \"$age\", \"$gender\", \"$location\", \"$email\", \"$phone\", \"$password\")")) {
      $error = $connection->error;
      $success = false;
    }
  }
  else {
    if (!$connection->query("INSERT INTO Organizations (Name, Location, Email, Phone, Phone_Ext, Password) VALUES (\"$name\", \"$location\", \"$email\", \"$phone\", \"$phone_ext\", \"$password\")")) {
      $error = $connection->error;
      $success = false;
    }
  }
  echo $error;
?>
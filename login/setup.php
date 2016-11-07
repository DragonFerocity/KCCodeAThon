<?php
  $error = "";
  $success = true;

  if ($_POST["age"] != "") {
    $volunteer = true;
    $name = $_POST["firstV"] . " " . $_POST["last"];
    $age = $_POST["age"];
    $gender = ($_POST["gender"] != "Male" ? $_POST["gender"] != "Female" ? "U" : "F" : "M");
    $location = $_POST["AreaCodeV"];
    $password = $_POST["passwordV"];
    $email = $_POST["emailV"];
    $phone = $_POST["phoneV"];
  }
  else {
    $volunteer = false;
    $name = $_POST["firstO"];
    $phone_ext = $_POST["phoneext"];
    $location = $_POST["AreaCodeO"];
    $password = $_POST["passwordO"];
    $email = $_POST["emailO"];
    $phone = $_POST["phoneO"];
  }

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
  $connection->close();
  echo $error;
?>

<!DOCTYPE html>
<html>
<head>
  <title>KC Code-A-Thon</title>
  <?php include("../parts/header.php"); ?>
</head>
<body>
  <section id="content-top-margin">
    <h2 class="center-text">Account created successfully!</h2>
  </section>
</body>
</html>
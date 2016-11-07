<?php
$connection = new mysqli("localhost", "dragon34_kcuser", "p@ssw0rd", "dragon34_kc"); //Connect to a database
//                        Hostname,   username,           password,   database_name
$url = $_SERVER["REQUEST_URI"];
preg_match("/\?(.*)/", $url, $matches);
$Name = urldecode($matches[1]);
$result = $connection->query("SELECT Age, Gender, Location, Email, Phone FROM Volunteers WHERE Name=\"$Name\"");
//Use the $connection object to query the database for user information.

$rows = $result->fetch_assoc();
//If a volunteer is signing in, fetch an associative array containing the returned results

$Age = $rows["Age"];
$Gender = $rows["Gender"];
$Location = $rows["Location"];
$Email = $rows["Email"];
$Phone = $rows["Phone"];
?>

<!DOCTYPE html>
<html lang = "en">
<head>
  <title>KC Code-A-Thon</title>
  <?php
  include "../parts/header.php";
  ?>
</head>
<body>
  <section id="content-top-margin">
    <table id="edit-user-info" class="table-outer">
      <tr>
        <td id="profile-pic" class="table-cell-default" style="background-image: url('default/default-profile-pic.png');"></td>
        <td class="user-info" class="table-cell-default" rowspan="2">
          <table id="user-info-table">
            <tr>
              <th colspan="2" class="bottom-border"><?php echo $Name; ?></th>
            </tr>
            <tr>
              <td class="user-info-text">Home Location</td>
              <td><?php echo $Location; ?></td>
            </tr>
            <tr>
              <td class="user-info-text">Age</td>
              <td><?php echo $Age; ?></td>
            </tr>
            <tr>
              <td class="user-info-text">Gender</td>
              <td><?php echo $Gender; ?></td>
            </tr>
            <tr>
              <td class="user-info-text">Email</td>
              <td><?php echo $Email; ?></td>
            </tr>
            <tr>
              <th colspan="2" class="bottom-border">My Availability</th>
            </tr>
            <tr>
              <td class="user-info-text">Sunday</td>
              <td></td>
            </tr>
            <tr>
              <td class="user-info-text">Monday</td>
              <td></td>
            </tr>
            <tr>
              <td class="user-info-text">Tuesday</td>
              <td></td>
            </tr>
            <tr>
              <td class="user-info-text">Wednesday</td>
              <td></td>
            </tr>
            <tr>
              <td class="user-info-text">Thursday</td>
              <td></td>
            </tr>
            <tr>
              <td class="user-info-text">Friday</td>
              <td></td>
            </tr>
            <tr>
              <td class="user-info-text">Saturday</td>
              <td></td>
            </tr>
            <tr>
              <th colspan="2" class="bottom-border">My Skills</th>
            </tr>
            <tr>
              <td class="user-info-text">Skills</td>
              <td>
                <ul>
                  <li>Good at doing stuff</li>
                  <li>Best chess player</li>
                  <li>Dabbing</li>
                  <li>Mad skillz</li>
                  <li>Pro DJ</li>
                  <li>Swagger</li>
                </ul>
              </td>
            </tr>
          </table>
        </td>
      </tr>
      <tr>
        <td id="misc-info" class="table-cell-default">
          <div>
            <a href = "user_edit_profile.php" type = "button" class = "btn btn-primary">
              <span class = "glyphicon glyphicon-pencil"></span>
              Edit Profile
            </a>
          </div>
        </td>
      </tr>
    </table>
  </section>
</body>
</html>
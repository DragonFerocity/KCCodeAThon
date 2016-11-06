<!DOCTYPE html>
<html lang = "en">
<head>
  <title>KC Code-A-Thon</title>
  <?php include("../parts/header.php"); ?>
</head>
<body>
  <section id="content">
    <div class="top"></div>
    <div class="container">
      <div class="row">
        <div class = "col-md-offset-10 col-md-2 col-xs-offset-10 col-xs-2">
          <a href = "user_edit_profile.html" type = "button" class = "btn btn-primary">
            <span class = "glyphicon glyphicon-pencil"></span>
            Edit Profile
          </a>
        </div>
      </div>
      <div class = "row">
        <div class = "col-md-offset-8 col-md-4 col-xs-offset-8 col-xs-4">
          <h2>My Info</h2>
        </div>
      </div>
      <div class = "row">
        <div class="col-md-4 col-xs-4">
          <img src = "https://ih1.redbubble.net/image.214499180.8793/flat,800x800,075,f.jpg" 
          class = "img-square profile_pic" alt = "dat boi" id="pic">
        </div>
        <div class="col-md-offset-4 col-md-8 col-xs-offset-4 col-xs-8">
          <table>
            <tr>
              <td>First Name:</td>
              <td>Enter First Name</td>
              <td>Last Name:</td>
              <td>Enter Last Name</td>
            </tr>
            <tr>
              <td>Location:</td>
              <td>Enter Location</td>
              <td>Age:</td>
              <td>Enter Age</td>
            </tr>
            <tr>
              <td>Gender:</td>
              <td>Enter Gender</td>
              <td>Email:</td>
              <td>Enter Email</td>
            </tr>
          </table>
        </div>
      </div>
      <div class = "row">
        <div class = "col-md-offset-8 col-md-4 col-xs-offset-8 col-xs-4">
          <h2>My Availability</h2>
        </div>
      </div>
      <div class = "row">
        <div class = "col-md-offset-4 col-md-8 col-xs-offset-4 col-xs-8">
          <table>
            <tr>
              <td>Monday</td>
              <td>Tuesday</td>
              <td>Wednesday</td>
              <td>Thursday</td>
              <td>Friday</td>
              <td>Saturday</td>
              <td>Sunday</td>
            </tr>
            <tr>
              <td>Availability Put Here</td>
              <td>Availability Put Here</td>
              <td>Availability Put Here</td>
              <td>Availability Put Here</td>
              <td>Availability Put Here</td>
              <td>Availability Put Here</td>
              <td>Availability Put Here</td>
            </tr>
          </table>
        </div>
      </div>
      <div class = "row">
        <div class = "col-md-offset-8 col-md-4 col-xs-offset-8 col-xs-4">
          <h2>My Skills</h2>
        </div>
      </div>
      <div class = "row">
        <div class = "col-md-offset-4 col-md-8 col-xs-offset-4 col-xs-8">
          <ol>
            <li>Place Skill Here.</li>
            <li>Place Skill Here.</li>
            <li>Place Skill Here.</li>
            <li>Place Skill Here.</li>
            <li>Place Skill Here.</li>
            <li>Place Skill Here.</li>
          </ol>
        </div>
      </div>
    </div>
  </section>
</body>
</html>
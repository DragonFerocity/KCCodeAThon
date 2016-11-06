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
    <section id="account-type" class="table-outer center-text" style="width: 60%;">
      <h2>Choose your account type</h2>
      <button class="btn btn-primary btn-md" type="button" style="display: inline; width: 250px;">Volunteer</button>
      <button class="btn btn-primary btn-md" type="button" style="display: inline; width: 250px;">Organization</button>
      <br/><br/>
    </section>
    <br/><br/>
    <section id="user-information" class="table-outer center-text" style="width: 60%;">
      <h2 class="bottom-border">Personal Information</h2>
        <table class="table-cell-default" style="margin: 0px auto;">
          <tr>
            <td>First Name:</td>
            <td><input type="text" placeholder="John" id="fname"/></td>
          </tr>
          <tr>
            <td>Last Name:</td>
            <td><input type="text" placeholder="Doe" id="lname"/></td>
          </tr>
          <tr>
            <td>Age:</td>
            <td><input type="text" placeholder="23" id="lname"/></td>
          </tr>
          <tr>
            <td>Gender:</td>
            <td>
              <select>
                <option>Male</option>
                <option>Female</option>
                <option>Prefer not to Specify</option>
              </select>
            </td>
          </tr>
          <tr>
            <td>Phone Number:</td>
            <td><input type="tel" placeholder="23" id="lname" maxlength="10" max="9"/></td>
          </tr>
          <tr>
            <td>Email:</td>
            <td><input type="email" placeholder="this.email@place.here" id="lname"/></td>
          </tr>
        </table>
      <br/><br/>
    </section>
  </section>
</body>
</html>
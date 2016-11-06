<!DOCTYPE html>
<html lang = "en">
<head>
  <title>KC Code-A-Thon</title>
  <?php
  include "../parts/header.php";
  ?>
  <script>
    $(function() {
      $("#volunteer-btn").click(function() {
        $("#user-information").slideDown();
        $("#org-information").slideUp();
      });
      $("#org-btn").click(function() {
        $("#user-information").slideUp();
        $("#org-information").slideDown();
      });
    });
  </script>
</head>
<body>
  <section id="content-top-margin">
    <section id="account-type" class="table-outer center-text" style="width: 60%;">
      <h2>Choose your account type</h2>
      <button class="btn btn-primary btn-md" type="button" style="display: inline; width: 250px;" id="volunteer-btn">Volunteer</button>
      <button class="btn btn-primary btn-md" type="button" style="display: inline; width: 250px;" id="org-btn">Organization</button>
      <br/><br/>
    </section>
    <br/><br/>
    <form id="account-form" action="setup.php" method="post">
      <section id="user-information" class="table-outer center-text" style="width: 60%; display: none;">
        <h2 class="bottom-border">Personal Information</h2>
        <br/>
          <table class="table-cell-default" style="margin: 0px auto;">
            <tr>
              <td>First Name:</td>
              <td><input type="text" form="account-form" placeholder="John" name="first"/></td>
            </tr>
            <tr>
              <td>Last Name:</td>
              <td><input type="text" form="account-form" placeholder="Doe" name="last"/></td>
            </tr>
            <tr>
              <td>Password:</td>
              <td><input type="password" form="account-form" placeholder="Password" name="password"/></td>
            </tr>
            <tr>
              <td>Age:</td>
              <td><input type="text" form="account-form" placeholder="23" name="age"/></td>
            </tr>
            <tr>
              <td>Home Area Code:</td>
              <td><input type="number" form="account-form" placeholder="65421" name="AreaCodeV" maxlength="5" max="99999"/></td>
            </tr>
            <tr>
              <td>Gender:</td>
              <td>
                <select id="gender" form="account-form" name="gender">
                  <option>Male</option>
                  <option>Female</option>
                  <option>Prefer not to Specify</option>
                </select>
              </td>
            </tr>
            <tr>
              <td>Phone Number:</td>
              <td><input type="tel" form="account-form" placeholder="1234567890" name="phone" maxlength="10" max="9"/></td>
            </tr>
            <tr>
              <td>Email:</td>
              <td><input type="email" form="account-form" placeholder="this.email@place.here" name="email"/></td>
            </tr>
          </table>
        <br/>
        <input type="submit" form="account-form" value="Sign Up!"/>
      </section>
      <section id="org-information" class="table-outer center-text" style="width: 60%; display: none;">
        <h2 class="bottom-border">Organization Information</h2>
        <br/>
          <table class="table-cell-default" style="margin: 0px auto;">
            <tr>
              <td>Name:</td>
              <td><input type="text" form="account-form" placeholder="Avila Gardens Inc." name="fname"/></td>
            </tr>
            <tr>
              <td>Organization Area Code:</td>
              <td><input type="text" form="account-form" placeholder="65421" name="AreaCodeO" maxlength="5" max="99999"/></td>
            </tr>
            <tr>
              <td>Phone Number:</td>
              <td><input type="tel" form="account-form" placeholder="1234567890" name="lname" maxlength="10" max="9"/></td>
            </tr>
            <tr>
              <td>Phone Number Ext:</td>
              <td><input type="tel" form="account-form" placeholder="234" name="phoneext" maxlength="3" max="9"/></td>
            </tr>
            <tr>
              <td>Email:</td>
              <td><input type="email" form="account-form" placeholder="this.email@place.here" name="email"/></td>
            </tr>
          </table>
        <br/>
        <input type="submit" form="account-form" value="Sign Up!"/>
      </section>
    </form>
  </section>
</body>
</html>
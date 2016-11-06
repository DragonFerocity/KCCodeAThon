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
    <form id="account-form" action="setup" method="post">
      <section id="user-information" class="table-outer center-text" style="width: 60%; display: none;">
        <h2 class="bottom-border">Personal Information</h2>
        <br/>
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
              <td><input type="text" placeholder="23" id="aged"/></td>
            </tr>
            <tr>
              <td>Home Area Code:</td>
              <td><input type="text" placeholder="65421" id="area-code" maxlength="5" max="9"/></td>
            </tr>
            <tr>
              <td>Gender:</td>
              <td>
                <select id="gender">
                  <option>Male</option>
                  <option>Female</option>
                  <option>Prefer not to Specify</option>
                </select>
              </td>
            </tr>
            <tr>
              <td>Phone Number:</td>
              <td><input type="tel" placeholder="1234567890" id="phone" maxlength="10" max="9"/></td>
            </tr>
            <tr>
              <td>Email:</td>
              <td><input type="email" placeholder="this.email@place.here" id="email"/></td>
            </tr>
          </table>
        <br/>
      </section>
      <section id="org-information" class="table-outer center-text" style="width: 60%; display: none;">
        <h2 class="bottom-border">Organization Information</h2>
        <br/>
          <table class="table-cell-default" style="margin: 0px auto;">
            <tr>
              <td>Name:</td>
              <td><input type="text" placeholder="John" id="fname"/></td>
            </tr>
            <tr>
              <td>Organization Area Code:</td>
              <td><input type="text" placeholder="65421" id="area-code" maxlength="5" max="9"/></td>
            </tr>
            <tr>
              <td>Phone Number:</td>
              <td><input type="tel" placeholder="1234567890" id="lname" maxlength="10" max="9"/></td>
            </tr>
            <tr>
              <td>Phone Number Ext:</td>
              <td><input type="tel" placeholder="234" id="lname" maxlength="3" max="9"/></td>
            </tr>
            <tr>
              <td>Email:</td>
              <td><input type="email" placeholder="this.email@place.here" id="lname"/></td>
            </tr>
          </table>
        <br/>
      </section>
    </form>
  </section>
</body>
</html>
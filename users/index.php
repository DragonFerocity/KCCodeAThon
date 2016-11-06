<!DOCTYPE html>
<html lang = "en">
<head>
  <title>KC Code-A-Thon</title>
  <?php include("../parts/header.php?2"); ?>
</head>
<body>
  <section id="content-top-margin">
    <table id="edit-user-info" class="table-outer">
      <tr>
        <td id="profile-pic" class="table-cell-default" style="background-image: url('default/default-profile-pic.png');"></td>
        <td class="user-info" class="table-cell-default" rowspan="2">
          <table id="user-info-table">
            <tr>
              <th colspan="2">Eli Gaitley</th>
            </tr>
            <tr>
              <td class="user-info-text">Home Location</td>
              <td>Rolla, MO</td>
            </tr>
            <tr>
              <td class="user-info-text">Age</td>
              <td>21</td>
            </tr>
            <tr>
              <td class="user-info-text">Gender</td>
              <td>Male</td>
            </tr>
            <tr>
              <td class="user-info-text">Email</td>
              <td>email@address.here</td>
            </tr>
            <tr>
              <th colspan="2">My Availability</th>
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
              <th colspan="2">My Skills</th>
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
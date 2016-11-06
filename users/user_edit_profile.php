<!-- Programmers: Charles Gaitley And Gideon Walker        Date: 11/5/2016
     File: user_edit_profile.html                          Purpose: KC CodaThon
     Description: This File Contains The Structure Of User Information. -->

<!DOCTYPE html>
<html lang ="en">
  <head>
	  <title>Edit Profile</title>
	  <?php include("../parts/header.php"); ?>
  </head>

  <body>
    <section id="content-top-margin">
      <form>
        <table id="edit-user-info">
          <tr>
            <td id="profile-pic"></td>
            <td class="user-info" rowspan="2">
              <table id="user-info-table">
                <tr>
                  <th colspan="2">About Me</th>
                </tr>
                <tr>
                  <td class="user-info-text">First Name</td>
                  <td><input type="text" name="fname"/></td>
                </tr>
                <tr>
                  <td class="user-info-text">Last Name</td>
                  <td><input type="text" name="fname"/></td>
                </tr>
                <tr>
                  <td class="user-info-text">City</td>
                  <td><input type="text" name="fname"/></td>
                </tr>
                <tr>
                  <td class="user-info-text">State</td>
                  <td><input type="text" name="fname"/></td>
                </tr>
                <tr>
                  <td class="user-info-text">Age</td>
                  <td><input type="text" name="fname"/></td>
                </tr>
                <tr>
                  <td class="user-info-text">Gender</td>
                  <td><select>
                        <option>Male</option>
                        <option>Female</option>
                        <option>Prefer not to Specify</option>
                  </td>
                </tr>
                <tr>
                  <td class="user-info-text">Email</td>
                  <td><input type="text" name="fname"/></td>
                </tr>
                <tr>
                  <th colspan="2">My Availability</th>
                </tr>
                <tr>
                  <td class="user-info-text">Sunday</td>
                  <td><input type="time" name="mon_from"> to <input type="time" name="mon_to"></td>
                </tr>
                <tr>
                  <td class="user-info-text">Monday</td>
                  <td><input type="time" name="mon_from"> to <input type="time" name="mon_to"></td>
                </tr>
                <tr>
                  <td class="user-info-text">Tuesday</td>
                  <td><input type="time" name="mon_from"> to <input type="time" name="mon_to"></td>
                </tr>
                <tr>
                  <td class="user-info-text">Wednesday</td>
                  <td><input type="time" name="mon_from"> to <input type="time" name="mon_to"></td>
                </tr>
                <tr>
                  <td class="user-info-text">Thursday</td>
                  <td><input type="time" name="mon_from"> to <input type="time" name="mon_to"></td>
                </tr>
                <tr>
                  <td class="user-info-text">Friday</td>
                  <td><input type="time" name="mon_from"> to <input type="time" name="mon_to"></td>
                </tr>
                <tr>
                  <td class="user-info-text">Saturday</td>
                  <td><input type="time" name="mon_from"> to <input type="time" name="mon_to"></td>
                </tr>
                <tr>
                  <th colspan="2">My Skills</th>
                </tr>
                <tr>
                  <td class="user-info-text">Skills</td>
                  <td><input type="text" name="skill_1"></td>
                </tr>
              </table>
            </td>
          </tr>
          <tr>
            <td id="misc-info">MORE INFO</td>
          </tr>
        </table>
      </form>
    </section>
  </body>
</html>
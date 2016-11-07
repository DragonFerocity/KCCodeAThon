<!-- Programmers: Charles Gaitley, Ryan Andrews     Date: 11/4/2016
     File: OrgPage.html                             Purpose: KC Codathon
     Description: This File Contains The Structure Of The Organization
                  Profile Page.
-->

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>KC Code-A-Thon</title>
    <?php
    $color = "white";
    include "../parts/header.php";
    ?>
  </head>

  <body>
    <section id="content">
      <div id="organization-header" style="background-image: url('../Pictures/MST.jpg')"></div>

      <div class="header-text" style="top: calc(100% - 100px - 48px);">
        <h1>Missouri S&amp;T</h1>
      </div>

      <div class="menu" style="top: calc(100% - 100px);">
        <div class="container">
          <div class="row">
            <div class="col-md-3 col-xs-3">
              <button class="btn btn-default btn-lg" type="button">Schedule</button>
            </div>
            <div class="col-md-3 col-xs-3">
              <button class="btn btn-default btn-lg" type="button">About</button>
            </div>
            <div class="col-md-3 col-xs-3">
              <button class="btn btn-default btn-lg" type="button">Posts</button>
            </div>
            <div class="col-md-3 col-xs-3">
              <button class="btn btn-default btn-lg" type="button">Contact Info</button>
            </div>
          </div>
        </div>
      </div>

      <div class="rating_head">
        <h3>My Rating</h3>
      </div>

      <div class="rates">
        <div class="container">
          <div class="row">
            <div class="col-md-offset-1 col-md-2 col-xs-offset-1 col-xs-2">
              <a href="#" type="button" class="btn btn-secondary">
                <span class="glyphicon glyphicon-star-empty" aria-hidden="true"></span>
              </a>
            </div>
            <div class="col-md-2 col-xs-2">
              <a href="#" type="button" class="btn btn-secondary">
                <span class="glyphicon glyphicon-star-empty" aria-hidden="true"></span>
              </a>
            </div>
            <div class="col-md-2 col-xs-2">
              <a href="#" type="button" class="btn btn-secondary">
                <span class="glyphicon glyphicon-star-empty" aria-hidden="true"></span>
              </a>
            </div>
            <div class="col-md-2 col-xs-2">
              <a href="#" type="button" class="btn btn-secondary">
                <span class="glyphicon glyphicon-star-empty" aria-hidden="true"></span>
              </a>
            </div>
            <div class="col-md-2 col-xs-2">
              <a href="#" type="button" class="btn btn-secondary">
                <span class="glyphicon glyphicon-star-empty" aria-hidden="true"></span>
              </a>
            </div>
          </div>
        </div>
      </div>

      <!-- Schedule Section -->
      <section id="organization-schedule">
        <div class="schedule">
          <h1>Upcoming Events</h1>
        </div>

        <table id="organization-schedule-table" class="table-outer table-responsive" style="width: 60% !important;">
          <tr>
            <th class="center-text bottom-border">Sunday</th>
            <th class="center-text bottom-border">Monday</th>
            <th class="center-text bottom-border">Tuesday</th>
            <th class="center-text bottom-border">Wednesday</th>
            <th class="center-text bottom-border">Thursday</th>
            <th class="center-text bottom-border">Friday</th>
            <th class="center-text bottom-border">Saturday</th>
          </tr>
          <tr>
            <td class="table-cell-default center-text">
              <div class="event" data-info="Come join us for an open house! From 2pm - 5pm. Free Food!">Open House</div>
            </td>
            <td class="table-cell-default center-text">
              <div class="event" data-info="Happy Hour! Every Monday from 12pm to 3pm.">Happy Hour</div>
            </td>
            <td class="table-cell-default center-text">
              <div class="event" data-info="Come join us during our yearly trash cleanup along a 1 mile stretch of Kings Highway! Starting at 9AM, lunch will be provided afterwards.">Green Mile Trash Cleanup</div>
            </td>
            <td class="table-cell-default center-text">
              <div class="event" data-info="Event 1">Event 1</div>
              <div class="event" data-info="Event 2">Event 2</div>
              <div class="event" data-info="Event 3">Event 3</div>
            </td>
            <td class="table-cell-default center-text">
              <div class="event"></div>
            </td>
            <td class="table-cell-default center-text">
              <div class="event">Half Price for Kids and Teens</div>
            </td>
            <td class="table-cell-default center-text">
              <div class="event"></div>
            </td>
        </table>
      </section>

      <!-- About Section -->
      <section id="organiztion-about">
        <div class="about">
          <h1>About Us</h1>
        </div>

        <div class="postBoard">
          <p>Missouri University of Science and Technology (Missouri S&T) builds upon a heritage of discovery, creativity and innovation across all academic and research disciplines so that our community is inspired and ready to pursue and solve the world’s great challenges.</p>
        </div>
      </section>

      <!-- Posts Section -->
      <section id="organiztion-posts">
        <div class="posts">
          <h1>Posts</h1>
        </div>

        <div class="postBoard">
          <p>Write Posts Here</p>
        </div>
      </section>

      <!-- Contact Info Section -->
      <section id="organiztion-contact-info">
        <div class="contact_info">
          <h1>Contact Info</h1>
        </div>

        <div class="postBoard">
          <table>
            <tr>
              <td>Phone Number</td>
              <td>(###) ###-####</td>
            </tr>
            <tr>
              <td>Email</td>
              <td>Example@gmail.com</td>
            </tr>
            <tr>
              <td>Address</td>
              <td>Street #, Street Name, Street Type, City, State, Zip Code</td>
            </tr>
            <tr>
              <td>Fax Number</td>
              <td>(###) ###-####</td>
            </tr>
          </table>
        </div>
      </section>

      <div class="footer"></div>
    </section>
  </body>
</html>
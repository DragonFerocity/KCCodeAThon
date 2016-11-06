<!-- Programmers: Charles Gaitley, Ryan Andrews     Date: 11/4/2016
     File: OrgPage.html                             Purpose: KC Codathon
     Description: This File Contains The Structure Of The Organization
                  Profile Page.
-->

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>KC Code-A-Thon</title>
    <!-- JQuery From Google -->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <!-- JQuery UI from Google -->
  	<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.11.0/jquery-ui.min.js"></script>
    <!-- Header CSS -->
    <?php
    echo "<link rel=\"stylesheet\" href=\"/parts/main.css?" . time() . "\">";
    ?>
    <!-- Javascript Header -->
    <?php
    echo "<script src=\"/parts/header.js?" . time() . "\"></script>";
    ?>
  </head>

  <body>
    <section id="content">
      <div id="organization-header" style="background-image: url('../Pictures/MST.jpg')"></div>

      <div class="header-text" style="top: calc(100% - 100px - 48px);">
        <h1>Missouri University of Science and Technology</h1>
      </div>

      <div class="menu" style="top: calc(100% - 100px);">
        <div class="container">
          <div class="row">
            <div class="col-md-3 col-xs-3">
              <button class="btn btn-default btn-lg" type="button">Schedule</button>
            </div>
            <div class="col-md-3 col-xs-3">
              <button class="btn btn-default btn-lg" type="button">Contact Info</button>
            </div>
            <div class="col-md-3 col-xs-3">
              <button class="btn btn-default btn-lg" type="button">About</button>
            </div>
            <div class="col-md-3 col-xs-3">
              <button class="btn btn-default btn-lg" type="button">Posts</button>
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

        <table id="organization-schedule-table" class="table-outer">
          <tr>
            <th class="center-text">Sunday</th>
            <th class="center-text">Monday</th>
            <th class="center-text">Tuesday</th>
            <th class="center-text">Wednesday</th>
            <th class="center-text">Thursday</th>
            <th class="center-text">Friday</th>
            <th class="center-text">Saturday</th>
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

      <!-- About Section -->
      <section id="organiztion-about">
        <div class="about">
          <h1>About</h1>
        </div>

        <div class="postBoard">
          <p>Write Info Here</p>
        </div>
      </section>

      <div class="footer"></div>
    </section>
  </body>
</html>
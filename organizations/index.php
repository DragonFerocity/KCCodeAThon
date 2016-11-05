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
      <div id="header"></div>

      <div class="header-text">
        <h1>Place Name Here</h1>
      </div>

      <div class="menu">
        <div class="container">
          <div class="row">
            <div class="col-md-3 col-xs-3">
              <button class="btn btn-primary btn-lg" type="button">Schedule</button>
            </div>
            <div class="col-md-3 col-xs-3">
              <button class="btn btn-info btn-lg" type="button">Contact Info</button>
            </div>
            <div class="col-md-3 col-xs-3">
              <button class="btn btn-info btn-lg" type="button">About</button>
            </div>
            <div class="col-md-3 col-xs-3">
              <button class="btn btn-info btn-lg" type="button">Posts</button>
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

      <!-- Posts Section -->
      <section id="organiztion-posts">
        <div class="posts">
          <h1>Posts</h1>
        </div>

        <div class="postBoard">
          <p>Write Posts Here</p>
        </div>
      </section>

      <!-- Schedule Section -->
      <section id="organization-schedule">
        <div class="schedule">
          <h1>Schedule</h1>
        </div>

        <div class="postBoard">
          <table>
            <tr>
              <th>Day</th>
              <th>Events</th>
            </tr>
            <tr>
              <td>Sunday</td>
              <td>Place Events Here</td>
            </tr>
            <tr>
              <td>Monday</td>
              <td>Place Events Here</td>
            </tr>
            <tr>
              <td>Tuesday</td>
              <td>Place Events Here</td>
            </tr>
            <tr>
              <td>Wednesday</td>
              <td>Place Events Here</td>
            </tr>
            <tr>
              <td>Thursday</td>
              <td>Place Events Here</td>
            </tr>
            <tr>
              <td>Friday</td>
              <td>Place Events Here</td>
            </tr>
            <tr>
              <td>Saturday</td>
              <td>Place Events Here</td>
            </tr>
          </table>
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
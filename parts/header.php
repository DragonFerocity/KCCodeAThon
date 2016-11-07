<?php
  if (!isset($color)) //If the variable $color is not set, then set it.
    $color = "green";

  $connection = new mysqli("localhost", "dragon34_kcuser", "p@ssw0rd", "dragon34_kc"); //Connect to a database
  //                        Hostname,   username,           password,   database_name
  if (isset($_COOKIE["email"])) {
    $email = $_COOKIE["email"];
    $result = $connection->query("SELECT Name FROM Volunteers WHERE Email=\"{$email}\"");
    $rows = $result->fetch_assoc();
    $name = $rows["Name"];
  }
?>
<!-- JQuery From Google -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<!-- JQuery UI from Google -->
<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.11.0/jquery-ui.min.js"></script>

<?php
  echo "<link rel=\"stylesheet\" href=\"/parts/main.css?" . time() . "\">"; //This will echo a link tag that links a css file. At the end of the href, we append the time as a url parameter so that
                                                                            //browsers will always get the latest version of this file.
  echo "<script src=\"/parts/header.js?" . time() . "\"></script>";   //Same here as above except with a script tag.
?>
<!-- Bootstrap -->
<script src="/parts/bootstrap.min.js"></script>

<!-- HEADER LINKS -->
<?php
if ($color == "white") //If $color is set to white, this will make the menu-links bar (that is fixed to the top of the page) background white
  echo "<div id=\"menubar-white\">";
else
  echo "<div id=\"menubar\">";
?>
  <div id="linkbar">
    <div id="linkbar-left">
      <a href="/"><div class="menulink">Home</div></a>
      <a href="/"><div class="menulink">Location</div></a>
    </div>
    <div id="linkbar-right">
      <?php if (!isset($name)) { ?>
        <a href="/login/"><div class="menulink"><span class="glyphicon glyphicon-log-in"></span> Log In</div></a>
        <a href="/login/sign-up.php"><div class="menulink"><span class="glyphicon glyphicon-user"></span> Sign Up</div></a>
      <?php } ?>
      <?php if (isset($name)) { ?>
        <span style="font-size: 20px; font-family: 'raleway';">Hello <?php echo $name ?>!</span>
        <?php echo "<a href=\"/users/?" . $name . "\">"; ?><div class="menulink"><span class="glyphicon glyphicon-user"></span> My Account</div></a>
        <div class="menulink sign-out" style="cursor: pointer;"><span class="glyphicon glyphicon-log-out"></span> Sign Out</div>
      <?php } ?>
    </div>
  </div>
</div>
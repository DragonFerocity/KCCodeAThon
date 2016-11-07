<!-- Programmers: Charles Gaitley And Ryan Andrews      Date: 11/6/2016
     File: index.php                                    Purpose: KCCodaThon
     Description: This File Contains The Structure For The Login Page.
-->

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>KCCodaThon</title>
    <?php
    $color = "white";
    include "../parts/header.php";
    ?>
  </head>

  <body>
    <div class="log_head">
      <h1>Log In To ...</h1>
    </div>

    <section class="log_in_info center-text">
      <form id="login-form" action="login.php" method="post">
        <h3>Email:</h3>
        <input type="text" name="email" form="login-form"><br>
        <h3>Password:</h3>
        <input type="password" name="password" form="login-form"><br>
        <input type="submit" id="sub" form="login-form">
      </form>
    </section>
  </body>
</html>
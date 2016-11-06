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

    <section>
      <form class="log_in_info">
        <h6>Username:</h6><br>
        <input type="text" name="username"><br>
        <h6>Password:</h6>
        <input type="text" name="password">
      </form>
    </section>
  </body>
</html>
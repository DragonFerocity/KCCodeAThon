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
      <form>
        <h3>Username:</h3>
        <input type="text" name="username"><br>
        <h3>Password:</h3>
        <input type="text" name="password"><br>
        <input type="submit">
      </form>
    </section>
  </body>
</html>
<?php
  if (!isset($color)) //If the variable $color is not set, then set it.
    $color = "green";
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

  <div id="linkbar">
      <a href="/\"><div class="menulink">Home</div></a>
      <a href="/"><div class="menulink">Location</div></a>
  </div>
</div>
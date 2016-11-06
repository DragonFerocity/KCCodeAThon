<!DOCTYPE html>
<html>
<head>
  <title>KC Code-A-Thon</title>
  <?php include("parts/header.php"); ?>
  <link rel="stylesheet" href="parts/calendar.css">
  <script src="parts/calendar.js"></script>


</head>
<body>
  <section id="content-top-margin">
    <input type = "button" value = "Next Month" onclick="changedate(true,1,0)" />
    <div id = "calendercontainer">
      <div id = "calendarheader">
        <div id = "m-y-container">
          <table id = "m-y-table"><tbody><tr>
            <td id = "prevmonth"><img src = "Pictures/arrow-left.png" /></td>
            <td id = "monthyear">month/year</td>
            <td id = "nextmonth"><img src = "Pictures/arrow-left.png" /></td>
          </tr></tbody></table>
        </div>
        <!--div id = "monthyear">month/year</div-->
      </div>
      <table id = "calendar"></table>
    </div>
  </section>

</body>
</html>
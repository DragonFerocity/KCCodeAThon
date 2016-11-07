<!DOCTYPE html>
<html>
<head>
  <title>KC Code-A-Thon</title>
  <?php include("parts/header.php"); ?>
  <link rel="stylesheet" href="parts/calendar.css?3">
  <script src="parts/calendar.js?5"></script>
</head>
<body>
  <section id="content-top-margin">
    <div id = "calendercontainer">
      <div id = "calendarheader">
        <div id = "m-y-container">
          <table id = "m-y-table"><tbody><tr>
            <td id = "prevmonth"><img src = "Pictures/arrow-left.png" onclick = "changedate(true, -1, 0)"/></td>
            <td id = "monthyear">month/year</td>
            <td id = "nextmonth"><img src = "Pictures/arrow-left.png" onclick = "changedate(true, 1, 0)" /></td>
          </tr></tbody></table>
        </div>
        <!--div id = "monthyear">month/year</div-->
      </div>
      <table id = "calendar"></table>
    </div>
  </section>
</body>
</html>
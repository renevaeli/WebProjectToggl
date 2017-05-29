<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bootstrap 101 Template</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <script>
      function startTime() {
        var today = new Date();
        var h = today.getHours();
        var m = today.getMinutes();
        var s = today.getSeconds();
        m = checkTime(m);
        s = checkTime(s);
        document.getElementById('clock').innerHTML =
        h + ":" + m + ":" + s;
        var t = setTimeout(startTime, 500);
      }
      function checkTime(i) {
        if (i < 10) {i = "0" + i};  // add zero in front of numbers < 10
        return i;
      }
    </script>

  </head>
  <body onload="startTime()">
    <div class="container">
      <form id="timer" method="post" action="data.php">
          <input type="hidden" name="action" value="lisa">
          <table>
              <tr>
                  <td><input type="text" name="description" placeholder="Desctription"></td>
                  <td><input type="time" name="clock"></td>
                  <td><button id="sub" type="submit">Start</button></td>
              </tr>
          </table>
      </form>
    </div>

    <table id="ladu" border="1">
        <thead>
            <tr>
                <th>Tegevus</th>
                <th>Kell</th>
            </tr>
        </thead>
        <tbody>
        </tbody>
    </table>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>

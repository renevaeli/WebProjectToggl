<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/toggleTimer.js"></script>
    <script src="js/functions.js"></script>
  </head>
  <body>
    <div style="width: 600px; margin: auto;" align="center">
      <div align="right"><button id="btnLogOut">Log Out</button></div>
      <p></p>
      <table>
        <tr>
          <td><input type=text id="inputDescription" placeholder="Description"></td>
          <td><div id="timer">00:00:00</div></td>
          <td><button id="btnToggle">Start</button></td>
        </tr>
      </table>
      <p></p>
      <table border="1">
        <thead>
          <tr><td>Description</td><td>Start</td><td>Stop</td><td>Duration</td></tr>
        </thead>
        <tbody id="trackData">
        </tbody>
      </table>
    </div>
  </body>
</html>

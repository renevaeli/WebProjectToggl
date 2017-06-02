<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <script src="jquery-3.2.1.min.js"></script>
    <script src="toggleTimer.js"></script>
  </head>
  <body>
    <div style="width: 200px; margin: auto;">
      <table>
        <tr>
          <td><input type=text id="inputDescription" placeholder="Description"></td>
          <td><div id="timer">00:00:00</div></td>
          <td><button id="btnToggle">Start</button></td>
        </tr>
      </table>

      <p></p>

      <table border="1">
        <th><td>Description</td><td>Start</td><td>Stop</td><td>Duration</td></th>
        <div id=tableData>af</div>
      </table>
    </div>
  </body>
</html>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>TogglTimer</title>
    <link rel="stylesheet" href="css/w3.css">
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/toggleTimer.js"></script>
    <script src="js/functions.js"></script>
  </head>
  <body>
    <div class="w3-container">

      <!-- Header and LogOut -->
      <div class="w3-container w3-red" >
        <div class="w3-container w3-threequarter">
          <h2>Track your activities</h2>
        </div>
        <div class="w3-container w3-quarter">
          <button class="w3-button w3-black w3-right" id="btnLogOut">Log Out</button>
        </div>
      </div>

      <!-- Timer -->
      <div class="w3-row-padding w3-padding-16">
        <div class="w3-container w3-threequarter">
          <input class="w3-input" type=text id="inputDescription" placeholder="Description">
        </div>
        <div class="w3-container w3-quarter">
          <div class="w3-container w3-half">
            <h3 class="w3-right" id="timer">00:00:00</h3>
          </div>
          <div class="w3-container w3-half">
            <button class="w3-button w3-red" id="btnToggle">Start</button>
          </div>
        </div>
      </div>

      <!-- <table>
        <tr>
          <td></td>
          <td></td>
          <td></td>
        </tr>
      </table>
      <p></p> -->

      <!-- Tracks table -->
      <table class="w3-table-all w3-hoverable">
        <thead>
          <tr class="w3-light-grey"><td>Description</td><td>Start</td><td>Stop</td><td>Duration</td></tr>
        </thead>
        <tbody id="trackData">
        </tbody>
      </table>
    </div>
  </body>
</html>

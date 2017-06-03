<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>LogIn</title>
    <link rel="stylesheet" href="css/w3.css">
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/login.js"></script>
    <script src="js/functions.js"></script>
  </head>
  <body>
    <div class="w3-container">
    <!-- Header -->
      <div class="w3-container w3-black w3-center">
        <h2>Toggl: Log In</h2>
      </div>

      <!-- Login input -->
      <div style="width: 300px; margin: auto;" align="center">
        <p><input class="w3-input" id="inputUser" type="username" placeholder="Username"></p>
        <p><input class="w3-input" id="inputPass" type="password" placeholder="Password"></p>
        <p><button class="w3-button w3-bar w3-red" id="btnLogin">Log in</button></p>
        <p><a href="register.php"><button class="w3-button w3-bar w3-gray">Register</button></a></p>
      </div>
    </div>
  </body>
</html>

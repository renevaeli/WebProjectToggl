<?php
  require "connectDb.php";

  $user = (!empty($_POST['user']) ? mysqli_real_escape_string($con, $_POST['user']) : '');
  $pass = (!empty($_POST['pass']) ? mysqli_real_escape_string($con, $_POST['pass']) : '');

  //echo "user: $user, pass: $pass";

  $passHash = sha1($pass);
  //echo "passwordHash: $passHash";

  $query = mysqli_query($con, "SELECT `id` FROM `10163416_Toggl_Users` WHERE `username`='$user'");
  $num = mysqli_num_rows($query);

  if ($num == 1) {
    echo "Username is taken";
  }
  else {
    mysqli_query($con, "INSERT INTO `10163416_Toggl_Users` (`username`, `passwordHash`) VALUES ('$user', '$passHash')");
    //$id = mysqli_insert_id($con);
    echo "Success";
  }

?>

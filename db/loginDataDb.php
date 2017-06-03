<?php
    require "connectDb.php";

    $user = (!empty($_POST['user']) ? mysqli_real_escape_string($con, $_POST['user']) : '');
    $pass = (!empty($_POST['pass']) ? mysqli_real_escape_string($con, $_POST['pass']) : '');
    //echo "user: $user, pass: $pass";

    $passHash = sha1($pass);
    //echo " passwordHash: $passHash ***";

    $query = mysqli_query($con, "SELECT `id` FROM `10163416_Toggl_Users` WHERE `username`='$user' AND `passwordHash`='$passHash'");
    $fetch = mysqli_fetch_assoc($query);
    $id = $fetch['id'];
    //echo "id $id ";
    $num = mysqli_num_rows($query);
    //echo "num $num ";

    if ($num == 0) {
      echo "Incorrect credentials";
    }
    else {
      session_start();
      $_SESSION['id'] = $id;
      echo "Success";
    }
?>

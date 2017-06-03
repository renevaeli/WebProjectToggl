<?php
    require connectDb;

    $user = (!empty($_POST['user']) ? mysqli_real_escape_string($con, $_POST['user']) : '');
    $pass = (!empty($_POST['pass']) ? mysqli_real_escape_string($con, $_POST['pass']) : '');
    //echo "user: $user, pass: $pass";

    $passHash = sha1($pass);
    //echo "passwordHash: $passHash";

    $query = mysqli_query($con, "SELECT `id` FROM `10163416_Test_2` WHERE `username`='$user' AND `password`='$pass'");
    $fetch = mysqli_fetch_assoc($query);
    $id = $fetch['id'];
    $num = mysqli_num_rows($query);

    if($num == 0) {
      echo "Incorrect credentials";
    }
    else {
      session_start();
      $_SESSION['id'] = $id;

      echo "<script>window.location.href='timer.php';</script>";
    }


?>

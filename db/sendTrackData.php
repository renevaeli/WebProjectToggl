<?php
  require "connectDb.php";

  $userId = !empty($_POST['userId']) ? $_POST['userId'] : '';
  $description = !empty($_POST['description']) ? mysqli_real_escape_string($con, $_POST['description']) : '';
  $startTime = !empty($_POST['startTime']) ? $_POST['startTime'] : '';
  $stopTime = !empty($_POST['stopTime']) ? $_POST['stopTime'] : '';
  $timer = !empty($_POST['timer']) ? $_POST['timer'] : '';

  // $stmt = $con->prepare("SELECT `id`, `description`, `startTime`, `stopTime`, `timer` FROM `10163416_Toggl_2` WHERE `userId`='$userId'");
  // $stmt->bind_param('s', $name);
  // $stmt->execute();
  // $result = $stmt->get_result();
  // while ($row = $result->fetch_assoc()) {
  //
  // }


  if(!$startTime || !$stopTime || !$userId || !$timer) {
    echo "Something went wrong. Sorry about that.";
  }
  else {
    mysqli_query($con, "INSERT INTO `10163416_Toggl_2`(`userId`, `description`, `startTime`, `stopTime`, `timer`) VALUES ('$userId','$description','$startTime','$stopTime','$timer')");
    $id = mysqli_insert_id($con);
    require "sendDataToTable.php";
  }


?>

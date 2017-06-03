<?php
  $userId = !empty($_POST['userId']) ? $_POST['userId'] : '';
  //echo "userId is: $userId. query result: ";

  require "connectDb.php";

  $query = mysqli_query($con, "SELECT `id`, `description`, `startTime`, `stopTime`, `timer` FROM `10163416_Toggl_2` WHERE `userId`='$userId'");

  while($fetch = mysqli_fetch_assoc($query)){
    $id = $fetch['id'];
    $description = $fetch['description'];
    $startTime = $fetch['startTime'];
    $stopTime = $fetch['stopTime'];
    $timer = $fetch['timer'];

    require "sendDataToTable.php";
  };



  // if(!$userId) {
  //   //echo "Something went wrong. Sorry about that.";
  // }
  // else {
  //
  // }

  // $userId =
  // $description =
  // $startTime =
  // $stopTime =
  // $timer =

  // else {
  //   mysqli_query($con, "INSERT INTO `10163416_Toggl_2`(`userId`, `description`, `startTime`, `stopTime`, `timer`) VALUES ('$userId','$description','$startTime','$stopTime','$timer')");
  //   $id = mysqli_insert_id($con);
  //   echo "Thanks user $userId, your entry was: $id, $description, $startTime, $stopTime, $timer";
  // }


?>

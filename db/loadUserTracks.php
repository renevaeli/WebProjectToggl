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

    require "writeTracksToTable.php";
  };

?>

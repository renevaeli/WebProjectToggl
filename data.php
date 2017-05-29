<?php
  include_once('connect.php');

  $description = $_POST['description'];
  $clock = $_POST['clock'];

  mysqli_query("INSERT INTO 10163416_Toggl_1 VALUES('$description', '$clock')");

?>

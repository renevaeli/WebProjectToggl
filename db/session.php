<?php
  $post = !empty($_POST['post']) ? $_POST['post'] : '';

  session_start();

  if ($post == "Start") {
    $id = $_SESSION['id'];
    echo $id;
  }
  else {
    unset($_SESSION['id']);
    echo "Session ended.";
  }
?>

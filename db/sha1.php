<?php
  $textHash = !empty($_POST['textPlain']) ? $_POST['textPlain'] : '';
  echo sha1($textHash);
?>

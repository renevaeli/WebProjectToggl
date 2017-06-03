<?php
  $startTime = date("d/m/Y H:i:s", $startTime/1000);
  $stopTime = date("d/m/Y H:i:s", $stopTime/1000);

  echo //" id: $id, description: $description, startTime: $startTime, stopTime: $stopTime, timer: $timer";
  "<tr>
    <td>$description</td>
    <td>$startTime</td>
    <td>$stopTime</td>
    <td>$timer</td>
  </tr>";
?>

<?php
$isEasy = true;
if ($isEasy == true) {
  echo ('C\'est facile !'.'<br>');
}
else {
  echo ('C\'est difficile !'.'<br>');
}

switch ($isEasy) {

  case true:
  echo ('C\'est facile !');
  break;

  case false:
  echo ('C\'est difficile !');
  break;
}
?>

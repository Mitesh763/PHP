<?php
  echo "Wecome toassociative arrays in php </br>";

$arr = array('java','javascript','python','rubby'); // nueric
echo $arr[3];

$favCol= array(1=> 'jayapl',2=> 'deven',3=> 'devang',"friend"=> 'rohan'); // associative
// echo $favCol['2'];
// echo $favCol["friend"];

foreach ($favCol as $key => $value) {
   echo "</br>Friend name is $key is $value</br>";
}
?>
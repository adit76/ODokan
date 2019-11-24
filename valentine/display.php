<?php
require 'server_init.php';

 $query = "SELECT * FROM valentine";
 $result =mysqli_query($conn,$query);

  $info = array();
  while ($row = mysqli_fetch_array($result)){
    $temp =array();
    $temp  ['quotes']=$row['quotes'];
    $temp['jpeg']=$row['jpeg'];
    $temp['gif']=$row['gif'];
      $temp['gift']=$row['gift'];


    array_push($info, $temp);
  }
  echo json_encode($info);

?>
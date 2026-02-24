<?php
  $db_conn = mysqli_connect('localhost', 'root', '','sms_project');

  if(!$db_conn){
    echo'connection failed';
  }
  // session_start();
?>
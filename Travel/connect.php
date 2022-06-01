<?php
// error_reporting(0);
// $insert==false;

// if(isset($_POST['Name'])){
  $db_hostname = "localhost:3307";
  $db_username = "root";
  $db_password = "";
  $db_name = "travel";

  $conn = mysqli_connect($db_hostname, $db_username, $db_password, $db_name);
  
  if(!$conn){
    echo "connection failed". mysqli_connect_error();
    exit;
  }

$pname = $_POST['pname'];
  $nguest = $_POST['nguest'];
  $date = $_POST['date'];
  $ldate = $_POST['ldate'];


  $sql = "INSERT INTO  users( pname, nguest, date, ldate) VALUES ('$pname', '$nguest','$date','$ldate')";
     
  $result= mysqli_query($conn,$sql);

  if(!$result){
    echo "error:" .mysqli_error($conn);
    exit;
  }

  echo " thnk you for registration";
  mysqli_close($conn);
  ?>
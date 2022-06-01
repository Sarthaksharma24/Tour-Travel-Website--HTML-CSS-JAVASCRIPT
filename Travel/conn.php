<?php
// error_reporting(0);
// $insert==false;

// if(isset($_POST['Name'])){
  $db_hostname = "127.0.0.1";
  $db_username = "root";
  $db_password = "";
  $db_name = "travel";

  $conn = mysqli_connect($db_hostname, $db_username, $db_password, $db_name);
  
  if(!$conn){
    echo "connection failed". mysqli_connect_error();
    exit;
  }

$name = $_POST['name'];
  $email = $_POST['email'];
  $mobile = $_POST['mobile'];
  $subject = $_POST['subject'];
  $message =$_POST['message'];

  $sql = "INSERT INTO  travel ( name, email, mobile, subject, message) VALUES ('$name', '$email','$mobile','$subject', '$message')";
     
  $result= mysqli_query($conn,$sql);

  if(!$result){
    echo "error:" .mysqli_error($conn);
    exit;
  }
  // $insert=true;
  echo " thnk you for registration";
  mysqli_close($conn);
  ?>
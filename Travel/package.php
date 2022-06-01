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

$name = $_POST['name'];
  $email = $_POST['email'];
  $package = $_POST['package'];
  $deal = $_POST['deal'];
  $message = $_POST['message'];


  $sql = "INSERT INTO  package( name, email, package, deal, message) VALUES ('$name', '$email','$package','$deal','$message')";
     
  $result= mysqli_query($conn,$sql);

  if(!$result){
    echo "error:" .mysqli_error($conn);
    exit;
  }

//   echo " thnk you for registration";
  header('Location: payment.html');
  mysqli_close($conn);
  ?>
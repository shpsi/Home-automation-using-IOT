<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
$servername = "localhost";
$database = "smart_light";
$username = "root";
$password = "rahul9521";
$conn = new mysqli($servername, $username, $password);
  if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    mysqli_select_db($conn,"smartLight") or die ("could not open the db");
    $d= new DateTime();
    $d=$d->format("d");
    $test_query="UPDATE smartLight SET changed=0,Lux=0,onOff=1,isOrder=0";
    $result=$conn->query($test_query); 
    echo 'Local server refreshed.';
?>

<?php
 
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
 
$response = array();
 
if (isset($_GET['nId']) && isset($_GET['changed'])) {
    $nId = $_GET['nId'];
    $changed = $_GET['changed'];
 
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
    $test_query="UPDATE smartLight SET changed= '$changed' WHERE nId = $nId and date=$d ";
    $result=$conn->query($test_query);
    $date= new DateTime();
    $date=$date->format("y:m:d : h:i:s");
    $txt = "(".$date .") Updated changed to " . $changed . " for nId = " . $nId ;
    $myfile = file_put_contents('logs.txt', $txt.PHP_EOL , FILE_APPEND | LOCK_EX);
 
    if ($result) {
        $response["success"] = 1;
        $response["message"] = "successfully updated.";
 
        echo json_encode($response);
    } else {
 
    }
} else {
    $response["success"] = 0;
    $response["message"] = "Please check the request";
 
    echo json_encode($response);
}
?>

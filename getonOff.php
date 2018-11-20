<?php
 
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
 
$response = array();
 
if (isset($_GET['nId'])) {
 
    $nId = $_GET['nId'];
    $servername = "localhost";
    $database = "smart_light";
    $username = "root";
    $password = "rahul9521";

    $conn = new mysqli($servername, $username, $password);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    mysqli_select_db($conn,"smartLight") or die ("could not open the db");
    $test_query="SELECT onOff FROM smartLight WHERE nId = $nId ";
    $result=$conn->query($test_query);
 
    if ($result) {
        $response["success"] = 1;
        $response["message"] = "successfully updated.";
if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
        echo  $row["onOff"];
        break;
    }
} else {
    echo "0 results";
}
    } else {
 
    }
} else {
    $response["success"] = 0;
    $response["message"] = "Please check the request";
 
    echo json_encode($response);
}
?>

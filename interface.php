<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    echo 'LOGGED OUT';
    exit;
}
?>
<html>

<head>
    <title>SmartLight</title>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
</head>
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        body{ font: 14px sans-serif; text-align: center; }
    </style>
<style>
    .nodes {
        padding-left: 80px;
    }    
    .values {
        padding-left: 100px;
    }    
    .buttons {
        background-color: #4CAF50;
        color: white;
        padding: 6px 3px;
    }
</style>

<body>
     <a href="logout.php" class="btn btn-danger">Sign Out of Your Account</a>
    <center>
        <h1>SmartLight</h1>
    </center>
    <p class="nodes">
        <br><br>
        <b> ================================================================= Node 1 ===============================================================</b>
        <p class="values">
            Lux: <input type="text" name="Lux" id="1_1_Lux">
            Status: <input type="text" id="1_1_Status">
            Current Minimum Lux: <input type="text" name="currentMinLux" id="1_1_currentMinLux">
            Current Maximum Lux: <input type="text" name="currentMaxLux" id="1_1_currentMaxLux">
            <form class="values">
                <button type="button" name="on" class="buttons" id="1_1_On"> On </button>
                <button type="button" name="on" class="buttons" id="1_1_Off"> Off </button>
                <br>
            </form>
            <form class="values" >
                Input nId: <input type="text" id="nId_1_inp" value="1">
                Input minLux: <input type="text" id="minLux_1_inp">
                Input maxLux: <input type="text" id="maxLux_1_inp">
                <button onclick="submit1()">Submit</button>
            </form>
        </p>
    </p>
    <p class="nodes">
       <br><br>
        <b> ================================================================= Node 2 ===============================================================</b>
        <br>
        <p class="values">
            Lux:
            <input type="text" id="1_2_Lux" name="Lux"> Status:
            <input type="text" id="1_2_Status" >
            Current Minimum Lux: <input type="text" name="currentMinLux" id="1_2_currentMinLux">
            Current Maximum Lux: <input type="text" name="currentMaxLux" id="1_2_currentMaxLux">
            <form class="values">
                <button type="button" name="on" class="buttons" id="1_2_On"> On </button>
                <button type="button" name="on" class="buttons" id="1_2_Off"> Off </button>
                <br>
            </form>
            <form class="values" >
                Input nId: <input type="text" id="nId_2_inp" value="2">
                Input minLux: <input type="text" id="minLux_2_inp">
                Input maxLux: <input type="text" id="maxLux_2_inp">
                <button onclick="submit2()">Submit</button>
            </form>
        </p>
    </p>
    <p class="nodes">
        <br><br>
        <b> ================================================================= Node 3 ===============================================================</b>
        <br>
        <p class="values">
            Lux:
            <input type="text" id="1_3_Lux" name="Lux"> Status:
            <input type="text" id="1_3_Status" >
            Current Minimum Lux: <input type="text" name="currentMinLux" id="1_3_currentMinLux">
            Current Maximum Lux: <input type="text" name="currentMaxLux" id="1_3_currentMaxLux">
            <form class="values">
                <button type="button" name="on" class="buttons" id="1_3_On"> On </button>
                <button type="button" name="on" class="buttons" id="1_3_Off"> Off </button>
                <br>
            </form>
            <form class="values" >
                Input nId: <input type="text" id="nId_3_inp" value="3">
                Input minLux: <input type="text" id="minLux_3_inp">
                Input maxLux: <input type="text" id="maxLux_3_inp">
                <button onclick="submit3()">Submit</button>
            </form>
        </p>
    </p>
    </p>
</body>
<script>

var centralURL="http://172.20.43.128";
    document.getElementById('1_1_On').addEventListener('click', function() {
        var url = "http://172.20.43.129/smartLight/smartLightLocal/setIsOrder.php?nId=1&isOrder=1";
        $.getJSON(url, function(data) {
            console.log(data);
        });
    });
    document.getElementById('1_1_Off').addEventListener('click', function() {
        var url = "http://172.20.43.129/smartLight/smartLightLocal/setIsOrder.php?nId=1&isOrder=0";
        $.getJSON(url, function(data) {
            console.log(data);
        });
    });
    document.getElementById('1_2_On').addEventListener('click', function() {
        var url = "http://172.20.43.129/smartLight/smartLightLocal/setIsOrder.php?nId=2&isOrder=1";
        $.getJSON(url, function(data) {
            console.log(data);
        });
        var url = "http://172.20.43.129/smartLight/smartLightLocal/setIsOrder.php?nId=2&isOrder=1";
        $.getJSON(url, function(data) {
            console.log(data);
        });
    });
    document.getElementById('1_2_Off').addEventListener('click', function() {
        var url = "http://172.20.43.129/smartLight/smartLightLocal/setIsOrder.php?nId=2&isOrder=0";
        $.getJSON(url, function(data) {
            console.log(data);
        });
    });
    document.getElementById('1_3_On').addEventListener('click', function() {
        var url = "http://172.20.43.129/smartLight/smartLightLocal/setIsOrder.php?nId=3&isOrder=1";
        $.getJSON(url, function(data) {
            console.log(data);
        });
    });
    document.getElementById('1_3_Off').addEventListener('click', function() {
        var url = "http://172.20.43.129/smartLight/smartLightLocal/setIsOrder.php?nId=3&isOrder=0";
        $.getJSON(url, function(data) {
            console.log(data);
        });
    });
    window.onload = function() {
        loaddata();
    };
    function submit1(){
	var nId=document.getElementById("nId_1_inp").value;
        var minLux=document.getElementById("minLux_1_inp").value;
        var maxLux=document.getElementById("maxLux_1_inp").value;
        var url = "http://172.20.43.129/smartLight/smartLightLocal/setMinLux.php?nId=".concat(nId).concat("&minLux=").concat(minLux);
        $.getJSON(url, function(data) {
            console.log(data);
        });
        var url = "http://172.20.43.129/smartLight/smartLightLocal/setMaxLux.php?nId=".concat(nId).concat("&maxLux=").concat(maxLux);
        $.getJSON(url, function(data) {
            console.log(data);
        });
    }
    function submit2(){
	var nId=document.getElementById("nId_2_inp").value;
        var minLux=document.getElementById("minLux_2_inp").value;
        var maxLux=document.getElementById("maxLux_2_inp").value;
        var url = "http://172.20.43.129/smartLight/smartLightLocal/setMinLux.php?nId=".concat(nId).concat("&minLux=").concat(minLux);
        $.getJSON(url, function(data) {
            console.log(data);
        });
        var url = "http://172.20.43.129/smartLight/smartLightLocal/setMaxLux.php?nId=".concat(nId).concat("&maxLux=").concat(maxLux);
        $.getJSON(url, function(data) {
            console.log(data);
        });
    }
    function submit3(){
	var nId=document.getElementById("nId_3_inp").value;
        var minLux=document.getElementById("minLux_3_inp").value;
        var maxLux=document.getElementById("maxLux_3_inp").value;
        var url = "http://172.20.43.129/smartLight/smartLightLocal/setMinLux.php?nId=".concat(nId).concat("&minLux=").concat(minLux);
        $.getJSON(url, function(data) {
            console.log(data);
        });
        var url = "http://172.20.43.129/smartLight/smartLightLocal/setMaxLux.php?nId=".concat(nId).concat("&maxLux=").concat(maxLux);
        $.getJSON(url, function(data) {
            console.log(data);
        });
    }
    function loaddata() {
        var Lux_1_1 = "http://172.20.43.129/smartLight/smartLightLocal/getLux.php?nId=1";
        var min_1_1 = "http://172.20.43.129/smartLight/smartLightLocal/getMinLux.php?nId=1";
        var min_1_2 = "http://172.20.43.129/smartLight/smartLightLocal/getMinLux.php?nId=2";
        var min_1_3 = "http://172.20.43.129/smartLight/smartLightLocal/getMinLux.php?nId=3";
        var max_1_1 = "http://172.20.43.129/smartLight/smartLightLocal/getMaxLux.php?nId=1";
        var max_1_2 = "http://172.20.43.129/smartLight/smartLightLocal/getMaxLux.php?nId=2";
        var max_1_3 = "http://172.20.43.129/smartLight/smartLightLocal/getMaxLux.php?nId=3";
        var Lux_1_2 = "http://172.20.43.129/smartLight/smartLightLocal/getLux.php?nId=2";
        var Lux_1_3 = "http://172.20.43.129/smartLight/smartLightLocal/getLux.php?nId=3";
        var On_1_1 = "http://172.20.43.129/smartLight/smartLightLocal/getonOff.php?nId=1";
        var On_1_2 = "http://172.20.43.129/smartLight/smartLightLocal/getonOff.php?nId=2";
        var On_1_3 = "http://172.20.43.129/smartLight/smartLightLocal/getonOff.php?nId=3";
        $.getJSON(min_1_1, function(data) {
            var val = data;
            document.getElementById("1_1_currentMinLux").value = val;
        });
         $.getJSON(max_1_1, function(data) {
            var val = data;
            document.getElementById("1_1_currentMaxLux").value = val;
        });
        $.getJSON(min_1_2, function(data) {
            var val = data;
            document.getElementById("1_2_currentMinLux").value = val;
        });
         $.getJSON(max_1_2, function(data) {
            var val = data;
            document.getElementById("1_2_currentMaxLux").value = val;
        });
        $.getJSON(min_1_3, function(data) {
            var val = data;
            document.getElementById("1_3_currentMinLux").value = val;
        });
         $.getJSON(max_1_3, function(data) {
            var val = data;
            document.getElementById("1_3_currentMaxLux").value = val;
        });

        $.getJSON(Lux_1_1, function(data) {
            var val = data;
            document.getElementById("1_1_Lux").value = val;
        });
        $.getJSON(Lux_1_2, function(data) {
            var val = data;
            document.getElementById("1_2_Lux").value = val;
        });
        $.getJSON(Lux_1_3, function(data) {
            var val = data;
            document.getElementById("1_3_Lux").value = val;
        });
        $.getJSON(On_1_1, function(data) {
            var val = data;
            if( val==0)
              document.getElementById("1_1_Status").value = "OFF";
            else
              document.getElementById("1_1_Status").value = "ON";
        });
        $.getJSON(On_1_2, function(data) {
            var val = data;
            if( val==0)
              document.getElementById("1_2_Status").value = "OFF";
            else
              document.getElementById("1_2_Status").value = "ON";
        });
        $.getJSON(On_1_3, function(data) {
            var val = data;
            if( val==0)
              document.getElementById("1_3_Status").value = "OFF";
            else
              document.getElementById("1_3_Status").value = "ON";
        });
    }
    window.setInterval(function() {
        loaddata();
    }, 3000);
</script>

</html>

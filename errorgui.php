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
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        body{ font: 14px sans-serif; text-align: center; }
    </style>
<head>
    <title>SmartLight</title>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
</head>
    <style>
    	.nodes {
        	padding-left: 80px;
        }
        .tables {
        	padding-left: 15px;
        }
        .cells {
         	width : 50;
                height : 40;
        }
    </style>
	<body>
     <a href="logout.php" class="btn btn-danger">Sign Out of Your Account</a>
		<center>
        	<h1>SmartLight</h1>
        </center>
        <p class="nodes" align="center"> 
        	<b> Node 1  (Contact No. XXXXXXXXXX)</b>
            <table class="tables">
            	<tr>
                	<th>
                      <input id="1_1_1" type="text" class="cells" style="background-color: #3CBC8D" >
                      <input id="1_1_2" type="text" class="cells" style="background-color: #3CBC8D">
                      <input id="1_1_3" type="text" class="cells" style="background-color: #3CBC8D">
                      <input id="1_1_4" type="text" class="cells" style="background-color: #3CBC8D">
                      <input id="1_1_5" type="text" class="cells" style="background-color: #3CBC8D">
                      <input id="1_1_6" type="text" class="cells" style="background-color: #3CBC8D">
                      <input id="1_1_7" type="text" class="cells" style="background-color: #3CBC8D">
                      <input id="1_1_8" type="text" class="cells" style="background-color: #3CBC8D">
                      <input id="1_1_9" type="text" class="cells" style="background-color: #3CBC8D">
                      <input id="1_1_10" type="text" class="cells" style="background-color: #3CBC8D">
                      <input id="1_1_11" type="text" class="cells" style="background-color: #3CBC8D">                                            
                    </th>
                </tr>
                <tr>
                	<th>
                      <input id="1_1_12" type="text" class="cells" style="background-color: #3CBC8D">
                      <input id="1_1_13" type="text" class="cells" style="background-color: #3CBC8D">
                      <input id="1_1_14" type="text" class="cells" style="background-color: #3CBC8D">
                      <input id="1_1_15" type="text" class="cells" style="background-color: #3CBC8D">
                      <input id="1_1_16" type="text" class="cells" style="background-color: #3CBC8D">
                      <input id="1_1_17" type="text" class="cells" style="background-color: #3CBC8D">
                      <input id="1_1_18" type="text" class="cells" style="background-color: #3CBC8D">
                      <input id="1_1_19" type="text" class="cells" style="background-color: #3CBC8D">
                      <input id="1_1_20" type="text" class="cells" style="background-color: #3CBC8D">
                      <input id="1_1_21" type="text" class="cells" style="background-color: #3CBC8D">
                      <input id="1_1_22" type="text" class="cells" style="background-color: #3CBC8D">                                            
                    </th>
                </tr>
                <tr>
                	<th>
                      <input id="1_1_23" type="text" class="cells" style="background-color: #3CBC8D">
                      <input id="1_1_24" type="text" class="cells" style="background-color: #3CBC8D">
                      <input id="1_1_25" type="text" class="cells" style="background-color: #3CBC8D">
                      <input id="1_1_26" type="text" class="cells" style="background-color: #3CBC8D">
                      <input id="1_1_27" type="text" class="cells" style="background-color: #3CBC8D">
                      <input id="1_1_28" type="text" class="cells" style="background-color: #3CBC8D">
                      <input id="1_1_29" type="text" class="cells" style="background-color: #3CBC8D">
                      <input id="1_1_30" type="text" class="cells" style="background-color: #3CBC8D">
                      <input id="1_1_31" type="text" class="cells" style="background-color: #3CBC8D">
                      <input id="1_1_32" type="text" class="cells" style="background-color: #3CBC8D">
                      <input id="1_1_33" type="text" class="cells" style="background-color: #3CBC8D">                                            
                    </th>
                </tr>
            </table>
         </p>
         <p class="nodes" align="center"> 
        	<b> Node 2  (Contact No. XXXXXXXXXX)</b>
            <table class="tables">
            	
            <table class="tables">
            	<tr>
                	<th>
                      <input id="1_2_1" type="text" class="cells" style="background-color: #3CBC8D">
                      <input id="1_2_2" type="text" class="cells" style="background-color: #3CBC8D">
                      <input id="1_2_3" type="text" class="cells" style="background-color: #3CBC8D">
                      <input id="1_2_4" type="text" class="cells" style="background-color: #3CBC8D">
                      <input id="1_2_5" type="text" class="cells" style="background-color: #3CBC8D">
                      <input id="1_2_6" type="text" class="cells" style="background-color: #3CBC8D">
                      <input id="1_2_7" type="text" class="cells" style="background-color: #3CBC8D">
                      <input id="1_2_8" type="text" class="cells" style="background-color: #3CBC8D">
                      <input id="1_2_9" type="text" class="cells" style="background-color: #3CBC8D">
                      <input id="1_2_10" type="text" class="cells" style="background-color: #3CBC8D">
                      <input id="1_2_11" type="text" class="cells" style="background-color: #3CBC8D">                                            
                    </th>
                </tr>
                <tr>
                	<th>
                      <input id="1_2_12" type="text" class="cells" style="background-color: #3CBC8D">
                      <input id="1_2_13" type="text" class="cells" style="background-color: #3CBC8D">
                      <input id="1_2_14" type="text" class="cells" style="background-color: #3CBC8D">
                      <input id="1_2_15" type="text" class="cells" style="background-color: #3CBC8D">
                      <input id="1_2_16" type="text" class="cells" style="background-color: #3CBC8D">
                      <input id="1_2_17" type="text" class="cells" style="background-color: #3CBC8D">
                      <input id="1_2_18" type="text" class="cells" style="background-color: #3CBC8D">
                      <input id="1_2_19" type="text" class="cells" style="background-color: #3CBC8D">
                      <input id="1_2_20" type="text" class="cells" style="background-color: #3CBC8D">
                      <input id="1_2_21" type="text" class="cells" style="background-color: #3CBC8D">
                      <input id="1_2_22" type="text" class="cells" style="background-color: #3CBC8D">                                            
                    </th>
                </tr>
                <tr>
                	<th>
                      <input id="1_2_23" type="text" class="cells" style="background-color: #3CBC8D">
                      <input id="1_2_24" type="text" class="cells" style="background-color: #3CBC8D">
                      <input id="1_2_25" type="text" class="cells" style="background-color: #3CBC8D">
                      <input id="1_2_26" type="text" class="cells" style="background-color: #3CBC8D">
                      <input id="1_2_27" type="text" class="cells" style="background-color: #3CBC8D">
                      <input id="1_2_28" type="text" class="cells" style="background-color: #3CBC8D">
                      <input id="1_2_29" type="text" class="cells" style="background-color: #3CBC8D">
                      <input id="1_2_30" type="text" class="cells" style="background-color: #3CBC8D">
                      <input id="1_2_31" type="text" class="cells" style="background-color: #3CBC8D">
                      <input id="1_2_32" type="text" class="cells" style="background-color: #3CBC8D">
                      <input id="1_2_33" type="text" class="cells" style="background-color: #3CBC8D">                                            
                    </th>
                </tr>
            </table>
          </p>
         <p class="nodes" align="center"> 
        	<b> Node 3  (Contact No. XXXXXXXXXX)</b>
                 <table class="tables">
            	<tr>
                	<th>
                      <input id="1_3_1" type="text" class="cells" style="background-color: #3CBC8D">
                      <input id="1_3_2" type="text" class="cells" style="background-color: #3CBC8D">
                      <input id="1_3_3" type="text" class="cells" style="background-color: #3CBC8D">
                      <input id="1_3_4" type="text" class="cells" style="background-color: #3CBC8D">
                      <input id="1_3_5" type="text" class="cells" style="background-color: #3CBC8D">
                      <input id="1_3_6" type="text" class="cells" style="background-color: #3CBC8D">
                      <input id="1_3_7" type="text" class="cells" style="background-color: #3CBC8D">
                      <input id="1_3_8" type="text" class="cells" style="background-color: #3CBC8D">
                      <input id="1_3_9" type="text" class="cells" style="background-color: #3CBC8D">
                      <input id="1_3_10" type="text" class="cells" style="background-color: #3CBC8D">
                      <input id="1_3_11" type="text" class="cells" style="background-color: #3CBC8D">                                            
                    </th>
                </tr>
                <tr>
                	<th>
                      <input id="1_3_12" type="text" class="cells" style="background-color: #3CBC8D">
                      <input id="1_3_13" type="text" class="cells" style="background-color: #3CBC8D">
                      <input id="1_3_14" type="text" class="cells" style="background-color: #3CBC8D">
                      <input id="1_3_15" type="text" class="cells" style="background-color: #3CBC8D">
                      <input id="1_3_16" type="text" class="cells" style="background-color: #3CBC8D">
                      <input id="1_3_17" type="text" class="cells" style="background-color: #3CBC8D">
                      <input id="1_3_18" type="text" class="cells" style="background-color: #3CBC8D">
                      <input id="1_3_19" type="text" class="cells" style="background-color: #3CBC8D">
                      <input id="1_3_20" type="text" class="cells" style="background-color: #3CBC8D">
                      <input id="1_3_21" type="text" class="cells" style="background-color: #3CBC8D">
                      <input id="1_3_22" type="text" class="cells" style="background-color: #3CBC8D">                                            
                    </th>
                </tr>
                <tr>
                	<th>
                      <input id="1_3_23" type="text" class="cells" style="background-color: #3CBC8D">
                      <input id="1_3_24" type="text" class="cells" style="background-color: #3CBC8D">
                      <input id="1_3_25" type="text" class="cells" style="background-color: #3CBC8D">
                      <input id="1_3_26" type="text" class="cells" style="background-color: #3CBC8D">
                      <input id="1_3_27" type="text" class="cells" style="background-color: #3CBC8D">
                      <input id="1_3_28" type="text" class="cells" style="background-color: #3CBC8D">
                      <input id="1_3_29" type="text" class="cells" style="background-color: #3CBC8D">
                      <input id="1_3_30" type="text" class="cells" style="background-color: #3CBC8D">
                      <input id="1_3_31" type="text" class="cells" style="background-color: #3CBC8D">
                      <input id="1_3_32" type="text" class="cells" style="background-color: #3CBC8D">
                      <input id="1_3_33" type="text" class="cells" style="background-color: #3CBC8D">                                            
                    </th>
                </tr>
            </table>
         </p>
        </p>
	</body>
    <script>

        var startDay=1;
    	window.onload = function() {
           loaddata();
        };
    function loaddata(){
        var today = new Date();
        var endDay = today.getDate();
        var ld_1_1 = "http://172.20.43.128/smartLight/smartLightCentral/startDay.php";
        $.getJSON(ld_1_1, function(data) {
            startDay = data;
        });
        $.getJSON(ld_1_1, function(data) {
            startDay = data;
        });
        var ld_1_1 = "http://172.20.43.129/smartLight/smartLightLocal/getChanged.php?nId=1&date=1";
        $.getJSON(ld_1_1, function(data) {
            var val = data;
            if(val==1) $result="OK";  if(val==0) $result="ERR";
            if(1<startDay || 1>endDay)
              $result="";
            document.getElementById('1_1_1' ).value = $result;
        });
       var ld_1_1 = "http://172.20.43.129/smartLight/smartLightLocal/getChanged.php?nId=1&date=2";
        $.getJSON(ld_1_1, function(data) {
            var val = data;
            if(val==1) $result="OK";  if(val==0) $result="ERR";
            if(2<startDay || 2>endDay)
              $result="";
            document.getElementById('1_1_2' ).value = $result;
        });
        var ld_1_1 = "http://172.20.43.129/smartLight/smartLightLocal/getChanged.php?nId=1&date=3";
        $.getJSON(ld_1_1, function(data) {
            var val = data;
            if(val==1) $result="OK";  if(val==0) $result="ERR";
            if(3<startDay || 3>endDay)
              $result="";
            document.getElementById('1_1_3' ).value = $result;
        });
        var ld_1_1 = "http://172.20.43.129/smartLight/smartLightLocal/getChanged.php?nId=1&date=4";
        $.getJSON(ld_1_1, function(data) {
            var val = data;
            if(val==1) $result="OK";  if(val==0) $result="ERR";
            if(4<startDay || 4>endDay)
              $result="";         
            document.getElementById('1_1_4' ).value = $result;
        });
        var ld_1_1 ="http://172.20.43.129/smartLight/smartLightLocal/getChanged.php?nId=1&date=5";
        $.getJSON(ld_1_1, function(data) {
            var val = data;
            if(val==1) $result="OK";  if(val==0) $result="ERR";
            if(5<startDay || 5>endDay)
              $result="";
            document.getElementById('1_1_5' ).value = $result;
        });
        var ld_1_1 ="http://172.20.43.129/smartLight/smartLightLocal/getChanged.php?nId=1&date=6";
        $.getJSON(ld_1_1, function(data) {
            var val = data;
            if(val==1) $result="OK";  if(val==0) $result="ERR";
            if(6<startDay || 6>endDay)
              $result="";
            document.getElementById('1_1_6' ).value = $result;
        });
        var ld_1_1 = "http://172.20.43.129/smartLight/smartLightLocal/getChanged.php?nId=1&date=7";
        $.getJSON(ld_1_1, function(data) {
            var val = data;
            if(val==1) $result="OK";  if(val==0) $result="ERR";
            if(7<startDay || 7>endDay)
              $result="";
            document.getElementById('1_1_7' ).value = $result;
        });
        var ld_1_1 = "http://172.20.43.129/smartLight/smartLightLocal/getChanged.php?nId=1&date=8";
        $.getJSON(ld_1_1, function(data) {
            var val = data;
            if(val==1) $result="OK";  if(val==0) $result="ERR";
            if(8<startDay || 8>endDay)
              $result="";
            document.getElementById('1_1_8' ).value = $result;
        });
        var ld_1_1 = "http://172.20.43.129/smartLight/smartLightLocal/getChanged.php?nId=1&date=9";
        $.getJSON(ld_1_1, function(data) {
            var val = data;
            if(val==1) $result="OK";  if(val==0) $result="ERR";
            if(9<startDay || 9>endDay)
              $result="";
            document.getElementById('1_1_9' ).value = $result;
        });
        var ld_1_1 = "http://172.20.43.129/smartLight/smartLightLocal/getChanged.php?nId=1&date=10";
        $.getJSON(ld_1_1, function(data) {
            var val = data;
            if(val==1) $result="OK";  if(val==0) $result="ERR";
            if(10<startDay || 10>endDay)
              $result="";
            document.getElementById('1_1_10' ).value = $result;
        });
        var ld_1_1 = "http://172.20.43.129/smartLight/smartLightLocal/getChanged.php?nId=1&date=11";
        $.getJSON(ld_1_1, function(data) {
            var val = data;
            if(val==1) $result="OK";  if(val==0) $result="ERR";
            if(11<startDay || 11>endDay)
              $result="";
            document.getElementById('1_1_11' ).value = $result;
        });
        var ld_1_1 ="http://172.20.43.129/smartLight/smartLightLocal/getChanged.php?nId=1&date=12";
        $.getJSON(ld_1_1, function(data) {
            var val = data;
            if(val==1) $result="OK";  if(val==0) $result="ERR";
            if(12<startDay || 12>endDay)
              $result="";
            document.getElementById('1_1_12' ).value = $result;
        });
        var ld_1_1 = "http://172.20.43.129/smartLight/smartLightLocal/getChanged.php?nId=1&date=13";
        $.getJSON(ld_1_1, function(data) {
            var val = data;
            if(val==1) $result="OK";  if(val==0) $result="ERR";
            if(13<startDay || 13>endDay)
              $result="";
            document.getElementById('1_1_13' ).value = $result;
        });
        var ld_1_1 ="http://172.20.43.129/smartLight/smartLightLocal/getChanged.php?nId=1&date=14";
        $.getJSON(ld_1_1, function(data) {
            var val = data;
            if(val==1) $result="OK";  if(val==0) $result="ERR";
            if(14<startDay || 14>endDay)
              $result="";
            document.getElementById('1_1_14' ).value = $result;
        });
        var ld_1_1 = "http://172.20.43.129/smartLight/smartLightLocal/getChanged.php?nId=1&date=15";
        $.getJSON(ld_1_1, function(data) {
            var val = data;
            if(val==1) $result="OK";  if(val==0) $result="ERR";
            if(15<startDay || 15>endDay)
              $result="";
            document.getElementById('1_1_15' ).value = $result;
        });
        var ld_1_1 = "http://172.20.43.129/smartLight/smartLightLocal/getChanged.php?nId=1&date=16";
        $.getJSON(ld_1_1, function(data) {
            var val = data;
            if(val==1) $result="OK";  if(val==0) $result="ERR";
            if(16<startDay || 16>endDay)
              $result="";
            document.getElementById('1_1_16' ).value = $result;
        });
        var ld_1_1 = "http://172.20.43.129/smartLight/smartLightLocal/getChanged.php?nId=1&date=17";
        $.getJSON(ld_1_1, function(data) {
            var val = data;
            if(val==1) $result="OK";  if(val==0) $result="ERR";
            if(17<startDay || 17>endDay)
              $result="";
            document.getElementById('1_1_17' ).value = $result;
        });
        var ld_1_1 ="http://172.20.43.129/smartLight/smartLightLocal/getChanged.php?nId=1&date=18";
        $.getJSON(ld_1_1, function(data) {
            var val = data;
            if(val==1) $result="OK";  if(val==0) $result="ERR";
            if(18<startDay || 18>endDay)
              $result="";
            document.getElementById('1_1_18' ).value = $result;
        });
        var ld_1_1 = "http://172.20.43.129/smartLight/smartLightLocal/getChanged.php?nId=1&date=19";
        $.getJSON(ld_1_1, function(data) {
            var val = data;
            if(val==1) $result="OK";  if(val==0) $result="ERR";
            if(19<startDay || 19>endDay)
              $result="";
             document.getElementById('1_1_19' ).value = $result;
        });
        var ld_1_1 = "http://172.20.43.129/smartLight/smartLightLocal/getChanged.php?nId=1&date=20";
        $.getJSON(ld_1_1, function(data) {
            var val = data;
            if(val==1) $result="OK";  if(val==0) $result="ERR";
            if(20<startDay || 20>endDay)
              $result="";
            document.getElementById('1_1_20' ).value = $result;
        });
        var ld_1_1 = "http://172.20.43.129/smartLight/smartLightLocal/getChanged.php?nId=1&date=21";
        $.getJSON(ld_1_1, function(data) {
            var val = data;
            if(val==1) $result="OK";  if(val==0) $result="ERR";
            if(21<startDay || 21>endDay)
              $result="";
            document.getElementById('1_1_21' ).value = $result;
        });
        var ld_1_1 = "http://172.20.43.129/smartLight/smartLightLocal/getChanged.php?nId=1&date=22";
        $.getJSON(ld_1_1, function(data) {
            var val = data;
            if(val==1) $result="OK";  if(val==0) $result="ERR";
            if(22<startDay || 22>endDay)
              $result="";
            document.getElementById('1_1_22' ).value = $result;
        });
        var ld_1_1 = "http://172.20.43.129/smartLight/smartLightLocal/getChanged.php?nId=1&date=23";
        $.getJSON(ld_1_1, function(data) {
            var val = data;
            if(val==1) $result="OK";  if(val==0) $result="ERR";
            if(23<startDay || 23>endDay)
              $result="";
            document.getElementById('1_1_23' ).value = $result;
        });
        var ld_1_1 = "http://172.20.43.129/smartLight/smartLightLocal/getChanged.php?nId=1&date=24";
        $.getJSON(ld_1_1, function(data) {
            var val = data;
            if(val==1) $result="OK";  if(val==0) $result="ERR";
            if(24<startDay || 24>endDay)
              $result="";
            document.getElementById('1_1_24' ).value = $result;
        });
        var ld_1_1 ="http://172.20.43.129/smartLight/smartLightLocal/getChanged.php?nId=1&date=25";
        $.getJSON(ld_1_1, function(data) {
            var val = data;
            if(val==1) $result="OK";  if(val==0) $result="ERR";
            if(25<startDay || 25>endDay)
              $result="";
            document.getElementById('1_1_25' ).value = $result;
        });
        var ld_1_1 = "http://172.20.43.129/smartLight/smartLightLocal/getChanged.php?nId=1&date=26";
        $.getJSON(ld_1_1, function(data) {
            var val = data;
            if(val==1) $result="OK";  if(val==0) $result="ERR";
            if(26<startDay || 26>endDay)
              $result="";
            document.getElementById('1_1_26' ).value = $result;
        });
        var ld_1_1 = "http://172.20.43.129/smartLight/smartLightLocal/getChanged.php?nId=1&date=27";
        $.getJSON(ld_1_1, function(data) {
            var val = data;
            if(val==1) $result="OK";  if(val==0) $result="ERR";
            if(27<startDay || 27>endDay)
              $result="";
            document.getElementById('1_1_27' ).value = $result;
        });
        var ld_1_1 = "http://172.20.43.129/smartLight/smartLightLocal/getChanged.php?nId=1&date=28";
        $.getJSON(ld_1_1, function(data) {
            var val = data;
            if(val==1) $result="OK";  if(val==0) $result="ERR";
            if(28<startDay || 28>endDay)
              $result="";
            document.getElementById('1_1_28' ).value = $result;
        });
        var ld_1_1 = "http://172.20.43.129/smartLight/smartLightLocal/getChanged.php?nId=1&date=29";
        $.getJSON(ld_1_1, function(data) {
            var val = data;
            if(val==1) $result="OK";  if(val==0) $result="ERR";
            if(29<startDay || 29>endDay)
              $result="";
            document.getElementById('1_1_29' ).value = $result;
        });
        var ld_1_1 = "http://172.20.43.129/smartLight/smartLightLocal/getChanged.php?nId=1&date=30";
        $.getJSON(ld_1_1, function(data) {
            var val = data;
            if(val==1) $result="OK";  if(val==0) $result="ERR";
            if(30<startDay || 30>endDay)
              $result="";
            document.getElementById('1_1_30' ).value = $result;
        });
        var ld_1_1 = "http://172.20.43.129/smartLight/smartLightLocal/getChanged.php?nId=1&date=31";
        $.getJSON(ld_1_1, function(data) {
            var val = data;
            if(val==1) $result="OK";  if(val==0) $result="ERR";
            if(31<startDay || 31>endDay)
              $result="";
            document.getElementById('1_1_31' ).value = $result;
        });
        var ld_1_1 = "http://172.20.43.129/smartLight/smartLightLocal/getChanged.php?nId=1&date=32";
        $.getJSON(ld_1_1, function(data) {
            var val = data;
            if(val==1) $result="OK";  if(val==0) $result="ERR";
            if(32<startDay || 32>endDay)
              $result="";
            document.getElementById('1_1_32' ).value = $result;
        });
        var ld_1_1 = "http://172.20.43.129/smartLight/smartLightLocal/getChanged.php?nId=1&date=33";
        $.getJSON(ld_1_1, function(data) {
            var val = data;
            if(val==1) $result="OK";  if(val==0) $result="ERR";
            if(33<startDay || 33>endDay)
              $result="";
            document.getElementById('1_1_33' ).value = $result;
        });
        var ld_1_1 = "http://172.20.43.129/smartLight/smartLightLocal/getChanged.php?nId=2&date=1";
        $.getJSON(ld_1_1, function(data) {
            var val = data;
            if(val==1) $result="OK";  if(val==0) $result="ERR";
            if(1<startDay || 1>endDay)
              $result="";
            document.getElementById('1_2_1' ).value = $result;
        });
       var ld_1_1 = "http://172.20.43.129/smartLight/smartLightLocal/getChanged.php?nId=2&date=2";
        $.getJSON(ld_1_1, function(data) {
            var val = data;
            if(val==1) $result="OK";  if(val==0) $result="ERR";
            if(2<startDay || 2>endDay)
              $result="";
            document.getElementById('1_2_2' ).value = $result;
        });
        var ld_1_1 ="http://172.20.43.129/smartLight/smartLightLocal/getChanged.php?nId=2&date=3";
        $.getJSON(ld_1_1, function(data) {
            var val = data;
            if(val==1) $result="OK";  if(val==0) $result="ERR";
            if(3<startDay || 3>endDay)
              $result="";
            document.getElementById('1_2_3' ).value = $result;
        });
        var ld_1_1 ="http://172.20.43.129/smartLight/smartLightLocal/getChanged.php?nId=2&date=4";
        $.getJSON(ld_1_1, function(data) {
            var val = data;
            if(val==1) $result="OK";  if(val==0) $result="ERR";
            if(4<startDay || 4>endDay)
              $result="";
            document.getElementById('1_2_4' ).value = $result;
        });
        var ld_1_1 = "http://172.20.43.129/smartLight/smartLightLocal/getChanged.php?nId=2&date=5";
        $.getJSON(ld_1_1, function(data) {
            var val = data;
            if(val==1) $result="OK";  if(val==0) $result="ERR";
            if(5<startDay || 5>endDay)
              $result="";
             document.getElementById('1_2_5' ).value = $result;
        });
        var ld_1_1 = "http://172.20.43.129/smartLight/smartLightLocal/getChanged.php?nId=2&date=6";
        $.getJSON(ld_1_1, function(data) {
            var val = data;
            if(val==1) $result="OK";  if(val==0) $result="ERR";
            if(6<startDay || 6>endDay)
              $result="";
            document.getElementById('1_2_6' ).value = $result;
        });
        var ld_1_1 = "http://172.20.43.129/smartLight/smartLightLocal/getChanged.php?nId=2&date=7";
        $.getJSON(ld_1_1, function(data) {
            var val = data;
            if(val==1) $result="OK";  if(val==0) $result="ERR";
            if(7<startDay || 7>endDay)
              $result="";
            document.getElementById('1_2_7' ).value = $result;
        });
        var ld_1_1 = "http://172.20.43.129/smartLight/smartLightLocal/getChanged.php?nId=2&date=8";
        $.getJSON(ld_1_1, function(data) {
            var val = data;
            if(val==1) $result="OK";  if(val==0) $result="ERR";
            if(8<startDay || 8>endDay)
              $result="";
            document.getElementById('1_2_8' ).value = $result;
        });
        var ld_1_1 = "http://172.20.43.129/smartLight/smartLightLocal/getChanged.php?nId=2&date=9";
        $.getJSON(ld_1_1, function(data) {
            var val = data;
            if(val==1) $result="OK";  if(val==0) $result="ERR";
            if(9<startDay || 9>endDay)
              $result="";
            document.getElementById('1_2_9' ).value = $result;
        });
        var ld_1_1 = "http://172.20.43.129/smartLight/smartLightLocal/getChanged.php?nId=2&date=10";
        $.getJSON(ld_1_1, function(data) {
            var val = data;
            if(val==1) $result="OK";  if(val==0) $result="ERR";
            if(10<startDay || 10>endDay)
              $result="";
            document.getElementById('1_2_10' ).value = $result;
        });
        var ld_1_1 = "http://172.20.43.129/smartLight/smartLightLocal/getChanged.php?nId=2&date=11";
        $.getJSON(ld_1_1, function(data) {
            var val = data;
            if(val==1) $result="OK";  if(val==0) $result="ERR";
            if(11<startDay || 11>endDay)
              $result="";
            document.getElementById('1_2_11' ).value = $result;
        });
        var ld_1_1 = "http://172.20.43.129/smartLight/smartLightLocal/getChanged.php?nId=2&date=12";
        $.getJSON(ld_1_1, function(data) {
            var val = data;
            if(val==1) $result="OK";  if(val==0) $result="ERR";
            if(12<startDay || 12>endDay)
              $result="";
            document.getElementById('1_2_12' ).value = $result;
        });
        var ld_1_1 = "http://172.20.43.129/smartLight/smartLightLocal/getChanged.php?nId=2&date=13";
        $.getJSON(ld_1_1, function(data) {
            var val = data;
            if(val==1) $result="OK";  if(val==0) $result="ERR";
            if(13<startDay || 13>endDay)
              $result="";
            document.getElementById('1_2_13' ).value = $result;
        });
        var ld_1_1 = "http://172.20.43.129/smartLight/smartLightLocal/getChanged.php?nId=2&date=14";
        $.getJSON(ld_1_1, function(data) {
            var val = data;
            if(val==1) $result="OK";  if(val==0) $result="ERR";
            if(14<startDay || 14>endDay)
              $result="";
            document.getElementById('1_2_14' ).value = $result;
        });
        var ld_1_1 = "http://172.20.43.129/smartLight/smartLightLocal/getChanged.php?nId=2&date=15";
        $.getJSON(ld_1_1, function(data) {
            var val = data;
            if(val==1) $result="OK";  if(val==0) $result="ERR";
            if(15<startDay || 15>endDay)
              $result="";
            document.getElementById('1_2_15' ).value = $result;
        });
        var ld_1_1 ="http://172.20.43.129/smartLight/smartLightLocal/getChanged.php?nId=2&date=16";
        $.getJSON(ld_1_1, function(data) {
            var val = data;
            if(val==1) $result="OK";  if(val==0) $result="ERR";
            if(16<startDay || 16>endDay)
              $result="";
            document.getElementById('1_2_16' ).value = $result;
        });
        var ld_1_1 ="http://172.20.43.129/smartLight/smartLightLocal/getChanged.php?nId=2&date=17";
        $.getJSON(ld_1_1, function(data) {
            var val = data;
            if(val==1) $result="OK";  if(val==0) $result="ERR";
            if(17<startDay || 17>endDay)
              $result="";
            document.getElementById('1_2_17' ).value = $result;
        });
        var ld_1_1 = "http://172.20.43.129/smartLight/smartLightLocal/getChanged.php?nId=2&date=18";
        $.getJSON(ld_1_1, function(data) {
            var val = data;
            if(val==1) $result="OK";  if(val==0) $result="ERR";
            if(18<startDay || 18>endDay)
              $result="";
            document.getElementById('1_2_18' ).value = $result;
        });
        var ld_1_1 = "http://172.20.43.129/smartLight/smartLightLocal/getChanged.php?nId=2&date=19";
        $.getJSON(ld_1_1, function(data) {
            var val = data;
            if(val==1) $result="OK";  if(val==0) $result="ERR";
            if(19<startDay || 19>endDay)
              $result="";
            document.getElementById('1_2_19' ).value = $result;
        });
        var ld_1_1 = "http://172.20.43.129/smartLight/smartLightLocal/getChanged.php?nId=2&date=20";
        $.getJSON(ld_1_1, function(data) {
            var val = data;
            if(val==1) $result="OK";  if(val==0) $result="ERR";
            if(20<startDay || 20>endDay)
              $result="";
            document.getElementById('1_2_20' ).value = $result;
        });
        var ld_1_1 = "http://172.20.43.129/smartLight/smartLightLocal/getChanged.php?nId=2&date=21";
        $.getJSON(ld_1_1, function(data) {
            var val = data;
            if(val==1) $result="OK";  if(val==0) $result="ERR";
            if(21<startDay || 21>endDay)
              $result="";
            document.getElementById('1_2_21' ).value = $result;
        });
        var ld_1_1 ="http://172.20.43.129/smartLight/smartLightLocal/getChanged.php?nId=2&date=22";
        $.getJSON(ld_1_1, function(data) {
            var val = data;
            if(val==1) $result="OK";  if(val==0) $result="ERR";
            if(22<startDay || 22>endDay)
              $result="";
            document.getElementById('1_2_22' ).value = $result;
        });
        var ld_1_1 = "http://172.20.43.129/smartLight/smartLightLocal/getChanged.php?nId=2&date=23";
        $.getJSON(ld_1_1, function(data) {
            var val = data;
            if(val==1) $result="OK";  if(val==0) $result="ERR";
            if(23<startDay || 23>endDay)
              $result="";
            document.getElementById('1_2_23' ).value = $result;
        });
        var ld_1_1 = "http://172.20.43.129/smartLight/smartLightLocal/getChanged.php?nId=2&date=24";
        $.getJSON(ld_1_1, function(data) {
            var val = data;
            if(val==1) $result="OK";  if(val==0) $result="ERR";
            if(24<startDay || 24>endDay)
              $result="";
            document.getElementById('1_2_24' ).value = $result;
        });
        var ld_1_1 = "http://172.20.43.129/smartLight/smartLightLocal/getChanged.php?nId=2&date=25";
        $.getJSON(ld_1_1, function(data) {
            var val = data;
            if(val==1) $result="OK";  if(val==0) $result="ERR";
            if(25<startDay || 25>endDay)
              $result="";
            document.getElementById('1_2_25' ).value = $result;
        });
        var ld_1_1 = "http://172.20.43.129/smartLight/smartLightLocal/getChanged.php?nId=2&date=26";
        $.getJSON(ld_1_1, function(data) {
            var val = data;
            if(val==1) $result="OK";  if(val==0) $result="ERR";
            if(26<startDay || 26>endDay)
              $result="";
            document.getElementById('1_2_26' ).value = $result;
        });
        var ld_1_1 = "http://172.20.43.129/smartLight/smartLightLocal/getChanged.php?nId=2&date=27";
        $.getJSON(ld_1_1, function(data) {
            var val = data;
            if(val==1) $result="OK";  if(val==0) $result="ERR";
            if(27<startDay || 27>endDay)
              $result="";
            document.getElementById('1_2_27' ).value = $result;
        });
        var ld_1_1 = "http://172.20.43.129/smartLight/smartLightLocal/getChanged.php?nId=2&date=28";
        $.getJSON(ld_1_1, function(data) {
            var val = data;
            if(val==1) $result="OK";  if(val==0) $result="ERR";
            if(28<startDay || 28>endDay)
              $result="";
            document.getElementById('1_2_28' ).value = $result;
        });
        var ld_1_1 = "http://172.20.43.129/smartLight/smartLightLocal/getChanged.php?nId=2&date=29";
        $.getJSON(ld_1_1, function(data) {
            var val = data;
            if(val==1) $result="OK";  if(val==0) $result="ERR";
            if(29<startDay || 29>endDay)
              $result="";
            document.getElementById('1_2_29' ).value = $result;
        });
        var ld_1_1 = "http://172.20.43.129/smartLight/smartLightLocal/getChanged.php?nId=2&date=30";
        $.getJSON(ld_1_1, function(data) {
            var val = data;
            if(val==1) $result="OK";  if(val==0) $result="ERR";
            if(30<startDay || 30>endDay)
              $result="";
            document.getElementById('1_2_30' ).value = $result;
        });
        var ld_1_1 ="http://172.20.43.129/smartLight/smartLightLocal/getChanged.php?nId=2&date=31";
        $.getJSON(ld_1_1, function(data) {
            var val = data;
            if(val==1) $result="OK";  if(val==0) $result="ERR";
            if(31<startDay || 31>endDay)
              $result="";
            document.getElementById('1_2_31' ).value = $result;
        });
        var ld_1_1 ="http://172.20.43.129/smartLight/smartLightLocal/getChanged.php?nId=2&date=32";
        $.getJSON(ld_1_1, function(data) {
            var val = data;
            if(val==1) $result="OK";  if(val==0) $result="ERR";
            if(32<startDay || 32>endDay)
              $result="";
            document.getElementById('1_2_32' ).value = $result;
        });
        var ld_1_1 = "http://172.20.43.129/smartLight/smartLightLocal/getChanged.php?nId=2&date=33";
        $.getJSON(ld_1_1, function(data) {
            var val = data;
            if(val==1) $result="OK";  if(val==0) $result="ERR";
            if(33<startDay || 33>endDay)
              $result="";
            document.getElementById('1_2_33' ).value = $result;
        });
        var ld_1_1 = "http://172.20.43.129/smartLight/smartLightLocal/getChanged.php?nId=3&date=1";
        $.getJSON(ld_1_1, function(data) {
            var val = data;
            if(val==1) $result="OK";  if(val==0) $result="ERR";
            if(1<startDay || 1>endDay)
              $result="";
            document.getElementById('1_3_1' ).value = $result;
        });
       var ld_1_1 = "http://172.20.43.129/smartLight/smartLightLocal/getChanged.php?nId=3&date=2";
        $.getJSON(ld_1_1, function(data) {
            var val = data;
            if(val==1) $result="OK";  if(val==0) $result="ERR";
            if(2<startDay || 2>endDay)
              $result="";
            document.getElementById('1_3_2' ).value = $result;
        });
        var ld_1_1 = "http://172.20.43.129/smartLight/smartLightLocal/getChanged.php?nId=3&date=3";
        $.getJSON(ld_1_1, function(data) {
            var val = data;
            if(val==1) $result="OK";  if(val==0) $result="ERR";
            if(3<startDay || 3>endDay)
              $result="";
            document.getElementById('1_3_3' ).value = $result;
        });
        var ld_1_1 ="http://172.20.43.129/smartLight/smartLightLocal/getChanged.php?nId=3&date=4";
        $.getJSON(ld_1_1, function(data) {
            var val = data;
            if(val==1) $result="OK";  if(val==0) $result="ERR";
            if(4<startDay || 4>endDay)
              $result="";
            document.getElementById('1_3_4' ).value = $result;
        });
        var ld_1_1 = "http://172.20.43.129/smartLight/smartLightLocal/getChanged.php?nId=3&date=5";
        $.getJSON(ld_1_1, function(data) {
            var val = data;
            if(val==1) $result="OK";  if(val==0) $result="ERR";
            if(5<startDay || 5>endDay)
              $result="";
            document.getElementById('1_3_5' ).value = $result;
        });
        var ld_1_1 = "http://172.20.43.129/smartLight/smartLightLocal/getChanged.php?nId=3&date=6";
        $.getJSON(ld_1_1, function(data) {
            var val = data;
            if(val==1) $result="OK";  if(val==0) $result="ERR";
            if(6<startDay || 6>endDay)
              $result="";
            document.getElementById('1_3_6' ).value = $result;
        });
        var ld_1_1 ="http://172.20.43.129/smartLight/smartLightLocal/getChanged.php?nId=3&date=7";
        $.getJSON(ld_1_1, function(data) {
            var val = data;
            if(val==1) $result="OK";  if(val==0) $result="ERR";
            if(7<startDay || 7>endDay)
              $result="";
            document.getElementById('1_3_7' ).value = $result;
        });
        var ld_1_1 = "http://172.20.43.129/smartLight/smartLightLocal/getChanged.php?nId=3&date=8";
        $.getJSON(ld_1_1, function(data) {
            var val = data;
            if(val==1) $result="OK";  if(val==0) $result="ERR";
            if(8<startDay || 8>endDay)
              $result="";
            document.getElementById('1_3_8' ).value = $result;
        });
        var ld_1_1 = "http://172.20.43.129/smartLight/smartLightLocal/getChanged.php?nId=3&date=9";
        $.getJSON(ld_1_1, function(data) {
            var val = data;
            if(val==1) $result="OK";  if(val==0) $result="ERR";
            if(9<startDay || 9>endDay)
              $result="";
            document.getElementById('1_3_9' ).value = $result;
        });
        var ld_1_1 = "http://172.20.43.129/smartLight/smartLightLocal/getChanged.php?nId=3&date=10";
        $.getJSON(ld_1_1, function(data) {
            var val = data;
            if(val==1) $result="OK";  if(val==0) $result="ERR";
            if(10<startDay || 10>endDay)
              $result="";
            document.getElementById('1_3_10' ).value = $result;
        });
        var ld_1_1 ="http://172.20.43.129/smartLight/smartLightLocal/getChanged.php?nId=3&date=11";
        $.getJSON(ld_1_1, function(data) {
            var val = data;
            if(val==1) $result="OK";  if(val==0) $result="ERR";
            if(11<startDay || 11>endDay)
              $result="";
            document.getElementById('1_3_11' ).value = $result;
        });
        var ld_1_1 = "http://172.20.43.129/smartLight/smartLightLocal/getChanged.php?nId=3&date=12";
        $.getJSON(ld_1_1, function(data) {
            var val = data;
            if(val==1) $result="OK";  if(val==0) $result="ERR";
            if(12<startDay || 12>endDay)
              $result="";
            document.getElementById('1_3_12' ).value = $result;
        });
        var ld_1_1 = "http://172.20.43.129/smartLight/smartLightLocal/getChanged.php?nId=3&date=13";
        $.getJSON(ld_1_1, function(data) {
            var val = data;
            if(val==1) $result="OK";  if(val==0) $result="ERR";
            if(13<startDay || 13>endDay)
              $result="";
            document.getElementById('1_3_13' ).value = $result;
        });
        var ld_1_1 = "http://172.20.43.129/smartLight/smartLightLocal/getChanged.php?nId=3&date=14";
        $.getJSON(ld_1_1, function(data) {
            var val = data;
            if(val==1) $result="OK";  if(val==0) $result="ERR";
            if(14<startDay || 14>endDay)
              $result="";
            document.getElementById('1_3_14' ).value = $result;
        });
        var ld_1_1 = "http://172.20.43.129/smartLight/smartLightLocal/getChanged.php?nId=3&date=15";
        $.getJSON(ld_1_1, function(data) {
            var val = data;
            if(val==1) $result="OK";  if(val==0) $result="ERR";
            if(15<startDay || 15>endDay)
              $result="";
            document.getElementById('1_3_15' ).value = $result;
        });
        var ld_1_1 ="http://172.20.43.129/smartLight/smartLightLocal/getChanged.php?nId=3&date=16";
        $.getJSON(ld_1_1, function(data) {
            var val = data;
            if(val==1) $result="OK";  if(val==0) $result="ERR";
            if(16<startDay || 16>endDay)
              $result="";
            document.getElementById('1_3_16' ).value = $result;
        });
        var ld_1_1 = "http://172.20.43.129/smartLight/smartLightLocal/getChanged.php?nId=3&date=17";
        $.getJSON(ld_1_1, function(data) {
            var val = data;
            if(val==1) $result="OK";  if(val==0) $result="ERR";
            if(17<startDay || 17>endDay)
              $result="";
            document.getElementById('1_3_17' ).value = $result;
        });
        var ld_1_1 = "http://172.20.43.129/smartLight/smartLightLocal/getChanged.php?nId=3&date=18";
        $.getJSON(ld_1_1, function(data) {
            var val = data;
            if(val==1) $result="OK";  if(val==0) $result="ERR";
            if(18<startDay || 18>endDay)
              $result="";
            document.getElementById('1_3_18' ).value = $result;
        });
        var ld_1_1 ="http://172.20.43.129/smartLight/smartLightLocal/getChanged.php?nId=3&date=19";
        $.getJSON(ld_1_1, function(data) {
            var val = data;
            if(val==1) $result="OK";  if(val==0) $result="ERR";
            if(19<startDay || 19>endDay)
              $result="";
            document.getElementById('1_3_19' ).value = $result;
        });
        var ld_1_1 = "http://172.20.43.129/smartLight/smartLightLocal/getChanged.php?nId=3&date=20";
        $.getJSON(ld_1_1, function(data) {
            var val = data;
            if(val==1) $result="OK";  if(val==0) $result="ERR";
            if(20<startDay || 20>endDay)
              $result="";
            document.getElementById('1_3_20' ).value = $result;
        });
        var ld_1_1 = "http://172.20.43.129/smartLight/smartLightLocal/getChanged.php?nId=3&date=21";
        $.getJSON(ld_1_1, function(data) {
            var val = data;
            if(val==1) $result="OK";  if(val==0) $result="ERR";
            if(21<startDay || 21>endDay)
              $result="";
            document.getElementById('1_3_21' ).value = $result;
        });
        var ld_1_1 = "http://172.20.43.129/smartLight/smartLightLocal/getChanged.php?nId=3&date=22";
        $.getJSON(ld_1_1, function(data) {
            var val = data;
            if(val==1) $result="OK";  if(val==0) $result="ERR";
            if(22<startDay || 22>endDay)
              $result="";
            document.getElementById('1_3_22' ).value = $result;
        });
        var ld_1_1 ="http://172.20.43.129/smartLight/smartLightLocal/getChanged.php?nId=3&date=23";
        $.getJSON(ld_1_1, function(data) {
            var val = data;
            if(val==1) $result="OK";  if(val==0) $result="ERR";
            if(23<startDay || 23>endDay)
              $result="";
            document.getElementById('1_3_23' ).value = $result;
        });
        var ld_1_1 ="http://172.20.43.129/smartLight/smartLightLocal/getChanged.php?nId=3&date=24";
        $.getJSON(ld_1_1, function(data) {
            var val = data;
            if(val==1) $result="OK";  if(val==0) $result="ERR";
            if(24<startDay || 24>endDay)
              $result="";
            document.getElementById('1_3_24' ).value = $result;
        });
        var ld_1_1 ="http://172.20.43.129/smartLight/smartLightLocal/getChanged.php?nId=3&date=25";
        $.getJSON(ld_1_1, function(data) {
            var val = data;
            if(val==1) $result="OK";  if(val==0) $result="ERR";
            if(25<startDay || 25>endDay)
              $result="";
            document.getElementById('1_3_25' ).value = $result;
        });
        var ld_1_1 ="http://172.20.43.129/smartLight/smartLightLocal/getChanged.php?nId=3&date=26";
        $.getJSON(ld_1_1, function(data) {
            var val = data;
            if(val==1) $result="OK";  if(val==0) $result="ERR";
            if(26<startDay || 26>endDay)
              $result="";
            document.getElementById('1_3_26' ).value = $result;
        });
        var ld_1_1 = "http://172.20.43.129/smartLight/smartLightLocal/getChanged.php?nId=3&date=27";
        $.getJSON(ld_1_1, function(data) {
            var val = data;
            if(val==1) $result="OK";  if(val==0) $result="ERR";
            if(27<startDay || 27>endDay)
              $result="";
            document.getElementById('1_3_27' ).value = $result;
        });
        var ld_1_1 ="http://172.20.43.129/smartLight/smartLightLocal/getChanged.php?nId=3&date=28";
        $.getJSON(ld_1_1, function(data) {
            var val = data;
            if(val==1) $result="OK";  if(val==0) $result="ERR";
            if(28<startDay || 28>endDay)
              $result="";
            document.getElementById('1_3_28' ).value = $result;
        });
        var ld_1_1 = "http://172.20.43.129/smartLight/smartLightLocal/getChanged.php?nId=3&date=29";
        $.getJSON(ld_1_1, function(data) {
            var val = data;
            if(val==1) $result="OK";  if(val==0) $result="ERR";
            if(29<startDay || 29>endDay)
              $result="";
            document.getElementById('1_3_29' ).value = $result;
        });
        var ld_1_1 ="http://172.20.43.129/smartLight/smartLightLocal/getChanged.php?nId=3&date=30";
        $.getJSON(ld_1_1, function(data) {
            var val = data;
            if(val==1) $result="OK";  if(val==0) $result="ERR";
            if(30<startDay || 30>endDay)
              $result="";
            document.getElementById('1_3_30' ).value = $result;
        });
        var ld_1_1 = "http://172.20.43.129/smartLight/smartLightLocal/getChanged.php?nId=3&date=31";
        $.getJSON(ld_1_1, function(data) {
            var val = data;
            if(val==1) $result="OK";  if(val==0) $result="ERR";
            if(31<startDay || 31>endDay)
              $result="";
            document.getElementById('1_3_31' ).value = $result;
        });
        var ld_1_1 ="http://172.20.43.129/smartLight/smartLightLocal/getChanged.php?nId=3&date=32";
        $.getJSON(ld_1_1, function(data) {
            var val = data;
            if(val==1) $result="OK";  if(val==0) $result="ERR";
            if(32<startDay || 32>endDay)
              $result="";
            document.getElementById('1_3_32' ).value = $result;
        });
        var ld_1_1 = "http://172.20.43.129/smartLight/smartLightLocal/getChanged.php?nId=3&date=33";
        $.getJSON(ld_1_1, function(data) {
            var val = data;
            if(val==1) $result="OK";  if(val==0) $result="ERR";
            if(33<startDay || 33>endDay)
              $result="";
            document.getElementById('1_3_33' ).value = $result;
        });
    }
   window.setInterval(function() {
        loaddata();
    }, 5000); 
    </script>
</html>

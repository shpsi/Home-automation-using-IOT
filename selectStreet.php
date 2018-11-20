<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>

<html>
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        body{ font: 14px sans-serif; text-align: center; }
    </style>
     <a href="logout.php" class="btn btn-danger">Sign Out of Your Account</a>
	<body align="center">
               <h1> STREET 1 </h1>
		<form action="1/interface.php">
  			<input type="submit" value="Control Interface">
               </form>
		<form action="1/errorgui.php">
  			<input type="submit" value="Errror Manager">
               </form>
               <h1> STREET 2 </h1>
		<form action="2/interface.php">
  			<input type="submit" value="Control Interface">
               </form>
		<form action="2/errorgui.php">
  			<input type="submit" value="Errror Manager">
               </form>
	</body>
</html>

<?php
	$myfile=fopen("startDay.txt","r") or die("unable to open file");
	echo fread($myfile,filesize("startDay.txt"));
   	fclose($myfile);
?>

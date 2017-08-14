<?php
	
	try {
		include 'connection.php';
	}
	catch (Exception $e) {
		echo $e;
		exit;
	}
	
	$deskid = $_POST["deskid"];
	$xpos = $_POST["xpos"];
	$ypos = $_POST["ypos"];

	$sql = "UPDATE desk_location SET xpos=".$xpos.", ypos=".$ypos." WHERE deskid=".$deskid;

	$conn->query($sql);


?>
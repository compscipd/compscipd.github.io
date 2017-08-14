<?php
	
	try {
		include 'connection.php';
	}
	catch (Exception $e) {
		echo $e;
		exit;
	}
	
	$sql = "SELECT deskid,xpos,ypos FROM desk_location";

	if ($result = $conn->query($sql)) {
		
		$output = "";
		
		while($row = $result->fetch_array(MYSQLI_ASSOC)) {
			$deskid = $row["deskid"];
			$xpos = $row["xpos"];
			$ypos = $row["ypos"];
			
			$output.="<div data-deskid='".$deskid."' class='desk greenBorder' style='position:absolute; left: ".$xpos."px; top: ".$ypos."px'><p>Justin Landfried ".$deskid."</p></div>";

		}
		
		echo $output;
		
	}


?>
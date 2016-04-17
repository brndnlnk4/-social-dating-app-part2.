<?php
include($_SERVER['DOCUMENT_ROOT']."/m8tod8/incl/sv.php");

$sql = "SELECT `mem_likes` 
		FROM `members`
		WHERE `id` = '{$_REQUEST['memId']}'";

$rzlt = mysqli_query($dbCon,$sql) or die(mysqli_error($dbCon));
 	
	while($currentLikes = mysqli_fetch_assoc($rzlt)){
	  
	  $likes = $_REQUEST['memName'].','.$currentLikes['mem_likes'];
 
		$q = "UPDATE `members`
			  SET `mem_likes` = '$likes'
			  WHERE `id` = '{$_REQUEST['memId']}'";
		mysqli_query($dbCon,$q);		  

		break;
	} //END while
 
?>
<?php
include($_SERVER['DOCUMENT_ROOT']."/m8tod8/incl/sv.php");
 //memReceiver:memReceiver,memSender:
$sql = "INSERT INTO `friend_request`
					(`req_receiver`,
					 `req_sender`)
		VALUES ('{$_REQUEST['memReceiver']}',
				'{$_REQUEST['memSender']}')";

$rzlt = mysqli_query($dbCon,$sql) or die(mysqli_error($dbCon));
?>
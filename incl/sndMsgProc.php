<?php
include($_SERVER['DOCUMENT_ROOT']."/m8tod8/incl/sv.php");
$_REQUEST['msg'] = mysqli_real_escape_string($dbCon,$_REQUEST['msg']);
$_REQUEST['msg'] = addcslashes($_REQUEST['msg'], '%_<');
$sql = "INSERT INTO `member_messages`
					(`member_messages`,
					 `message_receiver`,
					 `message_sender`,
					 `message_d8`)
		VALUES ('{$_REQUEST['msg']}',
				'{$_REQUEST['memReceiver']}',
				'{$_REQUEST['memSender']}',
				NOW())";

$rzlt = mysqli_query($dbCon,$sql) or die(mysqli_error($dbCon));

?>
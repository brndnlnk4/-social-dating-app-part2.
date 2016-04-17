<?php
include($_SERVER['DOCUMENT_ROOT']."/m8tod8/incl/sv.php");
include($_SERVER['DOCUMENT_ROOT']."/m8tod8/ses.php");
include($_SERVER['DOCUMENT_ROOT']."/m8tod8/funk.php");
///row_id:row_id,choice:btnId,f_name:btnFriend

if($_REQUEST['choice'] == 'accept'){
$memId = getMemIdByMemName($_REQUEST['f_name']);
	
$sql = "SELECT `mem_friends` 
		FROM `members`
		WHERE `id` = '$memId'";
$rzlt = mysqli_query($dbCon,$sql) or die(mysqli_error($dbCon));
	while($currentFriends = mysqli_fetch_assoc($rzlt)){
	  $new_friends = $_REQUEST['f_name'].','.$currentFriends['mem_friends'];
 	 break;
	}
$qry = "UPDATE `members` 
		SET `mem_friends` = '$new_friends'
		WHERE `id` LIKE "._ID_;
$upd = mysqli_query($dbCon,$qry) or die(mysqli_error($dbCon));

 $q = "UPDATE `friend_request`
	  SET `req_status` = '1'
	  WHERE `id` LIKE '{$_REQUEST['row_id']}'";
 mysqli_query($dbCon,$q);
	
}elseif($_REQUEST['choice'] == 'reject'){
 $q = "DELETE FROM `friend_request` WHERE `id` LIKE '{$_REQUEST['row_id']}'";
 mysqli_query($dbCon,$q);
}
//IF ACCEPT UPDATE RECEIVERS FRND LIST
?>
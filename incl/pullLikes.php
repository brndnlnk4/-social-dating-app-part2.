<?php
include($_SERVER['DOCUMENT_ROOT']."/m8tod8/incl/sv.php");
include($_SERVER['DOCUMENT_ROOT']."/m8tod8/ses.php");
include($_SERVER['DOCUMENT_ROOT']."/m8tod8/funk.php");
if(isset($_REQUEST['id']) && !empty($_REQUEST['id'])){
	$q = "SELECT `mem_likes`
		  FROM `members`
		  WHERE `id` LIKE '{$_REQUEST['id']}'";
	$r = mysqli_query($dbCon,$q) or die(mysqli_error($dbCon));
	while($rw = mysqli_fetch_assoc($r)){
		$likes = $rw['mem_likes'];			 
		$repl = substr($likes,-1);
		 if($repl == ','){
			$likes = substr_replace($likes,'',-1);
		 }
		 $like = explode(',',$likes);
		 foreach($like AS $liked){
			 if($liked == _USR_){
				  break;
			 }else{
				$newLike = _USR_ .','. $rw['mem_likes'];
				
				$upd = mysqli_query($dbCon,"UPDATE `members` SET `mem_likes` = '$newLike' WHERE `id` LIKE '{$_REQUEST['id']}'");
			 }
		 }
	 break;
	}
}
$getGndrPref = "SELECT `mem_gender_pref`
			  FROM `members`
			  WHERE `id` LIKE '{$_SESSION['myId']}'";
$myGndrPref = mysqli_query($dbCon,$getGndrPref) or die(mysqli_error($dbCon));		
while($gndrPref = mysqli_fetch_array($myGndrPref)){
	$pref = trim($gndrPref['mem_gender_pref']);
 break;
}		//
$qry = "SELECT `id`,`mem_avatar`
		FROM `members` ";
	if(!empty($pref)){
$qry .= " WHERE `mem_gender` = '$pref'";
	}
$rzlt = mysqli_query($dbCon,$qry) or die(mysqli_error($dbCon));
	if(mysqli_num_rows($rzlt) > 0){
		$rand = array();
		while($rows = mysqli_fetch_assoc($rzlt)){
			 $rand[$rows['id']] = $rows['id'];	
			$randm = array_rand($rand,1);
			$avatr = $rows['mem_avatar'];	

		}
		echo '%'.$randm.'%';
		echo $avatr;
	}
?>
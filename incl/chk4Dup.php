<?php	include("sv.php");
$usrName = $_REQUEST['usrName'];
///////////////////////////
if(isset($usrName) && !empty($usrName)){
	$qry = "SELECT `mem_username` 
		  FROM `members`
		  WHERE `mem_username`
		  LIKE '$usrName'";
	$r = mysqli_query($dbCon,$qry) or die(mysqli_error($dbCon));
	 if(mysqli_num_rows($r) > 0){
		echo "1";
	}else{
		echo "0";
	}
}
?>
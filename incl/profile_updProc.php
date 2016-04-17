<?php
include($_SERVER['DOCUMENT_ROOT']."/m8tod8/incl/sv.php");
//// THIS IS PRIMARY PHP PROCESS FILE FOR PROFILE EDITS\\\\\\\\\\\
//// THIS IS PRIMARY PHP PROCESS FILE FOR PROFILE EDITS\\\\\\\\\\\
/////////////////////////////////////////////////////////
if(isset($_REQUEST['socialNetwork'])){ 
 $collumn = "mem_".trim(strtolower($_REQUEST['socialNetwork']));	
  if(trim($_REQUEST['socialUrl']) !== ''){
	 $_REQUEST['socialUrl'] = mysqli_real_escape_string($dbCon,$_REQUEST['socialUrl']);
	 $_REQUEST['socialUrl'] = urldecode($_REQUEST['socialUrl']);
  }
$sql = "UPDATE `members`
		SET `$collumn` = '{$_REQUEST['socialUrl']}' 
		WHERE `id` LIKE '{$_REQUEST['memId']}'";
$rzlt = mysqli_query($dbCon,$sql) or die(mysqli_error($dbCon));	
}
/////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////

elseif(isset($_REQUEST['manOrWoman'])){
$sql = "UPDATE `members`
		SET `mem_gender_pref` = '{$_REQUEST['manOrWoman']}' 
		WHERE `id` LIKE '{$_REQUEST['memId']}'";
$rzlt = mysqli_query($dbCon,$sql) or die(mysqli_error($dbCon));
/////////////////////////////////////////////////////////
////TAB 1////////////////////////////////////////////////
/////////////////////////////////////////////////////////
}elseif(isset($_REQUEST['outputDiv']) && $_REQUEST['outputDiv'] == 't1'){
 if(isset($_REQUEST['kids']) && strtolower($_REQUEST['kids']) == "yes"){
	 $_REQUEST['kids'] = '1';
 }else{
	 $_REQUEST['kids'] = '0';
 }
	$sql = "UPDATE `members` SET";
			if(strlen($_REQUEST['skills']) > 0){
	$sql .= " `mem_skills` = '{$_REQUEST['skills']}', ";
			}
	$sql .= " `mem_kids` = '{$_REQUEST['kids']}' 
			WHERE `id` LIKE '{$_REQUEST['memId']}'";
$rzlt = mysqli_query($dbCon,$sql) or die(mysqli_error($dbCon));		
/////////////////////////////////////////////////////////
////TAB 2////////////////////////////////////////////////	
/////////////////////////////////////////////////////////	
}elseif(isset($_REQUEST['outputDiv']) && $_REQUEST['outputDiv'] == 't2'){
 if($_REQUEST['ideal_m8type'] == "Make Your Selection"){
	 $_REQUEST['ideal_m8type'] = "";
 }elseif($_REQUEST['m8_mustBe'] == "Make Your Selection"){
	 $_REQUEST['m8_mustBe'] = "";	 
 }
	$sql = " UPDATE `members` SET ";
		if($_REQUEST['ideal_m8type'] !== ""){
	$sql .= " `mem_ideal_m8type` = '{$_REQUEST['ideal_m8type']}', ";
		}
		if(strlen($_REQUEST['m8_mustBe']) > 0){
	$sql .= " `mem_m8_mustBe` = '{$_REQUEST['m8_mustBe']}' ";
		}
		if(strlen($_REQUEST['brunette']) > 0){			
	$sql .= " , mem_ethnicity_pref = '{$_REQUEST['brunette']}' ";
		}elseif(strlen($_REQUEST['blonde']) > 0){						
	$sql .= " , mem_ethnicity_pref = '{$_REQUEST['blonde']}' ";
		}elseif(strlen($_REQUEST['black']) > 0){
	$sql .= " , mem_ethnicity_pref = '{$_REQUEST['black']}' ";
		}elseif(strlen($_REQUEST['red']) > 0){
	$sql .= " , mem_ethnicity_pref = '{$_REQUEST['red']}' ";
		}elseif(strlen($_REQUEST['brown']) > 0){
	$sql .= " , mem_ethnicity_pref = '{$_REQUEST['brown']}' ";
		}
	$sql .= " WHERE id LIKE '{$_REQUEST['memId']}' ";

$rzlt = mysqli_query($dbCon,$sql) or die(mysqli_error($dbCon));		
/////////////////////////////////////////////////////////	
////TAB 3////////////////////////////////////////////////	
/////////////////////////////////////////////////////////		
}elseif(isset($_REQUEST['outputDiv']) && $_REQUEST['outputDiv'] == 't3'){
 if($_REQUEST['location'] == "Make Your Selection"){
	 $_REQUEST['location'] = "";
 }
	$sql = "UPDATE `members`
			SET `mem_location` = '{$_REQUEST['location']}', ";
		if(strlen($_REQUEST['prof_desc']) > 0){
	$sql .= "`mem_description` = '{$_REQUEST['prof_desc']}', ";
		}
		if(strlen($_REQUEST['friday']) > 0){
	$sql .= "`mem_friday` = '{$_REQUEST['friday']}' "; 
		}
 	$sql .= "WHERE `id` LIKE '{$_REQUEST['memId']}'";

$rzlt = mysqli_query($dbCon,$sql) or die(mysqli_error($dbCon));		
/////////////////////////////////////////////////////////			
////TAB 4////////////////////////////////////////////////
/////////////////////////////////////////////////////////			
}elseif(isset($_REQUEST['outputDiv']) && $_REQUEST['outputDiv'] == 't4'){
if($_REQUEST['privOrPublic'] == "private"){
	$val = '1';
}elseif($_REQUEST['privOrPublic'] == "public"){
	$val = '0';	
}else{
	$val = "";
}
$sql = "UPDATE `members`
		SET `mem_private` = '$val'
 		WHERE `id` = '{$_REQUEST['memId']}'";

$rzlt = mysqli_query($dbCon,$sql) or die(mysqli_error($dbCon));	
}
/////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////

?>
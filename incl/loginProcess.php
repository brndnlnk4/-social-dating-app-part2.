<?php

 if(isset($_GET[md5('logout')]) && $_GET[md5('logout')] == md5('s')){
 
 require($_SERVER['DOCUMENT_ROOT']."/m8tod8/incl/sv.php"); 

	$d8 = date('Y-m-d');
	$qry = "UPDATE `members` 
			SET `last_login` = '$d8'
			WHERE `mem_username` = '{$_SESSION['username']}'";
  			$_SESSION = array();
			session_unset();
			session_destroy();
			//unset($_SESSION['username']);
			header("Location: ?$logout=$success");
 			//break;
	} 
/*
	 <input type='hidden' name='yoName' value='' id='real_name' required />
	 <input type='hidden' name='dob' value='' id='usr_dob' required />
	 <input type='hidden' name='email1' value='' id='usr_email' required />
	 <input type='hidden' name='usrname' value='' id='usr_name' required />
	 <input type='hidden' name='pw' value='' id='urs_pw' required />
	 <input type='hidden'  name='gender' value='' id='gender' required />
	 <input type='hidden'  name='ethnicity' value='' id='ethnicity' required />
*/
if(isset($_POST['registration_submitted'])){

  require($_SERVER['DOCUMENT_ROOT']."/m8tod8/incl/sv.php"); 

	$_POST['usrname'] = mysqli_real_escape_string($dbCon,$_POST['usrname']);
	$_POST['usrname'] = strip_tags(addcslashes($_POST['usrname'], '%_*'));
	$_POST['pw'] = mysqli_real_escape_string($dbCon,$_POST['pw']);
	$_POST['pw'] = strip_tags($_POST['pw']);
	$_POST['email1'] = mysqli_real_escape_string($dbCon,$_POST['email1']);
 		/////////////////////////////
		$qry = "INSERT INTO `members` (
							mem_username,
							mem_password,
							mem_email,
							mem_dob,
							mem_gender,
							mem_ethnicity,
							date_joined,
 							last_login)
					VALUES('{$_POST['usrname']}',
						   '{$_POST['pw']}',
						   '{$_POST['email1']}',
						   '{$_POST['dob']}',
						   '{$_POST['gender']}',
						   '{$_POST['ethnicity']}',
						   NOW(),
						   NOW())";
		$rzlt = mysqli_query($dbCon,$qry) or die(mysqli_error());
				
			session_start();
			
			$_SESSION['username'] = trim($_POST['usrname']);
}
///////////////////////////////////////////////////////
///////////////////////////////////////////////////////
?>

<?php   ///////PHP FUCKING ROCKS!!!!\\\\\\\

//require($_SERVER['DOCUMENT_ROOT']."/m8tod8/ses.php");


/////////////////////////////////////////
/////////////////////////////////////////
/////////////////////////////////////////
?>
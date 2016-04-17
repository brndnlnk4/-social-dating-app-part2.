<?php
include($_SERVER['DOCUMENT_ROOT']."/m8tod8/incl/sv.php");

	$sql = "SELECT {$_REQUEST['row']}
			FROM {$_REQUEST['table']} ";
		if(isset($_REQUEST['where']) && !empty($_REQUEST['where'])){
	$sql .= " WHERE {$_REQUEST['where']} = {$_REQUEST['whereThis']} ";	
		}
		$r = mysqli_query($dbCon,$sql) or die(mysqli_error($dbCon));
		if(mysqli_num_rows($r) > 0){
			while($row = mysqli_fetch_assoc($r)){
			  $k = trim($_REQUEST['row']);
			  
 				echo $row[$k];
				
			}			
		} 
?>
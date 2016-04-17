	<?/// FRIENDS LIST \\\?>
<?php
$sql = "SELECT `mem_friends` 
		FROM `members`
		WHERE `id` LIKE "._ID_;
$rzlt = mysqli_query($dbCon,$sql) or die(mysqli_error($dbCon));
  if(mysqli_num_rows($rzlt) > 0){
	$cnt = -1;
	while($currentFriends = mysqli_fetch_assoc($rzlt)){
	 ////strip last comma
	 $last_chr = substr($currentFriends['mem_friends'],-1);
	 if($last_chr == ','){
		$currentFriends['mem_friends'] = substr_replace($currentFriends['mem_friends'],'', -1);
	 }	 
	  $friends = explode(',', $currentFriends['mem_friends']);
	  
	  foreach($friends AS $friend[$cnt++]){
		  $id = getMemIdByMemName($friends[$cnt]);
 ?>
		<tr>
		 <td align='center' valign='center'>
			<?// AVATAR \\?>
		  <a href='<?=echoMemUrlById(getMemIdByMemName($friends[$cnt]))?>' target='_self' valign='center'>
			<img src='/m8tod8/prof/upl/<?=get_memsAvatr($friends[$cnt])?>' valign='center' title='<?="exName"?>' width='35px' class='img-responsive img-rounded' />		  
		  </a>
		 </td>
		 <td>
		  <span id='frndListName'>
			<?// STATUS \\?>
			<small class='text-info'>

		    <a href='<?=echoMemUrlById($id)?>' target='_self' valign='center'>
			 <?=ucfirst($friends[$cnt])?>
		    </a>

			</small>
		  </span>
		 </td>
		 <td>
		  <span id='frndListStatus'>
			<?// STATUS \\?>
			<small>
			 <?php
			  $chk = mysqli_query($dbCon,"SELECT `logged_in` FROM `members` WHERE `id` LIKE '$id'");
				while($chkLog = mysqli_fetch_array($chk)){
					if($chkLog[0] == '1'){
						echo "Online";
					}else{
						echo "Offline";
					}
				 break;
				}
			 ?>
			 
			</small>
		  </span>		  
		 </td>
		</tr>
<?php
		}///END of foreach
	 break;
	}//END while
}///END num_rows
?>	

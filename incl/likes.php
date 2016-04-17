<?php	  
$qry = "SELECT `mem_likes` 
		FROM `members`
		WHERE `id` = '{$_SESSION['myId']}'";
$rzlt = mysqli_query($dbCon,$qry) or die(mysqli_error($dbCon));
 $cnt = -1;
  if(mysqli_num_rows($rzlt) > 0){
	while($currentLikes = mysqli_fetch_assoc($rzlt)){
	 /////strip last comma
	 $last_char = substr($currentLikes['mem_likes'],-1);
	 if($last_char == ','){
		$currentLikes['mem_likes'] = substr_replace($currentLikes['mem_likes'],'', -1);
	}
	  $likes = explode(',', trim($currentLikes['mem_likes']));
	 
 	 foreach($likes AS $like[$cnt++]){
 ?>
	  <ul class='list-inline well well-sm' style='padding:2px 3px;'>
	    <li class='list-item ' >
		  <?/// LIKES MEM THUMBNAIL \\\?>
		   <a href='<?=echoMemUrlById(getMemIdByMemName($likes[$cnt]))?>' target='_self' >
			<img src='/m8tod8/prof/upl/<?=get_memsAvatr($likes[$cnt])?>' width='30px' class='pull-left img-responsive img-rounded' title='Likes' />		   
		   </a>
		</li>
	    <li class='list-item ' >
		 <span class=' ' style='color:#888;border-bottom:1px dotted #ccc;position:relative;bottom:10px;'>
		  <?/// MEMBER NAME THAT LIKES U \\\?>
		  <small>
		   <strong class='text-info'>
		    <a href='<?=echoMemUrlById(getMemIdByMemName($likes[$cnt]))?>' target='_self' >
			 <?=ucfirst($likes[$cnt])?>
		    </a>
		   </strong> Likes You!
		  </small>
		 </span>
		 
		</li>
	   </ul>	
<?php
	 } //END foreach	 
	 break;
	} //END while
}//END num_rows 	
?>
	   
 
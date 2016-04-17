<?php
  ///////////////////////////////////////////
  ///////////////////////////////////////////
  ///////////////////////////////////////////
$q = "SELECT *
	  FROM `member_messages` ";
	if(isset($_GET['inbox'])){
$q .= " WHERE `message_read` LIKE '0' 
		OR `msg_id4rply` IS NULL "; 
	}else{
$q .= " WHERE `msg_id4rply` IS NULL ";
	}  
$q .= " ORDER BY `id` DESC";

 $r = mysqli_query($dbCon, $q) or die(mysqli_error($dbCon));
  if(mysqli_num_rows($r) > 0){

	while($msgRow = mysqli_fetch_assoc($r)){
			
?>
<?//// INBOX CONTENT \\\?>				 
 <li id='msgLiCntnr' name='<?=$listCnt++?>' class='<?=$msgRow['id']?>'>

  <h4 class='inboxH4' id='<?=$msgRow['id']?>' onclick='ifUnreadChange2Read(this.id)'>	
	
	<?/// MSG-UNREAD notification \\\?>
	<img src='/m8tod8/css/img/Messages.png' name='msgIcon'  class='<?=ifIssetAndEquals($msgRow['message_sender'],$_SESSION['username'],"hide","img-responsive pull-left")?>' id='<?=ifIssetAndEquals($msgRow['message_read'],"0","unreadImg","hide")?>' width='20px' style='margin-top:-7px;' />

	<?/// MSG SENDER \\\?>
	<small class='pull-right text-muted' style='margin-top:-2px;'> 
	<?=ifIssetAndEquals($msgRow['message_sender'],$_SESSION['username'],"Sent to:","From:")?>
	
	 <a href='<?=echoMemUrlById(getMemIdByMemName($msgRow['message_sender']))?>' type='button' class='btn-link' target='_self' >
	  <b class='text-muted'>
	   
	   <?=ifIssetAndEquals($msgRow['message_sender'],$_SESSION['username'],ucfirst($msgRow['message_receiver']),ucfirst($msgRow['message_sender']))?> 
	  
	  </b> 
	 </a> 
	</small>	
	
	 <?/// DEL & RPLY BTN \\\?>
	 <br>
	  <div id='delRplyBtn' class='btn-group btn-group-sm'>
		<button type='button' class='btn' name='<?=$listCnt?>' onclick='var li = "<?='#rplyBox'.$listCnt?>"; $(li).toggle("fast");' <?=ifIssetAndEquals($msgRow['message_sender'],$_SESSION['username'],"","style='min-width:130px;'")?>>Reply</button>
		<button type='button' class='btn' name='<?=$listCnt?>' onclick='delMsg("<?=$msgRow['id']?>")' <?=ifIssetAndEquals($msgRow['message_sender'],$_SESSION['username'],"style='border-radius:0 3px 3px 0;'","style='display:none;'")?>>Delete</button>

		<?/// SENDER AVATAR 'WHO USR IS TALKING 2'  \\\?>
	   <img src='/m8tod8/prof/upl/<?=strtolower(get_memsAvatr($msgRow['message_sender']))?>' class='img-responsive img-circle pull-right' width='30px' style='max-height:35px;border:2px solid #fff;margin-right:3px;' />
		
	  </div>
	</h4>
	  <?// MESSAGE \\?>
	  <div id='cont' class='outputCntnr<?=$listCnt?>' style='max-height:350px;background-color:#EAE3E3;font-weight:normal;text-align:left;overflow-y:scroll;word-wrap:break-word;font-size:86%;'>
		
		<span id="<?='msg'.$msgRow['id']?>" style='display:block;max-width:100%;min-width:65%;background-color:#F7EEE7;border-radius:5px;padding:2.5px 3px;margin-bottom:5px;color:#777;border:1px solid #999;'>
		  
		  <sub class='pull-left'>
		   <strong class='label' style='background-color:rgba(0,0,0,0.25);'>
		   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		    <?=$msgRow['message_sender']?>
		   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		   </strong>
		  </sub>
		<sub class='pull-right'>
		 <b class='' style='padding-top:2.5px;'>
		 
		  <?// D8 \\?>	
		  <?=getD8Re4matted($msgRow['message_d8'])?>
		  <?// D8 \\?>
		  
		 </b>
		</sub>
 		 <br>
		 
 		<?/// MSG \\\?>
		<text></text>
		<?=nl2br($msgRow['member_messages'])?>
		
		</span>

	<?// REPLY \\?><?// REPLY \\?>
	<?// REPLY \\?><?// REPLY \\?>
		
<?php
$sql = "SELECT *
		FROM `member_messages` ";
	if(isset($_GET['inbox'])){
$sql .= " WHERE `message_read` LIKE '0' 
			AND `msg_id4rply` IN (
			SELECT `id` 
			FROM `member_messages` 
			WHERE `message_read` LIKE '0')
			OR `msg_id4rply` 
			LIKE '{$msgRow['id']}' ";
	}else{
$sql .= " WHERE `msg_id4rply` 
		LIKE '{$msgRow['id']}' ";		
	}
$sql .= " ORDER BY `id` ASC"; 
	
 $rzlt = mysqli_query($dbCon, $sql) or die(mysqli_error($dbCon));
  if(mysqli_num_rows($rzlt) > 0){
	while($rplyRow = mysqli_fetch_assoc($rzlt)){
		
	////rply[msg_rcvr] = rply_sndr	
	////rply[msg_sndr] = rply_rcvr	
		ifIssetAndEquals($rplyRow['message_receiver'],$msgRow['message_sender'],"<span id='msg{$rplyRow['id']}' style='display:inline-block;max-width:95%;min-width:75%;padding:3px 3px;border-radius:4px;overflow-y:auto;background-color:rgb(250, 216, 216);margin-bottom:5px;color:#777;border:1px solid #999;'>","<span id='msg{$rplyRow['id']}' style='display:block;max-width:100%;min-width:65%;background-color:#F7EEE7;border-radius:5px;padding:3.5px 3px;margin-bottom:5px;color:#777;border:1px solid #999;'>");
?>
 			  
			  <sub class='pull-left'>
				 
			   <?// REPLIER NAME \\?>
			    <a href='<?=echoMemUrlById(getMemIdByMemName($rplyRow['message_receiver']))?>' type='button' class='btn-link label' target='_self' style='color:#fff;background-color:rgba(0,0,0,0.17);'>
				 
				 <?=ifIssetAndEquals($rplyRow['message_sender'],$_SESSION['username'],"Me",$rplyRow['message_sender'])?>
 				
				</a>
				
 			  </sub>
			  <sub class='pull-right'>
			   <b class=''>
			    <?// REPLY D8 \\?>
			    <?=getD8Re4matted($rplyRow['message_d8'])?>
			   </b>
			  </sub>
			 <br>
			 <?// REPLY \\?>
			 <?=nl2br($rplyRow['member_messages'])?>
			
			</span>				
		<?php
		} //END while rply
	  } //END num rows > 0 rply
	?>			

	  </div>
   <div id='rplyBox<?=$listCnt?>' style='display:none;'>
	
	<textarea class='form-control input-lg' placeholder='Reply to Sender' style='border-radius:0 0 10px 10px;'></textarea>			  
	 
	 <button name='<?=$listCnt?>' type='button' class='btn btn-sm rplyBtn' style='width:100%;'  msg-id='<?=$msgRow['id']?>' mem-sndr="<?=$_SESSION['username']?>" mem-rcvr="<?=$msgRow['message_sender']?>">Reply</button>
   
   </div>			 
 </li>
<?php
	}// END while msg
} //END num rows
else{
//////////DUMMY ROW//////////
?>
<li>
  <span class='text-left'>
	<?/// SENDER AVATAR 'WHO USR IS TALKING 2'  \\\?>
	<strong class='lead'>
	 Oops...
	</strong>
  </span>
  <div id='cont' style='background-color:;font-weight:bold;text-align:center;word-wrap:break-word;'>
	 No Messages
  </div>
 </li>
<?php	
} //END dummy row
?>
	<?///END OF INBOX\\\?><?///END OF INBOX\\\?>
	<?///END OF INBOX\\\?><?///END OF INBOX\\\?>


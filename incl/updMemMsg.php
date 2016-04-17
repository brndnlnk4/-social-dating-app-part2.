<?php
include($_SERVER['DOCUMENT_ROOT']."/m8tod8/incl/sv.php");
include($_SERVER['DOCUMENT_ROOT']."/m8tod8/ses.php");
include($_SERVER['DOCUMENT_ROOT']."/m8tod8/funk.php");
///msg-read:"read_id"
///snd:"member_messages,message_receiver,message_sender"
///del:"msg_id,msg_id4rply
///rply:"member_messages,message_receiver,message_sender,msg_id"
////////////////////////////////////////////////////////////
//////////UPDATE UNREAD	 2 READ
if(isset($_REQUEST['read']) && !empty($_REQUEST['read'])){
	$q = "UPDATE `member_messages`
		SET `message_read` = 1
		WHERE `id` = '{$_REQUEST['read_id']}'
		AND `message_sender` <> '{$_SESSION['username']}'";
		
	mysqli_query($dbCon,$q) or die(mysqli_error($dbCon));
	 ////check if all set to 'read' 2 update nav unread-icon
	 $r = mysqli_query($dbCon,"SELECT `message_read`
								FROM `member_messages`
								WHERE `message_read` = '0'
								AND `message_sender` <> '{$_SESSION['username']}'
								ORDER BY `id` ASC LIMIT 1") or die(mysqli_error($dbCon));
		if(mysqli_num_rows($r) == 0){
			echo "1"; //1 = no unread msg's left
		}
} ////////////////////////////////////////////////////////////
//////////SEND	4rom 'friends' tab
elseif(isset($_REQUEST['snd']) && !empty($_REQUEST['snd'])){
	$q = "INSERT INTO `member_messages`(
					`member_messages`,
					`message_sender`,
					`message_receiver`,
					`message_d8`)
		VALUES (
				'{$_REQUEST['member_messages']}',
				'{$_REQUEST['message_sender']}',
				'{$_REQUEST['message_receiver']}',
				NOW())";
		
	mysqli_query($dbCon,$q) or die(mysqli_error($dbCon));
} ////////////////////////////////////////////////////////////
////////// REPLY	
elseif(isset($_REQUEST['rply']) && $_REQUEST['rply'] == '1'){
		$q = "INSERT INTO `member_messages`(
					`member_messages`,
					`message_sender`,
					`message_receiver`,
					`message_d8`,
					`msg_id4rply`)
		VALUES (
				'{$_REQUEST['member_messages']}',
				'{$_REQUEST['message_sender']}',
				'{$_REQUEST['message_receiver']}',
				NOW(),
				'{$_REQUEST['msg_id']}')";
		mysqli_query($dbCon,$q) or die(mysqli_error($dbCon));
 	////pull msg contnt
 	////pull msg contnt
	$qr = "SELECT *
		  FROM `member_messages`
		  WHERE `id` 
		  LIKE '{$_REQUEST['msg_id']}'
 		  ORDER BY `id` DESC";

	 $r = mysqli_query($dbCon, $qr) or die(mysqli_error($dbCon));
	if(mysqli_num_rows($r) > 0){

	while($msgRow = mysqli_fetch_assoc($r)){
			
?>
	  <?// MESSAGE \\?>

		<span style='display:block;max-width:100%;min-width:65%;background-color:#F7EEE7;border-radius:5px;padding:2.5px 3px;margin-bottom:5px;color:#777;border:1px solid #999;'>
		  <sub class='pull-left'>
		   <strong class='label' style='background-color:rgba(0,0,0,0.25);'>
		   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		    <?="Me"?>
		   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		   </strong>
		  </sub>
		<sub class='pull-right'>
			<b class='' >
			<?// D8 \\?>	
			<?=getD8Re4matted($msgRow['message_d8'])?>
		    </b>
		</sub>
 		 <br>
		 
 		<?/// MSG \\\?>
		<text></text>
		<?=nl2br($msgRow['member_messages'])?>
		
		</span>
		
	<?// REPLY \\?><?// REPLY \\?>
	<?// REPLY \\?><?// REPLY \\?>
	
	<?php ///check if any more unread msgs
  $sql = "SELECT * 
		  FROM `member_messages`
		  WHERE `msg_id4rply` 
		  LIKE '{$msgRow['id']}'
		  ORDER BY `id` ASC"; 
		
	 $rzlt = mysqli_query($dbCon, $sql) or die(mysqli_error($dbCon));
	  if(mysqli_num_rows($rzlt) > 0){
		while($rplyRow = mysqli_fetch_assoc($rzlt)){
			
	////rply[msg_rcvr] = rply_sndr	
	////rply[msg_sndr] = rply_rcvr	
		ifIssetAndEquals($rplyRow['message_receiver'],$msgRow['message_sender'],"<span style='display:inline-block;max-width:95%;min-width:65%;padding:2px 3px;border-radius:4px;overflow-y:auto;background-color:rgb(250, 216, 216);margin-bottom:5px;color:#777;border:1px solid #999;'>","<span style='display:block;max-width:100%;min-width:65%;background-color:#F7EEE7;border-radius:5px;padding:2.5px 3px;margin-bottom:5px;color:#777;border:1px solid #999;'>");
		
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
<?php 
	} //END while
} //END NUM ROWS
//////////////////////////////////////////////////////////
//////////DELETE 	
}elseif(isset($_REQUEST['del']) && !empty($_REQUEST['msg_id'])){
	$q = "DELETE FROM `member_messages`
		WHERE `id` = {$_REQUEST['msg_id']}
		OR `msg_id4rply` = {$_REQUEST['msg_id']}";
		
	mysqli_query($dbCon,$q) or die(mysqli_error($dbCon));
}
////////////////////////////////////////////////////////////
?>

<?/// PIC ENLARGED MODAL \\\?>
<?/// PIC ENLARGED MODAL \\\?>
<?/// PIC ENLARGED MODAL \\\?> 
<div id='myModal1' class='modal modal1' >
 
<style>
  #cmtRplySec:nth-of-type(odd){
		background-color: rgba(107,128,160,0.15);
		color:#C6D2E4;
 		position: relative;
		left: 5%;
		min-width:85%;
 	}
	#cmtRplySec:nth-of-type(even){
		background-color: rgba(139,172,197,0.28);
		color:#C1CDFF;
	    position: relative;
		left: 5%;	
		min-width:85%;		
	}
	#cmtRplySec{
 	}
</style>
	
 <div class='modal-content' style='min-height:350px;'>
   
   <span class='close' style='margin-bottom:10px;' onclick='closeModal()' >
	 <button class='btn btn-danger'>X</button>
   </span>
   
	<p align='center' valign='center'>
	  
	  <img src='' id='picEnl' title='Picture' width='600px' class='img-responsive' />
	    <figcaption class='lead text-center' style='border:1px solid #999;border-top:none;'>
		 <small>
		  <?="Pic Caption"?>
		 </small>
		</figcaption>
	  
	   <?// r8 icons \\?>
	   <center>	
	    R8 Icons here 
	   </center>		  
	  <div style='border:none;' >

		<table class='table table-condensed' id='' cellspacing='0' cellpadding='0' >
		 <tr>
		  <td align='center' rowspan='1' colspan='100%' > 
			<p align='left' class='text-left text-primary'>
<?///////////////////////////////////////////////////////////////////?>
<?///////////////////////////////////////////////////////////////////?>
<table class='table-responsive table-striped table-condensed' id='vidOutput' cellspacing='0' cellpadding='1' width='95%'  cols='2' style=''>
 <tbody>
   <tr>
    <th colspan='100%' align='center'>
     <b class='center-block text-center' style='font-size:90%;'>
	 Post a Comment
     </b>		

	</th>
	
   </tr>
   <tr style='background-color: rgba(255,255,255,0.1);'>	
	<td align='center' style='border-radius: 10px 10px;'>	
	
	 <div id='' style='border:1px solid #888;border-top:none;border-radius:0 0 7px 7px;padding:0 5px 0 5px;'>
	  <form action='#rest-of-vidCmt' method='POST' id='t_area' >
	
	  <?/// comments txtarea \\\?>	   
	   <div id=''  style='width:90%;margin-bottom:15px;'>	   
	     <textarea class='form-control input-sm' id='' size='300' name='vid_post' placeholder='Enter Comment' ></textarea>
		<input type='button' onClick='' class='btn btn-sm btn-default' value='Submit' style='width:10%;background-color:#C1CDFF;' />
		<input type='reset' class='btn btn-sm btn-default' value='Clear' style='width:10%;background-color:#C2C1FF;' />
	   </div>
	   
	  </form>
	 </div>
	 
   </td>
  </tr>
  <tr> 
   <td colspan='100%' align='center' valign='center' id='p_cmt' >
	   
<!---COMMENTS-----><!---COMMENT=-----><!---COMMENTS-----><!---COMMENTS----->
<!---COMMENTS-----><!---COMMENTS-----><!---COMMENTS-----><!---COMMENTS----->
<!---COMMENTS-----><!---COMMENTS-----><!---COMMENTS-----><!---COMMENTS----->
<!---COMMENTS-----><!---COMMENTS-----><!---COMMENTS-----><!---COMMENTS----->
<div id=''  style='width:auto;overflow:hidden;background-color:rgba(255,255,255,.15);border-radius:7px 7px;' >
 <p align='center' >
  
<?php
////////////////////////////
 /////////////////////////////////////
/*
if(isset($_GET[md5('video_id')])){
	
$tbl = "video_".VID_NAME;		
global $tbl;
$c = mysqli_query($dbCon,"SHOW TABLES LIKE '$tbl'") or print(mysqli_error($dbCon));
 if(mysqli_num_rows($c) !== 0){
/////////////////////////////////////

	$r = mysqli_query($dbCon,"SELECT * FROM `$tbl`") or print(mysqli_error($dbCon));								 
	$rowCnt = mysqli_num_rows($r);
		$rows = $rowCnt; //max rows
		$diviser = $rowCnt / 5; //each pg = max rows divided by '5', '5' = limit
		$rowCnt = ceil($diviser); ///round up everything lol	
///////////////////////////////
    if($rows > 5){					
		$offset = '0';				
		if(isset($_REQUEST['page'])){
			$p = intval($_REQUEST['page'], 0);
			$offset = 5 * $p; // limit end 'offset'	
		}
	}else{
		$p = 0;
		$offset = 0;
	} 	
/// ADD LIST-ORDER BTN TO ORDER BY VOTE | DATE \\\
 
 	 $qry = "SELECT `id`,
					 `video_name`,
					 `video_comment_member`,
					 `video_comment`,
					 `video_comment_date`,
					 `video_comment_vote`,
					 `video_comment_reply`
			FROM `$tbl`
			ORDER BY `video_comment_date` DESC
			LIMIT 5 OFFSET ".$offset;
	  $rslt = mysqli_query($dbCon, $qry) or print(mysqli_error($dbCon));
	  $row_cnt = mysqli_num_rows($rslt);
	   if($row_cnt > '0'){
  		while($vidCmtFld = mysqli_fetch_assoc($rslt)){	
*/ 
 ?>										
 		
<!---******COMMENTS**********---->
<!---******COMMENTS**********---->
   <div class='lead text-left' style='width:96%;margin:0 auto;background-color:rgba(0,0,0,0.2);border:1px solid #555;border-radius:10px 10px;max-height:500px;overflow-y:auto;'>	   

	   <?// date \\?> 
	   <div class='pull-right text-right'>
		<small style='padding:5px;'>
		 <?=date('m-d-y')?>
		</small>
	   </div>

	   <?// posted cmt nfo... \\?>	   
		<small>
		 <strong>
		  <?="User"?>
		 </strong>
	    </small>
		
		<span class='pull-right'>
		 <?//=showR8Icons('wall','post_vote',$post_id,$poster)?>
		</span>
	   
	   <?// replier avatar \\?>
		<div class='pull-left' >
		 <a href='' target='_self' >
		  <img src='/m8tod8/prof/upl/Brandon3.jpg' class='img-rounded img-repsonsive' width='40px' style='border:1px solid #ccc;margin-right:5px;'  />
		 </a>
		</div>
		
	   <?// reply msg \\?>
	   <small>
	    <p class='text-left' style='background-color:rgba(255,255,255,0.13);width:97%;border-radius:0 7px 7px 0;'>
		 <?="Comments go here Comments go here Comments go here "?>
		</p>
	   </small>   
						
	
<?//CONFIRM REPLIES\\?><?//CONFIRM REPLIES\\?>
<?//CONFIRM REPLIES\\?><?//CONFIRM REPLIES\\?>
<?//CONFIRM REPLIES\\?><?//CONFIRM REPLIES\\?>

	<button class='btn btn-default btn-sm center-block' onclick='showCmtsRplyInput()' type='button'  style='width:30%;margin:5px auto;color:#333;background-color:#C1CDFF;'>
	 Reply 
	</button>	
	
	<?php	///////////////////////////////
	/*														
	  if(isset($_REQUEST['cmtReply']) && !empty($_REQUEST['cmtId'])){  
	  //////////////////////////////////
		$cmtId = $vidCmtFld['id'];
		$cmtReplyTbl = "vid_reply_".$vidCmtFld['video_name'];
									
		  $q = "UPDATE `$tbl`		
				SET `video_comment_reply` = '1'";
			mysqli_query($dbCon,$q) or print(mysqli_error($dbCon));
		/////////////////////////////////////	
		$chk = mysqli_query($dbCon,"SHOW TABLES LIKE '$cmtReplyTbl'") or print(mysqli_error($dbCon));
		 if(mysqli_num_rows($chk) == 0){
			 $cr8 = "CREATE TABLE `$cmtReplyTbl` (
					 `id` int(4) NOT NULL AUTO_INCREMENT,
					 `video_comment_id` int(3) NOT NULL,
					 `video_comment_reply` text(200) NOT NULL,
					 `video_comment_reply_date` date NOT NULL,
					 `video_comment_reply_member` varchar(30) NOT NULL,
					 `video_comment_reply_vote` int(4) NOT NULL DEFAULT '0',
					 PRIMARY KEY (`id`)
					) ENGINE=InnoDB DEFAULT CHARSET=latin1";
				mysqli_query($dbCon,$cr8) or print("Prob creating cmt_rply tbl ".mysqli_error($dbCon));
		 } //END cr8tbl chk
		 
		 //////////INSERT CMT_REPLY INTO TBL\\\\\\\\\
			$qry = "INSERT INTO `$cmtReplyTbl`(
								`video_comment_id`,
								`video_comment_reply`,
								`video_comment_reply_date`,
								`video_comment_reply_member`)
						VALUES( '{$_REQUEST['cmtId']}',
								'{$_REQUEST['cmtReply']}',
								NOW(),
								'{$_SESSION['username']}')";
			$rzlt = mysqli_query($dbCon,$qry) or die(mysqli_error($dbCon));
			
	  }//END if(req)
	*/
 ?>
	 
<?//REPLY\\//REPLY\\//REPLY\\//REPLY\\//REPLY\\?>
<?//REPLY\\//REPLY\\//REPLY\\//REPLY\\//REPLY\\?>

	<div class='well well-sm' id='ReplySect' style='display:none;border-radius:8px;padding-bottom:20px;z-index:1;border-top-width:2px;margin-top:10px;background-color:rgba(255,255,255,0.25);'>
	 <p align='center' valign='center' >
	  <form>	
	  
	   <textarea class='form-control text-left' id='cmtReply<?="id"?>' rows='2' cols='60%' size='200' name='cmtReply' placeholder='Enter Reply' style='wordwrap:break-word;'></textarea>
		
		<div class='pull-right'>
		 <input type='button' onClick='' class='btn btn-info btn-sm' value='Reply' style='border:1px solid #999;' />
		 <input type='reset' class='btn btn-info btn-sm' value='Clear' />
		</div>	
		
	   </form>
	  </p>  
	</div>		 
	 
	 <?/// REPLIES REPLIES REPLIES \\\?>
	 <?/// REPLIES REPLIES REPLIES \\\?>
	  <div class='' style='width:85%;margin:0 auto;' id='cmtRplySec'>
		 
		  <ul class='center-block list-inline well well-sm' style='background-color:rgba(255,255,255,.075);border:none;margin-bottom:10px;border-radius:7px 7px;'>
		   <li class='text-center'>
			<small>
			  <?="reply_date"?>
			</small>
		   </li>
		   <li class='text-left pull-right'>
			<small style='font-weight:bold;'>
			  <?="reply_member"?>
			</small>
		   </li>	
			 <a href='' target='_self' class='pull-left'>									
				
				<img src='/m8tod8/prof/upl/Brandon3.jpg' width='30px' alt='Member' class='img-responsive img-rounded' style='vertical-align:top' />													
			
			 </a>		   
			<span class='center-block text-left' style='display:inline-block;width:100%;margin:0 auto;min-height:25px;background-color:rgba(255,255,255,0.1);padding:5px;'>
			 <small>
			 <?="Reply goes hereReply goes hereReply goes hereReply goes here"?>										 
			 </small>
			</span>	 
		   
		   <div class='pull-right' style='border:1px solid white;margin-top:-15px;width:40px;height:20px;'> 
			 R8
			<?//=showR8IconsFor("","","","")?>														
		   </div>
		   
		  </ul>		
		
	 </div>		
  </div>	 
<!--
 <div class='text-primary text-center bg-success' >

<?php 
////////////////////////////////////////////////////////////////////
//////////////////_PAGINATION_PAGE_NUMBERS_/////////////////////////
////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////
/*
$qr = mysqli_query($dbCon,"SELECT * FROM `$tbl`") or die(mysqli_error($dbCon));
$rowCnt = mysqli_num_rows($qr);
$rowCnt = ceil($rowCnt / 5);
	if($rowCnt !== 0){
		print("<span class='well well-sm center-block text-center' style='max-width:100%'>");		
	  if(empty($p)){
		  $p = 0;
	  }
 		for($i = 0; $i < $rowCnt; $i++){
		  $pgNumShown = $i + 1;
			$btn = "<button type='button' class='btn btn-sm btn-link' onclick='go2pg($i)' ";
		  if(isset($p) && $i == $p){
		  	$btn .= " disabled ";
		  }
			$btn .= " >".$pgNumShown."</button>";
						
				echo $btn;
		}
		print("</span>");	
	}	//END if(wall)	
echo "</div>";
	 }//END OF if(table exist)
	else{
		  echo "<span class='well center-block text-center'>No Comments</span>";
		}	
	}//END OF if(vidid)
else{
	  echo "<span class='well center-block text-center'>Welcome to BS Exposed</span>";
	}
	*/
?>
-->
 
								
		</p>
			   
	  <?// END #CMT SECTION  \\?><?// END #CMT SECTION  \\?>
	   </div>
	  <?// END #CMT SECTION  \\?><?// END #CMT SECTION  \\?>	 										
		 </td>
		</tr>
	   </tbody>
	  </table>
	  
	 </div>
		  
				
		</p>
	  </td>
	 </tr>
	</table>
   </div>	 
  </p>
 </div>
</div>
<?// end of modal \\?>
<?// end of modal \\?>

<script>
 function showCmtsRplyInput(){
	 $(function(){
		 $('#ReplySect').toggle("fast");
	 })
 }
</script>
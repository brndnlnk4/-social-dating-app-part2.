<div id='dragDfltPic' class='well well-sm'>
  <ul class='list-group list-inline' >
   <?// PIC GALLERY \\?><?// PIC GALLERY \\?>
   <?// PIC GALLERY \\?><?// PIC GALLERY \\?>	 

<?php
include($_SERVER['DOCUMENT_ROOT']."/m8tod8/incl/sv.php");
include($_SERVER['DOCUMENT_ROOT']."/m8tod8/ses.php");
///////////////////////////////////////
function getPicFldsById($picId,$memId,$fld){
	global $dbCon;
	 $r = mysqli_query($dbCon,"SELECT * FROM `member_photos` WHERE `id` LIKE '$picId' AND `member_id` LIKE '$memId'") or print(mysqli_error($dbCon));
	 while($row = mysqli_fetch_assoc($r)){
		if(!empty($row[$fld])){
			$val = $row[$fld];
		}else{
			$val = "";
		}
	 break;
	 }
	return $val;
 }
//////// SQL 4 DELETING OR SETTING AVATAR 2 DFLT////
//////// SQL 4 DELETING OR SETTING AVATAR 2 DFLT////
if(isset($_REQUEST['picProc'])){
if($_REQUEST['picProc'] == "avatar"){
$pic = getPicFldsById($_REQUEST['picId'],$_REQUEST['memId'],"photo");
$pic = strtolower($pic);
 $qry = "UPDATE members
		 SET mem_avatar = '$pic'
		 WHERE id = '{$_REQUEST['memId']}'";
	mysqli_query($dbCon,$qry) or die('avatar prob..'.mysqli_error($dbCon));
/////////////////////////////////////////	
}elseif($_REQUEST['picProc'] == "trash"){
 $qry = "DELETE FROM `member_photos` 
		 WHERE member_id = '{$_REQUEST['memId']}'
		 AND id = '{$_REQUEST['picId']}'";
	mysqli_query($dbCon,$qry) or die('trash prob...'.mysqli_error($dbCon));		 
/////////////////////////////////////////	
}elseif($_REQUEST['picProc'] == "edit"){
 $qry = "UPDATE member_photos
		 SET photo_caption = '{$_REQUEST['caption']}'
		 WHERE member_id = '{$_REQUEST['memId']}'
		 AND id = '{$_REQUEST['picId']}'";
	mysqli_query($dbCon,$qry) or die('caption edit prob...'.mysqli_error($dbCon));		 		 
 } //END pic edits
} ///END drag drop pic edit process
/////////////////////////////////////////////////
/////////////////////////////////////////////////
if(empty($_REQUEST['memId'])){
	$_REQUEST['memId'] = $_SESSION['myId'] ;
}
$qry = "SELECT * 
		FROM member_photos
		WHERE member_id = '{$_REQUEST['memId']}'
		ORDER BY id ASC";
$rzlt = mysqli_query($dbCon,$qry) or die(mysqli_error($dbCon));
if(mysqli_num_rows($rzlt) > 0){
 $picCntr = 0;	
	while($row = mysqli_fetch_assoc($rzlt)){
 ?>

		  <li class='list-group-item picDrp' name='<?=$row['id']?>' id='<?="pic".$picCntr++?>' onMouseOver='this.getElementsByTagName("small")[0].className="fade in"' onMouseOut='this.getElementsByTagName("small")[0].className="fade";' onDrag='this.getElementsByTagName("small")[0].style.display="none"' value='<?=$row['photo']?>' onmousedown='drag2where(this.id)'>
			
			<?//POP UP\\?>
			<small class='fade' style='padding:1px 3px;margin-top:-20px;color:#fff;background-color:rgba(0,0,0,0.30);position:absolute;border-radius:2px;'>
			 <b style='font-size:80%;'>DOUBLE CLICK TO DRAG</b>
			</small>
			 
			 <img src='upl/<?=strtolower($row['photo'])?>' title='Your Picture' width='100px' class='img-responsive img-rounded' style='cursor:pointer;' />
							
		   </li>			 


<?php
	 } //END while
 } //END num_rows > 0
 else{
?>	 
 <li class='list-group-item' name='picIdGoesHere'  >
	<?//POP UP\\?>
	<small class='fade' style='padding:1px 3px;margin-top:-20px;color:#fff;background-color:rgba(0,0,0,0.30);position:absolute;border-radius:2px;'>
	 <b style='font-size:80%;'>DOUBLE CLICK TO DRAG</b>
	</small>
	 
	 <img src='upl/Brandon2.jpg' title='Your Picture' width='100px' class='img-responsive img-rounded' style='cursor:pointer;' />
					
   </li>
   <li class='list-group-item' name='picIdGoesHere'  >
	<?//POP UP\\?>
	<small class='fade' style='padding:1px 3px;margin-top:-20px;color:#fff;background-color:rgba(0,0,0,0.30);position:absolute;border-radius:2px;'>
	 <b style='font-size:80%;'>DOUBLE CLICK TO DRAG</b>
	</small>
	 
	 <img src='upl/Brandon3.jpg' title='Your Picture' width='100px' class='img-responsive img-rounded' style='cursor:pointer;' />
					
   </li>
   <li class='list-group-item' name='picIdGoesHere'  >
	<?//POP UP\\?>
	<small class='fade' style='padding:1px 3px;margin-top:-20px;color:#fff;background-color:rgba(0,0,0,0.30);position:absolute;border-radius:2px;'>
	 <b style='font-size:80%;'>DOUBLE CLICK TO DRAG</b>
	</small>
	 
	 <img src='upl/Brandon4.jpg' title='Your Picture' width='100px' class='img-responsive img-rounded' style='cursor:pointer;' />
					
   </li>
   <li class='list-group-item'  >
	<?//POP UP\\?>
	<small class='fade' style='padding:1px 3px;margin-top:-20px;color:#fff;background-color:rgba(0,0,0,0.30);position:absolute;border-radius:2px;'>
	 <b style='font-size:80%;'>DOUBLE CLICK TO DRAG</b>
	</small>
	 
	 <img src='upl/Brandon5.jpg' title='Your Picture' width='100px' class='img-responsive img-rounded' style='cursor:pointer;' />
					
   </li>
   <li class='list-group-item'  >
	<?//POP UP\\?>
	<small class='fade' style='padding:1px 3px;margin-top:-20px;color:#fff;background-color:rgba(0,0,0,0.30);position:absolute;border-radius:2px;'>
	 <b style='font-size:80%;'>DOUBLE CLICK TO DRAG</b>
	</small>
	 
	 <img src='upl/Brandon1.jpg' title='Your Picture' width='100px' class='img-responsive img-rounded' style='cursor:pointer;' />
					
   </li>
   <li class='list-group-item'  >
	<?//POP UP\\?>
	<small class='fade' style='padding:1px 3px;margin-top:-20px;color:#fff;background-color:rgba(0,0,0,0.30);position:absolute;border-radius:2px;'>
	 <b style='font-size:80%;'>DOUBLE CLICK TO DRAG</b>
	</small>
	 
	 <img src='upl/Brandon2.jpg' title='Your Picture' width='100px' class='img-responsive img-rounded' style='cursor:pointer;' />
					
   </li>
<?php	 
 } //END else num_rows
?>	

	
<?/// DROPOFF EDIT OR TRASH \\\\?>
	<br>
	 <li id='dropBin4Pix' class='well list-inline' style='display:none;width:99%;min-height:90px;background-color:#ddd;padding:5px 8px;' >
						
	   <div class='well well-lg' id='dropTrash' style='width:49%;float:left;display:block;'>
		<img src='/m8tod8/css/img/trash.png' width='40%'  class='img-rounded img-responsive center-block' title='trash' />
	   </div>
					
	   <div class='well well-lg' id='dropEdit' style='width:49%;float:left;display:block;'>
		<img src='/m8tod8/css/img/edit.png' width='40%' class='img-rounded img-responsive center-block' title='edit' />			   				   
	   </div>			   
	 </li>			   
	
	 </ul>
 	</div>
	<?// END #dragDfltPic \\?>
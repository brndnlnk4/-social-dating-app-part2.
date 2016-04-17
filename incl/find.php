<?php
include($_SERVER['DOCUMENT_ROOT']."/m8tod8/incl/sv.php");
include($_SERVER['DOCUMENT_ROOT']."/m8tod8/ses.php");
include($_SERVER['DOCUMENT_ROOT']."/m8tod8/funk.php");
///row_id:row_id,choice:btnId,f_name:btnFriend
?>
<table class='table table-responsive table-condensed' >
 <tbody>
  <tr style='background-color:rgba(0,0,0,0.03);'>
   <th colspan='100%' class='text-center'>
	Your Results 
   </th>
  </tr>
<tr align='center' valign='center'>
<?php
/*
/////////////////////////////////////////////	
/////////////PAGNINATION/////////////////////	
/////////////PAGNINATION/////////////////////	
/////////////////////////////////////////////	
 else{
    ///CHECK 4 ROWS IN VIDEO CMT TABLE///
    $Q = mysqli_query($dbCon,"SELECT * FROM `videos`") or die(mysqli_error($dbCon));
    /////////////////////////////////////
    if($Q){
        $r = mysqli_query($dbCon,"SELECT * FROM `videos`") or die(mysqli_error($dbCon));								 
        $rowCnt = mysqli_num_rows($r);
            $rows = $rowCnt; //max rows
            $diviser = $rowCnt / 8; //each pg = max rows divided by '5', '5' = limit
            $rowCnt = ceil($diviser); ///round up everything lol
	}				
	///////////////////////////////	
    if($rows > 8){
		$offset = '0';
		if(isset($_REQUEST['page'])){
			$p = intval($_REQUEST['page'], 0);
			$offset = 8 * $p; // limit end 'offset'	
		}
	}else{
		$p = 0;
		$offset = 0;
		}
        //////////
        //////////						    
 	global $left;
    global $right;
/////if vid srch not exec
		$qq = "SELECT id,			
					video_title,
					video_vote
			FROM `videos`
			ORDER BY `id` DESC 
		    LIMIT 8 OFFSET ".$offset;
		 $rlt = mysqli_query($dbCon, $qq) or print(mysqli_error($dbCon));
		  $cntt = @mysqli_num_rows($rlt);
		  if($cntt > 0){	 
			while($viD = mysqli_fetch_assoc($rlt)){}
*/
/////val:srch,gender:gender,ethnicity:ethnicity,age:age

$q = "SELECT *
	 FROM `members` 
	 WHERE `mem_username` LIKE '{$_REQUEST['val']}' ";
	if(!empty($_REQUEST['age'])){
$q .= " OR `mem_dob` < '{$_REQUEST['age']}' ";
	 }
	elseif(!empty($_REQUEST['gender'])){
$q .= " OR `mem_gender` LIKE '{$_REQUEST['gender']}' ";
	 }
	 elseif(!empty($_REQUEST['ethnicity'])){
$q .= " OR `mem_ethnicity` LIKE '{$_REQUEST['ethnicity']}' ";
	 }
$q .= " ORDER BY `id` DESC ";
	$rz = mysqli_query($dbCon,$q) or die(mysqli_error($dbCon));
	 $find_cnt = 0;
	if(mysqli_num_rows($rz) > 0 && mysqli_num_rows($rz) < 5){
	 $rowCnt = mysqli_num_rows($rz);

	 while($finds = mysqli_fetch_assoc($rz)){
?>
   <td colspan='20%'>
	<span  id='srchRzltMemIcons'>
		<ul class='list-inline list-group '>
		
		<?/// MINI-SUB ADD AND LIKE BTNS 4 EACH THUMBNAIL \\\?>
		 <li class='list-item' onclick='addMem("<?//mems id?>");this.getElementsByTagName("img")[0].src="/m8tod8/css/img/adding.png";'>
		  <img src='<?="/m8tod8/css/img/add.png"?>' width='40px' class='img-responsive img-rounded' />						 
		 </li>
		 <li class='list-item' onclick='likeMem("<?//mems id?>");this.getElementsByTagName("img")[0].src="/m8tod8/css/img/liked.png";'>
		  <img src='<?="/m8tod8/css/img/like.png"?>' width='40px' class='img-responsive img-rounded' />						 
		 </li>
		 
		</ul>	
		
		<?//// MEM THUMBNAIL \\\\?>
		<a href='<?=echoMemUrlById($finds['id'])?>' target='_self' class='btn btn-link' type='button' style='z-index:500;'>
	   <img src='/m8tod8/prof/upl/<?=get_memsAvatr($finds['mem_username'])?>' title='<?=$finds['mem_username']?>' width='120px' class='img-responsive img-rounded' />
	  </a>
	  
	</span>		
   </td>	
		<?php
		if(strlen($finds['mem_username']) > 0 && $find_cnt == 5){
			$find_cnt++;
			continue;
		}else{
			 break;
		} 
	}  //END while
}// END mysqli_num_rows

?>
  </tr>
 </tbody>
</table>		  
 <?php
 /*
//////////////////////////////////////////////////////////////////////////
//////////////////_PAGINATION_PAGE_NUMBERS_///////////////////
$rowCnt = mysqli_num_rows(mysqli_query($dbCon,"SELECT * FROM `videos`"));
$rowCnt = ceil($rowCnt / 8);
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
	}		
//////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////	
*/
?>
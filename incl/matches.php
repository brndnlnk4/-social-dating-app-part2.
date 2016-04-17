<?php
/*
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
*/
///////////////////////////////////////
///////////////////////////////////////

/*
		$qq = "SELECT id,			
					video_title,
					video_images,
					video_description,
					video_category,
					video_rating_title,
					video_rating,
					video_date,
					video_publisher,
					video_src,
					video_vote
			FROM `videos`
			ORDER BY `id` DESC 
		    LIMIT 8 OFFSET ".$offset;
		 $rlt = mysqli_query($dbCon, $qq) or print(mysqli_error($dbCon));
		  $cntt = @mysqli_num_rows($rlt);
		  if($cntt > 0){	 
			while($viD = mysqli_fetch_assoc($rlt)){
*/
?> 


 <?//MATCH PICS\\?>
   <tr> 
   
    <td colspan='20%' align='center'>
	 <span id='matchCont' >
	  <a href='/m8tod8/mem/' target='_self' class='btn btn-link' type='button' >
	   <img src='/m8tod8/prof/upl/Brandon1.jpg' width='120px' class='img-responsive img-rounded' /> 
		<p class='well well-sm' style='position:absolute;padding:4px 7px;background-color:rgba(255,255,255,0.6);' >
		 <?//HOVER MEM QUIK NFO\\?> 
		 <small class='center-block' style='display:block;word-wrap:break-word;width:120px;overflow:hidden;'>
		  Name:
		  <b>
		   <?//name\\?> 
		   <?="exName"?>
		  </b>	 
	     <br>
		  Age:
		  <b>
		  <?//age\\?> 
 		  <?="26"?>
		  </b> 
		 <br>
		  <?//zodiac\\?>
		  <img src='<?="/m8tod8/css/img/ren2.jpg"?>' width='40px' class='center-block img-responsive img-rounded' />
		 </small>
		</p>
	   </a>	
	 </span>
 	</td>
	<td colspan='20%' align='center'>
	 <span id='matchCont' >
	  <a href='/m8tod8/mem/' target='_self' class='btn btn-link' type='button' >
	   <img src='/m8tod8/prof/upl/Brandon2.jpg' width='120px' class='img-responsive img-rounded' /> 
		<p class='well well-sm' style='position:absolute;padding:4px 7px;background-color:rgba(255,255,255,0.6);' >
		 <?//HOVER MEM QUIK NFO\\?> 
		 <small class='center-block' style='display:block;word-wrap:break-word;width:120px;overflow:hidden;'>
		  Name:
		  <b>
		   <?//name\\?> 
		   <?="exName"?>
		  </b>	 
	     <br>
		  Age:
		  <b>
		  <?//age\\?> 
 		  <?="26"?>
		  </b> 
		 <br>
		  <?//zodiac\\?>
		  <img src='<?="/m8tod8/css/img/ren2.jpg"?>' width='40px' class='center-block img-responsive img-rounded' />
		 </small>
		</p>
	   </a>	
	 </span>
 	</td>
    <td colspan='20%' align='center'>
	 <span class=''  id='matchCont'>
	  <a href='/m8tod8/mem/' target='_self' class='btn btn-link' type='button' >
	   <img src='/m8tod8/prof/upl/Brandon3.jpg' width='120px' class='img-responsive img-rounded' />
		<p class='well well-sm' style='position:absolute;padding:4px 7px;background-color:rgba(255,255,255,0.6);' >
		 <?//HOVER MEM QUIK NFO\\?> 
		 <small class='center-block' style='display:block;word-wrap:break-word;width:120px;overflow:hidden;'>
		  Name:
		  <b>
		   <?//name\\?> 
		   <?="exName"?>
		  </b>	 
	     <br>
		  Age:
		  <b>
		  <?//age\\?> 
 		  <?="26"?>
		  </b> 
		 <br>
		  <?//zodiac\\?>
		  <img src='<?="/m8tod8/css/img/ren2.jpg"?>' width='40px' class='center-block img-responsive img-rounded' />
		 </small>
		</p>	   
	  </a>
	 </span>
 	</td>
    <td colspan='20%' align='center'>
	 <span class=''  id='matchCont'>
	  <a href='/m8tod8/mem/' target='_self' class='btn btn-link' type='button' >
	   <img src='/m8tod8/prof/upl/Brandon4.jpg' width='120px' class='img-responsive img-rounded' />
		<p class='well well-sm' style='position:absolute;padding:4px 7px;background-color:rgba(255,255,255,0.6);' >
		 <?//HOVER MEM QUIK NFO\\?> 
		 <small class='center-block' style='display:block;word-wrap:break-word;width:120px;overflow:hidden;'>
		  Name:
		  <b>
		   <?//name\\?> 
		   <?="exName"?>
		  </b>	 
	     <br>
		  Age:
		  <b>
		  <?//age\\?> 
 		  <?="26"?>
		  </b> 
		 <br>
		  <?//zodiac\\?>
		  <img src='<?="/m8tod8/css/img/ren2.jpg"?>' width='40px' class='center-block img-responsive img-rounded' />
		 </small>
		</p>	   
	  </a>
	 </span>
 	</td> 
	<td colspan='20%' align='center'>
	 <span class=''  id='matchCont'>
	  <a href='/m8tod8/mem/' target='_self' class='btn btn-link' type='button' >
	   <img src='/m8tod8/prof/upl/Brandon5.jpg' width='120px' class='img-responsive img-rounded' />
		<p class='well well-sm' style='position:absolute;padding:4px 7px;background-color:rgba(255,255,255,0.6);' >
		 <?//HOVER MEM QUIK NFO\\?> 
		 <small class='center-block' style='display:block;word-wrap:break-word;width:120px;overflow:hidden;'>
		  Name:
		  <b>
		   <?//name\\?> 
		   <?="exName"?>
		  </b>	 
	     <br>
		  Age:
		  <b>
		  <?//age\\?> 
 		  <?="26"?>
		  </b> 
		 <br>
		  <?//zodiac\\?>
		  <img src='<?="/m8tod8/css/img/ren2.jpg"?>' width='40px' class='center-block img-responsive img-rounded' />
		 </small>
		</p>	   
	  </a>
	 </span>
 	</td>
	
   </tr>
  
<?/// PAGINATION \\\/// PAGINATION \\\/// PAGINATION \\\?>
<?/// PAGINATION \\\/// PAGINATION \\\/// PAGINATION \\\?>
<?/// PAGINATION \\\/// PAGINATION \\\/// PAGINATION \\\?>
 <?php
 /*
	}
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
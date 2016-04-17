<table cellpadding='0' cellspacing='1' class='table table-responsive table-striped' id='profTbl'>
  <tr>	 
    <td colspan='100%' >  
	 <h4 class='text-center' style='font-weight:bold;'>
	  Profile Comments
	 </h4>	
	 <div class='<?//=switchIfLogged("", "hide")?>' style='border-radius:7px 7px;padding:5px 5px;border:1px double #bbb;'>
	  <form action=''>
					
		<textarea maxlength='300' class='form-control input-sm'  title='Enter Your Post' id='prof_post' size='300' rows='6' cols='100%' placeholder='Post comment here' ></textarea>	
					
		<div id=' ' style='width:55%; margin-top: 5px; margin-bottom: 5px; margin-left: auto; margin-right: auto; padding:5px 10px;'>
 		  <input type='button' class='form-control btn btn-default btn-md center-block' onclick='' value='Submit' placeholder='' style='width:50%;float:left;' />
		  <input type='reset' class='form-control btn btn-default btn-md center-block' name='' value='Clear' placeholder='' style='width:50%;float:left'  />
 		</div> 

	   </form>
	  </div>	
    </td>
  </tr>		
  
  <?//// PROF COMMENTS \\\\?>
  <?//// PROF COMMENTS \\\\?>  
<?php 
/*
 /////////////////////////////////////
 /////////////////////////////////////
 ///////////PAGINATION////////////////
   $Q = mysqli_num_rows(mysqli_query($dbCon,"SELECT * FROM `wall`"));
    /////////////////////////////////////
    if($Q !== 0){
        $r = mysqli_query($dbCon,"SELECT * FROM `wall`") or die(mysqli_error($dbCon));								 
        $rowCnt = mysqli_num_rows($r);
            $rows = $rowCnt; //max rows
            $diviser = $rowCnt / 15; //each pg = max rows divided by '5', '5' = limit
            $rowCnt = ceil($diviser); ///round up everything lol
	
	///////////////////////////////	
    if($rows > 15){
		$offset = '0';
		if(isset($_REQUEST['page'])){
			$p = intval($_REQUEST['page'], 0);
			$offset = 15 * $p; // limit end 'offset'	
		}
	}else{
		$p = 0;
		$offset = 0;
		}
	}else{
		$offset = 0;
	}					
         //////////
*/
?> 

  <tr>
	<td align='center' rowspan='1' colspan='100%' > 
	   <div class='lead text-left' style='background-color:rgba(0,0,0,0.03);'>	   

	   <?// date \\?> 
 	   <div class='pull-right text-right'>
	    <small>
		 <?=date('m-d-y')?>
		</small>
	   </div>

	   <?// posted by... \\?>	   
	    <small>
		 <strong>
		  <?="User"?>
		 </strong>
	   
		<span class='pull-right'>
		 <?//=showR8Icons('wall','post_vote',$post_id,$poster)?>
		</span>
	   
	   <div class='pull-left' >
	   
		<a href='' target='_self' >
		 <img src='/m8tod8/prof/upl/Brandon3.jpg' class='img-rounded img-repsonsive' width='40px' style='border:1px solid #555;margin-right:5px;'  />
		</a>
		
	   </div>
	   </small>
	  </div>
	  
	  <?// wall post \\??>
	  <p align='left' class='text-left text-muted word-wrap:break-word;word-break:break-word;'>
		<?="Comment goes here Comment goes here"?>
	  </p>
	  
    </td>
  </tr>
  <?/// PAGINATION PG'S \\\?>
  <?/// PAGINATION PG'S \\\?>
  <tr>

   <th colspan='100%'>
	<?php
	/*
	//////////////////////////////////////////////////////////////////////////
	//////////////////_PAGINATION_PAGE_NUMBERS_///////////////////
	$rowCnt = mysqli_num_rows(mysqli_query($dbCon,"SELECT * FROM `wall`"));
	$rowCnt = ceil($rowCnt / 15);
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
	*/				
	?>
   </th>
  </tr>

</table>
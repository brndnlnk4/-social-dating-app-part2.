 <?php
 
 
	function onPg($pg){
		global $thisPg;
			if($thisPg == $pg){
				echo " active bgActive ";
 			}
	}
 ?>
<style>
/****** PC, LABTOP VIEWPORT SCRN **********/
/****** PC, LABTOP VIEWPORT SCRN **********/
	
@media(min-width:768px){
	
	.bgActive{
		background:rgba(0,0,0,0.1);
	}	
	
	#navUl ul > li a {
		min-width:70px;
	}
	#usrMenu{
		color:#790909;
		text-decoration:none;
		color:#790909;
		text-decoration:none;
 		background-color:rgb(255, 172, 172);	
	}
	
	div#leftTbl.leftTbl{
		max-width:29.5%;
		
	}
	#rightTbl {
		 width:69%;
		 display: block;
		border:1px solid #e5e1e1;
		float:right; 
		min-height:875px;
 		border-radius: 7px;
	}	
	#dragDfltPic{
		background-color: rgba(79, 37, 37, 0.15);
		border:none;
	}
	#profTabsLeft.profTbsLeft{
		min-height:600px;
		max-height:985px;
		overflow: hidden;
		width:100%;
		background-color: rgb(227, 215, 215);
 	}	
	/*****************************/
	.ui-accordion.ui-accordion-content, .ui-accordion.ui-accordion-content, .ui-accordion .ui-accordion-content, .ui-accordion-content-active {
		height:auto !important;
		max-width: auto;
		border-right:1px solid rgba(136, 111, 118, 0.59);
		border-left:1px solid rgba(136, 111, 118, 0.59);
	}	
	.ui-accordion.ui-accordion-content ,.ui-accordion-content-active{
		border-bottom:2px solid #886F76;
		border-radius:0 0 5px 5px;
	}
	#inbox li > h4.inboxH4.ui-state-active,
	#inbox.ui-widget-content,
	#inbox.ui-widget-content .ui-state-default {
		background-color:rgba(244, 227, 227, 0.31);
		-webkit-transition:.17s background-color;
		-ms-transition:.17s background-color;
		-moz-transition:.17s background-color;
		-o-transition:.17s background-color;
		max-height: 850px;
		overflow-y:auto;
	}
	 
	#inbox.ui-widget-content .ui-state-active:hover,
	#inbox.ui-accordion-content:hover .ui-state-active,
	#inbox .ui-state-default:hover{
		background-color:rgba(0,0,0,0.15);
		-webkit-transition:.17s background-color;
		-ms-transition:.17s background-color;
		-moz-transition:.17s background-color;
		-o-transition:.17s background-color;
		}
	
	#inbox.ui-widget-content::-webkit-scrollbar,
	#inbox.ui-widget-content scrollbar {
		width: 1em;
	}
	#inbox.ui-widget-content::-webkit-scrollbar-track,
	#inbox.ui-widget-content scrollbar-track{
		-webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3);
	}
	#inbox.ui-widget-content::-webkit-scrollbar-thumb,
	#inbox.ui-widget-content scrollbar-thumb{
	  background-color: #aa6060;
	}		
/*****************************/
/*****************************/

	#usrMenu.btn.btn-link:first-child{
		font-size: 100%;
		font-weight:bold;
		position:relative;
		background-color: rgb(255, 172, 172);	
		color: #fff;
  	}
	.usrMenu.navbar-right{
		padding:0;
		margin-right:0px;
		position:relative;
		top:0;	
	}	
	.menu.menu-dropdown{
  		margin: 0 auto;
		list-style-type: none;
		min-width: 134px;
		padding:0;
		background-color:rgb(255, 172, 172);   	
		font-size:97%;		
 	}	
}	


/****** MOBILE AND TABLETS SCRN **********/
/****** MOBILE AND TABLETS SCRN **********/

div#leftTbl.leftTbl{
	 width:100%;
}
.rtTbl{
    width:auto;
    display: block;
    float:; 
    min-height:auto;
    background-color:rgba(216, 210, 210, 0.76);
}
#profTabsLeft {
	height:auto;
    max-height: 860px;
	width:100%;
    overflow-y: auto;
}

 .ui-accordion.ui-accordion-content.ui-accordion-content-active {
	padding:2.5px 2px;
  	width:100%;
	min-height:100px;
}
#usrMenu.btn{
 	font-size: 115%;
	font-weight:bold;
	color:#555;
	opacity:1;
	border:1px solid rgba(255,255,255,0.44);
	background-color: rgba(255,255,255,0.89);	
}
.usrMenu{
 	position:relative;
		top:-20px;
	float:right;
	background-color: rgba(0,0,0,0.5);
	border-radius:10px;
	border-bottom:1px solid #666;
	color:#fff;
	font-weight:bold;
}
 
.menu{
	font-size:140%;
	width:100%;
	background-color: rgba(255,255,255,0.95);
}
</style>
<?//// NAV + TOP-MENU \\\?>
<span class='well center-block lead' id='topSpan'>

  <?/// LOGO \\\?>
   <img src='/m8tod8/css/img/LOGOTXT3.png' id='hvrLogoChng' title='M8toD8' alt='Welcome' width='100px' class='img-responsive img-rounded' />
  <?/// LOGO \\\?>

</span> 
<script src='\m8tod8\js/bootstrap.js'></script>
<?//// NAV \\\?>
<nav role='navigation' class='navbar navbar-default navbar-static-top' id='navElement' > 	 
 	 
 <?// dropdown \\// dropdown \\?> 
 <?// dropdown \\// dropdown \\?> 
  <ul class='list-group usrMenu navbar-right'>
    
   <li style='margin-top:-38px;height:37px;max-width:135px;display:block;float:left;border:none;'>
 	  <strong style='font-weight:boldest;letter-spacing:3px;'>
	   <a href='\m8tod8\prof' type='button' class='btn btn-link' id='usrMenu' style='font-size:120%;border-bottom:3px solid transparent;'>
		
		<img src='/m8tod8/css/img/contacts.png' title='M8toD8' alt='Welcome' width='30px' class='pull-left img-responsive img-rounded' />

		 Account
		
		<span class='caret'>&nbsp;</span>
 	   </a>
	  </strong>
 	 <ul class='menu menu-dropdown'>
	  <li class='' >	 
	   <?php
	    $yoId = getMemIdByMemName(_USR_);
	   ?>
	    <a href='<?=echoMemUrlById($yoId)?>' >
	     View Profile
	    </a>
		 <hr />
	  </li>
	  <li class=''>
	    <a href='/m8tod8/contact' >
	     Contact Dev
	    </a>
		 <hr />	
	   </li>
	   <li class=''>
	    <a href='/m8tod8/?logout=1'>
	     Log Out
	    </a>
		 <hr />
	   </li>
	 </ul>
	</li> 
 
  </ul> 
 <div class='navbar-header'>
  <button type='button' class='navbar-toggle' data-toggle='collapse' data-target='#navUl' >
   <span class='icon-bar'></span>
   <span class='icon-bar'></span>
   <span class='icon-bar'></span>
   <span class='icon-bar'></span>
  </button>
  
 <a class='navbar-brand' href='/m8tod8/' style='background-color:rgba(226, 209, 209,0.25);'>
 
   <img src='/m8tod8/css/img/home.png' title='M8toD8' alt='Welcome' width='40px' class='img-responsive img-rounded' style='margin-top:-10px;' />

 </a>		  
 </div>
<div class='navbar-collapse collapse'  id='navUl'>
 <?php
  $r = mysqli_query($dbCon,"SELECT `id`
									FROM `member_messages`
									WHERE `message_read` = '0'
									AND `message_sender` <> '{$_SESSION['username']}'
									ORDER BY `id` ASC LIMIT 1") or die(mysqli_error($dbCon));
	if(mysqli_num_rows($r) > 0){
		while($msgFld = mysqli_fetch_array($r)){
 			$unreadId = $msgFld[0];
			 break;
		}
	}else{
		$unreadId = "";
	}
 ?>
  <ul class='nav navbar-nav navbar-left' >
   <li class="<?=onPg('prof')?>"><a action href="/m8tod8/prof/?inbox=<?=ifIssetAndEquals($unreadId,'',md5('').' '.'0',md5($unreadId)." ".$unreadId)?>">Inbox</a>
	<span id='unreadMsgNotify' class='<?=ifStrLenEqualZero($unreadId,"hide")?>'></span></li>
   <li class="<?=onPg('srch')?>"><a href="/m8tod8/srch">Find</a></li>
   <li class="<?=onPg('match')?>"><a href="/m8tod8/match">Matches</a></li>
   <li class="<?=onPg('like')?>"><a href="/m8tod8/likes">Like</a></li>
  </ul>
  
 </div>
</nav>	
<script>

$(function(){
 var logo = document.getElementById('hvrLogoChng');
	$(logo).hover(function(){
		$(logo).attr("src","/m8tod8/css/img/LOGOTXT2.png");
	},
	function(){
		$(logo).attr("src","/m8tod8/css/img/LOGOTXT3.png");
	})
})
</script>

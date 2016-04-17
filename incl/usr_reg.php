 <form action="/m8tod8/?<?=md5('reg')?>" method='POST' class='form form-inline'>
	<?/////INPUTS COLLECTING FORM INFO AS USR FILLS OUT BELOW \\\\?>
	 <input type='hidden' name='yoName' value='' id='real_name' required />
	 <input type='hidden' name='dob' value='' id='usr_dob' required />
	 <input type='hidden' name='email1' value='' id='usr_email' required />
	 <input type='hidden' name='usrname' value='' id='usr_name' required />
	 <input type='hidden' name='pw' value='' id='urs_pw' required />
	 <input type='hidden'  name='gender' value='' id='gender' required />
	 <input type='hidden'  name='ethnicity' value='' id='ethnicity' required />
	<?/////INPUTS COLLECTING FORM INFO AS USR FILLS OUT BELOW \\\\?>
<div id='usrRegModal' class='modal' style='background-blend-mode:screen;background-repeat:repeat-x;background-size:auto 100%;background-position:center;'>
  <div class='modal-content' >
   <span class='close' id='RegModalClose' >
    <button type='button' class='btn btn-lg btn-danger' />
	Close
	</button>
   </span>
    <h2> 
	 <strong class='lead modal-header' style='padding:0;font-weight:bold;color:rgba(255,255,255,0.81);'>
		Registration 
	 </strong>
	</h2>
   <div class='form-group-lg modal-body' >
 <?// PROGRESS BAR \\\?>			
   <div class='progress' role='progressbar' >  
     <div id='progBar' class="progress-bar progress-bar-striped active">
     </div>
  </div>
 
<?/// TABLE FIRST STEP \\\\?>
<?/// TABLE FIRST STEP \\\\?> 
  <div class='table step1 '>
	
     <table class='table-responsive table-condensed' width='95%'>
	  <tr>  
		 <th colspan='100%' >
		  <p align='center' valign='top' >
			<h2 class='lead'>
				<b class='well well-lg lead center-block' style='background-color:rgba(27, 38, 62, 0.77);'>
				 Fill out the following fields* 
				</b>
			</h2>
				<sup style='color:#888;' class='text-center center-block'>First and/or Last name must be atleast 7 characters</sup>
			
		  </p>
		 </th>
		</tr>
		<tr>
		 <td>
		 <label for='yoName' class='control-label' >
		  Name*
		 </label>
	    </td>
		<td>
		 <input id='yoName' onkeyup='yonameSet()' class='form-control input-sm' type='name' maxlength='100' size='50' placeholder='Please Enter Your Name' value='' style='width: 100%;'  autofocus  /> 
	    </td>
	   </tr>
	   <tr>
		<td>
		 <label for='dob' class='control-label' >
		  DoB*
		 </label>
	    </td>
		<td>
		 <input onfocus='progress_15percent()' class='form-control input-sm' type='date'  value='' id='dob1' style='width: 100%;'   /> 
	    </td>
	   </tr>
	   <tr>

		<td colspan=''>
		   <label for='gender' class='control-label' >
		    Gender*
		   </label>		
		</td>
		<td>
		 <ul class='list-inline'>
		  <li class='pull-left'>

			<span style='float:left;clear:both;'>
			 <label for='gender' class='label label-default'>Male</label>
			  <input class='form-control input-sm ' onchange='$("#gender").val(this.value)' type='radio' name='gender'  value='man' id='' style='width: 30px;'   /> 		
			</span>		 

			<span style='float:left;clear:;'>
			 <label for='gender' class='label label-default'>Female</label>		  
			  <input class='form-control input-sm' onchange='$("#gender").val(this.value)' type='radio' name='gender'  value='woman' id='' style='width: 30px;'   /> 
			</span>		  
		  </li>
		 </ul>
		
		</td>
	   </tr>
	   <tr>
	    <td>
		  <label for='ethnicity'> Ethnicity</label>
		</td>
		<td colspan=''>
		 <div class='pull-left'>
		   <select name='ethnicity' onchange='$("#ethnicity").val(this.value)' id='race' class='form-control input-sm' >
			 <option ></option>			
			 <option value='African American'>African American</option>
			 <option value='Hispanic'>Hispanic</option>
			 <option value='African'>African</option>
			 <option value='Caucasian'>Caucasian</option>
			 <option value='Indian'>Indian</option>
			 <option value='Middle Eastern'>Middle Eastern</option>
			 <option value='Asian'>Asian</option>
		   </select>				 
		 </div>
		</td>
	   </tr>
	   <tr>
		<td>
		 <label for='email1' class='control-label' >
		  Email*
		 </label>
	    </td>
		<td>
		 <input onkeyup='showEmail2(this.value)' class='form-control input-sm' id='email1' type='email' maxlength='100' size='50'  placeholder='Primary Email' value='' style='width: 100%;'   /> 
	    </td>
		</tr>
	<?// email confirmation \\?>
 		<tr>    
		 <td >
		  <div  id='email2tr' style='display:none;' >
		  </div>
	    </td>
		<td >
		 <div  id='email22tr'  style='display:none;' >	  		 
		 <input onkeyup='showStp2Btn(this.value)' onmouseover='$("#regEmailPopup").show("fast");' onmouseout='$("#regEmailPopup").hide("fast");' class='form-control input-sm' id='email2' type='email' maxlength='100' size='50' name='email2' placeholder='Retype Email' value='' style='width: 100%;' /> 		 
		 
		 <?/// span pop up \\\?>
		  <span class='well well-sm' id='regEmailPopup' style='background-color:#999;display:none;position:absolute;'>
		   <strong>
		    Re-Type Same Email
		   </strong>
		  </span> 
		   <br>
		   <br>
		   <br>
		   <br>
		   <button onclick='showStp2()' type='button' class='btn btn-success btn-lg' id='btnContStp2' disabled>Continue</button>
		   <input type='reset' value='clear' class='btn btn-danger btn-lg' />
		  </div>
		</td>	 
	   </tr>
	</table>  
 </div>
  
	 <hr />	 
	 
    <?//// TABLE STEP 2 \\\\?>
    <?//// TABLE STEP 2 \\\\?>
	<div class=' step2 collapse'>
	 <span class='center-block text-center' style='max-width:90%;'>
	  <strong class=' well-sm' id='chk'>Create Username and Password</strong>
	 </span>
	 <br>
	  <sup style='color:#888;' class='text-center center-block'>Username and Password must be atleast 7 characters</sup>
	 
      <table class=' table-condensed table-responsive' width='95%' cols='75%' >	
	   <tr>
		<td>
		 <label for='usrname' class='control-label' onkeyup='chk4Dup(this.value)'>
		  Username*
		 </label>		 
	    </td>
		<td>
		 <input onkeyup='chkUsrName(this.value);chk4Dup(this.value)' onchange='$("#usr_name").val(this.value);' id='usrNpt' class='form-control input-sm' type='text' maxlength='15' size='50'  placeholder='Must be atleast 7 characters' value='' style='width: 100%;' autofill='off' autocomplete='off' required/> 
			<img src='/m8tod8/css/img/ok.jpg' class='img-responsive img-rounded pull-right' width='25px' id='imgConf' style='display:none;'/>
			<img src='/m8tod8/css/img/dup.jpg' class='img-responsive img-rounded pull-right' width='25px'  id='imgFail' style='display:none;'/>
		</td>	
		
	   </tr>
	   <tr>
		 <label for='pw' class='control-label' >
		 <td>
		  Password*
		 </label>
	    </td>
		<td>
		 <input onkeyup='yolo()' id='pw1' class='form-control input-sm' type='password' maxlength='20' size='50'  placeholder='Must be atleast 7 characters' value='' style='width: 100%;'  autofill='off' autocomplete='off' required/> 
	    </td>
	   </tr>
	   <tr>
	    <td>
		 <label for='pw2' class='control-label' id='pw2lbl' style='display:none;'>
		  Re-Type
		 </label>
	    </td>
		<td>
		 <input onKeyUp='chkIfMatchPW1(this.value)' id='pw2' class='form-control input-sm' type='password' maxlength='100' size='50' name='pw2' placeholder='****' value='' style='width: 100%;display:none;'  autofill='off' autocomplete='off' required/> 
	    </td>
	   </tr>
	</table>
   </div>
   
  <?//// TABLE STEP 2 \\\\?>
  <?//// TABLE STEP 2 \\\\?>  
   <div class=' step3 hidden'>
	<table class='table-responsive table-condensed' width='100%'>
	   <tr>
		 <td colspan='100%'>
		  <center style='border-top:1px dotted #888;'>
		   Awnser Question Below or you are a spy-bot
		  </center>	
		   <center style='display:block;width:300px;margin:0 auto;padding:5px 5px;background-color:rgba(0,0,0,0.35);border-radius:20px;'>
		    <img src='/m8tod8/css/img/ff.jpg' alt='AntiBot' title='Anti-Bot Question' width='' class='img-responsive img-rounded' />
	     </center>
		</td>	
	   </tr>
	   <tr>
		<td colspan='100%'>
		  <label for='antibot' class='control-label' >
		    Color of the sword in picture?
		  </label>		
		 <input onkeyup='chkSwordColor(this.value)' id='swordColor' class='form-control input-sm' type='text' maxlength='10' name='antibot' placeholder='One of the primary colors in rainbow' value='' style='width: 100%;'   /> 
	    </td>
	   </tr>	   		
	   
	</table>	 
		 
	 <input id='regSubmitBtn' type='submit' class='btn btn-primary' value='Done' name='registration_submitted' disabled />
	 <input type='reset' class='btn btn-danger' onclick='resett()' value='Clear' name='' />
  					   		   
   </div>		   
  </div> 
 </div>
</div>

</form>


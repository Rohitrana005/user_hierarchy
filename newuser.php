<!doctype html>
<html lang="en">
  <head>
     <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
	<!--- Multiple select---->
	<link rel="stylesheet" href="css/bootstrap-select.css">
	<!----Jquery Auto Complete-------->
    <link href = "https://code.jquery.com/ui/1.10.4/themes/ui-lightness/jquery-ui.css" rel = "stylesheet">
	<!------Hamberger-------->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<!---------navbarcss------------>
	<link href = "css/navbar.css" rel = "stylesheet">
	<!----styling--->
	<link href = "css/stylecss.css" rel = "stylesheet">
	<!----bootstrap toggle button----->
	<link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
    <title>New User</title>
	
  </head>
  
  <body>			
<div class='container'>
	
	    <div class='due-msg'>
		
		
		</div>
	    <div class='show-msg alert alert-danger'>
	        
	    </div>
		<h2>Create User</h2>
	  <form method='post' action='' id='myform'>
	    
		
		<section>
			<h3>Basic Details</h3>
			<div class='row'>
             <div class='col-md-6'>			
	           <div class='form-group'>
		            <label for='rname'>Name</label>
		                <input type='text' name='rname' class='form-control' id='rname' placeholder='User Name' required />
		        </div>
	           <div class='form-group'>
		            <label for='lastname'>Last Name</label>
		                <input type='text' name='lastname' class='form-control' id='lastname' placeholder='Last Name' required />
		        </div>
				<div class='form-group'>
					<label for='rname'>Emp Id</label>
						<input type='text' name='EmpId' class='form-control' id='EmpId' placeholder='Emp Id' />
				</div>
	            <div class='form-group'>
		          <label for='usertype'>Type of User</label>
		             <select class='form-control' required name='usertype'>
					       <option>USER</option>
						   <option>ADMIN</option>
					 </select>
		       </div>
	     
	        </div>
			<div class='col-md-6'>
			<div class='form-group'>
		              <label for='email'>Email</label>
		             <input type='email' name='email' class='form-control' id='email' required value="" placeholder='Email'/>
		    </div> 
			<div class='form-group'>
			     <label for='note'>Password</label>
				 <input type='password' name='password' class='form-control' id='password' required value="" placeholder='Password'/>
			</div>			
			<div class='form-group'>
			     <label for='number'>Mobile Number</label>
				 <input type='tel' name='number' class='form-control' id='number'  value="" placeholder='Number'/>
			</div>			
			</div>
	    </div>
		</section>

		
<!-- add -->

<section>
							<h3>Personal Details</h3>
							<div class='row'>
								<div class='col-md-6'>
								<div class='form-group'>
										<label for='Address'>Address</label>
										<input type='text' name='Address' class='form-control' id='Address' placeholder='Address'  />
									</div>
									<div class='form-group'>
										<label for='Aadhaar'>Aadhaar</label>
										<input type='text' name='Aadhaar' class='form-control' id='Aadhaar' placeholder='Aadhaar'  />
									</div>
									<div class='form-group'>
										<label for='Qualification'>Qualification</label>
										<input type='text' name='Qualification' class='form-control' id='Qualification' placeholder='Qualification' />
									</div>
									<div class='form-group'>
										<label for='Medical'>Medical Insurance</label>
										<select class='form-control'  name="Medical" id="Medical">
											<option value=''>--Select--</option>
											<option>yes</option>
											<option>No</option>
										</select>
									</div>
									<div class='form-group'>
										<label for='Esi'>ESI</label>
										<select class='form-control'  name="Esi" id="Esi">
											<option value=''>--Select--</option>
											<option>yes</option>
											<option>No</option>
										</select>
									</div>	

								</div>
								<div class='col-md-6'>
									<div class='form-group'>
										<label for='Father'>Father Name</label>
										<input type='text' name='Father' class='form-control' id='Father'  placeholder='Father Name' />
									</div>
									<div class='form-group'>
										<label for='Pan'>PAN</label>
										<input type='text' name='Pan' class='form-control' id='Pan'  placeholder='Pan' />
									</div>
									<div class='form-group'>
										<label for='MaritalStatus'>Marital Status </label>
										<input type='text' name='MaritalStatus' class='form-control' id='MaritalStatus'  placeholder='MaritalStatus' />
									</div>
									<div class='form-group'>
										<label for='Accidental'>Accidental Insurance</label>
										<select class='form-control'  name="Accidental" id="Accidental">
											<option value=''>--Select--</option>
											<option>Yes</option>
											<option>No</option>
										</select>
									</div>
									<div class='form-group'>
										<label for='Epf'>EPF</label>
										<select class='form-control' name="Epf" id="Epf">
											<option value=''>--Select--</option>
											<option>Yes</option>
											<option>No</option>
										</select>
									</div>
								</div>
							</div>
</section>



		<section>
		    <h3>Other Details</h3>
			<div class='row'>
             <div class='col-md-6'>			
		    <div class='form-group'>
			    <label for='department'>Department</label>
				<select class='form-control' name='department' id='department'>
				  <option value=''>--Select--</option>
				  <option>Executive and Finance</option>
				  <option>Survey</option>
				  <option>Office</option>
				  <option>Marketing & Sales</option>
				  <option>IT- Department</option>
				  <option>HR Department</option>
				  
				</select>
			</div>   
			<div class='form-group'>
			   <label for='designation'>Designation</label>
			   <select class='form-control' id='designation' name='designation'>
								                                       <option value=''>--Select--</option>
																	   <optgroup label='Executive and Finance'>
																	   <option>Founder & Chief Executive Officer</option>
																	   <option>Director & Chief Financial Officer</option>
																	   </optgroup>
																	   <optgroup label='Office'>
																		   <option>Assistant Manager</option>
																		   <option>CAD Engineer</option>
																		   <option>GIS Engineer</option>
																		
																		   <option>Senior Manager</option>
																		   <option>Manager</option>
																		   <option>Team Leader</option>
																	   <option>Project Manager</option>
                                                                       <option>Senior Research Analyst</option>
																	   <option>Senior Research Analyst(Prosecution Team)</option>
                                                                       <option>Research Analyst</option>
                                                                       <option>Research Analyst Intern</option>
                                                                       </optgroup>
																	   <optgroup label='Survey'>
																	   <option>Surveyor</option>
																	   <option>Site Engineer</option>
																	   </optgroup>
																	   <optgroup label='Marketing & Sales'>
																	   <option>BDM- Sales</option>
																	   <option>Business Research Analyst</option>
                                                                       <option>Senior Business Development Exceutive</option>
                                                                       <option>Business Development Executive</option>
                                                                       <option>Senior Data Mining Executive</option>
                                                                       <option>Data Mining Executive</option>
																	   </optgroup>
																	   <optgroup label='IT- Department'>
																	    <option>Technical Lead (Software Development and IT)</option>
																		<option>Software Development Intern</option>
																		<option>Junior Software Developer</option>
																	   </optgroup>
																	   <optgroup label='HR Department'>
																	   <option>HR Manager</option>
																	   <option>HR Executive</option>
																	   </optgroup>
																	   </select>
			</div>
			<div class='form-group'>
		          <label for='dob'>Date of Birth</label>
				  <input type='date' name='dob' id='dob' class='form-control'/>
			</div>
			<div class='form-group'>
		          <label for='dob'>Specialization</label>
				  <input type='text' name='specialization' id='specialization' class='form-control'/>
			</div>
			<div class='form-group'>
		          <label for='BasicPay'>Basic Pay</label>
				  <input type='text' name='BasicPay' id='BasicPay' class='form-control'/>
			</div>
			<div class='form-group'>
		          <label for='allowances'>Allowances</label>
				  <input type='text' name='allowances' id='allowances' class='form-control'/>
			</div>
			<div class='form-group'>
		          <label for='hra'>HRA</label>
				  <input type='text' name='hra' id='hra' class='form-control'/>
			</div>
			</div>
			<div class='col-md-6'>
			<div class='form-group'>
		          <label for='reportingmanger'>Reporting Manager</label>
			       <select type='text' name='reportingmanger' class='form-control' id='reportingmanger' placeholder='reportingmanger'>
				       <option value=''>--Select--</option>
				        <?php 
						                                                    include 'dbconnection.php';
                                                                                if (!$conn) 
		                                                                        {
                                                                                die("Connection failed: " . mysqli_connect_error());
                                                                                }
																				 mysqli_select_db($conn,$dbname);
																			
																				$sql ="SELECT id,email FROM user order by email asc";
																			
                                                                              
                                                                               $result = mysqli_query($conn, $sql);
                                                                                  $num = mysqli_num_rows($result);
						                                               if ($num> 0) 
																			   {
																				   for($i=0;$i<$num;$i++) 
	                                                                               {
		                                                                           $row=mysqli_fetch_array($result);
																				   ?>
																				   <option value='<?php echo $row['email']?>'><?php echo $row['email']?></option>
																				   <?php
																				   }
																			   }
																			   else{
																				   echo "";
																			   }
						?>
				   </select>
			</div>	   
			<div class='form-group'>
                 <label for='doj'>Date of Joining</label>
                 <input type='date' name='doj' id='doj' class='form-control'/>
			</div>
			<div class='form-group'>
                 <label for='jtype'>Type of Joining</label>
                 <select type='text' name='jtype' id='jtype' class='form-control'>
				      <option value=''>--Select--</option>
				      <option>Probation</option>
					  <option>Internship</option>
				 </select>
			</div>
			<div class='form-group pend' style='display:none;'>
                 <label for='pend'>Probation/Internship Ending Date</label>
                 <input type='date' name='pend' id='pend' class='form-control'/>
			</div>
			<div class="form-group">
		          <label for="note">Any other info</label>
			       <textarea class="form-control" rows="8" name="note" placeholder="Employee info like address etc."></textarea>
			</div>
			</div></div>
		</section>                
		<section>
              <h3>Access of Portal within office premises</h3>
			  <div class='row'>
             <div class='col-md-6'>			
	                    
		                  <label class='module-rights-label' for='ipbound'>Ip Bound</label><input type='checkbox' name='ipbound'  id='ipbound' data-toggle="toggle" value='1' checked />
		                 
						  
						
	                    
	        </div>
			</div>
		</section>
		
         <section class='module-rights'>
			<h3>Module Rights</h3>
			<div class='row'>
             <div class='col-md-3'>			
	                    
		                  <label class='module-rights-label' for='invoiceright'>Invoice</label><input type='checkbox' name='invoiceright'  id='invoiceright' data-toggle="toggle" value='1'/><br/><br/>
		                  <label class='module-rights-label' for="expenseright">Expense</label><input type='checkbox' name='expenseright'  id='expenseright' data-toggle="toggle" value='1'/><br/><br/>
						  <label class='module-rights-label' for="userright">User</label><input type='checkbox' name='userright'  id='userright' data-toggle="toggle" value='1'/><br/><br/>
						
	                    
	        </div>
			<div class='col-md-3'>			
	                    
		                  
						  <label class='module-rights-label' for="salesright">Sales</label><input type='checkbox' name='salesright'  id='salesright' data-toggle="toggle" value='1'/><br/><br/>
						  <label class='module-rights-label' for="clientright">Client</label><input type='checkbox' name='clientright'  id='clientright' data-toggle="toggle" value='1'/><br/><br/>
	                      <label class='module-rights-label' for="resumeright">Resume</label><input type='checkbox' name='resumeright'  id='resumeright' data-toggle="toggle" value='1'/><br/><br/>
	                    
	        
			</div>
			<div class='col-md-3'>			
	                    
		                  
						  <label class='module-rights-label' for="vendorright">Vendor</label><input type='checkbox' name='vendorright'  id='vendorright' data-toggle="toggle" value='1'/><br/><br/>
						  <label class='module-rights-label' for="projectright">Project</label><input type='checkbox' name='projectright'  id='projectright' data-toggle="toggle" value='1'/><br/><br/>
	                      <label class='module-rights-label' for="evaluationright">Evaluation</label><input type='checkbox' name='evaluationright'  id='evaluationright' data-toggle="toggle" value='1'/><br/><br/> 
	        
			</div>
			<div class='col-md-3'>			
	                    
		                  
						  <label class='module-rights-label' for="noticeright">Notice</label><input type='checkbox' name='noticeright'  id='noticeright' data-toggle="toggle" value='1'/><br/><br/>
						  <label class='module-rights-label' for="leavelogright">Leave Logs</label><input type='checkbox' name='leavelogright'  id='leavelogright' data-toggle="toggle" value='1'/><br/><br/>
	                    
	        </div>
	    </div>
		</section>
		<div class='nxtrow' style='text-align:center'>
		    <a class='button button1' href='user.php'>Cancel</a>
		    <input type='submit' value='Save' class='button button1' id='sbmit'/>
		</div>
	  </form>
     
	</div>
	


  </div>
</div>
    <!-- jQuery-->
    <script src="js/jquery.min.js"></script>
	 <!-- bootstrap-->
    <script src="js/bootstrap.min.js"></script>
	 <!----ajax------->
	 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	 <!------autocomplete--------->
     <script src = "https://code.jquery.com/jquery-1.10.2.js"></script>
     <script src = "https://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
	 <!---------form validation---->
	 <script src='js/jquery.validate.js'></script>
	 <!---navbar js---------->
	 <script src="js/navbar.js"></script>
	 <!----------bootstrap multiple----->
	 <script src="js/bootstrap-select.js"></script>
	 <!-----bootstrap toggle-------->
	 <script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
	<!-- <script>
	$(document).ready(function () {
		 $('#myTopnav a').each(function(){
			if($(this).text()=="Users")
			{
				$(this).attr("class","active");
				return false;
			}
		}); 
		//$('select').selectpicker();
		$("#myform").validate();
		
	       
		 
		 $("#myform").submit(function(e)
		 {
			e.preventDefault();
					if($("#myform").valid() == true)
		             {
						 $("#sbmit").prop("disabled", true);
						 var fd = $("#myform").serialize();
			              $.ajax({
                                type: 'POST',
                                url: 'request.php',
								data: fd+"&action=adduser",
								dataType:"json",
                                success: function(data)
			                     {
									 if(data[0].accessright==0)
									 {
										 alert('You are not authorised to use this Module.');
										 window.location ="home.php";
										 return false;
									 }
									 
									 if(data[0].id!='')
									 {
									  window.location.href="viewuser.php?userid="+data[0].id;
									  
									 }
									 else
									 {
							        $(".show-msg").html("Something Went Wrong..");
									  $(".show-msg").show();
									  setTimeout(function() {
                                        $('.show-msg').fadeOut();
                                            }, 10000);
									  window.scrollTo(0,0); 
									  $("#sbmit").prop("disabled", false);
									 }
								 }
					       });
						 
					 }
		             
				
		     
			 
		 });		 
		 
		 $('input,textarea,select').each(function(){
			 if($(this).prop('required'))
			 {
				 $(this).css({'border-left':'1px solid red'});
			 }
			 
		 });
                
         $("#jtype").change(function(){
			 if($(this).val()!='')
			 {
				 $(".pend").show();
				 $("#pend").prop("required", true);
			 }
			 else
			 {
				$(".pend").hide(); 
				 $("#pend").prop("required", false);
			 }
		 });		  
             
	});
		        
              
	</script> -->
	
  </body>
</html>

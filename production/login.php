<?php
	session_start();

	session_destroy();
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<!-- Meta, title, CSS, favicons, etc. -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<title> Talpuri International Colony </title>

		<!-- PNotify -->
    <link href="../vendors/pnotify/dist/pnotify.css" rel="stylesheet">
    <link href="../vendors/pnotify/dist/pnotify.buttons.css" rel="stylesheet">
    <link href="../vendors/pnotify/dist/pnotify.nonblock.css" rel="stylesheet">


		<!-- Bootstrap -->
		<link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
		<!-- Font Awesome -->
		<link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
		<!-- NProgress -->
		<link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
		<!-- Animate.css -->
		<link href="../vendors/animate.css/animate.min.css" rel="stylesheet">

		<!-- Custom Theme Style -->
		<link href="../build/css/custom.min.css" rel="stylesheet">

		    <!-- NProgress -->
    <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- bootstrap-daterangepicker -->
    <link href="../vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">


		<!-- bootstrap-daterangepicker -->
    <link href="../vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

						<style>

						body, html {
								height: 100%;
								margin: 0;
								font: 400 15px/1.8 "Lato", sans-serif;
								color: #777;
					}   

					.bgimg-1 {
							background-image: url("images/Lotus_Talpuri.jpg");
							height: 100%;
						}

					</style>



	</head>



	<body class="login" background="images/Lotus_Talpuri.jpg">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

	<script type="text/javascript">
		// A $( document ).ready() block.
		/*$( document ).ready(function() {
		    PNotify.removeAll();
		});
		window.onload = function() {
		    PNotify.removeAll();
		};*/
	</script>

				<div>
					<a class="hiddenanchor" id="signup"></a>
					<a class="hiddenanchor" id="signin"></a>

					<div class="login_wrapper">
						<div class="animate form login_form">
							<section class="login_content" style="width: 120%">


							<form>
									<h1>Login Form</h1>


							                  <div id = "pop_over_green" class="alert alert-success alert-dismissible fade in" role="alert" style="display: none;">
							                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
							                    </button>
							                    <strong> Great ! </strong> You seem to be a registered member of the Talpuri RWA.
							                  </div>
							                  <div id = "pop_over_blue" class="alert alert-info alert-dismissible fade in" role="alert" style="display: none;">
							                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
							                    </button>
							                    <strong> BUT </strong> your request for registration hasn't been approved yet. Please contact Mr. Shishir Tamotia for more details.
							                  </div>
							                  <div id = "pop_over_yellow" class="alert alert-warning alert-dismissible fade in" role="alert" style="display: none;">
							                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
							                    </button>
							                    <strong> Sorry ! </strong> Couldn't find this House ID in our database.
							                  </div>
							                  <div id = "pop_over_red" class="alert alert-danger alert-dismissible fade in" role="alert" style="display: none;">
							                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
							                    </button>
							                    <strong> Sorry !</strong> The password is incorrect.
							                  </div>



								
									<div>
										<input type="text" id="login_usrname" class="form-control" placeholder="House ID" required='true' />
									</div>
									<div>
										<input type="password" id="login_pwd" class="form-control" placeholder="Password" required='true' />
									</div>
									<div>
										<a class="btn btn-default" onclick="tryToLogin()">Log in</a>
										<a class="reset_pass" href="#">Lost your password?</a>
									</div>


									<script type="text/javascript">

											var tryToLogin = function()
											{
												var entered_usrnm = $('#login_usrname').val();
												var entered_pwd = $('#login_pwd').val();


												 $.ajax({
												           type: "POST",
												           url: 'VR_scripts/helper_modules.php',
												           data: {action:'try_login', _usr_usrname_ : entered_usrnm, _usr_pwd_ : entered_pwd},
												           success:function(return_data) {

												           //	window.alert(return_data);

												           	if(return_data==='id_not_found')
												           	{
												           		$('#pop_over_yellow').attr('style','');
												           		$('#pop_over_blue').attr('style','display: none;');
												           		$('#pop_over_green').attr('style','display: none;');
												           		$('#pop_over_red').attr('style','display: none;');
												           	}
												           	else if(return_data==='unapproved_request')
												           	{
												           		$('#pop_over_yellow').attr('style','display: none;');
												           		$('#pop_over_blue').attr('style','');
												           		$('#pop_over_green').attr('style','');
												           		$('#pop_over_red').attr('style','display: none;');
												           	}
												           		else if(return_data==='incorrect_password')
												           	{
												           		$('#pop_over_yellow').attr('style','display: none;');
												           		$('#pop_over_blue').attr('style','display: none;');
												           		$('#pop_over_green').attr('style','display: none;');
												           		$('#pop_over_red').attr('style','');
												           	}

												           	else if(return_data=='login_as_admin')
												           	{
												           		PNotify.removeAll();

												           		$('#jump2welcomepage_bttn').attr('onclick', "location.href = './Admin_Pages/admin_tasks.php'");


												           		$('#modal_shower_bttn').click();
												           	}
												           	else if(return_data=='login_as_nonadmin')
												           	{
												           		PNotify.removeAll();

												           		var modal_text = 
												           		"<h4> Welcome to Talpuri Association RWA Website</h4>" +
									                         "<p> Your Account has been found to be activated by the Administrator</p>" +
									                          "<p> Please follow the decorum of the Society while operating on this Website </p>";

									                          $('#modal_body_content').html(modal_text);


												           		$('#myModalLabel').html('Welcome, Member');

												           		$('#jump2welcomepage_bttn').attr('onclick', "location.href = './Member_Pages/home_page.php'");

												           		$('#modal_shower_bttn').click();
												           	}
												           	else
												           	{

													             new PNotify({
								                                  title: 'There\'s something wrong with the Website !',
								                                  text: 'Please contact the website developer for more details. Error Code : ER4b33',
								                                  type: 'success',
								                                  styling: 'bootstrap3'
									                              });
												           	}


												           }

												      });


											}

									</script>

																<!-- Large modal -->
							      



									<div class="clearfix"></div>

									<div class="separator">
										<p class="change_link">New to site?
											<a href="#signup" class="to_register"> Create Account </a>
										</p>

										<div class="clearfix"></div>
										<br />

									 <div>
											<h1><i class="fa fa-home"></i> Talpuri International Colony RWA </h1>
											<p> Gmail Address : talpuri.international.colony@gmail.com </p>
											<p>©2017 All Rights Reserved. Talpuri Society Association, Website Developer - Varun Rawal</p>
										</div>
									</div>
								</form>
							</section>
						</div>



						            <button type="button" id="modal_shower_bttn" class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-lg" style="display: none;">Large modal</button>

							                  <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
							                    <div class="modal-dialog modal-lg">
							                      <div class="modal-content">

							                        <div class="modal-header">
							                          <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
							                          </button>
							                          <h4 class="modal-title" id="myModalLabel">Welcome, Administrator</h4>
							                        </div>
							                        <div class="modal-body" id="modal_body_content">
							                          <h4> Welcome to Talpuri Association RWA Website</h4>
							                          <p> The System has found you to possess privilege administrator rights in your account.</p>
							                          <p> Please use your precious Administrator rights carefully and responsibly. </p>
							                        </div>
							                        <div class="modal-footer" style="text-align: center;">
                   										   <button id="jump2welcomepage_bttn" type="button" class="btn btn-success btn-lg" data-dismiss="modal" >Take Me to Welcome Page </button>
							                        </div>

							                      </div>
							                    </div>
							                  </div>



						<!-- Hidden HTML forms for house_catgory selector dropdowns -->

									 <form id="house_category_form" action="<?php $_PHP_SELF ?>" method="post">
                                              <input type="hidden" id="house_category_select" name='house_category_choice'>
                                          </form>







						<div id="register" class="animate form registration_form" style="width:120%;">
							<section class="login_content">


<h1>Create Account</h1>


 <!-- Smart Wizard -->
                  
                    <div id="wizard" class="form_wizard wizard_horizontal">
                      <ul class="wizard_steps">
                        <li>
                          <a href="#step-1">
                            <span class="step_no">1</span>
                            <span class="step_descr">
                                              Step 1<br />
                                              <small>Provide Login & Authentication Verification Details</small>
                                          </span>
                          </a>
                        </li>
                        <li>
                          <a href="#step-2">
                            <span class="step_no">2</span>
                            <span class="step_descr">
                                              Step 2<br />
                                              <small> Complete your Member Profile </small>
                                          </span>
                          </a>
                        </li>
                        
                      </ul>
                      <div id="step-1">
                        



                        <form>
									


									<?php

								 if (isset($_POST['house_category_choice']))
								 {
								 	$_SESSION['house_category_selected'] = $_POST['house_category_choice'];

								 }

									?>



                    <div class="x_content" style="width: 105%">

                    <div class="row">
		                     <div class="btn-group">
					                    <button id="house_category" data-toggle="dropdown" class="btn btn-default dropdown-toggle" type="button" aria-expanded="false">
					                    

					                     							<?php
		                                              if(!isset($_SESSION['house_category_selected']))
		                                                 echo 'Choose your House Category ';
		                                             else
		                                                echo $_SESSION['house_category_selected'];
		                                              ?>

					                    <span class="caret"></span>
					                    </button>
					                    <ul id="house_category_dropdown" role="menu" class="dropdown-menu">
					                      <li><a href="#signup">Apartment</a>
					                      </li>
					                      <li><a href="#signup">Bungalow</a>
					                      </li>
					                      <li><a href="#signup">Non-Resident</a>
					                      </li>
					                     
					                    </ul>
					                    </div>
					           </div>


	                    <div class="row">



			                      <script type='text/javascript'>

                               $("#house_category_dropdown > li").click(function() {
                               			
                                     $("#house_category").text($(this).text());
                                        $("#house_category_select").val($(this).find("a").text());
                                      document.getElementById('house_category_form').submit();
                                  });

                                  </script>


	                      <div id='house_type_selector' class="btn-group">

	                      <?php

	                      		if(isset($_SESSION['house_category_selected']))
	                      		{

	                      			if($_SESSION['house_category_selected'] == 'Apartment')
	                      			{
	                      				 $house_types = array("Orchid","Gulmohar","Juhi");
	                      			}

	                      			else if($_SESSION['house_category_selected'] == 'Bungalow')
	                      			{
	                      				 $house_types = array("Lily","Dahlia","Daisy", "Lotus", "Mogra", "Rose", "Tulip");
	                      			}

	                      			elseif ($_SESSION['house_category_selected'] != 'Non-Resident') {
	                      				die('Impossible Error !');
	                      			}

	                      			else
	                      			{
	                      				$house_types = array();
	                      			}



	                      			  foreach($house_types as $x) {
                                                  echo   "<button onclick=\"updateLoginID('".$x."')\" onkeydown=\"updateLoginID('".$x."')\" class=\"btn btn-default\" type=\"button\">".$x."</button>";
                                                }


	                      		}
	                      ?>
	                       
	                      </div>

	                    			
	                      
	                    </div>


														<div class="input-group" style="width: 50%">


														   <input id='house_number_input' onchange="updateLoginID2()" type="number" step="1" min="1" align="center" class="form-control" 

															<?php

																if(isset($_SESSION['house_category_selected']))
																{

																	if($_SESSION['house_category_selected'] == 'Bungalow')
																		echo "placeholder=\"House Number (Integer ONLY)\"" ;
																	else if($_SESSION['house_category_selected'] == 'Apartment')
																		echo "placeholder=\"Floor Number (Integer ONLY)\"" ;

																}
																else
																{
																	echo "placeholder=\"House Number\"";
																}

															?>
															


															style="

															<?php
															if(isset($_SESSION['house_category_selected']) and $_SESSION['house_category_selected'] != 'Non-Resident')
																echo "width: 225px; align:center";
															else
																echo "display: none";

															?>


															" required="true" />

														   <span class="input-group-btn">
														    <div class="btn-group">
						                    <button id="apartment_pos_selector_btn" style="

						                    <?php

						                    if (isset($_SESSION['house_category_selected']) and ($_SESSION['house_category_selected']=='Apartment'))
						                    {
						                    	echo "";
						                    }
						                    else
						                    	echo "display: none";

						                    	?>

						                    "  data-toggle="dropdown" class="btn btn-primary dropdown-toggle btn-sm" type="button" aria-expanded="false"> Select Apartment Position <span class="caret"></span>
						                    </button>
						                    <ul id="apartment_pos_dropdown" role="menu" class="dropdown-menu">
						                      <li><a href="#signup">A</a>
						                      </li>
						                      <li><a href="#signup">B</a>
						                      </li>
						                      <li><a href="#signup">C</a>
						                      </li>
						                      <li><a href="#signup">D</a>
						                      </li>
						                    </ul>
						                    </div>
														   </span>

																		   <script type='text/javascript'>

				                               $("#apartment_pos_dropdown > li").click(function() {
				                               			
				                                     updateLoginID3($(this).text());
				                                     /*   $("#house_category_select").val($(this).find("a").text());
				                                      document.getElementById('house_category_form').submit();*/
				                                  });

				                                  </script>

														</div>

                    </div>

                  


									<div>
										<input id='auto_created_login_id' disabled="true" type="text" class="form-control" placeholder="Login ID" required="true" readonly />
									</div>
										<h6 style="color:red;     margin-top: -15px; margin-bottom: 30px;"> Please use this as your Login ID Username every time you log in ! </h6>



										  <script type='text/javascript'>

										  	var house_type_global = 'none';
										  	var house_number_global = -1;
										  	var apart_pos_global = 'none';

	                    			  	updateLoginID = function(button_text)
	                    			  	{
	                    			  		
	                    			  		//window.alert(button_text);
	                    			  		if(house_number_global==-1)
	                    			  			$("#auto_created_login_id").val(button_text.toLowerCase()); 
	                    			  		else if(apart_pos_global == 'none')
	                    			  			$("#auto_created_login_id").val(button_text.toLowerCase() + house_number_global); 
	                    			  		else
	                    			  			$("#auto_created_login_id").val(button_text.toLowerCase() + house_number_global + apart_pos_global); 

	                    			  		house_type_global = button_text.toLowerCase();
	                    			  	}

	                    			  	updateLoginID2 = function()
	                    			  	{
	                    			  		house_number = $('#house_number_input').val(); 

	                    			  		if(house_number=='')
	                    			  		{
	                    			  			house_number_global=-1;
	                    			  			$("#auto_created_login_id").val('');
	                    			  		}
	                    			  		else
	                    			  		{

		                    			  		if(house_type_global=='none')
		                    			  			{
		                    			  				//window.alert('Please click on the House Type first !');

		                    			  					new PNotify({
								                                  title: 'Wait a second !',
								                                  text: 'Please click on the House Type first !',
								                                  type: 'error',
								                                  styling: 'bootstrap3'
								                              });


		                    			  				$('#house_number_input').val('');
		                    			  			}
		                    			  			else
		                    			  			{
		                    			  				$("#auto_created_login_id").val(house_type_global+house_number); 
		                    			  				house_number_global = house_number;
		                    			  			}

		                    			  	}

	                    			  	}

	                    			  	updateLoginID3 = function (apart_pos)
	                    			  	{
	                    			  		apart_pos = apart_pos.toLowerCase();

	                    			  		if ((house_type_global =='none') && (house_number_global==-1))
	                    			  		{

	                    			  			//window.alert('Please click on the House Type and enter the floor number first !');

	                    			  			new PNotify({
						                                  title: 'Wait a second !',
						                                  text: 'Please click on the House Type and enter the floor number first !',
						                                  type: 'error',
						                                  styling: 'bootstrap3'
							                              });

	                    			  			//$('apartment_pos_selector_btn').attr('text','Select Apartment Position');

	                    			  		}
	                    			  		else if (house_number_global == -1)
	                    			  		{
	                    			  			
	                    			  			//window.alert('Please enter the floor number first !');

	                    			  			new PNotify({
						                                  title: 'Wait a second !',
						                                  text: 'Please enter the floor number first !',
						                                  type: 'error',
						                                  styling: 'bootstrap3'
							                              });
	                    			  		//	$('apartment_pos_selector_btn').text('Select Apartment Position');

	                    			  		}
	                    			  		else
	                    			  		{
	                    			  			apart_pos_global = apart_pos;
	                    			  			$("#apartment_pos_selector_btn").text(apart_pos); 
	                    			  			$("#auto_created_login_id").val(house_type_global+house_number_global+(apart_pos));
	                    			  		}

	                    			  	}

                                  </script>


                               <div class="row" style="    margin-bottom: -50px;   margin-top: -50px;">
                               <br> <br>
                                  <div class="input-group" style="width: 95%">

									<!-- <div>
										<input id="email_input" type="email" class="form-control" placeholder="Email" required="" />	
									</div> -->

									<div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback" style="width: 100%">
				                        <input type="email" class="form-control has-feedback-left" id="email_input" placeholder="Contact Email">
				                        <span class="fa fa-envelope form-control-feedback left" aria-hidden="true"></span>
				                      </div>



									<span class="input-group-btn">
											<button class="btn btn-app" onclick="call_Ajax_email_verifier()">
						                      <i class="fa fa-envelope"></i> Verify Email Address
						                    </button>
				                    </span>
				                  </div>




				                  <div class="form-group has-success has-feedback">
								      
								      <div class="col-sm-9">
								        <input style="visibility: hidden;" onchange='check_against_email_verif_code()' placeholder="Enter Email Verification Code here" type="text" class="form-control" id="email_verification_code_input">
								        <span id="tick_icon_eml_verif" style="visibility: hidden;" class="glyphicon glyphicon-ok form-control-feedback"></span>
								      </div>
								      <label id='email_verif_text' style="visibility: hidden;" class="col-sm-2 control-label" for="email_verification_code_input">Email Verified </label>
								    </div>



							                  <script type="text/javascript">

								                function validateEmail(mail)   
												{  
												 if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(mail))  
												  {  
												    return (true);
												  }  
												    return (false);  
												}  

							                  function randomGenerateCode(length)
												{
												    var text = "";
												    var possible = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789";

												    for( var i=0; i < length; i++ )
												        text += possible.charAt(Math.floor(Math.random() * possible.length));

												    return text;
												}


							                  var email_verification_code_js = randomGenerateCode(6);

							                  	function call_Ajax_email_verifier() {

							                  		//window.alert("ok");

							                  		 var receiver_email = $('#email_input').val();

							                  		if (receiver_email == '')
							                  		{
							                  			new PNotify({
						                                  title: 'No Email Specified !',
						                                  text: 'Please enter the email address to be verified !',
						                                  type: 'error',
						                                  styling: 'bootstrap3'
							                              });

							                  		}
							                  		else if(!validateEmail(receiver_email))
							                  		{
							                  			new PNotify({
						                                  title: 'Invalid Email Specified !',
						                                  text: 'Please enter a valid email address in the form of abc@xyz.pqr !',
						                                  type: 'error',
						                                  styling: 'bootstrap3'
							                              });
							                  		}
							                  		else
							                  		{
							                  			$('#email_verification_code_input').attr('style', '');

							                  			email_verification_code_js = randomGenerateCode(6);

												      $.ajax({
												           type: "POST",
												           url: 'VR_scripts/helper_modules.php',
												           data:{action:'call_email_verifier', receiver: receiver_email, verif_code: email_verification_code_js},
												           success:function(html) {
												             new PNotify({
							                                  title: 'Email Succesfully Sent !',
							                                  text: 'The verificaiton code has been succesfully sent to your email ID '+receiver_email+' !',
							                                  type: 'success',
							                                  styling: 'bootstrap3'
								                              });
												           }

												      });


												      waitingDialog.show('Sending email ... ');
												      setTimeout(function () {
															  waitingDialog.hide();
															}, 5000);
												  }
												 }

							                  </script>

									 
								</div>





                               <div class="row" style="    margin-bottom: -50px;   margin-top: -50px;">
                               <br> <br>
                                  <div class="input-group" style="width: 95%">
								
									<div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback" style="width: 100%">
				                        <input type="number" class="form-control has-feedback-left" id="phone_input" placeholder="10-digit Owner Mobile">
				                        <span class="fa fa-phone form-control-feedback left" aria-hidden="true"></span>
				                      </div>


									<span class="input-group-btn">
											<button class="btn btn-app" onclick="call_Ajax_phone_verifier()">
						                      <i class="fa fa-phone-square"></i> Verify Phone Number
						                    </button>
				                    </span>
				                  </div>




				                  <div class="form-group has-success has-feedback">
								      
								      <div class="col-sm-9">
								        <input style="visibility: hidden;" onchange='check_against_phone_verif_code()' placeholder="Enter Phone Verification Code here" type="text" class="form-control" id="phone_verification_code_input">

								        <span id="tick_icon_phn_verif" style="visibility: hidden;" class="glyphicon glyphicon-ok form-control-feedback"></span>
								      </div>
								      <label id='phone_verif_text' style="visibility: hidden;" class="col-sm-2 control-label" for="phone_verification_code">Phone Number Verified </label>
								    </div>


							                  <script type="text/javascript">

							                  var phone_verification_code_js = randomGenerateCode(6);

							                  	function call_Ajax_phone_verifier() {
							                  		 var receiver_phone = $('#phone_input').val();

							                  		if (receiver_phone == '')
							                  		{
							                  			new PNotify({
						                                  title: 'No number Specified !',
						                                  text: 'Please enter the phone number to be verified !',
						                                  type: 'error',
						                                  styling: 'bootstrap3'
							                              });

							                  		}
							                  		else if (receiver_phone.length != 10)
							                  		{
							                  			new PNotify({
						                                  title: 'Invalid number Specified !',
						                                  text: 'The phone number must be 10-digit',
						                                  type: 'error',
						                                  styling: 'bootstrap3'
							                              });
							                  		}
							                  		else
							                  		{
							                  			$('#phone_verification_code_input').attr('style','');

							                  			phone_verification_code_js = randomGenerateCode(6);

												      $.ajax({
												           type: "POST",
												           url: 'VR_scripts/helper_modules.php',
												           data:{action:'call_phone_verifier', receiver: receiver_phone, verif_code: phone_verification_code_js},
												           success:function(html) {
												             new PNotify({
							                                  title: 'phone Succesfully Sent !',
							                                  text: 'The verificaiton code has been succesfully sent to your mobile number '+receiver_phone+' !',
							                                  type: 'success',
							                                  styling: 'bootstrap3'
								                              });
												           }

												      });

												      waitingDialog.show('Sending SMS ... ');
												      setTimeout(function () {
															  waitingDialog.hide();
															}, 5000);
												  }
												 }

							                  </script>

									 
								</div>




								<script type="text/javascript">

								check_against_email_verif_code = function()
									{
										//window.alert(email_verification_code_js + ' '  + $('#email_verification_code_input').val() );
										
											if($('#email_verification_code_input').val().trim() == email_verification_code_js.trim())
											{
												$('#email_verif_text').attr('style','');
												$('#tick_icon_eml_verif').attr('style','');
												$('#email_verification_code_input').attr('disabled', true);
												$('#email_input').attr('disabled', true);
											}
									}


									check_against_phone_verif_code = function()
									{
										//window.alert(phone_verification_code_js + ' '  + $('#phone_verification_code_input').val() );
										
											if($('#phone_verification_code_input').val().trim() == phone_verification_code_js.trim())
											{
												$('#phone_verif_text').attr('style','');
												$('#tick_icon_phn_verif').attr('style','');
												$('#phone_verification_code_input').attr('disabled', true);
												$('#phone_input').attr('disabled', true);
											}
									}
								</script>

									<div>
										<input id="password_input" type="password" class="form-control" placeholder="Password" required="true" />
										<h6 style="color:red;     margin-top: -15px; margin-bottom: 5px;"> This is the key to your account. Don't lose it. </h6>
										<input id="password_input_2" type="password" class="form-control" placeholder="Confirm Password"  data-validate-linked="password_input" required="true" onchange="validatePasswordConfirmation()" />
									</div>

									<script type="text/javascript">
										var validatePasswordConfirmation = function()
										{
											if($('#password_input').val() !== $('#password_input_2').val())
											{
												new PNotify({
						                                  title: 'Passwords do NOT match !',
						                                  text: 'Please ensure that you confirm your password twice !',
						                                  type: 'error',
						                                  styling: 'bootstrap3'
							                              });
												$('#password_input_2').val('');
												return false;
											}
											else
												return true;
										}
									</script>
									

									<div class="clearfix"></div>

									
								

                      </div>
                      <div id="step-2">
                        <h2 class="StepTitle">Great ! Just a few more steps ... </h2>

                       

                    
                      <span class="section"> Personal Information </span>

                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name"> Name <span class="required">*</span>
                        </label>
                        <div class="col-md-10 col-sm-10 col-xs-12">
                          <input id="house_owner_name_input" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="name" placeholder="House Owner Name " required="required" type="text">
                        </div>
                      </div>


                    
                       <div class="item form-group">

                       <label class="control-label col-md-5 col-sm-5 col-xs-12" for="handovr_date_input"> Handover Date  <span class="required">*</span>
                        </label>


		                        <div class="col-md-10">
		                       
		                        <fieldset>
		                          <div class="control-group">
		                            <div class="controls">
		                              <div class="col-md-11 xdisplay_inputx form-group has-feedback">
		                                <input type="text" class="form-control has-feedback-left" id="single_cal1" placeholder="HandOver Date" aria-describedby="inputSuccess2Status">
		                                <span class="fa fa-calendar-o form-control-feedback left" aria-hidden="true"></span>
		                                <span id="inputSuccess2Status" class="sr-only">(success)</span>
		                              </div>
		                            </div>
		                          </div>
		                        </fieldset>

		                      </div>


	                  </div>



	                   <div class="item form-group">
                       <label class="control-label col-md-5 col-sm-5 col-xs-12" for="occupancy_date_input"> Occupancy Date  <span class="required">*</span>
                        </label>
	                      



			                      <div class="col-md-10">
			                       
		 							<fieldset>
		                          <div class="control-group">
		                            <div class="controls">
		                              <div class="col-md-11 xdisplay_inputx form-group has-feedback">
		                                <input type="text" class="form-control has-feedback-left" id="single_cal2" placeholder="Occupancy Date" aria-describedby="inputSuccess2Status2">
		                                <span class="fa fa-calendar-o form-control-feedback left" aria-hidden="true"></span>
		                                <span id="inputSuccess2Status2" class="sr-only">(success)</span>
		                              </div>
		                            </div>
		                          </div>
		                        </fieldset>
		                      </div>



	                  </div>
	              







                      







                     


                     
                      <div class="ln_solid"></div>
                      <div class="form-group">


                         <div class="col-md-6 col-md-offset-3">
										<button type="button" class="btn btn-success btn-lg" href="index.html" onclick="submitTheCompleteForm()" >Submit SignUp Request </button>
									</div>


                      </div>
                    </form>





               							    <script type="text/javascript">

               							    function isHouseLoginIDValid(login_id)
               							    {
               							    	// login_id must be of the form <name_of_bungalow><Bungalow_Number>
               							    	// OR can be of form <name_of_apartment><floor_no><apart_pos> where <apart_pos> can be 'A'/'B'/'C'/'D'
               							    	// also there are real-life constraints on the house no.s associated with a given house type

               							    	var indx_of_first_digit = login_id.search(/\d/);
               							    	if(indx_of_first_digit==-1) // if no digit found in the login_id, its not valid
               							    		return false;

               							    	var _last_char_ = login_id.substr(login_id.length - 1);

               							    	var house_type_substr = login_id.substring(0,indx_of_first_digit);

               							    	var bungalow_types_list = ["lily", "dahlia", "daisy", "lotus", "mogra", "rose", "tulip"];
               							    	var apartment_types_list = ["orchid", "gulmohar", "juhi"];

               							    	if(isNaN(_last_char_)) // if last character is not a number // i.e. it is a apartment type
               							    	{
               							    		// if it is bungalow type, NOT valid
               							    		if(bungalow_types_list.indexOf(house_type_substr) != -1)
               							    		{
               							    			return false; // NOT VALID
               							    		}
               							    		else if(apartment_types_list.indexOf(house_type_substr) == -1) // not present in the apartments
               							    		{
               							    			return false; // NOT VALID
               							    		}
               							    		else
               							    		{
               							    			var apart_pos_values = ["a","b","c","d"];
               							    			if(apart_pos_values.indexOf(_last_char_)==-1) // the last chaarcter of apartment ID is not as expected
               							    				return false;
               							    		}

               							    	}
               							    	else // if last character is a number // i.e. it is a bungalow type
               							    	{
               							    		// if it is bungalow type, NOT valid
               							    		if(apartment_types_list.indexOf(house_type_substr) != -1)
               							    		{
               							    			return false; // NOT VALID
               							    		}
               							    		else if(bungalow_types_list.indexOf(house_type_substr) == -1)
               							    		{
               							    			return false; // NOT VALID if not present in the bungalows list
               							    		}
               							    		
               							    	}
 
               							    	var house_number;
               							    	var list_of_nos = login_id.match(/\d+/g);
												
												if(list_of_nos.length!=1) // we want exactly one number to be present in the login ID string
												{
													return false;
												}
												else
												{
													house_number =  list_of_nos[0];
													if(isNaN(house_number))
														return false; // something wrong
												}

               							    	if(house_type_substr === 'lotus')
               							    	{
               							    		// then the number should be between 1 to 78
               							    		if(( house_number>=1 && house_number<=78) || (house_number>=244 && house_number<=263) || (house_number>=371 && house_number<=378))
               							    			return true;
               							    	}
               							    	if(house_type_substr === 'rose')
               							    	{
               							    		// then the number should be between 1 to 78
               							    		if((house_number>=79 && house_number<=152) || (house_number>=236 && house_number<=243) || (house_number>=264 && house_number<=273) || (house_number>=379 && house_number<=386))
               							    			return true;
               							    	}

               							    	if(house_type_substr === 'lily')
               							    	{
               							    		// then the number should be between 1 to 78
               							    		if((house_number>=153 && house_number<=235) || (house_number>=387 && house_number<=420))
               							    			return true;
               							    	}

               							    	if(house_type_substr === 'tulip')
               							    	{
               							    		// then the number should be between 1 to 78
               							    		if(house_number>=274 && house_number<=370)
               							    			return true;
               							    	}

               							    	if(house_type_substr === 'mogra' || house_type_substr === 'gulmohar' || house_type_substr === 'orchid' || house_type_substr === 'juhi' || house_type_substr === 'daisy' || house_type_substr === 'dahlia'  )
               							    	{
               							    		return true;
               							    	}

               							    	return false;
               							    	
               							    }

               							    function submitTheCompleteForm()
               							    {
               							    	validateAllFields();
               							    	//call_Ajax_FormSubmitter();
               							    }


								               function validateAllFields()
								               {

								               	var _auto_created_login_id_ = $('#auto_created_login_id').val();

								               	if(_auto_created_login_id_ ==='')
								               	{
								               		new PNotify({
						                                  title: 'No House ID specified !',
						                                  text: 'Please select your house from the dropdown list !',
						                                  type: 'error',
						                                  styling: 'bootstrap3'
							                              });
								               		return false;
								               	}
								               	else
								               	{
								               		
								               		// check for validatity of the house_id
								               		if(!isHouseLoginIDValid(_auto_created_login_id_))
										               	{
										               		new PNotify({
								                                  title: 'The House ID is NOT valid !',
								                                  text: 'Properly select your House ID !',
								                                  type: 'error',
								                                  styling: 'bootstrap3'
									                              });
										               		return false;
										               	}
								               	}

								               	var _email_, _mobile_no_;

								               	// check if email has been verified or not
								               	if(($('#email_verif_text').attr('style')!='') || ($('#tick_icon_eml_verif').attr('style')!=''))
								               	{
								               				new PNotify({
								                                  title: 'No Email Verified !',
								                                  text: 'Please Verify your contact email to authenticate your identity !',
								                                  type: 'error',
								                                  styling: 'bootstrap3'
									                              });
										               		return false;
								               	}
								               	else
								               	{
								               		_email_ = $('#email_input').val();
								               	}

								               	// check if phone number has been verified or not
								               	if(($('#phone_verif_text').attr('style')!='') || ($('#tick_icon_phn_verif').attr('style')!=''))
								               	{
								               				new PNotify({
								                                  title: 'No Mobile No. Verified !',
								                                  text: 'Please Verify your contact mobile number to authenticate your identity !',
								                                  type: 'error',
								                                  styling: 'bootstrap3'
									                              });
										               		return false;
								               	}
								               	else
								               	{
								               		_mobile_no_ = $('#phone_input').val();
								               	}

								               	var _password_ = $('#password_input').val();
								               	//window.alert(_password_);
								               	if(_password_==='')
								               	{
								               		new PNotify({
								                                  title: 'No Password Specified !',
								                                  text: 'The Password can\'t be left blank !',
								                                  type: 'error',
								                                  styling: 'bootstrap3'
									                              });
										               		return false;
								               	}
								               	

								               	if(!validatePasswordConfirmation())
								               		return false;

								               	var _house_owner_name_ = $('#house_owner_name_input').val();
								               	if(_house_owner_name_==='')
								               	{
								               			new PNotify({
								                                  title: 'No Owner Name Specified !',
								                                  text: 'The Owner Name is necessary for being verified by the Administrator !',
								                                  type: 'error',
								                                  styling: 'bootstrap3'
									                              });
										               		return false;
								               	}

								               	var _handovr_date_ = $('#single_cal1').val();
								               	var _occupncy_date_ = $('#single_cal2').val();

								               	//window.alert(_handovr_date_);

								               	var json_data_map =  // to submit this while posting the form
								               	{action:'store_registratin_data', usr_login_id : _auto_created_login_id_, usr_email : _email_, usr_mobile : _mobile_no_, usr_pwd : _password_, usr_house_owner_name : _house_owner_name_, usr_hndovr_date : _handovr_date_, usr_occpnc_date : _occupncy_date_ };


								               	//window.alert('OK ! submitting json request : ' + JSON.stringify(json_data_map));
								               	
								               	 call_Ajax_FormSubmitter(json_data_map);
								               }


							                  	function call_Ajax_FormSubmitter(json_data_ball) {


												      $.ajax({
												           type: "POST",
												           url: 'VR_scripts/helper_modules.php',
												           data:json_data_ball,
												           success:function(html) {
												             new PNotify({
							                                  title: 'Thank you for your Request !',
							                                  text: 'Your Request has been succesfully sent to the Administrator. Within 2-3 business days, you\'ll be receiving a confirmation message about the activation of your account on your Email Inbox & Mobile Number',
							                                  type: 'success',
							                                  styling: 'bootstrap3'
								                              });
												           }

												      });


												      waitingDialog.show('Sending Registration request ... ');
												      setTimeout(function () {
															  waitingDialog.hide();
															}, 3000);

												 }

							                  </script>


                      


                      </div>
                      
                    </div>
                    <!-- End SmartWizard Content -->




								
							</section>

							<div class="separator">
										<p class="change_link">Already a member ?
											<a href="#signin" class="to_register"> Log in </a>
										</p>

										<div class="clearfix"></div>
										<br/>

										<div>
											<h3><i class="fa fa-home"></i> Talpuri International Colony RWA</h3>
											<p> Gmail Address : talpuri.international.colony@gmail.com </p>
											<p>©2017 All Rights Reserved. Talpuri Society Association, Website Developer - Varun Rawal</p>
										</div>
									</div>


						</div>


					</div>


				</div>






				 <!-- jQuery -->
    <script src="../vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="../vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="../vendors/fastclick/lib/fastclick.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="../build/js/custom.min.js"></script>


    <!-- Loading Blocking  -->
    <script src="../build/js/bootstrap-waitingfor.js"></script>
    <script src="../build/js/bootstrap-waitingfor.min.js"></script>


      <!-- PNotify -->
    <script src="../vendors/pnotify/dist/pnotify.js"></script>
    <script src="../vendors/pnotify/dist/pnotify.buttons.js"></script>
    <script src="../vendors/pnotify/dist/pnotify.nonblock.js"></script>



        <!-- bootstrap-daterangepicker -->
    <script src="../vendors/moment/min/moment.min.js"></script>
    <script src="../vendors/bootstrap-daterangepicker/daterangepicker.js"></script>


    <!-- NProgress -->
    <script src="../vendors/nprogress/nprogress.js"></script>
    <!-- jQuery Smart Wizard -->
    <script src="../vendors/jQuery-Smart-Wizard/js/jquery.smartWizard.js"></script>



	</body>
</html>

<!-- 
	on submit request :

	check for these :

	auto_created_login_id : not null && valid (acc. to real-life constraints)
	email_input
	phone_input
	email_verif_text -> disabled ?
	phone_verif_text -> disabled ?
 	
 	password && confirm_password :
 		password_input == password_input_2 != null
		house_owner_name_input
		handovr_date_input (id -> single_cal1l)
		occupancy_date_input (id -> single_cal2)
 -->

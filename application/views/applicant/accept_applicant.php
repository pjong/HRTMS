<?php if($this->session->userdata('permission') != 'Administrator' && $this->session->userdata('permission') != 'HR') { redirect(base_url() . '404');} ?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<title>AMI - Registration</title>

		<meta name="description" content="overview &amp; stats" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />

		<!--basic styles-->

		<link href="<?php echo base_url();?>assets/css/bootstrap.min.css" rel="stylesheet" />
		<link href="<?php echo base_url();?>assets/css/bootstrap-responsive.min.css" rel="stylesheet" />
		<link rel="stylesheet" href="<?php echo base_url();?>assets/css/font-awesome.min.css" />

		<!--[if IE 7]>
		  <link rel="stylesheet" href="<?php echo base_url();?>assets/css/font-awesome-ie7.min.css" />
		<![endif]-->

		<!--page specific plugin styles-->

		<!--fonts-->

		<!--<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400,300" />-->

		<!--ace styles-->
		<link rel="stylesheet" href="<?php echo base_url();?>assets/css/font.css" />

		<link rel="stylesheet" href="<?php echo base_url();?>assets/css/style.min.css" />
		<link rel="stylesheet" href="<?php echo base_url();?>assets/css/jquery.gritter.css">
		<link rel="stylesheet" href="<?php echo base_url();?>assets/css/training/ace.min.css" />	
		<link rel="stylesheet" href="<?php echo base_url();?>assets/css/admin/custom.css" />
		
		<link rel="stylesheet" href="<?php echo base_url();?>assets/css/style-responsive.min.css" />
		<link rel="stylesheet" href="<?php echo base_url();?>assets/css/style-skins.min.css" />
		

		<!--[if lte IE 8]>
		  <link rel="stylesheet" href="<?php echo base_url();?>assets/css/ace-ie.min.css" />
		<![endif]-->

		<!--inline styles if any-->
		<style type="text/css">
				#mydiv {
		    height: 400px;
		    position: relative;
		    background-color: gray; /* for demonstration */
		}
		.ajax-loader {
		    position: absolute;
		    left: 50%;
		    top: 50%;
		    margin-left: -32px; /* -1 * image width / 2 */
		    margin-top: -32px;  /* -1 * image height / 2 */
		    display: block;     
		}</style>
	</head>

	<body>
		<div class="navbar navbar-inverse">
			<div class="navbar-inner">
				<div class="container-fluid">
					<a href="#" class="brand">
						<small>
							<i class="icon-group"></i>
							AMI - HRTMS Administration
						</small>
					</a><!--/.brand-->

					<ul class="nav ace-nav pull-right">
					<!--	
						<li class="grey">
							<a data-toggle="dropdown" class="dropdown-toggle" href="#">
								<i class="icon-tasks"></i>
								<span class="badge badge-grey">4</span>
							</a>

							<ul class="pull-right dropdown-navbar dropdown-menu dropdown-caret dropdown-closer">
								<li class="nav-header">
									<i class="icon-ok"></i>
									4 Tasks to complete
								</li>

								<li>
									<a href="#">
										<div class="clearfix">
											<span class="pull-left">Task 1</span>
											<span class="pull-right">65%</span>
										</div>

										<div class="progress progress-mini ">
											<div style="width:65%" class="bar"></div>
										</div>
									</a>
								</li>

								<li>
									<a href="#">
										<div class="clearfix">
											<span class="pull-left">Task 2</span>
											<span class="pull-right">35%</span>
										</div>

										<div class="progress progress-mini progress-danger">
											<div style="width:35%" class="bar"></div>
										</div>
									</a>
								</li>

								<li>
									<a href="#">
										<div class="clearfix">
											<span class="pull-left">Task 3</span>
											<span class="pull-right">15%</span>
										</div>

										<div class="progress progress-mini progress-warning">
											<div style="width:15%" class="bar"></div>
										</div>
									</a>
								</li>

								<li>
									<a href="#">
										<div class="clearfix">
											<span class="pull-left">Task 4</span>
											<span class="pull-right">90%</span>
										</div>

										<div class="progress progress-mini progress-success progress-striped active">
											<div style="width:90%" class="bar"></div>
										</div>
									</a>
								</li>

								<li>
									<a href="#">
										See tasks with details
										<i class="icon-arrow-right"></i>
									</a>
								</li>
							</ul>
						</li>

						<li class="purple">
							<a data-toggle="dropdown" class="dropdown-toggle" href="#">
								<i class="icon-bell-alt icon-only icon-animated-bell"></i>
								<span class="badge badge-important">8</span>
							</a>

							<ul class="pull-right dropdown-navbar navbar-pink dropdown-menu dropdown-caret dropdown-closer">
								<li class="nav-header">
									<i class="icon-warning-sign"></i>
									8 Notifications
								</li>

								<li>
									<a href="#">
										<div class="clearfix">
											<span class="pull-left">
												<i class="btn btn-mini no-hover btn-pink icon-comment"></i>
												New Comments
											</span>
											<span class="pull-right badge badge-info">+12</span>
										</div>
									</a>
								</li>

								<li>
									<a href="#">
										<i class="btn btn-mini btn-primary icon-user"></i>
										Bob just signed up as an editor ...
									</a>
								</li>

								<li>
									<a href="#">
										<div class="clearfix">
											<span class="pull-left">
												<i class="btn btn-mini no-hover btn-success icon-shopping-cart"></i>
												New Members
											</span>
											<span class="pull-right badge badge-success">+8</span>
										</div>
									</a>
								</li>

								<li>
									<a href="#">
										<div class="clearfix">
											<span class="pull-left">
												<i class="btn btn-mini no-hover btn-info icon-twitter"></i>
												Followers
											</span>
											<span class="pull-right badge badge-info">+11</span>
										</div>
									</a>
								</li>

								<li>
									<a href="#">
										See all notifications
										<i class="icon-arrow-right"></i>
									</a>
								</li>
							</ul>
						</li>
					-->
						<li class="green">
							<a data-toggle="dropdown" class="dropdown-toggle" href="#">
								<i class="icon-envelope-alt icon-only icon-animated-vertical"></i>
								<span class="badge badge-success">5</span>
							</a>

							<ul class="pull-right dropdown-navbar dropdown-menu dropdown-caret dropdown-closer">
								<li class="nav-header">
									<i class="icon-envelope"></i>
									5 Messages
								</li>

								<li>
									<a href="#">
										<img src="<?php echo base_url();?>assets/avatars/avatar.png" class="msg-photo" alt="Alex's Avatar" />
										<span class="msg-body">
											<span class="msg-title">
												<span class="blue">Alex:</span>
												Ciao sociis natoque penatibus et auctor ...
											</span>

											<span class="msg-time">
												<i class="icon-time"></i>
												<span>a moment ago</span>
											</span>
										</span>
									</a>
								</li>

								<li>
									<a href="#">
										<img src="<?php echo base_url();?>assets/avatars/avatar3.png" class="msg-photo" alt="Susan's Avatar" />
										<span class="msg-body">
											<span class="msg-title">
												<span class="blue">Susan:</span>
												Vestibulum id ligula porta felis euismod ...
											</span>

											<span class="msg-time">
												<i class="icon-time"></i>
												<span>20 minutes ago</span>
											</span>
										</span>
									</a>
								</li>

								<li>
									<a href="#">
										<img src="<?php echo base_url();?>assets/avatars/avatar4.png" class="msg-photo" alt="Bob's Avatar" />
										<span class="msg-body">
											<span class="msg-title">
												<span class="blue">Bob:</span>
												Nullam quis risus eget urna mollis ornare ...
											</span>

											<span class="msg-time">
												<i class="icon-time"></i>
												<span>3:15 pm</span>
											</span>
										</span>
									</a>
								</li>

								<li>
									<a href="messenger">
										See all messages
										<i class="icon-arrow-right"></i>
									</a>
								</li>
							</ul>
						</li>

						<li class="light-blue user-profile">
							<a data-toggle="dropdown" href="#" class="user-menu dropdown-toggle">
								<img class="nav-user-photo" src="<?php echo base_url();?>assets/avatars/user.jpg" alt="User's Photo" />
								<span id="user_info">
									<small>Welcome,</small>
									<?php echo $this->session->userdata('username');?>
								</span>

								<i class="icon-caret-down"></i>
							</a>

							<ul class="pull-right dropdown-menu dropdown-yellow dropdown-caret dropdown-closer" id="user_menu">

								<li>
									<a href="#">
										<i class="icon-user"></i>
										Profile
									</a>
								</li>

								<li class="divider"></li>

								<li>
									<a href="<?php echo base_url();?>index.php/logout">
										<i class="icon-off"></i>
										Logout
									</a>
								</li>
							</ul>
						</li>
					</ul><!--/.ace-nav-->
				</div><!--/.container-fluid-->
			</div><!--/.navbar-inner-->
		</div>

		<div class="container-fluid" id="main-container">
			<a id="menu-toggler" href="#">
				<span></span>
			</a>

			<div id="sidebar">
				<div id="sidebar-shortcuts">
					<div id="sidebar-shortcuts-large">
						<button class="btn btn-small btn-success">
							<i class="icon-signal"></i>
						</button>

						<button class="btn btn-small btn-info">
							<i class="icon-pencil"></i>
						</button>

						<button class="btn btn-small btn-warning">
							<i class="icon-group"></i>
						</button>

						<button class="btn btn-small btn-danger">
							<i class="icon-cogs"></i>
						</button>
					</div>

					<div id="sidebar-shortcuts-mini">
						<span class="btn btn-success"></span>

						<span class="btn btn-info"></span>

						<span class="btn btn-warning"></span>

						<span class="btn btn-danger"></span>
					</div>
				</div><!--#sidebar-shortcuts-->

				<ul class="nav nav-list">
					
					<li>
						<a href="<?php echo base_url();?>dashboard">
							<i class="icon-bar-chart"></i>
							<span>Control Panel</span>
						</a>
					</li>

					

					<li class="active open">
						<a href="#" class="dropdown-toggle">
							<i class="icon-shield"></i>
							<span>Registration</span>

							<b class="arrow icon-angle-down"></b>
						</a>

						<ul class="submenu">
							<li  class="">
								<a href="<?php echo base_url();?>applicant">
									<i class="icon-archive"></i>
									<span>Applicants</span>
								</a>
							</li>

							<li class="active">
								<a href="<?php echo base_url();?>applicant/accept">
									<i class="icon-user"></i>
								   	<span>Accept</span>
								</a>
							</li>
						</ul>
					</li>



					<li>
						<a href="<?php echo base_url();?>training">
							<i class="icon-book"></i>
							<span>Training</span>
						</a>
					</li>

					<li>
						<a href="<?php echo base_url();?>client">
							<i class="icon-building"></i>
							<span>Client Companies</span>
						</a>
					</li>

					<li>
						<a href="<?php echo base_url();?>deployment">
							<i class="icon-tag"></i>
							<span>Deployment Tagging</span>
						</a>
					</li>
					<?php if($this->session->userdata("permission") == "Administrator") {?>

					<li>
						<a href="#" class="dropdown-toggle">
							<i class="icon-shield"></i>
							<span>Manage Accounts</span>

							<b class="arrow icon-angle-down"></b>
						</a>

						<ul class="submenu">
							<li>
								<a href="<?php echo base_url();?>manage/hr">
									<i class="icon-user"></i>
									HR Department
								</a>
							</li>

							<li>
								<a href="<?php echo base_url();?>manage/training">
									<i class="icon-user"></i>
									Training Department
								</a>
							</li>
						</ul>
					</li>

					<li>
						<a href="#" class="dropdown-toggle">
							<i class="icon-cog"></i>
							<span>Administrative Tools</span>

							<b class="arrow icon-angle-down"></b>
						</a>

						<ul class="submenu">

							<li>
								<a href="<?php echo base_url();?>administrative/audit">
									<i class="icon-list"></i>
									Audit Logs
								</a>
							</li>

							<li>
								<a href="<?php echo base_url();?>administrative/backup">
									<i class="icon-download-alt"></i>
									Backup &amp; Maintenance
								</a>
							</li>

							
						</ul>
					</li>
					<?php }?>
					<!--<li>
						
						<a href="help">
							<i class="icon-question-sign"></i>
							<span>Help</span>
						</a>
					</li>-->

					<li>
						<a href="about">
							<i class="icon-info"></i>
							<span>About the Developers</span>
						</a>
					</li>
			
				</ul><!--/.nav-list-->

				<div id="sidebar-collapse">
					<i class="icon-double-angle-left"></i>
				</div>
			</div>

			<div id="main-content" class="clearfix">
				<div id="breadcrumbs">
					<ul class="breadcrumb">
						<li>
							<i class="icon-home"></i>
							<a href="dashboard">Home</a>

							<span class="divider">
								<i class="icon-angle-right"></i>
							</span>
						</li>
						<li class="active">About the Developers</li>
					</ul><!--.breadcrumb-->

					<div id="nav-search">
						<form class="form-search">
							<span class="input-icon">
								<input type="text" placeholder="Search ..." class="input-small search-query" id="nav-search-input" autocomplete="off" />
								<i class="icon-search" id="nav-search-icon"></i>
							</span>
						</form>
					</div><!--#nav-search-->
				</div>

				<div id="page-content" class="clearfix">
					<div class="page-header position-relative">
						<h1>
							Registration
							<small>
								<i class="icon-double-angle-right"></i>
								Accepting Applicant
							</small>
						</h1> 
					</div><!--/.page-header-->

					<div class="row-fluid">
						<!--PAGE CONTENT STARTS HERE-->

						<div class="span12">
							<div class="widget-box">
								<div class="widget-header">
									<h4 class="smaller">
										Applicant
										<small>accept Applicant with complete documents</small>
									</h4>
								</div>

								<div class="widget-body">
								<div class="widget-main">
					
									<form class="form-inline" id="applicant">
										<input autofocus type="text" class="span11" name="id" id="id" />
										<button id="getinfo" class="btn btn-purple btn-small">
											Get Data
										</button>												
									</form>
									<div id='result_table'></div>
									<br>
									<br>
									<div id="success" class=""></div>
									
									<div class="center" id="first_load" style="display:none">
									<br>
									<br><div id="load"><i class="icon-spinner icon-spin blue icon-3x"></i></div><br>
									<br>
									<br>
									<br>
									<br>
									<br>
									<br>
									</div>
									

								</div>
							</div>
						</div>
						
						<!--PAGE CONTENT ENDS HERE-->
					</div><!--/row-->
				</div><!--/#page-content-->

			</div><!--/#main-content-->
		</div><!--/.fluid-container#main-container-->

		<a href="#" id="btn-scroll-up" class="btn btn-small btn-inverse">
			<i class="icon-double-angle-up icon-only bigger-110"></i>
		</a>
	

		<!--basic scripts-->

		<!-- <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script> -->
		<script src="<?php echo base_url();?>assets/js/jquery.min.js"></script>

		<script type="text/javascript">
			//window.jQuery || document.write("<script src='<?php echo base_url();?>assets/js/jquery-1.9.1.min.js'>"+"<"+"/script>");
			window.jQuery || document.write("<script src='<?php echo base_url();?>assets/js/jquery.js'>"+"<"+"/script>");
		</script>
		<script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>

		<!--page specific plugin scripts-->

		<!--[if lte IE 8]>
		  <script src="<?php echo base_url();?>assets/js/excanvas.min.js"></script>
		<![endif]-->

		<script src="<?php echo base_url();?>assets/js/jquery-ui-1.10.3.custom.min.js"></script>
		<script src="<?php echo base_url();?>assets/js/jquery.ui.touch-punch.min.js"></script>
		<script src="<?php echo base_url();?>assets/js/jquery.slimscroll.min.js"></script>
		<script src="<?php echo base_url();?>assets/js/jquery.easy-pie-chart.min.js"></script>
		<script src="<?php echo base_url();?>assets/js/jquery.sparkline.min.js"></script>
		<script src="<?php echo base_url();?>assets/js/flot/jquery.flot.min.js"></script>
		<script src="<?php echo base_url();?>assets/js/flot/jquery.flot.pie.min.js"></script>
		<script src="<?php echo base_url();?>assets/js/flot/jquery.flot.resize.min.js"></script>
		<script src="<?php echo base_url();?>assets/js/jquery.gritter.min.js"></script>
		<script src="<?php echo base_url();?>assets/js/bootbox.min.js"></script>


		<!--ace scripts-->

		<script src="<?php echo base_url();?>assets/js/style-elements.min.js"></script>
		<script src="<?php echo base_url();?>assets/js/style.min.js"></script>

		<script src="<?php echo base_url();?>assets/js/jquery-templ.js" type="text/javascript"></script>
		<!--inline scripts related to this page-->
		

	
		<script type="text/javascript">	
		$(function() {
		   //set the css3 blur to an element
        	function blurElement(element, size){
	            var filterVal = 'blur('+size+'px)';
	            $(element)
	              .css('filter',filterVal)
	              .css('webkitFilter',filterVal)
	              .css('mozFilter',filterVal)
	              .css('oFilter',filterVal)
	              .css('msFilter',filterVal);
       		 }
       		$.extend($.gritter.options, { 
		        position: 'bottom-left', // defaults to 'top-right' but can be 'bottom-left', 'bottom-right', 'top-left', 'top-right' (added in 1.7.1)
				fade_in_speed: 'medium', // how fast notifications fade in (string or int)
				fade_out_speed: 2000, // how fast the notices fade out
				time: 3000 // hang on the screen for...
			});

			$("#getinfo").click(function(){
					$('#first_load').show();
					blurElement("#first_load", 2);
					blurElement("#result_table", 0);
					$('#result_table').hide();
			        setTimeout(submitFormAjax, 200);
			   		return false;
			});

			function submitFormAjax() {
				var dataString = $("#id").val();
				 $.ajax({ 
				           url: "<?php echo base_url();?>applicant/searchApplicant",
				     	   async: false,
				           type: "POST",			          
				           data: "id="+dataString, 
				           dataType: 'json',

				           success: function(response){
				               //alert(dataString); 
				                //$('#result_table').html(output_string);
				               
				              if ( response.length == 0 ) {
				              	$('#first_load').hide();
				              	$('#scnd_load').hide();
				              	$('#success').hide();
				              	$('#result_table').show();
				              	output_string = '"There is no applicant or the applicant has been accepted."';
				              	$('#result_table').html('<br><br><br><br><div class="center"><b>'+output_string +'</b></div><br><br><br><br><br><br>');
				              }
				              else{	
			              			$('#first_load').hide();
			              			$('#scnd_load').hide();
				                	output_string = $('#user').render(response);
				                	$('#success').hide();
				                	$('#result_table').show();
				              		$('#result_table').html(output_string);
				              		$('#checkall').on('click', function () {
								        $(this).closest('fieldset').find(':checkbox').prop('checked', this.checked);
								    });
							    
							    	 $('#form_accept').submit(function() {
									        if ($('input:checkbox', this).length == $('input:checked', this).length ) {
									            bootbox.confirm("Accept this Trainee?", function(result) {
													if(result) {
														$('#scnd_load').show();
				 										blurElement("#result_table", 2);
				 										//e.preventDefault();
												        setTimeout(accept, 200);
												   		//return false;  
													}
												});
												return false;
									        } else {
									            bootbox.alert('Accept applicant with complete requirements.');
									            return false;
									        }
									    });
								    
							    	function accept(){
							    			 
							            first_name = $("#first_name").val();
							            middle_name = $("#middle_name").val();
							            last_name = $("#last_name").val();
							            address = $("#address").val();
							            birth_date = $("#birth_date").val();
							            city = $("#city").val();
							            province = $("#province").val();
							            gender = $("#gender").val();
							            phone = $("#phone").val();
							            username = $("#username").val();
						              	password = $("#password").val();
						                email = $("#email").val();
						                register_id = $("#register_id").val();
						                height = $("#height").val();
						                civil_status = $("#civil_status").val();
							          
							            var datastr = 'first_name='+first_name + '&middle_name='+middle_name + '&last_name='+last_name + '&address='+address + '&birth_date='+birth_date + '&city='+city + '&province='+province + '&gender='+gender + '&phone='+phone + '&username='+username + '&password='+password + '&email='+email + '&register_id='+register_id + '&height='+height+ '&civil_status='+civil_status;    
							           	//alert(province+phone+email);
							            $.ajax({
							                url:"<?php echo base_url();?>applicant/acceptApp",
							                type:'POST',
							                data:datastr,
							                dataType:"json",
							                success:function(result){
							                $("#success").show();
							                //$("#success").attr('class', 'alert alert-success');
							                var output_string = "<div class=\"alert alert-block alert-success\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\"><i class=\"icon-remove\"></i></button><p><strong><i class=\"icon-ok\"></i>Well done!</strong> You successfully added an applicant.</p><p><a class=\"btn btn-small btn-success\" href=\"<?php echo base_url();?>training\">Trainee List</a><button class=\"btn btn-small\">Or This One</button></p></div>";
							                $("#success").html(output_string);
							                $("#result_table").hide();
							                $.gritter.add({
												title: 'Applicant Accepted!',
												text: result + ' has been added in AMI trainee.',
												class_name: 'gritter-info gritter-center'
											});
												

							                }

							            });

							    		}
								}//end else
				            	
				           }//end success
				  
				         });//end ajax
				  
				         return false;  //stop the actual form post !important!
			}
		});	

		</script>
 
		<script type="text/template" id="user">
		<div class="row-fluid">
		<div class="span6">
		
	    <table>
                <tr> 
                    <td><h3>Personal Details</h3></td>

                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td>Registration ID :</td>
                    <td>${register_id}</td>
                </tr>
             	<tr>
                    <td>Name: </td>
                    <td>${last_name}, ${first_name} ${middle_name}</td>
                </tr>
                <tr>

                    <td>Birthday: </td>
                    <td>${birth_date}</td>
                </tr>

                <tr>

                    <td>Address: </td>
                    <td>${address}</td>
                </tr>
                <tr>
                    <td>City: </td>
                    <td>${city}</td>
                </tr>  
                <tr>
                    <td>Province: </td> 
                    <td>${province}</td>
                </tr>
                <tr>
                    <td>Country: </td>
                    <td>${country}</td>
                </tr>                              
                <tr>
                    <td>Phone: </td>
                    <td>${phone}</td>
                </tr>
                <tr> 
                <td><h3>Account Details</h3></td>
                <td>&nbsp;</td>
                </tr>
                <td>Username: </td>
                    <td>${username}</td>
                </tr>
                <tr>
                    <td>Email Address: </td>
                    <td>${email}</td>
                </tr>
                <tr>
                    <td></td>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                <td><div class="bcTarget"></div></td>
                <td>&nbsp;</td>

            </tr>
        </table>

        </div>
        <div class="span6">
        	<h3 class="header smaller lighter blue">
				Documents
				<small>Check the documents before accepting.</small>
			</h3>
	    
			<form id="form_accept">
			<fieldset>
				<div class="control-group">
					<label class="control-label"></label>
 
					<div class="controls">
						<label>
							<input name="" type="checkbox" class="ace ace-switch" id="checkall" />
							<span class="lbl">&nbsp;Check all</span>
						</label>
						<label>
							<input name="documents" type="checkbox" class="ace" />
							<span class="lbl"> Registraton slip</span>
						</label>

						<label>
							<input name="documents" type="checkbox" class="ace" />
							<span class="lbl"> Resume</span>
						</label>

						<label>
							<input name="documents" class="ace" type="checkbox" />
							<span class="lbl"> Diploma</span>
						</label>
							<label>
							<input name="documents" class="ace" type="checkbox" />
							<span class="lbl"> Medical Result</span>
						</label>

						<label>
							<input name="documents" class="ace" type="checkbox" />
							<span class="lbl"> Form - 137 for Undergrad / Transcript of Record for Graduate</span>
						</label>
						
					</div>
				</div>
			</fieldset>
				<button class="btn btn-success btn-block" type="" id="bootbox-confirm">Accept Applicant</button>
			</form>
			<div class="center" id="scnd_load" style="display:none">
				<div id="load"><i class="icon-spinner icon-spin blue icon-3x"></i></div><br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
			</div>
        </div>
        <form>
       		<input type="hidden" name="register_id" id="register_id" value="${register_id}">
			<input type="hidden" name="first_name" id="first_name" value="${first_name}">
			<input type="hidden" name="last_name" id="last_name" value="${last_name}"> 	
			<input type="hidden" name="middle_name" id="middle_name"  value="${middle_name}">
			<input type="hidden" name="birth_date" id="birth_date" value="${birth_date}"> 	
			<input type="hidden" name="address" id="address" value="${address}"> 	
			<input type="hidden" name="city" id="city"  value="${city}"> 	
			<input type="hidden" name="province" id="province" value="${province}"> 	
			<input type="hidden" name="gender" id="gender" value="${gender}"> 	
			<input type="hidden" name="phone" id="phone" value="${phone}"> 	
			<input type="hidden" name="username" id="username" value="${username}">
			<input type="hidden" name="password" id="password" value="${password}">
			<input type="hidden" name="email" id="email" value="${email}">
			<input type="hidden" name="height" id="height" value="${height}">
			<input type="hidden" name="civil_status" id="civil_status" value="${civil_status}">
		</form>
        </div>
		
		</script>

		
		

	</body>
</html>

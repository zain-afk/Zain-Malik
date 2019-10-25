  <?php  
include'config.php';
   ?>

<?php
 session_start();

 if(isset($_SESSION["u_nam"]))
 $u_nam=$_SESSION["u_nam"];
 error_reporting(0);

 ?>
					<?php
 
          $query="SELECT * FROM singup WHERE u_nam='$u_nam' ";
		$res=mysqli_query($con,$query);
		while ($data=mysqli_fetch_array($res))

		 {
 	
	 	$my_d_pic=$data["d_pic"];
	 	$ful_nam=$data["nam"];
	 	
	 	}

 		?>



	
<!-- Mirrored from grayshift.io/themes/swipe/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 26 Jul 2019 14:02:54 GMT -->

<head>
		<meta charset="utf-8">
 		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="description" content="#">
		<!-- Bootstrap core CSS -->
		<link href="dist/css/lib/bootstrap.min.css" type="text/css" rel="stylesheet">
		<!-- Swipe core CSS -->
		<link href="dist/css/swipe.min.css" type="text/css" rel="stylesheet">
		<!-- Favicon -->
		<link href="dist/img/favicon.png" type="image/png" rel="icon">
	</head>
	<body>
		<!-- Layout -->
		<div class="layout">
			<!-- Start of Navigation -->
			<nav class="navigation">
				<div class="container">
				 
					<ul class="nav" role="tablist">
						<li><a href="#conversations" class="active" data-toggle="tab" role="tab" aria-controls="conversations" aria-selected="true"><i data-eva="message-square" data-eva-animation="pulse"></i></a></li>
						<li><a href="#friends" data-toggle="tab" role="tab" aria-controls="friends" aria-selected="false"><i data-eva="people" data-eva-animation="pulse"></i></a></li>
						<li><a href="#notifications" data-toggle="tab" role="tab" aria-controls="notifications" aria-selected="false"><i data-eva="bell" data-eva-animation="pulse"></i></a></li>
						<li><a href="#settings" data-toggle="tab" role="tab" aria-controls="settings" aria-selected="false"><i data-eva="settings" data-eva-animation="pulse"></i></a></li>
						<li><button type="button" class="btn mode"><i data-eva="bulb" data-eva-animation="pulse"></i></button></li>
						<li><button type="button" class="btn">
							<img class="img-profile rounded-circle" style=" background-size: cover; background-image: url(IMAGES/<?php echo $d_pic; ?>); height: 50px;width: 50px;"><i data-eva="radio-button-on"></i></button></li>
					</ul>
				</div>
			</nav>
			<!-- End of Navigation -->
			<!-- Start of Sidebar -->
			<div class="sidebar">
				<div class="container">
					<div class="tab-content">
						<!-- Start of Discussions -->
						<div class="tab-pane fade show active" id="conversations" role="tabpanel">
							<div class="top">
								<form>
									<input type="search" class="form-control" placeholder="Search">
									<button type="submit" class="btn prepend"><i data-eva="search"></i></button>
								</form>
								<ul class="nav" role="tablist">
									<li><a href="#direct" class="filter-btn active" data-toggle="tab" data-filter="direct">Direct</a></li>
									<li><a href="#groups" class="filter-btn" data-toggle="tab" data-filter="groups">Groups</a></li>
								</ul>
							</div>
							<div class="middle">
								<h4>Discussions</h4>
								<button type="button" class="btn round" data-toggle="modal" data-target="#compose"><i data-eva="edit-2"></i></button>
								<hr>
								<ul class="nav discussions" role="tablist">

	 

									  	<?php
       $query="SELECT * FROM users_fan WHERE fan_to='$u_nam' ";
	$res=mysqli_query($con,$query);
	while ($data=mysqli_fetch_array($res))

	 {

	    $d_pic=$data["d_pic"];
 	    $fan_to=$data["fan_from"];
	 	$nam=$data["nam"];

  ?>
									 

									<li>
 <a href="?msg_from=<?php echo $u_nam; ?>&&msg_to=<?php echo $fan_to; ?>" class="filter direct"  >
 <div class="status offline">
 	<img class="img-profile rounded-circle" style=" background-size: cover; background-image: url(IMAGES/<?php echo $d_pic; ?>); height: 50px;width: 50px;"><i data-eva="radio-button-on"></i></div>
											<div class="content">
												<div class="headline">
													<h5><?php echo $nam; ?></h5>
													<span>Today</span>
												</div>
												<p>Additional information about the previous clients.</p>
											</div>
										</a>
									</li>
								
								<?php } ?>

									 </ul>
							</div>
						</div>
						<!-- End of Discussions -->
						<!-- Start of Friends -->
						<div class="tab-pane fade" id="friends" role="tabpanel">
							<div class="top">
								<form>
									<input type="search" class="form-control" placeholder="Search">
									<button type="submit" class="btn prepend"><i data-eva="search"></i></button>
								</form>
							</div>
							<div class="middle">
								<h4>Friends</h4>
								<hr>
								<ul class="users">
									<li>
										<a href="#">
											<div class="status online"><img src="dist/img/avatars/avatar-male-1.jpg" alt="avatar"><i data-eva="radio-button-on"></i></div>
											<div class="content">
												<h5>Ham Chuwon</h5>
												<span>Florida, US</span>
											</div>
											<div class="icon"><i data-eva="person"></i></div>
										</a>
									</li>
									<li>
										<a href="#">
											<div class="status offline"><img src="dist/img/avatars/avatar-male-2.jpg" alt="avatar"><i data-eva="radio-button-on"></i></div>
											<div class="content">
												<h5>Quincy Hensen</h5>
												<span>Shanghai, China</span>
											</div>
											<div class="icon"><i data-eva="person"></i></div>
										</a>
									</li>
									<li>
										<a href="#">
											<div class="status online"><img src="dist/img/avatars/avatar-male-3.jpg" alt="avatar"><i data-eva="radio-button-on"></i></div>
											<div class="content">
												<h5>Mark Hog</h5>
												<span>Olso, Norway</span>
											</div>
											<div class="icon"><i data-eva="person"></i></div>
										</a>
									</li>
									<li>
										<a href="#">
											<div class="status offline"><img src="dist/img/avatars/avatar-male-4.jpg" alt="avatar"><i data-eva="radio-button-on"></i></div>
											<div class="content">
												<h5>Sanne Viscaal</h5>
												<span>Helena, Montana</span>
											</div>
											<div class="icon"><i data-eva="person"></i></div>
										</a>
									</li>
									<li>
										<a href="#">
											<div class="status offline"><img src="dist/img/avatars/avatar-male-5.jpg" alt="avatar"><i data-eva="radio-button-on"></i></div>
											<div class="content">
												<h5>Alex Just</h5>
												<span>London, UK</span>
											</div>
											<div class="icon"><i data-eva="person"></i></div>
										</a>
									</li>
									<li>
										<a href="#">
											<div class="status online"><img src="dist/img/avatars/avatar-male-6.jpg" alt="avatar"><i data-eva="radio-button-on"></i></div>
											<div class="content">
												<h5>Arturo Thomas</h5>
												<span>Vienna, Austria</span>
											</div>
											<div class="icon"><i data-eva="person"></i></div>
										</a>
									</li>
									<li>
										<a href="#">
											<div class="status offline"><img src="dist/img/avatars/avatar-female-1.jpg" alt="avatar"><i data-eva="radio-button-on"></i></div>
											<div class="content">
												<h5>Victoria Garner</h5>
												<span>Chisinau, Moldova</span>
											</div>
											<div class="icon"><i data-eva="person"></i></div>
										</a>
									</li>
									<li>
										<a href="#">
											<div class="status offline"><img src="dist/img/avatars/avatar-female-2.jpg" alt="avatar"><i data-eva="radio-button-on"></i></div>
											<div class="content">
												<h5>Maria Baron</h5>
												<span>Indore, India</span>
											</div>
											<div class="icon"><i data-eva="person"></i></div>
										</a>
									</li>
									<li>
										<a href="#">
											<div class="status online"><img src="dist/img/avatars/avatar-female-3.jpg" alt="avatar"><i data-eva="radio-button-on"></i></div>
											<div class="content">
												<h5>Sara Koch</h5>
												<span>Sofia, BG</span>
											</div>
											<div class="icon"><i data-eva="person"></i></div>
										</a>
									</li>
								</ul>
							</div>
						</div>
						<!-- End of Friends -->
						<!-- Start of Notifications -->
						<div class="tab-pane fade" id="notifications" role="tabpanel">
							<div class="top">
								<form>
									<input type="search" class="form-control" placeholder="Search">
									<button type="submit" class="btn prepend"><i data-eva="search"></i></button>
								</form>
							</div>
							<div class="middle">
								<h4>Notifications</h4>
								<hr>
								<ul class="notifications">
									<li>
										<div class="round"><i data-eva="person-done"></i></div>
										<p>Quincy has joined to <strong>Squad Ghouls</strong> group.</p>
									</li>
									<li>
										<div class="round"><i data-eva="lock"></i></div>
										<p>You need change your password for security reasons.</p>
									</li>
									<li>
										<div class="round"><i data-eva="attach"></i></div>
										<p>Mark attached the file <strong>workbox.js</strong>.</p>
									</li>
									<li>
										<div class="icon round"><i data-eva="gift"></i></div>
										<p>Sara has a birthday today. Wish her all the best.</p>
									</li>
									<li>
										<div class="round"><i data-eva="person"></i></div>
										<p>Sanne has accepted your friend request.</p>
									</li>
								</ul>
							</div>
						</div>
						<?php
 
          $query="SELECT * FROM singup WHERE u_nam='$u_nam' ";
		$res=mysqli_query($con,$query);
		while ($data=mysqli_fetch_array($res))

		 {
 	
	 	$d_pic=$data["d_pic"];
	 	
	 	}

 		?>
						<!-- End of Notifications -->
						<!-- Start of Settings -->
						<div class="settings tab-pane fade" id="settings" role="tabpanel">
							<div class="user">
								<label>
									<input type="file">
<img class="img-profile rounded-circle" style=" background-size: cover; background-image: url(IMAGES/<?php echo $d_pic; ?>); height: 50px;width: 50px;">								</label>
								<div class="content">
									<h5><?php echo $ful_nam; ?></h5>
									<span>Florida, US</span>
								</div>
							</div>
							<h4>Settings</h4>
							<ul id="preferences">
								<!-- Start of Account -->
								<li>
									<a href="#" class="headline" data-toggle="collapse" aria-expanded="false" data-target="#account" aria-controls="account">
										<div class="title">
											<h5>Account</h5>
											<p>Update your profile details</p>
										</div>
										<i data-eva="arrow-ios-forward"></i>
										<i data-eva="arrow-ios-downward"></i>
									</a>
									<div class="content collapse" id="account" data-parent="#preferences">
										<div class="inside">
											<form class="account">
												<div class="form-row">
													<div class="col-sm-6">
														<div class="form-group">
															<label>First Name</label>
															<input type="text" class="form-control" placeholder="First name" value="Ham">
														</div>
													</div>
													<div class="col-sm-6">
														<div class="form-group">
															<label>Last Name</label>
															<input type="text" class="form-control" placeholder="Last name" value="Chuwon">
														</div>
													</div>
												</div>
												<div class="form-group">
													<label>Email Address</label>
													<input type="email" class="form-control" placeholder="Enter your email address" value="hamchuwon@gmail.com">
												</div>
												<div class="form-group">
													<label>Password</label>
													<input type="password" class="form-control" placeholder="Enter your password" value="123456">
												</div>
												<div class="form-group">
													<label>Biography</label>
													<textarea class="form-control" placeholder="Tell us a little about yourself"></textarea>
												</div>
												<button type="submit" class="btn primary">Save settings</button>
											</form>
										</div>
									</div>
								</li>
								<!-- End of Account -->
								<!-- Start of Privacy & Safety -->
								<li>
									<a href="#" class="headline" data-toggle="collapse" aria-expanded="false" data-target="#privacy" aria-controls="privacy">
										<div class="title">
											<h5>Privacy & Safety</h5>
											<p>Control your privacy settings</p>
										</div>
										<i data-eva="arrow-ios-forward"></i>
										<i data-eva="arrow-ios-downward"></i>
									</a>
									<div class="content collapse" id="privacy" data-parent="#preferences">
										<div class="inside">
											<ul class="options">
												<li>
													<div class="headline">
														<h5>Safe Mode</h5>
														<label class="switch">
															<input type="checkbox" checked>
															<span class="slider round"></span>
														</label>
													</div>
													<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
												</li>
												<li>
													<div class="headline">
														<h5>History</h5>
														<label class="switch">
															<input type="checkbox" checked>
															<span class="slider round"></span>
														</label>
													</div>
													<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
												</li>
												<li>
													<div class="headline">
														<h5>Camera</h5>
														<label class="switch">
															<input type="checkbox">
															<span class="slider round"></span>
														</label>
													</div>
													<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
												</li>
												<li>
													<div class="headline">
														<h5>Microphone</h5>
														<label class="switch">
															<input type="checkbox">
															<span class="slider round"></span>
														</label>
													</div>
													<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
												</li>
											</ul>
										</div>
									</div>
								</li>
								<!-- End of Privacy & Safety -->
								<!-- Start of Notifications -->
								<li>
									<a href="#" class="headline" data-toggle="collapse" aria-expanded="false" data-target="#alerts" aria-controls="alerts">
										<div class="title">
											<h5>Notifications</h5>
											<p>Turn notifications on or off</p>
										</div>
										<i data-eva="arrow-ios-forward"></i>
										<i data-eva="arrow-ios-downward"></i>
									</a>
									<div class="content collapse" id="alerts" data-parent="#preferences">
										<div class="inside">
											<ul class="options">
												<li>
													<div class="headline">
														<h5>Pop-up</h5>
														<label class="switch">
															<input type="checkbox" checked>
															<span class="slider round"></span>
														</label>
													</div>
													<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
												</li>
												<li>
													<div class="headline">
														<h5>Vibrate</h5>
														<label class="switch">
															<input type="checkbox">
															<span class="slider round"></span>
														</label>
													</div>
													<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
												</li>
												<li>
													<div class="headline">
														<h5>Sound</h5>
														<label class="switch">
															<input type="checkbox" checked>
															<span class="slider round"></span>
														</label>
													</div>
													<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
												</li>
												<li>
													<div class="headline">
														<h5>Lights</h5>
														<label class="switch">
															<input type="checkbox">
															<span class="slider round"></span>
														</label>
													</div>
													<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
												</li>
											</ul>
										</div>
									</div>
								</li>
								<!-- End of Notifications -->
								<!-- Start of Integrations -->
								<li>
									<a href="#" class="headline" data-toggle="collapse" aria-expanded="false" data-target="#integrations" aria-controls="integrations">
										<div class="title">
											<h5>Integrations</h5>
											<p>Sync your social accounts</p>
										</div>
										<i data-eva="arrow-ios-forward"></i>
										<i data-eva="arrow-ios-downward"></i>
									</a>
									<div class="content collapse" id="integrations" data-parent="#preferences">
										<div class="inside">
											<ul class="integrations">
												<li>
													<button class="btn round"><i data-eva="google"></i></button>
													<div class="content">
														<div class="headline">
															<h5>Google</h5>
															<label class="switch">
																<input type="checkbox" checked>
																<span class="slider round"></span>
															</label>
														</div>
														<span>Read, write, edit</span>
													</div>
												</li>
												<li>
													<button class="btn round"><i data-eva="facebook"></i></button>
													<div class="content">
														<div class="headline">
															<h5>Facebook</h5>
															<label class="switch">
																<input type="checkbox" checked>
																<span class="slider round"></span>
															</label>
														</div>
														<span>Read, write, edit</span>
													</div>
												</li>
												<li>
													<button class="btn round"><i data-eva="twitter"></i></button>
													<div class="content">
														<div class="headline">
															<h5>Twitter</h5>
															<label class="switch">
																<input type="checkbox">
																<span class="slider round"></span>
															</label>
														</div>
														<span>No permissions set</span>
													</div>
												</li>
												<li>
													<button class="btn round"><i data-eva="linkedin"></i></button>
													<div class="content">
														<div class="headline">
															<h5>LinkedIn</h5>
															<label class="switch">
																<input type="checkbox">
																<span class="slider round"></span>
															</label>
														</div>
														<span>No permissions set</span>
													</div>
												</li>
											</ul>
										</div>
									</div>
								</li>
								<!-- End of Integrations -->
								<!-- Start of Appearance -->
								<li>
									<a href="#" class="headline" data-toggle="collapse" aria-expanded="false" data-target="#appearance" aria-controls="appearance">
										<div class="title">
											<h5>Appearance</h5>
											<p>Customize the look of Swipe</p>
										</div>
										<i data-eva="arrow-ios-forward"></i>
										<i data-eva="arrow-ios-downward"></i>
									</a>
									<div class="content collapse" id="appearance" data-parent="#preferences">
										<div class="inside">
											<ul class="options">
												<li>
													<div class="headline">
														<h5>Lights</h5>
														<label class="switch">
															<input type="checkbox">
															<span class="slider round mode"></span>
														</label>
													</div>
													<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
												</li>
											</ul>
										</div>
									</div>
								</li>
								<!-- End of Appearance -->
							</ul>
						</div>
						<!-- End of Settings -->
					</div>
				</div>
			</div>
		
 		<?php
 		if(isset($_POST["send"]))
 		{

 			$u_nam=$GET["u_nam"];
 			$msg_from=$GET["msg_from"];
 			$mesg_box=$_POST["mesg_box"];
 			$query="INSERT INTO chating (msg_to,msg_from,mesg)
 			VALUES('$u_nam','$msg_from','$mesg_box')
 			";
 			$res=mysqli_query($con,$query);

 				 }

 		?>
 			<!-- End of Sidebar -->
			<!-- Start of Chat -->
			<div class="chat">
			<?php
         $query="SELECT * FROM users_fan WHERE fan_to='$u_nam' ";
		$res=mysqli_query($con,$query);
		while ($data=mysqli_fetch_array($res))

	 {
 			$d_pic=$data["d_pic"];
	 		$fan_to=$data["fan_from"];

  ?>
				<div class="tab-content">
					<!-- Start of Chat Room -->
					<div class="tab-pane fade show active" id="msg_to=<?php echo $fan_to; ?>" role="tabpanel">
						<div class="item">
							<div class="content">
								<div class="container">
									<div class="top">
										<div class="headline">
<img class="img-profile rounded-circle" style=" background-size: cover; background-image: url(IMAGES/<?php echo $d_pic; ?>); height: 50px;width: 50px;">											<div class="content">
												<h5><?php echo $fan_to; ?></h5>
												<span>Away</span>
											</div>
										</div>
										<ul>
											<li><button type="button" class="btn"><i data-eva="video" data-eva-animation="pulse"></i></button></li>
											<li><button type="button" class="btn"><i data-eva="phone" data-eva-animation="pulse"></i></button></li>
											<li><button type="button" class="btn" data-toggle="modal" data-target="#compose"><i data-eva="person-add" data-eva-animation="pulse"></i></button></li>
											<li><button type="button" class="btn" data-utility="open"><i data-eva="info" data-eva-animation="pulse"></i></button></li>
											<li><button type="button" class="btn round" data-chat="open"><i data-eva="arrow-ios-back"></i></button></li>
											<li><button type="button" class="btn" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i data-eva="more-vertical" data-eva-animation="pulse"></i></button>
												<div class="dropdown-menu">
													<button type="button" class="dropdown-item"><i data-eva="video"></i>Video call</button>
													<button type="button" class="dropdown-item"><i data-eva="phone"></i>Voice call</button>
													<button type="button" class="dropdown-item" data-toggle="modal" data-target="#compose"><i data-eva="person-add"></i>Add people</button>
													<button type="button" class="dropdown-item" data-utility="open"><i data-eva="info"></i>Information</button>
												</div>
											</li>
										</ul>
									</div>
								</div>
								<div class="middle" id="scroll">
									<div class="container">
									
										<ul>
			<?php

 		$msg_to=$_GET["msg_to"];
 		$msg_from=$_GET["msg_from"];
       $query="SELECT * FROM chating WHERE msg_from='$u_nam' and msg_to='$msg_to'";
	$res=mysqli_query($con,$query);
	while ($data=mysqli_fetch_array($res))

	 {
    $msg_to=$data["mesg"];

	 	$msg_from=$data["mesg"];

  ?>
  								<li>
   								 <img class="img-profile rounded-circle" style=" background-size: cover; background-image: url(IMAGES/<?php echo $d_pic; ?>);">
 												<div class="content">
													<div class="message">
														<div class="bubble">
															<p><?php echo $msg_from; ?></p>
														</div>
													</div>
													<span></span>
												</div>
											</li>
									 	<?php } ?>
 
									 <?php

									 		$msg_to=$_GET["msg_to"];
									 		$msg_from=$_GET["msg_from"];
									       $query="SELECT * FROM chating WHERE   ";
										$res=mysqli_query($con,$query);
										while ($data=mysqli_fetch_array($res))

										 {
									 
										 	$msg_to=$data["mesg"];
									?>
									 
  										 
									  
												<?php } ?>
										</ul>
									</div>
								</div>
							<div class="container">
									<div class="bottom">
										<form method="post">
 <textarea class="form-control" name="mesg_box" placeholder="Type message..." rows="1"></textarea>
 <input type="submit" name="send" class="btn prepend" value="Send Message"> 
										</form>
									</div>
								</div>
				<?php } ?>
							</div>
							<!-- Start of Utility -->
							<div class="utility">
								<div class="container">
									<button type="button" class="close" data-utility="open"><i data-eva="close"></i></button>
									<button type="button" class="btn primary" data-toggle="modal" data-target="#compose">Add people</button>
									<ul class="nav" role="tablist">
										<li><a href="#users" class="active" data-toggle="tab" role="tab" aria-controls="users" aria-selected="true">Users</a></li>
										<li><a href="#files" data-toggle="tab" role="tab" aria-controls="files" aria-selected="false">Files</a></li>
									</ul>
									<div class="tab-content">
										<!-- Start of Users -->
										<div class="tab-pane fade active show" id="users" role="tabpanel">
											<h4>Users</h4>
											<hr>
											<ul class="users">
												<li>
													<div class="status online"><img src="dist/img/avatars/avatar-male-1.jpg" alt="avatar"><i data-eva="radio-button-on"></i></div>
													<div class="content">
														<h5>Ham Chuwon</h5>
														<span>Florida, US</span>
													</div>
													<div class="dropdown">
														<button type="button" class="btn" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i data-eva="more-vertical"></i></button>
														<div class="dropdown-menu dropdown-menu-right">
															<button type="button" class="dropdown-item">Edit</button>
															<button type="button" class="dropdown-item">Share</button>
															<button type="button" class="dropdown-item">Delete</button>
														</div>
													</div>
												</li>
												<li>
													<div class="status offline"><img src="dist/img/avatars/avatar-male-2.jpg" alt="avatar"><i data-eva="radio-button-on"></i></div>
													<div class="content">
														<h5>Quincy Hensen</h5>
														<span>Shanghai, China</span>
													</div>
													<div class="dropdown">
														<button type="button" class="btn" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i data-eva="more-vertical"></i></button>
														<div class="dropdown-menu dropdown-menu-right">
															<button type="button" class="dropdown-item">Edit</button>
															<button type="button" class="dropdown-item">Share</button>
															<button type="button" class="dropdown-item">Delete</button>
														</div>
													</div>
												</li>
												<li>
													<div class="status online"><img src="dist/img/avatars/avatar-male-3.jpg" alt="avatar"><i data-eva="radio-button-on"></i></div>
													<div class="content">
														<h5>Mark Hog</h5>
														<span>Olso, Norway</span>
													</div>
													<div class="dropdown">
														<button type="button" class="btn" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i data-eva="more-vertical"></i></button>
														<div class="dropdown-menu dropdown-menu-right">
															<button type="button" class="dropdown-item">Edit</button>
															<button type="button" class="dropdown-item">Share</button>
															<button type="button" class="dropdown-item">Delete</button>
														</div>
													</div>
												</li>
												<li>
													<div class="status offline"><img src="dist/img/avatars/avatar-male-4.jpg" alt="avatar"><i data-eva="radio-button-on"></i></div>
													<div class="content">
														<h5>Sanne Viscaal</h5>
														<span>Helena, Montana</span>
													</div>
													<div class="dropdown">
														<button type="button" class="btn" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i data-eva="more-vertical"></i></button>
														<div class="dropdown-menu dropdown-menu-right">
															<button type="button" class="dropdown-item">Edit</button>
															<button type="button" class="dropdown-item">Share</button>
															<button type="button" class="dropdown-item">Delete</button>
														</div>
													</div>
												</li>
												<li>
													<div class="status offline"><img src="dist/img/avatars/avatar-male-5.jpg" alt="avatar"><i data-eva="radio-button-on"></i></div>
													<div class="content">
														<h5>Alex Just</h5>
														<span>London, UK</span>
													</div>
													<div class="dropdown">
														<button type="button" class="btn" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i data-eva="more-vertical"></i></button>
														<div class="dropdown-menu dropdown-menu-right">
															<button type="button" class="dropdown-item">Edit</button>
															<button type="button" class="dropdown-item">Share</button>
															<button type="button" class="dropdown-item">Delete</button>
														</div>
													</div>
												</li>
												<li>
													<div class="status online"><img src="dist/img/avatars/avatar-male-6.jpg" alt="avatar"><i data-eva="radio-button-on"></i></div>
													<div class="content">
														<h5>Arturo Thomas</h5>
														<span>Vienna, Austria</span>
													</div>
													<div class="dropdown">
														<button type="button" class="btn" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i data-eva="more-vertical"></i></button>
														<div class="dropdown-menu dropdown-menu-right">
															<button type="button" class="dropdown-item">Edit</button>
															<button type="button" class="dropdown-item">Share</button>
															<button type="button" class="dropdown-item">Delete</button>
														</div>
													</div>
												</li>
											</ul>
										</div>
										<!-- End of Users -->
										<!-- Start of Files -->
										<div class="tab-pane fade" id="files" role="tabpanel">
											<h4>Files</h4>
											<div class="upload">
												<label>
													<input type="file">
													<span>Drag & drop files here</span>
												</label>
											</div>
											<ul class="files">
												<li>
													<ul class="avatars">
														<li><button class="btn round"><i data-eva="file-text"></i></button></li>
														<li><a href="#"><img src="dist/img/avatars/avatar-male-1.jpg" alt="avatar"></a></li>
													</ul>
													<div class="meta">
														<a href="#"><h5>workbox.js</h5></a>
														<span>2kb</span>
													</div>
													<div class="dropdown">
														<button type="button" class="btn" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i data-eva="more-vertical"></i></button>
														<div class="dropdown-menu dropdown-menu-right">
															<button type="button" class="dropdown-item">Edit</button>
															<button type="button" class="dropdown-item">Share</button>
															<button type="button" class="dropdown-item">Delete</button>
														</div>
													</div>
												</li>
												<li>
													<ul class="avatars">
														<li><button class="btn round"><i data-eva="folder"></i></button></li>
														<li><a href="#"><img src="dist/img/avatars/avatar-male-2.jpg" alt="avatar"></a></li>
													</ul>
													<div class="meta">
														<a href="#"><h5>bug_report</h5></a>
														<span>1kb</span>
													</div>
													<div class="dropdown">
														<button type="button" class="btn" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i data-eva="more-vertical"></i></button>
														<div class="dropdown-menu dropdown-menu-right">
															<button type="button" class="dropdown-item">Edit</button>
															<button type="button" class="dropdown-item">Share</button>
															<button type="button" class="dropdown-item">Delete</button>
														</div>
													</div>
												</li>
												<li>
													<ul class="avatars">
														<li><button class="btn round"><i data-eva="briefcase"></i></button></li>
														<li><a href="#"><img src="dist/img/avatars/avatar-male-3.jpg" alt="avatar"></a></li>
													</ul>
													<div class="meta">
														<a href="#"><h5>nuget.zip</h5></a>
														<span>7mb</span>
													</div>
													<div class="dropdown">
														<button type="button" class="btn" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i data-eva="more-vertical"></i></button>
														<div class="dropdown-menu dropdown-menu-right">
															<button type="button" class="dropdown-item">Edit</button>
															<button type="button" class="dropdown-item">Share</button>
															<button type="button" class="dropdown-item">Delete</button>
														</div>
													</div>
												</li>
												<li>
													<ul class="avatars">
														<li><button class="btn round"><i data-eva="image-2"></i></button></li>
														<li><a href="#"><img src="dist/img/avatars/avatar-male-4.jpg" alt="avatar"></a></li>
													</ul>
													<div class="meta">
														<a href="#"><h5>clearfix.jpg</h5></a>
														<span>1kb</span>
													</div>
													<div class="dropdown">
														<button type="button" class="btn" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i data-eva="more-vertical"></i></button>
														<div class="dropdown-menu dropdown-menu-right">
															<button type="button" class="dropdown-item">Edit</button>
															<button type="button" class="dropdown-item">Share</button>
															<button type="button" class="dropdown-item">Delete</button>
														</div>
													</div>
												</li>
												<li>
													<ul class="avatars">
														<li><button class="btn round"><i data-eva="folder"></i></button></li>
														<li><a href="#"><img src="dist/img/avatars/avatar-male-5.jpg" alt="avatar"></a></li>
													</ul>
													<div class="meta">
														<a href="#"><h5>package</h5></a>
														<span>4mb</span>
													</div>
													<div class="dropdown">
														<button type="button" class="btn" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i data-eva="more-vertical"></i></button>
														<div class="dropdown-menu dropdown-menu-right">
															<button type="button" class="dropdown-item">Edit</button>
															<button type="button" class="dropdown-item">Share</button>
															<button type="button" class="dropdown-item">Delete</button>
														</div>
													</div>
												</li>
												<li>
													<ul class="avatars">
														<li><button class="btn round"><i data-eva="file-text"></i></button></li>
														<li><a href="#"><img src="dist/img/avatars/avatar-male-6.jpg" alt="avatar"></a></li>
													</ul>
													<div class="meta">
														<a href="#"><h5>plugins.js</h5></a>
														<span>3kb</span>
													</div>
													<div class="dropdown">
														<button type="button" class="btn" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i data-eva="more-vertical"></i></button>
														<div class="dropdown-menu dropdown-menu-right">
															<button type="button" class="dropdown-item">Edit</button>
															<button type="button" class="dropdown-item">Share</button>
															<button type="button" class="dropdown-item">Delete</button>
														</div>
													</div>
												</li>
											</ul>
										</div>
										<!-- End of Files -->
									</div>
								</div>
							</div>
							<!-- End of Utility -->
						</div>
					</div>
					<!-- End of Chat Room -->
					<!-- Start of Chat Room -->
					 
							 
							</div>
							<!-- Start of Utility -->
							<div class="utility">
								<div class="container">
									<button type="button" class="close" data-utility="open"><i data-eva="close"></i></button>
									<button type="button" class="btn primary" data-toggle="modal" data-target="#compose">Add people</button>
									<ul class="nav" role="tablist">
										<li><a href="#users2" class="active" data-toggle="tab" role="tab" aria-controls="users2" aria-selected="true">Users</a></li>
										<li><a href="#files2" data-toggle="tab" role="tab" aria-controls="files2" aria-selected="false">Files</a></li>
									</ul>
									<div class="tab-content">
										<!-- Start of Users -->
										<div class="tab-pane fade active show" id="users2" role="tabpanel">
											<h4>Users</h4>
											<hr>
											<ul class="users">
												<li>
													<div class="status online"><img src="dist/img/avatars/avatar-male-1.jpg" alt="avatar"><i data-eva="radio-button-on"></i></div>
													<div class="content">
														<h5>Ham Chuwon</h5>
														<span>Florida, US</span>
													</div>
													<div class="dropdown">
														<button type="button" class="btn" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i data-eva="more-vertical"></i></button>
														<div class="dropdown-menu dropdown-menu-right">
															<button type="button" class="dropdown-item">Edit</button>
															<button type="button" class="dropdown-item">Share</button>
															<button type="button" class="dropdown-item">Delete</button>
														</div>
													</div>
												</li>
												<li>
													<div class="status offline"><img src="dist/img/avatars/avatar-male-2.jpg" alt="avatar"><i data-eva="radio-button-on"></i></div>
													<div class="content">
														<h5>Quincy Hensen</h5>
														<span>Shanghai, China</span>
													</div>
													<div class="dropdown">
														<button type="button" class="btn" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i data-eva="more-vertical"></i></button>
														<div class="dropdown-menu dropdown-menu-right">
															<button type="button" class="dropdown-item">Edit</button>
															<button type="button" class="dropdown-item">Share</button>
															<button type="button" class="dropdown-item">Delete</button>
														</div>
													</div>
												</li>
												<li>
													<div class="status online"><img src="dist/img/avatars/avatar-male-3.jpg" alt="avatar"><i data-eva="radio-button-on"></i></div>
													<div class="content">
														<h5>Mark Hog</h5>
														<span>Olso, Norway</span>
													</div>
													<div class="dropdown">
														<button type="button" class="btn" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i data-eva="more-vertical"></i></button>
														<div class="dropdown-menu dropdown-menu-right">
															<button type="button" class="dropdown-item">Edit</button>
															<button type="button" class="dropdown-item">Share</button>
															<button type="button" class="dropdown-item">Delete</button>
														</div>
													</div>
												</li>
												<li>
													<div class="status offline"><img src="dist/img/avatars/avatar-male-4.jpg" alt="avatar"><i data-eva="radio-button-on"></i></div>
													<div class="content">
														<h5>Sanne Viscaal</h5>
														<span>Helena, Montana</span>
													</div>
													<div class="dropdown">
														<button type="button" class="btn" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i data-eva="more-vertical"></i></button>
														<div class="dropdown-menu dropdown-menu-right">
															<button type="button" class="dropdown-item">Edit</button>
															<button type="button" class="dropdown-item">Share</button>
															<button type="button" class="dropdown-item">Delete</button>
														</div>
													</div>
												</li>
												<li>
													<div class="status offline"><img src="dist/img/avatars/avatar-male-5.jpg" alt="avatar"><i data-eva="radio-button-on"></i></div>
													<div class="content">
														<h5>Alex Just</h5>
														<span>London, UK</span>
													</div>
													<div class="dropdown">
														<button type="button" class="btn" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i data-eva="more-vertical"></i></button>
														<div class="dropdown-menu dropdown-menu-right">
															<button type="button" class="dropdown-item">Edit</button>
															<button type="button" class="dropdown-item">Share</button>
															<button type="button" class="dropdown-item">Delete</button>
														</div>
													</div>
												</li>
												<li>
													<div class="status online"><img src="dist/img/avatars/avatar-male-6.jpg" alt="avatar"><i data-eva="radio-button-on"></i></div>
													<div class="content">
														<h5>Arturo Thomas</h5>
														<span>Vienna, Austria</span>
													</div>
													<div class="dropdown">
														<button type="button" class="btn" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i data-eva="more-vertical"></i></button>
														<div class="dropdown-menu dropdown-menu-right">
															<button type="button" class="dropdown-item">Edit</button>
															<button type="button" class="dropdown-item">Share</button>
															<button type="button" class="dropdown-item">Delete</button>
														</div>
													</div>
												</li>
											</ul>
										</div>
										<!-- End of Users -->
										<!-- Start of Files -->
										<div class="tab-pane fade" id="files2" role="tabpanel">
											<h4>Files</h4>
											<div class="upload">
												<label>
													<input type="file">
													<span>Drag & drop files here</span>
												</label>
											</div>
											<ul class="files">
												<li>
													<ul class="avatars">
														<li><button class="btn round"><i data-eva="file-text"></i></button></li>
														<li><a href="#"><img src="dist/img/avatars/avatar-male-1.jpg" alt="avatar"></a></li>
													</ul>
													<div class="meta">
														<a href="#"><h5>workbox.js</h5></a>
														<span>2kb</span>
													</div>
													<div class="dropdown">
														<button type="button" class="btn" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i data-eva="more-vertical"></i></button>
														<div class="dropdown-menu dropdown-menu-right">
															<button type="button" class="dropdown-item">Edit</button>
															<button type="button" class="dropdown-item">Share</button>
															<button type="button" class="dropdown-item">Delete</button>
														</div>
													</div>
												</li>
												<li>
													<ul class="avatars">
														<li><button class="btn round"><i data-eva="folder"></i></button></li>
														<li><a href="#"><img src="dist/img/avatars/avatar-male-2.jpg" alt="avatar"></a></li>
													</ul>
													<div class="meta">
														<a href="#"><h5>bug_report</h5></a>
														<span>1kb</span>
													</div>
													<div class="dropdown">
														<button type="button" class="btn" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i data-eva="more-vertical"></i></button>
														<div class="dropdown-menu dropdown-menu-right">
															<button type="button" class="dropdown-item">Edit</button>
															<button type="button" class="dropdown-item">Share</button>
															<button type="button" class="dropdown-item">Delete</button>
														</div>
													</div>
												</li>
												<li>
													<ul class="avatars">
														<li><button class="btn round"><i data-eva="briefcase"></i></button></li>
														<li><a href="#"><img src="dist/img/avatars/avatar-male-3.jpg" alt="avatar"></a></li>
													</ul>
													<div class="meta">
														<a href="#"><h5>nuget.zip</h5></a>
														<span>7mb</span>
													</div>
													<div class="dropdown">
														<button type="button" class="btn" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i data-eva="more-vertical"></i></button>
														<div class="dropdown-menu dropdown-menu-right">
															<button type="button" class="dropdown-item">Edit</button>
															<button type="button" class="dropdown-item">Share</button>
															<button type="button" class="dropdown-item">Delete</button>
														</div>
													</div>
												</li>
												<li>
													<ul class="avatars">
														<li><button class="btn round"><i data-eva="image-2"></i></button></li>
														<li><a href="#"><img src="dist/img/avatars/avatar-male-4.jpg" alt="avatar"></a></li>
													</ul>
													<div class="meta">
														<a href="#"><h5>clearfix.jpg</h5></a>
														<span>1kb</span>
													</div>
													<div class="dropdown">
														<button type="button" class="btn" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i data-eva="more-vertical"></i></button>
														<div class="dropdown-menu dropdown-menu-right">
															<button type="button" class="dropdown-item">Edit</button>
															<button type="button" class="dropdown-item">Share</button>
															<button type="button" class="dropdown-item">Delete</button>
														</div>
													</div>
												</li>
												<li>
													<ul class="avatars">
														<li><button class="btn round"><i data-eva="folder"></i></button></li>
														<li><a href="#"><img src="dist/img/avatars/avatar-male-5.jpg" alt="avatar"></a></li>
													</ul>
													<div class="meta">
														<a href="#"><h5>package</h5></a>
														<span>4mb</span>
													</div>
													<div class="dropdown">
														<button type="button" class="btn" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i data-eva="more-vertical"></i></button>
														<div class="dropdown-menu dropdown-menu-right">
															<button type="button" class="dropdown-item">Edit</button>
															<button type="button" class="dropdown-item">Share</button>
															<button type="button" class="dropdown-item">Delete</button>
														</div>
													</div>
												</li>
												<li>
													<ul class="avatars">
														<li><button class="btn round"><i data-eva="file-text"></i></button></li>
														<li><a href="#"><img src="dist/img/avatars/avatar-male-6.jpg" alt="avatar"></a></li>
													</ul>
													<div class="meta">
														<a href="#"><h5>plugins.js</h5></a>
														<span>3kb</span>
													</div>
													<div class="dropdown">
														<button type="button" class="btn" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i data-eva="more-vertical"></i></button>
														<div class="dropdown-menu dropdown-menu-right">
															<button type="button" class="dropdown-item">Edit</button>
															<button type="button" class="dropdown-item">Share</button>
															<button type="button" class="dropdown-item">Delete</button>
														</div>
													</div>
												</li>
											</ul>
										</div>
										<!-- End of Files -->
									</div>
								</div>
							</div>
							<!-- End of Utility -->
						</div>
					</div>
					<!-- End of Chat Room -->
				</div>
			</div>
			<!-- End of Chat -->
			<!-- Start of Compose -->
			<div class="modal fade" id="compose" tabindex="-1" role="dialog" aria-labelledby="compose" aria-hidden="true">
				<div class="modal-dialog modal-dialog-centered" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5>Compose</h5>
							<button type="button" class="btn round" data-dismiss="modal" aria-label="Close">
								<i data-eva="close"></i>
							</button>
						</div>
						<div class="modal-body">
							<ul class="nav" role="tablist">
								<li><a href="#details" class="active" data-toggle="tab" role="tab" aria-controls="details" aria-selected="true">Details</a></li>
								<li><a href="#participants" data-toggle="tab" role="tab" aria-controls="participants" aria-selected="false">Participants</a></li>
							</ul>
							<div class="tab-content">
								<!-- Start of Details -->
								<div class="details tab-pane fade show active" id="details" role="tabpanel">
									<form>
										<div class="form-group">
											<label>Title</label>
											<input type="text" class="form-control" placeholder="What's the topic?">
										</div>
										<div class="form-group">
											<label>Message</label>
											<textarea class="form-control" placeholder="Hmm, are you friendly?"></textarea>
										</div>
									</form>
								</div>
								<!-- End of Details -->
								<!-- Start of Participants -->
								<div class="participants tab-pane fade" id="participants" role="tabpanel">
									<div class="search">
										<form>
											<input type="search" class="form-control" placeholder="Search">
											<button type="submit" class="btn prepend"><i data-eva="search"></i></button>
										</form>
									</div>
									<h4>Users</h4>
									<hr>
									<ul class="users">
										<li>
											<div class="status online"><img src="dist/img/avatars/avatar-male-1.jpg" alt="avatar"><i data-eva="radio-button-on"></i></div>
											<div class="content">
												<h5>Ham Chuwon</h5>
												<span>Florida, US</span>
											</div>
											<div class="custom-control custom-checkbox">
												<input type="checkbox" class="custom-control-input" id="user1">
												<label class="custom-control-label" for="user1"></label>
											</div>
										</li>
										<li>
											<div class="status offline"><img src="dist/img/avatars/avatar-male-2.jpg" alt="avatar"><i data-eva="radio-button-on"></i></div>
											<div class="content">
												<h5>Quincy Hensen</h5>
												<span>Shanghai, China</span>
											</div>
											<div class="custom-control custom-checkbox">
												<input type="checkbox" class="custom-control-input" id="user2">
												<label class="custom-control-label" for="user2"></label>
											</div>
										</li>
										<li>
											<div class="status online"><img src="dist/img/avatars/avatar-male-3.jpg" alt="avatar"><i data-eva="radio-button-on"></i></div>
											<div class="content">
												<h5>Mark Hog</h5>
												<span>Olso, Norway</span>
											</div>
											<div class="custom-control custom-checkbox">
												<input type="checkbox" class="custom-control-input" id="user3">
												<label class="custom-control-label" for="user3"></label>
											</div>
										</li>
										<li>
											<div class="status offline"><img src="dist/img/avatars/avatar-male-4.jpg" alt="avatar"><i data-eva="radio-button-on"></i></div>
											<div class="content">
												<h5>Sanne Viscaal</h5>
												<span>Helena, Montana</span>
											</div>
											<div class="custom-control custom-checkbox">
												<input type="checkbox" class="custom-control-input" id="user4">
												<label class="custom-control-label" for="user4"></label>
											</div>
										</li>
										<li>
											<div class="status offline"><img src="dist/img/avatars/avatar-male-5.jpg" alt="avatar"><i data-eva="radio-button-on"></i></div>
											<div class="content">
												<h5>Alex Just</h5>
												<span>London, UK</span>
											</div>
											<div class="custom-control custom-checkbox">
												<input type="checkbox" class="custom-control-input" id="user5">
												<label class="custom-control-label" for="user5"></label>
											</div>
										</li>
										<li>
											<div class="status online"><img src="dist/img/avatars/avatar-male-6.jpg" alt="avatar"><i data-eva="radio-button-on"></i></div>
											<div class="content">
												<h5>Arturo Thomas</h5>
												<span>Vienna, Austria</span>
											</div>
											<div class="custom-control custom-checkbox">
												<input type="checkbox" class="custom-control-input" id="user6">
												<label class="custom-control-label" for="user6"></label>
											</div>
										</li>
										<li>
											<div class="status offline"><img src="dist/img/avatars/avatar-female-1.jpg" alt="avatar"><i data-eva="radio-button-on"></i></div>
											<div class="content">
												<h5>Victoria Garner</h5>
												<span>Chisinau, Moldova</span>
											</div>
											<div class="custom-control custom-checkbox">
												<input type="checkbox" class="custom-control-input" id="user7">
												<label class="custom-control-label" for="user7"></label>
											</div>
										</li>
										<li>
											<div class="status offline"><img src="dist/img/avatars/avatar-female-2.jpg" alt="avatar"><i data-eva="radio-button-on"></i></div>
											<div class="content">
												<h5>Maria Baron</h5>
												<span>Indore, India</span>
											</div>
											<div class="custom-control custom-checkbox">
												<input type="checkbox" class="custom-control-input" id="user8">
												<label class="custom-control-label" for="user8"></label>
											</div>
										</li>
										<li>
											<div class="status online"><img src="dist/img/avatars/avatar-female-3.jpg" alt="avatar"><i data-eva="radio-button-on"></i></div>
											<div class="content">
												<h5>Sara Koch</h5>
												<span>Sofia, BG</span>
											</div>
											<div class="custom-control custom-checkbox">
												<input type="checkbox" class="custom-control-input" id="user9">
												<label class="custom-control-label" for="user9"></label>
											</div>
										</li>
									</ul>
								</div>
								<!-- End of Participants -->
							</div>
						</div>
						<div class="modal-footer">
							<button type="submit" class="btn primary">Compose</button>
						</div>
					</div>
				</div>
			</div>
			<!-- End of Compose -->
		</div>
		<!-- Layout -->
		<script src="dist/js/vendor/jquery-slim.min.js"></script>
		<script src="dist/js/vendor/popper.min.js"></script>
		<script src="dist/js/vendor/feather.min.js"></script>
		<script src="dist/js/vendor/eva.min.js"></script>
		<script src="dist/js/vendor/bootstrap.min.js"></script>
		<script src="dist/js/swipe.min.js"></script>
	</body>

<!-- Mirrored from grayshift.io/themes/swipe/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 26 Jul 2019 14:03:22 GMT -->
</html>																																																														
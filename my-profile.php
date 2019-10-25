

 
 <head>
 	 
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8">
	<!-- Font -->
	
	<link href="https://fonts.googleapis.com/css?family=Poppins:400,500,600,700%7CAllura" rel="stylesheet">
	
	<!-- Stylesheets -->
	
	<link href="common-css/bootstrap.css" rel="stylesheet">
	
	<link href="common-css/ionicons.css" rel="stylesheet">
	
	<link href="common-css/fluidbox.min.css" rel="stylesheet">
	
	<link href="01-cv-portfolio/css/styles.css" rel="stylesheet">
	
	<link href="01-cv-portfolio/css/responsive.css" rel="stylesheet">

	
</head>
<body>
 









 



 <?php include'components/header.php'; ?>
<?php 
if(!isset($_SESSION["u_nam"]))
{
	header("Location:index.php");
}
else
{
?>




<?php
	$u_nam=$_GET["u_nam"];
	$query="SELECT * FROM singup WHERE u_nam='$u_nam'";
	$res=mysqli_query($con,$query);
	while ($data=mysqli_fetch_array($res))

	 {

	 	$nam=$data["nam"];
	 	$u_nam=$data["u_nam"];
	 	$email=$data["email"];
	 	$dob=$data["dob"];
	 	$bio=$data["bio"];
	 	$d_pic=$data["d_pic"];
	 	$relation_shp=$data["relation_shp"];
	 	$facebook=$data["facebook"];
	 	$instagram=$data["instagram"];
	 	$twitter=$data["twitter"];
 	}

?>


<style type="text/css">
 
 

.button {
  background: transparent;
  border: 3px solid #fff;
  color: #fff;
  font-size: 2em;
  line-height: 2em;
  text-align: center;
  text-decoration: none;
  width: 10em;
}

.button:hover {
  background-color: rgba(0,0,0,0.2);
}

.saved {
  background-color: green;
}

.button-icons {
   position: relative;
   width: 30px;
}

.icon {
  fill: #fff;
}

#checkmark {
  visibility: hidden;
}
</style>

<!-- Button trigger modal -->

	  <?php
$u_nam=$_GET["u_nam"]; 
$query="SELECT fan_from FROM users_fan where fan_to='$u_nam' ";
$res=mysqli_query($con,$query);
$count=mysqli_num_rows($res);
 



?>

			<div class="row">
				<div class="col-md-1 col-lg-2"></div>
				<div class="col-md-10 col-lg-8">
					<div class="intro">
 					<div class="profile-img" >
 						<img src="IMAGES/<?php echo $d_pic; ?>" title="Profile"> 
 					</div>
						<h2 ><b><?php echo $nam; ?></b></h2>
						<h5 class="font-yellow">Username: <?php echo $u_nam;?></h5>
 <a href="login.php"><button class="btn btn-primary" style="background-color: white; color: #FFB900;width: 200px;">	<?php echo $count ; ?> &nbsp Fans</button></a>
						<ul class="information margin-tb-30">
 							<li><b><a href="edit-profile.php?u_nam=<?php echo $u_nam;?>" style="color: gray; text-decoration: none;"> Edit Profile</b> </a>


 			</ul>
 		 
		 				<ul class="social-icons">
		 					<li><a href=""><i class="ion-social-facebook"></i></a></li>
 							<li><a href="<?php echo $instagram;?>"><i class="ion-social-instagram"></i></a></li>
							<li><a href="<?php echo $twitter;?>"><i class="ion-social-twitter"></i></a></li>
						</ul> 
					</div><!-- intro -->
				</div><!-- col-sm-8 -->
			</div><!-- row -->
		</div><!-- container -->
	 
<?php

if(isset($_POST["chang_pic"]))
{
	$u_nam=$_GET["u_nam"];
	 $image = $_FILES["image"]["name"];
	$target = "IMAGES/".basename($image);
	$query="UPDATE singup SET d_pic='$image' WHERE u_nam='$u_nam'";
	mysqli_query($con,$query); 
	if(move_uploaded_file($_FILES["image"]["tmp_name"],$target))
{
	echo"Profile change";
}
}
	?>



  <button type="button" class="btn btn-primary" title="Change Profile" data-toggle="modal" data-target="#exampleModal">
   <svg id="icons" class="button-icons" version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32">
    <path id="download" class="icon" d="M28 16h-5l-7 7-7-7h-5l-4 8v2h32v-2l-4-8zM0 28h32v2h-32v-2zM18 10v-8h-4v8h-7l9 9 9-9h-7z"></path>
   </svg>
</button> 





<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Change Profile Photo</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
<img alt="" style="height: 500px; object-fit: none; background-image: url(IMAGES/<?php echo $d_pic; ?>); "> 

      </div>
      <div class="modal-body">
      	<form method="post" enctype="multipart/form-data">
 	<input type="file" name="image" class="form-control form-control-user">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <input type="submit" class="btn btn-primary" name="chang_pic" value="Save changes"> 
      </div>
    </div>
  </div>
</div>
</form>
  
 		<!-- <div class="portfolioContainer">
			
			<div class="p-item web-design">
				<a href="images/portfolio-1-600x400.jpg" data-fluidbox>
					<img src="images/portfolio-1-600x400.jpg" alt=""></a>
			</div> 
			 
		</div> --><!-- portfolioContainer -->
		
	</section><!-- portfolio-section -->
	
 
 
	<section class="about-section section">
		<div class="container">
			<div class="row">
				<div class="col-sm-4">
					<div class="heading">
						<h3><b>Bio</b></h3>
						<h6 class="font-lite-black"><b>PROFESSIONAL PATH</b></h6>
					</div>
				</div><!-- col-sm-4 -->
				<div class="col-sm-8">
					<p class="margin-b-50"><?php echo $bio;?></p>
					
				 <!-- row -->
				</div><!-- col-sm-8 -->
			</div><!-- row -->
		</div><!-- container -->
	</section><!-- about-section -->
	
 
<hr>


	<section class="about-section section">
		<div class="container">
			<div class="row">
				<div class="col-sm-4">
					<div class="heading">
						<h3><b>Other Social Profiles</b></h3>
 					</div>
				</div><!-- col-sm-4 -->
				<div class="col-sm-3">
					<div class="intro" style="margin-top: 15px;">

		 				<ul class="social-icons">
		 					<li><a href="<?php echo $facebook;?>"><i class="ion-social-facebook"></i></a></li>
 							<li><a href="<?php echo $instagram;?>"><i class="ion-social-instagram"></i></a></li>
							<li><a href="<?php echo $twitter;?>"><i class="ion-social-twitter"></i></a></li>
						</ul> 					
				 <!-- row -->
				</div><!-- col-sm-8 -->
			</div><!-- row -->
		</div><!-- container -->
		</div>
	</section>
	<!-- about-section -->
	

<hr>

	<section class="about-section section">
		<div class="container">
			<div class="row">
				<div class="col-sm-4">
					<div class="heading">
						<h3><b>Contact info:</b></h3>
						<h6 class="font-lite-black"><b>PROFESSIONAL PATH</b></h6>
					</div>
				</div><!-- col-sm-4 -->
				<div class="col-sm-8">
					<p class="margin-b-50"> <b>EMAIL : </b><?php echo $email; ?></p>
					 

				 <!-- row -->
				</div><!-- col-sm-8 -->
			</div><!-- row -->
		</div><!-- container -->
	</section><!-- about-section -->


	<section class="about-section section">
		<div class="container">
			<div class="row">
				<div class="col-sm-4">
					<div class="heading">
						<h3><b>Birth-Day</b></h3>
 					</div>
				</div><!-- col-sm-4 -->
				<div class="col-sm-8">
					<p class="margin-b-50"></b><?php echo $dob;?></p>
					
				 <!-- row -->
				</div><!-- col-sm-8 -->
			</div><!-- row -->
		</div><!-- container -->
	</section><!-- about-section -->
 

	<section class="about-section section">
		<div class="container">
			<div class="row">
				<div class="col-sm-4">
					<div class="heading">
						<h3><b>RelationShip Status</b></h3>
 					</div>
				</div><!-- col-sm-4 -->
				<div class="col-sm-8">
					<p class="margin-b-50"></b><?php echo $relation_shp;?></p>
					
				 <!-- row -->
				</div><!-- col-sm-8 -->
			</div><!-- row -->
		</div><!-- container -->
	</section><!-- about-section -->




	
	<!-- SCIPTS -->
	
	<script src="common-js/jquery-3.2.1.min.js"></script>
	
	<script src="common-js/tether.min.js"></script>
	
	<script src="common-js/bootstrap.js"></script>
	
	<script src="common-js/isotope.pkgd.min.js"></script>
	
	<script src="common-js/jquery.waypoints.min.js"></script>
	
	<script src="common-js/progressbar.min.js"></script>
	
	<script src="common-js/jquery.fluidbox.min.js"></script>
	
	<script src="common-js/scripts.js"></script>
	
 </body>
</html>
 <?php } ?> 
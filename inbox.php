<?php include'components/header.php' ; ?>

<link href="dist/css/lib/bootstrap.min.css" type="text/css" rel="stylesheet">
		<!-- Swipe core CSS -->
		<link href="dist/css/swipe.min.css" type="text/css" rel="stylesheet">
		<!-- Favicon -->
		<link href="dist/img/favicon.png" type="image/png" rel="icon">

	<?php

 		$msg_to=$_GET["msg_to"];
 		$msg_from=$_GET["msg_from"];
       $query="SELECT * FROM chating WHERE msg_from='$msg_to'";
	$res=mysqli_query($con,$query);
	while ($data=mysqli_fetch_array($res))

	 {
 
	 	$msg_from=$data["mesg"];

	 }	


  ?>
   	<?php

 		$msg_to=$_GET["msg_to"];
 		$msg_from=$_GET["msg_from"];
       $query="SELECT * FROM chating WHERE msg_to='$msg_to' and msg_from='$msg_from'";
	$res=mysqli_query($con,$query);
	while ($data=mysqli_fetch_array($res))

	 {
 
	 	$msg_to=$data["mesg"];
}
  ?>
	<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet" />

		<!-- The main CSS file -->
  
 	<meta charset="utf-8">
 		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="description" content="#">

 <body >
 <div class="messaging">
  <div class="inbox_msg">
	<div class="inbox_people">
	  <div class="headind_srch">
		<div class="recent_heading">
		  <h4 style="color: black;">Your Followers</h4>
		</div>
		<div class="srch_bar">
		  <div class="stylish-input-group">
			<input type="text" class="search-bar"  placeholder="Search" >
			</div>
		</div>
	  </div>
	  <div class="inbox_chat scroll">
	  

	<?php
		if(isset($_POST["send"]))
		{	$abc = $POST['xyz'];
  				$msg_to=$_GET["msg_to"];
				$msg_from=$_GET["msg_from"];
				$mesg=$_POST["mesg"];
 				$query="INSERT INTO chating (msg_to,msg_from,mesg) VALUES ('$msg_to','$msg_from','$mesg')" ;
 				$res=mysqli_query($con,$query);

		}

		?>

 	  

	 	  	<?php
       $query="SELECT * FROM users_fan WHERE fan_to='$u_nam' ";
	$res=mysqli_query($con,$query);
	while ($data=mysqli_fetch_array($res))

	 {
 
	 	$fan_to=$data["fan_from"];

  ?>
  	  
 
 		<div class="chat_list">
		<div class="chat_people">
 		<div class="chat_img" > 
 <a href="inbox.php?msg_to=<?php echo $fan_to; ?>&&msg_from=<?php echo $u_nam; ?>"> <img class="img-profile rounded-circle" style=" background-size: cover; background-image: url(IMAGES/<?php echo $d_pic; ?>); height: 40px;width: 40px;"> </div>
			<div class="chat_ib">
			  <h5><?php echo $fan_to; ?><span class="chat_date">Dec 25</span></h5>
			  <p>Test, which is a new approach to have all solutions 
				astrology under one roof.</p>
			</div>
		  </div>
		</div>
 	 	 <?php } ?>
	  </div>
	</div></a>
 
	<?php

		$msg_from=$_GET["msg_from"];
 		$msg_to=$_GET["msg_to"];
        $query="SELECT * FROM chating WHERE msg_to='$msg_to' ";
 		$res=mysqli_query($con,$query);
 	 	$cont=mysqli_num_rows($res);

 		 
  		  echo $cont;

  		 
  		?>
 





	<div class="mesgs">
	  <div class="msg_history" >
 
 
		
 	
   	<?php

 		$msg_to=$_GET["msg_to"];
 		$msg_from=$_GET["msg_from"];
       $query="SELECT * FROM chating WHERE msg_to='$msg_to' and msg_from='$msg_from'";
	$res=mysqli_query($con,$query);
	while ($data=mysqli_fetch_array($res))

	 {
 
	 	$msg_to=$data["mesg"];
	 	$fan_d_pic=$data["d_pic"];

  ?>


		<div class="outgoing_msg">
		  <div class="sent_msg">
			  <p><?php echo $msg_to; ?> </p>
 
			<span class="time_date"> 11:01 AM    |    June 9</span> </div>
		</div>  
 <?php } ?>
	  	<?php

 		$msg_to=$_GET["msg_to"];
 		$msg_from=$_GET["msg_from"];
       $query="SELECT * FROM chating WHERE msg_from='$msg_to'";
	$res=mysqli_query($con,$query);
	while ($data=mysqli_fetch_array($res))

	 {
 
	 	$msg_from=$data["mesg"];

  ?>
 

  <div class="incoming_msg">
		  <div class="incoming_msg_img">
		   <img src="IMAGES/Plain-short-beard-style.jpg" style="border-radius: 100px; height: 50px;" > </div>
		  <div class="received_msg">
			<div class="received_withd_msg">
			  <p><?php echo $msg_from; ?></p>
			  <span class="time_date"> 11:01 AM    |    June 9</span></div>
		  </div>
		</div>
  <?php } ?>

















	<?php
 		$msg_to=$_GET["msg_to"];

        $query="SELECT * FROM singup  WHERE fan_to='$u_nam'";
	    $res=mysqli_query($con,$query);
		while ($data=mysqli_fetch_array($res))

		 {
 
	 		$d_pic=$data["d_pic"];

		}
  ?>
 


	  <form method="post" >
	  <div class="type_msg" >
		<div class="input_msg_write">
 <input type="text" name="mesg"  class="write_msg" placeholder="Type a message and hit enter"> 
	</div>
	  <input type="submit" name="send" hidden="" class="msg_send_btn" class="btn btn-primary" style="width: 80px;" value="send">  

	  </div>
</form>

	</div>
  </div>
</div>

 		<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.0.7/angular.min.js"></script>

</body>
</html>


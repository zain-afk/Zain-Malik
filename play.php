 
   <?php include 'components/header.php';?>
   <script src='https://code.jquery.com/jquery-2.1.3.min.js'></script>
 <style type="text/css">
	body{margin-top:20px; font-family: "Times New Roman", Times, serif;}

.comment-wrapper .panel-body {
    max-height:650px;
    overflow:auto;
 }

.comment-wrapper .media-list .media img {
    width:64px;
    height:64px;
    border:2px solid #e5e7e8;
}

.comment-wrapper .media-list .media {
    border-bottom:1px dashed #efefef;
    margin-bottom:25px;
}
 
</style>
 
 <?php
 $v_key=$_GET["v_key"];
$query="SELECT * FROM video WHERE video_key='$v_key'";
 $res=mysqli_query($con,$query);
while ($data=mysqli_fetch_array($res))
 {
  $uploaded_by=$data["u_nam"];
  $title =$data["titlle"]; 
  $location=$data["location"];
  $video_key=$data["video_key"];
    $tm=$data["tm"];
}
   ?>

 





<?php
if(isset($_POST["like"]))
{

  $u_nam=$_GET["u_nam"];
  $v_key=$_GET["v_key"];
  
   
  $query="INSERT INTO video_like (video_key,like_from,uploaded_by) 
  VALUES ('$v_key','$u_nam','$uploaded_by')";

  $res=mysqli_query($con,$query);
  if($res)
  {
    $dlt="DELETE FROM dis_like_video WHERE dis_like_from='$u_nam'";
      $dltt=mysqli_query($con,$dlt);

  }
  else
  {
    echo "Error";
  }

 
}
 
  ?>
 



 
















<?php
if(isset($_POST["dis_like"]))
{

  $u_nam=$_GET["u_nam"];
  $v_key=$_GET["v_key"];
  
   
  $query="INSERT INTO dis_like_video (video_key,dis_like_from,uploaded_by) 
  VALUES ('$v_key','$u_nam','$uploaded_by')";

  $res=mysqli_query($con,$query);
 if($res)
  {
    $dlt2="DELETE FROM video_like WHERE like_from='$u_nam'";
      $dltt=mysqli_query($con,$dlt2);

  }
  else
  {
    echo "Error";
  }
 
}
?>









<?php

$u_nam=$_GET["u_nam"];
$query="SELECT * FROM video_like WHERE like_from='$u_nam'";
 $res=mysqli_query($con,$query);
 $likes=mysqli_num_rows($res) ;
 
  if($likes>0)
  {
    $style_like= 'style="color: blue;" ';
  }


 


    ?>

 

 <?php

 $v_key=$_GET["v_key"];
$query="SELECT * FROM dis_like_video WHERE video_key='$v_key'";
 $res=mysqli_query($con,$query);
 $dis_likes=mysqli_num_rows($res) ; 

  if($dis_likes>0)
  {
    $style_dis_like= 'style="color: red;" ';
  }
 
   ?>
 






<?php

 $v_key=$_GET["v_key"];
$query="SELECT * FROM video_like WHERE video_key='$v_key'";
 $res=mysqli_query($con,$query);
 $likes=mysqli_num_rows($res) ;
 
   ?>


 <?php
 $u_nam=$_GET["u_nam"];
$query="SELECT * FROM singup WHERE u_nam='$u_nam'";

$res=mysqli_query($con,$query);
while ($data=mysqli_fetch_array($res))
 {
  $d_nam=$data["nam"];
  $u_nam=$data["u_nam"];
  $d_pic=$data["d_pic"];
}

 ?>

 <?php
 $video_key=$_GET["v_key"];
$query="SELECT * FROM video WHERE video_key='$video_key'";

$res=mysqli_query($con,$query);
while ($data=mysqli_fetch_array($res))
 {
 	$u_nam=$data["u_nam"];
  	$title=$data["titlle"];
 	$vido_name=$data["vido_name"];
 	$video_key=$data["video_key"];
 	$discription=$data["discription"];

}

 ?>
 
  <body>
 
 <link rel="stylesheet" href="components/style2.css">

<section id="wrapper">
  <div class="videoContainer" style="width: 180vh;">

    <video id="myVideo" controls preload="auto" poster="https://s.cdpn.io/6035/vp_poster.jpg" height="563px" width="100%" >
<source src="videos/<?php echo $vido_name; ?>" type="video/mp4">
 		</video>
    <div class="caption">Prometheus</div>
    <div class="control" >
      <div class="btmControl">
        <div class="btnPlay btn" title="Play/Pause video"><span class="icon-play"></span></div>
        <div class="progress-bar">
          <div class="progress">
            <span class="bufferBar"></span>
            <span class="timeBar"></span>
          </div>
        </div>
        <div class="sound sound2 btn"><span class="icon-sound"></span></div>
        <div class="btnFS btn" title="Switch to full screen"><span class="icon-fullscreen"></span></div>
      </div>

    </div>
  </div>
</section>
<br>


 
 <?php
 $v_key=$_GET["v_key"];
$query="SELECT * FROM video WHERE video_key='$v_key'";
 $res=mysqli_query($con,$query);
while ($data=mysqli_fetch_array($res))
 {
 	$uploaded_by=$data["u_nam"];
 	$title =$data["titlle"]; 
 	$location=$data["location"];
 	$video_key=$data["video_key"];
  	$tm=$data["tm"];
}
   ?>

<div class="container-fluid top_bar" style="width: 100%; margin-left: -160px;">
<div class="container">
<div class="row">
<div class="col-sm-8">
 
 <h4><?php echo $title;?></h4>
 



</div>
 </div>

</div>
 </div>
 <br>

<script src="http://code.jquery.com/jquery-latest.js"></script>
  <div class="container-fluid top_bar" style="margin-left: -160px;" >
<div class="container">
<div class="row">
<div class="col-sm-5">
 
 <h5 style="color: black;">Uploaded by. &nbsp<?php echo $uploaded_by;?></h5>

 <p>Published on. &nbsp<?php echo $tm; ?></p>
</div>


<div class="col-sm-7" style="margin-left: -10px;">
 

 <form  method="post"  id="myForm" >
 




 
   <button class="btn btn-primary" type="submit" <?php echo $style_like;?> name="like" style="background-color: white; border: none; color: gray; font-size: 25;"><i class="fa fa-thumbs-up"></i> &nbsp&nbsp<?php 
    if($likes>0)
 { echo $likes;} ?></button>

  
      <button type="submit" class="btn btn-danger" name="dis_like" <?php echo $style_dis_like; ?> style="background-color: white; border: none; color: gray; font-size: 25;"><i class="fa fa-thumbs-down"></i>&nbsp&nbsp <?php 
    if($dis_likes>0)
 { echo $dis_likes;} ?></button>
 

 </form>
 

</div>
 </div>
  </div>
</div>

<hr style="color: black;">



  <div class="container-fluid top_bar" style="margin-left: -160px;">
<div class="container">
<div class="row">
<div class="col-sm-5">
 <h2>Discription</h2>
<?php echo $discription; ?>
</div>


<div class="col-sm-7" >
 
 <input type="Submit" name="subs" class="btn btn-danger" value="SUBSCRIBE 82k" style="width:180px; font-size: 20px; background-color: #CC0000; border-radius: 0px; border-color: #CC0000; color:white;">

</div>
 </div>
  </div>
</div>


<hr>




<?php
if(isset($_POST["comnt"]))
{

	$name=$_GET["u_nam"];
	$v_key=$_GET["v_key"];
	$cmnt_box= $_POST["cmnt_box"];
	if(empty($cmnt_box))
	{
		echo "required";
	}
	else
	{	
	$query="INSERT INTO comments (cmnt_from,comnt_on,comnt,nam,d_pic) 
	VALUES ('$u_nam','$v_key','$cmnt_box','$d_nam','$d_pic')";

	$res=mysqli_query($con,$query);
	if($res)
	{
		echo"Comment Add";
	}
	else
	{
		echo "Error";
	}
}
}
?>



 <?php
 $v_key=$_GET["v_key"];
$query="SELECT * FROM comments WHERE comnt_on='$v_key'";

$res=mysqli_query($con,$query);
 $count=mysqli_num_rows($res);
 ?>

<?php
if(isset($_SESSION["u_nam"]))
{
  $u_nam=$_SESSION["u_nam"];
 
?> 

<div class="container-fluid top_bar" style="width: 100%;" >
<div class="container">
<div class="row">
<div class="col-sm-8">

 <h3 style="margin-left: -160px;"><?php echo  $count; ?>&nbspComments</h3>     

 <br>
  <form method="post" autocomplete="off">
   <div class="page" style="margin-left: -160px;">
      <img class="img-profile rounded-circle"   style="width: 50px;height: 50px; border-radius: 100px;margin-bottom: -65px; background-image: url(IMAGES/<?php echo $d_pic; ?>);background-size: cover;  ">
  <div class="page__demo">

    <label class="field a-field a-field_a1 page__field">

      <input class="field__input a-field__input" name="cmnt_box" id="textsend" onkeyup="success()" name="demo" placeholder="Add Comment" style="width: 53vh; margin-left: 50px;">
      <br>
            <input type="submit" class="btn btn-primary" name="comnt" value="Add Comment"  style=" margin-left: 50px;" id="button" disabled>
       <span class="a-field__label-wrap">
       </span>
    </label>


 </div>

</div>
 </div>

</form>
<?php }
else
{
  echo'<p>You are Not login please <a href="login.php">login</a> for Comment</p>';
}

 ?>

<script type="text/javascript">
  function success() {
   if(document.getElementById("textsend").value==="") { 
            document.getElementById('button').disabled = true; 
        } else { 
            document.getElementById('button').disabled = false;
        }
    }



</script>

<?php
$v_key=$_GET["v_key"];
$query="SELECT * FROM comments WHERE comnt_on='$v_key'";
$res=mysqli_query($con,$query);
while ($data=mysqli_fetch_array($res))
 {
 	$cmnt_from=$data["cmnt_from"];
 	$comnt_on=$data["comnt_on"];
 	$comnt=$data["comnt"];
 	$tm=$data["tm"];
 
 ?>

  
 



<div class="container" style="margin-left: -160px;">
		<div class="row">
			

			<div class="col-sm-7"  > 

 <img class="img-profile rounded-circle"  width="70px;" height="70px;" style="border-radius: 100px; margin:10px; background-image: url(IMAGES/<?php echo $d_pic; ?>); background-size: cover;">
<span style="color: black; font-size: 25px;margin-top:80px;"><?php echo $cmnt_from; ?>.</span> <span style="font-size: 15px;"><?php echo $tm; ?></span>
 <p style="margin-left: 90px; margin-top: -30px; color: black;"><?php echo $comnt; ?></p>
 <hr>
  </div>
 </div>



</div>
</body>
<?php }   
?>
 





 
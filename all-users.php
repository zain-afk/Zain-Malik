<?php include'components/header.php'?>

 <style type="text/css">
 
 </style>








 <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<!DOCTYPE html>
<html>
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 300px;
  margin: auto;
  text-align: center;
  font-family: arial;
}

.title {
  color: grey;
 }

.button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #3498DB;
  text-align: center;
  cursor: pointer;
  width: 100%;
 }

a {
  text-decoration: none;
   color: black;
}

button:hover, a:hover {
  opacity: 0.7;
}
</style>
</head>

 <?php 
if(isset($_SESSION["u_nam"]))
{
	$u_nam=$_SESSION["u_nam"];
	$current_user=$u_nam;
 }
 ?>






<?php 
$query="SELECT * FROM singup WHERE u_nam != '$current_user'";
$res=mysqli_query($con,$query);
while ($data=mysqli_fetch_array($res))

 {
 	$nam=$data["nam"];
 	$bio=$data["bio"];
 	$d_pic=$data["d_pic"];
 	$user_u_nam=$data["u_nam"];


 



?>

<body>
<div class="card">
  <img src="IMAGES/<?php echo $d_pic; ?>" alt="John" style="width:100%;height: 200px;">
  <br>
  <h3><b><?php echo $nam ;?></b></h3>
  <p class="title"><?php echo $user_u_nam ;?></p>
  <p><?php echo $bio ;?></p>
  <div style="margin: 24px 0;">
    <a href="https://www.linkedin.com/in/md-abu-talha/" target="_blank"><i class="fa fa-linkedin"></i></a>
    <a href="https://www.facebook.com/talha.sust.cse" target="_blank"><i class="fa fa-facebook"></i></a>
    <a href="https://github.com/talha08" target="_blank"><i class="fa fa-github"></i></a>
    <a href="https://medium.com/@talhaqc" target="_blank"><i class="fa fa-medium"></i></a>
  </div>
 
   <p><a href="user-profile.php?user_u_nam=<?php echo $user_u_nam; ?>&&u_nam=<?php echo $current_user ;?>" class="button">Profile</a></p>
 
</div>
<br>
<br>

</body>
</html>

<?php } ?>
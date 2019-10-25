  
  <?php 
  include'config.php';
 include 'components/header.php'; 


  ?>

  <center> 
 
    <!-- Favicon -->
   	 <h1  style="margin-top: 10px;">Your All Favriout Video Is Here.....!!</h1>


 




		


 <?php
$query="SELECT * FROM video";

$res=mysqli_query($con,$query);
while ($data=mysqli_fetch_array($res))
 {
  	$vido_name=$data["vido_name"];
 	$video_key=$data["video_key"];
 	$titlle=$data["titlle"];
  	$tm=$data["tm"];

   ?>
    <!--Body start -->
 
<br>
<br>


<?php  if(isset($_SESSION["u_nam"]))
{
$u_nam=$_SESSION["u_nam"];
?>
 <table class="table table-bordered">
      <tr>
          <td> 
      

  <div class="card" style="width: 29rem;">
<a href="play.php?v_key=<?php echo $video_key;?>&&u_nam=<?php  echo $u_nam; ?>" style="color: black; text-decoration: none;">
<video width="380" height="240">
<source src="videos/<?php echo $vido_name;?>"type="video/mp4">
</video>
 
   <div class="card-body">
     <h5 class="card-title"><?php echo $titlle; ?></h5>
     </a>
    <p class="card-text"> </p>
   </div>
</div>
</td>        
      </tr>

    </table>
<?php }
else
{
 
 ?>
  <table class="table table-bordered">
<td> 
  <div class="card" style="width: 29rem;">
<a href="play.php?v_key=<?php echo $video_key;?>" style="color: black; text-decoration: none;">
<video width="380" height="240">
<source src="videos/<?php echo $vido_name;?>"type="video/mp4">
</video>
 
   <div class="card-body">
     <h5 class="card-title"><?php echo $titlle; ?></h5>
     </a>
    <p class="card-text"> </p>
   </div>
</div>

</th>
        </td> 
      </tr>

    </table>
 



<?php } ?>


<?php } ?>







 <!--Body END -->
 
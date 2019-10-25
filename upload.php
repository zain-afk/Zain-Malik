<?php
error_reporting(1);
 
$con=mysqli_connect("localhost","root","abc");
 
 
 
extract($_POST);
 
 
$target_dir = "videos/";
 
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
 
if($upd)
{
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
 
if($imageFileType != "mp4" && $imageFileType != "avi" && $imageFileType != "mov" && $imageFileType != "3gp" && $imageFileType != "mpeg")
{
    echo "File Format Not Suppoted";
} 
 
else
{
 
$video_path=$_FILES['fileToUpload']['name'];
 
mysqli_query("insert into video(video_name) values('$video_path')");
 
move_uploaded_file($_FILES["fileToUpload"]["tmp_name"],$target_file);
 
echo "uploaded ";
 
}
 
}
?>

   <form method="post"  enctype="multipart/form-data">
    <input type="file" name="upd">
    <input type="submit" name="sub">
   </form>

 <?php
if($disp)
 
{
 
$query=mysql_query("select * from video");
 
  while($all_video=mysql_fetch_array($query))
 
  {
?>
   
   <video width="300" height="200" controls>
  <source src="test_upload/<?php echo $all_video['video_name']; ?>" type="video/mp4">
  </video> 
  
  <?php } } ?>
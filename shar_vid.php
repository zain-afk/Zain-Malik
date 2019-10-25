



<?PHP include'components/header.php'; ?>
 
        <!-- End of Topbar -->
 
    <?php


    include("config.php");
 
if(isset($_POST['but_upload']))
{
    $name=$_FILES['file']['name'];
    $type=$_FILES['file']['type'];
    $u_nam = $_GET["u_nam"];
    $dic = $_POST["dic"]; 
     $title = $_POST["title"];
     $vkey=md5($title);
    //$size=$_FILES['uploadvideo']['size'];
    $cname=str_replace(" ","_",$name);
    $tmp_name=$_FILES['file']['tmp_name'];
    $target_path="videos/";
    $target_path=$target_path.basename($cname);

    $query="INSERT INTO video (u_nam,vido_name,discription,titlle,video_key)
    VALUES('$u_nam','$cname','$dic','$title','$vkey')  ";

    $res=mysqli_query($con,$query);
    if(move_uploaded_file($_FILES['file']['tmp_name'],$target_path))
    {
        echo "hi";
        echo "Your video ".$cname." has been successfully uploaded";
    }
}
?>

<center>
  <h1 class="h4 text-gray-900 mb-4" style="margin-right: 120px;">Upload Your Video</h1>

 
  <div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-xl-10 col-lg-12 col-md-9">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
               <div class="col-lg-6">
                <div class="p-5">
                  <div class="text-center">
                  </div>

<form method="post" enctype="multipart/form-data">
  <input type="file" name="file"/>
 <hr>
   <br>
<br>
   
<div class="form-group"> 
<input type="Text"name="title"class="form-control form-control-user"style="width: 420px;" placeholder="Title">
  </div>
  <div class="form-group">
<input type="Text"name="dic"class="form-control form-control-user"style="width: 420px;"placeholder="Discription">
  <br>
<br>

  <Input type="submit" class="btn btn-primary pull-right" class="form-group" name="but_upload">

         </div> 
    </center>
 </form>
   </div>
       </div>
    </div>
  </div>
  </div>
  </div>
   </div>
     </div>
  </div>


 
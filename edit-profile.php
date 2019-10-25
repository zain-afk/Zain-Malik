<?php include'components/header.php'; ?>



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
	 	$facebook=$data["facebook"];
	 	$instagram=$data["instagram"];
	 	$twitter=$data["twitter"];
 	}

?>









<?php

if(isset($_POST["updt"]))
{
	
	 $ful_nam=$_POST["ful_nam"];
	 $u_nam=$_GET["u_nam"];
	 $email=$_POST["email"];
	 $dob=$_POST["dob"];
	 $bio=$_POST["bio"];
	 $relation_shp=$_POST["relation_shp"];
	 $facebook=$_POST["facebook"];
	  $instagram=$_POST["instagram"];
	  $twitter=$_POST["twitter"];
 	 
$query="UPDATE singup SET nam='$ful_nam',u_nam='$u_nam',email='$email',dob='$dob',bio='$bio',relation_shp='$relation_shp',facebook='$facebook',instagram='$instagram',twitter='$twitter'  WHERE u_nam='$u_nam'";
	
 	$res=mysqli_query($con,$query);
	
 		if($res)
	{
	   echo "inserted";	
	}
	else
	{
		echo "NOT inserted";
	}	

}


?>

 





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
                    <h1 class="h4 text-gray-900 mb-4">Edit</h1> 
                  </div>
   <form method="post"  enctype="multipart/form-data">
                    <div class="form-group">
                    						 <label >Display Name</label>

 <input type="Text" class="form-control form-control-user" name="ful_nam" aria-describedby="fulnam" placeholder="Display Name" value="<?php echo $nam; ?>">
                    </div>

                      <div class="form-group">
                      <label >UserName</label>

 <input type="text" class="form-control form-control-user" name="u_nam" placeholder="UserName" value="<?php echo $u_nam;?>">
                    </div>
                      

                    <div class="form-group">
                      <label >Eamil</label>

 <input type="text" class="form-control form-control-user" name="email" placeholder="email" value="<?php echo $email;?>">
                    </div>
                     

					<div class="form-group">
					 <label >Date Of Birth</label>
 <input type="date" name="dob" min="1000-01-01"max="3000-12-31" class="form-control" style="border-radius: 20px;" value="<?php echo $dob;?>">
					</div>


					 <div class="form-group">
                      <label >Bio</label>

 <textarea class="form-control form-control-user" name="bio" style="border-radius: 50px;" 
 value="<?php echo $bio;?>">
                      </textarea>
                    </div>

                    	 <div class="form-group">
                      <label >Relationship Status</label>
 						<select name="relation_shp"class="form-control form-control-user" <?php echo $relation_shp;?> >
						    <option value="Single">Single</option>
					 		<option value="In a Relationship">In a Relationship</option>
 						    <option value="Married">Married</option>
						    <option value="Divorced">Divorced</option>
						    <option value="Seprete">Seprete</option>
						    <option value="It's Complicated">It's Complicated</option>

						  </select>              
						        </div>
                     
                    <h3>Social Profile Link</h3>
                    <br>
                    <div class="form-group">
                      <label ><i class="fa fa-facebook" title="Facebook"></i></label>

 <input type="Link" class="form-control form-control-user" name="facebook" placeholder="Facebook" value="<?php echo $facebook;?>">
                    </div>
                     
                          <div class="form-group">
                      <label ><i class="fa fa-instagram" title="instagram"></i></label>

 <input type="Link" class="form-control form-control-user" name="instagram" placeholder="instagram" value="<?php echo $instagram;?>">
                    </div>

                            <div class="form-group">
                      <label ><i class="fa fa-twitter" title="twitter"></i></label>

 <input type="Link" class="form-control form-control-user" name="twitter" placeholder="twitter" value="<?php echo $twitter;?>">
                    </div>

				


 
                     <hr>
 			<input type="submit" value="Save Changes" name="updt" class="btn btn-primary btn-user btn-block">
                     
                   


                  </div>
                 </div>









              </div>

            </div>

          </div>

        </div>

      </div>


    </div>

  </div>

</form>
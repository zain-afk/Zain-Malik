<?php include'components/header.php' ; ?>


  
 
				  	<?php
				   $query="SELECT noti FROM users_fan WHERE fan_to='$u_nam' ";
                    $ress=mysqli_query($con,$query);
                     
                     while ($data=mysqli_fetch_array($ress))
                      {
                        $noti=$data["noti"];
                        
                  ?>

 
   <a class="dropdown-item d-flex align-items-center" href="user-profile.php?user=<?php echo $user_u_nam; ?>">
                  <div class="mr-3">
                    <div class="icon-circle bg-primary">
                      <i class="fas fa-user-alt text-white"></i>
                    </div>
                  </div>
                    <div>
                    <div class="small text-gray-500">December 12, 2019</div>
 <span class="font-weight-bold"><?php echo $noti;?></span>
                  </div>
                </a>
                <hr>

 
                <?php } ?>
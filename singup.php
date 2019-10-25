 





 <?php
  require("config.php");










session_start();
 

if(isset($_POST["SINGUP"]))
{	
	$f_nam=$_POST["f_nam"];
	$email=$_POST["email"];
  $u_nam=$_POST["u_nam"];
  $pass =$_POST["pass"];

  $key=md5($email);

  $query="INSERT INTO singup (nam,email,u_nam,pass,d_pic,v_key) 
  VALUES ('$f_nam','$email','$u_nam','$pass','default.jpg','$key' CURRENT_TIMESTAMP)";
  $res=mysqli_query($con,$query);
  
 
    if($res)
    {
    	$to = $email;
    	$subject = "Email Verification";
    	$message = "<a href=''>Click this link for verification</a> ";
    	$header = "From: zain1706e@aptechorangi.com";

    	mail($to, $subject, $message, $header);
     


    }


  
 


}



 error_reporting(0);
?>
<?php 
if(!empty($_POST["username"])) {
  $query = "SELECT * FROM singup WHERE u_nam='" . $_POST["username"] . "'";
  $user_count = $db_handle->numRows($query);
  if($user_count>0) {
      $success= "<span class='status-not-available'> Username Not Available.</span>";
  }else{
      $noload= "<span class='status-available'> Username Available.</span>";
  }
}
?>
 
<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

 <script src="https://code.jquery.com/jquery-2.1.1.min.js" type="text/javascript"></script>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>











<body >

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
                    <h1 class="h4 text-gray-900 mb-4">Register Here</h1>
                  </div>
                  <form method="post" class="user">
                  	<div class="form-group">
                      <input type="Text" class="form-control form-control-user" name="f_nam"  placeholder="Enter Full Name...">
                    </div>
                    <div class="form-group">
                      <input type="email" class="form-control form-control-user" name="email"  placeholder="Enter Email...">
                    </div>
                    <div class="form-group">
                      <input type="Text" class="form-control form-control-user" name="u_nam"  id="username" placeholder="Enter UserName...">
                    </div>
                    <div class="form-group">
                      <input type="password" class="form-control form-control-user" name="pass" placeholder="Password">
                    </div>
                    <div class="form-group">
                      <div class="custom-control custom-checkbox small">
                        <input type="checkbox" class="custom-control-input" id="customCheck">
                        <label class="custom-control-label" for="customCheck">Remember Me</label>
                      </div>
                    </div>
                    <input type="submit" value="Login" name="SINGUP" class="btn btn-primary btn-user btn-block">
                    <hr>
                    <a href="index.html" class="btn btn-google btn-user btn-block">
                      <i class="fab fa-google fa-fw"></i> Login with Google
                    </a>
                    <a href="index.html" class="btn btn-facebook btn-user btn-block">
                      <i class="fab fa-facebook-f fa-fw"></i> Login with Facebook
                    </a>
                  </form>
                  <hr>
                  <div class="text-center">
                    <a class="small" href="forgot-password.html">Forgot Password?</a>
                  </div>
                  <div class="text-center">
                    <a class="small" href="register.html">Create an Account!</a>
                    

                  </div>
                     <h5><?php echo $success; echo $noload;  ?></h5>
 
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>




  <script type="text/javascript">
  	function checkAvailability() {
$("#loaderIcon").show();
jQuery.ajax({
url: "check_availability.php",
data:'username='+$("#username").val(),
type: "POST",
success:function(data){
$("#user-availability-status").html(data);
$("#loaderIcon").hide();
},
error:function (){}
});
}
  </script>

</body>

</html>

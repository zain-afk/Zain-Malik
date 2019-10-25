  <?php  
include'config.php';
   ?>

<?php
 session_start();
header("Cache-Control: no cache");
  if(isset($_SESSION["u_nam"]))
 $u_nam=$_SESSION["u_nam"];
 error_reporting(0);

 ?>

 
<?php
  
  $query="SELECT * FROM singup WHERE u_nam='$u_nam' ";
  $res=mysqli_query($con,$query);
  while ($data=mysqli_fetch_array($res))

   {

    $nam=$data["nam"];
    $u_nam=$data["u_nam"];
     $d_pic=$data["d_pic"];

   
  }

?>

 

 
    <?php
$u_nam=$_GET["u_nam"]; 
$query="SELECT noti FROM users_fan WHERE fan_to='$u_nam'";
$res=mysqli_query($con,$query);
$countt=mysqli_num_rows($res);
 



?>
 


<?php
  
  $query="SELECT * FROM singup WHERE u_nam='$u_nam' ";
  $res=mysqli_query($con,$query);
  while ($data=mysqli_fetch_array($res))

   {

    $status=$data["status"];
 
   
  }

  if($status==0)
  {
    $error= '  <div class="alert alert-warning">
    <strong>Warning!&nbsp</strong>Your email is not verify yet, please verify your email.
  </div> ';
  }



  ?>

<?php 
 
 if(isset($_SESSION["u_nam"]))
 {
  echo $error;
 }

?>
 
 

 <head>

  <!-- Font -->
   <link rel="stylesheet" href="css2/mystyle.css"/>
   <!-- Custom fonts for this template-->
  <link rel="stylesheet" href="css2/mdb.lite.css"/>

<link rel="stylesheet" href="css2/bootstrap.min.css"/>
<link rel="stylesheet" href="css2/mdb.css"/>
<link rel="stylesheet" href="css2/bootstrap.css"/>
<link rel="stylesheet" href="css2/style.min.css"/>
<link rel="stylesheet" href="css2/mdb.min.css"/>
 <link rel="stylesheet" href="css2/style.css"/>

 <link rel="stylesheet" href="css2/style.css"/>
 <link rel="stylesheet" href="css2/modules/animations-extended.css"/>
 <link rel="stylesheet" href="css2/modules/animations-extended.min.css"/>

 
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/angularjs/1.7.8/angular.min.js"></script>
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
 
  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>
<!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
         
          <!-- Topbar Search -->

            
          <form  method="post" action="serch.php" class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
            <div class="input-group">
              <input type="text" name="serch" class="form-control bg-light border-0 small" placeholder="Search for people and video..." aria-label="Search" aria-describedby="basic-addon2">
              <div class="input-group-append">
                <input type="submit" hidden="" required name="sub" class="btn btn-primary" value="" type="button">
                  
               </div>
            </div>
          </form>
         <?php 
            if(isset($_SESSION["u_nam"]))
            {
            	$u_nam=$_SESSION["u_nam"];
            

            ?>
          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

            <!-- Nav Item - Search Dropdown (Visible Only XS) -->
            <li class="nav-item dropdown no-arrow d-sm-none">
              <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-search fa-fw"></i>
              </a>
              <!-- Dropdown - Messages -->
              <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                <form class="form-inline mr-auto w-100 navbar-search">
                  <div class="input-group">
                    <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                      <button class="btn btn-primary" type="button">
                        <i class="fas fa-search fa-sm"></i>
                      </button>
                    </div>
                  </div>
                </form>
              </div>
             </li>
  


 <li class="nav-item dropdown no-arrow mx-1">
 <a class="nav-link dropdown-toggle" href="shar_vid.php?u_nam=<?php echo $u_nam ?>" id="alertsDropdown">
      <i class="fa fa-video-camera" title="Upload Video"></i>
                 <!-- Counter - Alerts -->
               </a>
              <!-- Dropdown - Alerts -->
             
            </li>



            <!-- Nav Item - Alerts -->
            <li class="nav-item dropdown no-arrow mx-1">
              <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-bell fa-fw"></i>
                <!-- Counter - Alerts -->
                <?php
              if($countt == 0)
              {

              ?>
                <span class="badge badge-danger badge-counter"></span>
              <?php 
            }
              else{
                echo '<span class="badge badge-danger badge-counter"> '.$countt.' </span>';} 

              ?>
              </a>
              <!-- Dropdown - Alerts -->


              <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="alertsDropdown">
                <h6 class="dropdown-header">
                 Notification
                </h6>
                  <?php
  
                    $query="SELECT noti FROM users_fan WHERE fan_to='$u_nam' LIMIT 4";
                    $ress=mysqli_query($con,$query);
                     
                     while ($data=mysqli_fetch_array($ress))
                      {
                        $noti=$data["noti"];
                        
                  ?>
 <a class="dropdown-item d-flex align-items-center" href="user-profile.php">
                  <div class="mr-3">
                    <div class="icon-circle bg-primary">
                      <i class="fas fa-user-alt text-white"></i>
                    </div>
                  </div>
                    <div>
                    <div class="small text-gray-500">December 12, 2019</div>
                    <span class="font-weight-bold"><?php echo $noti ; ?></span>
                  </div>
                </a>
                       <?php } ?>
<center><a href="notification.php" style="text-decoration: none; color: gray;">View All Notification</a> </center> 

             </li>
           
           <!-- Nav Item - Messages -->
            <li class="nav-item dropdown no-arrow mx-1"></li>
            <li class="nav-item dropdown no-arrow mx-1">
              <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-envelope fa-fw"></i>
                <!-- Counter - Messages -->
                <span class="badge badge-danger badge-counter">7</span>
              </a>
              <!-- Dropdown - Messages -->
              <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="messagesDropdown">
                <h6 class="dropdown-header">
                  Inbox
                </h6>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="dropdown-list-image mr-3">
                    <img class="rounded-circle" src="https://source.unsplash.com/fn_BT9fwg_E/60x60" alt="">
                    <div class="status-indicator bg-success"></div>
                  </div>
                  <div class="font-weight-bold">
                    <div class="text-truncate">Hi there! I am wondering if you can help me with a problem I've been having.</div>
                    <div class="small text-gray-500">Emily Fowler · 58m</div>
                  </div>
                </a>
<center><a href="inbox.php?<?php echo $u_nam; ?>" style="text-decoration: none; color: gray;">View All Messege</a> </center> 
             </li>

            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - User Information -->

      
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><b><?php echo $u_nam; ?></b></span>
 <img class="img-profile rounded-circle" style=" background-size: cover; background-image: url(IMAGES/<?php echo $d_pic; ?>); height: 50px;width: 50px;">
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="all-users.php?u_nam=<?php echo $u_nam;?>">
                  <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                  All uesrs
                </a>

                          <a class="dropdown-item" href="my-profile.php?u_nam=<?php echo $u_nam;?>">
                  <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                  Profile
                </a>

                <a class="dropdown-item" href="#">
                  <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                  Settings
                </a>
                <a class="dropdown-item" href="#">
                  <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                  Activity Log
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
                <a class="dropdown-item" href="inbox2.php?msg_from=<?php echo $u_nam; ?>">
                  <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                  MESSENGER
                </a>
              </div>

          <?php }
          else
          {
  
         ?>
        <a href="login.php"> <button class="btn btn-outline-primary waves-effect" style="background-color: white; color: black; width:180px;"> 
<i class="fa fa-user" style="margin-right:12px;"></i> Login</button> </a> 
<?php }
           ?>
            </li>

          </ul>

        </nav>
      </div>
    </div>
  
 <!-- End of Topbar -->








 <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="logout.php">Logout</a>
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

  <!-- Page level plugins -->
  <script src="vendor/chart.js/Chart.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="js/demo/chart-area-demo.js"></script>
  <script src="js/demo/chart-pie-demo.js"></script>

</body>

</html>



  <!-- messege -->

 

<style type="text/css"> 
  /*---------chat window---------------*/
.container
{
    max-width:900px;
}
.inbox_people
 {
  background: #fff;
  float: left;
  overflow: hidden;
  width: 30%;
  border-right: 1px solid #ddd;
}

.inbox_msg
 {
  border: 1px solid #ddd;
  clear: both;
  overflow: hidden;
}

.top_spac 
{
  margin: 20px 0 0;
}

.recent_heading {
  float: left;
  width: 40%;
}

.srch_bar {
  display: inline-block;
  text-align: right;
  width: 60%;
  padding:
}

.headind_srch {
  padding: 10px 29px 10px 20px;
  overflow: hidden;
  border-bottom: 1px solid #c4c4c4;
}

.recent_heading h4 {
  color: #0465ac;
    font-size: 16px;
    margin: auto;
    line-height: 29px;
}

.srch_bar input {
  outline: none;
  border: 1px solid #cdcdcd;
  border-width: 0 0 1px 0;
  width: 80%;
  padding: 2px 0 4px 6px;
  background: none;
}

.srch_bar .input-group-addon button {
  background: rgba(0, 0, 0, 0) none repeat scroll 0 0;
  border: medium none;
  padding: 0;
  color: #707070;
  font-size: 18px;
}

.srch_bar .input-group-addon {
  margin: 0 0 0 -27px;
}

.chat_ib h5 {
  font-size: 15px;
  color: #464646;
  margin: 0 0 8px 0;
}

.chat_ib h5 span {
  font-size: 13px;
  float: right;
}

.chat_ib p {
    font-size: 12px;
    color: #989898;
    margin: auto;
    display: inline-block;
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
}

.chat_img {
  float: left;
  width: 11%;
}

.chat_img img {
  width: 100%
}

.chat_ib {
  float: left;
  padding: 0 0 0 15px;
  width: 88%;
}

.chat_people {
  overflow: hidden;
  clear: both;
}

.chat_list {
  border-bottom: 1px solid #ddd;
  margin: 0;
  padding: 18px 16px 10px;
}

.inbox_chat {
  height: 550px;
  overflow-y: scroll;
}

.active_chat {
  background: #e8f6ff;
}

.incoming_msg_img {
  display: inline-block;
  width: 6%;
}

.incoming_msg_img img {
  width: 100%;
}

.received_msg {
  display: inline-block;
  padding: 0 0 0 10px;
  vertical-align: top;
  width: 92%;
}

.received_withd_msg p {
  background: #ebebeb none repeat scroll 0 0;
  border-radius: 0 15px 15px 15px;
  color: #646464;
  font-size: 14px;
  margin: 0;
  padding: 5px 10px 5px 12px;
  width: 100%;
}

.time_date {
  color: #747474;
  display: block;
  font-size: 12px;
  margin: 8px 0 0;
}

.received_withd_msg {
  width: 57%;
}

.mesgs{
  float: left;
  padding: 30px 15px 0 25px;
  width:70%;
}

.sent_msg p {
  background:#0465ac;
  border-radius: 12px 15px 15px 0;
  font-size: 14px;
  margin: 0;
  color: #fff;
  padding: 5px 10px 5px 12px;
  width: 100%;
}

.outgoing_msg {
  overflow: hidden;
  margin: 26px 0 26px;
}

.sent_msg {
  float: right;
  width: 46%;
}

.input_msg_write input {
  background: rgba(0, 0, 0, 0) none repeat scroll 0 0;
  border: medium none;
  color: #4c4c4c;
  font-size: 15px;
  min-height: 48px;
  width: 100%;
  outline:none;
}

.type_msg {
  border-top: 1px solid #c4c4c4;
  position: relative;
}

.msg_send_btn {
  background: #05728f none repeat scroll 0 0;
  border:none;
  border-radius: 50%;
  color: #fff;
  cursor: pointer;
  font-size: 15px;
  height: 33px;
  position: absolute;
  right: 0;
  top: 11px;
  width: 33px;
}

.messaging {
  padding: 0 0 50px 0;
}

.msg_history {
  height: 516px;
  overflow-y: auto;
}
</style>
 





  <!-- video player -->




<script type="text/javascript">
 $(document).ready(function(){
  //INITIALIZE
  var video = $('#myVideo');
  
  //remove default control when JS loaded
  video[0].removeAttribute("controls");
  $('.control').fadeIn(500);
  $('.caption').fadeIn(500);
 
  //before everything get started
  video.on('loadedmetadata', function() {
      
    //set video properties
    $('.current').text(timeFormat(0));
    $('.duration').text(timeFormat(video[0].duration));
    updateVolume(0, 0.7);
      
    //start to get video buffering data 
    setTimeout(startBuffer, 150);
      
    //bind video events
    $('.videoContainer')
    .hover(function() {
      $('.control').stop().fadeIn();
      $('.caption').stop().fadeIn();
    }, function() {
      if(!volumeDrag && !timeDrag){
        $('.control').stop().fadeOut();
        $('.caption').stop().fadeOut();
      }
    })
    .on('click', function() {
      $('.btnPlay').find('.icon-play').addClass('icon-pause').removeClass('icon-play');
      $(this).unbind('click');
      video[0].play();
    });
  });
  
  //display video buffering bar
  var startBuffer = function() {
    var currentBuffer = video[0].buffered.end(0);
    var maxduration = video[0].duration;
    var perc = 100 * currentBuffer / maxduration;
    $('.bufferBar').css('width',perc+'%');
      
    if(currentBuffer < maxduration) {
      setTimeout(startBuffer, 500);
    }
  };  
  
  //display current video play time
  video.on('timeupdate', function() {
    var currentPos = video[0].currentTime;
    var maxduration = video[0].duration;
    var perc = 100 * currentPos / maxduration;
    $('.timeBar').css('width',perc+'%');  
    $('.current').text(timeFormat(currentPos)); 
  });
  
  //CONTROLS EVENTS
  //video screen and play button clicked
  video.on('click', function() { playpause(); } );
  $('.btnPlay').on('click', function() { playpause(); } );
  var playpause = function() {
    if(video[0].paused || video[0].ended) {
      $('.btnPlay').addClass('paused');
      $('.btnPlay').find('.icon-play').addClass('icon-pause').removeClass('icon-play');
      video[0].play();
    }
    else {
      $('.btnPlay').removeClass('paused');
      $('.btnPlay').find('.icon-pause').removeClass('icon-pause').addClass('icon-play');
      video[0].pause();
    }
  };

  
  //fullscreen button clicked
  $('.btnFS').on('click', function() {
    if($.isFunction(video[0].webkitEnterFullscreen)) {
      video[0].webkitEnterFullscreen();
    } 
    else if ($.isFunction(video[0].mozRequestFullScreen)) {
      video[0].mozRequestFullScreen();
    }
    else {
      alert('Your browsers doesn\'t support fullscreen');
    }
  });
  
  //sound button clicked
  $('.sound').click(function() {
    video[0].muted = !video[0].muted;
    $(this).toggleClass('muted');
    if(video[0].muted) {
      $('.volumeBar').css('width',0);
    }
    else{
      $('.volumeBar').css('width', video[0].volume*100+'%');
    }
  });
  
  //VIDEO EVENTS
  //video canplay event
  video.on('canplay', function() {
    $('.loading').fadeOut(100);
  });
  
  //video canplaythrough event
  //solve Chrome cache issue
  var completeloaded = false;
  video.on('canplaythrough', function() {
    completeloaded = true;
  });
  
  //video ended event
  video.on('ended', function() {
    $('.btnPlay').removeClass('paused');
    video[0].pause();
  });

  //video seeking event
  video.on('seeking', function() {
    //if video fully loaded, ignore loading screen
    if(!completeloaded) { 
      $('.loading').fadeIn(200);
    } 
  });
  
  //video seeked event
  video.on('seeked', function() { });
  
  //video waiting for more data event
  video.on('waiting', function() {
    $('.loading').fadeIn(200);
  });
  
  //VIDEO PROGRESS BAR
  //when video timebar clicked
  var timeDrag = false; /* check for drag event */
  $('.progress').on('mousedown', function(e) {
    timeDrag = true;
    updatebar(e.pageX);
  });
  $(document).on('mouseup', function(e) {
    if(timeDrag) {
      timeDrag = false;
      updatebar(e.pageX);
    }
  });
  $(document).on('mousemove', function(e) {
    if(timeDrag) {
      updatebar(e.pageX);
    }
  });
  var updatebar = function(x) {
    var progress = $('.progress');
    
    //calculate drag position
    //and update video currenttime
    //as well as progress bar
    var maxduration = video[0].duration;
    var position = x - progress.offset().left;
    var percentage = 100 * position / progress.width();
    if(percentage > 100) {
      percentage = 100;
    }
    if(percentage < 0) {
      percentage = 0;
    }
    $('.timeBar').css('width',percentage+'%');  
    video[0].currentTime = maxduration * percentage / 100;
  };

  //VOLUME BAR
  //volume bar event
  var volumeDrag = false;
  $('.volume').on('mousedown', function(e) {
    volumeDrag = true;
    video[0].muted = false;
    $('.sound').removeClass('muted');
    updateVolume(e.pageX);
  });
  $(document).on('mouseup', function(e) {
    if(volumeDrag) {
      volumeDrag = false;
      updateVolume(e.pageX);
    }
  });
  $(document).on('mousemove', function(e) {
    if(volumeDrag) {
      updateVolume(e.pageX);
    }
  });
  var updateVolume = function(x, vol) {
    var volume = $('.volume');
    var percentage;
    //if only volume have specificed
    //then direct update volume
    if(vol) {
      percentage = vol * 100;
    }
    else {
      var position = x - volume.offset().left;
      percentage = 100 * position / volume.width();
    }
    
    if(percentage > 100) {
      percentage = 100;
    }
    if(percentage < 0) {
      percentage = 0;
    }
    
    //update volume bar and video volume
    $('.volumeBar').css('width',percentage+'%');  
    video[0].volume = percentage / 100;
    
    //change sound icon based on volume
    if(video[0].volume == 0){
      $('.sound').removeClass('sound2').addClass('muted');
    }
    else if(video[0].volume > 0.5){
      $('.sound').removeClass('muted').addClass('sound2');
    }
    else{
      $('.sound').removeClass('muted').removeClass('sound2');
    }
    
  };

  //Time format converter - 00:00
  var timeFormat = function(seconds){
    var m = Math.floor(seconds/60)<10 ? "0"+Math.floor(seconds/60) : Math.floor(seconds/60);
    var s = Math.floor(seconds-(m*60))<10 ? "0"+Math.floor(seconds-(m*60)) : Math.floor(seconds-(m*60));
    return m+":"+s;
  };
});
</script>
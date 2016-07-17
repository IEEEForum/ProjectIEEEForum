<!DOCTYPE html>
<html lang="en">
<head>
     
	 <title>Homepage</title>
	 <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" >
	 <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
	 <style>
body {
    background-image: url("");
    background-repeat: no-repeat;
    background-attachment: fixed;
}
</style>
<script>
$(".button-collapse").sideNav();
</script>
	  
</head>
<body>
<!--header starts-->
<div class="navbar-fixed">
<ul id="profile1" class="dropdown-content">
  <li><a href="#!"><i class="material-icons red-text text-darken-2">face</i>Your Profile</a></li>
  <li><a href="#!"><i class="material-icons red-text text-darken-2 ">settings</i>Settings</a></li>
  <li class="divider"></li>
  <li><a href="#!"><i class="material-icons red-text text-darken-2">keyboard_tab</i>Log Out</a></li>
</ul>
    <nav>
      <div class="nav-wrapper">
        <a href="#!" class="brand-logo">JIIT_HELP</a>
		
        <ul class="right hide-on-med-and-down">
          <!--<li><a href="#!"></a></li>-->
		  
        <li><a href="#"><i class="material-icons">home</i></a></li>
        <li><a href="#"><i class="material-icons">contact_phone</i></a></li>
        <li><a href="#"><i class="material-icons">supervisor_account</i></a></li>
      
		  <li><a class="dropdown-button" href="#" data-activates = "profile1"><img src="img/2.jpg" class="circle responsive-img valign profile-post-uer-image" style="margin : 10px;"><i class="material-icons right">arrow_drop_down</i></a></li>
          <li class="active"><a href="#" data-activates = "notification1"><i class="material-icons">notifications_active</i></a></li>
          <li><a href="http://www.jiit.ac.in/"><img src="img/3.jpg" class="circle responsive-img valign profile-post-uer-image" style="margin : 4px;"></a></li>
        </ul>
      </div>
    </nav>
  </div>
  <!--header ends-->
  <!--floatingbutton-->
  <div class="fixed-action-btn" style="bottom: 45px; right: 24px;">
    <a class="btn-floating btn-large red">
      <i class="large material-icons">search</i>
    </a>
    <ul>
      <li><a class="btn-floating red"><i class="material-icons">insert_chart</i></a></li>
      <li><a class="btn-floating yellow darken-1"><i class="material-icons">format_quote</i></a></li>
      <li><a class="btn-floating green"><i class="material-icons">publish</i></a></li>
      <li><a class="btn-floating blue"><i class="material-icons">attach_file</i></a></li>
    </ul>
  </div>
  <!--floating button-->
  <!-- profile-page-wall-posts -->
                <div id="profile-page-wall-posts"class="row">
				<div class="col s3">
				<!--user details
				<div class="col s12 m6 l4">-->
                                <div id="profile-card" class="card">
                                    <div class="card-image waves-effect waves-block waves-light">
                                        <img class="activator" src="img/bg.jpg" alt="user background">
                                    </div>
									<?php
									include 'connection.php';
									
									if($_SESSION['name']!="")
									{	
									$name = "mayank";
									$query = "SELECT * FROM student where name = '$name'";
									$res = mysqli_query($con,$query)or die(mysqli_error($con));
									$row = mysqli_fetch_assoc($res);
                                    echo '<div class="card-content">';
                                    echo '    <img src="'.$row['profilePic'].'" alt="" class="circle responsive-img activator card-profile-image">';
                                     echo '   <a class="btn-floating activator btn-move-up waves-effect red  darken-2 right">';
                                     echo '       <i class="material-icons">account_circle</i>';
                                     echo '   </a>';

                                     echo '   <span class="card-title activator grey-text text-darken-4">'.$row['name'].'</span>';
                                     echo '  <p><i class="mdi-action-perm-identity cyan-text text-darken-2"></i> '.$row['enrol'].'</p>';
                                     echo '   <p><i class="mdi-action-perm-phone-msg cyan-text text-darken-2"></i> '.$row['branch'].'</p>';
                                     echo '   <p><i class="mdi-communication-email cyan-text text-darken-2"></i> '.$row['email'].'</p>';

                                    echo '</div>';
									}
									?>
                                    <div class="card-reveal">
                                        <span class="card-title grey-text text-darken-4">Abcdefgh <i class="material-icons right">close</i></span>
                                        <p><i class="material-icons red-text text-darken-2">description</i>Here is some more information about this card.</p>
                                        <p><i class="material-icons red-text text-darken-2">perm_identity</i>Abcdefgh</p>
                                        <p><i class="material-icons red-text text-darken-2">perm_phone_msg</i> +123456767889</p>
                                        <p><i class="material-icons red-text text-darken-2">email</i> mail@xyz.com</p>
                                        <p><i class="material-icons red-text text-darken-2">cake</i> 18th June 2016</p>
                                        <p><i class="material-icons red-text text-darken-2">airplanemode_active</i> NDLS-IND</p>
                                    </div>
                                </div>
                            <!--</div>-->
				<!--userdetails-->
				 <!-- Faculty About  -->
                <div class="card red lighten-3">
                  <div class="card-content white-text center-align">
                    <p class="card-title"><i class="material-icons">group_add</i>100</p>
                    <p>Registered Faculty</p>
                  </div>                  
                </div>
                <!-- Faculty About  -->
				<!-- Student About  -->
                <div class="card red lighten-2">
                  <div class="card-content white-text center-align">
                    <p class="card-title"><i class="material-icons">group_add</i>100</p>
                    <p>Registered Students</p>
                  </div>                  
                </div>
                <!-- Student About  -->
				<!-- Hubs About  -->
                <div class="card red lighten-3">
                  <div class="card-content white-text center-align">
                    <p class="card-title"><i class="material-icons">group_add</i>100</p>
                    <p>Registered Hubs</p>
                  </div>                  
                </div>
                <!-- Hubs About  -->
				<!-- Hubs About  -->
                <div class="card red lighten-2">
                  <div class="card-content white-text center-align">
                    <p class="card-title"><i class="material-icons">group_add</i>100</p>
                    <p>Registered Alumnis</p>
                  </div>                  
                </div>
                <!-- Hubs About  -->
				</div>
                  <div class="col s6">
				  <!-- Home About  -->
                <div class="card red lighten-1">
                  <div class="card-content white-text">
                    <span class="card-title"><i class="material-icons">child_care</i> WELCOME TO JIIT_HELP FOLKS!</span>
                    <p>I am a very simple card. I am good at containing small bits of information. I am convenient because I require little markup to use effectively.</p>
                  </div>                  
                </div>
                <!-- Home About  -->

                      <!-- medium -->
					  
					  <?php
					  include 'connection.php';
					  $query = "SELECT * FROM post LIMIT 2";
					  $run = mysqli_query($con,$query)or die(mysqli_error($con));
					  $ps = [];
					  $i=0;
					  while($row = mysqli_fetch_assoc($run))
					  {
					  $s = "S";
					  if($row['postedByType']==$s)
					  {
						  $ps[$i] = $row['postId'];
						  $name = $ps[$i];
						$rowpostedBy = $row['postedBy'];
						$quer = "SELECT * FROM student WHERE name='$rowpostedBy'";
						$res = mysqli_query($con,$quer);
						$ro = mysqli_fetch_assoc($res);
						
						echo '<div id="profile-page-wall-post" class="card">';
                        echo '<div class="card-profile-title">';
                        echo  '<div class="row">
                            <div class="col s1">';
                        echo      '<img src="'.$ro['profilePic'].'" alt="" class="circle responsive-img valign profile-post-uer-image" style="margin : 10px">';                        
                        echo  '  </div>
                            <div class="col s10">';
                         echo     '<p class="red-text text-darken-4 margin">'.$ro['name'].'</p>';
                             // <span class="red-text text-darken-1 ultra-small"><i class="material-icons red-text text-darken-2">language</i>Shared publicly  -  26 Jun 2016</span>
                           echo '</div>
                            <div class="col s1 right-align">
                              <i class="material-icons" style="margin : 10px">expand_more</i>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col s12">';
                         echo   '  <p>'.$row['posts'].'</p>';
                           echo '</div>
                          </div>
                        </div>';
						/*if($ro['image']!=NULL){
                        echo '<div class="card-image profile-medium">  ';                        
                         echo ' <img src="'.$ro['image'].'" alt="sample" class="responsive-img profile-post-image profile-medium">';                        
                          //<span class="card-title">Information</span>
                        echo '</div>';
						}*/
						$rowpostid = $row['postId'];
						
						$q = "SELECT * FROM postAnswer WHERE postId='$rowpostid'";
						$r = mysqli_query($con,$q);
						
						while($rr = mysqli_fetch_assoc($r))
						{
							
						
						
                          echo '<div class="card-content">';
						  echo '<p>'.$rr['answeredBy'].' </p><br>';
                          echo '<p>'.$rr['answer'].'</p>';
                         echo '</div>';
                        }
						echo '<div class="card-action row">';
                          /*<div class="col s4 card-action-share">
                            <a href="#">Like</a>                          
                            <a href="#">Share</a>
							<a class="waves-effect waves-light btn red"><i  class="material-icons left">border_color</i>Edit</a>
                          </div>*/
                          
                          echo '<div class="input-field col s8 margin">';
						  echo '<form action="comment.php?name='.$name.'" method="post">';
                           echo ' <input id="profile-comments" type="text" class="validate margin" name="comment">';
                          echo '  <label for="profile-comments" class="">Comments/Questions</label>';
						  echo '<input type="submit" value="Comment" name="submit">';
						  echo '</form>';
                          echo '</div>';                        
                        echo '</div>';                        
                      echo '</div>';
						
						
					  }
					  if($row['postedByType']=='F')
					  {
					  }
					  if($row['postedByType']=='A')
					  {
					  }
					  $i++;
                      }
					  
					  ?>
					  <!--one more-->
					  <div id="profile-page-wall-post" class="card">
                        <div class="card-profile-title">
                          <div class="row">
                            <div class="col s1">
                              <img src="img/1.jpg" alt="" class="circle responsive-img valign profile-post-uer-image" style="margin : 10px">                        
                            </div>
                            <div class="col s10">
                              <p class="red-text text-darken-4 margin">Abcdef</p>
                              <span class="red-text text-darken-1 ultra-small"><i class="material-icons red-text text-darken-2">language</i>Shared publicly  -  26 Jun 2016</span>
                            </div>
                            <div class="col s1 right-align">
                              <i class="material-icons" style="margin : 10px">expand_more</i>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col s12">
                              <p>I am a very simple wall post. I am good at containing <a href="#">#small</a> bits of <a href="#">#information</a>.  I require little more information to use effectively.</p>
                            </div>
                          </div>
                        </div>
                        <div class="card-image profile-medium">                          
                          <img src="img/bg.jpg" alt="sample" class="responsive-img profile-post-image profile-medium">                        
                          <span class="card-title">Information</span>
                        </div>
                        <div class="card-content">
                          <p>I am a very simple card. I am good at containing small bits of information. I am convenient because I require little markup to use effectively.</p>
                        </div>
                        <div class="card-action row">
                          <div class="col s4 card-action-share">
                            <a href="#">Like</a>                          
                            <a href="#">Share</a>
							<a class="waves-effect waves-light btn red"><i  class="material-icons left">border_color</i>Edit</a>
                          </div>
                          
                          <div class="input-field col s8 margin">
                            <input id="profile-comments" type="text" class="validate margin">
                            <label for="profile-comments" class="">Comments/Questions</label>
                          </div>                        
                        </div>                        
                      </div>
					  <!--one more-->
					  </div>
					  <div class="col s3">
					         <ul id="task-card" class="collection with-header">
                                    <li class="collection-header red">
                                        <h4 class="task-card-title"><i class="material-icons">whatshot</i>News Feed</h4>
                                        <p class="task-card-date"><i class="material-icons">date_range</i>June 21, 2016</p>
                                    </li>
                                    <li class="collection-item dismissable">
                                       
                                        <label for="task1"><i class="material-icons">announcement</i>Create Mobile App UI. <a href="#" class="secondary-content"><span class="ultra-small">Today</span></a>
                                        </label>
                                        <!--<span class="new badge">App</span>-->
                                    </li>
                                    <li class="collection-item dismissable">
                                        
                                        <label for="task2"><i class="material-icons">announcement</i>Check the new API standerds. <a href="#" class="secondary-content"><span class="ultra-small">Monday</span></a>
                                        </label>
                                        <!--<span class="new badge">API</span>-->
                                    </li>
                                    <li class="collection-item dismissable">
                                        
                                        <label for="task3"><i class="material-icons">announcement</i>Check the new Mockup of ABC. <a href="#" class="secondary-content"><span class="ultra-small">Wednesday</span></a>
                                        </label>
                                        <!--<span class="new badge">Mockup</span>-->
                                    </li>
                                    <li class="collection-item dismissable">
                                        
                                        <label for="task4"><i class="material-icons">announcement</i>I did it !<a href="#" class="secondary-content"><span class="ultra-small">10hrsago</span></a></label>
                                        <!--<span class="new badge">Mobile</span>-->
                                    </li>
									<li class="collection-item dismissable">
                                        
                                        <label for="task2"><i class="material-icons">announcement</i>Check the new API standerds. <a href="#" class="secondary-content"><span class="ultra-small">Monday</span></a>
                                        </label>
                                        <!--<span class="new badge">API</span>-->
                                    </li>
									<li class="collection-item dismissable">
                                        
                                        <label for="task4"><i class="material-icons">announcement</i>I did it !<a href="#" class="secondary-content"><span class="ultra-small">JustNow</span></a></label>
                                        <!--<span class="new badge">Mobile</span>-->
                                    </li>
                                </ul>
					  </div>
					  <!---->
					  </div>
					  <!-- START FOOTER -->
  <footer class="page-footer">
    <div class="footer-copyright">
      <div class="container">
        <span>Copyright © 2016 <a class="white-text text-lighten-4" href="#" target="_blank">Jiit_Help</a> All rights reserved.</span>
        <span class="right"> Design and Developed by <a class="white-text text-lighten-4" href="#">Jiit_Help</a></span>
        </div>
    </div>
  </footer>
  <!-- END FOOTER -->
<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script type="text/javascript" src="js/materialize.min.js"></script>
 <!-- Toast Notification -->
    <script type="text/javascript">
    // Toast Notification
    $(window).load(function() {
        setTimeout(function() {
            Materialize.toast('<span>Hi Folks ! It is JIIT_HELP.</span>', 1500);
        }, 1900);
        setTimeout(function() {
            Materialize.toast('<span>You can hangout here too!</span>', 3000);
        }, 5000);
		setTimeout(function() {
            Materialize.toast('<span>Enjoy with peers more closer in JIIT!</span>', 9000);
        }, 10000);
        setTimeout(function() {
            Materialize.toast('<span>Get more details about us!</span><a class="btn-flat yellow-text" href="#">Read<a>', 15000);
        }, 16000);
    });</script>
</body>
</html>

<?php
/* Displays user information and some useful messages */
session_start();

// Check if user is logged in using the session variable
if ( $_SESSION['logged_in'] != 1 ) {
  $_SESSION['message'] = "You must log in before viewing your profile page!";
  header("location: error.php");    
}
else {
    // Makes it easier to read
    $first_name = $_SESSION['first_name'];
    $last_name = $_SESSION['last_name'];
    $email = $_SESSION['email'];
    $active = $_SESSION['active'];
}
?>
<!DOCTYPE html>
<html >
   <head>
      <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Welcome <?= $first_name.' '.$last_name ?></title>
      
       <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="assets/css/Footer-Dark.css">
    <link rel="stylesheet" href="assets/css/Highlight-Clean.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.1.1/aos.css">
    <link rel="stylesheet" href="assets/css/Login-Form-Clean.css">
    <link rel="stylesheet" href="assets/css/Navigation-Clean1.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/untitled.css">
   </head>

  <body>
    
  
      <div>
               
              
            <p>
          <?php 
     
          // Display message about account verification link only once
          if ( isset($_SESSION['message']) )
          {
              echo $_SESSION['message'];
              
              // Don't annoy the user with more messages upon page refresh
              unset( $_SESSION['message'] );
          }
          
          ?>
         <?php
          
          // Keep reminding the user this account is not active, until they activate
          if (!$active){
              
              $_SESSION['message'] = "Account not verified .Please verify the "
                      . "account using the link send to your $email";
              header("location: error.php");    
          }
          
          ?>
            </p>
          
          
                        
   <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
              <script src="js/index.js"></script>
            
          
    
              
              
               
    
  <header class="hidden-sm hidden-md hidden-lg">
        <div class="searchbox">
            <form>
                <h1 class="text-left">Social Network</h1>
                <div class="searchbox"><i class="glyphicon glyphicon-search"></i>
                    <input class="form-control" type="text">
                </div>
                <div class="dropdown">
                    <button class="btn btn-link dropdown-toggle" data-toggle="dropdown" aria-expanded="false" type="button"><?= $email ?> <span class="caret"></span></button>
                    <ul class="dropdown-menu dropdown-menu-right" role="menu">
                        <li role="presentation"><a href="#"><?php echo $first_name.' '.$last_name; ?></a></li>
                        <li class="divider" role="presentation"></li>
                        
                        <li role="presentation"><a href="logout.php">Logout </a></li>
                    </ul>
                </div>
            </form>
        </div>
        <hr>
    </header>
    <div>
        <nav class="navbar navbar-default hidden-xs navigation-clean">
            <div class="container">
                <div class="navbar-header"><a class="navbar-brand navbar-link" href="#"><i class="icon ion-ios-navigate"></i></a>
                    <button class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
                </div>
                <div class="collapse navbar-collapse" id="navcol-1">
                    <form class="navbar-form navbar-left">
                        <div class="searchbox"><i class="glyphicon glyphicon-search"></i>
                            <input class="form-control" type="text">
                        </div>
                    </form>
                    <ul class="nav navbar-nav hidden-md hidden-lg navbar-right">
                        <li role="presentation"><a href="#"><?php echo $first_name.' '.$last_name; ?> </a></li>
                        <li class="dropdown open"><a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true" href="#"><?= $email ?> <span class="caret"></span></a>
                            <ul class="dropdown-menu dropdown-menu-right" role="menu">
                                <li role="presentation"><a href="#">My Profile</a></li>
                                <li class="divider" role="presentation"></li>
                                
                                <li role="presentation"><a href="logout.php">Logout </a></li>
                            </ul>
                        </li>
                    </ul>
                    <ul class="nav navbar-nav hidden-xs hidden-sm navbar-right">
                        <li role="presentation"><a href="http://localhost/Social/Home.php">Timeline</a></li>
                        
                        <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false" href="#"><?php echo $first_name.' '.$last_name; ?> <span class="caret"></span></a>
                            <ul class="dropdown-menu dropdown-menu-right" role="menu">
                                <li role="presentation"><?= $email ?></li>
                                <li class="divider" role="presentation"></li>
                                
                                <li role="presentation"><a href="logout.php">Logout </a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
    <div class="container">
        <h1><?php echo $first_name.' '.$last_name; ?><i class="glyphicon glyphicon-ok-sign verified" data-toggle="tooltip" title="Verified User" style="font-size:28px;color:#da052b;"></i></h1></div>
    <div>
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <ul class="list-group">
                        <li class="list-group-item"><span><strong>About Me</strong></span>
                            <p>Welcome to my profile bla bla&nbsp;bla bla&nbsp;bla bla&nbsp;bla bla&nbsp;bla bla&nbsp;bla bla&nbsp;bla bla&nbsp;bla bla&nbsp;bla bla&nbsp;bla bla&nbsp;bla bla&nbsp;bla bla&nbsp;bla bla&nbsp;bla bla&nbsp;bla bla&nbsp;bla bla&nbsp;</p>
                        </li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <ul class="list-group">
                        <li class="list-group-item">
                            <blockquote>
                                <p>@Francis Hello World</p>
                                <footer>Posted by howCode on 12/11/17
                                    <button class="btn btn-default" type="button" style="color:#eb3b60;background-image:url(&quot;none&quot;);background-color:transparent;"> <i class="glyphicon glyphicon-heart" data-aos="flip-right"></i><span> 5 Likes</span></button>
                                    <button class="btn btn-default comment" type="button" style="color:#eb3b60;background-image:url(&quot;none&quot;);background-color:transparent;">
                                    <i class="glyphicon glyphicon-flash" style="color:#f9d616;"></i><span style="color:#f9d616;"> 2 Comments</span></button>
                                </footer>
                            </blockquote>
                        </li>
                        <li class="list-group-item">
                            <blockquote>
                                <p>@Francis Hello World</p>
                                <footer>Posted by howCode on 12/11/17
                                    <button class="btn btn-default" type="button" style="color:#eb3b60;background-image:url(&quot;none&quot;);background-color:transparent;"> <i class="glyphicon glyphicon-heart" data-aos="flip-right"></i><span> 5 Likes</span></button>
                                    <button class="btn btn-default comment" type="button" style="color:#eb3b60;background-image:url(&quot;none&quot;);background-color:transparent;">
                                    <i class="glyphicon glyphicon-flash" style="color:#f9d616;"></i><span style="color:#f9d616;"> 2 Comments</span></button>
                                </footer>
                            </blockquote>
                        </li>
                        <li class="list-group-item">
                            <blockquote>
                                <p>@Francis Hello World</p>
                                <footer>Posted by howCode on 12/11/17
                                    <button class="btn btn-default" type="button" style="color:#eb3b60;background-image:url(&quot;none&quot;);background-color:transparent;"> <i class="glyphicon glyphicon-heart" data-aos="flip-right"></i><span> 5 Likes</span></button>
                                    <button class="btn btn-default comment" type="button" style="color:#eb3b60;background-image:url(&quot;none&quot;);background-color:transparent;">
                                    <i class="glyphicon glyphicon-flash" style="color:#f9d616;"></i><span style="color:#f9d616;"> 2 Comments</span></button>
                                </footer>
                            </blockquote>
                        </li>
                        <li class="list-group-item">
                            <blockquote>
                                <p>@Francis Hello World</p>
                                <footer>Posted by howCode on 12/11/17
                                    <button class="btn btn-default" type="button" style="color:#eb3b60;background-image:url(&quot;none&quot;);background-color:transparent;"> <i class="glyphicon glyphicon-heart" data-aos="flip-right"></i><span> 5 Likes</span></button>
                                    <button class="btn btn-default comment" type="button" style="color:#eb3b60;background-image:url(&quot;none&quot;);background-color:transparent;">
                                    <i class="glyphicon glyphicon-flash" style="color:#f9d616;"></i><span style="color:#f9d616;"> 2 Comments</span></button>
                                </footer>
                            </blockquote>
                        </li>
                        <li class="list-group-item">
                            <blockquote>
                                <p>@Francis Hello World</p>
                                <footer>Posted by howCode on 12/11/17
                                    <button class="btn btn-default" type="button" style="color:#eb3b60;background-image:url(&quot;none&quot;);background-color:transparent;"> <i class="glyphicon glyphicon-heart" data-aos="flip-right"></i><span> 5 Likes</span></button>
                                    <button class="btn btn-default comment" type="button" style="color:#eb3b60;background-image:url(&quot;none&quot;);background-color:transparent;">
                                    <i class="glyphicon glyphicon-flash" style="color:#f9d616;"></i><span style="color:#f9d616;"> 2 Comments</span></button>
                                </footer>
                            </blockquote>
                        </li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <button class="btn btn-default" type="button" style="width:100%;background-image:url(&quot;none&quot;);background-color:#da052b;color:#fff;padding:16px 32px;margin:0px 0px 6px;border:none;box-shadow:none;text-shadow:none;opacity:0.9;text-transform:uppercase;font-weight:bold;font-size:13px;letter-spacing:0.4px;line-height:1;outline:none;">NEW POST</button>
                    <ul class="list-group"></ul>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-dark">
        <footer>
            <div class="container">
                <p class="copyright">Social Network© 2016</p>
            </div>
        </footer>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/bs-animation.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.1.1/aos.js"></script>
    <script type="text/javascript">

  
  
  
  
  
  
      </body>
</html>

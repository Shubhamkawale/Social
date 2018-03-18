<?php 
/* Main page with two forms: sign up and log in */
require 'db.php';
session_start();
?>
<!DOCTYPE html>
<html>
<head>
  <title>Sign-Up/Login Form</title>
  <?php include 'css/css.html'; ?>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="assets/css/Footer-Dark.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.1.1/aos.css">
    <link rel="stylesheet" href="assets/css/Login-Form-Clean.css">
    <link rel="stylesheet" href="assets/css/Navigation-Clean1.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/untitled.css">
</head>

<?php 
if ($_SERVER['REQUEST_METHOD'] == 'POST') 
{
    if (isset($_POST['login'])) { //user logging in

        require 'login.php';
        
    }
    
    elseif (isset($_POST['register'])) { //user registering
        
        require 'register.php';
        
    }
}
?>
<body>
    
    <header class="hidden-sm hidden-md hidden-lg">
        <div class="searchbox">
            <form>
                <h1 class="text-left">Social</h1>
                <div class="searchbox"><i class="glyphicon glyphicon-search"></i>
                    <input class="form-control" type="text">
                </div>
                <div class="dropdown">
                    <button class="btn btn-link dropdown-toggle" data-toggle="dropdown" aria-expanded="false" type="button">MENU <span class="caret"></span></button>
                    <ul class="dropdown-menu dropdown-menu-right" role="menu">
                        <li role="presentation"><a href="#">Locations</a></li>
                        <li class="divider" role="presentation"></li>
                        <li role="presentation"><a href="#">Mumbai </a></li>
                        <li role="presentation"><a href="#">Pune </a></li>
                        <li role="presentation"><a href="#">Nakshik </a></li>
                        <li role="presentation"><a href="#">Nagpur</a></li>
                        <li role="presentation"><a href="#">Aurangabad </a></li>
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
                        <li role="presentation"><a href="#">My Timeline</a></li>
                        <li class="dropdown open"><a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true" href="#">Menu <span class="caret"></span></a>
                            <ul class="dropdown-menu dropdown-menu-right" role="menu">
                                <li role="presentation"><a href="#">Locations</a></li>
                        <li class="divider" role="presentation"></li>
                        <li role="presentation"><a href="#">Mumbai </a></li>
                        <li role="presentation"><a href="#">Pune </a></li>
                        <li role="presentation"><a href="#">Nakshik </a></li>
                        <li role="presentation"><a href="#">Nagpur</a></li>
                        <li role="presentation"><a href="#">Aurangabad </a></li>
                            </ul>
                        </li>
                    </ul>
                    <ul class="nav navbar-nav hidden-xs hidden-sm navbar-right">
                        <li  role="presentation"><a href="http://localhost/Social/Home.php">Timeline</a></li>
                        <li class="active" role="presentation"><a href="http://localhost/Social/index.php">SignUp/SignIn</a></li>
                        
                        <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false" href="#">Menu <span class="caret"></span></a>
                            <ul class="dropdown-menu dropdown-menu-right" role="menu">
                               <li role="presentation"><a href="#">Locations</a></li>
                        <li class="divider" role="presentation"></li>
                        <li role="presentation"><a href="#">Mumbai </a></li>
                        <li role="presentation"><a href="#">Pune </a></li>
                        <li role="presentation"><a href="#">Nakshik </a></li>
                        <li role="presentation"><a href="#">Nagpur</a></li>
                        <li role="presentation"><a href="#">Aurangabad </a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
    
    
    <div class="form">
      
      <ul class="tab-group">
        <li class="tab"><a href="#signup">Sign Up</a></li>
        <li class="tab active"><a href="#login">Log In</a></li>
      </ul>
      
      <div class="tab-content">

         <div id="login">   
          <h1>Welcome Back!</h1>
          
          <form action="index.php" method="post" autocomplete="off">
          
            <div class="field-wrap">
            <label>
              Email Address<span class="req1">*</span>
            </label>
            <input type="email" required autocomplete="on" name="email"/>
          </div>
          
          <div class="field-wrap">
            <label>
              Password<span class="req1">*</span>
            </label>
            <input type="password" required autocomplete="off" name="password"/>
          </div>
          
          <p class="forgot"><a href="forgot.php">Forgot Password?</a></p>
          
          <button class="button button-block" name="login" />Log In</button>
          
          </form>

        </div>
          
        <div id="signup">   
          <h1>Sign Up for Free</h1>
          
          <form action="index.php" method="post" autocomplete="off">
          
          <div class="top-row">
            <div class="field-wrap">
              <label>
                First Name<span class="req">*</span>
              </label>
              <input type="text" required autocomplete="off" name='firstname' />
            </div>
        
            <div class="field-wrap">
              <label>
                Last Name<span class="req">*</span>
              </label>
              <input type="text"required autocomplete="off" name='lastname' />
            </div>
          </div>

          <div class="field-wrap">
            <label>
              Email Address<span class="req">*</span>
            </label>
            <input type="email"required autocomplete="off" name='email' />
          </div>
          
          <div class="field-wrap">
            <label>
              Set A Password<span class="req">*</span>
            </label>
            <input type="password"required autocomplete="off" name='password'
                   pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
                   title="Must contain at least one number and one uppercase and
                   lowercase letter, and at least 8 or more characters" required/>
          </div>
          
          <button type="submit" class="button button-block" name="register" />Register</button>
          
          </form>

        </div>  
      </div><!-- tab-content -->
      
</div> <!-- /form -->
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script src="js/index.js"></script>
    
    
    
    <div class="container">
        
        <div class="timelineposts">

        </div>
    </div>
    <div class="modal fade" role="dialog" tabindex="-1" style="padding-top:100px;">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                    <h4 class="modal-title">Comments</h4></div>
                <div class="modal-body" style="max-height: 400px; overflow-y: auto">
                    <p>The content of your modal.</p>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-default" type="button" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-dark navbar-fixed-bottom" style="position: relative">
        
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/bs-animation.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.1.1/aos.js"></script>
    <script type="text/javascript">
    
    
  
<footer>
            <div class="container">
                <p class="copyright">Social.com</p>
            </div>
        </footer>
</body>
</html>

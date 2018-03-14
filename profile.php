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
  <meta charset="UTF-8">
  <title>Welcome <?= $first_name.' '.$last_name ?></title>
  <?php include 'css/css.html'; ?>
</head>

<body>
    
<div>
    <header>
       
            
            
                
                    <div class="col75">   
                        <h1>Social</h1>
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
          </p>
          
          <?php
          
          // Keep reminding the user this account is not active, until they activate
          if ( !$active ){
              /*echo
              '<div class="info">
              Account is unverified, please confirm your email by clicking
              on the email link!
              </div>';*/
              $_SESSION['message'] = "Account not verified .Please verify the "
                      . "account using the link send to your $email";
  header("location: error.php");    
          }
          
          ?>
                        </div>
                    <div class="col25">
          <a href="logout.php"><button class="button1" name="logout"/>Log Out</button></a>
          <h2><?php echo $first_name.' '.$last_name; ?></h2>
          <p><?= $email ?></p>
                    
        </div>                
          
        

        
        
    </header><br><br>
    <div>
        
        
        <div class="col75">
        <select name="Location" class="col">
            <option>Mumbai</option>
            <option>Pune</option>
        </select>
    </div>
        
    
    
    <div>
        
        
        
    <article class="col75">
        <input type="text" /> 
    </article>          
    <aside class="col25">
        <input type="text" name="userpost" />               
        <button name="submit" class="button1">Submit</button>
    </aside></div>
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    <footer>
        <a href="Aboutus.php" ><p>About Us</p></a>
    </footer>
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src="js/index.js"></script>
</div>
</body>
</html>

<?php
// if user session value isn't set, redirect to login page
  session_start();
  if(!isset($_SESSION['LOGIN_STATUS'])){
      
      header('location:index.php'); 
  }
?>
<html>
<body>

        <!--print welcome message-->
    
        <h1>Welcome <?php echo $_SESSION['UNAME'];?></h1>
         
        
         <a href="logout.php" title="logout"><h1>Logout</h1></a>

         

    
            
    

    

</body>
</html>



<script src="sweet\node_modules\sweetalert\dist\sweetalert.min.js"></script>
<link rel="stylesheet" type="text/css" href="sweet\node_modules\sweetalert\dist\sweetalert.css">
<?php
include('db.php');
session_start();
// If form submitted, insert values into the database.
if (isset($_POST['username'])){
        // removes backslashes
 $username = stripslashes($_REQUEST['username']);
        //escapes special characters in a string
 $username = mysqli_real_escape_string($con,$username);
 $password = stripslashes($_REQUEST['password']);
 $password = mysqli_real_escape_string($con,$password);
 //Checking is user existing in the database or not
        $query = "SELECT * FROM `administrator` WHERE username= '$username'
and password= '$password'";
 $result = mysqli_query($con,$query) or die(mysql_error());
 $rows = mysqli_num_rows($result);
      if($rows==1){
     $_SESSION['username'] = $username;
      header('refresh:0; url=http://localhost/CBRsystem/login.php?success=1');
         }
      else{
      header('refresh:0; url=http://localhost/CBRsystem/login.php?error=1');
 }
}
?>



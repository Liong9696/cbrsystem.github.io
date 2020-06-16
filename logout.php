<?php
session_start();
// Destroying All Sessions
if(session_destroy())
{
// Redirecting To Home Page
echo "<script type='text/javascript'>alert('You are logged out!')</script>";
header('refresh:0; url=http://localhost/CBRsystem/index.php');
}
?>


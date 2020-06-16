<?php
$con = mysqli_connect("localhost","root","","dbphpsearch") or die(mysqli_error($con));

$name = '';
$email = '';
$phone = '';
$message = '';

    if (isset($_GET['submit'])) {
        $name = $_GET['name'];
        $phone = $_GET['phone'];
        $email = $_GET['email'];
        $message = $_GET['message'];

        $insert="INSERT INTO contact (contact_name, contact_phone, contact_email, contact_message) VALUES('$name','$phone', '$email', '$message')";
        $query=mysqli_query($con,$insert) or die(mysqli_error($con));

        echo "<script type='text/javascript'>alert('Submit successfully!')</script>";
        header('refresh:0; url=http://localhost/CBRsystem/contactus.php');
    }
?>
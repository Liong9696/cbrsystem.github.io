<?php

session_start();

$con = mysqli_connect("localhost","root","","dbphpsearch") or die(mysqli_error($con));

$id = 0;
$update = false;
$problem = '';
$solution = '';
$solution1 = '';

if (isset($_POST['add'])){

    $problem = $_POST['problem'];
    $solution = $_POST['solution'];
    $solution1 = $_POST['solution1'];

    $check_duplicate_problem = "SELECT p_title, s_text, s_text1 FROM solution WHERE p_title = '$problem', s_text='$solution' AND s_text='$solution1'";
    $result = mysqli_query($con, $check_duplicate_problem);
    $count = mysqli_num_rows($result);
    if($count>0){
        $_SESSION['message'] = "Record already exist!";
        header("location: datamanagement.php");
        return false;
    }

    $insert="INSERT INTO solution (p_title, s_text, s_text1) VALUES('$problem','$solution','$solution1')";
    $query=mysqli_query($con,$insert) or die(mysqli_error($con));
    if($query==1)
    {
        $ins="INSERT INTO problem (p_title) VALUES('$problem')";
        $quey=mysqli_query($con,$ins) or die(mysqli_error($con));
    }

    $_SESSION['message'] = "Record has been added!";
    $_SESSION['msg_type'] = "success";

    header("location: datamanagement.php");
}

if (isset($_GET['delete'])){
    $id = $_GET['delete'];

    $insert="DELETE FROM solution WHERE s_id=$id";
    $query=mysqli_query($con,$insert) or die(mysqli_error($con));
    if($query==1)
    {
        $ins="DELETE FROM problem WHERE p_id=$id";
        $quey=mysqli_query($con,$ins) or die(mysqli_error($con));
    }

    $_SESSION['message'] = "Record has been deleted!";
    $_SESSION['msg_type'] = "danger";

    header("location: datamanagement.php");
}

if (isset($_GET['edit'])){
    $id = $_GET['edit'];
    $update = true;
    $result = $con->query("SELECT p_title, s_text, s_text1 FROM solution WHERE s_id=$id") or die($con->error());
    if ($result->num_rows == 1){
        $row = $result->fetch_array();
        $problem = $row['p_title'];
        $solution = $row['s_text'];
        $solution1 = $row['s_text1'];
    }   
}

if (isset($_POST['update'])){
    $id = $_POST['id'];
    $problem = $_POST['problem'];
    $solution = $_POST['solution'];
    $solution1 = $_POST['solution1'];

    $insert="UPDATE solution SET p_title='$problem', s_text='$solution', s_text1='$solution1' WHERE s_id=$id";
    $query=mysqli_query($con,$insert) or die(mysqli_error($con));
    if($query==1)
    {
        $ins="UPDATE problem SET p_title='$problem' WHERE p_id=$id";
        $quey=mysqli_query($con,$ins) or die(mysqli_error($con));
    }

    $_SESSION['message'] = "Record has been updated!";
    $_SESSION['msg_type'] = "warning";

    header("location: datamanagement.php");
}
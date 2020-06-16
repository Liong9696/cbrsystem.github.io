<?php

session_start();

$con = mysqli_connect("localhost","root","","dbphpsearch") or die(mysqli_error($con));

$id = 0;
$update = false;
$problem = '';
$solution = '';

if (isset($_POST['add'])){
    $solution = $_POST['solution'];

    $con->query("INSERT INTO solution (s_text) VALUES('$solution')") or die($con->error);

    $_SESSION['message'] = "Record has been added!";
    $_SESSION['msg_type'] = "success";

    header("location: solutionmanage.php");
}

if (isset($_GET['delete'])){
    $id = $_GET['delete'];
    $con->query("Delete FROM problem WHERE p_id=$id") or die($con->error());

    $_SESSION['message'] = "Record has been deleted!";
    $_SESSION['msg_type'] = "danger";

    header("location: datamanagement.php");
}

if (isset($_GET['edit'])){
    $id = $_GET['edit'];
    $update = true;
    $result = $con->query("SELECT * FROM problem WHERE p_id=$id") or die($con->error());
    if ($result->num_rows == 1){
        $row = $result->fetch_array();
        $problem = $row['p_title'];
    }   
}

if (isset($_POST['update'])){
    $id = $_POST['id'];
    $problem = $_POST['problem'];

    $con->query("UPDATE problem p1 JOIN solution s1 ON (p1.p_id = s1.s_id) SET p1.p_title='$problem', s1.p_title='$problem' WHERE p1.p_id=$id And s1.s_id=$id") or die($con->error);

    $_SESSION['message'] = "Record has been updated!";
    $_SESSION['msg_type'] = "warning";

    header("location: datamanagement.php");
}
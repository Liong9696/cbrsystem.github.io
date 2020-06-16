<?php
$con = mysqli_connect("localhost","root","","dbphpsearch");
$request = mysqli_real_escape_string($con, $_POST["query"]);
$query = "SELECT DISTINCT p_title FROM problem WHERE p_title LIKE '%".$request."%'";
    
$result = mysqli_query($con, $query);

$data = array();

if(mysqli_num_rows($result) > 0)
{
    while($row = mysqli_fetch_assoc($result))
    {
        $data[] = $row["p_title"];
    }
    echo json_encode($data);
}

?>
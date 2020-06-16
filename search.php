<?php
    include 'header.php';
?>

<h1>Problem</h1>

<body style="background:url(img/background.jpg);background-repeat:no-repeat;background-size:100%">
<div class="problem-container">
<?php
$search = '';

if (empty($_GET['search'])){
    header("Location: index.php");
}
    if (isset($_GET['submit-search'])) {
        $search = $_GET['search'];
        $insert="INSERT INTO search (searchTitle) VALUES('$search')";
        $query=mysqli_query($con,$insert) or die(mysqli_error($con));

        $search = mysqli_real_escape_string($con, $_GET['search']);
        $sql = "SELECT DISTINCT p_title FROM problem WHERE p_title LIKE '%$search%' ORDER BY p_title";
        $result = mysqli_query($con, $sql);
        $queryResult = mysqli_num_rows($result);

        echo "<br><p>There are ".$queryResult." results found!"."<br>"."<br></p>";

        if ($queryResult > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<a href='solution.php?title=".$row['p_title']."'><div class='problem-box'>
                    <h3>".$row['p_title']."</h3><br>
                    </div></a>";
            }   
        }
        else {
            echo "There are no results matching your search!";
        } 
}
echo '<br><a href="index.php" class="back" style="color:black;text-decoration:none;padding-left:50px">Go Back</a>';   
?>
</div>
</body>
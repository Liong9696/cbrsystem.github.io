<?php
    include 'dbs.php';
?>
<link rel="stylesheet" href="css/solutionpage.css?v=<?php echo time();?>">
<h1>Solution:</h1>

<body style="background:url(img/background.jpg);background-repeat:no-repeat;background-size:100%">
<div class="solution-container">

<?php
    $title = mysqli_real_escape_string($con, $_GET['title']);

    $sql = "SELECT * FROM solution WHERE p_title='$title'";
    $result = mysqli_query($con, $sql);
    $queryResult = mysqli_num_rows($result);

    if ($queryResult > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<div class='solution-box'><br>
                <p>".$row['s_text']."</p>
                <p>".$row['s_text1']."</p>
                </div>";
        }   
    }
    echo '<br><a href="index.php" class="back">Go Back</a>';  
?>
</div>
</body>
</html>



<?php
    include 'dbs.php';
?>

<head>
<title>Client Service</title>
<link rel="stylesheet" href="css/dm.css?v=<?php echo time();?>">
<script defer src= "https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</head>

<!-----NavigationBar----->
<section id="nav-bar">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#"><img src="img/clientservice.jpg"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="admin.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="menu-active" href="datamanagement.php">Data Management</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="report.php">Report</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="logout.php">Logout</a>
            </li>
          </ul>
        </div>
      </nav>
</section>

<body style="background:url(img/background.jpg);background-repeat:no-repeat;background-size:100%">

<?php require_once 'solutionprocess.php'; ?>

<?php
if (isset($_SESSION['message'])): ?>

<div class="alert alert-<?=$_SESSION['msg_type']?>">

  <?php
      echo $_SESSION['message'];
      unset($_SESSION['message']);
  ?>
</div>
<?php endif ?>
<div class="container">
<?php
    $con = mysqli_connect("localhost","root","","dbphpsearch") or die(mysqli_error($con));
    $result = $con->query("SELECT * FROM solution") or die($con->error);
?>

<div class="row justify-content-center">
    <table class="table">
        <thead>
            <tr>
                <th>Solution</th>
                <th colspan="2">Action</th>
            </tr>
        </thead>
<?php
    $title = mysqli_real_escape_string($con, $_GET['title']);
    
    $sql = "SELECT * FROM solution WHERE p_title='$title'";
    $result = mysqli_query($con, $sql);
    $queryResult = mysqli_num_rows($result);

    if ($queryResult > 0)
            while($row = $result->fetch_assoc()): 
                echo "<div>
                <h2>".$row['p_title']."</h2>
                </div>";?>
                <tr>
                    <td><?php echo $row['s_text']; ?></td>
                    <td>
                        <a href="solutionmanage.php?edit=<?php echo $row['s_id']; ?>"
                        class="btn btn-info">Edit</a>
                        <a href="solutionprocess.php?delete=<?php echo $row['s_id']; ?>"
                        class="btn btn-danger">Delete</a>
                    </td>
                </tr>
            <?php endwhile; ?>
    </table>
</div>

<div class="row justify-content-center">
    <form action="solutionprocess.php" method="POST">
        <input type="hidden" name="id" value="<?php echo $id; ?>">
        <div class="form-group">
        <lable>Solution</lable>
        <input type="text" name="solution" class="form-control" 
               value="<?php echo $solution; ?>" placeholder="Enter the solution">
        </div>
        <div class="form-group">
        <?php 
        if ($update == true):
        ?>
            <button type="submit" class="btn btn-primary" name="update">Update</button>
        <?php else: ?>
            <button type="submit" class="btn btn-primary" name="add">Add</button>
        <?php endif; ?>
        </div>
    </form>
</div>
</div>
</body>
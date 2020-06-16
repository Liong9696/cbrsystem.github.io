<?php
    include 'dbs.php';
?>

<head>
<link rel="shortcut icon" href="img/clientservice.jpg">
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
        <a class="navbar-brand" href="#"><img src="img/clientservice.jpg">&nbsp;&nbsp;Client Service</a>
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
              <a class="nav-link" href="message.php">Messages</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="logout.php">Logout</a>
            </li>
          </ul>
        </div>
      </nav>
</section>

<body style="background:url(img/background.jpg);background-size:100%">

<?php require_once 'process.php'; ?>

<?php
if (isset($_SESSION['message'])): ?>

<div class="alert alert-<?=$_SESSION['msg_type']?>">

  <?php
      echo $_SESSION['message'];
      unset($_SESSION['message']);
  ?>
</div>
<?php endif ?>

<script>

setTimeout(function(){
  let alert = document.querySelector(".alert");
            alert.remove();
}, 3000);

</script>

<div class="container">
<?php
    $con = mysqli_connect("localhost","root","","dbphpsearch") or die(mysqli_error($con));
    $result = $con->query("SELECT * FROM solution ORDER BY p_title") or die($con->error);
?>

<div class="row justify-content-center">
    <table class="table">
        <thead>
            <tr>
                <th>Problem</th>
                <th>Solution</th>
                <th colspan="2">Action</th>
            </tr>
        </thead>
<?php
            while($row = $result->fetch_assoc()): ?>
                <tr>
                    <td><?php echo $row['p_title']; ?></td>
                    <td><?php echo $row['s_text']; ?><br><?php echo $row['s_text1']; ?></td>
                    <td>
                        <a href="datamanagement.php?edit=<?php echo $row['s_id']; ?>"
                        class="btn btn-info">Edit</a>
                        <a href="process.php?delete=<?php echo $row['s_id']; ?>"
                        class="btn btn-danger">Delete</a>
                    </td>
                </tr>
            <?php endwhile; ?>
    </table>
</div>

<div class="row justify-content-center">
    <form action="process.php" method="POST">
        <input type="hidden" name="id" value="<?php echo $id; ?>">

        <lable>Problem</lable>
        <div>
        <input type="text" name="problem" required class="form-control" 
               value="<?php echo $problem; ?>" placeholder="Enter the problem">
  
        <div><br> 
        <lable>Solution Title</lable>
        <div> 
        <input type="text" name="solution" required class="form-control" 
               value="<?php echo $solution; ?>" placeholder="Enter the solution">

        <div><br>     
        <lable>Solution Explanation</lable>
        <div>
        <textarea class="form-control" rows="5" cols="50" name="solution1" required placeholder="Enter the explanation"><?php echo $solution1; ?></textarea>

        <?php 
        if ($update == true):
        ?>
            <div><br>
            <button type="submit" class="btn btn-primary" name="update">Update</button>
        <?php else: ?>
            <div><br>
            <button type="submit" class="btn btn-primary" name="add">Add</button>
        <?php endif; ?>

    </form>
</div>
</div>
</body>
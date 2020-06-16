<html>
<head>
<link rel="shortcut icon" href="img/clientservice.jpg">
<title>Client Service</title>
<link rel="stylesheet" href="css/message.css?v=<?php echo time();?>">
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
            <li class="nav-item">
              <a class="nav-link" href="admin.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="datamanagement.php">Data Management</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="report.php">Report</a>
            </li>
            <li class="nav-item active">
              <a class="menu-active" href="message.php">Messages</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="logout.php">Logout</a>
            </li>
          </ul>
        </div>
      </nav>
</section>
<!-------Slider------>
<body style="background:url(img/background3.jpg);background-size:100%;">
<div class="banner">
        <div class="container"><br>
            <h1 class="heading">Messages</h1>
            <br>
<?php
    $con = mysqli_connect("localhost","root","","dbphpsearch");
    $query = "SELECT * FROM contact";
    $result = mysqli_query($con, $query);
?>
<div class="row justify-content-center">
    <table class="table">
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Messages</th>
                <th>Date</th>
            </tr>
        </thead>
<?php
            while($row = mysqli_fetch_assoc($result)): ?>
                <tr>
                    <td style="border-bottom:1px solid #D3D3D3;"><?php echo $row['contact_name']; ?></td>
                    <td style="border-bottom:1px solid #D3D3D3;"><?php echo $row['contact_email']; ?></td>
                    <td style="border-bottom:1px solid #D3D3D3;"><?php echo $row['contact_phone']; ?></td>
                    <td style="border-bottom:1px solid #D3D3D3;"><?php echo $row['contact_message']; ?></td>
                    <td style="border-bottom:1px solid #D3D3D3;"><?php echo $row['contact_date']; ?></td>
                </tr>
            <?php endwhile; ?>
    </table>
</div>
</body>
</html>
<!DOCTYPE html>
<html>
<head>
<link rel="shortcut icon" href="img/clientservice.jpg">
<title>Client Service</title>
<link rel="stylesheet" href="css/report.css?v=<?php echo time();?>">
<script defer src= "https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
<link rel="stylesheet" href="https://code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</head>

<body style="background:url(img/background.jpg);background-repeat:no-repeat;background-size:100%">
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
              <a class="nav-link" href="datamanagement.php">Data Management</a>
            </li>
            <li class="nav-item">
              <a class="menu-active" href="report.php">Report</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="logout.php">Logout</a>
            </li>
          </ul>
        </div>
      </nav>
</section>

<?php
echo "<p>Report From Date ".$_POST['from_date']." To ".$_POST["to_date"]."</p><br>";
?>

<?php
  if(isset($_POST["from_date"], $_POST["to_date"]))
  {
    $from_date = $_POST['from_date'];
    $to_date = $_POST['to_date'];
    $con = mysqli_connect("localhost","root","","dbphpsearch");
    $output = '';
    $query = "SELECT searchTitle, searchDate, COUNT(searchTitle) AS cnt FROM search WHERE searchDate BETWEEN '$from_date' AND '$to_date 23:59:59' GROUP BY searchTitle ORDER BY cnt DESC";
    $result = mysqli_query($con, $query);
    $output .= "
        <table class='table'>
          <thead>
            <tr>
                <th>Search Title</th>
                <th>Total search</th>
            </tr>
          </thead>  
    ";
    if(mysqli_num_rows($result) > 0)
    {
      while ($row = mysqli_fetch_assoc($result))
      {
        $output .= '
        <tr>
            <td>'.$row['searchTitle'].'</td>
            <td align="center">'.$row['cnt'].'</td>
        </tr>
        ';
      }
   }
   else
   {
     $output .= '
     <tr>
        <td colspan="5">No record found</td>
     </tr>
     ';
   }
   $output .= '</table>';
   echo $output;
  }
  echo '<br><a href="report.php" class="back" style="text-decoration:none;color:black;margin-left:1000px;font-family:Times New Roman;"><< Go Back</a>';
?>
</body>
</html>


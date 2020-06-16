<?php
    $con = mysqli_connect("localhost","root","","dbphpsearch") or die(mysqli_error($con));
    $query = "SELECT searchTitle, searchDate FROM search ORDER BY searchTitle";
    $result = mysqli_query($con, $query);
?>
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

<body style="background:url(img/background10.jpg);background-repeat:no-repeat;background-size:100%">
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
              <a class="nav-link" href="datamanagement.php">Data Management</a>
            </li>
            <li class="nav-item">
              <a class="menu-active" href="report.php">Report</a>
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

<form class="row justify-content-center" method="POST" action="generatereport.php">
                <div class="form">
                    <legend><b>Date Range Report</b></legend><br>
                    <b>Please choose your date range</b>
                    <br>
                    <br>
                    <div class= "col-md-15">
                            <input class="form-control" type="text" name="from_date" required autocomplete="off" id="from_date" placeholder="From Date"/><br>
                    </div>
                    <div class= "col-md-15">
                            <input class="form-control" type="text" name="to_date" required autocomplete="off" id="to_date" placeholder="To date"/>&nbsp;&nbsp;&nbsp;
                    </div>
                    <div class= "col-md-5">
                            <input class="btn btn-primary" name= "formsubmit" id="formsubmit" type="submit" value="&nbsp;Generate Report&nbsp;" />
                    </div>
      </div>
</form>
</body>
</html>

<script>

  $(document).ready(function(){
    $.datepicker.setDefaults({
        dateFormat: 'yy-mm-dd'
    });
    $(function(){
      $("#from_date").datepicker();
      $("#to_date").datepicker();
    });
    $('#formsubmit').click(function(){  
            var from_date = $('#from_date').val();  
            var to_date = $('#to_date').val();  
            if(from_date != '' && to_date != '')  
            {  
                 $.ajax({  
                      url:"generatereport.php",  
                      method:"POST",  
                      data:{from_date:from_date, to_date:to_date},  
                      success:function(data)  
                      {  
                           $('#order_table').html(data);  
                      }  
                 });  
            }
    });  
  });  
  
</script>

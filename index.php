<html>
<head>
<link rel="shortcut icon" href="img/clientservice.jpg">
<title>Client Service</title>
<link rel="stylesheet" href="css/style.css?v=<?php echo time();?>">
<script defer src= "https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.2/bootstrap3-typeahead.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</head>

<body>
<!-----NavigationBar----->
<section id="nav-bar">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <nav class="navbar fixed-top navbar-light bg-light">
        <a class="navbar-brand" href="#"><img src="img/clientservice.jpg">&nbsp;&nbsp;Client Service</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="menu-active" href="index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="aboutus.php">About Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="login.php">Login</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contactus.php">Contact</a>
            </li>
          </ul>
        </div>
      </nav>
      </nav>
</section>
<!-------Slider------>
<div id="slider">
    <div id="headerSlider" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#headerSlider" data-slide-to="0" class="active"></li>
          <li data-target="#headerSlider" data-slide-to="1"></li>
          <li data-target="#headerSlider" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img style="height: 100%;" class="d-block img-fluid" src="img/cs.jpg">
          </div>
          <div class="carousel-item">
            <img style="height: 100%;" class="d-block img-fluid" src="img/background6.jpg">
          </div>
          <div class="carousel-item">
            <img style="height: 100%;" class="d-block img-fluid" src="img/background7.jpg">
          </div>
        </div>
        <a class="carousel-control-prev" href="#headerSlider" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#headerSlider" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
</div>

<div class="carousel-caption">
    <h1 class="fade-in"><p class="text-black" style="overflow: hidden;">Welcome to Client Service of Telekom Malaysia</p></h1>
</div>

<div class="search-box">
  <form action="search.php" method="GET">
    <input class="search-txt" type="text" required name="search" id="search" autocomplete="off" placeholder="Type to search problem">
    <button class="search-btn" type="submit" name="submit-search">
    <i class="fas fa-search"></i>
</button>
</form>
</div>
</body>
</html>

<script>

$(document).ready(function(){
    $('#search').typeahead({
      source: function(query, result)
      {
        $.ajax({
            url:"action.php",
            method:"POST",
            data:{query:query},
            dataType:"json",
            success:function(data)
            {
              result($.map(data, function(item){
                  return item;
              }));
            }
        })
      }
});
});
</script>


  <!-- START FOOTER -->
  <footer class="page-footer">
    <div class="footer-copyright">
      <div class="container">
        <span>Copyright © 2020 
        <span class="right"> Design and Developed by <a class="grey-text text-lighten-4">Liong</a></span>
        </div>
        </div>
    </div>
  </footer>
    <!-- END FOOTER -->
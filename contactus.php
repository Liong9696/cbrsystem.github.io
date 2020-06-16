<html>
<head>
<link rel="shortcut icon" href="img/clientservice.jpg">
<title>Contact Us</title>
<link rel="stylesheet" href="css/contact.css?<?php echo time();?>">
<script defer src= "https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css">
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
              <a class="nav-link" href="index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="aboutus.php">About Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="login.php">Login</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link-active" href="contactus.php">Contact</a>
            </li>
          </ul>
        </div>
      </nav>
</section>
<body style="background:url(img/background3.jpg);background-size:100%;">
<section id="contactus">
    <div class="banner">
        <div class="container">
            <h1 class="heading">Contact Us</h1>
            <h1>We'd Love to Help!</h1>
            <p>We look forward to continuing our relationship with you in the future</p>
<br><br>
<div class="row">

<div class="col-md-6">
<form action="contactprocess.php" method="GET">
<input type="text" name="name" required="" placeholder="Your Name" class="form-control">
<br>
<input type="Email" name="email" required="" placeholder="Your Email" class="form-control">
<br>
<input type="tel" name="phone" required="" placeholder="Phone no."  class="form-control">
<br>
<textarea rows="6" name="message" placeholder="Message" required="" class="form-control"></textarea>
<br>
<center>
<button type="submit" class="btn btn-info" name="submit">Submit</button>
</center>
</form>
<br><br><br>
</form>

</div>

<div class="col-md-1"></div>

<div class="col-md-5">
<br>
<p style="top: 0%;transform: translate(-65%,50%);width:400px;"><b style="margin:15px;">Address:</b><i class="fa fa-map-marker" style="margin-left:5px"></i> &nbsp;&nbsp;&nbsp; 63, Jalan Permas Jaya, Johor Bahru</p>
<p style="top: 10%;transform: translate(-108%,50%);"><b style="margin:15px;">Phone:</b><i class="fa fa-phone" style="margin-left:14px"></i> &nbsp;&nbsp;&nbsp; 03 2241 1290</p>
<p style="top: 20%;transform: translate(-85%,50%);width:300px;"><b style="margin:15px;">Phone:</b><i class="fa fa-phone" style="margin-left:14px"></i> &nbsp;&nbsp;&nbsp; Admin: 016 767 3055</p>
<p style="top: 30%;transform: translate(-70%,43%);width:400px;border-bottom:1px solid black;padding-bottom:10px;"><b style="margin:15px;">Email:</b><i class="fa fa-envelope" style="margin-left:17px"></i> &nbsp;&nbsp;&nbsp; theTMproviders@gmail.com</p>


<div class="media">

<ul class="list-unstyled">
    <li style="transform: translate(120%,800%);margin-left:25px;"><a href="#"> <i class="fab fa-facebook-f"></i></li>
    <li style="transform: translate(300%,700%);margin-left:25px;"><a href="#"> <i class="fab fa-twitter"></i></li>
    <li style="transform: translate(480%,600%);margin-left:25px;"><a href="#"> <i class="fab fa-instagram"></i></li>
    <li style="transform: translate(640%,500%);margin-left:25px;"><a href="#"> <i class="fab fa-google-plus-g"></i></li>
    <li style="transform: translate(810%,400%);margin-left:25px;"><a href="#"> <i class="fab fa-youtube"></i></li>
</ul>

</div>
<br>
<p style="margin-top:30px;margin-right:10px;margin-left:-70px">Web Design by The Providers</p>

</div>
</body>
</html>

  <!-- START FOOTER -->
  <footer class="page-footer">
    <div class="footer-copyright">
      <div class="container">
        <span  style="color:black;padding-left:400px;text-decoration:none">Copyright © 2020 
        <span class="right"> Design and Developed by <a class="grey-text text-lighten-4">Liong</a></span>
        </div>
        </div>
    </div>
  </footer>
    <!-- END FOOTER -->
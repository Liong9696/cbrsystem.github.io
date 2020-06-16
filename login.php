<!DOCTYPE html>
<html>
    <head>
        <link rel="shortcut icon" href="img/clientservice.jpg">
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        <meta charset="utf-8">
        <title>Login</title>
        <link rel="stylesheet" href="css/login.css?v=<?php echo time();?>">
</head>

<body>
<div class="login-box">
    <h1>Login</h1>
    <form action="checklogin.php" method="POST" name="login">
    <div class="textbox">
        <i class="fa fa-user" aria-hidden="true"></i>
        <input type="text" placeholder="Username" name="username" id="username" required/>
    </div>

    <div class="textbox">
        <i class="fa fa-lock" aria-hidden="true"></i>
        <input type="password" placeholder="Password" name="password" id="password" required/>
        <span class="eye" onclick="iconShowHide();">
            <i id="enable" class="fa fa-eye" aria-hidden="true"></i>
            <i id="disable" class="fa fa-eye-slash" aria-hidden="true"></i>
        </span>
    </div>
    <input class="btn" type="submit" value="Login"/>
    <?php
    if(isset($_GET['success'])==true){?>
    <script> src="sweetalert.min.js"></script>
        <script type="text/javascript">
       swal({
              title: "Login Successfully!",
              icon: "success",
              button: "OK",
       }).then(function() {
    window.location = "admin.php";});
        </script>
    <?php }
    ?>
    <?php
    if(isset($_GET['error'])==true){?>
    <script> src="sweetalert.min.js"></script>
        <script type="text/javascript">
       swal({
              title: "Login Failed!",
              text: "Your username or password is incorrect!",
              icon: "error",
              button: "OK",
       });
        </script>
    <?php }
    ?>
</form>
</div>
    <script>
        function iconShowHide(){
            var x = document.getElementById("password");
            var y = document.getElementById("enable");
            var z = document.getElementById("disable");

            if(x.type === 'password'){
                x.type = "text";
                y.style.display = "block";
                z.style.display = "none";
            }
            else{
                x.type = "password";
                y.style.display = "none";
                z.style.display = "block";
            }
        }
    </script>
    <div id="particles-js"></div>
    <script src="js/particles.js"></script>
    <script src="js/app.js"></script>
    </body>
</html>

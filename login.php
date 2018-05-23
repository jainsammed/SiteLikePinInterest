<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Login!</title>
        <link rel="stylesheet" href="css/nav.css">
        <link rel="stylesheet" href="css/login.css">

        <script src="js/modernizr.js" charset="utf-8"></script>
        <link href="https://fonts.googleapis.com/css?family=David+Libre|Hind:400,700" rel="stylesheet">
        <link rel="icon" href="img/icon.ico" type="image/x-icon">

        <style media="screen">
         body {
              font-family: sans-serif;
              background: #456990;
              color: #fff;
            }

        </style>

    </head>
    <body id="home">
        <?php include 'includes/nav.php' ?>

          <div class="form" style="margin-top: 150px;">
              <h1 style="font-family: Raleway; font-weight: 1; font-size: 22px;">Login to your Account</h1><br>
            <form class="login-form" action="process/session_begin.php" method="post" autocomplete="off">
               <?php
                if(isset($_COOKIE['username'])) {
                       $username_cookie =  $_COOKIE['username'];
                ?>
                <input style="width: 400px;" type="text" value="<?php echo $username_cookie ?>" name="username" required/><br><br>
               <?php
                  }
                  else {
                  ?>
                  <input style="width: 400px;" type="text" placeholder="Enter your username" name="username" required/><br><br>
                  <?php
                  }
                ?>
              <input style="width: 400px;" type="password" placeholder="Enter your password" name="password" required/>
              <input type="checkbox" name="remember"/> <span style="color: #000; font-family: Rajdhani;">remember me for 1 day</span><br>
              <button type="submit">LOGIN</button><br>
              <p class="message" style="color: #000; font-family: Rajdhani;">Not registered? <a href="register.php">Create an account</a></p>
            </form>
          </div>

          <?php include 'includes/footer.php' ?>

    </body>

    <script src="https://use.fontawesome.com/9aecb5e5ac.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>
    <script src="https://unpkg.com/scrollreveal/dist/scrollreveal.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <?php
    if(isset($_GET['details'])) {
        if($_GET['details'] == 'sent') {
    ?>
    <script type="text/javascript">
    swal("Nice!", "Successfully Registered !", "success");
    </script>
    <?php
        } else {

        }
    }
    ?>
    <?php
        if(isset($_GET['loginfail'])) {
            ?>
            <script type="text/javascript">
            swal("Try Again!", "Invalid Credentials !", "error");
            </script>
            <?php
        }
     ?>
</html>

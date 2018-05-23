<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Register!</title>
        <link rel="stylesheet" href="css/nav.css">
        <link rel="stylesheet" href="css/login.css">

        <script src="js/modernizr.js" charset="utf-8"></script>
        <link rel="icon" href="img/icon.ico" type="image/x-icon">

        <style media="screen">
            body {
              font-family: sans-serif;
              background: #456990;
              color: #fff;
            }
        </style>

        <script type="text/javascript" src="ajax.js "></script>

    </head>
    <body id="home" onload="process()">

        <?php include 'includes/nav.php' ?>

          <div class="form" style="margin-top: 150px;">
              <h1 style="font-family: Raleway; font-weight: 1; font-size: 22px;">Register yourself</h1>
              <br>
            <form class="login-form" method="post" action="process/register_user.php" autocomplete="off">
              <input style="width: 400px;" type="text" name="name" placeholder="Enter your name" required/><br><br>
              <input style="width: 400px;" type="email" name="email" placeholder="Enter your email" required/><br><br>
              <input style="width: 400px;" type="text" name="username" id="username" placeholder="Enter your username" required/><br><br>
              <div id="underInput"></div>
              <input style="width: 400px;" type="number" name="age" placeholder="Enter your age" required/><br><br>
              <input style="width: 400px;" type="password" name="password" placeholder="Enter password" required/><br><br>
              <button type="submit">Register</button><br>
              <p class="message"><a href="login.php">Login to your Account</a></p>
            </form>
          </div>

          <?php include 'includes/footer.php' ?>

    </body>


    <script src="https://use.fontawesome.com/9aecb5e5ac.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>
    <script src="https://unpkg.com/scrollreveal/dist/scrollreveal.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <?php
    if(isset($_GET['useralready'])) {
        if($_GET['useralready'] == 'exists') {
    ?>
    <script type="text/javascript">
    swal("Try again", "You aren't registered. User already exists !" , "error" )
    </script>
    <?php
        } else {

        }
    }
    ?>

</html>

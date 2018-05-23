<?php
session_start();
if(isset($_SESSION['username']))
{
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Profile!</title>
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
               .heading{
                   font-family: Raleway;
                   color: #fff;
                   font-size: 30px;
               }
        </style>

    </head>
    <body id="home">

        <?php include 'includes/nav.php' ?>

        <div class="heading" align="center" style="margin-top: 110px;">
            <?php
                echo "Welcome ".$_SESSION['name'];
            ?>
        </div>
          <div class="form" style="margin-top: 150px;">
            <form class="login-form" action="process/photo_upload.php" method="post" autocomplete="off" enctype="multipart/form-data">
              <h1 style="font-family: Raleway; font-weight: 1; font-size: 22px;">Upload your photo</h1><br>
              <input type="file" placeholder="Upload your photo" name="photo" style="background-color: #888889; width: 400px;" required/>
              <button type="submit" name="submit">Upload</button>
            </form>
          </div>

          <?php include 'includes/footer.php' ?>
          
    </body>

    <script src="https://use.fontawesome.com/9aecb5e5ac.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>
    <script src="https://unpkg.com/scrollreveal/dist/scrollreveal.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

</html>
<?php
if(isset($_GET['success']))
{
    ?>
    <script type="text/javascript">
    swal("Good!", "Pic Uploaded !", "success");
    </script>
    <?php
}
 ?>
<?php
}
else
{
    header("Location: ../login.php");
}
 ?>

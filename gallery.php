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
        <title>Gallery!</title>
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

               div.img_pic {
                 background-color: #fff;
                 text-align: center;
                 box-shadow: 0 4px 8px 7px rgba(0, 0, 0, 0.2);
               }
                div.img_name {
                 padding: 5px;
               }
                div.img_pic:hover {
                 box-shadow: 0 6px 20px 9px rgba(67,178,147,1);
               }
        </style>

        <script type="text/javascript">
        function changeImage()
        {
            var img = document.getElementById("heart1_image");
            img.src="./img/heart2.png";
            return false;
        }
        function changeDimensions(){
            var img = document.getElementById('img');
            var width = img.clientWidth;
            var height = img.clientHeight;
            document.getElementById('img_pic').style.width = width + "px";;
        }
        </script>
    </head>

    <body id="home">

        <?php include 'includes/nav.php' ?>

        <div class="heading" align="center" style="margin-top: 110px;">
            <?php
                echo "Welcome ".$_SESSION['name'];
            ?>
        </div>
        <?php

            $localhost="localhost";
            $localhostuser="root";
            $password="";
            $db="hello";

            $connection=mysqli_connect($localhost,$localhostuser,$password,$db);

            if(!$connection)
            {
                echo "Connection Error";
                exit();
            }

            $query = "SELECT * FROM `photo`";
            $result = mysqli_query($connection, $query);
            while($row = mysqli_fetch_array($result))
            {
                 echo '

                 </br>
                 <div class="col-md-3">
                     <div class="img_pic" id="img_pic" style="-webkit-border-radius:10px;">
                        <img id="img" onload="changeDimensions();" style="-webkit-border-top-left-radius:10px; -webkit-border-top-right-radius:10px;" src="data:image/jpeg;base64,'.base64_encode($row['Photo'] ).'" />
                        <div class="img_name">
                         <img src="./img/heart1.png" id="heart1_image" style="height: 20px; width: 20px;" onclick="changeImage(); updateCounter();">
                         <p id="counted" style="color: red;"></p>
                             <script type="text/javascript">
                               var count = 0;
                               var x=0;
                               function updateCounter() {
                                   count++;
                                   document.getElementById("counted").innerHTML =count;
                               }
                             </script>
                         </div>
                     </div>
                 </div>

                 ';
            }

         ?>

    </body>

    <script src="https://use.fontawesome.com/9aecb5e5ac.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>
    <script src="https://unpkg.com/scrollreveal/dist/scrollreveal.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

</html>
<?php
}
else
{
    header("Location: ../login.php");
}
 ?>

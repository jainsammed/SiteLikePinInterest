<link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet'>
<link href='https://fonts.googleapis.com/css?family=Rajdhani' rel='stylesheet'>
<style media="screen">
*{
    margin: 0;
    padding: 0;
    font-family: Raleway;
}
nav, footer
{
  width: 100%;
}
nav {
  background: #dd1a1b;
}
nav ul {
  list-style: none;
  text-align: center;
}
nav ul li {
  display: inline-block;
  padding: 5px 0;
}
nav ul li a {
  padding: 5px 20px;
  color: #fff;
  text-decoration: none;
}
nav ul li a:hover,
nav ul li a.active {
  background: #343434;
}
</style>
<nav>
  <ul>
    <li><a href="index.php">Home</a></li>
    <li><a href="index.php#aboutus">About Us</a></li>
    <li><a href="index.php#contact">Contact Us</a></li>
    <?php
        if(isset($_SESSION['username'])) {

    ?>
    <li><a href="gallery.php">Gallery</a></li>
    <li><a href="./profile.php"><i class="fas fa-user"></i><?php echo " ".$_SESSION['username']; ?></a></li>
    <li><a href="process/session_destroy.php"><i class="fas fa-sign-out-alt"></i> Logout</a></li>

    <?php
    } else {
    ?>
    <li><?php echo "<a href='./login.php'>Login</a>"; ?></li>
    <?php  }?>
  </ul>
</nav>

<script defer src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>

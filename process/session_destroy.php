<?php
session_unset();
session_destroy();
$_SESSION['username']=NULL;
header("Location: ../login.php");
?>

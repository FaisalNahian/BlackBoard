<<<<<<< HEAD
<?php
session_start();
if(!isset($_SESSION["username"])){
header("Location: login.php");
exit(); }
=======
<?php
session_start();
if(!isset($_SESSION["username"])){
header("Location: login.php");
exit(); }
>>>>>>> 588748919bbca0a2bfc7a8b88b0ffeb13fd4c27e
?>
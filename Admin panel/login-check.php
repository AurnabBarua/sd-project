<?php
if(!isset($_SESSION['user'])){
  $_SESSION['no-login-message']="Please, login to access admin panel";
  header('location: login.php');
}
 ?>

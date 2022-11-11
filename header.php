<?php
session_start();
if($_SESSION['statuslogin']!=true){
  header('location:login.php');
}
?>
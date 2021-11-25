<?php
session_start();
include('plugin/db.php');
ob_start();
include('plugin/head.php');
$username = '';
$pass = '';
?>

<body>
   <?php
   if(isset($_POST['login'])){
      if(($_POST['username'] == $username)and($_POST['password'] == $pass)){
         $_SESSION['login'] = $_POST['user'];
         ?><?php
      }else{
         echo "<script>alert('Username atau Password yang anda masukkan salah')</script>";
      }
   }elseif($_POST)
   ?>

   <div class="wrapper">
      <?php 
      include('templates/sidebar.php');
      if(isset($_GET['dashboard'])){
         include('pages/dashboard.php');
      }elseif(isset($_GET['data'])){
         include('pages/data.php');
      }elseif(isset($_GET['diagnosis'])){
         include('pages/diagnosis.php');
      }
      ?>

   </div>
</body>
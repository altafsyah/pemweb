<?php
session_start();
include('plugin/db.php');
ob_start();
include('plugin/head.php');
$username = '';
$pass = '';
global $nama;
?>

<body>
   <?php
   if(isset($_POST['login'])){
      $pass = $_POST['pass'];
      $username = $_POST['username'];
      $sql = "SELECT * FROM user WHERE username='$username' and pass='$pass'";
      $hasil = mysqli_query($conn, $sql);
      $cek = mysqli_fetch_row($hasil);
      if($cek){
         $_SESSION['login'] = $_POST['username'];
         header('location:index.php?dashboard');
         ?><?php
      }else{
         echo "<script>alert('Username atau Password yang anda masukkan salah')</script>";
         header('loaction:index.php');
      }
   }?>
   <div class="wrapper">
      <?php 
      if(isset($_GET['dashboard'])){
         include('templates/sidebar.php');
         include('pages/dashboard.php');
      }elseif(isset($_GET['data'])){
         include('templates/sidebar.php');
         include('pages/data.php');
      }elseif(isset($_GET['diagnosis'])){
         include('templates/sidebar.php');
         include('pages/diagnosis.php');
      }else{
         include('templates/login.php');
      }
      ?>

   </div>
</body>
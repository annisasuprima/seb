l<?php
   $db = mysqli_connect('localhost','root','','tbpbd');
    
   session_start();
   
   $user_check = $_SESSION['login'];
   $ses_sql = mysqli_query($db,"select nama from login where username = '$user_check' ");
   
   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
   
   $login_session = $row['nama'];
   
   // if(!isset($_SESSION['login'])){
   //    header("location:/Tbendahara/log/login.php");
   // }
?>
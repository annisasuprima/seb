<html>
<head>
 <title>Hasil Login</title>
 <link rel="stylesheet" type="text/css" href="style.css"> 
</head>
<body>
  <form action="proseslogin.php" method="post" name="form1">
  <table>
<tr>
  <td>
   <?php
    $root = $_SERVER['DOCUMENT_ROOT'].'/bencana';
    $conn = mysqli_connect('localhost','root','','tbpbd');
    session_start();
    if (isset($_POST['Login'])){
      
     $username = $_POST['username'];
     $pass = md5($_POST['password']);
     
      $sql = "SELECT username FROM login WHERE username = '$username' and password = '$pass'";
      $result = mysqli_query($conn,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $count = mysqli_num_rows($result);

      if ($count == 1){
      echo "<h2>
        Login Berhasilr</h2>
        ";

        // session_register("username");
        $_SESSION['login'] = $username;
            
        header("location: ../../dashboard.php");
     } else{
      echo "<h2>
        Login Gagal</h2>
        ";
     }
    }
   ?>
   </td>
   </tr>
</table>
</form>
</body>
</html>

<?php
require '../init__/__init__.php';
if (isset($_POST['username'])&&isset($_POST['password'])) {
   $password = $_POST['password'];
   $username = $_POST['username'];

   $sql = "SELECT salt from `users` where username='$username'";

   $result = mysqli_query($conn, $sql);

    if($result->num_rows > 0){
      while ($row = mysqli_fetch_assoc($result)) {


        $_PASS = hash('sha256', $row['salt'].$password);

        $sqli = "SELECT password from `users` where username='$username'";
        $sli = mysqli_query($conn,$sqli);

        $sil = mysqli_fetch_assoc($sli);
        if ($_PASS == $sil['password']) {
           $_SESSION['user']=$username;
           $_SESSION['logged'] =  $username&&$_PASS;
           header('location: /');
        }else {
          echo "error";
        }
      }


    }

}
 ?>

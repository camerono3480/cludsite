<?php
require 'init__/__init__.php';
if (isset($_POST['password'])&&isset($_POST['username'])&&isset($_POST['email'])) {
   $password = $_POST['password'];
   $username = $_POST['username'];
   $email = $_POST['email'];

   $hash = $password;
   // HACK: possible collision
   $salt = rand();
   $_sendpass = hash('sha256', $salt.$hash);

   $sql = "INSERT INTO `users`(`password`, `salt`, `username`, `email`) VALUES ('$_sendpass', '$salt', '$username', '$email')";

   if ($conn->query($sql) === TRUE) {
    echo $_sendpass;
   } else {
    echo "Error" . $conn->error;
   }
} else {
  echo "error";
}
 ?>

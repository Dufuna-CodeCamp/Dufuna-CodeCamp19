<?php
if (isset($_POST['login-submit'])) {
   require 'loginDbh.inc.php';
   $mail = $_POST['mail'];
   $password = $_POST['password'];

   if (empty($mail) || empty($password)) {
       header("Location: ../login.php?error=emptyfields&mail=".$mail);
       exit();
   }else {
       $sql = "SELECT * FROM users WHERE EmailUsers=?";
       $stmt = mysqli_stmt_init($conn);
       if (!mysqli_stmt_prepare($stmt, $sql)) {
           header("Location: ../login.php?error=sqlerror");
           exit();
       }else {
           mysqli_stmt_bind_param($stmt, "s", $mail);
           mysqli_stmt_execute($stmt);
           $result = mysqli_stmt_get_result($stmt);
        //    to check the password from database against password input
           if ($row = mysqli_fetch_assoc($result)) {
               $passwordCheck = password_verify($password, $row['PasswordUsers']);
               if ($passwordCheck == false) {
                   header("Location: ../login.php?error=wrongpassword");
                   exit();
               }elseif ($passwordCheck == true) {
                //    to fetch db data for comparison in sessions
                   session_start();
                   $_SESSION['userId'] = $row['idUsers'];
                   $_SESSION['EmailId'] = $row['EmailUsers'];
               }else {
                   header("Location: ../login.php?error=wrongpassword");
                   exit();
               }
           }else {
               header("Location: ../login.php?error=nouser");
               exit();
           }
       }
   }
}else {
    header("Location: ../index.php");
    exit();
}
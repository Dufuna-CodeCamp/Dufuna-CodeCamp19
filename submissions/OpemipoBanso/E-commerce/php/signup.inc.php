<?php
if(isset($_POST['signup-submit'])) {

    require 'loginDBh.inc.php';

    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $phone = $_POST['phone-number'];
    $password = $_POST['password'];
    $passwordRepeat = $_POST['password-repeat'];

    if(empty($firstname) || empty($lastname) || empty($email) || empty($phone) || empty($password) || empty($passwordRepeat)) {
        header("Location: ../signup.php?error=emptyfields&firstname=".$firstname."&lastname=".$lastname."&email=".$email."&number=".$phone);
        exit();
    }else if(!filter_var($email, FILTER_VALIDATE_EMAIL) && !preg_match("/^[a-zA-Z0-9]*$/", $firstname)) {
        header("Location: ../signup.php?error=invalidnamepassword");
        exit();
    }else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        header("Location: ../signup.php?error=invalidmail&firstname=".$firstname."&lastname=".$lastname."&number=".$phone);
        exit();
    }else if (!preg_match("/^[a-zA-Z0-9]*$/", $firstname)) {
        header("Location: ../signup.php?error=invalidnameformat&email=".$email);
        exit();
    }else if ($password !== $passwordRepeat) {
        header("Location: ../signup.php?error=passwordCheck&email=".$email."&firstname=".$firstname);
        exit();
    }else {
        // to prevent sql injection
        $sql = "SELECT EmailUsers FROM users WHERE EmailUsers=?";
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header("Location: ../signup.php?error=sqlerror");
            exit();
        }else {
            mysqli_stmt_bind_param($stmt, "s", $email);
            // to run the sql command in db
            mysqli_stmt_execute($sql);
            // stores the user input into the db
            mysqli_stmt_store_result($stmt);
            // to check if input already exists and the number of matches
            $resultCheck = mysqli_stmt_num_rows($stmt);
            if ($resultCheck > 0) {
                header("Location: ../signup.php?error=userexists&email=".$email."&firstname=".$firstname);
                exit();
            }else {
                $sql = "INSERT INTO Users (FirstnameUsers, LastnameUsers, EmailUsers, MobileUsers, PwdUsers) VALUES (?, ?, ?, ?, ?)";
                $stmt = mysqli_stmt_init($conn);
                if (!mysqli_stmt_prepare($stmt, $sql)) {
                    header("Location: ../signup.php?error=sqlerror");
                    exit();
                }else {
                    $hashedpwd = password_hash($password, PASSWORD_DEFAULT);
                    mysqli_stmt_bind_param($stmt, "sssss", $firstname, $lastname, $email, $phone, $hashedpwd);
                    // to run the sql command in db
                    mysqli_stmt_execute($sql);
                    header("Location: ../signup.php?signup=success");
                    exit();
                }
            }
        }
        mysqli_stmt_close($stmt);
        mysqli_close($conn);      
    }
} 
else {
    header("Location: ../signup.php?signup=success");
    exit();
};

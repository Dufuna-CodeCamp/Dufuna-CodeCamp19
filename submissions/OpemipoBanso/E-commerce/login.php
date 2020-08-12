<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="stylesheet" href="./css/kasuwa-shared-styles.css" />
    <link rel="stylesheet" href="./css/kasuwa-registration-page-nav.css" />
    <link
      href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <title>Login page</title>
  </head>

  <body>
    <?php
        require './php/header.php'
    ?>
    <div class="clear-float"></div>
    <main>
      <div class="form-wrapper">
        <form action="./php/login.inc.php" action="POST">
          <div class="form-container">
            <h2>Login</h2>
            <div class="contact-div">
              <label for="email-address"> Email address : </label><br />
              <input
                type="email"
                name="email"
                id="email-address"
              />
              <br />
            </div>
            <div class="password-div">
              <label for="password"> Password : </label><br />
              <input
                type="password"
                name="password"
                pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
              />
              <br />
            </div>
            <button type="submit" name="login-submit" class="btn registerbtn">
              Login
            </button>
            <div>
              <a class="fb-btn btn" href="https://www.facebook.com"
                ><i class="fa fa-facebook-f"></i>Continue with facebook</a
              >
            </div>
            <div>
              <a class="btn gg-btn" href="https://www.google.com"
                ><i class="fa fa-google"></i>Continue with google</a
              >
            </div>
            <p>
              Don't have an account?<a class="white-link" href="sign-up.php"
                >Sign up here</a
              >.
            </p>
          </div>
        </form>
      </div>
    </main>

    <?php require 'php/footer.php';?>
  </body>
</html>
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
    <title>Registration page</title>
  </head>

  <body>
    <div class="backdrop"></div>
    <?php
        require ('./php/header.php');
    ?>
  
      <div class="form-wrapper">
        <?php
          if (isset($_GET['error'])) {
            if ($_GET['error'] == "emptyfields") {
              echo "<p><script>alert('Fill in all fields...!')</script>";
              echo "<script>window.location = 'signup.php</script>";

            }else if ($_GET['error'] == "invalidnamepassword") {
              echo "<h3><script>alert('Invalid name and email')</script>";
              echo "<script>window.location = 'signup.php</script>";

            }else if ($_GET['error'] == "invalidmail") {
              echo "<h3><script>alert('Invalid email address')</script>";
              echo "<script>window.location = 'signup.php</script>";

            }else if ($_GET['error'] == "invalidnameformat") {
              echo "<h3><script>alert('Invalid name input')</script>";
              echo "<script>window.location = 'signup.php</script>";

            }else if ($_GET['error'] == "passwordCheck") {
              echo "<h3><script>alert('Your passwords do not match!')</script>";
              echo "<script>window.location = 'signup.php</script>";
            }else if ($_GET['error'] == "userexists") {
              echo "<h3><script>alert('User already taken!')</script>";
              echo "<script>window.location = 'signup.php</script>";
            }
          }
        ?>
        <form action="./php/signup.inc.php" method="POST">
          <div class="form-container">
            <h2>Create an account</h2>
            <div class="name-div">
              <label for="firstname">
                Firstname :
              </label>
              <br />
              <input
                type="text"
                name="firstname"
                id="firstname"
                placeholder="Enter your Firstname"
              />
              <br />
              <label for="lastname">
                Lastname :
              </label>
              <br />
              <input
                type="text"
                name="lastname"
                id="lastname"
                placeholder="Enter your Lastname or Family name"
              />
              <br />
            </div>
            <div class="contact-div">
              <label for="email-address"> Email address : </label><br />
              <input
                type="email"
                name="email"
                id="email-address"
                placeholder="Enter your Email address"
              />
              <br />
              <label for="number"> Phone : </label><br />
              <input
                type="text"
                name="phone-number"
                placeholder="Please enter your number"
                maxlength="15"
              />
              <br />
            </div>
            <div class="password-div">
              <label for="password"> Password : </label><br />
              <input
                type="password"
                name="password"
                pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
                placeholder="Must be in the A!phanumer1c form with at least 8 characters"
              />
              <br />
              <label for="password"> Confirm Password : </label><br />
              <input
                type="password"
                name="password-repeat"
                pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
                placeholder="Input password again"
              />
            </div>
            <p>
              By creating an account you agree to our<a
                class="white-link"
                href="#"
                >Terms & Policy</a
              >.
            </p>
            <button type="submit" name="signup-submit" class="btn registerbtn">Register</button>
            <div>
              <a class="fb-btn btn" href="https://www.facebook.com"
                ><i class="fa fa-facebook-f"></i>Signup with facebook</a
              >
            </div>
            <div>
              <a class="btn gg-btn" href="https://www.google.com"
                ><i class="fa fa-google"></i>Signup with google</a
              >
            </div>
            <p>
              Already have an account?<a
                class="white-link"
                href="kasuwa-login-nav.html"
                >Login here</a
              >.
            </p>
          </div>
        </form>
      </div>
    </main>

    <<?php require "php/footer.php";?>
  </body>
</html>
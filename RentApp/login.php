<?php require_once "server.php"; ?>


<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <title>Rent Suggestion App</title>
  <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans'>
  <link rel="stylesheet" href="LoginCSS/login.css">
  <script type="text/javascript" src="LoginJS/login.js"></script>



</head>

<body>
  <p class="tip"></p>

  <div class="cont">
    <div class="form sign-in">
      <h2>Owner Login</h2>
      <form method="post" action="login.php" id="sign_in_form">

        <label id="email">
          <span>Email</span>
          <input type="email" name="email" id="signin_email" placeholder="johnsmith@gmail.com" required /><br>
        </label>
        <label>
          <span>Password</span>
          <input type="password" name="password" id="signin_password" pattern=".{5,15}" required title="5 to 15 characters" placeholder="**********" />
        </label>
        <a href="forgot.php">
          <p class="forgot-pass">Forgot password?</p>
        </a>
        <button class="submit" id="sign_in" name="login">Sign In</button>
        
      </form>
    </div>


    <!-- signup -->

    <div class="sub-cont">
      <div class="img">
        <div class="img__text m--up">
          <h2>New here?</h2>
          <h2>Register Now!</h2>
        </div>
        <div class="img__text m--in">
          <h3>If you already have an account, Sign in!</h3>
        </div>
        <div class="img__btn">
          <span class="m--up">Sign Up</span>
          <span class="m--in">Sign In</span>
        </div>
      </div>

      <div class="form sign-up">
        <form method="post" action="login.php" id="register_form">
          <label>
            <span>Name</span>
            <input type="text" name="name" id="fullname" pattern=".{1,}" required title="min character is 3" placeholder="John Smith" required><br>
          </label>
          <label>
            <span>Email</span>
            <input type="email" name="email" id="signup_email" placeholder="johnsmith@gmail.com" required><br>
          </label>
          <label>
            <span>Password</span>
            <input type="password" name="password" id="signup_password" pattern=".{5,15}" required title="5 to 15 characters" placeholder="**********"> <br>
          </label>

          <label>
            <span>Confirm Password</span>
            <input type="password" name="cpassword" id="confirm_password" pattern=".{5,15}" required title="5 to 15 characters" placeholder="**********"> <br>
          </label>

          <label>
            <span>Phone Number</span>
            <input type="numeric" id="mobile" name="mobile" placeholder="9876543210" required><br><br>
          </label>


          <button class="submit" name="signup" onclick="Validate()">Sign Up</button>


        </form>
      </div>
    </div>
  </div>

  <script type="text/javascript" src="LoginJS/script.js"></script>
</body>

</html>


<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Forgot Password</title>
  <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans'><link rel="stylesheet" href="LoginCSS/AdminLogin.css">
</head>
<body>
<p class="tip"></p>
<div class="cont">
  <div class="form sign-in">
      <form method="post" id="admin_login" action="faculty_login.php">
        <h2>Forgot Password</h2>
             
        <label>
        <span>EMAIL</span>
          <input type="email" name="email" id="admin_signin_email" placeholder="johnsmith@gmail.com" required ><br>
      </label>

      <label>
          <span>MOBILE NUMBER</span>
          <input type="numeric" name="mobile" id="mobile" pattern=".{5,15}" required title="5 to 15 characters" placeholder="9876543210" > <br>
      </label>
    <button class="submit" name="forgot_password"> Send in Email</button>
    </form>
    
  </div>
</div>


</body>
</html>


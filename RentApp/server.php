
<?php 
session_start();

$db = mysqli_connect('localhost', 'root', '', 'renting');

if (isset($_POST['signup'])) {

  $name = mysqli_real_escape_string($db, $_POST['name']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password= mysqli_real_escape_string($db, $_POST['password']);
  $cpassword = mysqli_real_escape_string($db, $_POST['cpassword']);
  $mobile = mysqli_real_escape_string($db, $_POST['mobile']);

  $user_check_query = "SELECT * FROM `owner` WHERE name='$name' AND email='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
    if ($user) { 

      if ($user['email'] == $email) {
        $register_message = "The user is already registered!";
        echo "<script type='text/javascript'>alert('$register_message');</script>";
    }
  }
  else
  {
  	$hashed_password = md5($password);

    $query = "INSERT INTO `owner` (name, email, password, phone) 
          VALUES('$name', '$email', '$hashed_password', '$mobile')";
    mysqli_query($db, $query);
    echo "<script type='text/javascript'>alert('Successfully registered'); 
    window.location.href='login.php'; </script>";
  }


}


if (isset($_POST['login']))
{

  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password = mysqli_real_escape_string($db, $_POST['password']);


  $hashed_password = md5($password);
  echo $hashed_password;
  $query = "SELECT * FROM `owner` WHERE email='$email'";
  $results = mysqli_query($db, $query);


  if(mysqli_num_rows($results) == 0)
  {

    echo "<script type='text/javascript'>alert('User not found!');</script>";

  }
  else if (isset($email) and isset($hashed_password) )
  {

    $row = mysqli_fetch_array($results); 
    $username = $row['name'];

    if($hashed_password !== $row['password'])
    {
      echo "<script type='text/javascript'>alert('Password is wrong, Please try again!');</script>";
    }
    else
    {
      $_SESSION['name'] = $username;
      $_SESSION['email']= $email;
    
      echo "<script type='text/javascript'>alert('Login Success, Welcome ' + '$username'); 
      window.location.href='add-data.php'; </script>";
    }
  }
}


if (isset($_POST['log_out']))
{
    session_destroy();
    header("location: login.php");
}
 ?>
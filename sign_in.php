<?php 
include 'conf/connection.php';
require 'fungsi.php';


if (isset($_POST["register"])) {
	if (registerasi($_POST) > 0) {
		echo "<script>
					alert('User baru berhasil registerasi!');
			</script>";
	} else{
		echo mysqli_error($koneksi);
	}
}

?>



<!DOCTYPE html> 
<html>
  
  <link rel="stylesheet" type="text/css" href="css/signInStyle.css">

  <body>

    <header>
      
    <div class="judul">
      <h1 style="color: white">DemicLife</h1>
    </div>

    <div class="logo">
      <img src="asset/biohazard.png">
    </div>

    </header>
    
    <form name="signIn_form" action="" action="./login.php" onsubmit="return formValidasi()" method="POST">
      <div class="container">
        <h1 class="h1">Sign Up</h1>
        <p>Please fill in this form to create an account.</p>
      
        <ul>
        <label for="usr_name"><b>Username</b></label>
        <li><input type="text" name="usr_name" placeholder="Enter Username" id="usr_name" style="border-radius: 0.475rem;" required /></li>
        <label for="email"><b>Email</b></label>
        <li><input type="text" placeholder="Enter Email" name="email" id="email" style="border-radius: 0.475rem;" required /></li>
        <label for="psw"><b>Password</b></label>
        <li><input type="password" placeholder="Enter Password" name="psw" id="psw" style="border-radius: 0.475rem;" required /></li>
        <label for="psw_repeat"><b>Repeat Password</b></label>
        <li><input type="password" placeholder="Repeat Password" name="psw_repeat" id="psw_repeat" style="border-radius: 0.475rem;" required />
        </li>
        </ul>
        <label>
          <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px" class="checkbox"> Remember me
        </label>

        <br>

        <div class="clearfix">
          <ul>
            <li><button type="submit" class="signUp_btn" name="register" >Sign Up</button></li>
            <br>
            <li><button type="button" class="cancel_btn" >Cancel</button></li>
          </ul>

        </div>
      </div>
    </form>
  </body>
  <script type="text/javascript" src="javascript/sign_in.js"></script>
</html>

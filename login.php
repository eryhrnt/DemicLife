<?php  
include 'conf/connection.php';
require 'fungsi.php';
session_start();

//cara1
/*if (isset($_POST["login"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];

    $result = mysqli_query($koneksi, "SELECT * FROM user WHERE username = '$username'");

    if (mysqli_num_rows($result) === 1) {
        $row = mysqli_fetch_assoc($result);
        if (password_verify($password, $row["password"])) {
            header("location: index.php");
            exit;
        }
    }

    $error = true;
}
*/

//cara2
if (isset($_POST['username'])){
    $username = stripslashes($_REQUEST['username']);
    $username = mysqli_real_escape_string($koneksi, $username);
    $password = stripslashes($_REQUEST['password']);
    $password = mysqli_real_escape_string($koneksi, $password);

    $query = "SELECT * FROM user WHERE username = '$username' and password = '$password' ";
    $result = mysqli_query($koneksi, $query) or die(mysql_error());
    $rows = mysqli_num_rows($result);

    if($rows == 1){
     $_SESSION['username'] = $username;
     header("Location: homeDemic.php");
    }

    $error = true;
}

?>

<!DOCTYPE html>

<link rel="stylesheet" type="text/css" href="css/loginStyle.css">

<html>
<body>

    <header>
        
    <div class="judul">
      <h1 style="color: white">DemicLife</h1>
    </div>

    <div class="logo">
      <img src="asset/biohazard.png">
    </div>

    </header>

    <div class="container">
        <div id="card-content">
          <div id="card-title">
            <h2>LOGIN</h2>
            <div class="underline-title"></div>            
          </div>
        </div>

        <form name="login_form" action="" onsubmit="return formValidasi()" method="POST">
            <table>
                <tr class="username">
                    <td><label for="username">Username</label></td>
                    <td>:</td>
                    <td><input type="text" name="username" id="username" style="border-radius: 0.475rem;" /></td>
                </tr>
                <tr class="password">
                    <td><label for="password">Password</label></td>
                    <td>:</td>
                    <td><input type="password" name="password" id="password" style="border-radius: 0.475rem;" /></td>
                </tr>
            </table>
            <td><input type="submit" name="login" value="Login" class="submit" /></td>
        </form>

        <?php if(isset($error)) : ?>
            <p style="color: red; font-family: roboto;" align="center">Username/Password salah</p>
        <?php endif; ?>     

    </div>
</body>
<script type="text/javascript" src="javascript/login.js"></script>
</html>
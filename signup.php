
<?php 

require_once 'connect.php';

error_reporting(0);//display error
session_start();

//check if you have user in your session, redirect to index.php.
if (isset($_SESSION['username'])) {
    header("Location: index.php");
}
//chech user click on sign up button or not.
if (isset($_POST['submit'])) {
	$username = $_POST['username'];
	$email = $_POST['email'];
	$password = md5($_POST['password']);
	$cpassword = md5($_POST['cpassword']);
//check if password is same as conform pasword.
	if ($password == $cpassword) {
		$sql = "SELECT * FROM users WHERE email='$email'";
		$result = mysqli_query($conn, $sql);
		if (!$result->num_rows > 0) {
			$sql = "INSERT INTO users (username, email, password)
					VALUES ('$username', '$email', '$password')";
			$result = mysqli_query($conn, $sql);
			if ($result) {
				echo "<script>alert(' User Registration Completed.')</script>";
				$username = "";
				$email = "";
				$_POST['password'] = "";
				$_POST['cpassword'] = "";
			} else {
				echo "<script>alert('oops! Something Wrong Went.')</script>";
			}
		} else {
			echo "<script>alert(' Email Already Exists.')</script>";
		}
		
	} else {
		echo "<script>alert('Password Not Matched.')</script>";
	}
}

?>

<!DOCTYPE html>


<html>
    <head>
        <title>login form</title>
        <meta charset="utf-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1.0">


        <!--custom css-->
        <link rel="stylesheet" type="text/css" href="css/style.css">

    </head>
    <body>
	<div class="container">
        <div class="loginbox">
            <img src="img/logoo.jpg" class="logo">
           
            <h1> SIGN UP</h1>
            <form action="" method="POST">
                <p>Username</p>
                <input type="text" name="username" placeholder="Enter username" value="<?php echo $username; ?>" required>
                 <p>Email</p>
                <input type="email" name="email" placeholder="Enter email" value="<?php echo $email; ?>" required >
                <p>Password</p>
                <input type="password" name="password" placeholder="Enter password" value="<?php echo $_POST['password']; ?>" required > 
                <p>Conform password</p>
                <input type="password" name="cpassword" placeholder="conform password" value="<?php echo $_POST['cpassword']; ?>" required >
                <input type="submit" name="submit" value="SIGN UP"><br>
                
                <p style="text-align:center"> Have an account?&nbsp;<a href="login.php">Login </a></p> 
               
             </form>
        </div>
	</div>	
    </body>
</html>
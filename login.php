<?php 
require_once 'connect.php';

session_start();

error_reporting(0);//display error
// check if you have a user in your session , redirect to index.php
//18303517524-2dm3gq8efff3ek4fdaib04sn1v3tp28l.apps.googleusercontent.com
//31AI3gzvgXiSwR6oAjfq-rBC
if (isset($_SESSION['username'])) {
    header("Location: index.php");
}
//checks user click on login button or not.
if (isset($_POST['submit'])) {
	$email = $_POST['email'];
	$password = md5($_POST['password']);
//sql query to fetch data from database.
	$sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
	$result = mysqli_query ($conn, $sql);
    
	if ($result->num_rows > 0) {
		$row = mysqli_fetch_assoc($result);
        $_SESSION['username'] = $row['username'];
        header("Location: index.php");
    
	} else {
		echo "<script>alert('Woops! Email or Password is Wrong.')</script>";
    
	}
}

?>

<!DOCTYPE html>

<html>
    <head>
    <!--meta tags-->
    <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>login form</title>
        <!--custom css-->
        <link rel="stylesheet" type="text/css" href="css/style.css">
    </head>
    <body>
    <div class="container">
        <div class="loginbox">
            <img src="img/logoo.jpg" class="logo">
            <form action="" method="POST">
            <h1> LOGIN</h1>
            <form>
                <p>Email</p>
                <input type="email" name="email" placeholder="Enter username" value="<?php echo $email; ?>" required>
                <p>Password</p>
                <input type="password" name="password" placeholder="Enter password" value="<?php echo $_POST['password']; ?>" required><br>
                <br>
                <br>
                <input type="submit" name="submit" value="LOGIN"><br>
                <p style="text-align:center">Don't have an account?&nbsp;<a href="signup.php">Sign In</a></p> <br>
                <br>
             </form>
        </div>
    </div>    
    </body>
</html>
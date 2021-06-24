<?php 

session_start();

?>

<!DOCTYPE html>
<html>
    <head>
        <title>index</title>
        <link rel="stylesheet" type="text/css" href="css/style.css">
    </head>
    <body>
    <?php echo "WELCOME"     . $_SESSION['username'];    ?>
    <a href="logout.php"> logout</a>
    </body>
    </html>

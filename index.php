<?php
session_start();

    include("connection.php");
    include("functions.php");
    //checks if the user is logged in
    $user_data = check_login($con);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ikea</title>
    <link rel="stylesheet" href="home.css">  
</head>
<body>
<style> 
    #text{
        font-family: Arial, Helvetica, sans-serif;
    }

</style>
<nav>
        <ul>
            <li><a href="index.php">home</a></li>
            <li>
                <a href="#">Producten</a>
                <ul class="dropdown">
                    <li><a href="brueau.php">Bureaus</a></li>
                    <li><a href="stoel.php">Stoelen</a></li>
                    <li><a href="bed.php">Bedden</a></li>
                    <li><a href="kast.php">Kasten</a></li>
                </ul>
            </li>
            <li><a href="tijden.php">Openingstijden</a></li>
            <li><a href="contact.php">Contact</a></li>
            <li><a href="logout.php">Logout</a></li>
        </ul>
    </nav>
    <h1 id="text">Ikea</h1>
    <br>
    <!--says hello to the logged in user-->
   <h3 id="text"> Hello, <?php echo $user_data['user_name']; ?> </h3>
  
</body>
</html>
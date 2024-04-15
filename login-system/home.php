<?php 
   session_start();

   include("db.php");
   if(!isset($_SESSION['valid'])){
    header("Location: index.php");
   }
?>

<?php

include("db.php");
if (!isset($_SESSION['valid'])) {
    header("Location: index.php");
    exit; // Add this line to prevent further execution
}

// Assuming you have already set the session variables for username and email
if (isset($_SESSION['username'])) {
    $username = $_SESSION['username'];
}

// Assuming you have set the session variable for email
if (isset($_SESSION['email'])) {
    $email = $_SESSION['email'];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Home</title>
</head>
<body>
    <div class="nav">
        <div class="logo">
            <p><a href="home.php">Welcome to our site!</a></p>
        </div>

        <div class="right-links">
            <?php
            // Display the Change Profile link if the user is logged in
            if (isset($username)) {
                echo "<a href='login.php?id='id'>Change Profile</a>";
            }
            ?>
            <a href="index.php"><button class="btn">Sign Up</button></a>
        </div>
    </div>

    <main>
        <div class="main-box top">
            <div class="top">
                <div class="box">
                    <?php
                    if (isset($username)) {
                        echo "<p>Hello <b>$username</b>! Welcome</p>";
                    }
                    ?>
                </div>
            </div>
        </div>
    </main>
</body>
</html>

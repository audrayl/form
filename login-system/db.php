<?php
$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'my_db'; // Replace with your database name

$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
    die('Could not connect to MySQL server:  dp.php mysqli_error'());
}
?>

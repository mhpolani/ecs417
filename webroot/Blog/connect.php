<!-- This file contains the code that connects my application to the sql database -->

<?php
/*
$servername = "localhost";
$username = "root";
$password = "password123"
$db = "login_details";
*/
$servername = getenv("MYSQL_SERVICE_HOST");
$dbport = getenv("MYSQL_SERVICE_PORT");
$username = getenv("DATABASE_USER");
$password = getenv("DATABASE_PASSWORD");
$db = getenv("DATABASE_NAME");
// Creates connection
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$conn = new mysqli($servername,$username,$password,$db);
// Checks connection
if ($conn->connect_error) 
{
    die("Connection failed: " . $conn->connect_error);
}
else
{
    // echo("yes");
}

?>



 
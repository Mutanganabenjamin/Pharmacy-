<?php

$username = "admin";
$password = "admin123";
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $submittedUsername = $_POST["username"];
    $submittedPassword = $_POST["password"];

   
    if ($submittedUsername === $username && $submittedPassword === $password) {
       
        header("Location: admin-dashboard.html");
        exit;
    } else {
      
        echo "Invalid credentials. Please try again.";
    }
}
?>

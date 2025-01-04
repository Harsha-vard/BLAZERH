<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve and sanitize form data
    $email = htmlspecialchars($_POST['email']);
    $password = htmlspecialchars($_POST['password']);

    // You can add your own authentication logic here (e.g., checking credentials in a database)
    
    // If login is successful, redirect to https://fundingpips.com/
    header("Location: https://fundingpips.com/");
    exit();
} else {
    // Redirect to the login form if accessed directly
    header("Location: index.html");
    exit();
}
?>


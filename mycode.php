<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Here you would typically query a database to check the credentials
    // This is a simple demonstration using a hardcoded username and password
    $correctUsername = 'admin';
    $correctPassword = 'password123';

    if ($username === $correctUsername && $password === $correctPassword) {
        echo "Login successful! Welcome, $username.";
    } else {
        echo "Invalid username or password.";
    }
}
?>

<?php
require_once 'Database.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['register'])) {
    $username = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? ''; 

    if (!empty($username) && !empty($password)) {
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT); // Hash the password

        $database = new Database();
        $wasUserCreated = $database->createUser($username, $hashedPassword);

        if ($wasUserCreated) {
            echo "<p>Registration successful. You can now log in.</p>";
            header('Location: index.php');
            exit;
        } else {
            echo "<p>Registration failed. The username may already be taken, or there was an error.</p>";
        }
    } else {
        echo "<p>Please fill in all required fields.</p>";
    }
} else {
   
    header('Location: register.php');
    exit;
}
?>
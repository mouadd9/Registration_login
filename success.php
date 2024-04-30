<?php
session_start();
if (!isset($_SESSION['username'])) {
    header('Location: index.php');
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Success</title>
    
</head>
<body>
    <p>Login successful. Welcome, <?= htmlspecialchars($_SESSION['username']); ?>!</p>
    <a href="index.php">Return to The login page</a>
</body>
</html>

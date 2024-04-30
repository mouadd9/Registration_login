<?php
require_once 'Database.php';
require_once 'User.php';

session_start();
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['login'])) {
    $username = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';

    $database = new Database();
    $user = $database->getUserByUsername($username);

    if ($user && password_verify($password, $user->getPassword())) {
        $_SESSION['username'] = $user->getUsername();
        header('Location: success.php');
        exit;
    } else {
        
        $_SESSION['error'] = 'Invalid login credentials.';
        header('Location: index.php');
        exit;
    }
}
?>
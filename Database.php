<?php

class Database {
    private $pdo;

    public function __construct() {
        $dsn = 'mysql:host=localhost;dbname=testdb;charset=utf8mb4';
        $username = 'root';
        $password = '';
        $options = [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES => false,
        ];

        try {
            $this->pdo = new PDO($dsn, $username, $password, $options);
        } catch (PDOException $e) {
            throw new PDOException($e->getMessage(), (int)$e->getCode());
        }
    }

    public function getUserByUsername($username) {
        $stmt = $this->pdo->prepare("SELECT * FROM users WHERE username = ?");
        $stmt->execute([$username]);
        $userData = $stmt->fetch();
        if ($userData) {
            return new User($userData['username'], $userData['password']);
        }
        return null;
    }

    public function createUser($username, $hashedPassword) {
        $stmt = $this->pdo->prepare("INSERT INTO users (username, password) VALUES (?, ?)");
        try {
            return $stmt->execute([$username, $hashedPassword]);
        } catch (PDOException $e) {
           
            return false;
        }
    }
    
}
?>
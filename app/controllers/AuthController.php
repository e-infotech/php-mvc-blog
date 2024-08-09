<?php

require_once 'app/models/User.php';

class AuthController {
    private $db;
    private $userModel;

    public function __construct($db) {
        $this->db = $db;
        $this->userModel = new User($db);
    }

    public function showLoginForm() {
        require 'app/views/auth/login.php';
    }

    public function login() {
        $username = $_POST['username'] ?? '';
        $password = $_POST['password'] ?? '';

        $user = $this->userModel->authenticate($username, $password);
        if ($user) {
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['username'] = $user['username'];
            header('Location: /');
            exit;
        } else {
            $error = "Invalid username or password";
            require 'app/views/auth/login.php';
        }
    }

    public function showRegistrationForm() {
        require 'app/views/auth/register.php';
    }

    public function register() {
        $username = $_POST['username'] ?? '';
        $email = $_POST['email'] ?? '';
        $password = $_POST['password'] ?? '';

        if ($this->userModel->create($username, $email, $password)) {
            $_SESSION['message'] = "Registration successful. Please log in.";
            header('Location: /login');
            exit;
        } else {
            $error = "Registration failed. Please try again.";
            require 'app/views/auth/register.php';
        }
    }

    public function logout() {
        session_destroy();
        header('Location: /');
        exit;
    }
}

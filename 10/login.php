<?php
session_start();

$users = [
    'alice' => ['password' => '$2y$10$vf68y2j7JB3sz3OmFQe3vuxsoBrQuNBD9j59uIVnJqJ5TwX1xbPi2', 'role' => 'admin'],
    'bob' => ['password' => '$2y$10$J/oJemQ34Non4rB3Gf6OeOSuFablci7XfXOXc3u1kS9c99u70.E2y', 'role' => 'editor'],
    'caroline' => ['password' => '$2y$10$S/YwX4j2U62ekgqpqOgZHOekkAqshyTnxS8gz3aejYe4OM35P4d2y', 'role' => 'user'],
];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if (isset($users[$username]) && password_verify($password, $users[$username]['password'])) {
        $_SESSION['user'] = $username;
        $_SESSION['role'] = $users[$username]['role'];
        header('Location: dashboard.php');
        exit();
    } else {
        header('Location: failed.php');
        exit();
    }
}
?>

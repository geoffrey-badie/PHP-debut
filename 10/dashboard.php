<?php
session_start();

if (!isset($_SESSION['user'])) {
    header('Location: login.html');
    exit();
}

$user = $_SESSION['user'];
$role = $_SESSION['role'];
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Tableau de bord</title>
</head>
<body>
    <h1>Bienvenue <?php echo htmlspecialchars($user); ?>, vous avez le rôle <?php echo htmlspecialchars($role); ?>.</h1>
    <form action="logout.php" method="POST">
        <input type="submit" value="Déconnexion">
    </form>
</body>
</html>
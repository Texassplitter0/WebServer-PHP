<?php
require 'db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $stmt = $pdo->prepare("SELECT * FROM users WHERE username = :username");
    $stmt->execute(['username' => $username]);
    $user = $stmt->fetch();

    if ($user && password_verify($password, $user['password'])) {
        echo "Login erfolgreich! Willkommen, " . htmlspecialchars($user['username']);
    } else {
        echo "Ungültige Anmeldedaten.";
    }
}
?>

<form method="POST" action="login.php">
    Benutzername: <input type="text" name="username" required><br>
    Passwort: <input type="password" name="password" required><br>
    <button type="submit">Einloggen</button>
</form>

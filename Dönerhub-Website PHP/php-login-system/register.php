<?php
require 'db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);

    try {
        $stmt = $pdo->prepare("INSERT INTO users (username, password) VALUES (:username, :password)");
        $stmt->execute(['username' => $username, 'password' => $password]);
        echo "Registrierung erfolgreich!";
    } catch (PDOException $e) {
        echo "Fehler bei der Registrierung: " . $e->getMessage();
    }
}
?>

<form method="POST" action="register.php">
    Benutzername: <input type="text" name="username" required><br>
    Passwort: <input type="password" name="password" required><br>
    <button type="submit">Registrieren</button>
</form>

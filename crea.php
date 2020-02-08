<?php
session_start();     //inserimento della parola dentro il database.
$parola = $_POST["parola"];
$significato = $_POST["significato"];
$connessione = new mysqli("remotemysql.com:3306", "vlIGVKqVUg", "R6OA2FGr12", "vlIGVKqVUg");
$nome = $_SESSION["Nome"];
$connessione->query("INSERT INTO Words (Parola, Significato, Username) VALUES ('$parola', '$significato', '$nome');"); //inserimento in database
echo "parola inserita nel database correttamente";
?>
<!-- fine inserimento parole -->
<form action="main.php" method="POST">
    <button type="submit">OK!</button>
</form>
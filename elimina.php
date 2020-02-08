<?php
    session_start();
    $parola = $_POST["parola"];   //prende la parola da eliminare.
    $significato =$_POST["significato"];
    $nome = $_SESSION["Nome"];
    $ruolo = $_SESSION["Role"];
    $connessione = new mysqli("remotemysql.com:3306","vlIGVKqVUg","R6OA2FGr12","vlIGVKqVUg");  //mi connetto al mio db.
    if($ruolo == 0){
        $connessione->query("DELETE FROM `Words` WHERE Parola = '$parola'");   //elimino parola ed in automatico anche il significato.
    }
    else{
        $connessione->query("DELETE FROM `Words` WHERE Parola = '$parola' AND Username = $nome");
    }
        echo "elemento rimosso correttamente!";
?>
    <form action="main.php" method="POST">       
        <button type="submit">OK!</button>
    </form>
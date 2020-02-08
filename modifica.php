<?php
    session_start();
    $parola = $_POST["parola"];       //prendo sia la parola sia il risultato.
    $significato =$_POST["significato"];
    $nome = $_SESSION["Nome"];
    $ruolo = $_SESSION["Role"];
    $connessione = new mysqli("remotemysql.com:3306","vlIGVKqVUg","R6OA2FGr12","vlIGVKqVUg");     //apro la connessione.
    if($ruolo==0)    //non ti permette di modificare nulla! se non sei admin.
    $connessione->query("UPDATE `Words` SET `Parola`='$parola',`Significato`='$significato' WHERE Parola='$parola'");  //uso UPDATE della query per modificare il significato della parola.
    else{
        $connessione->query("UPDATE `Words` SET `Parola`='$parola',`Significato`='$significato' WHERE Parola='$parola' AND Username ='$nome'");
    }
    echo "la parola inserita è stata modificata";   //tiro fuori in output che ho modificato correttamente il significato.
?>
    <form action="main.php" method="POST">       
        <button type="submit">OK!</button>
    </form>
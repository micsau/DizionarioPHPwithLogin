<?php
$parola = $_POST["parola"];  //prendo la parola che voglio cercare.
$connessione = mysqli_connect("remotemysql.com:3306", "vlIGVKqVUg", "R6OA2FGr12", "vlIGVKqVUg");
$sql = "SELECT * FROM `Words` WHERE parola = '$parola'";    //query per visualizzare il tutto.
$result = mysqli_query($connessione, $sql);
if (mysqli_num_rows($result) == 0) {
    echo "La parola da te trovata non è all'interno del database";
} else {
    while ($row = mysqli_fetch_assoc($result)) {
        echo $row["Significato"];        //tiro fuori solo il significato.
    }
}
mysqli_close($connessione);             //chiudo la connessione. 
?>
<form action="main.php" method="POST">
    <button type="submit">OK!</button>
</form>
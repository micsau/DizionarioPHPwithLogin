<?php
    $username = $_POST["Nome"];
    $password =$_POST["Password"];
    $role=$_POST["role"];
    if(!$username){
      exit("Inserisci un username!");
    }
    if(!$password){
      exit("Inserisci una password!");
    }
    $connessione = new mysqli("remotemysql.com:3306","vlIGVKqVUg","R6OA2FGr12","vlIGVKqVUg");  
    $sql = "SELECT username FROM Users WHERE username=$username";
    $result = mysqli_query($connessione,$sql);
    if (mysqli_num_rows($result) > 0) {
      exit("Username già registrato!");
    }
    $sql = "INSERT INTO Users (username, password, role)
            VALUES ('$username', '$password', '$role')";
    if (mysqli_query($connessione, $sql)) {
        echo "I nuovi dati sono stati inseriti con successo";
    } else {
        echo "Errore: " . $sql . "<br>" . mysqli_error($conn);
    }
    mysqli_close($connessione);
?>
<html>          <!-- dizioanario con il login -->
  <title>Dizionario</title>
  <h1>Cosa vuoi fare?</h1>
  <body>
      <form action="crea.php" method="POST">          <!-- uso la form per richiamare il file crea.php, facciamo la stessa cosa con le altre funzioni del dizionario -->
        Parola : <input type="text" name="parola">    <!-- Crea -->
        Significato : <input type="text" name="significato">
        <button type="submit"> Crea </button>
      </form>

      <form action="modifica.php" method="POST">
        Parola : <input type="text" name="parola">    <!-- Modifica -->
        Significato : <input type="text" name="significato">
        <button type = "submit"> Modifica </button>
      </form>

      <form action="elimina.php" method="POST">
        Parola : <input type="text" name="parola">    <!-- Elimina -->
        Significato : <input type="text" name="significato">
        <button type = "submit"> Elimina </button>
      </form>

      <form action="visualizza.php" method="POST">    
        Parola : <input type="text" name="parola">    <!-- Visualizza -->
        <button type = "submit"> Visualizza </button>
      </form>

      <form action="logout.php" method="POST">        <!-- Pulsante di logout --> 
        <button type = "submit"> Logout </button>
      </form>
  </body>
</html>     <!-- fine main -->
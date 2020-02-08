<?php
  session_start();
?>
<html>              <!-- Pagina Iniziale. -->
  <head>
    <title>Dizionario Saulle(tm) New </title>
  </head>
  <body>
      <form action="signup.php" method="POST">            <!-- prendo la signup per registrarmi -->
        Username : <input type="text" name="Nome">
        Password : <input type="password" name="Password">
        Ruolo : <select name="role">
          <option value=0>Admin</option>
          <option value=1>Utente</option>
          </select>
        <button type="submit"> Registrati </button>
      </form>
      <form action="login.php" method="POST">       <!--sfrutto la login per accedere al dizionario. -->
        Username : <input type="text" name="Nome">
        Password : <input type="password" name="Password">
        <button type="submit">Accedi</button> 
      </form>
  </body>
</html>
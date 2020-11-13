<?php
//richiedo obbligatoriamente questa classe
require 'flight/Flight.php';
//creo la variabile $BASEPATH, il percorso base del routing
$BASEPATH='/Jarvit/';
//richiamo il metodo route
Flight::route('/Login.php/', function(){

});
//faccio partire il routing
Flight::start();


            //form di login:
?>

<html>
<head>
    <link rel="icon" href="foto/Immagine.png" type="png" />
<title>Login</title>
    <link rel="stylesheet" type="text/css" href="css/login-style.css">
<body>
    <div class="loginbox">
   
        <h1>ACCEDI</h1>
       <form class="form" action="elogin.php" method="post">
            <p>Nome</p>
            <input type="text" placeholder="Mario" name="nome" required>
            <p>Cognome</p>
             <input type="text"  placeholder="Rossi"  name="cognome" required>
           <p>Email</p>
             <input type="text" placeholder="email@dom.com" name="email" required>
            <p>Password</p>
             <input type="password"  placeholder="Password"  name="pass1" required>
            <p>Codice Fiscale</p>
            <input type="text" placeholder="Codice Fiscale" name="codice_FiscaleL" required>
            <input type="submit" name="login" class="button" value="Login"> 
            <a href="Registrati.php">Non hai un account?<br> Per avere piu' azioni da compiere Registrati, <br> Non sai cosa ti perdi!!!  </a><br><br>
            <a href="http://tommaso.jcode.it/">Indietro  </a>
           <br><br>
        </form>
      
    </div>

</body>
</head>
</html>
    
     
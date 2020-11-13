<?php
use ezsql\Database;
use ezsql\Config;
use ezsql\Database\ez_mysqli;
//richiedo obbligatoriamente questa classe
require 'flight/Flight.php';
//creo la variabile $BASEPATH, il percorso base del routing
$BASEPATH='/Jarvit/';
//richiamo il metodo route
Flight::route('/Registrati.php/', function(){

});
//faccio partire il routing
Flight::start();

?>


<html>
<head>
   <link rel="icon" href="foto/Immagine.png" type="png" />
<title>Registrazione</title>
    
<link rel="stylesheet" type="text/css" href="css/login-style.css">
<body>
    

   <?php
        //se invia dati non è stato cliccato:
        //form di registrazione:
		if (!(isset($_POST['invia_dati']))){
		?>
    <div class="loginbox">
   
        
      <h1>REGISTRAZIONE</h1>
       <form class="form" action="" method="post">
            <p>Nome</p>
            <input type="text" placeholder="Mario" name="nome" required>
            <p>Cognone</p>
             <input type="text"  placeholder="Rossi"  name="cognome" required>
           
            <p>Codice Fiscale</p>
            <input type="text" placeholder="Codice Fiscale" name="codice_Fiscale" required>
            <p>Data di nascita</p>
             <input type="date"  placeholder="Data"  name="data" required>
           <p>indirizzo</p>
             <input type="text"  placeholder="indirizzo"  name="indirizzo" required>
           
           <p>Email</p>
             <input type="text" placeholder="email@dom.com" name="email" required>
            <p>Password</p>
             <input type="password"  placeholder="Password"  name="pass1" required>
           
           
            <input type="submit" name="invia_dati" class="button" value="Registrati">
        
                   
            <a href="Login.php">Hai gia' un account?  </a><br>
            <a href="http://tommaso.jcode.it/">Indietro  </a>
        </form>
       
    </div>
    
<?php
        //se invia dati è stato cliccato:
		} else {
            ?>
            <link rel="stylesheet" type="text/css" href="css/css.class.css">

            <?php
    
            //faccio partire la sessione
            session_start();
            //prendo le variabili da post e li converto in session()
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                $_SESSION['email'] = $_POST['email'];
            }

            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                $_SESSION['password'] = $_POST['pass1'];
            }

            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                $_SESSION['nome'] = $_POST['nome'];
            }

            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                $_SESSION['cognome'] = $_POST['cognome'];
            }
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                $_SESSION['codice_Fiscale'] = $_POST['codice_Fiscale'];
            }
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                $_SESSION['data'] = $_POST['data'];
            }
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                $_SESSION['indirizzo'] = $_POST['indirizzo'];
            }
            //prendo le variabili dalla sessione e li assegno 
            $email=  $_SESSION['email'] ;
            $psw=  $_SESSION['password'];
            $nome=  $_SESSION['nome'] ;
            $cognome=  $_SESSION['cognome'];
            $codice_Fiscale=  $_SESSION['codice_Fiscale'] ;
            $data=  $_SESSION['data'];
            $indirizzo=  $_SESSION['indirizzo'] ;

           


            require 'vendor/autoload.php';
            require 'db.php';
            require 'ezsql/lib/Config.php';
            require 'ezsql/Database/ez_mysqli.php';
    

            $setting = new Config('mysqli',['c0_tommasodev','jarvit2020','c0_tommasodev']);
            $db= new ez_mysqli($setting);
            
            //oggetto db
            //richiamo il metodo registrati()
            $db->assegna($email,$psw,$nome,$cognome,$codice_Fiscale,$data,$indirizzo);
            $db->registrati();
            echo 'ciao';
            }
        
		?>
</body>
</head>
</html>
    
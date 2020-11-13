<?php
use ezsql\Database;
use ezsql\Config;
use ezsql\Database\ez_mysqli;
//richiedo obbligatoriamente questa classe
require 'flight/Flight.php';
//creo la variabile $BASEPATH, il percorso base del routing
$BASEPATH='/Jarvit/';
//richiamo il metodo route
Flight::route('/elogin.php/', function(){

});
//faccio partire il routing
Flight::start();

?>
<link rel="icon" href="foto/Immagine.png" type="png" /> 
<img src="foto/ae1acabd2dcaeb057494e08a1a1369b0.jpg" id="sfondo" />
<link rel="stylesheet" type="text/css" href="css/css.class.css">

<?php 
//inizializzo la sessione
session_start();

 
//$nome= $_POST['nome'];

//prendo le varie varibili tramite post e session
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
        $_SESSION['codice_FiscaleL'] = $_POST['codice_FiscaleL'];
    }           

//assegno i valori presi dal form alle varie variabili
$email=  $_SESSION['email'] ; 
$psw=  $_SESSION['password'];
$nome=  $_SESSION['nome'] ; 
$cognome=  $_SESSION['cognome'];
$codice_Fiscale=  $_SESSION['codice_FiscaleL'] ; 


require 'vendor/autoload.php';
require 'ezsql/lib/Config.php';
require 'ezsql/Database/ez_mysqli.php';


$setting = new Config('mysqli',['c0_tommasodev','jarvit2020','c0_tommasodev']);
$db= new ez_mysqli($setting);

//oggetto db
//richiamo il metodo registrati()
$db->assegna($email,$psw,$nome,$cognome,$codice_Fiscale,'','');


//richiamo nella variabile $autenticato1 il metodo verifica1() che verifica se l'email inserita 
//e quella che esiste nel db sono uguali
$autenticato1=$db->verifica1();
//richiamo nella variabile $autenticato2 il metodo verifica2() che verifica se la password inserita 
//e quella che esiste nel db sono uguali
$autenticato2=$db->verifica2();

        // se le due variabili sono uguali vuol dire che email e password sono verificate correttamente
        if(($autenticato1==true)&&($autenticato2==true))
        {
            echo "<h1><b><font color='white'><span STYLE='background:darkblue;'> Benvenuto ".$nome." ".$cognome." </span></font></b></h1>";
            ?>
            <link rel="stylesheet" type="text/css" href="css/css.class.css">
        <center> 
            <tr><td><h1><b> <font color="white"><span STYLE="background:darkblue;">Ecco tutte le macchine che possiedi</span> </font> </b></h1></td></tr>
            <link rel="stylesheet" href="style.css">
           
                
<?php
            //richiamo il metodo query1()
            $db->query1();
            
            
              echo "<tr><td><h1><b> <font color='white'><span STYLE='background:darkblue;'>";
           //richiamo il metodo query2()
            $db->query2();
                echo "<form action='http://tommaso.jcode.it/'>";
            
                       echo" <input type='submit' class='button button1' value='Torna alla home' >";
                    echo "</form>";
          
                
?>
                  
              </span></font></b></h1></td>
</center>
	
       <?php
        }
        //se non è andato a buon fine
        else
        {
            ?>
            <link rel="stylesheet" type="text/css" href="css/css.class.css">
            <body background='foto/ae1acabd2dcaeb057494e08a1a1369b0.jpg'>
                <font color= 'white'><h1><center><font color='white'> <span STYLE='background:darkblue';>Autentificazione fallita</span></font></center></h1></font>         
            <form method='POST' action='login.php'>
     <center><input type='submit' class='button button1' value='Ritenta' name='Entra'></center>
     </form> </body>
         <?php            
        }
    ?>
    
                  

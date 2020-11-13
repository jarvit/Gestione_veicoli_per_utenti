<?php
/*******************************************************************************************************************************************************************************************************************************************************************************************************************************************
*
*Title: Test Jarvit con OOP & Routing
*Autore: Tommaso Arcuri
*Inizio: 22-10-2020
*Fine: 23-10-2020
*
*****************************************************************************************************************************************************************************************************************************************************************************************************************************************/
//richiedo obbligatoriamente questa classe
require 'flight/Flight.php';
//creo la variabile $BASEPATH, il percorso base del routing
$BASEPATH='/Jarvit/';
//richiamo il metodo route
Flight::route('', function(){

});

//faccio partire il routing
Flight::start();

?>
<link rel="icon" href="foto/Immagine.png" type="png" /> <!--immagine vicino link-->
<html>
<head><title>Inizio</title></head>
<img src="foto/fiat.jpg" id="sfondo" />
<link rel="stylesheet" type="text/css" href="css/css.class.css">
<body>
<center> <img src="foto/Immagine.png" width="600" height="325"></center>
<h1><font face="italic,coursive" color="white"><center>   <span STYLE="background:#00005c;">    Se non puoi andare in concessionaria, sara' lei a venire da te!!! <br>
        Benvenuto Utente, ti propongo un sito in cui tenere traccia della auto che possiedi <br> e visionare anche le caratteristiche di ognuna <br>  Selezionare una delle due sezioni: </span> </center></font></h1>

<center><div id="registra"><a href="Registrati.php"><button class="button"type="button">Registrati</button></a></div><br>
    <div id="login"><a href="Login.php"><button class="button" type="button">Accedi</button></a></div>
</center>
</body>
</html>
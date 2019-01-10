<?php 
$ip = $_SERVER['REMOTE_ADDR'];
$browser = $_SERVER['HTTP_USER_AGENT'];
$referrer = $_SERVER['HTTP_REFERER'];
if ($referrer == "") {
$referrer = "Accesso diretto al sito";
}
$host="localhost";
$username="root";
$password=""; 
$db_nome="my_salvatorefazio";
mysql_connect($host, $username, $password) or die("Impossibile connettersi al server: " . mysql_error());
mysql_select_db($db_nome) or die ("Accesso al database non riuscito: " . mysql_error());
$sql= "INSERT INTO Visitatori (ip,browser,referrer)";
$sql .="VALUES ('$ip','$browser','$referrer')";
mysql_query($sql);
          
?>
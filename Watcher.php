<?php 
$host="localhost";
$username="root";
$password=""; 
$db_nome="my_salvatorefazio";
$tab="Visitatori";
$matricola=$_POST['data'];
mysql_connect($host, $username, $password) or die("Impossibile connettersi al server: " . mysql_error());
mysql_select_db($db_nome) or die ("Accesso al database non riuscito: " . mysql_error());
$sql = "SELECT * FROM $tab  ";
$result = mysql_query($sql);

while($row = mysql_fetch_array($result)) 
{ echo $row['ip'];   echo '<br>';
  echo $row['browser'];   echo '<br>';
  echo $row['referrer'];   echo '<br>';
  echo $row['orario'];   echo '<br>';
  echo '<br>';  echo '<br>';
}
?>
<?php

$host="localhost";
$username="root";
$password=""; 
$db_nome="my_salvatorefazio";
$tab="Frasi";
$matricola=$_POST['data'];
mysql_connect($host, $username, $password) or die("Impossibile connettersi al server: " . mysql_error());
mysql_select_db($db_nome) or die ("Accesso al database non riuscito: " . mysql_error());
$sql = "SELECT * FROM $tab ORDER By scritta DESC Limit 3  ";
$result = mysql_query($sql);
$i=1;
while($row = mysql_fetch_array($result)) 
{$locali = utf8_encode($row['frase']);
  if($row['scritta']!='') {echo $row['scritta']; } ?><?
 ?><b><br><?php echo $locali; ?></b><?php
 if($row['img']!='')
 {?><br><img src="<?php echo $row['img'] ?>" alt="Immagine" style="width:50%"><?php }

 ?><br><br><?php $i=$i+1;
}
?>
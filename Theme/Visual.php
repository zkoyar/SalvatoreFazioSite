 <div class="w3-black w3-center w3-padding-24">Numero di Visualizzazioni : <?php $sql1 = "SELECT * FROM Visitatori   ";
$result1 = mysql_query($sql1);$i=1;

while($row1 = mysql_fetch_array($result1)) 
{$i=$i+1; }  
echo $i;?> </div>
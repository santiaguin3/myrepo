<?php

//Generar lista de numeros del 1-10
//Script con While, For y Do-While
echo "<br><b>1)</b></br>";
echo "<table border=1>";
$i=1;
while  ($i<=10)
{
  echo "<tr><td bgcolor='YELLOW'>".$i."</td></tr>";
  $i++;
}
echo "</table>";
echo "<br><b>_______________________________________________________</b></br>";
echo "<br><b>2)</b></br>";
echo "<table border=1>";
$i=1;
while  ($i<=10){
  echo "<td>".$i."</td>";
  $i++;
}
echo "</table>";

echo "<br><b>_______________________________________________________</b></br>";
echo "<br><b>3)</b></br>";
echo "<table border=1>";
$i=1;
while  ($i<=10){
  if(($i%2)==0){
    echo "<td bgcolor='RED'>".$i."</td>";
  }
  else{
    echo "<td bgcolor='YELLOW'>".$i."</td>";
  }
  $i++;
}
echo "</table>";
?>

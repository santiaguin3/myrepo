<html>
 <body bgcolor="E1BC8D">
  <form name=frm1 action="serie.php" method="POST">
   <table border="0" align="center">
    <td align=center> <font face="Times New Roman" size="4" color="white"<b><b> Digite un numero </b></b></td></font>
     <td align=center><input type="number" name="Numero" placeholder="Digite numero">
    </table>
   <center><input type="submit" value="Procesar"></center>
  </form>
 </body>
</html>
<?php
$n1 = $_POST ['Numero'];
echo "<b>Numero seleccionado</b>: ".$n1;
echo "<br><b>Lista de numeros decendente</b></br>";
echo "<table border=1>";
$i = $n1;
while  ($i>0){
  echo "<td>".$i."</td>";
  $i--;
}
echo "</table>";
echo "<br><b>Lista de numeros acendente</b></br>";
echo "<table border=1>";
$i=1;
while  ($i<=$n1){
  echo "<td>".$i."</td>";
  $i++;
}
echo "</table>";
echo "<br><b>Lista de numeros acendente y decendente</b></br>";

echo "<table border=1>";
$i=1;
while  ($i<=$n1){
  if(($i%2)==0){
    echo "<tr bgcolor='YELLOW'><td>".$i."</td></tr>";
  }
  else{
    echo "<tr bgcolor='YELLOW'><td>".$i."</td></tr>";
  }
  //echo "<tr><td>".$i."</td></tr>";
  $i++;
}
$i = $n1;
while  ($i>0){
  if(($i%2)==0){
    echo "<tr bgcolor='YELLOW'><td>".$i."</td></tr>";
  }
  else{
    echo "<tr bgcolor='YELLOW'><td>".$i."</td></tr>";
  }
  //echo "<tr><td>".$i."</td></tr>";
  $i--;
}
echo "</table>";

?>

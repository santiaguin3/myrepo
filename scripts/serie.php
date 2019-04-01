<html>
 <body bgcolor="BDDAEA">
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
   echo "<table border=1 cellpadding='9'>";
    $i = $n1;
     while  ($i>0){
      echo "<td>".$i."</td>";
       $i--;
}
 echo "</table>";
  echo "<br><b>Lista de numeros acendente</b></br>";
   echo "<table border=1 cellpadding='9'>";
    $i=1;
     while  ($i<=$n1){
      echo "<td>".$i."</td>";
       $i++;
}
echo "</table>";
 echo "<br><b>Lista de numeros acendente y decendente</b></br>";

echo "<table border=1 cellpadding='9'>";
 $i=1;
  while  ($i<=$n1){
   if(($i%2)==0){
    echo "<tr bgcolor='E2E3AD'><td>".$i."</td></tr>";
  }
  else{
    echo "<tr bgcolor='E2E3AD'><td>".$i."</td></tr>";
  }
  //echo "<tr><td>".$i."</td></tr>";
  $i++;
}
$i = $n1;
 while  ($i>0){
  if(($i%2)==0){
    echo "<tr bgcolor='E2E3AD'><td>".$i."</td></tr>";
  }
  else{
    echo "<tr bgcolor='E2E3AD'><td>".$i."</td></tr>";
  }
  //echo "<tr><td>".$i."</td></tr>";
  $i--;
}
echo "</table>";

//1
 echo "<br><b>1) Escriba un Script en PHP que  muestre por pantalla los números del 1 al 10 (Sin hacer uso de ninguna estructura tipo bucle)</b><br>";
  echo "<br>1 ";
  echo "2 ";
  echo "3 ";
  echo "4 ";
  echo "5 ";
  echo "6 ";
  echo "7 ";
  echo "8 ";
  echo "9 ";
  echo "10 ";

//2
echo "<br><b>2) Escriba un Script en PHP que  muestre por pantalla los números del 1 al 10</b><br>";
 echo "<br><table border =1 cellpadding='9'>";
  $i=1;
   while ($i<=10) {
    echo "<td>".$i."</td>";
     $i++;
}
echo "</table>";

//3
echo "<br><b>3) Escriba un Script en PHP que muestre por pantalla los primeros 100 números naturales.</b><br>";
 echo "<br><table border =1 cellpadding='9'>";
  $i=1;
   while ($i <= 100) {
    echo "<td>".$i."</td>";
    $i++;
}
echo "</table>";

//4
 echo "<br><b>4) Escriba un Script en PHP que muestre por pantalla los primeros 100 números naturales de 2 en 2</b><br>";
  echo "<br><table border =1 cellpadding='9'>";
   for($i = 0; $i <= 100; $i +=2 )
    echo "<td>".$i."</td>";
     echo "</table>";

//5
echo "<br><b>5) Escriba un Script en PHP que genere aleatoriamente 10 números enteros positivos y los muestre por pantalla. Use la función rand().</b><br>";
 $i = 1;
  echo "<br><table border =1 cellpadding='9'>";
   for ($i=1; $i<=10; $i++) {
    $aleatorio = rand(1,100);
     echo "<td>".$aleatorio."</td>";
    }
echo "</table>";

//6
echo "<br><b>6) Escriba un Script en PHP que muestre por pantalla la suma de los primeros 100 números naturales</b><br>";
 $suma=0;
  echo "<table border =1 cellpadding='9'>";
   for ($x=1; $x<=100; $x++) {
     echo "<td>".$x."</td>";
      $suma += $x;
    }
echo "<br></table></br>";
 echo "<b>La suma es:</b>","<b>$suma</b>";

//7
echo "<br><b>7) Escriba un Script en PHP que muestre por pantalla los múltiplos de 3 comprendidos en la serie del 1 al 100.</b></br>";
 echo "<table border =1 cellpadding='9'>";
  for($i = 0; $i <= 100; $i +=3 )
   echo "<td>".$i."</td>";
    echo "<br></table></br>";

//8
echo "<br><b>8) escriba un script en php que genere aleatoriamente 10 numeros enteros positivos y los muestre en pantalla, y visualice ademas el siguiente reporte en una tabla HTML</b>";
$par=0;
 $impar=0;
  echo "<br><table border =1 cellpadding='9'></br>";
   for($i=1;$i<=10;$i++){
    $aleatorio=rand(-1,100);
     if($aleatorio%2==0){
      $par=$par+1;
    }
  else{
    $impar=$impar+1;
  }
  echo "<td>".$aleatorio."</td>";
  }
  echo "</table>";
   echo "<br><b> - Total de los numeros pares generados: ".$par."</b></br>";
    echo "<br><b> - Total de numeros impares generados: ".$impar."</b></br>";
//9
echo "<br><b>9) Escriba un script en php que genere aleatoriamente 10 numeros enteros positivos y negativos los muestre en pantalla, y visualice ademas el siguiente reporte en una tabla HTML</b></br>";
echo "<br><b> - Total de números positivos pares generados.</b></br>";
echo "<br><b> - Total de números positivos impares generados.</b></br>";
echo "<br><b> - Total de números negativos pares generados.</b></br>";
echo "<br><b> - Total de números negativos impares generados.</b></br>";
 $parpositivo=0;
  $imparpositivo=0;
   $parnegativo=0;
    $imparnegativo=0;
    echo "<br></br>";
     echo "<table border=1>";
      for ($i=1;$i<=10;$i++) {
       $aleatorio = rand(-300,300);
        echo "<td>".$aleatorio." </td>";
         if($aleatorio > 0  &&  ($aleatorio%2)==0){
       $parpositivo=$parpositivo+1;
    }else if ($aleatorio > 0  && (($aleatorio%3)==0 || ($aleatorio%3)!=0)) {
  $imparpositivo=$imparpositivo+1;
  }
  if($aleatorio < 0  &&  ($aleatorio%2)==0){
    $parnegativo=$parnegativo+1;
    }else if ($aleatorio < 0  && (($aleatorio%3)==0 || ($aleatorio%3)!=0)) {
     $imparnegativo=$imparnegativo+1;
}
}
echo "</table>";
  echo "<br><b>Total de pares positivos: </td> <td>".$parpositivo."</b></br>";
   echo "<br><b> Total de pares positivos: </td> <td>".$imparpositivo."</b></br>";
    echo "<br><b> Total de pares negativos: </td> <td>".$parnegativo."</b></br>";
     echo "<br><b> Total de impares negativoss: </td> <td>".$imparnegativo."</b></br>";
//10
?>

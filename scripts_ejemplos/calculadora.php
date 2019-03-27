<?php
//Mi calculadora basica
$n1 = $_POST ['Numero1'];
$n2 = $_POST ['Numero2'];
$op = $_POST ['operacion'];

echo "Numero1: ". $n1;
echo "<br>Numero2: ". $n2;
echo "<br>operacion: ". $op;
switch($op){
  case '1':
  echo "<br>El resultado es: ". ($n1+$n2);
  break;
  case '2':
  echo "<br>El resultado es: ". ($n1-$n2);
  break;
  case '3':
  echo "<br>El resultado es: ". ($n1*$n2);
  break;
  case '4':
  echo "<br>El resultado es: ". ($n1/$n2);
  break;
  case '5':
  echo "<br>El resultado es: ". ($n1*$n2);
  break;
  case '6':
  echo "<br>El resultado es: ". sqrt($n1+$n2);
  break;
  default:
  echo "Operacion incorrecta";
}
 ?>

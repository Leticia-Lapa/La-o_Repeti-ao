<?php
// receber o valor do form

$numero = $_POST['numero'];

//Contador

$x = 1;
while($x <= 10)
{
  $result = $numero * $x;
  echo "$numero"."x"."$x"."="."$result";
  echo "<br>";
  $x++; 
}
?>
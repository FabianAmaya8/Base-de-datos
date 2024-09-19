<?php
$name=$_POST['nombre'];
$surname=$_POST['apellido'];
echo 'Su nombre es: '. $name.'<br> Su apellido es: '.$surname;

echo '<br>'.'<br>';

$num1=$_POST['num1'];
$num2=$_POST['num2'];
echo 'El 1er numero es: '. $num1.'<br> El 2do numero es: '.$num2;

echo '<br>'.'<br>';

$Suma=$num1+$num2;
$Resta=$num1-$num2;
$Multi=$num1*$num2; 
$Div=$num1/$num2;

echo 'la suma de: '.$num1.' y '.$num2. ' es '.$Suma.'<br>';
echo 'la resta de: '.$num1.' y '.$num2. ' es '.$Resta.'<br>';
echo 'la multiplicación de: '.$num1.' y '.$num2. ' es '.$Multi.'<br>';
echo 'la división de: '.$num1.' y '.$num2. ' es '.$Div.'<br>';

?> 
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div>
        <h2>Nombre y apellido del formulario</h2>

        <?php
        $name=$_POST['nombre'];
        $surname=$_POST['apellido'];
        echo 'Su nombre es: '. $name.'<br> Su apellido es: '.$surname;
        ?> 
    </div>
    <div>
        <h2>Operaciones del formulario</h2>

        <?php
        $num1=$_POST['num1'];
        $num2=$_POST['num2'];
        echo 'El 1er numero es: '. $num1.'<br> El 2do numero es: '.$num2.'<br>';
        
        $Suma=$num1+$num2;
        $Resta=$num1-$num2;
        $Multi=$num1*$num2; 
        $Div=$num1/$num2;
        
        echo 'la suma de: '.$num1.' y '.$num2. ' es '.$Suma.'<br>';
        echo 'la resta de: '.$num1.' y '.$num2. ' es '.$Resta.'<br>';
        echo 'la multiplicación de: '.$num1.' y '.$num2. ' es '.$Multi.'<br>';
        echo 'la división de: '.$num1.' y '.$num2. ' es '.$Div.'<br>';
        ?>
    </div>
    <div>
        <h2>Condicionales</h2>

        <?php
        if ($num1 < $num2){
            echo '<br> El numero '.$num2. ' es mayor que '.$num1;
        }else if ($num1 > $num2){
            echo '<br> El numero '.$num1. ' es mayor que '.$num2;
        }else{
            echo '<br> El numero '.$num1. ' y el '. $num2 .' son iguales';
        }
        ?>
    </div>
</body>
</html>
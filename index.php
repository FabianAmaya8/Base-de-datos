<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="Conten-type" content="text/html; charset=utf-8">
    <title>Base De Datos</title>
    <link rel="shortcut icon" href="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRP6gBftRB6i82nIcEJWQCMclmWrOHyhLV3mw&s" type="image/x-icon">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <font size="5" color="red" face="comic sans ms">
        <center>Bienvenido al mundo</center>
    </font>
    <?php
    echo 'hola mundo en php'
    ?>
    <font size="5" color="red" face="comic sans ms">
        <center>Declarar variables</center>
    </font>
    <?php
    $inicio = 'Hola';
    $fin = 'mundo';
    $todo = $inicio.' '.$fin;
    echo $todo;
    ?>
    <font size="5" color="green" face="comic sans ms">
    <center>Operaciones</center>
    
    <?php
    $num1=1;
    $num2=2;

    echo $num1.'<br>'.$num2.'<br>';
    
    $Suma=$num1+$num2;
    $Resta=$num1-$num2;
    $Multi=$num1*$num2; 
    $Div=$num1/$num2;

    echo 'la suma de: '.$num1.' y '.$num2. ' es '.$Suma.'<br>';
    echo 'la resta de: '.$num1.' y '.$num2. ' es '.$Resta.'<br>';
    echo 'la multiplicación de: '.$num1.' y '.$num2. ' es '.$Multi.'<br>';
    echo 'la división de: '.$num1.' y '.$num2. ' es '.$Div.'<br>';
    ?>
    </font>

    <font size="5" color="green" face="comic sans ms">
        <CENTER>Formulario</CENTER>
    </font>

    <form method="POST" action="datos.php">
        <table border="2" border_color="GREEN">
            <tr>
                <th>Nombre <input type="text" name='nombre' size='25' maxlength="50" REQUIRED></th>
                <th>Apellido <input type="text" name='apellido' size='25' maxlength="50"REQUIRED></th>
            </tr>  
            <tr>
                <th>1pr Numero <input type="number" name='num1' size='25' REQUIRED></th>
                <th>2do Numero <input type="number" name='num2' size='25' REQUIRED></th>
            </tr>  
            <tr>
                <td align="center"><input type="submit" value="enviar"></td>
            </tr>
        </table>
    </form>
    
</body>
</html>
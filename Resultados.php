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
        <?php
        $tipo =$_POST['tipo'];
        $lado =$_POST['lado'];
        $base =$_POST['base'];
        $alt =$_POST['alt'];

        $cuadrado = $lado*$lado;
        $rectangulo = $base*$alt;
        
        if ($tipo === 'cua' ){
            echo '<h2>Cuadrado</h2>';
            echo 'El area del cuadrado es: '.$cuadrado;

        }else if($tipo === 'rec'){    

            echo '<h2>rectangulo</h2>';
            echo 'El area del rectangulo es: '.$rectangulo;
        }


        ?>
    </div>
</body>
</html>
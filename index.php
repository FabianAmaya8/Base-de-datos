<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form method="POST" action="Resultados.php" class="formulario">
        <label for="tipo"> Area de:
            <select name="tipo">
                <option value="cua">Cuadrado</option>
                <option value="rec">Recangulo</option>
            </select>
        </label>

        <label for="lado">Lado:
            <input type="number" name="lado" >
        </label>

        <label for="base">Base:
            <input type="number" name="base">
        </label>
        
        <label for="alt">Altura:
            <input type="number" name="alt">
        </label>
        

        <input type="submit" value="Enviar">
    </form>
</body>
</html>
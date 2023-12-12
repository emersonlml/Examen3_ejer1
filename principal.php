<?php 
// Motor
include "conexion.inc.php";
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Convocatoria Universidad de la Ternura</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #3498db; /* Azul */
            color: white;
            text-align: center;
            margin: 20px;
        }

        header {
            background-color: #e44d26; /* Rojo */
            color: white;
            padding: 20px;
            border-radius: 10px;
        }

        h1 {
            color: #fff;
        }

        section {
            margin-top: 20px;
        }

        p {
            line-height: 1.6;
            color: #fff;
        }

        footer {
            margin-top: 20px;
            background-color: #e44d26; /* Rojo */
            color: white;
            padding: 10px;
            border-radius: 10px;
        }

        form {
            margin-top: 20px;
        }

        input[type="submit"] {
            background-color: #e44d26; /* Rojo */
            color: white;
            padding: 10px 20px;
            font-size: 16px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #d43822; /* Tono más oscuro de rojo al pasar el ratón */
        }
    </style>
</head>
<body>

    <header>
        <h1>¡Bienvenidos a la UMSA!</h1>
        <p>Formulario de egreso informatica 2023</p>
    </header>
    <form action="inicio.php" method="GET">
        <input type="hidden" value="F2" name="flujo" />
        <input type="hidden" value="P1" name="proceso"/>
        <input type="submit" value="Entrar" name="pagina inicio" />
    </form>
    <!-- Crea un botón de envío con el texto "Anterior- Siguiente" -->

</body>
</html>

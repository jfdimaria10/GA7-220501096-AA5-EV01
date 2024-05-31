<?php

    session_start();

    if(!isset($_SESSION['usuario'])){
        echo '
            <script>
                alert("Por favor inicie sesion");
                window.location = "index.php";
            </script>
        ';
        session_destroy();
        die();
    }

    session_destroy();

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenida - MagnitusPro</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-color: #f0f0f0;
        }
        .welcome-container {
            text-align: center;
            background-color: #ffffff;
            padding: 50px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .welcome-container h1 {
            font-size: 2.5em;
            margin: 0;
            color: #333;
        }
        .welcome-container p {
            font-size: 1.2em;
            color: #666;
        }
        .welcome-container form {
            margin-top: 20px;
        }
        .welcome-container button {
            padding: 10px 20px;
            font-size: 1em;
            color: #fff;
            background-color: #333;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .welcome-container button:hover {
            background-color: #555;
        }
    </style>
</head>
<body>
    <div class="welcome-container">
        <h1>Bienvenid@</h1>
        <p>Estamos felices de tenerte aquí.</p>
        <form method="POST">
        <a href="php/cerrar_sesion.php">Cerrar sesion</a>
        </form>
    </div>
</body>
</html>
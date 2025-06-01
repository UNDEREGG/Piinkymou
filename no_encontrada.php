<?php
    session_start();
    $email = $_SESSION['email'];

    if(isset($email)){

    }else{
        header('Location: salir.php');

    }
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página no disponible</title>
    <link href="https://fonts.googleapis.com/css2?family=Anton&display=swap" rel="stylesheet">
</head>
<body>

    <div class="night">
        <div class="shooting_star"></div>
        <div class="shooting_star"></div>
        <div class="shooting_star"></div>
        <div class="shooting_star"></div>
        <div class="shooting_star"></div>
        <div class="shooting_star"></div>
        <div class="shooting_star"></div>
    </div>

    <div class="container">
        <img src="https://cdn-icons-png.flaticon.com/512/2748/2748558.png" alt="Error icon">
        <h1>Esta página web no está disponible</h1>
        <p>AUN SE ENCUENTRA EN DESARROLLO</p>
        <div class="error-code">La página solicitada no puede ser encontrada.</div>
        <a href="principal.php" class="reload-button">Volver a la pagina principal</a>
    </div>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            overflow: hidden;
            background: radial-gradient(ellipse at bottom, #1b2735 0%, #090a0f 100%);
        }

        .container {
            position: relative;
            text-align: center;
            background-color: white;
            padding: 40px;
            border-radius: 8px;
            border: 2px solid white;
            background-color: transparent; /* Fondo completamente transparente */
            z-index: 2;
        }

        .container img {
            width: 80px;
            margin-bottom: 20px;
        }

        h1 {
            font-size: 24px;
            color: #ffffff;
            margin-bottom: 10px;
        }

        p {
            font-size: 16px;
            color: #ffffff;
        }

        .error-code {
            color: #ffffff;
            font-size: 14px;
            margin-top: 10px;
            margin-bottom: 20px;
        }

        .reload-button {
            background-color: #6a1ab5;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 4px;
            font-size: 14px;
            cursor: pointer;
            text-decoration: none;
        }

        .reload-button:hover {
            background-color: #6a1ab5;
        }

        /* Estilos para las estrellas fugaces */
        .night {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            overflow: hidden;
            transform: rotateZ(45deg);
            z-index: 1;
        }

        .shooting_star {
            position: absolute;
            left: 50%;
            top: 50%;
            height: 2px;
            background: linear-gradient(-45deg, #5f91ff, rgba(0, 0, 255, 0));
            border-radius: 999px;
            filter: drop-shadow(0 0 6px #699bff);
            animation: tail 3000ms ease-in-out infinite, shooting 3000ms ease-in-out infinite;
        }

        .shooting_star::before {
            content: "";
            position: absolute;
            top: calc(50% - 1px);
            right: 0;
            height: 2px;
            background: linear-gradient(-45deg, rgba(0, 0, 255, 0), #5f91ff, rgba(0, 0, 255, 0));
            transform: translateX(50%) rotateZ(45deg);
            border-radius: 100%;
            animation: shining 3000ms ease-in-out infinite;
        }

        .shooting_star::after {
            content: "";
            position: absolute;
            top: calc(50% - 1px);
            right: 0;
            height: 2px;
            background: linear-gradient(-45deg, rgba(0, 0, 255, 0), #5f91ff, rgba(0, 0, 255, 0));
            transform: translateX(50%) rotateZ(-45deg);
            border-radius: 100%;
            animation: shining 3000ms ease-in-out infinite;
        }

        @keyframes tail {
            0% { width: 0; }
            30% { width: 100px; }
            100% { width: 0; }
        }

        @keyframes shining {
            0% { width: 0; }
            50% { width: 30px; }
            100% { width: 0; }
        }

        @keyframes shooting {
            0% { transform: translateX(0); }
            100% { transform: translateX(300px); }
        }

        /* Posiciones de las estrellas fugaces */
        .shooting_star:nth-child(1) { top: calc(50% - -149px); left: calc(50% - 286px); animation-delay: 9871ms; }
        .shooting_star:nth-child(2) { top: calc(50% - 197px); left: calc(50% - 33px); animation-delay: 9633ms; }
        .shooting_star:nth-child(3) { top: calc(50% - -126px); left: calc(50% - 44px); animation-delay: 1100ms; }
        /* Añade más estrellas según se necesite */
    </style>

</body>
</html>

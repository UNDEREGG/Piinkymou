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
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Asistente Pinkymou</title>
  <link href="https://fonts.googleapis.com/css?family=Jomhuria&display=swap" rel="stylesheet" />
  <style>
    body {
      margin: 0;
      font-family: Arial, sans-serif;
      background-color: #4a4a4a;
      display: flex;
      justify-content: center;
      align-items: center;
      min-height: 100vh;
      padding: 20px;
    }
    header {
      position: absolute;
      top: 0;
      left: 0;
      width: 20%;
      padding: 50px;
      z-index: 2;
    }
    header a {
      text-decoration: none;
      color: white;
      font-family: 'Jomhuria', cursive;
      font-size: 30px;
      letter-spacing: 0.02em;
    }
    .container {
      background: white;
      border-radius: 20px;
      display: flex;
      flex-direction: row;
      overflow: hidden;
      width: 900px;
      max-width: 100%;
      box-shadow: 0 0 20px rgba(0,0,0,0.3);
    }
    .video-section {
      width: 40%;
      background-color: #333;
    }
    .video-section video {
      width: 100%;
      height: 100%;
      object-fit: cover;
    }
    .chat-section {
      padding: 20px;
      width: 60%;
      display: flex;
      flex-direction: column;
      justify-content: flex-start;
    }
    .welcome {
      font-size: 16px;
      color: #333;
    }
    .chat-response {
      margin-top: 15px;
      font-size: 14px;
      color: #111;
    }
    .input-box {
      display: flex;
      border: 1px solid #000;
      border-radius: 10px;
      overflow: hidden;
      margin-top: auto;
    }
    .input-box input {
      border: none;
      padding: 15px;
      flex: 1;
      font-size: 16px;
      outline: none;
    }
    .input-box button {
      background: #000;
      color: #fff;
      border: none;
      padding: 0 20px;
      cursor: pointer;
      font-size: 20px;
    }

    @media (max-width: 768px) {
      .container {
        flex-direction: column;
        width: 100%;
        max-width: 500px;
      }
      .video-section {
        width: 100%;
        height: auto;
      }
      .chat-section {
        width: 100%;
      }
    }
  </style>
</head>
<body>
  <header>
    <a href="principal.php"><h2>Pinkymou</h2></a>
  </header>

  <div class="container">
    <div class="video-section">
      <video id="botVideo" autoplay playsinline>
        <source src="archivos/videos/avatar.mp4" type="video/mp4">
        Tu navegador no soporta video HTML5.
      </video>
    </div>
    <div class="chat-section">
      <div class="welcome">
        <p>Holaaa, bienvenido al asistente de ayuda de pinkymou.<br>
        Me llamo Jorge y hago parte de la comunidad de pinkymou,<br>
        ¿En que podemos ayudar el día de hoy?</p>
      </div>
      <div id="chatResponses"></div>
      <div class="input-box">
        <input id="userInput" type="text" placeholder="Escribe tu pregunta aqui..." />
        <button id="sendBtn">&#9658;</button>
      </div>
    </div>
  </div>

  <script>
    window.addEventListener("DOMContentLoaded", () => {
      const video = document.getElementById("botVideo");
      video.muted = false;
      video.play();
    });

    document.getElementById("sendBtn").addEventListener("click", () => {
      const input = document.getElementById("userInput");
      const value = input.value.trim();
      if (!value) return;

      // Cambiar video
      const video = document.getElementById("botVideo");
      video.innerHTML = '<source src="archivos/videos/avatar-fin.mp4" type="video/mp4">';
      video.load();
      video.play();

      // Mostrar mensaje del usuario
      const responses = document.getElementById("chatResponses");
      const userMsg = document.createElement("p");
      userMsg.className = "chat-response";
      userMsg.textContent = `Tú: ${value}`;
      responses.appendChild(userMsg);

      // Mostrar mensaje de error
      const errorMsg = document.createElement("p");
      errorMsg.className = "chat-response";
      errorMsg.textContent = "Lo sentimos, ha ocurrido un error. Por favor, inténtalo de nuevo más tarde. Muchas gracias por tu comprensión.";
      responses.appendChild(errorMsg);

      // Limpiar input
      input.value = "";
    });
  </script>
</body>
</html>

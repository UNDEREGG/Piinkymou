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
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Perfil de Usuario</title>
  <link href="https://fonts.googleapis.com/css?family=Jomhuria&display=swap" rel="stylesheet" />
  <style>
    * {
      box-sizing: border-box;
      font-family: 'Poppins', sans-serif;
    }

    body, html {
      margin: 0;
      padding: 0;
      height: 100vh;
    }

    .bg {
      width: 100%;
      height: 100vh;
      display: flex;
      align-items: flex-start;
      justify-content: center;
      padding-top: 10vh;
      background-size: 300% 300%;
      background-image: linear-gradient(-45deg, black 0%, black 25%, black 51%, #006503 100%);
      animation: AnimateBG 20s ease infinite;
      position: relative;
    }

    @keyframes AnimateBG {
      0% { background-position: 0% 50%; }
      50% { background-position: 100% 50%; }
      100% { background-position: 0% 50%; }
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
      font-size: 24px;
      letter-spacing: 0.05em;
    }

    .profile-container {
      background-color: rgba(255, 255, 255, 0.5);
      backdrop-filter: blur(10px);
      border-radius: 12px;
      box-shadow: 0 0 20px rgba(0,0,0,0.2);
      width: 600px;
      text-align: center;
      padding: 20px;
    }

    .profile-image img {
      width: 120px;
      height: 120px;
      border-radius: 50%;
      object-fit: cover;
    }

    #changePicBtn {
      margin: 10px auto 20px;
      background: none;
      border: none;
      cursor: pointer;
      color: #8416df;
      font-weight: bold;
      display: flex;
      align-items: center;
      justify-content: center;
      gap: 8px;
    }

    #changePicBtn img {
      width: 20px;
      height: 20px;
    }

    .profile-info h2 {
      margin: 15px 0 10px;
      font-size: 24px;
    }

    .info-grid {
      display: flex;
      flex-wrap: wrap;
      justify-content: space-between;
      gap: 10px;
      margin: 20px 0;
    }

    .info-item {
      background: rgba(255,255,255,0.7);
      padding: 10px;
      border-radius: 8px;
      flex: 1 1 45%;
      min-width: 200px;
    }

    .info-item p {
      margin: 4px 0;
      font-size: 14px;
      color: #333;
    }

    #editBtn {
      margin-top: 15px;
      background-color: #28a745;
      color: white;
      border: none;
      padding: 8px 16px;
      border-radius: 6px;
      cursor: pointer;
    }
    
    #Listar {
      margin-top: 15px;
      background-color: #0e5a86;
      color: white;
      border: none;
      padding: 8px 16px;
      border-radius: 6px;
      cursor: pointer;
      text-decoration: none;
      display: inline-block;
    }
    #Listar a {
      color: white;
      text-decoration: none;
    }
  </style>
</head>
<body>
  <div class="bg">
    <header>
      <a href="principal.php"><h2>Pinkymou</h2></a>
    </header>
    <div class="profile-container">
      <div class="profile-card">
        <div class="profile-image">
          <img id="profilePic" src="archivos/imagenes/imagen_del_usuario.png" alt="Usuario" />
          <input type="file" id="fileInput" accept="image/*" hidden />
        </div>
        <button id="changePicBtn">
          <img src="iconos/icono-cambiar.png" alt="Cambiar foto">Cambiar foto
        </button>

        <div class="profile-info">
          <h2 id="userName">Jorge Emilio Pérez Guzman</h2>
          <div class="info-grid">
            <div class="info-item correo">
              <p><b>Correo:</b></p>
              <p id="email">Jorge@gmail.com</p>
            </div>
            <div class="info-item telefono">
              <p><b>Teléfono:</b></p>
              <p id="telefono">+56 9 1234 5678</p>
            </div>
            <div class="info-item direccion">
              <p><b>Dirección:</b></p>
              <p id="direccion">Av. Siempre Viva 123</p>
            </div>
            <div class="info-item pais">
              <p><b>País:</b></p>
              <p id="pais">Chile</p>
            </div>
            <div class="info-item tarjeta">
              <p><b>Tarjeta:</b></p>
              <p id="tarjeta">**** **** **** 1234</p>
            </div>
          </div>

          <button id="editBtn">Editar Perfil</button>
          <button id="Listar" class="listar"> 
            <a href="ListarProductos.html">Ver Productos Seleccionados</a>
          </button>
        </div>
      </div>
    </div>
  </div>

  <script>
    const editBtn = document.getElementById("editBtn");

    const userName = document.getElementById("userName");
    const email = document.getElementById("email");
    const telefono = document.getElementById("telefono");
    const direccion = document.getElementById("direccion");
    const pais = document.getElementById("pais");
    const tarjeta = document.getElementById("tarjeta");

    editBtn.addEventListener("click", () => {
      const newName = prompt("Nuevo nombre:", userName.textContent);
      const newEmail = prompt("Nuevo correo:", email.textContent);
      const newTel = prompt("Nuevo teléfono:", telefono.textContent);
      const newDir = prompt("Nueva dirección:", direccion.textContent);
      const newPais = prompt("Nuevo país:", pais.textContent);
      const newTarjeta = prompt("Nueva tarjeta:", tarjeta.textContent);

      if (newName) userName.textContent = newName;
      if (newEmail) email.textContent = newEmail;
      if (newTel) telefono.textContent = newTel;
      if (newDir) direccion.textContent = newDir;
      if (newPais) pais.textContent = newPais;
      if (newTarjeta) tarjeta.textContent = newTarjeta;
    });

    const changePicBtn = document.getElementById("changePicBtn");
    const fileInput = document.getElementById("fileInput");
    const profilePic = document.getElementById("profilePic");

    changePicBtn.addEventListener("click", () => {
      fileInput.click();
    });

    fileInput.addEventListener("change", (e) => {
      const file = e.target.files[0];
      if (file) {
        profilePic.src = URL.createObjectURL(file);
      }
    });
  </script>
</body>
</html>

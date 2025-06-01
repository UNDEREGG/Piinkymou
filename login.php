<?php
    include('conexion.php');
    $email = $_POST['email'];
    $clave = $_POST['clave'];

    $datos = new basedatos();
    $resultado = $datos->login($email, $clave);
    $array = mysqli_fetch_array($resultado);

    if($array['registros'] > 0){
        session_start();
        $_SESSION['email'] = $email;
        header('Location: principal.php');
    }
    else{
        echo "Datos incorrectos";
    }
?>
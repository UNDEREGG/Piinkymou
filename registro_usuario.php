<?php
    $email = $_POST['email'];
    $password = $_POST['password'];

    $stmt = $conexion->prepare("INSERT INTO usuarios (email, password) VALUES (?, ?)");
    $stmt->bind_param("ss", $email, $password);

    if ($stmt->execute()) {
        header('Location: index.html'); // Redirigir a la página de inicio
        e
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
    $conexion->close();
?>

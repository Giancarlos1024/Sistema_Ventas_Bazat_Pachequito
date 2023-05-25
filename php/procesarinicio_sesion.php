<?php

include 'conexion.php';
if(isset($_POST['iniciar'])){
    $fuser = $_POST['user'];
    $fpassword = $_POST['password'];

    // Generar el hash de la contraseña utilizando bcrypt
    $hashedPassword = password_hash($fpassword, PASSWORD_DEFAULT);

    // Consulta para verificar si el usuario existe
    $consultaUsuario = "SELECT * FROM inicio_sesion WHERE usuario = '$fuser'";
    $resultadoUsuario = mysqli_query($enlace, $consultaUsuario);

    // Verificar si se encontraron resultados
    if (mysqli_num_rows($resultadoUsuario) > 0) {
        // El usuario ya existe, muestra un mensaje de error o realiza alguna acción correspondiente
        echo "El usuario ya existe en la base de datos.";
    } else {
        // El usuario no existe, puedes proceder a insertar los datos en la base de datos

        /*$insertinicio_sesionDatos = "INSERT INTO inicio_sesion VALUES('$fuser', '$fpassword', '')";
        $ejecutarinicioInsertar = mysqli_query($enlace, $insertinicio_sesionDatos);*/
        
        $insertinicio_sesionDatos = "INSERT INTO inicio_sesion VALUES('$fuser', '$hashedPassword', '')";
        $ejecutarinicioInsertar = mysqli_query($enlace, $insertinicio_sesionDatos);
        if ($ejecutarinicioInsertar) {
            echo "Registro insertado correctamente.";
        } else {
            echo "Error al insertar el registro: " . mysqli_error($enlace);
        }
    }
}


?>
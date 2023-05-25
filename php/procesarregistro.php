<?php

include 'conexion.php';
if(isset($_POST['Registrarse'])){
    $fusuarioregistro = $_POST['usuario_registrado'];
    $fnombre = $_POST['nombre'];
    $fapellido = $_POST['apellido'];
    $fdireccion = $_POST['direccion'];
    $fcorreo = $_POST['correo'];
    $fpassword = $_POST['password'];
    $fconf_password = $_POST['conf_password'];


    // Generar el hash de la contraseña utilizando bcrypt
    $hashedPassword = password_hash($fpassword, PASSWORD_DEFAULT);

    // Consulta para verificar si el usuario existe
    $consultaUsuarioRegistro = "SELECT * FROM registro_usuarios WHERE usuario = '$fusuarioregistro'";
    $resultadoUsuarioRegistro = mysqli_query($enlace, $consultaUsuarioRegistro);

    // Verificar si se encontraron resultados
    if (mysqli_num_rows($resultadoUsuarioRegistro) > 0) {
        // El usuario ya existe, muestra un mensaje de error o realiza alguna acción correspondiente
        echo "El usuario ya existe en la base de datos.";
    } else {
        // El usuario no existe, puedes proceder a insertar los datos en la base de datos

        /*$insertinicio_sesionDatos = "INSERT INTO inicio_sesion VALUES('$fuser', '$fpassword', '')";
        $ejecutarinicioInsertar = mysqli_query($enlace, $insertinicio_sesionDatos);*/
        
        $insertusuarioregistroDatos = "INSERT INTO Registro_Usuarios VALUES('$fusuarioregistro', '$hashedPassword', '')";
        $ejecutarusuarioregistroInsertar = mysqli_query($enlace, $insertusuarioregistroDatos);
        if ( $ejecutarusuarioregistroInsertar) {
            echo "Registro insertado correctamente.";
        } else {
            echo "Error al insertar el registro: " . mysqli_error($enlace);
        }
    }
}


?>
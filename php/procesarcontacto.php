<?php
    include 'conexion.php';

    if(isset($_POST['registro'])){
        $fnombre = $_POST['fnombre'];
        $fapellido = $_POST['fapellido'];
        $fedad = $_POST['fedad'];
        $fdireccion = $_POST['fdireccion'];
        $fcorreo = $_POST['fcorreo'];
        $fmensaje = $_POST['fmensaje'];
    

        $insertformularioDatos = "INSERT INTO formulario VALUES('$fnombre', '$fapellido', $fedad, '$fdireccion', '$fcorreo', '$fmensaje','')";
        $ejecutarformulariosInsertar = mysqli_query($enlace, $insertformularioDatos);

        if($ejecutarformulariosInsertar){
            echo "Registro insertado correctamente.";
        } else {
            echo "Error al insertar el registro: " . mysqli_error($enlace);
        }
    }
?>
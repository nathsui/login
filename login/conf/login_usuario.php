<?php

session_start();

include 'conexion_be.php';

$correo = $_POST['correo'];
$contraseña = $_POST['contraseña'];

$validar_login = mysqli_query($conexion, "SELECT * FROM usuarios WHERE correo= '$correo'
                                             and contraseña= '$contraseña' ");

if(mysqli_num_rows($validar_login) > 0){
    $_SESSION['usuario'] = $correo;
    header("location: ../bienvenida.php");
    exit();

}else{
    echo '
    <script>
    alert("El Usuario no existe.");
    window.location = "../login.php";
    </script>
    '; 
    exit();
}

?>

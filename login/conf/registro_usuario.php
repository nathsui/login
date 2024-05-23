<?php

include 'conexion_be.php';

$nombre_completo = $_POST['nombre_completo'];
$correo = $_POST['correo'];
$usuario = $_POST['usuario'];
$contraseña = $_POST['contraseña'];

$query = "INSERT INTO usuarios(nombre_completo, correo, usuario, contraseña) 
            VALUE ('$nombre_completo', '$correo','$usuario','$contraseña')";

//verificar que el correo no se repita en la base de datos
$verificar_correo = mysqli_query($conexion,"SELECT * FROM usuarios WHERE correo= '$correo' ");

if(mysqli_num_rows($verificar_correo) > 0){
    echo '
    <script>
    alert("Este Correo ya esta en uso.");
    window.location = "../login.php";
    </script>
    '; 
    exit();
}
$verificar_usuario = mysqli_query($conexion,"SELECT * FROM usuarios WHERE usuario= '$usuario' ");

if(mysqli_num_rows($verificar_usuario) > 0){
    echo '
    <script>
    alert("Este Usuario ya esta en uso.");
    window.location = "../login.php";
    </script>
    '; 
    exit();
}

$ejecutar = mysqli_query($conexion, $query);

if($ejecutar){
    echo '
    <script>
    alert("Registro exitoso");
    window.location = "../login.php";
    </script>
    ';    
}else{
    echo '
    <script>
    alert("A ocurrido un error, intentalo de nuevo");
    window.location = "../login.php";
    </script>
    ';
}
mysqli_close($conexion);

?>
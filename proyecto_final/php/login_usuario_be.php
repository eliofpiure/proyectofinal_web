<?php
include 'conexion_be.php';
$correo = $_POST['correo'];
$contrasena = $_POST['contrasena'];

$validar_login= mysqli_query($conexion, "SELECT * FROM usuario where correo='$correo' and contrasena= '$contrasena'");

if(mysqli_num_rows($validar_login)>0){
    header("location:principal.php");
    exit;
    
}else{
    echo'
    <script>
      alert("Usuario no existente por favor verifique los datos introducidos");
      window.location = "../index.php";
    </script>
    ';
    
    exit;  
}
?>
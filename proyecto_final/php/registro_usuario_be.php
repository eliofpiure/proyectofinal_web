<?php

include 'conexion_be.php';

$nombre_completo = $_POST ['nombre_completo']; 
$correo = $_POST ['correo'];
$usuario= $_POST ['usuario'];
$contrasena= $_POST ['contrasena'];

//encriptamiento de contraseña
$contrasena_encript= hash('sha512', $contrasena_encript);

$query = "INSERT INTO usuario (nombre_completo, correo, usuario, contrasena) 
          VALUES('$nombre_completo', '$correo', '$usuario', '$contrasena')";


//verificar que el correo no se repita en la base de datos
$verificar_correo=mysqli_query($conexion,"select * from usuario where correo='$correo'");

if(mysqli_num_rows($verificar_correo)>0){
    echo '
    <script>
        alert("Este correo ya existe, intenta con otro diferente");
        window.location = "../index.php";
    </script>
    ';
    exit();
}
    // almacenar datos en la base 
$ejecutar = mysqli_query($conexion, $query);

if($ejecutar){
    echo '
      <script>
        alert("Usuario almacenado correctamente");
        window.location = "../index.php";
      </script> 
    ';
}  else {
    echo '
      <script>
        alert("intentalo de nuevo usuario no almacenado");
        window.location= "../index.php";
      </script>
    ';
}        
 mysqli_close($conexion);
?>
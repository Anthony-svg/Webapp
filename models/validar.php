<?php
$usuario=$_POST['usuario'];
$contraseña=$_POST['contraseña'];
session_start();
$_SESSION['usuario']=$usuario;

$conexion=mysqli_connect("localhost","root","","base_uta");

$consulta="SELECT*FROM usuarios where CED_USU='$usuario' and CLAVE_USU='$contraseña'";
$resultado=mysqli_query($conexion,$consulta);


$filas=mysqli_fetch_array($resultado);

if(is_null($filas)){
    
    echo "<script>
               alert('Usuario o contraseña incorrecto');
               window.location= '../views/modules/login.php'
   </script>";
?>
<?php



    
}else

    if($filas['PERF_USU']=='Administrador'){ //administrador
    header("location:../views/modules/IAdministrador.php");

    }else
    if($filas['PERF_USU']=='Secretaria'){ //cliente
    header("location:../views/modules/ISecretaria.php");
    }
    else{
    ?>
    <?php
    include("../index.php");
    ?>
    <h1 class="bad">ERROR EN LA AUTENTIFICACION</h1>
    <?php
}

mysqli_free_result($resultado);

mysqli_close($conexion);

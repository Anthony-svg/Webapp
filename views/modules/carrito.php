<?php
session_start();

$mensaje="";

if(isset($_POST['btnAccion'])){
    
    switch($_POST['btnAccion']){

        case 'agregar':
            if(is_numeric( openssl_decrypt($_POST['ID_PROD'],COD,KEY))){
                $ID=openssl_decrypt($_POST['ID_PROD'],COD,KEY);
                $mensaje.= "OK ID Correcto ".$ID."<br>";
            }else{
                $mensaje.= "Error ID Incorrecto "."<br>";
            }
        
            if(is_string( openssl_decrypt($_POST['NOM_PROD'],COD,KEY))){
                $NOMBRE=openssl_decrypt($_POST['NOM_PROD'],COD,KEY);
                $mensaje.= "OK NOMBRE Correcto ".$NOMBRE."<br>";
            }else{
                $mensaje.= "Error NOMBRE Incorrecto "."<br>";
            }
            
            if(is_numeric( openssl_decrypt($_POST['PRE_PROD'],COD,KEY))){
                $PRECIO = openssl_decrypt($_POST['PRE_PROD'],COD,KEY);
                $mensaje.= "OK PRECIO Correcto ".$PRECIO."<br>";
            }else{
                $mensaje.= "Error PRECIO Incorrecto "."<br>";
            }
            
            if(is_numeric( openssl_decrypt($_POST['CANT_PROD'],COD,KEY))){
                $CANTIDAD = openssl_decrypt($_POST['CANT_PROD'],COD,KEY);
                $mensaje.= "OK CANTIDAD Correcta ".$CANTIDAD."<br>";
            }else{
                $mensaje.= "Error CANTIDAD Incorrecta "."<br>";
            }

            if(!isset($_SESSION['CARRITO'])){
                $producto=array(
                    'ID'=>$ID,
                    'NOMBRE'=>$NOMBRE,
                    'PRECIO'=>$PRECIO,
                    'CANTIDAD'=>$CANTIDAD
                );
                $_SESSION['CARRITO'][0] = $producto;
            }else{
                $NumeroProductos=count($_SESSION['CARRITO']);
                $producto=array(
                    'ID'=>$ID,
                    'NOMBRE'=>$NOMBRE,
                    'PRECIO'=>$PRECIO,
                    'CANTIDAD'=>$CANTIDAD
                );
                $_SESSION['CARRITO'][$NumeroProductos] = $producto;
            }
            $mensaje = print_r($_SESSION,true);



            break;
    }

}

?>
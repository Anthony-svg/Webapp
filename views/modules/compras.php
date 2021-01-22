<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable = no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, shrink-to-fit=no">
    <title>Compras</title>
    <link rel=StyleSheet href="../../css/template.css" typr="text/css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</head>

<body>
<header>
        <h1><img id="Logo1" img src="../../images/Logo1.jpg" width="100" height="100"></h1>
</header> 
<?php
            require_once("../../models/isLogin.php");

            if($estado){         
                   
                    ?>
                        <nav>
                        <ul>
                        <li> <a href="inicio.php">Inicio</a> </li>
                        <li> <a href="nosotros.php">Nosotros</a> </li>
                        <li> <a href="compras.php">Compras</a> </li>
                        <li> <a href="contactanos.php"> Contactenos</a> </li>
                        
                        <br><br>
                        <li> <a href="../../models\logout.php"> Cerrar sesión</a> </li>
                       
                    
                    </ul>
                </nav>
            <br><br>
        <?php
         echo "Bienvenido/a ";
         echo $_SESSION['nom'];
            }else{
            
                ?>
                    <nav>
                    <ul>
                    <li> <a href="inicio.php"> Inicio</a> </li>
                    <li class="nav-item"> <a class="nav-link active" href="compras.php">Compras</a> </li>
                    <li> <a href="contactanos.php"> Contactenos</a> </li>
                    <li> <a href="login.php"> Iniciar Sesión</a> </li>
                   
                
                </ul>
            </nav>

                <?php
                
            }
        ?>

        <br>
        <br>
        <div class="container">
        <br>
        <div class="alert alert-success">
            Pantalla de mensaje..
            <a href="#" class="badge badge-succes">Ver carrito</a>
        </div>
        
        </div>

</body>

</html>
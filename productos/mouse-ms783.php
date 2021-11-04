<html>
<head>
    <meta charset="UTF-8">
    <title>Game Shop</title>
    <link rel=StyleSheet href="../css/productos.css" typr="text/css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>

    <body>

    <header>
        <h1><img id="Logo1" img src="../images/Logo1.jpg" width="100" height="100"></h1>
        </header> 
        <?php
            session_start();
            require_once("../models/isLogin.php");

            if($estado){         
                   
                    ?>
                        <nav class="navbar navbar-dark bg-dark">
                        <div style="color:white;">
                    <?php 
                    echo "Bienvenido/a ";
                    echo $_SESSION['nom'];
                    ?>
                    </div>
    
                        <ul>
                        <li class="nav-item"> <a class="nav-link" href="../views/modules/inicio.php"> Inicio</a> </li>
                        <li class="nav-item"> <a class="nav-link" href="../views/modules/nosotros.php"> Nosotros</a> </li>
                        
                        <li class="nav-item"> <a class="nav-link" href="../views/modules/contactanos.php"> Contactenos</a> </li>
                        <li class="nav-item"> <a class="nav-link" href="../views/modules/compras.php">Compras</a> </li>                                                                      
                    </ul>
                    <div class="d-flex">
                            <button class="btn btn-outline-success" onclick="location.href='..\\models\\logout.php'" type="button">Cerrar Sesión</button>
                        </div>
                </nav>
            <br><br>
        <?php
     
            }else{
            
                ?>
                    <nav class="navbar navbar-dark bg-dark">
                    <ul>
                    <li class="nav-item"> <a class="nav-link" href="../views/modules/inicio.php"> Inicio</a> </li>
                    <li class="nav-item"> <a class="nav-link" href="../views/modules/nosotros.php"> Nosotros</a> </li>
                    <li class="nav-item"> <a class="nav-link" href="../views/modules/contactanos.php"> Contactenos</a> </li>
                    <li class="nav-item"> <a class="nav-link" href="../views/modules/login.php"> Iniciar sesión</a> </li>                                   
                </ul>
            </nav>

                <?php
                
            }
        ?>
		<div class="noticia">
		<img class="izquierda" src="../images/Producto4.jpg" >
<aside>MOUSE GAMING ÓPTICO REGULABLE HV-MS783
	<br>
    <br>		
    
Altura: 115 mm<br>
Anchura: 72 mm<br>
Profundidad: 37 mm<br>
Peso: 82 g, sólo mouse<br>
Longitud de cable: 2,10 m<br>
Resolución: 200 – 2.500 dpi<br>
Sin suavizado/aceleración/filtros<br>
Aceleración máx.: >20 G2Pruebas realizadas sobre alfombrilla de mouse para juegos<br>
Velocidad máx.: >150 ips3Pruebas realizadas sobre alfombrilla de mouse para juegos<br>
Formato de datos USB: 16 bits/eje<br>
Velocidad de respuesta USB: 1000 Hz (1 ms)<br>
Microprocesador: 32 bits ARM</aside>
<div class="row">

<div class="col-auto">                     
        <?php
        if (!empty($_SESSION['nom'])) {?>
       <button class="btn btn-primary btn-lg" onclick="location.href='..\\views\\modules\\compras.php'" type="button">Comprar Producto</button>         
        <?php
        }else{
        }
        ?>   
</div>
</div>             
				<div class="reset"></div>
				</div>
    </body>
</html>    

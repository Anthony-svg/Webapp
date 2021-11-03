<html>

<head>
    <meta charset="UTF-8">
    <title>Inicio</title>
    <link rel=StyleSheet href="../../css/template.css" typr="text/css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>

<body>
    <header>
        <h1><img id="Logo1" img src="../../images/Logo1.jpg" width="100" height="100"></h1>
    </header>
    <?php
    session_start();
    require_once("../../models/isLogin.php");
    
    if ($estado) {

    ?>
                        <nav class="navbar navbar-dark bg-dark">
                        <div style="color:white;">
                    <?php 
                    echo "Bienvenido/a ";
                    echo $_SESSION['nom'];
                    ?>
                    </div>
    
                        <ul>
                        <li class="nav-item"> <a class="nav-link" href="inicio.php"> Inicio</a> </li>
                        <li class="nav-item"> <a class="nav-link" href="nosotros.php"> Nosotros</a> </li>
                        
                        <li class="nav-item"> <a class="nav-link" href="contactanos.php"> Contactenos</a> </li>
                        <li class="nav-item"> <a class="nav-link" href="compras.php">Compras</a> </li>                                                                      
                    </ul>
                    <div class="d-flex">
                            <button class="btn btn-outline-success" onclick="location.href='..\\..\\models\\logout.php'" type="button">Cerrar Sesión</button>
                        </div>
                </nav>
            <br><br>
        <?php
     
            }else{
            
                ?>
                    <nav class="navbar navbar-dark bg-dark">
                    <ul>
                    <li class="nav-item"> <a class="nav-link" href="inicio.php"> Inicio</a> </li>
                    <li class="nav-item"> <a class="nav-link" href="nosotros.php"> Nosotros</a> </li>
                    <li class="nav-item"> <a class="nav-link" href="contactanos.php"> Contactenos</a> </li>
                    <li class="nav-item"> <a class="nav-link" href="login.php"> Iniciar sesión</a> </li>                                   
                </ul>
            </nav>
    <?php

    }
    ?>
    <header>
        <h1> ÚLTIMOS PRODUCTOS </h1>

    </header>


    <section>
        
        <br><br>
        <div class="container">
            <div class="row align-items-center">
                <div class="card">
                    <img src="../../images/Producto1.jpg">
                    <p style="color:black;">AURICULAR GAMING HV-H2158U</p>
                    <br>
                    <a href="../../Productos/auricular-h2158u.php" class="button" alt="Button">Leer más</a>
                </div>
            </div>


            <div class="row align-items-center">
                <div class="card">
                    <img src="../../images/Producto4.jpg">
                    <p style="color:black;">MOUSE GAMING ÓPTICO HV-MS783</p>
                    <br>
                    <a href="../../Productos/mouse-ms783.php" class="button" alt="Button">Leer más</a>
                </div>
            </div>

            <div class="row align-items-center">
                <div class="card">
                    <img src="../../images/Producto7.jpg">
                    <p style="color:black;">MOUSE PAD GAMER HV-MP837</p>
                    <br>
                    <a href="../../Productos/mousepad-mp837.php" class="button" alt="Button">Leer más</a>
                </div>
            </div>

            <div class="row align-items-center">
                <div class="card">
                    <img src="../../images/Producto8.jpg">
                    <p style="color:black;">SILLA GAMER HV-GC901</p>
                    <br>
                    <a href="../../Productos/silla-gamer-gc901.php" class="button" alt="Button">Leer más</a>
                </div>
            </div>

            <div class="row align-items-center">
                <div class="card">
                    <img src="../../images/Producto9.jpg">
                    <p style="color:black;">TECLADO GAMING HV-KB417L</p>
                    <br>
                    <a href="../../Productos/teclado-kb417l.php" class="button" alt="Button">Leer más</a>
                </div>
            </div>
        </div>


    </section>

</body>

</html>
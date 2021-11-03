<html>
<head>
<meta charset="UTF-8">
    <title>Contactos</title>
    <link rel=StyleSheet href="../../css/contactanos.css" typr="text/css">
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
    <section>

        <table class="table table-dark"> 
            <tr>
                <th colspan="4" alight="center"> SITIOS OFICIALES </th>
            </tr>

            <tr>
                <td rowspan="3"><img src="https://images.assetsdelivery.com/compings_v2/redlinevector/redlinevector1809/redlinevector180900031.jpg"></td>
                <th scope="col"><a href="http://www.facebook.com/" target="_blank"><img src="../../images/logo_facebook.png" width=32 height=32  /></a> FKGAMER</th>>
                <th scope="col"><a href="http://www.gmail.com/" target="_blank"><img alt="correo" src="../../images/correo.png" width=32 height=32  /></a> fkgamer@gamer.com </th>
                <th scope="col"><a href="https://www.google.com/maps/place/Parroquia+La+Merced,+Ambato/@-1.2269399,-78.7426428,11z/data=!4m8!1m2!2m1!1sgoogle+maps!3m4!1s0x91d381bc7458fce1:0xf97d76c9001375b4!8m2!3d-1.2330962!4d-78.6200129" target="_blank"><img alt="visitanos" src="../../images/ubicacion.png" width=32 height=32  /></a> Av. La Merced</th>
            </tr>                                           
        </table>
    </section> 

</body>


</html>


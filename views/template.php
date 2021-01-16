<html>
<head>
    <meta charset="UTF-8">
    <!--<title>Game Shop</title>-->
    <link rel=StyleSheet href="css/template.css" typr="text/css">
</head>

    <body>

        <header>
        <h1><img id="Logo1" img src="images/Logo1.jpg" width="100" height="100"></h1>
        </header> 

        <?php
            include "modules/navigation.php";
        ?>

        <section>
        <?php
        $mvc = new MvcController();
        $mvc -> enlacesPaginasController();
        ?>

        

        </section>

    </body>
</html>

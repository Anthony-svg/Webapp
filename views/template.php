<html>
<head>
    <meta charset="UTF-8">
    <title>Universidad</title>
    <link rel=StyleSheet href="css/template.css" typr="text/css">
</head>

    <body>

        <header>
        <h1><img src="images/Logo1.jpg" width="100" height="100"></h1>
        </header> 

        <?php
            include "modules/navigation.php";
        ?>

        <section>
        <?php
        $mvc = new MvcController();
        $mvc -> enlacesPaginasController();
        ?>

        <article>
        <img src="http://havit.ec/wp-content/uploads/2017/08/Magic-Eagle-Headphone-Black-Orange-Content.jpg" width="150" height="150">
        
        </article>

        </section>

    </body>
</html>

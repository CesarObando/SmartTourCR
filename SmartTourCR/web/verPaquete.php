<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
    <head>
        <?php
        include './recursosreusables/head.php';
        ?>
    </head>
    <body>
        <!-- header -->
        <?php
        include './recursosreusables/header.php';
        ?>
        <!-- //header -->

        <!-- login -->
        <div class="login">
            <div class="container">
                <div class="login-body">
                    <div class="login-heading">
                        <h1>Ver Paquete</h1>
                    </div>
                    <div class="login-info">
                        <form action="editarusuario.php">
                            <label type="text" name="lugar">Lugar:  Volcán Irazú</label><br><br>
                            <label type="text" name="clima">Clima:  Frío</label><br><br>
                            <label type="text" name="tipoCalle">Tipo de calle:  Asfaltada, en buen estado</label><br><br>
                            <label type="text" name="precio">Precio:  1000</label><br><br>
                            <label type="text" name="tiempo">Tiempo:  2:30 hrs</label><br><br>
                            <figure> <img src="images/volcanIrazu2.jpg" alt="VolcanIrazu" width="200" height="200"> <figcaption>Descripción: Parque Nacional Volcán Irazú, gran variedad en flora y fauna, con una excelente vista hacia todo el valle central.</figcaption></figure>
                            <input type="submit" name="favorito" value="Favorito">
                            <input type="submit" name="atras" value="Atrás">
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- //login -->

        <!-- footer -->
        <?php
        include './recursosreusables/footer.php';
        ?>
        <!-- //footer -->
    </body>	
</html>
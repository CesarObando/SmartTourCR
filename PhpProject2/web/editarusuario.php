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

        <section >
                    <!-- login -->
                        <div class="container">
                            <br>
                            <br>
                            <h1>Editar información</h1>
                            <br>
                            <form>
                                <input type="email" class="form-control" name="correo" placeholder="Correo" disabled="true">
                                <input type="text" class="form-control" name="nombre" placeholder="Nombre" required="true">
                                <input type="text" class="form-control" name="apellidos" placeholder="Apellidos" required="true">
                                <input type="tel" class="form-control" name="telefono" placeholder="Telefono" required="true">
                                <input type="text" class="form-control" name="provincia" placeholder="Provincia" required="true">
                                <input type="password" class="form-control" name="password" class="lock" placeholder="Password">
                                <input type="password" class="form-control" name="password" class="lock" placeholder="Confirm Password">
                                <br>
                                <label>Intereses </label>
                                <br>
                                <input type="checkbox" name="intereses" id="deportes" value="deportes">
                                <label for="deportes">Deportes </label>
                                <input type="checkbox" name="intereses" id="sitiosarqueologicos" value="sitiosarqueologicos">
                                <label for="sitiosarqueologicos"> Sitios Arqueologicos</label>
                                <input type="checkbox" name="intereses" id="climacaliente" value="climacaliente">
                                <label for="climacaliente"> Clima Caliente</label>
                                <br>
                                <input type="checkbox" name="intereses" id="restaurantes" value="restaurantes">
                                <label for="restaurantes">Restaurantes </label>
                                <input type="checkbox" name="intereses" id="hoteles" value="hoteles">
                                <label for="hoteles"> Hoteles</label>
                                <input type="checkbox" name="intereses" id="climafrio" value="climafrio">
                                <label for="climafrio"> Clima Frio</label>
                                <br>
                                <input type="submit" name="editar" value="Editar">
                            </form>
                        </div>
                    <!-- //login -->
        </section>
        <!-- footer -->
        <?php
            include './recursosreusables/footer.php';
        ?>
        <!-- //footer -->
    </body>	
</html>
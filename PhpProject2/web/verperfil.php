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
                        <h1>Perfil de Usuario</h1>
                    </div>
                    <div class="login-info">
                        <form>
                            <label type="text" name="correo">Correo:  cesar.b.c@hotmail.com</label><br><br>
                            <label type="text" name="nombre">Nombre:  Cesar Obando Solano</label><br><br>
                            <label type="text" name="telefono">Telefono:  87940363</label><br><br>
                            <label type="text" name="provincia">Provincia:  Cartago</label><br><br>
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
                                <input type="submit" name="eliminar" value="Borrar Cuenta">
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
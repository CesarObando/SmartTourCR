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
                        <h1>Registrarse</h1>
                    </div>
                    <div class="login-info">
                        <form>
                            <input type="text" name="correo" placeholder="Correo" required="true">
                            <input type="text" name="nombre" placeholder="Nombre" required="true">
                            <input type="text" name="apellidos" placeholder="Apellidos" required="true">
                            <input type="text" name="telefono" placeholder="Telefono" required="true">
                            <input type="text" name="provincia" placeholder="Provincia" required="true">
                            <input type="password" name="password" class="lock" placeholder="Password">
                            <input type="password" name="password" class="lock" placeholder="Confirm Password">
                            
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
                            
                            <input type="submit" name="Registro" value="Registrar">
                            <div class="signup-text">
                                <a href="login.html">Ya tienes una cuenta? Ingresa aqui.</a>
                            </div>
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
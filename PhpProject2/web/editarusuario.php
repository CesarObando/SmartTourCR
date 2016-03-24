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
                        <h1>Editar información</h1>
                    </div>
                    <div class="login-info">
                        <form>
                            <input type="text" name="correo" placeholder="Correo" disabled="true">
                            <input type="text" name="nombre" placeholder="Nombre" required="true">
                            <input type="text" name="apellidos" placeholder="Apellidos" required="true">
                            <input type="text" name="telefono" placeholder="Telefono" required="true">
                            <input type="text" name="provincia" placeholder="Provincia" required="true">
                            <input type="password" name="password" class="lock" placeholder="Password">
                            <input type="password" name="password" class="lock" placeholder="Confirm Password">
                            <input type="submit" name="editar" value="Editar">
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
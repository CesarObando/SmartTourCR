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
        <section>      
                <div class="container">
                            <br>
                            <br>
                            <h1>Registrar un administrador</h1>
                            <br>
                            <form>
                                <label for="correo">Correo: </label>
                                <input type="email" class="form-control" name="correo" required="true">
                                <label for="nombre">Nombre: </label>
                                <input type="text" class="form-control" name="nombre" required="true">
                                <label for="apellidos">Apellidos: </label>
                                <input type="text" class="form-control" name="apellidos" required="true">
                                <label for="telefono">Telefono: </label>
                                <input type="tel" class="form-control" name="telefono" required="true">
                                <label for="password">Contraseña: </label>
                                <input type="password" class="form-control" name="password" class="lock">
                                <label for="password">Confirmar contraseña: </label>
                                <input type="password" class="form-control" name="password" class="lock" >
                                <input type="submit" name="registrarAdministrador" value="Registrar" class="btn-success btn-lg">
                                <div class="signup-text">
                                    <a href="login.html">Ya tienes una cuenta? Ingresa aqui.</a>
                                </div>
                            </form>
            </div>
                    <!-- //login -->
        <footer>
        <?php
        include './recursosreusables/footer.php';
        ?>
    </footer>
        </body>
    

</html>
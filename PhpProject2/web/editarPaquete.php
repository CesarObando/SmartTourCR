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
            include './recursosreusables/headerAdministrador.php';
        ?>
        <!-- //header -->

        <!--Editar Paquete-->
        <section>      
            <div class="form-control">
                <div class="container">
                    <br>
                    <br>
                    <br>
                    <h1>Editar Paquete</h1>
                    <form>                       
                        <label for="lugar">Lugar:</label>
                        <input type="text" class="form-control" name="lugar" id="lugar" required="">                    
                        <label for="clima">Clima:</label>
                        <input type="text" class="form-control" name="clima" required="">
                        <label for="tipoCamino">Tipo de camino:</label>
                        <input type="text" class="form-control" name="tipoCamino" required="">
                        <label for="precio">Precio:</label>
                        <input type="number" class="form-control" name="precio" required="">
                        <label for="tiempo">Tiempo:</label>
                        <input type="time" class="form-control" name="tiempo" required="">
                        <label for="descripcion">Descripción:</label>
                        <input type="text" class="form-control" name="descripcion" required="">
                        <hr>
                        <input type="submit" name="editarPaquete" value="Editar" class="btn-success btn-lg">

                    </form>
                    <br>
                    <br>
                </div>
            </div>
        </section>
         <!--Fin Editar Paquete-->

    </body>
    
</html>
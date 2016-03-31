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

        <!--Buscar Paquete-->
        <section>      
            <div class="form-control">
                <div class="container">
                    <br>
                    <br>
                    <br>
                    <h1>Buscar Paquete</h1>
                    <form action="../php/data/buscarPaqueteData.php" method="post">                       
                        <label for="lugar">Lugar:</label>
                        <input type="text" class="form-control" name="lugar" id="lugar">                    
                        <label for="clima">Clima:</label>
                        <select class="form-control" name="clima" ></select>
                        <label for="tipoCamino">Tipo de camino:</label>
                        <select class="form-control" name="tipoCamino"></select>
                        <br>
                        <label for="precioBase">Precio entre:</label>
                        <input type="number" class="form-inline" name="precioBase">
                        <label for="precioLimite">Y:</label>
                        <input type="number" class="form-inline" name="precioLimite">
                        <br>
                        <label for="tiempoBase">Tiempo entre:</label>
                        <input type="time" class="form-inline" name="tiempoBase">
                        <label for="tiempoLimite">Y:</label>
                        <input type="time" class="form-inline" name="tiempoLimite">
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
                        <hr>
                        <input type="submit" name="buscarPaquete" value="Buscar" class="btn-success btn-lg">

                    </form>
                    <br>
                    <br>
                </div>
            </div>
        </section>
        <!--Fin Buscar Paquete-->

        </body>

        </html>
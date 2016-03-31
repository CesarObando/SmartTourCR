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

        <!--Ver Paquetes-->
        <section>  
            <div class="table-responsive">
                <br>
                <br>
                <h1>Ver Paquetes</h1>

                <form>
                    <table  class="table table-condensed table-hover table-bordered">
                        <thead>
                            <tr>
                                <th>Lugar</th>
                                <th>Clima</th>
                                <th>Tipo de camino</th>
                                <th>Precio</th>
                                <th>Tiempo</th>
                                <th>Descripción</th>
                                <th>Imagen</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>	
                            <tr>
                                <td><?php echo "Volcán Irazú, Cartago"; ?></td>
                                <td><?php echo "Frío"; ?></td>
                                <td><?php echo "Asfaltado"; ?></td>
                                <td><?php echo "1000 colones"; ?></td>
                                <td><?php echo "30 minutos de Cartago"; ?></td>
                                <td><?php echo "Volcán más alto de Costa Rica, mucha vegetación,excelente vista del valle central. "; ?></td>
                                <td><a>Volcan Irazu</a></td>
                                <td><a>Ver</a> </td>
                            </tr>
                            <tr>
                                <td><?php echo "Tapantí, Cartago"; ?></td>
                                <td><?php echo "Frío"; ?></td>
                                <td><?php echo "Lastre"; ?></td>
                                <td><?php echo "800 colones"; ?></td>
                                <td><?php echo "45 minutos de cartago"; ?></td>
                                <td><?php echo "Senderos para disfrutar de la vegetación, zona de picnic."; ?></td>
                                <td><a>Tapantí</a></td>
                                <td><a>Ver</a> </td>
                            </tr>
                            <tr>
                                <td><?php echo "Ruinas de Ujarrás, Cartago"; ?></td>
                                <td><?php echo "Frío"; ?></td>
                                <td><?php echo "Asfaltado"; ?></td>
                                <td><?php echo "0 colones"; ?></td>
                                <td><?php echo "30 minutos de cartago"; ?></td>
                                <td><?php echo "Zona de picnic."; ?></td>
                                <td><a>Tapantí</a></td>
                                <td><a>Ver</a> </td>
                            </tr>
                        </tbody>
                    </table>
                </form>
                <br>
                <br>

            </div>

        </section>
        <!--Fin Paquetes-->

    </body>

</html>


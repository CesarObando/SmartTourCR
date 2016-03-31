<!DOCTYPE html>
<html>
    <head>
        <?php
        include './recursosreusables/head.php';
        ?>
        <link href="estilosVer.css" rel="stylesheet"/>
    </head>
    <body>
        <!-- header -->
        <?php
        include './recursosreusables/header.php';
        ?>
        <!-- //header -->

        


        <section>
            <!-- blog -->
            <div class="blog">
                <!-- container -->
                <div class="container">
                    <h3>Ver Paquete</h3>
                    <div class="col-md-8 blog-top-left-grid">
                        <div class="left-blog left-single">
                            <div class="blog-left">
                                <div class="single-left-left wow fadeInUp animated" data-wow-delay=".5s">
                                    <h3>Volcán Irazú</h3>
                                    <img src="images/volcanIrazu2.jpg" alt="" />
                                </div>
                                <div class="blog-left-bottom wow fadeInUp animated" data-wow-delay=".5s">
                                    <h3>Descripción</h3>
                                    <p>Parque Nacional Volcán Irazú, se puede disfrutar de una buena vista hacia el
                                       valle central, además de una flora y fauna muy variada. 
                                    </p>
                                </div>
                                
                            </div>
                            <div class="response wow fadeInUp animated" data-wow-delay=".5s">
                                
                                
                            </div>

                            
                        </div>
                    </div>
                    <div class="col-md-4 blog-top-right-grid">
                        <div class="Categories wow fadeInUp animated" data-wow-delay=".5s">
                            <h3>Información del paquete</h3>
                            <ul>
                                <p>Lugar:Volcan Irazu, Cartago</p>
                                <p>Clima:Frio</p>
                                <p>Precio:1000</p>
                                <p>Tipo de calle:Asfaltada</p>
                                <p>Tiempo:1:30</p>
                                <input type="submit" name="marcarFavorito" value="Favorito" class="btn-primary btn-lg">
                                
                                
                            </ul>
                        </div>
                        
                    </div>
                    <div class="clearfix"> </div>
                </div>
                <!-- //container -->
            </div>
            <!-- //blog -->
        </section>
        <footer>
            <?php
            include './recursosreusables/footer.php';
            ?>
        </footer>
    </body>


</html>
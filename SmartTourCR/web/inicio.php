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

        <div class="banner">
            <div class="slider">
                <h2 class="wow shake animated" data-wow-delay=".5s">Viaja</h2>
                <div class="border"></div>
                <script src="js/responsiveslides.min.js"></script>
                <script>
                    // You can also use "$(window).load(function() {"
                    $(function () {
                        // Slideshow 4
                        $("#slider3").responsiveSlides({
                            auto: true,
                            pager: true,
                            nav: true,
                            speed: 500,
                            namespace: "callbacks",
                            before: function () {
                                $('.events').append("<li>before event fired.</li>");
                            },
                            after: function () {
                                $('.events').append("<li>after event fired.</li>");
                            }
                        });
                    });
                </script>
                <div  id="top" class="callbacks_container-wrap">
                    <ul class="rslides" id="slider3">
                        <li>
                            <div class="slider-info">
                                <h3 class="wow fadeInRight animated" data-wow-delay=".5s">Conoce Costa Rica</h3>
                                <p class="wow fadeInLeft animated" data-wow-delay=".5s">Toda la informacón aqui</p>
                                <div class="more-button wow fadeInRight animated" data-wow-delay=".5s">
                                    <a href="single.html">Click aquí</a>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="slider-info">
                                <h3>Los mejores lugares para un Tour</h3>
                                <p>Los mejores paquetes aquí</p>
                                <div class="more-button">
                                    <a href="single.html">Leer más</a>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="slider-info">
                                <h3>Desconéctate del mundo</h3>
                                <p>Comienza tu tour ahora</p>
                                <div class="more-button">
                                    <a href="single.html">Click aquí</a>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="information">
            <div class="container">
                <div class="information-heading">
                    <h3 class="wow fadeInDown animated" data-wow-delay=".5s">Los mejores lugares con los mejores paquetes para visitar</h3>
                    <p class="wow fadeInUp animated" data-wow-delay=".5s">Elije a tu preferencia</p>
                </div>

                <div class="information-grids">
                    <div class="col-md-4 information-grid wow fadeInLeft animated" data-wow-delay=".5s">
                        <div class="information-info">
                            <div class="information-grid-img">
                                <img src="images/miradorDeOrosi.jpg" alt="" />
                            </div>
                            <div class="information-grid-info">
                                <h4>Mirador de Orosi</h4>
                                <p>Excelente paisaje del valle de Orosi para disfrutar.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 information-grid wow fadeInUp animated" data-wow-delay=".5s">
                        <div class="information-info">
                            <div class="information-grid-info">
                                <h4>Prusia</h4>
                                <p>Si es amante del clima frio y una excelente vegetación y paisaje natural esta es su mejor elección.</p>
                            </div>
                            <div class="information-grid-img">
                                <img src="images/prusia.jpg" alt="" />
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 information-grid wow fadeInRight animated" data-wow-delay=".5s">
                        <div class="information-info">
                            <div class="information-grid-img">
                                <img src="images/tapanti.jpg" alt="" />
                            </div>
                            <div class="information-grid-info">
                                <h4>Parque Nacional Tapantí</h4>
                                <p>Para quines aman la montaña, con un clima lluvioso y cálido a su vez.</p>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"> </div>
                </div>
            </div>
        </div>

        <footer>
            <?php
            include './recursosreusables/footer.php';
            ?>
        </footer>
    </body>


</html>

<!DOCTYPE html>
<html>
<?php require_once('../templates/head.php') ?>

<body>
    <!-- preload -->
    <?php require_once('../templates/preload.php') ?>
    <div id="wrapper">
        <div class="page-wrapper">
            <!-- main header -->
            <?php require_once('../templates/header.php') ?>
            <!-- main banner -->
            <?php
            require_once('../templates/simple_banner.php');
            $banner_data = array(
                'urlImage' => '../img/banner/Banner Vuelos.jpg',
                'description' => 'Descubre las mejores tarifas para volar a donde quieras llegar',
                'btn_title' => '',
                'btn_bg' => '',
                'data_x' => "['start','center','center','center']",
                'data_y' => "['top','center','center','center']",
                'data_v' => "['150','240','10','20']",
                'data_h' => "['50','0','0','0']",
            );
            //simple_banner($urlImage, $description, $btn_title, $btn_bg, $data_x, $data_y,$data_v, $data_h);
            simple_banner($banner_data);
            ?>

            <!--main container -->
            <main id="main">
                <div class="visa-content">
                    <header class="content-heading-visa">
                        <p class="main-subtitle-vuelos">
                            En Jireh Travel podrás reservar tu próximo vuelo nacional o
                            internacional a través de tu agente de viaje. Contamos con
                            alianzas con todas las aerolíneas para presentarte todas las
                            opciones de vuelo. Además, nuestro equipo de expertos estará
                            disponible para brindarte asesoramiento personalizado y ayudarte
                            a encontrar las mejores tarifas y rutas.
                        </p>
                        <div class="double-separator"></div>
                    </header>

                    <div class="partner-block" style="margin: 2rem 0; padding: 0; width: 90%; background-color: transparent;">

                        <div class="partner-list" id="partner-slide">

                            <div class="partner" style="margin-top: 0; height: 14rem;">
                                <a href="#">
                                    <img
                                        width="170"
                                        src="../img/logos/Aerolineas/avianca.png"
                                        alt="image description" />
                                    <img
                                        class="hover"
                                        width="170"
                                        src="../img/logos/Aerolineas/avianca.png"
                                        alt="image description" />
                                </a>
                            </div>

                            <div class="partner" style="margin-top: 0; height: 14rem;">
                                <a href="#">
                                    <img
                                        width="120"
                                        src="../img/logos/Aerolineas/Spirit.png"
                                        alt="image description" />
                                    <img
                                        class="hover"
                                        width="120"
                                        src="../img/logos/Aerolineas/Spirit.png"
                                        alt="image description" />
                                </a>
                            </div>

                            <div class="partner" style="margin-top: 0; height: 14rem;">
                                <a href="#">
                                    <img
                                        style="width: 100%;"
                                        src="../img/logos/Aerolineas/Copa_Airlines.png"
                                        alt="image description" />
                                    <img
                                        class="hover"
                                        style="width: 100%;"
                                        src="../img/logos/Aerolineas/Copa_Airlines.png"
                                        alt="image description" />
                                </a>
                            </div>

                            <div class="partner" style="margin-top: 0; height: 14rem;">
                                <a href="#">
                                    <img
                                        src="../img/logos/Aerolineas/Air_Canada.png"
                                        alt="image description" />
                                    <img
                                        class="hover"
                                        src="../img/logos/Aerolineas/Air_Canada.png"
                                        alt="image description" />
                                </a>
                            </div>

                            <div class="partner" style="margin-top: 0; height: 14rem;">
                                <a href="#">
                                    <img
                                        width="130"
                                        src="../img/logos/Aerolineas/Turkish_Airlines.png"
                                        alt="image description" />
                                    <img
                                        class="hover"
                                        width="130"
                                        src="../img/logos/Aerolineas/Turkish_Airlines.png"
                                        alt="image description" />
                                </a>
                            </div>

                            <div class="partner" style="margin-top: 0; height: 14rem;">
                                <a href="#">
                                    <img
                                        width="130"
                                        src="../img/logos/Aerolineas/Latam.png"
                                        alt="image description" />
                                    <img
                                        class="hover"
                                        width="130"
                                        src="../img/logos/Aerolineas/Latam.png"
                                        alt="image description" />
                                </a>
                            </div>

                            <div class="partner" style="margin-top: 0; height: 14rem;">
                                <a href="#">
                                    <img

                                        src="../img/logos/Aerolineas/American_Airlines.png"
                                        alt="image description" />
                                    <img
                                        class="hover"
                                        src="../img/logos/Aerolineas/American_Airlines.png"
                                        alt="image description" />
                                </a>
                            </div>

                            <div class="partner" style="margin-top: 0; height: 14rem;">
                                <a href="#">
                                    <img
                                        src="../img/logos/Aerolineas/Air_Europa.png"
                                        alt="image description" />
                                    <img
                                        class="hover"
                                        src="../img/logos/Aerolineas/Air_Europa.png"
                                        alt="image description" />
                                </a>
                            </div>

                            <div class="partner" style="margin-top: 0; height: 14rem;">
                                <a href="#">
                                    <img
                                        src="../img/logos/Aerolineas/Luftansa.png"
                                        alt="image description" />
                                    <img
                                        class="hover"
                                        src="../img/logos/Aerolineas/Luftansa.png"
                                        alt="image description" />
                                </a>
                            </div>

                            <div class="partner" style="margin-top: 0; height: 14rem;">
                                <a href="#">
                                    <img
                                        width="130"
                                        src="../img/logos/Aerolineas/Iberia.png"
                                        alt="image description" />
                                    <img
                                        class="hover"
                                        width="130"
                                        src="../img/logos/Aerolineas/Iberia.png"
                                        alt="image description" />
                                </a>
                            </div>

                        </div>

                    </div>

                    <div class="link-btn-vuelos">
                        <a href="http://">COTIZAR</a>
                    </div>

                </div>


            </main>
        </div>

        <!-- main footer -->
        <?php require_once('../templates/footer.php') ?>
    </div>
    <?php require_once('../templates/scripts.php') ?>
</body>

</html>
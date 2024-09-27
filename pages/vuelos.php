<!DOCTYPE html>
<html>
<?php require_once('../templates/head.php') ?>
<style>
    .owl-item {
        width: 25rem !important;
    }
</style>

<body>
    <!-- preload -->
    <?php require_once('../templates/preload.php') ?>
    <div id="wrapper">
        <div class="page-wrapper">
            <!-- main header -->
            <?php
            $show = false;
            require_once('../templates/header.php');
            ?>
            <!-- main banner -->
            <?php
            require_once('../templates/simple_banner.php');
            $banner_data = array(
                'urlImage' => '../img/banner/Banner Vuelos.jpg',
                'description' => 'Descubre las mejores tarifas para volar a donde quieras llegar',
                'btn_title' => '',
                'btn_bg' => '',
                'btn_data_x' => "['start','start','start','start']",
                'btn_data_y' => "['middle','middle','top','top']",
                'btn_data_v' => "['115','115','290','100']",
                'btn_data_h' => "['0','0','0','0']",
                'data_x' => "['start','start','start','start']",
                'data_y' => "['bottom','bottom','bottom','bottom']",
                'data_v' => "['200','240','260','130']",
                'data_h' => "['50','0','0','0']",
                'data_w' => "['570','570','570','320']"
            );
            simple_banner($banner_data);
            ?>

            <!--main container -->
            <main id="main">
                <div class="visa-content">
                    <header class="content-heading-vuelos">
                        <p class="main-subtitle-visa" style="margin-block-end: 3rem;">
                            En <strong>Jireh Travel</strong> podrás reservar tu próximo vuelo nacional o
                            internacional a través de tu agente de viaje. Contamos con alianzas con las
                            principales aeroléneas para presentarte las mejores opciones de vuelos Además,
                            nuestro equipo de expertos estará disponible para brindarte asesoramiento
                            personalizado y ayudarte a encontrar las mejores tarifas y rutas.
                        </p>
                        <div class="double-separator"></div>
                    </header>

                    <div class="demo-wrapper" style="width: 81%;">
                        <div id="common-multiple-slide-v1">

                            <article class="article has-hover-s1">
                                <div class="thumbnail">
                                    <div class="img-wrap">
                                        <img
                                            src="../img/logos/Aerolineas/avianca.png"
                                            alt="image description" />
                                    </div>
                                </div>
                            </article>

                            <article class="article has-hover-s1">
                                <div class="thumbnail">
                                    <div class="img-wrap">
                                        <img
                                            src="../img/logos/Aerolineas/Spirit.png"
                                            alt="image description" />
                                    </div>
                                </div>
                            </article>

                            <article class="article has-hover-s1">
                                <div class="thumbnail">
                                    <div class="img-wrap">
                                        <img
                                            src="../img/logos/Aerolineas/Copa_Airlines.png"
                                            alt="image description" />
                                    </div>
                                </div>
                            </article>

                            <article class="article has-hover-s1">
                                <div class="thumbnail">
                                    <div class="img-wrap">
                                        <img
                                            src="../img/logos/Aerolineas/Air_Canada.png"
                                            alt="image description" />
                                    </div>
                                </div>
                            </article>

                            <article class="article has-hover-s1">
                                <div class="thumbnail">
                                    <div class="img-wrap">
                                        <img
                                            src="../img/logos/Aerolineas/Turkish_Airlines.png"
                                            alt="image description" />
                                    </div>
                                </div>
                            </article>
                        </div>
                    </div>

                    <div class="demo-wrapper" style="width: 81%;">
                        <div id="common-multiple-slide-v1" style="display: flex;">
                            <article class="article has-hover-s1">
                                <div class="thumbnail">
                                    <div class="img-wrap">
                                        <img
                                            src="../img/logos/Aerolineas/Latam.png"
                                            alt="image description" />
                                    </div>
                                </div>
                            </article>

                            <article class="article has-hover-s1">
                                <div class="thumbnail">
                                    <div class="img-wrap" style="width: 20vw !important;">
                                        <img
                                            src="../img/logos/Aerolineas/American_Airlines.png"
                                            alt="image description" />
                                    </div>
                                </div>
                            </article>

                            <article class="article has-hover-s1">
                                <div class="thumbnail">
                                    <div class="img-wrap">
                                        <img
                                            src="../img/logos/Aerolineas/Air_Europa.png"
                                            alt="image description" />
                                    </div>
                                </div>
                            </article>

                            <article class="article has-hover-s1">
                                <div class="thumbnail">
                                    <div class="img-wrap">
                                        <img
                                            src="../img/logos/Aerolineas/Luftansa.png"
                                            alt="image description" />
                                    </div>
                                </div>
                            </article>

                            <article class="article has-hover-s1">
                                <div class="thumbnail">
                                    <div class="img-wrap">
                                        <img
                                            src="../img/logos/Aerolineas/Iberia.png"
                                            alt="image description" />
                                    </div>
                                </div>
                            </article>
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
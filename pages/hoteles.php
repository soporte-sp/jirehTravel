<!DOCTYPE html>
<html>
<?php require_once('../templates/head.php') ?>

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
            require_once('../templates/simple_banner_nuevo.php');
            $banner_data = array(
                'urlImage' => '../img/banner/Banner Hoteles.jpg',
                'description' => 'Encontramos el hospedaje perfecto para ti',
                'btn_title' => '',
                'btn_data_x' => '',
                'btn_data_y' => '',
                'btn_data_v' => '',
                'btn_data_h' => '',
                'btn_bg' => '#03041f',
                'data_x' => "['start','start','start','start']",
                'data_y' => "['center','center','center','center']",
                'data_v' => "['20','20','10','20']",
                'data_h' => "['0','0','0','0']",
                'data_w' => "['372','375','345','219']"
            );
            simple_banner($banner_data);
            ?>

            <!--main container -->
            <main id="main">
                <div class="hoteles-content">
                    <header class="content-heading-hoteles">
                        <p class="main-subtitle-visa">
                            En <strong>Jireh Travel</strong> te ayudamos a encontrar y reservar el hotel ideal
                            para tu viaje. Con acceso a una amplia variedad de hoteles en todo
                            el mundo, te garantizamos las mejores tarifas y opciones que se
                            ajusten a tus necesidades y presupuesto. Disfruta de una
                            experiencia de hospedaje sin complicaciones con nuestro servicio
                            de venta de hoteles. ¡Reserva con nosotros y haz de tu estancia
                            algo especial!
                        </p>
                        <div class="double-separator"></div>
                    </header>

                    <div class="partner-block" style="margin: 2rem 0; padding: 0; width: 90%;">
                        <div class="article-hoteles">
                            <div class="" id="common-multiple-slide">

                                <article class="article has-hover-s1">
                                    <div class="thumbnail">
                                        <div class="img-wrap">
                                            <img src="../img/banner/Dreams Karibana Cartagena.jpg" height="228" width="350" alt="image description">
                                        </div>
                                    </div>
                                </article>

                                <article class="article has-hover-s1">
                                    <div class="thumbnail">
                                        <div class="img-wrap">
                                            <img src="../img/banner/Recurso 43.jpg" height="228" width="350" alt="image description">
                                        </div>
                                    </div>
                                </article>

                                <article class="article has-hover-s1">
                                    <div class="thumbnail">
                                        <div class="img-wrap">
                                            <img src="../img/banner/Hotel Caribe Cartagena.jpg" height="228" width="350" alt="image description">
                                        </div>
                                    </div>
                                </article>

                                <article class="article has-hover-s1">
                                    <div class="thumbnail">
                                        <div class="img-wrap">
                                            <img src="../img/banner/Recurso 41.jpg" height="228" width="350" alt="image description">
                                        </div>
                                    </div>
                                </article>
                            </div>
                        </div>

                    </div>

                    <div class="link-btn-hoteles">
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
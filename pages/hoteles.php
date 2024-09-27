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
<<<<<<< HEAD
            $show = false;
            require_once('../templates/header.php');
=======
                $show = false;
                require_once('../templates/header.php');
>>>>>>> c1916bcf3aebda385dd08075e592827ea4338ca1
            ?>
            <!-- main banner -->
            <?php
            require_once('../templates/simple_banner_nuevo.php');
            $banner_data = array(
                'urlImage' => '../img/banner/Banner Hoteles.jpg',
                'description' => '<span style="text-shadow: 2px 2px 5px rgba(100, 100, 100, 0.5);">Encontramos el hospedaje perfecto para ti</span>',
                'btn_title' => '',
                'btn_data_x' => '',
                'btn_data_y' => '',
                'btn_data_v' => '',
                'btn_data_h' => '',
                'btn_bg' => '#03041f',
<<<<<<< HEAD
                'data_x' => "['start','start','start','start']",
                'data_y' => "['center','center','center','center']",
                'data_v' => "['20','20','10','20']",
=======
                'data_x' => "['start','center','center','center']",
                'data_y' => "['100','center','center','center']",
                'data_v' => "['20','240','10','20']",
>>>>>>> c1916bcf3aebda385dd08075e592827ea4338ca1
                'data_h' => "['0','0','0','0']",
                'data_w' => "['372','375','345','219']"
            );
            simple_banner($banner_data);
            ?>

            <!--main container -->
            <main id="main">
<<<<<<< HEAD
                <div class="hoteles-content">
                    <header class="content-heading-hoteles">
=======
                <div class="visa-content">
                    <header class="content-heading-visa">
>>>>>>> c1916bcf3aebda385dd08075e592827ea4338ca1
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
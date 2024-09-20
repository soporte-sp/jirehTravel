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
            require_once('../templates/simple_banner.php');
            $banner_data = array(
                'urlImage' => '../img/banner/Banner Visa.jpg',
                'description' => 'Te asesoramos en el trámite de tu visa',
                'btn_title' => '',
                'btn_bg' => '#03041f',
                'data_x' => "['start','center','center','center']",
                'data_y' => "['center','center','center','center']",
                'data_v' => "['20','240','10','20']",
                'data_h' => "['0','0','0','0']",
            );
            simple_banner($banner_data);
            ?>

            <!--main container -->
            <main id="main">
                <div class="visa-content">

                    <header class="content-heading-visa">
                        <h2>¿Cómo te asesoramos?</h2>
                        <p class="main-subtitle-visa">
                            Contamos con un equipo calificado que pondremos a tu disposición
                            para orientarte en todo tu proceso de expedición de visa, desde
                            el inicio de tu solicitud hasta la respuesta de la embajada,
                            brindándote acompañamiento permanente.
                        </p>
                        <div class="seperator" style="padding-bottom: 20px; border-bottom: transparent;"></div>
                    </header>

                    <div class="" style="margin-block-start: 4rem; width: 90%;">
                        <h2 class="text-center">¡Coloca tu trámite en manos de expertos! </h2>
                        <div class="row">

                            <article class="col-sm-6 col-md-4 article" style="margin: 0;">
                                <div class="thumbnail">
                                    <div class="img-wrap">
                                        <img src="../img/banner/Visa americana.jpg" height="210" width="250" alt="image description">
                                    </div>
                                    <a href="#" style="display: flex; justify-content: space-between; font-size: 2.5rem; margin-block-start: -3rem;">
                                        <span style="font-weight: 500;">Visa americana</span>
                                       
                                    </a>
                                </div>
                            </article>

                            <article class="col-sm-6 col-md-4 article" style="margin: 0;">
                                <div class="thumbnail">
                                    <div class="img-wrap">
                                        <img src="../img/banner/Visa canadiense.jpg" height="210" width="250" alt="image description">
                                    </div>
                                    <a href="#" style="display: flex; justify-content: space-between; font-size: 2.5rem; margin-block-start: -3rem;">
                                        <span style="font-weight: 500;">Visa canadiense</span>
                                    </a>
                                </div>
                            </article>

                            <article class="col-sm-6 col-md-4 article" style="margin: 0;">
                                <div class="thumbnail">
                                    <div class="img-wrap">
                                        <img src="../img/banner/Otros Visados.jpg" height="210" width="250" alt="image description">
                                    </div>
                                    <a href="#" style="display: flex; justify-content: space-between; font-size: 2.5rem; margin-block-start: -3rem;">
                                        <span style="font-weight: 500;">Otros visados</span>
                                    </a>
                                </div>
                            </article>

                        </div>
                        <div style="margin-block: 4rem 5rem; text-align: center;">
                            <a style="background-color: red; color: white; padding: 1.2rem 1.5rem; font-size: 2rem; border-radius: .3em;" href="https://wa.link/u62mb7">Iniciar mi tramite</a>
                        </div>
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
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
<<<<<<< HEAD
<<<<<<< HEAD
                'btn_data_x' => "['start','start','start','start']",
                'btn_data_y' => "['middle','middle','top','top']",
                'btn_data_v' => "['115','115','290','100']",
                'btn_data_h' => "['0','0','0','0']",
                'data_x' => "['start','start','start','start']",
                'data_y' => "['center','center','center','center']",
                'data_v' => "['20','20','100','70']",
                'data_h' => "['0','0','0','0']",
                'data_w' => "['370','370','350','220']"
=======
=======
>>>>>>> c1916bcf3aebda385dd08075e592827ea4338ca1
                'data_x' => "['start','center','center','center']",
                'data_y' => "['center','center','center','center']",
                'data_v' => "['20','240','10','20']",
                'data_h' => "['0','0','0','0']",
<<<<<<< HEAD
>>>>>>> c1916bcf3aebda385dd08075e592827ea4338ca1
=======
>>>>>>> c1916bcf3aebda385dd08075e592827ea4338ca1
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
<<<<<<< HEAD
<<<<<<< HEAD
                        <div class="seperator" style="padding-bottom: 20px; border-bottom: 1px solid #e2e2e2;"></div>
                    </header>

                    <div class="" style="margin-block-start: 4rem; width: 82%;">
                        <h2 class="text-center" style="color: rgb(96,96,96);">¡Coloca tu trámite en manos de expertos! </h2>
=======
=======
>>>>>>> c1916bcf3aebda385dd08075e592827ea4338ca1
                        <div class="seperator" style="padding-bottom: 20px; border-bottom: transparent;"></div>
                    </header>

                    <div class="" style="margin-block-start: 4rem; width: 90%;">
                        <h2 class="text-center">¡Coloca tu trámite en manos de expertos! </h2>
<<<<<<< HEAD
>>>>>>> c1916bcf3aebda385dd08075e592827ea4338ca1
=======
>>>>>>> c1916bcf3aebda385dd08075e592827ea4338ca1
                        <div class="row">

                            <article class="col-sm-6 col-md-4 article" style="margin: 0;">
                                <div class="thumbnail">
                                    <div class="img-wrap">
                                        <img src="../img/banner/Visa americana.jpg" height="210" width="250" alt="image description">
                                    </div>
<<<<<<< HEAD
<<<<<<< HEAD
                                    <a href="#" class="title-card-general">
                                        <span>Visa americana</span>
=======
                                    <a href="#" style="display: flex; justify-content: space-between; font-size: 2.5rem; margin-block-start: -3rem;">
                                        <span style="font-weight: 500;">Visa americana</span>
                                       
>>>>>>> c1916bcf3aebda385dd08075e592827ea4338ca1
=======
                                    <a href="#" style="display: flex; justify-content: space-between; font-size: 2.5rem; margin-block-start: -3rem;">
                                        <span style="font-weight: 500;">Visa americana</span>
                                       
>>>>>>> c1916bcf3aebda385dd08075e592827ea4338ca1
                                    </a>
                                </div>
                            </article>

                            <article class="col-sm-6 col-md-4 article" style="margin: 0;">
                                <div class="thumbnail">
                                    <div class="img-wrap">
                                        <img src="../img/banner/Visa canadiense.jpg" height="210" width="250" alt="image description">
                                    </div>
<<<<<<< HEAD
<<<<<<< HEAD
                                    <a href="#" class="title-card-general">
                                        <span>Visa canadiense</span>
=======
                                    <a href="#" style="display: flex; justify-content: space-between; font-size: 2.5rem; margin-block-start: -3rem;">
                                        <span style="font-weight: 500;">Visa canadiense</span>
>>>>>>> c1916bcf3aebda385dd08075e592827ea4338ca1
=======
                                    <a href="#" style="display: flex; justify-content: space-between; font-size: 2.5rem; margin-block-start: -3rem;">
                                        <span style="font-weight: 500;">Visa canadiense</span>
>>>>>>> c1916bcf3aebda385dd08075e592827ea4338ca1
                                    </a>
                                </div>
                            </article>

                            <article class="col-sm-6 col-md-4 article" style="margin: 0;">
                                <div class="thumbnail">
                                    <div class="img-wrap">
                                        <img src="../img/banner/Otros Visados.jpg" height="210" width="250" alt="image description">
                                    </div>
<<<<<<< HEAD
<<<<<<< HEAD
                                    <a href="#" class="title-card-general">
                                        <span>Otros visados</span>
=======
                                    <a href="#" style="display: flex; justify-content: space-between; font-size: 2.5rem; margin-block-start: -3rem;">
                                        <span style="font-weight: 500;">Otros visados</span>
>>>>>>> c1916bcf3aebda385dd08075e592827ea4338ca1
=======
                                    <a href="#" style="display: flex; justify-content: space-between; font-size: 2.5rem; margin-block-start: -3rem;">
                                        <span style="font-weight: 500;">Otros visados</span>
>>>>>>> c1916bcf3aebda385dd08075e592827ea4338ca1
                                    </a>
                                </div>
                            </article>

                        </div>
                        <div style="margin-block: 4rem 5rem; text-align: center;">
<<<<<<< HEAD
<<<<<<< HEAD
                            <a style="background-color: red; color: white; padding: 1.2rem 1.5rem; font-size: 2rem; border-radius: .3em;" href="https://wa.link/u62mb7">Inicia tu trámite</a>
=======
                            <a style="background-color: red; color: white; padding: 1.2rem 1.5rem; font-size: 2rem; border-radius: .3em;" href="https://wa.link/u62mb7">Iniciar mi tramite</a>
>>>>>>> c1916bcf3aebda385dd08075e592827ea4338ca1
=======
                            <a style="background-color: red; color: white; padding: 1.2rem 1.5rem; font-size: 2rem; border-radius: .3em;" href="https://wa.link/u62mb7">Iniciar mi tramite</a>
>>>>>>> c1916bcf3aebda385dd08075e592827ea4338ca1
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
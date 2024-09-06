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
            /*require_once('../templates/simple_banner.php');
            $banner_data = array(
                'urlImage' => '../img/banner/Banner Hoteles.jpg',
                'description' => 'Encontramos el hospedaje perfecto para ti',
                'btn_title' => '',
                'btn_bg' => '#03041f',
                'data_x' => "['start','center','center','center']",
                'data_y' => "['center','center','center','center']",
                'data_v' => "['20','240','10','20']",
                'data_h' => "['0','0','0','0']",
            );
            simple_banner($banner_data);*/
            ?>

            <!--main container -->
            

        </div>

        <!-- main footer -->
        <?php require_once('../templates/footer.php') ?>
    </div>
    <?php require_once('../templates/scripts.php') ?>
</body>

</html>
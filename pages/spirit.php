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
                'urlImage' => '../img/banner/Banner Spirit.jpg',
                'description' => 'Las tarifas más bajas en vuelos desde Colombia a Estados Unidos',
                'btn_title' => '¡Reserva ahora!',
                'btn_bg' => '#03041f',
                'data_x' => "['start','center','center','center']",
                'data_y' => "['top','center','middle','middle']",
                'data_v' => "['100','240','10','20']",
                'data_h' => "['0','0','0','0']",
            );
            simple_banner($banner_data);
            ?>

            <!--main container -->
            <main id="main">
                <section class="content-block bg-white">
                    <div class="container">
                        <header class="content-heading" style="margin-top: 3rem">
                            <span
                                class="main-subtitle"
                                style="background-color: yellow; padding: 1rem; text-align: center;">
                                ¡Vuela desde Colombia y ahorra con Spirit! Consulta nuestros
                                vuelos con tarifas ultrabajas.</span>
                        </header>
                    </div>
                </section>

                <!-- featured adventure content -->
                <div class="featured-content" style="margin-block-start: 1rem">
                    <div class="container-fluid" style="width: 77%;">
                        <div class="row same-height">

                            <div class="col-md-6 text-block height wow slideInLeft">
                                <div class="centered">
                                    <h2 style="text-align: start; font-size: 2.6rem; margin: 0">
                                        ¿Por qué comprar con nosotros?
                                    </h2>
                                    <ul style="text-align: start; padding: 0">
                                        <li style="list-style: none; display: flex; align-items: center; font-size: 1.7rem; line-height: 1.2; margin: 1.4rem 0;">
                                            <img src="../img/icons/Vineta Spirit.png" style="width: 2.7rem; height: 2.7rem; margin-inline-end: 0.5rem;"
                                                alt="vineta spirit" />Somos la oficina de ventas autorizada de Spirit para
                                            Colombia, sede Barranquilla desde el 2020.
                                        </li>
                                        <li style="list-style: none; display: flex; align-items: center;
                                                   font-size: 1.7rem; line-height: 1.2; margin: 1.4rem 0;">
                                            <img src="../img/icons/Vineta Spirit.png" style=" width: 2.7rem; height: 2.7rem; margin-inline-end: 0.5rem;"
                                                alt="vineta spirit" />Seremos tu soporte para compra de vuelos Spirit,
                                            cambios y consultas de servicios adicionales.
                                        </li>
                                        <li
                                            style="
                          list-style: none;
                          display: flex;
                          align-items: center;
                          font-size: 1.7rem;
                          line-height: 1.2;
                          margin: 1.4rem 0;
                        ">
                                            <img
                                                src="../img/icons/Vineta Spirit.png"
                                                style="
                            width: 2.7rem;
                            height: 2.7rem;
                            margin-inline-end: 0.5rem;
                          "
                                                alt="vineta spirit" />Estarás informado de las ofertas de vuelos baratos en
                                            Spirit Airlines.
                                        </li>
                                        <li
                                            style="
                          list-style: none;
                          display: flex;
                          align-items: center;
                          font-size: 1.7rem;
                          line-height: 1.2;
                          margin: 1.4rem 0;
                        ">
                                            <img
                                                src="../img/icons/Vineta Spirit.png"
                                                style="
                            width: 2.7rem;
                            height: 2.7rem;
                            margin-inline-end: 0.5rem;
                          "
                                                alt="vineta spirit" />Contarás con un especialista para responder tus
                                            inquietudes antes y durante tu viaje.
                                        </li>
                                        <li
                                            style="
                          list-style: none;
                          display: flex;
                          align-items: center;
                          font-size: 1.7rem;
                          line-height: 1.2;
                          margin: 1.4rem 0;
                        ">
                                            <img
                                                src="../img/icons/Vineta Spirit.png"
                                                style="
                            width: 2.7rem;
                            height: 2.7rem;
                            margin-inline-end: 0.5rem;
                          "
                                                alt="vineta spirit" />Amplio horario de atención y soporte al cliente.
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="col-md-6 height wow slideInRight">
                                <div class="">
                                    <img
                                        src="../img/banner/Asesor Spirit.jpg"
                                        alt="image description" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!--featured map content-->
                <div class="map-container">
                    <div class="map-content">
                        <h2>“Nos enorgullece ser oficina de ventas autorizada de Aerolínea Spirit para Colombia“</h2>

                        <div class="map-content-items">

                            <div class="map-content-titles">
                                <h2>Viajando desde Colombia</h2>
                                <p>Spirit Airlines tiene la red perfecta para llevarte a donde quieras ir. Nuestros vuelos desde Colombia te conectan con más de 15 países en América Latina y el Caribe, además de llevarte también a 60 destinos principales en los EE. UU.</p>
                                <ul>
                                    <li>Ft. Lauderdale</li>
                                    <li>Orlando</li>
                                    <li>Tampa</li>
                                    <li>Las Vegas</li>
                                    <li>Los Angeles</li>
                                    <li>New Orleans</li>
                                    <li>Chicago</li>
                                    <li>Los Cabos</li>
                                    <li>Cleveland</li>
                                    <li>Atlantic City</li>
                                    <li>Washington, D.C.</li>
                                    <li>New York</li>
                                </ul>
                                <h2>Y muchos más...</h2>
                            </div>

                            <img src="../img/banner/Destinos Spirit.png" alt="Destinos Spirit">

                        </div>

                        <div class="map-content-footer">
                            <strong>Vuelos baratos con Spirit</strong>
                            <div>
                                <p>Salidas desde: Barranquilla – Cartagena</p>
                                <p>Medellín – Armenia – Bogotá – Cali.</p>
                            </div>
                        </div>
                        <div class="map-content-footer-link">
                            <a href="">¡Reservar ahora mi vuelo con Spirit! </a>
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
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
                'urlImage' => '../img/banner/Banner Visa canadiense.jpg',
                'description' => 'Te asesoramos en tu trámite de visa canadiense',
                'btn_title' => 'Inicia tu trámite',
                'btn_bg' => 'red',
                'data_x' => "['start','right','right','right']",
                'data_y' => "['160','center','center','center']",
                'data_v' => "['50','240','10','20']",
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
                            para orientarte en todo el proceso para sacar tu visa para Canadá,
                            ya sea trámite de turismo, negocios y estudios de corta duración 
                            estancia menor a 6 meses. Estaremos presentes desde el inicio de 
                            tu solicitud y entrega de documentos hasta la respuesta de la 
                            embajada, brindándote acompañamiento permanente.
                        </p>
                        <div
                            class="seperator"
                            style="padding-bottom: 20px; border-bottom: transparent"></div>
                    </header>

                    <div class="" style="margin-block-start: 4rem; width: 90%">
                        <div class="row">

                            <article class="col-sm-12 col-md-12 article" style="margin: 0">
                                <div class="thumbnail" style="display: flex;">
                                    <div class="img-wrap" style="width: 50%;">
                                        <a href="https://wa.link/h7xy72"><img
                                                src="../img/banner/Visa canadiense.jpg"
                                                height="210"
                                                width="250"
                                                alt="image description" /></a>
                                    </div>

                                    <div style="width: 50%; padding-inline-start: 3rem;">
                                        <ul class="detail-accordion accordion-v2" style="border-top: 1px solid rgb(226, 226, 226);">
                                            <li style="box-shadow: none; border: none;">
                                                <a href="#" style="padding: 0; margin: 0; background-color: transparent;">
                                                    <strong class="title" style="font-weight: 500; padding-block: .7rem; font-size: 2.2rem; color: #4d4d4d;">Requisitos</strong>
                                                </a>
                                                <div class="slide">
                                                    <div class="slide-holder" style="padding: .9rem 0 0 0; margin: 0; font-size: 2rem;">
                                                        <strong>Documentos del solicitante</strong>
                                                        <ul class="ul-li-marker" style="padding: 0; list-style: disc; margin-inline-start: 2.7rem;">
                                                            <li style="line-height: 1.2;"> Formulario en borrador (facilita la agencia).</li>
                                                            <li style="line-height: 1.2;"> Pasaporte válido mínimo por un año, con tres páginas en blanco.</li>
                                                            <li style="line-height: 1.2;"> Pasaporte anterior (vencidos o cancelados), si aplica*.</li>
                                                            <li style="line-height: 1.2;"> Fotocopia de la página biográfica del pasaporte vigente.</li>
                                                            <li style="line-height: 1.2;"> Fotocopia de visas vigentes.</li>
                                                            <li style="line-height: 1.2;"> Documento de reserva aérea y hotelera.</li>
                                                            <li style="line-height: 1.2;"> Foto digital tipo pasaporte 35mmx45mm, fondo blanco.</li>
                                                            <li style="line-height: 1.2;"> Carta de invitación del anfitrión.</li>
                                                        </ul>
                                                        <p style="font-weight: 600; line-height: 1.2; margin-block-start: 2rem;">Los soportes adicionales varían según el perfil del solicitante, la agencia le indicará cuales presentar.</p>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>

                                        <ul class="detail-accordion accordion-v2">
                                            <li style="box-shadow: none; border: none;">
                                                <a href="#" style="padding: 0; margin: 0; background-color: transparent;">
                                                    <strong class="title" style="font-weight: 500; padding-block: .7rem; font-size: 2.2rem; color: #4d4d4d;">¿Cómo iniciar el proceso?</strong>
                                                </a>
                                                <div class="slide">
                                                    <div class="slide-holder" style="padding: .9rem 0 0 0; margin: 0; font-size: 2rem;">
                                                        <ul class="ul-li-marker" style="padding: 0; list-style: none; margin-inline-start: 3rem;">
                                                            <li style="line-height: 1.2; margin: .5rem 0 2rem;">1° Consulta con tu agente el costo de asesoría para tramitar visa canadiense.</li>
                                                            <li style="line-height: 1.2; margin: .5rem 0 2rem;">2° Diligenciar borrador de formulario solicitud de visa canadiense y enviarlo junto con la documentación requerida para el aplicante.</li>
                                                            <li style="line-height: 1.2; margin: .5rem 0 2rem;">3° Cancelar el costo de los derechos consulares por valor de <span style="font-weight: 500;">100 dólares canadienses + Biometría* 85 dólares canadienses al cambio del día, valores por persona.</span></li>
                                                            <p style="line-height: 1.2; margin-block-start: -1.5rem;">*La biometría aplica para nuevos solicitantes y antiguos que no la tengan vigente.</p>
                                                            <li style="line-height: 1.2; margin: .5rem 0 2rem;">4° Una vez realizado el pago su asesor le estará indicando los pasos a seguir de acuerdo con su solicitud.</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>

                                        <ul class="detail-accordion accordion-v2">
                                            <li style="box-shadow: none; border: none;">
                                                <a href="#" style="padding: 0; margin: 0; background-color: transparent;">
                                                    <strong class="title" style="font-weight: 500; padding-block: .7rem; font-size: 2.2rem; color: #4d4d4d;">Alcance del servicio</strong>
                                                </a>
                                                <div class="slide">
                                                    <div class="slide-holder" style="padding: .9rem 0 0 0; margin: 0; font-size: 2rem;">
                                                        <ul class="ul-li-marker" style="padding: 0; list-style: none;">
                                                            <li style="line-height: 1.2; margin: .5rem 0 2rem;"><span style="color: rgb(69, 65, 65);">• Asesoramiento y acompañamiento en el trámite:</span> nuestro equipo le brindará información actualizada sobre los requisitos, formularios y procedimientos.</li>
                                                            <li style="line-height: 1.2; margin: .5rem 0 2rem;"><span style="color: rgb(69, 65, 65);">• Revisión de la información y cargue de documentos en plataforma de la embajada:</span> realizaremos una revisión de los formularios que nos proporcione para corroborar que la información sea la adecuada y así proceder a la creación de la cuenta y cargar los documentos en la plataforma, de manera que podamos minimizar situaciones que afecten negativamente su solicitud.</li>
                                                            <li style="line-height: 1.2; margin: .5rem 0 2rem;"><span style="color: rgb(69, 65, 65);">• Acompañamiento en el trámite y asignación de la cita:</span> una vez cargada toda la documentación, se podrá realizar el pago de los derechos consulares a la embajada y así agendar satisfactoriamente su cita.</li>
                                                            <li style="line-height: 1.2; margin: .5rem 0 2rem;"><span style="color: rgb(69, 65, 65);">• Seguimiento personalizado:</span> lo acompañaremos durante todo su trámite, proporcionándole actualizaciones periódicas sobre el estado de su solicitud y respondiendo sus consultas para brindarle tranquilidad. <br/> Una vez el aplicante asista a la cita, la embajada inicia con la revisión de los documentos cargados en la plataforma.</li>
                                                            <p style="line-height: 1.2; margin-block-start: 1.5rem; color: rgb(69, 65, 65);">La visa de Canadá tendrá vigencia generalmente por el tiempo de vigencia que tenga su pasaporte al momento de esta ser otorgada.</p>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </article>

                        </div>
                        <div style="margin-block: 4rem 5rem; text-align: center">
                            <a
                                style="
                    background-color: #050829;
                    color: white;
                    padding: 1.2rem 1.5rem;
                    font-size: 2rem;
                    border-radius: 0.3em;
                  "
                                href="https://wa.link/u62mb7">Quiero iniciar mi trámite</a>
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
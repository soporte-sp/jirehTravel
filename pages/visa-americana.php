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
                'urlImage' => '../img/banner/Banner Visa americana.jpg',
                'description' => '<p style="text-align: end; padding-inline-start: 10rem;">Te asesoramos en tu trámite de visa americana</p>',
                'btn_title' => 'Primera vez',
                'btn_bg' => 'red',
                'data_x' => "['690','right','right','right']",
                'data_y' => "['200','center','center','center']",
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
                            Contamos con un equipo calificado que pondremos a tu
                            disposición para orientarte en todo el proceso para solicitar tu
                            visa para Estados Unidos, desde el inicio de tu solicitud y
                            entrega de documentos hasta la respuesta de la embajada,
                            brindándote acompañamiento permanente.
                        </p>
                        <div
                            class="seperator"
                            style="padding-bottom: 20px; border-bottom: transparent"></div>
                    </header>

                    <div class="" style="margin-block-start: 4rem; width: 90%">
                        <div class="row">

                            <article class="col-sm-6 col-md-4 article" style="margin: 0">
                                <div class="thumbnail">
                                    <div class="img-wrap">
                                        <a href="https://wa.link/h7xy72"><img
                                                src="../img/banner/Primera vez.jpg"
                                                height="210"
                                                width="250"
                                                alt="image description" /></a>
                                    </div>

                                    <div style="text-align: start; font-size: 2.7rem; margin-block-start: -3rem;">
                                        <span style="font-weight: 500;">Primera vez</span>
                                    </div>

                                    <div>
                                        <ul class="detail-accordion accordion-v2" style="border-top: 1px solid rgb(226, 226, 226);">
                                            <li style="box-shadow: none; border: none;">
                                                <a href="#" style="padding: 0; margin: 0; background-color: transparent;">
                                                    <strong class="title" style="font-weight: 500; padding-block: .7rem; text-align: start; font-size: 2rem; color: #4d4d4d;">Requisitos</strong>
                                                </a>
                                                <div class="slide">
                                                    <div class="slide-holder" style="padding: .9rem 0 0 0; margin: 0; text-align: start; font-size: 1.7rem;">
                                                        <strong>Documentos del solicitante</strong>
                                                        <ul class="ul-li-marker" style="padding: 0; list-style: none;">
                                                            <li style="line-height: 1.2; margin: 0;">• Fotocopia de la página biográfica del pasaporte.</li>
                                                            <li style="line-height: 1.2; margin: 0;">• Dos fotografías 5X5 cm, vigentes, a color y fondo blanco formato digital*.</li>
                                                            <li style="line-height: 1.2; margin: 0;">• Formulario diligenciado en borrador (facilita agencia).</li>
                                                            <p style="text-align: start; font-size: 1.4rem; padding: .4rem;">• *Menores de 14 años si deben presentar foto física.</p>
                                                            <p style="line-height: 1.2; font-weight: 600;">• Los soportes para llevar el día de la entrevista varían según el perfil del solicitante, la agencia le indicará cuales presentar.</p>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>

                                        <ul class="detail-accordion accordion-v2">
                                            <li style="box-shadow: none; border: none;">
                                                <a href="#" style="padding: 0; margin: 0; background-color: transparent;">
                                                    <strong class="title" style="font-weight: 500; padding-block: .7rem; text-align: start; font-size: 2rem; color: #4d4d4d;">¿Cómo iniciar el proceso?</strong>
                                                </a>
                                                <div class="slide">
                                                    <div class="slide-holder" style="padding: .9rem 0 0 0; margin: 0; text-align: start; font-size: 1.7rem;">
                                                        <ul class="ul-li-marker" style="padding: 0; list-style: none;">
                                                            <li style="line-height: 1.2; margin: .5rem 0 2rem;">1° Consulta con tu agente el costo de asesoría para tramitar visa americana por primera vez.</li>
                                                            <li style="line-height: 1.2; margin: .5rem 0 2rem;">2° La agencia lo guiará para diligenciar el formulario DS-160.</li>
                                                            <li style="line-height: 1.2; margin: .5rem 0 2rem;">3° Cancelar el costo de los derechos consulares por valor de 185 dólares al cambio del día, por persona + pago retorno del pasaporte por valor de $54.000 recogida en punto FedEx. (Visa aprobada)</li>
                                                            <li style="line-height: 1.2; margin: .5rem 0 2rem;">4° La agencia programará su cita consular.</li>

                                                        </ul>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>

                                        <ul class="detail-accordion accordion-v2">
                                            <li style="box-shadow: none; border: none;">
                                                <a href="#" style="padding: 0; margin: 0; background-color: transparent;">
                                                    <strong class="title" style="font-weight: 500; padding-block: .7rem; text-align: start; font-size: 2rem; color: #4d4d4d;">Alcance del servicio</strong>
                                                </a>
                                                <div class="slide">
                                                    <div class="slide-holder" style="padding: .9rem 0 0 0; margin: 0; text-align: start; font-size: 1.7rem;">
                                                        <ul class="ul-li-marker" style="padding: 0; list-style: none;">
                                                            <li style="line-height: 1.2; margin: .5rem 0 2rem;"><span style="color: rgb(69, 65, 65);">• Asesoramiento y acompañamiento en el trámite.</span> Nuestro equipo le brindará información actualizada sobre los requisitos, formularios y procedimientos.</li>
                                                            <li style="line-height: 1.2; margin: .5rem 0 2rem;"><span style="color: rgb(69, 65, 65);">• Revisión de la información:</span> realizaremos una revisión de los formularios que nos proporcione para corroborar que la información sea la adecuada; y así, minimizar situaciones que afecten negativamente su solicitud.</li>
                                                            <li style="line-height: 1.2; margin: .5rem 0 2rem;"><span style="color: rgb(69, 65, 65);">• Preparación para la entrevista consular:</span> le brindaremos orientación en el proceso presencial o virtual, para prepararse adecuadamente para su entrevista en la embajada de Estados Unidos.</li>
                                                            <li style="line-height: 1.2; margin: .5rem 0 2rem;"><span style="color: rgb(69, 65, 65);">• Seguimiento personalizado:</span> lo acompañaremos durante todo su trámite, proporcionándole actualizaciones periódicas sobre el estado de su solicitud, revisando si es posible adelantar las fechas de cita y respondiendo sus consultas para brindarle tranquilidad.</li>

                                                        </ul>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>

                                </div>
                            </article>

                            <article class="col-sm-6 col-md-4 article" style="margin: 0">
                                <div class="thumbnail">
                                    <div class="img-wrap">
                                        <a href="https://wa.link/h7xy72">
                                            <img
                                                src="../img/banner/Renovación visa americana.jpg"
                                                height="210"
                                                width="250"
                                                alt="image description" />
                                        </a>
                                    </div>

                                    <div style="text-align: start; font-size: 2.7rem; margin-block-start: -2rem;">
                                        <p style="font-weight: 500; line-height: 1;">Renovación visa americana</p>
                                    </div>

                                    <div>
                                        <ul class="detail-accordion accordion-v2" style="border-top: 1px solid rgb(226, 226, 226);">
                                            <li style="box-shadow: none; border: none;">
                                                <a href="#" style="padding: 0; margin: 0; background-color: transparent;">
                                                    <strong class="title" style="font-weight: 500; padding-block: .7rem; text-align: start; font-size: 2rem; color: #4d4d4d;">Requisitos</strong>
                                                </a>
                                                <div class="slide">
                                                    <div class="slide-holder" style="padding: .9rem 0 0 0; margin: 0; text-align: start; font-size: 1.7rem;">
                                                        <strong>Documentos del solicitante</strong>
                                                        <ul class="ul-li-marker" style="padding: 0; list-style: none;">
                                                            <li style="line-height: 1.2; margin: 0;">• Pasaporte actual.</li>
                                                            <li style="line-height: 1.2; margin: 0;">• Pasaporte anterior (donde aparezca la visa vencida o por vencer).</li>
                                                            <li style="line-height: 1.2; margin: 0;">• Dos fotografías digitales de 5X5 cm, vigentes, a color y con fondo blanco formato digital.</li>
                                                            <li style="line-height: 1.2; margin: 0;">• Formulario diligenciado de visa no inmigrante (facilita la agencia)</li>
                                                            <p style="line-height: 1.2; margin-block-start: 1.5rem; color: #3f3e3e;">*Casos especiales deben ser consultados con el asesor.</p>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>

                                        <ul class="detail-accordion accordion-v2">
                                            <li style="box-shadow: none; border: none;">
                                                <a href="#" style="padding: 0; margin: 0; background-color: transparent;">
                                                    <strong class="title" style="font-weight: 500; padding-block: .7rem; text-align: start; font-size: 2rem; color: #4d4d4d;">¿Cómo iniciar el proceso?</strong>
                                                </a>
                                                <div class="slide">
                                                    <div class="slide-holder" style="padding: .9rem 0 0 0; margin: 0; text-align: start; font-size: 1.7rem;">
                                                        <ul class="ul-li-marker" style="padding: 0; list-style: none;">
                                                            <li style="line-height: 1.2; margin: .5rem 0 2rem;">1° Consulta con tu agente el costo de asesoría para tramitar la renovación de visa americana.</li>
                                                            <li style="line-height: 1.2; margin: .5rem 0 2rem;">2° La agencia lo guiará para diligenciar el formulario DS-160.</li>
                                                            <li style="line-height: 1.2; margin: .5rem 0 2rem;">3° Cancelar el costo de los derechos consulares por valor de 185 dólares al cambio del día, por persona + pago retorno del pasaporte por valor de $54.000 recogida en punto Fedex.</li>
                                                            <li style="line-height: 1.2; margin: .5rem 0 2rem;">4° La agencia programará su cita consular para entrega de documentos.</li>
                                                            <p style="line-height: 1.2; margin-block-start: 1.5rem; "><span style="color: #3f3e3e;">Opcional:</span> servicio de envío de documentos a la embajada, consulta con tu asesor el costo.</p>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>

                                        <ul class="detail-accordion accordion-v2">
                                            <li style="box-shadow: none; border: none;">
                                                <a href="#" style="padding: 0; margin: 0; background-color: transparent;">
                                                    <strong class="title" style="font-weight: 500; padding-block: .7rem; text-align: start; font-size: 2rem; color: #4d4d4d;">Alcance del servicio</strong>
                                                </a>
                                                <div class="slide">
                                                    <div class="slide-holder" style="padding: .9rem 0 0 0; margin: 0; text-align: start; font-size: 1.7rem;">
                                                        <ul class="ul-li-marker" style="padding: 0; list-style: none;">
                                                            <li style="line-height: 1.2; margin: .5rem 0 2rem;"><span style="color: rgb(69, 65, 65);">• Asesoramiento y acompañamiento en el trámite.</span> Nuestro equipo le brindará información actualizada sobre los requisitos, formularios y procedimientos.</li>
                                                            <li style="line-height: 1.2; margin: .5rem 0 2rem;"><span style="color: rgb(69, 65, 65);">• Revisión de la información:</span> realizaremos una revisión de los formularios que nos proporcione para corroborar que la información sea la adecuada; y así, minimizar situaciones que afecten negativamente su solicitud.</li>
                                                            <li style="line-height: 1.2; margin: .5rem 0 2rem;"><span style="color: rgb(69, 65, 65);">• Seguimiento al proceso:</span> lo acompañamos durante todo su trámite, proporcionándole actualizaciones sobre el estado de su solicitud y respondiendo sus consultas para brindarle tranquilidad hasta el final del servicio.</li>
                                                            <li style="line-height: 1.2; margin: .5rem 0 2rem;"><span style="color: rgb(69, 65, 65);">• Servicio opcional de entrega de documentos en la embajada:</span> ofrecemos el servicio de radicación de documentos en la embajada de Bogotá* de manera que no tenga que incurrir en gastos de viaje, ahorros en costos logísticos y tiempo.</li>
                                                            <p style="line-height: 1.2; margin-block-start: 1.5rem; ">*Si la embajada considera realizar una entrevista presencial, este no se podrá prestar.</p>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>

                                </div>
                            </article>

                            <article class="col-sm-6 col-md-4 article" style="margin: 0">
                                <div class="thumbnail">
                                    <div class="img-wrap">
                                        <a href="https://wa.link/h7xy72"><img
                                                src="../img/banner/Otros Visados.jpg"
                                                height="210"
                                                width="250"
                                                alt="image description" /></a>
                                    </div>

                                    <div style="text-align: start; font-size: 2.7rem; margin-block-start: -2rem;">
                                        <p style="font-weight: 500; line-height: 1;">Entrega de documentos</p>
                                    </div>

                                    <div>
                                        <ul class="detail-accordion accordion-v2" style="border-top: 1px solid rgb(226, 226, 226);">
                                            <li style="box-shadow: none; border: none;">
                                                <a href="#" style="padding: 0; margin: 0; background-color: transparent;">
                                                    <strong class="title" style="font-weight: 500; padding-block: .7rem; text-align: start; font-size: 2rem; color: #4d4d4d;">Requisitos</strong>
                                                </a>
                                                <div class="slide">
                                                    <div class="slide-holder" style="padding: .9rem 0 0 0; margin: 0; text-align: start; font-size: 1.7rem;">
                                                        <strong>Documentos del solicitante</strong>
                                                        <ul class="ul-li-marker" style="padding: 0; list-style: none;">
                                                            <li style="line-height: 1.2; margin: 0;">• Pasaporte actual.</li>
                                                            <li style="line-height: 1.2; margin: 0;">• Pasaporte anterior (donde aparezca la visa vencida o por vencer).</li>
                                                            <li style="line-height: 1.2; margin: 0;">• Confirmación de cita.</li>
                                                            <li style="line-height: 1.2; margin: 0;">• Confirmación de DS-160.</li>
                                                            <li style="line-height: 1.2; margin: 0;">• Dos fotografías de 5X5 cm, vigentes, a color y con fondo blanco formato impreso.</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>

                                        <ul class="detail-accordion accordion-v2">
                                            <li style="box-shadow: none; border: none;">
                                                <a href="#" style="padding: 0; margin: 0; background-color: transparent;">
                                                    <strong class="title" style="font-weight: 500; padding-block: .7rem; text-align: start; font-size: 2rem; color: #4d4d4d;">¿Cómo iniciar el proceso?</strong>
                                                </a>
                                                <div class="slide">
                                                    <div class="slide-holder" style="padding: .9rem 0 0 0; margin: 0; text-align: start; font-size: 1.7rem;">
                                                        <ul class="ul-li-marker" style="padding: 0; list-style: none;">
                                                            <li style="line-height: 1.2; margin: .5rem 0 2rem;">1° Consulta con tu agente el costo de envío de documentación para tramitar la renovación de visa americana.</li>
                                                            <li style="line-height: 1.2; margin: .5rem 0 2rem;">2° Hacer entrega de la documentación competa a Jireh Travel quien radicará la documentación ante la embajada americana.</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>

                                        <ul class="detail-accordion accordion-v2">
                                            <li style="box-shadow: none; border: none;">
                                                <a href="#" style="padding: 0; margin: 0; background-color: transparent;">
                                                    <strong class="title" style="font-weight: 500; padding-block: .7rem; text-align: start; font-size: 2rem; color: #4d4d4d;">Alcance del servicio</strong>
                                                </a>
                                                <div class="slide">
                                                    <div class="slide-holder" style="padding: .9rem 0 0 0; margin: 0; text-align: start; font-size: 1.7rem;">
                                                        <ul class="ul-li-marker" style="padding: 0; list-style: none;">
                                                            <li style="line-height: 1.2; margin: .5rem 0 2rem;"><span style="color: rgb(69, 65, 65);">• Entrega de documentos en la embajada:</span> ofrecemos el servicio de radicación de documentos en la embajada de Bogotá* de manera que no tenga que incurrir en gastos de viaje, ahorros en costos logísticos y tiempo.</li>
                                                            <p style="line-height: 1.2; margin-block-start: 1.5rem; ">*Si la embajada considera realizar una entrevista presencial, este no se podrá prestar.</p>
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
                    text-align: start; font-size: 1.7rem;
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
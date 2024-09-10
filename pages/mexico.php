<!DOCTYPE html>
<html>
<?php require_once('../templates/head.php') ?>
<style>.white-header{background-color: #050829!important;}</style>
<body>
    <!-- preload -->
    <?php require_once('../templates/preload.php') ?>
    <div id="wrapper">
        <div class="page-wrapper">
            <!-- main header -->
            <?php require_once('../templates/header.php') ?>
            <!-- main banner -->
            <div>
                <div class="banner-container">
                    <img
                        class="img-banner"
                        src="../img/banner/Mexico festeja a la muerte.jpg"
                        alt="México festeja a la muerte" />

                    <div class="banner-title">
                        <h1>México festeja a la muerte</h1>
                        <p>7 días / 6 noches</p>
                        <p>Desde</p>
                        <p>1.071 USD</p>
                        <p>por persona en acomodación doble</p>
                        <p>
                            Sumérgete en la magia y tradición del Día de Muertos con este
                            tour único que comienza el 31 de octubre en la vibrante Ciudad
                            de México. Cada día te ofrece una nueva experiencia que celebra
                            la cultura, historia y tradiciones mexicanas, culminando en una
                            despedida inolvidable
                        </p>
                        <p>INCLUYE</p>
                        <div class="banner-icons">
                            <div class="banner-icon-item">
                                <div><img src="../img/icons/Alojamiento.png" style="color: white;" alt="falta"></div>
                                <p>Alojamiento</p>
                                </img>
                            </div>
                            <div class="banner-icon-item">
                                <div><img src="../img/icons/Traslados-card.png" style="color: white;" alt="falta"></div>
                                <p>Traslados</p>
                                </img>
                            </div>
                            <div class="banner-icon-item">
                                <div><img src="../img/icons/Alimentacion.png" style="color: white;" alt="falta"></div>
                                <p>Alimentación</p>
                                </img>
                            </div>
                            <div class="banner-icon-item">
                                <div><img src="../img/icons/Visitas.png" style="color: white;" alt="falta"></div>
                                <p>Visitas</p>
                                </img>
                            </div>
                            <div class="banner-icon-item">
                                <div><img src="../img/icons/Guia.png" style="color: white;" alt="falta"></div>
                                <p>Guía</p>
                                </img>
                            </div>
                            <div class="banner-icon-item">
                                <div><img src="../img/icons/Seguro.png" style="color: white;" alt="falta"></div>
                                <p>Seguro</p>
                                </img>
                            </div>
                        </div>
                    </div>
                </div>

                <!--Menu items-->
                <div class="banner-menu">
                    <ul>
                        <li><button id="btn-description" style="color: white;">Descripción general</button></li>
                        <li><button id="btn-itinerario">Itinerario</button></li>
                        <li><button id="btn-date">Fechas y precios</button></li>
                    </ul>
                </div>
            </div>


            <!--main container -->
            <main id="main" class="main-container">

                <!--Descripcion general-->
                <div id="content-description" class="item-container">
                    <div class="item-main">
                        <h3 style="font-weight: 700;">INCLUYE</h3>
                        <ul>
                            <li>Traslados Aeropuerto AICM Benito Juárez – Hotel – Aeropuerto AICM Benito Juárez</li>
                            <li>6 noches de alojamiento en Ciudad de México con desayuno diario.</li>
                            <li>Bell boys y camaristas.</li>
                            <li>Visita de Taxco.</li>
                            <li>Almuerzo en Taxco (sin bebidas) en restaurante El Atrio.</li>
                            <li>Transporte México / Taxco / México</li>
                            <li>Evento especial con cena típica en Hotel Royal Reforma, con bebidas mencionadas incluidas. Incluye material para montar altar, maquillaje, regalos sorpresas y actividades varias.</li>
                            <li>Visita a la Basílica de Guadalupe y las Pirámides de Teotihuacán.</li>
                            <li>Entrada a las Pirámides de Teotihuacán.</li>
                            <li>Almuerzo buffet en Teotihuacán (sin bebidas) en restaurante Posada del Jaguar.</li>
                            <li>Visita de la Ciudad de México y altares.</li>
                            <li>Paseo en Xochimilco en trajinera con mariachi, 2 bebidas y almuerzo a base de antojitos mexicanos.</li>
                            <li>Visita a Coyoacán.</li>
                            <li>Visita y entrada a Museo Frida Kahlo o Casa Estudio Diego Rivera (sujeto a disponibilidad)</li>
                            <li>Guía autorizado y certificado por Secretaria de Turismo.</li>
                            <li>Transportación con seguro incluido.</li>
                            <li>Asistencia médica.</li>
                            <li>Sim Card de Obsequio.</li>
                            <li>Impuestos locales y hoteleros.</li>
                        </ul>
                    </div>

                    <div class="item-main">
                        <h3 style="font-weight: 700;" >NO INCLUYE</h3>
                        <ul>
                            <li>Boletos aéreos.</li>
                            <li>Traslados desde cualquier aeropuerto diferente al AICM Benito Juárez</li>
                            <li>Traslados al evento de Hotel Royal.</li>
                            <li>Propinas de maleteros en el aeropuerto.</li>
                            <li>Propinas a trasladistas, Guías y choferes.</li>
                            <li>Propinas de meseros en alimentos incluidos.</li>
                            <li>Servicios y/o alimentos no especificados claramente.</li>
                            <li>Gastos personales: llamadas, room service, lavandería, etc.</li>
                            <li>Tours opcionales.</li>
                        </ul>
                    </div>
                </div>

                <!--Itinerario-->
                <div id="content-itinerario" class="item-container" style="width: 60%; display: none;">

                    <div class="demo-wrapper" style="padding-top: 0;">
                        <ol class="detail-accordion">
                            <li style="width: 55vw;">
                                <a href="#">
                                    <strong class="title">OCTUBRE 31</strong>
                                    <span>LLEGADA A CIUDAD DE MÉXICO</span>
                                </a>
                                <div class="slide">
                                    <div class="slide-holder">
                                        <p>Recepción en el Aeropuerto Internacional de la Ciudad de México Benito Juárez (MEX) y traslado al hotel. Les recordamos que el registro en el hotel es a partir de las 15:00 horas. Alojamiento.</p>
                                    </div>
                                </div>
                            </li>

                            <li style="width: 55vw;">
                                <a href="#">
                                    <strong class="title">NOVIEMBRE 01</strong>
                                    <span>TAXCO</span>
                                </a>
                                <div class="slide">
                                    <div class="slide-holder">
                                        <p>Desayuno. 09:00am salida hacia Taxco, uno de los Pueblos Mágicos más bellos y centro platero de México. Aquí se encuentran las minas más importantes de Plata y los artesanos inundan sus calles. Parada en la Platería para una bebida de cortesía y una explicación sobre la extracción e identificación de la Plata. Incluye Almuerzo (sin bebidas). Este bellísimo pueblo colonial, está construido en la ladera de una montaña y es monumento nacional. Visita a la Plaza Principal y la Parroquia de Santa Prisca. Tiempo libre para disfrutar este hermoso lugar. Regreso a ciudad de México aproximadamente a las 18:00. Alojamiento. </p>
                                    </div>
                                </div>
                            </li>

                            <li style="width: 55vw;">
                                <a href="#">
                                    <strong class="title">NOVIEMBRE 02</strong>
                                    <span>DESFILE, TIEMPO LIBRE. EVENTO ROYAL ZONA ROSA Desayuno</span>
                                </a>
                                <div class="slide">
                                    <div class="slide-holder">
                                        <p>Hoy será un día libre para disfrutar del Desfile de Día de Muertos que se lleva a cabo sobre la famosa Avenida Reforma y el Zócalo capitalino. Las tradicionales carrozas alegóricas de esta colorida celebración toman de nuevo las calles de Ciudad de México para rendir homenaje con ofrendas, calaveras y catrinas a quienes se han ido. (Desfile tentativo a reconfirmar, en caso de no llevarse a cabo les recomendamos tomar tour opcional) Por la noche cita a las 20:00 horas en el hotel Royal Reforma para nuestro exclusivo evento. Nuestros invitados conocerán el motivo por el cual los mexicanos montamos el famoso Altar de muertos, con el significado de todos los elementos que lo conforman. Ellos mismos harán su propia ofrenda (se les recomienda traer fotos de sus seres queridos que quieran recordar, para colocarla en la ofrenda). Se les entregarán materiales para el montaje y decoración. Al terminar disfrutaran una Cena típica mexicana que consiste en: taquitos dorados de pollo, quesadillas, pozole, aguas frescas de horchata, tamarindo y Jamaica, chocolate caliente y el infaltable y tradicional Pan de muerto. No incluye bebidas alcohólicas, pero pueden consumirlas directamente en el lugar. Habrá decoración especial, ¡¡regalos sorpresa, música mexicana, sorteos, juegos, maquillaje especial y muchísima diversión!! Alojamiento.</p>
                                    </div>
                                </div>
                            </li>

                            <li style="width: 55vw;">
                                <a href="#">
                                    <strong class="title">NOVIEMBRE 03</strong>
                                    <span>PIRÁMIDES DE TEOTIHUACÁN Y BASÍLICA DE GUADALUPE – ALMUERZO INCLUIDO</span>
                                </a>
                                <div class="slide">
                                    <div class="slide-holder">
                                        <p>Este día puede incluirse como opcional el vuelo en Globo (por favor anticipar su reservación por saturación de reservas) Desayuno. El recorrido inicia hacia Teotihuacán para visitar de las pirámides del Sol y la Luna, la Ciudadela con su templo a Quetzalcóatl y la Avenida de los Muertos. La subida a las Pirámides no está ya permitida por cuestiones de preservación de estas. Parada en tienda de artesanías y sus talleres, para demostración de cómo los teotihuacanos elaboraban textiles y artesanías en piedras como la Obsidiana y el jade, además de incluir una degustación de tequila o mezcal. Incluye Almuerzo buffet (sin bebidas) en el Restaurante Posada del Jaguar. Continuación a la Basílica de Guadalupe, el segundo de los santuarios marianos más frecuentado por los fieles católicos en todo el mundo, situada en el cerro del Tepeyac. Se podrá apreciar el ayate de San Juan Diego con la imagen original de la Virgen de Guadalupe. Oportunidad de pedir a nuestra amada Virgen por el descanso eterno de todos nuestros queridos difuntos. Tiempo para atender misa. Se podrán comprar recuerdos religiosos y bendecirlos aquí mismo. Visitaremos el Jardín de la Ofrenda, con una representación de la aparición de la Virgen Morena. Regreso al hotel y alojamiento.</p>
                                    </div>
                                </div>
                            </li>

                            <li style="width: 55vw;">
                                <a href="#">
                                    <strong class="title">NOVIEMBRE 04</strong>
                                    <span>VISITA DE CIUDAD DE MEXICO Y ALTARES</span>
                                </a>
                                <div class="slide">
                                    <div class="slide-holder">
                                        <p>Desayuno. Visita de ciudad a los lugares más representativos. Visitaremos algunos altares y ofrendas de Día de Muertos como, por ejemplo: el altar del Museo Venustiano Carranza, altar de la Cámara de Senadores, altar de Plaza de la República y finalmente el altar del Zócalo, todos estos son altares monumentales. Continuamos a pie por el Centro histórico para ver Palacio Nacional, la Catedral Metropolitana, y las ruinas de Templo Mayor para ver donde se fundó la Gran Tenochtitlán (no incluye entrada). Iremos a un mercado de Artesanías, donde podrán encontrar las famosas calaveras y catrinas alusivas a los días festivos que estamos viviendo. Posteriormente daremos un paseo panorámico del Paseo de la Reforma con su monumento a la independencia llamada comúnmente “El Ángel”, y sus diversas exposiciones alegóricas del gran festejo que se vive por todo México. Panorámica del Bosque de Chapultepec donde se localiza el Castillo, el Lago, el Auditorio Nacional y el Museo de Antropología (uno de los cinco museos más importantes del mundo). No hay parada en estos sitios. Alojamiento.</p>
                                    </div>
                                </div>
                            </li>

                            <li style="width: 55vw;">
                                <a href="#">
                                    <strong class="title">NOVIEMBRE 05</strong>
                                    <span>XOCHIMILCO, COYOACÁN, CASA ESTUDIO DIEGO RIVERA O MUSEO FRIDA KAHLO</span>
                                </a>
                                <div class="slide">
                                    <div class="slide-holder">
                                        <p>Desayuno. Salida aproximadamente a las 09:00 am iremos directamente a Xochimilco que es conocido también como “Los Jardines flotantes”, y nombrado por la Unesco como Patrimonio de la Humanidad en 1987. Xochimilco es el último reducto del lago sobre el cual fue construida la Ciudad de México. La excursión incluye un paseo de aproximadamente dos horas en “Trajinera” (barca) por estos canales prehispánicos. Los pasajeros disfrutaran de una hora de mariachis, 2 bebidas como refrescos o cerveza y un almuerzo con antojitos mexicanos. Continuación al centro del famoso, tradicional y colonial Barrio de Coyoacán. Entrada a la “Casa Azul” o “Museo Frida Kahlo” donde la reconocida pintora vivió intensamente surgiendo así la mayoría de sus cuadros. En caso de no haber entradas disponibles visitaremos la “Casa estudio Diego Rivera” dedicado a preservar la memoria del muralista y su esposa. (Entrada a museos dependen de disponibilidad) Regreso al hotel aproximadamente a las 17:00pm. Resto de la tarde libre. Alojamiento.</p>
                                    </div>
                                </div>
                            </li>

                            <li style="width: 55vw;">
                                <a href="#">
                                    <strong class="title">NOVIEMBRE 6</strong>
                                    <span>LLEGADA A CIUDAD DE MÉXICO</span>
                                </a>
                                <div class="slide">
                                    <div class="slide-holder">
                                        <p>TRASLADO DE SALIDA MÉXICO. Desayuno. Traslado de salida del hotel al Aeropuerto Internacional de la Ciudad de México Benito Juárez (MEX). Favor hay que recordar que a las 12:00pm es el check out del hotel.</p>
                                    </div>
                                </div>
                            </li>

                        </ol>
                    </div>
                </div>

                <!--Fecha y precio-->
                <div id="content-date" class="item-container" style="display: none;">
                    <div class="demo-wrapper inner-main  container" style="padding-top: 0;">
                        <table class="table table-striped table-hover data-table" style="font-size: 2.2rem; font-weight: 900;">
                            <thead>
                                <tr style=" color: black;">
                                    <th style="text-align: center;" scope="col">HOTEL CON DESAYUNO BUFFET</th>
                                    <th style="padding-block-start: 2rem; text-align: center;" scope="col">SENCILLA</th>
                                    <th style="padding-block-start: 2rem; text-align: center;" scope="col">DOBLE</th>
                                    <th style="padding-block-start: 2rem; text-align: center;" scope="col">TRIPLE</th>
                                    <th style="padding-block-start: 2rem; text-align: center;" scope="col">MENOR 2 a 11 años</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td style="font-weight: 600; font-size: 2.5rem; color: black;" data-label="Name">Regente – 3**</td>
                                    <td data-label="Surname">$1.311</td>
                                    <td data-label="Address">$1.071</td>
                                    <td data-label="Email">$1.024</td>
                                    <td data-label="Address">$876</td>
                                </tr>
                                <tr>
                                    <td style="font-weight: 600; font-size: 2.5rem; color: black;" data-label="Name">Royal Reforma – 4*</td>
                                    <td data-label="Surname">$1.450</td>
                                    <td data-label="Address">$1.136</td>
                                    <td data-label="Email">$1.079</td>
                                    <td data-label="Address">$905</td>
                                </tr>
                                <tr>
                                    <td style="font-weight: 600; font-size: 2.5rem; color: black;" data-label="Name">Galería Plaza Reforma - 4**</td>
                                    <td data-label="Surname">$1.871</td>
                                    <td data-label="Address">$1.405</td>
                                    <td data-label="Email">$1.311</td>
                                    <td data-label="Address">$922</td>
                                </tr>

                            </tbody>
                        </table>
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
<header id="header" class="white-header">
  <div class="container-fluid">
    <!-- logo -->
    <div class="logo">
      <a href="index.html">
        <img
          class="normal"
          src="../img/logos/logo-gray.png"
          alt="Entrada" />
        <img class="gray-logo" src="../img/logos/logo-white.png" alt="Entrada" />
      </a>
    </div>

    <!-- main navigation -->
    <nav class="nav-position">
      <!-- main menu items and drop for mobile -->
      <div class="collapse navbar-collapse" id="nav">
        <!-- main navbar -->
        <ul class="navbar-position nav navbar-nav">
          <div class="navbar-position-logos navbar-item">
            <?php 
              if($show){
                echo "<div class='navbar-item' style='margin-inline-start: 1rem;'> ";
                echo "<img width='70' src='../img/icons/IATA.png' alt='' />";
                echo "<img width='50' src='../img/icons/Anato.png' alt='' />";
                echo "</div>";
            }else{
              echo "<div class='navbar-item'></div>";
            }
            ?>

            <div class="navbar-item">
              <p class="navbar-item-title">
                ¡Contáctanos! <strong>+57 310 315 73 74</strong>
              </p>
              <img src="../img/icons/Contáctos.png" alt="" />
            </div>
          </div>

          <!--------------- Menu de navegacion ------------>
          <div class="navbar-items-search">
            <div class="navbar-item-icon nav navbar-nav">
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" style="display: flex; flex-direction: column; align-items: center; margin-block-start: 2rem;">
                  <span class="icon-grid" style="color: white; font-size: 2.5rem;"></span>
                  <p style="color: white;">Menú</p>
                </a>
                
                <!-- <div class="dropdown-menu">
                  <div class="drop-wrap">
                    <div class="five-col">
                      <div class="column" style="background-color: red;">
                        <ul class="header-link">
                          <li><a href="about.html">About Us</a></li>
                          <li><a href="error.html">404 Error</a></li>
                          <li><a href="tour-detail.html">Tour Detail</a></li>
                          <li><a href="megamenu.html">Megamenu</a></li>
                          <li><a href="contact.html">Contact</a></li>
                        </ul>
                      </div>

                      <div class="column">
                        <ul class="header-link">
                          <li><a href="layout-fullwidth.html">Full Width Page</a></li>
                          <li><a href="layout-fullwidth-wide.html">Full Width Wide</a></li>
                          <li><a href="layout-left-sidebar.html">Left Sidebar</a></li>
                          <li><a href="layout-right-sidebar.html">Right Sidebar</a></li>
                          <li><a href="layout-both-sidebar.html">Both Sidebar</a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div> -->

              </li>
            </div>
            <a class="navbar-item-icon" href="#" class="search-opener"><img src="../img/icons/Buscador.png" alt="" /></a>
          </div>
        </ul>
      </div>
    </nav>
  </div>
  <!-- search form -->
</header>
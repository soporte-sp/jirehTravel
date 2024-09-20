<?php 
    session_start();
    if (!isset($_SESSION['redirected'])) {
        $_SESSION['redirected'] = true; 
        header('Location: ./pages/home.php');
        exit();
    }
    //include_once './pages/home.php';

    /*
    no se subiran los siguientes archivos 18/09/2024
    -> css/main.css
    -> js/revolution.js
    -> pages/home.php
    -> templates/main_banner.php
    -> vendors/revolution/js/extensions/revolution.extension.kenburn.min.js
    -> vendors/revolution/js/extensions/source/revolution.extension.kenburn.js
    */
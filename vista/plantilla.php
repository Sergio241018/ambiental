<?php
session_start();


include_once "vista/modulos/cabecera.php";

if (isset($_SESSION["usuario"])) {

    if (isset($_GET["ruta"])) {

        if ($_GET["ruta"] == "inicio" || $_GET["ruta"] == "usuarios" || $_GET["ruta"] == "cerrarSesion") {
            include_once "vista/modulos/menu.php";
            include_once "vista/modulos/" . $_GET["ruta"] . ".php";
        } else {
            include_once "vista/modulos/404.php";
        }

    } else {
        include_once "vista/modulos/menu.php";
        include_once "vista/modulos/inicio.php";
    }


} else {
    include_once "vista/modulos/login.php";
}

include_once "vista/modulos/pie.php";
<?php

//Configurar aplicación
header('Content-Type: text/html; charset=utf-8');
if (basename($_SERVER['PHP_SELF']) == 'config.php') {
    die('Acceso incorrecto a la aplicación.');
}
//No Cache
header('Expires: Sat, 26 Jul 1997 05:00:00 GMT');
header('Last-Modified: ' . gmdate('D, d M Y H:i:s') . ' GMT');
header('Cache-Control: no-store, no-cache, must-revalidate');
header('Cache-Control: post-check=0, pre-check=0', false);
header('Pragma: no-cache');
//Dependiendo de la configuración establezco si se mostrarán o no los errores.
$global_debug_mode = true;
if ($global_debug_mode) {
    error_reporting(E_ALL | E_STRICT);
} else {
    error_reporting(0);
}
//Rutas
$global_ruta = dirname(__FILE__);
$global_ruta_tmpl = $global_ruta . '/tmpl';
$global_ruta_src = $global_ruta . '/src';
$global_ruta_clases = $global_ruta_src . '/classes';
$global_web = 'http://' . $_SERVER['HTTP_HOST'] . '/encuesta_laboral';
$global_web_actual = $global_web . rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
$global_web_css = $global_web . '/css';
$global_web_js = $global_web . '/js';
$global_web_res = $global_web . '/res';
//--
//La función date necesita que se le configure el timezone
date_default_timezone_set('America/Argentina/Cordoba');

//--
function __autoload($class_name) {
    global $G_ClassesPath;
    require_once "{$G_ClassesPath}/" . strtolower($class_name) . '.class.php';
}

<?php
// error_reporting(E_ALL);
// ini_set('display_errors', '1');

include_once 'app/config.inc.php';
include_once 'app/routes.inc.php';

session_start();

$componentes_url = parse_url($_SERVER['REQUEST_URI']);
$ruta = $componentes_url['path'];

$partes_ruta = explode('/', $ruta);
$partes_ruta = array_filter($partes_ruta);
$partes_ruta = array_slice($partes_ruta, 0);
$ruta_elegida = 'vistas/404.php';

switch ($partes_ruta[1] ?? null) {
  case '':
    $ruta_elegida = 'views/home.inc.php';
    break;
}
include_once $ruta_elegida;

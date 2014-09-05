<?php
require_once dirname(__FILE__) . '/vendors/Twig/Autoloader.php';
Twig_Autoloader::register();

$loader = new Twig_Loader_Filesystem( dirname(__FILE__) . '/templates');
$twig = new Twig_Environment($loader, array(
  'cache' => dirname(__FILE__) . '/templates/cache',
  'auto_reload' => true, // para desarrollo, quitar en producción
));
?>
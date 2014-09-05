<?php
require_once 'twig_loader.php';
require_once 'db/films.class.php';

/* obtener parámetros de consulta */
$argumentos = array();
$argumentos_permitidos = array(
	array( 'request' => 'title', 'param' => 'titulo' ),
	array( 'request' => 'actor', 'param' => 'actor' ),
	array( 'request' => 'description', 'param' => 'descripcion' ),
	array( 'request' => 'category', 'param' => 'categoria' ),
	array( 'request' => 'filas', 'param' => 'filas' ),
	array( 'request' => 'pagina', 'param' => 'pagina' ),
);

foreach ( $argumentos_permitidos as $arg ) {
	if ( ! empty($_GET[ $arg['request'] ]) ) {
		$argumentos[ $arg['param'] ] = $_GET[ $arg['request'] ];
	}
}

//print_r($argumentos);
$filmDB = new Films();
$resultados = $filmDB->buscarPeliculas( $argumentos );

//print_r($resultados);

$uri = $_SERVER['REQUEST_URI'];
$uri_paginacion = preg_replace('/([?&])pagina=[^&]+(&|$)/','$1',$uri);

$template = $twig->loadTemplate('consultar.html');
echo $template->render(array( 'resultados' => $resultados, 'argumentos' => $argumentos, 'uri_paginacion' => $uri_paginacion ));
?>
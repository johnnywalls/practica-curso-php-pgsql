<?php
require_once 'twig_loader.php';
require_once 'db/films.class.php';

if ( empty($_GET[ 'film_id' ]) ) {
	header('Location: /consultar.php');
}
else {
	$film_id = $_GET[ 'film_id' ];
	$filmDB = new Films();
	$film = $filmDB->detallePelicula( $film_id );

	$template = $twig->loadTemplate('detalle.html');
	echo $template->render(array( 'film' => $film ));
}
?>
<?php
require_once 'twig_loader.php';

$template = $twig->loadTemplate('editar.html');
echo $template->render(array());
?>
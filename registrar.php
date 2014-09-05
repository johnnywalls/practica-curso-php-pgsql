<?php
require_once 'twig_loader.php';

$template = $twig->loadTemplate('registrar.html');
echo $template->render(array());
?>
<?php
require_once 'twig_loader.php';

$template = $twig->loadTemplate('index.html');
echo $template->render(array());
?>
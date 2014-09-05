<?php

/* index.html */
class __TwigTemplate_00416d968bd4036e4a46dd60f27332226014ac70c9e85656ccbfac1b3bb2c2b3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'migajas' => array($this, 'block_migajas'),
            'titulo' => array($this, 'block_titulo'),
            'content' => array($this, 'block_content'),
            'custom_js' => array($this, 'block_custom_js'),
            'menu_activo' => array($this, 'block_menu_activo'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"es\">
  <head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">

    <title>Alquiler de DVD</title>

    <!-- Bootstrap core CSS -->
    <link href=\"css/bootstrap.min.css\" rel=\"stylesheet\">

    <!-- Estilos personalizados -->
    <link href=\"css/custom.css\" rel=\"stylesheet\">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src=\"https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js\"></script>
      <script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>
    <![endif]-->
  </head>

  <body role=\"document\">

    <div class=\"navbar navbar-inverse navbar-fixed-top\" role=\"navigation\">
      <div class=\"container\">
        <div class=\"navbar-header\">
          <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
            <span class=\"sr-only\">Alternar navegación</span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
          </button>
          <a class=\"navbar-brand\" href=\"index.php\">Alquiler de DVD</a>
        </div>
        <div class=\"collapse navbar-collapse\">
          <ul class=\"nav navbar-nav\">
            <li id=\"menu-consultar\"><a href=\"consultar.php\">Consultar Películas</a></li>
            <li id=\"menu-registrar\"><a href=\"registrar.php\">Registrar Película</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>

    <div class=\"container\" role=\"main\">
      <div class=\"jumbotron\">
        <h1>Alquiler de DVD</h1>
        <p class=\"lead\">Explore y busque películas de su interés, ¡Véalas en la comodidad de su hogar!</p>
      </div>
      ";
        // line 52
        $this->displayBlock('migajas', $context, $blocks);
        // line 54
        echo "      <h2>";
        $this->displayBlock('titulo', $context, $blocks);
        echo "</h2>
      <div id=\"content\">
      ";
        // line 56
        $this->displayBlock('content', $context, $blocks);
        // line 63
        echo "      </div>
    </div><!-- /.container -->


    <script src=\"js/jquery-1.11.1.min.js\"></script>
    <script src=\"js/bootstrap.min.js\"></script>
    <script>
    ";
        // line 70
        $this->displayBlock('custom_js', $context, $blocks);
        // line 73
        echo "    </script>
  </body>
</html>
";
    }

    // line 52
    public function block_migajas($context, array $blocks = array())
    {
        // line 53
        echo "      ";
    }

    // line 54
    public function block_titulo($context, array $blocks = array())
    {
    }

    // line 56
    public function block_content($context, array $blocks = array())
    {
        // line 57
        echo "        <div class=\"text-center\">
            <a href=\"consultar.php\" class=\"btn btn-primary btn-lg\" role=\"button\">Consultar</a>
            <a href=\"registrar.php\" class=\"btn btn-info btn-lg\" role=\"button\">Registrar</a>
        </div>
        </p>
      ";
    }

    // line 70
    public function block_custom_js($context, array $blocks = array())
    {
        // line 71
        echo "    \$('#";
        $this->displayBlock('menu_activo', $context, $blocks);
        echo "').addClass('active');
    ";
    }

    public function block_menu_activo($context, array $blocks = array())
    {
        echo "menu-consultar";
    }

    public function getTemplateName()
    {
        return "index.html";
    }

    public function getDebugInfo()
    {
        return array (  132 => 71,  129 => 70,  120 => 57,  117 => 56,  112 => 54,  108 => 53,  105 => 52,  98 => 73,  96 => 70,  87 => 63,  85 => 56,  79 => 54,  77 => 52,  24 => 1,);
    }
}

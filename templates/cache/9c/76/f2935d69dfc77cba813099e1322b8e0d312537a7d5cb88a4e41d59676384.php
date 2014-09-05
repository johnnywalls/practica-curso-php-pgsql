<?php

/* editar.html */
class __TwigTemplate_9c76f2935d69dfc77cba813099e1322b8e0d312537a7d5cb88a4e41d59676384 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("index.html");

        $this->blocks = array(
            'titulo' => array($this, 'block_titulo'),
            'migajas' => array($this, 'block_migajas'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "index.html";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_titulo($context, array $blocks = array())
    {
    }

    // line 4
    public function block_migajas($context, array $blocks = array())
    {
        // line 5
        echo "<ol class=\"breadcrumb\">
  <li><a href=\"index.php\">Inicio</a></li>
  <li><a href=\"consultar.php\">Consultar Películas</a></li>
  <li class=\"active\">Editar</li>
</ol>
";
    }

    // line 12
    public function block_content($context, array $blocks = array())
    {
        // line 13
        echo "<h2>Editar Película</h2>

";
        // line 15
        $this->env->loadTemplate("formulario.html")->display($context);
        // line 16
        echo "
";
    }

    public function getTemplateName()
    {
        return "editar.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 16,  54 => 15,  50 => 13,  47 => 12,  38 => 5,  35 => 4,  30 => 3,);
    }
}

<?php

/* registrar.html */
class __TwigTemplate_36e420e5d08a00693a9c48d95678773f8aee1885e4303957fc0c881bf4255fb4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("index.html");

        $this->blocks = array(
            'titulo' => array($this, 'block_titulo'),
            'menu_activo' => array($this, 'block_menu_activo'),
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
    public function block_menu_activo($context, array $blocks = array())
    {
        echo "menu-registrar";
    }

    // line 5
    public function block_migajas($context, array $blocks = array())
    {
        // line 6
        echo "<ol class=\"breadcrumb\">
  <li><a href=\"index.php\">Inicio</a></li>
  <li class=\"active\">Registrar Película</li>
</ol>
";
    }

    // line 12
    public function block_content($context, array $blocks = array())
    {
        // line 13
        echo "<h2>Registrar Película</h2>

";
        // line 15
        $this->env->loadTemplate("formulario.html")->display($context);
        // line 16
        echo "
";
    }

    public function getTemplateName()
    {
        return "registrar.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 16,  60 => 15,  56 => 13,  53 => 12,  45 => 6,  42 => 5,  36 => 4,  31 => 3,);
    }
}

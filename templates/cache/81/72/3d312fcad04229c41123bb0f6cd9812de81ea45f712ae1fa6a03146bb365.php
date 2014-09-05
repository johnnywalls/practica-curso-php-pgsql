<?php

/* detalle.html */
class __TwigTemplate_81723d312fcad04229c41123bb0f6cd9812de81ea45f712ae1fa6a03146bb365 extends Twig_Template
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
  <li class=\"active\">Detalle</li>
</ol>
";
    }

    // line 12
    public function block_content($context, array $blocks = array())
    {
        // line 13
        echo "<h2>";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["film"]) ? $context["film"] : null), "title", array(), "array"), "html", null, true);
        echo "</h2>

<div class=\"well\">
  <p>";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["film"]) ? $context["film"] : null), "description", array(), "array"), "html", null, true);
        echo "</p>
</div>

<div class=\"row\">
  <div class=\"col-md-4\">
    <div class=\"panel panel-default\">
      <div class=\"panel-heading\">
        <h3 class=\"panel-title\">Datos básicos</h3>
      </div>
      <div class=\"panel-body\">
        <dl>
          <dt>Año de lanzamiento:</dt>
          <dd>";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["film"]) ? $context["film"] : null), "release_year", array(), "array"), "html", null, true);
        echo "</dd>
          <dt>Duración:</dd>
          <dd>";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["film"]) ? $context["film"] : null), "length", array(), "array"), "html", null, true);
        echo " min</dt>
          <dt>Idioma:</dt>
          <dd>";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["film"]) ? $context["film"] : null), "language_name", array(), "array"), "html", null, true);
        echo "</dd>
          <dt>Alquiler:</dt>
          <dd>";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["film"]) ? $context["film"] : null), "rental_duration", array(), "array"), "html", null, true);
        echo " días - ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["film"]) ? $context["film"] : null), "rental_rate", array(), "array"), "html", null, true);
        echo "\$</dd>
          <dt>Categorías:</dt>
          <dd>";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["film"]) ? $context["film"] : null), "categories", array(), "array"), "html", null, true);
        echo "</dd>
        </dl>
      </div>
    </div>
  </div>
  <div class=\"col-md-4\">
    <div class=\"panel panel-default\">
      <div class=\"panel-heading\">
        <h3 class=\"panel-title\">Reparto</h3>
      </div>
      <div class=\"panel-body\">
        <table class=\"table\">
          <thead>
            <tr><th>Actores</th></tr>
          </thead>
          <tbody>
            ";
        // line 52
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(twig_split_filter($this->getAttribute((isset($context["film"]) ? $context["film"] : null), "actors", array(), "array"), ", "));
        foreach ($context['_seq'] as $context["_key"] => $context["actor"]) {
            // line 53
            echo "            <tr><td>";
            echo twig_escape_filter($this->env, (isset($context["actor"]) ? $context["actor"] : null), "html", null, true);
            echo "</td></tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['actor'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        echo "          </tbody>
        </table>
      </div>
    </div>
  </div>
  <div class=\"col-md-4\">
    <div class=\"panel panel-default\">
      <div class=\"panel-heading\">
        <h3 class=\"panel-title\">Existencia</h3>
      </div>
      <div class=\"panel-body\">
        <table class=\"table\">
          <thead>
            <tr>
              <th>Tienda</th>
              <th>Cantidad</th>
            </tr>
          </thead>
          <tbody>
            ";
        // line 74
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(twig_split_filter($this->getAttribute((isset($context["film"]) ? $context["film"] : null), "inventories", array(), "array"), ", "));
        foreach ($context['_seq'] as $context["_key"] => $context["fila"]) {
            // line 75
            echo "            <tr>
\t\t\t\t\t\t\t";
            // line 76
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable(twig_split_filter((isset($context["fila"]) ? $context["fila"] : null), ":"));
            foreach ($context['_seq'] as $context["_key"] => $context["columna"]) {
                // line 77
                echo "              <td>";
                echo twig_escape_filter($this->env, (isset($context["columna"]) ? $context["columna"] : null), "html", null, true);
                echo "</td>
              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['columna'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 79
            echo "            </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['fila'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 81
        echo "          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
<div class=\"row text-center\">
    <a href=\"#\" class=\"btn btn-primary\" role=\"button\"><span class=\"glyphicon glyphicon-shopping-cart\"></span> Alquilar</a>
    <a href=\"editar.php?film_id=";
        // line 89
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["film"]) ? $context["film"] : null), "film_id", array(), "array"), "html", null, true);
        echo "\" class=\"btn btn-info\" role=\"button\"><span class=\"glyphicon glyphicon-pencil\"></span> Editar</a>
    <a href=\"eliminar.php?film_id=";
        // line 90
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["film"]) ? $context["film"] : null), "film_id", array(), "array"), "html", null, true);
        echo "\" class=\"btn btn-danger\" role=\"button\"><span class=\"glyphicon glyphicon-remove\"></span> Eliminar</a>
</div>
";
    }

    public function getTemplateName()
    {
        return "detalle.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  188 => 90,  184 => 89,  174 => 81,  167 => 79,  158 => 77,  154 => 76,  151 => 75,  147 => 74,  126 => 55,  117 => 53,  113 => 52,  94 => 36,  87 => 34,  82 => 32,  77 => 30,  72 => 28,  57 => 16,  50 => 13,  47 => 12,  38 => 5,  35 => 4,  30 => 3,);
    }
}

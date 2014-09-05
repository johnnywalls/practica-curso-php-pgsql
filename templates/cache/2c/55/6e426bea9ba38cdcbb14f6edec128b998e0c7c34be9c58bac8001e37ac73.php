<?php

/* consultar.html */
class __TwigTemplate_2c556e426bea9ba38cdcbb14f6edec128b998e0c7c34be9c58bac8001e37ac73 extends Twig_Template
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
        echo "Buscar películas";
    }

    // line 4
    public function block_migajas($context, array $blocks = array())
    {
        // line 5
        echo "<ol class=\"breadcrumb\">
  <li><a href=\"index.php\">Inicio</a></li>
  <li class=\"active\">Consultar Películas</li>
</ol>
";
    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        // line 12
        echo "<div class=\"panel panel-default\">
  <div class=\"panel-heading\">
    <h3 class=\"panel-title\">Filtros de búsqueda</h3>
  </div>
  <div class=\"panel-body\">
    <form role=\"form\" method=\"get\">
      <div class=\"row\">
        <div class=\"col-md-6\">
          <label for=\"title\">Título</label>
          <input type=\"text\" name=\"title\" id=\"title\" placeholder=\"Buscar por Título...\" class=\"form-control\" value=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["argumentos"]) ? $context["argumentos"] : null), "titulo"), "html", null, true);
        echo "\">
        </div>
        <div class=\"col-md-6\">
          <label for=\"category\">Categoría</label>
          <input type=\"text\" name=\"category\" id=\"category\" placeholder=\"Buscar por Categoría...\" class=\"form-control\" value=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["argumentos"]) ? $context["argumentos"] : null), "categoria"), "html", null, true);
        echo "\">
        </div>
      </div>
      <div class=\"row top-buffer\">
        <div class=\"col-md-6\">
          <label for=\"description\">Descripción</label>
          <input type=\"text\" name=\"description\" id=\"description\" placeholder=\"Buscar por Descripción...\" class=\"form-control\" value=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["argumentos"]) ? $context["argumentos"] : null), "descripcion"), "html", null, true);
        echo "\">
        </div>
        <div class=\"col-md-6\">
          <label for=\"actor\">Actor</label>
          <input type=\"text\" name=\"actor\" id=\"actor\" placeholder=\"Buscar por Actor...\" class=\"form-control\" value=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["argumentos"]) ? $context["argumentos"] : null), "actor"), "html", null, true);
        echo "\">
        </div>
      </div>
      <div class=\"row top-buffer\">
        <div class=\"col-md-12\">
          <button type=\"submit\" class=\"btn btn-success\"><span class=\"glyphicon glyphicon-search\"></span> Buscar</button>
        </div>
      </div>
    </form>
  </div>
</div>

";
        // line 47
        if ((twig_length_filter($this->env, $this->getAttribute((isset($context["resultados"]) ? $context["resultados"] : null), "results", array(), "array")) > 0)) {
            // line 48
            echo "<div class=\"panel panel-primary\">
  <div class=\"panel-heading\">
    <h3 class=\"panel-title\">Resultados de búsqueda: ";
            // line 50
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["resultados"]) ? $context["resultados"] : null), "total_count", array(), "array"), "html", null, true);
            echo " encontrados</h3>
  </div>
  <table class=\"table table-striped\">
    <thead>
      <tr>
        <th>#</th>
        <th>Título</th>
        <th>Categorías</th>
        <th>Actores</th>
        <th>Descripción</th>
      </tr>
    </thead>
    <tbody>
      ";
            // line 63
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["resultados"]) ? $context["resultados"] : null), "results", array(), "array"));
            foreach ($context['_seq'] as $context["_key"] => $context["fila"]) {
                // line 64
                echo "      <tr>
        <td><a href=\"detalle.php?film_id=";
                // line 65
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["fila"]) ? $context["fila"] : null), "film_id"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["fila"]) ? $context["fila"] : null), "film_id"), "html", null, true);
                echo "</a></td>
        <td>";
                // line 66
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["fila"]) ? $context["fila"] : null), "title"), "html", null, true);
                echo "</td>
        <td>";
                // line 67
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["fila"]) ? $context["fila"] : null), "categories"), "html", null, true);
                echo "</td>
        <td>";
                // line 68
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["fila"]) ? $context["fila"] : null), "actors"), "html", null, true);
                echo "</td>
        <td>";
                // line 69
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["fila"]) ? $context["fila"] : null), "description"), "html", null, true);
                echo "</td>
      </tr>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['fila'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 72
            echo "    </tbody>
  </table>
</div>


<ul class=\"pager\">
\t";
            // line 78
            if ($this->getAttribute((isset($context["resultados"]) ? $context["resultados"] : null), "previous_page", array(), "array")) {
                // line 79
                echo "  <li class=\"previous\"><a href=\"";
                echo twig_escape_filter($this->env, (isset($context["uri_paginacion"]) ? $context["uri_paginacion"] : null), "html", null, true);
                echo "&amp;pagina=";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["resultados"]) ? $context["resultados"] : null), "previous_page", array(), "array"), "html", null, true);
                echo "\">&larr; Anterior</a></li>
  ";
            }
            // line 81
            echo "  <li>Página: ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["resultados"]) ? $context["resultados"] : null), "current_page", array(), "array"), "html", null, true);
            echo "</li>
\t";
            // line 82
            if ($this->getAttribute((isset($context["resultados"]) ? $context["resultados"] : null), "next_page", array(), "array")) {
                // line 83
                echo "  <li class=\"next ";
                if ((null === $this->getAttribute((isset($context["resultados"]) ? $context["resultados"] : null), "next_page", array(), "array"))) {
                    echo "disabled";
                }
                echo "\"><a href=\"";
                echo twig_escape_filter($this->env, (isset($context["uri_paginacion"]) ? $context["uri_paginacion"] : null), "html", null, true);
                echo "&amp;pagina=";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["resultados"]) ? $context["resultados"] : null), "next_page", array(), "array"), "html", null, true);
                echo "\">Siguiente &rarr;</a></li>
  ";
            }
            // line 85
            echo "
</ul>

";
        }
        // line 89
        echo "
";
    }

    public function getTemplateName()
    {
        return "consultar.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  198 => 89,  192 => 85,  180 => 83,  178 => 82,  173 => 81,  165 => 79,  163 => 78,  155 => 72,  146 => 69,  142 => 68,  138 => 67,  134 => 66,  128 => 65,  125 => 64,  121 => 63,  105 => 50,  101 => 48,  99 => 47,  84 => 35,  77 => 31,  68 => 25,  61 => 21,  50 => 12,  47 => 11,  39 => 5,  36 => 4,  30 => 3,);
    }
}

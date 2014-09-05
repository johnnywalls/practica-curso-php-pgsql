<?php

/* formulario.html */
class __TwigTemplate_efbabd38f4bc7d9e7cfc53efeaf33ec754292cd1b363849a962bb4ea3e6bd9ab extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<form role=\"form\">
  <div class=\"row\">
    <div class=\"col-md-6\">
      <div class=\"panel panel-primary\">
        <div class=\"panel-heading\">
          <h3 class=\"panel-title\">Datos básicos</h3>
        </div>
        <div class=\"panel-body\">
          <label for=\"title\">Título</label>
          <input type=\"text\" class=\"form-control\" name=\"title\" id=\"title\" placeholder=\"Título...\" value=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["film"]) ? $context["film"] : null), "title"), "html", null, true);
        echo "\" required>
          <label for=\"description\">Descripción</label>
          <textarea class=\"form-control\" name=\"description\" id=\"description\" placeholder=\"Descripción o sinopsis...\">";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["film"]) ? $context["film"] : null), "description"), "html", null, true);
        echo "</textarea>
          <label for=\"release_year\">Año de Lanzamiento</label>
          <input type=\"number\" class=\"form-control\" name=\"release_year\" id=\"release_year\" min=\"1930\" max=\"2100\" step=\"1\" value=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["film"]) ? $context["film"] : null), "release_year"), "html", null, true);
        echo "\">
          <label for=\"length\">Duración (minutos)</label>
          <input type=\"number\" class=\"form-control\" name=\"length\" id=\"length\" min=\"1\" step=\"1\" value=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["film"]) ? $context["film"] : null), "length"), "html", null, true);
        echo "\">
          <label for=\"language_id\">Idioma</label>
          <select class=\"form-control\" name=\"language_id\" id=\"language_id\" value=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["film"]) ? $context["film"] : null), "language_id"), "html", null, true);
        echo "\">
            ";
        // line 19
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["idiomas"]) ? $context["idiomas"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["idioma"]) {
            // line 20
            echo "            <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["idioma"]) ? $context["idioma"] : null), "language_id"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["idioma"]) ? $context["idioma"] : null), "name"), "html", null, true);
            echo "</option>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['idioma'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "          </select>
          <label for=\"rental_duration\">Días de Alquiler</label>
          <input type=\"number\" class=\"form-control\" name=\"rental_duration\" id=\"rental_duration\" min=\"1\" step=\"1\" value=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["film"]) ? $context["film"] : null), "rental_duration"), "html", null, true);
        echo "\">
          <label for=\"rental_rate\">Costo de Alquiler</label>
          <input type=\"number\" class=\"form-control\" name=\"rental_rate\" id=\"rental_rate\" step=\"0.50\" value=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["film"]) ? $context["film"] : null), "rental_duration"), "html", null, true);
        echo "\">
        </div>
      </div>
    </div>
    <div class=\"col-md-6\">
      <div class=\"panel panel-default\">
        <div class=\"panel-heading\">
          <h3 class=\"panel-title\">Reparto</h3>
        </div>
        <div class=\"panel-body\">
          <select class=\"form-control\" name=\"actor_id\" id=\"actor_id\" value=\"";
        // line 36
        echo twig_escape_filter($this->env, (isset($context["actores_id"]) ? $context["actores_id"] : null), "html", null, true);
        echo "\" size=\"6\" multiple>
            ";
        // line 37
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["lista_actores"]) ? $context["lista_actores"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["actor"]) {
            // line 38
            echo "            <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["actor"]) ? $context["actor"] : null), "actor_id"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["actor"]) ? $context["actor"] : null), "first_name"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["actor"]) ? $context["actor"] : null), "last_name"), "html", null, true);
            echo "</option>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['actor'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "          </select>
        </div>
      </div>
    </div>
    <div class=\"col-md-6\">
      <div class=\"panel panel-default\">
        <div class=\"panel-heading\">
          <h3 class=\"panel-title\">Categorías</h3>
        </div>
        <div class=\"panel-body\">
          <select class=\"form-control\" name=\"category_id\" id=\"category_id\" value=\"";
        // line 50
        echo twig_escape_filter($this->env, (isset($context["categorias_id"]) ? $context["categorias_id"] : null), "html", null, true);
        echo "\" size=\"4\" multiple>
            ";
        // line 51
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["lista_categorias"]) ? $context["lista_categorias"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["cat"]) {
            // line 52
            echo "            <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cat"]) ? $context["cat"] : null), "category_id"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cat"]) ? $context["cat"] : null), "name"), "html", null, true);
            echo "</option>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cat'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        echo "          </select>
        </div>
      </div>
    </div>
  </div>

  <button class=\"btn btn-primary\" type=\"submit\"><span class=\"glyphicon glyphicon-floppy-disk\"></span> Guardar</button>
</form>";
    }

    public function getTemplateName()
    {
        return "formulario.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  143 => 54,  132 => 52,  128 => 51,  124 => 50,  112 => 40,  99 => 38,  95 => 37,  91 => 36,  78 => 26,  73 => 24,  69 => 22,  58 => 20,  54 => 19,  50 => 18,  45 => 16,  40 => 14,  35 => 12,  30 => 10,  19 => 1,);
    }
}

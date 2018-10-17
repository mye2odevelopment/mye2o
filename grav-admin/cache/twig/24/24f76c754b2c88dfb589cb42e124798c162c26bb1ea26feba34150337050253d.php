<?php

/* partials/basic-ficha-test.html.twig */
class __TwigTemplate_7be461e06ec4839f9de20f5a14af9cab8264a16b59003868bfe8cb66b97ac533 extends Twig_Template
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
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "taxonomy", array()), "category", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 2
            echo "<ol class=\"breadcrumb bg-white\">
    <li class=\"breadcrumb-item\"><a class=\"categoriaBread\" href=\"#\">CATEGORIAS</a></li>
    <li class=\"breadcrumb-item currentCategoria\" aria-current=\"page\">";
            // line 4
            echo $context["item"];
            echo "</li>
</ol>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 7
        echo "</nav>
<div class=\"container\">
    <div class=\"row\">
    
        <div class=\"";
        // line 11
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "entidad", array());
        echo " col\">
            ";
        // line 13
        echo "
        </div>
        <div class=\"col-md\">
            <h1 class=\"text-right\">";
        // line 16
        echo $this->getAttribute(($context["page"] ?? null), "title", array());
        echo "</h1>
        </div>
    </div>
</div>
<h3 class=\"text-right font-italic author\">";
        // line 20
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "autor", array());
        echo "<a href=\"\">

        <img src=\"";
        // line 22
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://images/contactAuthor.png");
        echo "\" alt=\"\" height=\"80\">
    </a></h3>


<!-- subtitle with readmore container collapse end-->
<div id=\"subtitulo\" class=\"subtitle text-justify border\">
    <p> Propuesta de formación especializada dirigida a mejorar la empleabilidad, incluyendo acciones de formación en
        competencias técnicas-profesionales y básicas, acompañamiento individualizado, incorporando a la empresa de una
        manera flexible en distintas fases de la acción formativa.
    </p>
</div>

<section class=\"main row\">
    <div class=\"col-8 content\">
        ";
        // line 36
        echo $this->getAttribute(($context["page"] ?? null), "content", array());
        echo "
    </div>
    <aside class=\"col-4\">
        <div class=\"";
        // line 39
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "localidad", array());
        echo "\">
            ";
        // line 41
        echo "        </div>
        <div class=\"side-bar\">
            <h3>barra lateral</h3>
            <h4> tags </h4>
            ";
        // line 45
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "taxonomy", array()), "tag", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
            // line 46
            echo "            <ul class=\"caja-tags\">
                <li><a class=\"btn btn rounded-0 border tagsTwo\" href=\"#\" role=\"button\">";
            // line 47
            echo $context["tag"];
            echo "</a></li>
            </ul>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "        </div>
    </aside>
</section>
";
    }

    public function getTemplateName()
    {
        return "partials/basic-ficha-test.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 50,  103 => 47,  100 => 46,  96 => 45,  90 => 41,  86 => 39,  80 => 36,  63 => 22,  58 => 20,  51 => 16,  46 => 13,  42 => 11,  36 => 7,  27 => 4,  23 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% for item in page.taxonomy.category %}
<ol class=\"breadcrumb bg-white\">
    <li class=\"breadcrumb-item\"><a class=\"categoriaBread\" href=\"#\">CATEGORIAS</a></li>
    <li class=\"breadcrumb-item currentCategoria\" aria-current=\"page\">{{item}}</li>
</ol>
{% endfor %}
</nav>
<div class=\"container\">
    <div class=\"row\">
    
        <div class=\"{{page.header.entidad}} col\">
            {# <img src=\"{{ url('theme://images/Tomillo.svg')}}\" alt=\"\" height=\"80\"> #}

        </div>
        <div class=\"col-md\">
            <h1 class=\"text-right\">{{page.title}}</h1>
        </div>
    </div>
</div>
<h3 class=\"text-right font-italic author\">{{page.header.autor}}<a href=\"\">

        <img src=\"{{ url('theme://images/contactAuthor.png') }}\" alt=\"\" height=\"80\">
    </a></h3>


<!-- subtitle with readmore container collapse end-->
<div id=\"subtitulo\" class=\"subtitle text-justify border\">
    <p> Propuesta de formación especializada dirigida a mejorar la empleabilidad, incluyendo acciones de formación en
        competencias técnicas-profesionales y básicas, acompañamiento individualizado, incorporando a la empresa de una
        manera flexible en distintas fases de la acción formativa.
    </p>
</div>

<section class=\"main row\">
    <div class=\"col-8 content\">
        {{ page.content}}
    </div>
    <aside class=\"col-4\">
        <div class=\"{{page.header.localidad}}\">
            {# <img class=\"map\" src=\"{{ url('theme://images/map.png') }}\" class=\"img-fluid\" alt=\"Responsive image\"> #}
        </div>
        <div class=\"side-bar\">
            <h3>barra lateral</h3>
            <h4> tags </h4>
            {% for tag in page.taxonomy.tag %}
            <ul class=\"caja-tags\">
                <li><a class=\"btn btn rounded-0 border tagsTwo\" href=\"#\" role=\"button\">{{ tag }}</a></li>
            </ul>
            {% endfor %}
        </div>
    </aside>
</section>
", "partials/basic-ficha-test.html.twig", "/Applications/MAMP/htdocs/mye2o/grav-admin/user/themes/mye2o-theme/templates/partials/basic-ficha-test.html.twig");
    }
}

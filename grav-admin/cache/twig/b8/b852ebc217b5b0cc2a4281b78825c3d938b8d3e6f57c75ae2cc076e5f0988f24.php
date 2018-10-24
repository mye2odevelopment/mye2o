<?php

/* partials/ficha-final.html.twig */
class __TwigTemplate_6316f84ef4765a880cccbdfe40b2128f0d4eb4caee95a0f30f52668ecce8f804 extends Twig_Template
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
        echo "<section class=\"banner\">

    <div class=\"box-title\">
        <p class=\"title-1\">Buena Practica</p>
        <p class=\"title-2\">";
        // line 5
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "title", array());
        echo "</p>
    </div>

</section>
<section>
    ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "taxonomy", array()), "category", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 11
            echo "    <ol class=\"breadcrumb bg-white\">
        <li class=\"breadcrumb-item\"><a class=\"categoriaBread\" href=\"#\">CATEGORIAS</a></li>
        <li class=\"breadcrumb-item currentCategoria\" aria-current=\"page\">";
            // line 13
            echo $context["item"];
            echo "</li>
    </ol>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "</section>
<section class=\"row\">
    <div class=\" offset-1 col-10 resumen\">
        <p class=\"text-resumen\">";
        // line 19
        echo $this->getAttribute(($context["page"] ?? null), "summary", array(0 => 180), "method");
        echo "</p>
    </div>
</section>
<section class=\"container\">
    <ul class=\"box-tags row\">
        ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "taxonomy", array()), "tag", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
            // line 25
            echo "        <li class=\"tags col-2\">";
            echo $context["tag"];
            echo "</li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "    </ul>
</section>
<section class=\"container\">
    <div class=\"row\">
        <div class=\"offset-1 box-content col-7\">
            ";
        // line 32
        echo $this->getAttribute(($context["page"] ?? null), "content", array());
        echo "
        
        </div>
        <div class=\" offset-1 col-3\">
            <div>logo</div>
            <div>autor</div>
            <div>descarga</div>
            <div>mapa</div>
            <div>galeria imagenes</div>
            <div>share</div>
        <div>
    </div>



</section>";
    }

    public function getTemplateName()
    {
        return "partials/ficha-final.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 32,  76 => 27,  67 => 25,  63 => 24,  55 => 19,  50 => 16,  41 => 13,  37 => 11,  33 => 10,  25 => 5,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<section class=\"banner\">

    <div class=\"box-title\">
        <p class=\"title-1\">Buena Practica</p>
        <p class=\"title-2\">{{page.header.title}}</p>
    </div>

</section>
<section>
    {% for item in page.taxonomy.category %}
    <ol class=\"breadcrumb bg-white\">
        <li class=\"breadcrumb-item\"><a class=\"categoriaBread\" href=\"#\">CATEGORIAS</a></li>
        <li class=\"breadcrumb-item currentCategoria\" aria-current=\"page\">{{item}}</li>
    </ol>
    {% endfor %}
</section>
<section class=\"row\">
    <div class=\" offset-1 col-10 resumen\">
        <p class=\"text-resumen\">{{page.summary(180)}}</p>
    </div>
</section>
<section class=\"container\">
    <ul class=\"box-tags row\">
        {% for tag in page.taxonomy.tag %}
        <li class=\"tags col-2\">{{tag}}</li>
        {% endfor %}
    </ul>
</section>
<section class=\"container\">
    <div class=\"row\">
        <div class=\"offset-1 box-content col-7\">
            {{page.content}}
        
        </div>
        <div class=\" offset-1 col-3\">
            <div>logo</div>
            <div>autor</div>
            <div>descarga</div>
            <div>mapa</div>
            <div>galeria imagenes</div>
            <div>share</div>
        <div>
    </div>



</section>", "partials/ficha-final.html.twig", "/home/factoria/carpetagit/mye2o/grav-admin/user/themes/mye2o-theme/templates/partials/ficha-final.html.twig");
    }
}

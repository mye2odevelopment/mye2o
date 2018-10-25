<?php

/* partials/skeleton-ficha.html.twig */
class __TwigTemplate_1d47001af6e8bf4eb7bba4045c92b2c9c1c59e2947a06469f4f9904d3a9e0221 extends Twig_Template
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
        <div class=\"offset-1 col-3\">
            <div class=\"entidad ";
        // line 36
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "entidad", array());
        echo "\"></div>
            <div class=\"autor\">
                <p>";
        // line 38
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "autor", array());
        echo "<img src=\"";
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://images/contactAuthor.png");
        echo "\" alt=\"\" height=\"80\"></p>
                ";
        // line 39
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "puesto", array());
        echo "
            </div>
            <div class=\"btn-download\"><button>imprimir</button><button>descarga</button></div>
            <div class=\"localidad ";
        // line 42
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "localidad", array());
        echo "\"></div>
            <div class=\"gallery-images\">
                ";
        // line 44
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", array()), "images", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
            // line 45
            echo "                ";
            echo $this->getAttribute($context["image"], "html", array());
            echo "
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "            </div>
            <div class=\"share\">
                    <i class=\"fab fa-facebook-f fa-2x\"></i><i class=\"fab fa-twitter-square fa-2x\"></i><i class=\"fab fa-instagram fa-2x\"></i>
            </div>
        </div>
    </div>



</section>";
    }

    public function getTemplateName()
    {
        return "partials/skeleton-ficha.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 47,  116 => 45,  112 => 44,  107 => 42,  101 => 39,  95 => 38,  90 => 36,  83 => 32,  76 => 27,  67 => 25,  63 => 24,  55 => 19,  50 => 16,  41 => 13,  37 => 11,  33 => 10,  25 => 5,  19 => 1,);
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
        <div class=\"offset-1 col-3\">
            <div class=\"entidad {{page.header.entidad}}\"></div>
            <div class=\"autor\">
                <p>{{page.header.autor}}<img src=\"{{ url('theme://images/contactAuthor.png') }}\" alt=\"\" height=\"80\"></p>
                {{page.header.puesto}}
            </div>
            <div class=\"btn-download\"><button>imprimir</button><button>descarga</button></div>
            <div class=\"localidad {{page.header.localidad}}\"></div>
            <div class=\"gallery-images\">
                {% for image in page.media.images %}
                {{ image.html }}
                {% endfor %}
            </div>
            <div class=\"share\">
                    <i class=\"fab fa-facebook-f fa-2x\"></i><i class=\"fab fa-twitter-square fa-2x\"></i><i class=\"fab fa-instagram fa-2x\"></i>
            </div>
        </div>
    </div>



</section>", "partials/skeleton-ficha.html.twig", "/home/factoria/carpetagit/mye2o/grav-admin/user/themes/mye2o-theme/templates/partials/skeleton-ficha.html.twig");
    }
}

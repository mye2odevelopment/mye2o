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
        echo "
";
        // line 3
        echo "<section class=\"banner\">

    <div class=\"box-title\">
        <p class=\"title-1\">Buena Practica</p>
        <p class=\"title-2\">";
        // line 7
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "title", array());
        echo "</p>";
        // line 8
        echo "    </div>

</section>



";
        // line 15
        echo "<section>

    ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "taxonomy", array()), "category", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 18
            echo "    <ol class=\"breadcrumb bg-white\">
        <li class=\"breadcrumb-item\"><a class=\"categoriaBread\" href=\"#\">CATEGORIAS</a></li>
        <li class=\"breadcrumb-item currentCategoria\" aria-current=\"page\">";
            // line 20
            echo $context["category"];
            echo "</li> ";
            // line 21
            echo "    </ol>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "
</section>



";
        // line 29
        echo "<section class=\"row\">

    <div class=\" offset-1 col-10 resumen\">
        <p class=\"text-resumen\">";
        // line 32
        echo $this->getAttribute(($context["page"] ?? null), "summary", array(0 => 180), "method");
        echo "</p> ";
        // line 33
        echo "    </div>

</section>



";
        // line 40
        echo "<section class=\"container\">

    <ul class=\"box-tags row\">
        ";
        // line 43
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "taxonomy", array()), "tag", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
            // line 44
            echo "        <li class=\"tags col-2\">";
            echo $context["tag"];
            echo "</li> ";
            // line 45
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "    </ul>

</section>



";
        // line 53
        echo "<section class=\"container\">

    <div class=\"row\">

        ";
        // line 58
        echo "        <div class=\"offset-1 box-content col-7\">
            ";
        // line 59
        echo $this->getAttribute(($context["page"] ?? null), "content", array());
        echo "

        </div>

        ";
        // line 64
        echo "        <div class=\"offset-1 col-3\">

            ";
        // line 67
        echo "            <div class=\"entidad ";
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "entidad", array());
        echo "\"></div>

            ";
        // line 70
        echo "            <div class=\"autor\">
                <p>";
        // line 71
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "autor", array());
        echo "<img src=\"";
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://images/contactAuthor.png");
        echo "\" alt=\"\" height=\"80\"></p>
                ";
        // line 72
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "puesto", array());
        echo "
            </div>

            ";
        // line 76
        echo "            <div class=\"btn-download\"><button>imprimir</button><button>descarga</button></div>

            ";
        // line 79
        echo "            <div class=\"localidad ";
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "localidad", array());
        echo "\"></div>

            ";
        // line 82
        echo "            <div class=\"gallery-images\">
                ";
        // line 83
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", array()), "images", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
            // line 84
            echo "                ";
            echo $this->getAttribute($context["image"], "html", array());
            echo "
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 86
        echo "            </div>

            ";
        // line 89
        echo "            <div class=\"share\">
                    <i class=\"fab fa-facebook-f fa-2x\"></i><i class=\"fab fa-twitter-square fa-2x\"></i><i class=\"fab fa-instagram fa-2x\"></i>
            </div>


        </div>

    </div>
    
</section>
";
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
        return array (  182 => 89,  178 => 86,  169 => 84,  165 => 83,  162 => 82,  156 => 79,  152 => 76,  146 => 72,  140 => 71,  137 => 70,  131 => 67,  127 => 64,  120 => 59,  117 => 58,  111 => 53,  103 => 46,  97 => 45,  93 => 44,  89 => 43,  84 => 40,  76 => 33,  73 => 32,  68 => 29,  61 => 23,  54 => 21,  51 => 20,  47 => 18,  43 => 17,  39 => 15,  31 => 8,  28 => 7,  22 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("
{# Seccion banner y titulo de la buena practica #}
<section class=\"banner\">

    <div class=\"box-title\">
        <p class=\"title-1\">Buena Practica</p>
        <p class=\"title-2\">{{page.header.title}}</p>{# Aqui va el titulo de la buena practica #}
    </div>

</section>



{# Seccion del breadcrumb #}
<section>

    {% for category in page.taxonomy.category %}
    <ol class=\"breadcrumb bg-white\">
        <li class=\"breadcrumb-item\"><a class=\"categoriaBread\" href=\"#\">CATEGORIAS</a></li>
        <li class=\"breadcrumb-item currentCategoria\" aria-current=\"page\">{{category}}</li> {# Categoria asignada a la ficha #}
    </ol>
    {% endfor %}

</section>



{# Seccion resumen #}
<section class=\"row\">

    <div class=\" offset-1 col-10 resumen\">
        <p class=\"text-resumen\">{{page.summary(180)}}</p> {# Pequeño resumen de la ficha con un maximo de 180 caracteres #}
    </div>

</section>



{# seccion tags #}
<section class=\"container\">

    <ul class=\"box-tags row\">
        {% for tag in page.taxonomy.tag %}
        <li class=\"tags col-2\">{{tag}}</li> {# Aqui se cargan todas las tags asignadas a la ficha #}
        {% endfor %}
    </ul>

</section>



{# Seccion contenido de la ficha y barra lateral #}
<section class=\"container\">

    <div class=\"row\">

        {# Aqui se carga el contenido de la ficha #}
        <div class=\"offset-1 box-content col-7\">
            {{page.content}}

        </div>

        {# Barra Lateral #}
        <div class=\"offset-1 col-3\">

            {# Logo de la entidad que publica la buena practica #}
            <div class=\"entidad {{page.header.entidad}}\"></div>

            {# Autor y posicion que ocupa #}
            <div class=\"autor\">
                <p>{{page.header.autor}}<img src=\"{{ url('theme://images/contactAuthor.png') }}\" alt=\"\" height=\"80\"></p>
                {{page.header.puesto}}
            </div>

            {# Botones para imprimir y descargar #}
            <div class=\"btn-download\"><button>imprimir</button><button>descarga</button></div>

            {# Mapa localidad de la entidad #}
            <div class=\"localidad {{page.header.localidad}}\"></div>

            {# Galeria de la imagenes subidas a la ficha #}
            <div class=\"gallery-images\">
                {% for image in page.media.images %}
                {{ image.html }}
                {% endfor %}
            </div>

            {# Botones share #}
            <div class=\"share\">
                    <i class=\"fab fa-facebook-f fa-2x\"></i><i class=\"fab fa-twitter-square fa-2x\"></i><i class=\"fab fa-instagram fa-2x\"></i>
            </div>


        </div>

    </div>
    
</section>
", "partials/skeleton-ficha.html.twig", "/home/factoria/carpetagit/mye2o/grav-admin/user/themes/mye2o-theme/templates/partials/skeleton-ficha.html.twig");
    }
}

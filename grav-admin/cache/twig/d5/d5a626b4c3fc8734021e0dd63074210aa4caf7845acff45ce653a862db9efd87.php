<?php

/* partials/basic-ficha.html.twig */
class __TwigTemplate_415e9458736c54b0944833ee672d183d169a8dae2ec13296369df3f501ddc038 extends Twig_Template
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
<h1>";
        // line 2
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "title", array());
        echo "</h1>
<h2>";
        // line 3
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "autor", array());
        echo "</h2>
<p>";
        // line 4
        echo $this->getAttribute(($context["page"] ?? null), "sumary", array());
        echo "</p>
";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "taxonomy", array()), "tag", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 6
            echo "    <ul>
        <li>";
            // line 7
            echo $context["item"];
            echo "</li>
    </ul>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        echo "
<p>";
        // line 11
        echo $this->getAttribute(($context["page"] ?? null), "content", array());
        echo "</p>";
    }

    public function getTemplateName()
    {
        return "partials/basic-ficha.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 11,  50 => 10,  41 => 7,  38 => 6,  34 => 5,  30 => 4,  26 => 3,  22 => 2,  19 => 1,);
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
<h1>{{ page.header.title }}</h1>
<h2>{{page.header.autor}}</h2>
<p>{{page.sumary}}</p>
{% for item in page.taxonomy.tag %}
    <ul>
        <li>{{ item }}</li>
    </ul>
{% endfor %}

<p>{{page.content}}</p>", "partials/basic-ficha.html.twig", "/home/factoria/carpetagit/mye2o/grav-admin/user/themes/mye2o-theme/templates/partials/basic-ficha.html.twig");
    }
}

<?php

/* partials/filtros.html.twig */
class __TwigTemplate_b2c2300bca07395e266fc0946132c26403c87fccbd52116a666d1356fa043586 extends Twig_Template
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
        echo "<br />
<br />

<div>
    ";
        // line 5
        echo $this->getAttribute(($context["page"] ?? null), "content", array());
        echo "

    
    ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "children", array()), "visible", array()), "title", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["result"]) {
            // line 9
            echo "    <ul>
        <li>";
            // line 10
            echo $context["result"];
            echo "</li>
    <ul>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['result'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "    
</div>";
    }

    public function getTemplateName()
    {
        return "partials/filtros.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 13,  38 => 10,  35 => 9,  31 => 8,  25 => 5,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<br />
<br />

<div>
    {{page.content}}

    
    {% for result in page.children.visible.title %}
    <ul>
        <li>{{result}}</li>
    <ul>
    {% endfor %}
    
</div>", "partials/filtros.html.twig", "/home/factoria/carpetagit/mye2o/grav-admin/user/themes/mye2o-theme/templates/partials/filtros.html.twig");
    }
}

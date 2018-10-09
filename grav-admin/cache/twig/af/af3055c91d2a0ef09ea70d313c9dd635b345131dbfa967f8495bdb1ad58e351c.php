<?php

/* ficha.html.twig */
class __TwigTemplate_cecf0bc7e58fe4d52c48795e5cd446b868c8191c7aa4d5ef352fcc41c295a6b3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("partials/base.html.twig", "ficha.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "partials/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", array(0 => "theme://css-compiled/home.css", 1 => 95), "method");
        // line 5
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
";
    }

    // line 8
    public function block_content($context, array $blocks = array())
    {
        // line 9
        echo "    ";
        $this->loadTemplate("partials/basic-ficha.html.twig", "ficha.html.twig", 9)->display($context);
        // line 10
        echo "    ";
        echo $this->getAttribute(($context["page"] ?? null), "content", array());
        echo "
";
    }

    public function getTemplateName()
    {
        return "ficha.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 10,  45 => 9,  42 => 8,  35 => 5,  32 => 4,  29 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'partials/base.html.twig' %}

{% block stylesheets %}
    {% do assets.addCss('theme://css-compiled/home.css', 95) %}
    {{ parent() }}
{% endblock %}

{% block content %}
    {% include 'partials/basic-ficha.html.twig' %}
    {{ page.content }}
{% endblock %}", "ficha.html.twig", "/home/factoria/carpetagit/mye2o/grav-admin/user/themes/mye2o-theme/templates/ficha.html.twig");
    }
}

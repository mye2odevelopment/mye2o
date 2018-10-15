<?php

/* home.html.twig */
class __TwigTemplate_c2e8ebb18f42405499c02f810dc99bf183be00ee74e10854f9268405688af757 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("partials/base.html.twig", "home.html.twig", 1);
        $this->blocks = array(
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

    // line 9
    public function block_content($context, array $blocks = array())
    {
        // line 10
        echo "    ";
        echo $this->getAttribute(($context["page"] ?? null), "content", array());
        echo "
    ";
        // line 11
        $this->loadTemplate("partials/home-skeleton.html.twig", "home.html.twig", 11)->display($context);
    }

    public function getTemplateName()
    {
        return "home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  36 => 11,  31 => 10,  28 => 9,  11 => 1,);
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

{# {% block stylesheets %}
    {% do assets.addCss('theme://css/various.css') %}
    {% do assets.addCss('theme://css/realhome.css') %}
    {{ parent() }}
{% endblock %} #}

{% block content %}
    {{ page.content }}
    {% include 'partials/home-skeleton.html.twig' %}
{% endblock %}

{# {% block javascript %}
    {% do assets.addJs('theme://js/common_scripts.js') %}
    {% do assets.addJs('theme://js/main.js') %}
{% endblock %} #}", "home.html.twig", "/home/factoria/carpetagit/mye2o/grav-admin/user/themes/mye2o-theme/templates/home.html.twig");
    }
}

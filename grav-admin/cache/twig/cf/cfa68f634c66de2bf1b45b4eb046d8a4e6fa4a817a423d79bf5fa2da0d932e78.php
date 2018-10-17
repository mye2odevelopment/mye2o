<?php

/* testficha.html.twig */
class __TwigTemplate_fe4fbd76c1cc4ccc77464ee41bc3fd5e6e7111a21d9946067433404f7e09a195 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("partials/base.html.twig", "testficha.html.twig", 1);
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

    // line 4
    public function block_content($context, array $blocks = array())
    {
        // line 5
        echo "    ";
        $this->loadTemplate("partials/basic-ficha-test.html.twig", "testficha.html.twig", 5)->display($context);
    }

    public function getTemplateName()
    {
        return "testficha.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 5,  28 => 4,  11 => 1,);
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


{% block content %}
    {% include 'partials/basic-ficha-test.html.twig' %}
{% endblock %}", "testficha.html.twig", "/Applications/MAMP/htdocs/mye2o/grav-admin/user/themes/mye2o-theme/templates/testficha.html.twig");
    }
}

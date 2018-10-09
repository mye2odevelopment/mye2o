<?php

/* partials/test.html.twig */
class __TwigTemplate_a0a9ffdbca9d70b3158c8495b626afc5172c54ac3460b04e927a2ad6ee669a5b extends Twig_Template
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
        echo "<h3>hola factoria f5</h3>";
    }

    public function getTemplateName()
    {
        return "partials/test.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<h3>hola factoria f5</h3>", "partials/test.html.twig", "/Applications/MAMP/htdocs/mye2o/grav-admin/user/themes/mye2o-theme/templates/partials/test.html.twig");
    }
}

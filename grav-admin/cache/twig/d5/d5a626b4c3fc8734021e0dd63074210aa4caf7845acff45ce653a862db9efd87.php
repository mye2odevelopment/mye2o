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
        <nav aria-colspan=\"breadcrumb\"></nav>
        <ol class=\"breadcrumb bg-white\">
            <li class=\"breadcrumb-item\"><a class=\"categoriaBread\" href=\"#\">CATEGORIAS</a></li>
            <li class=\"breadcrumb-item currentCategoria\" aria-current=\"page\">PROFESIONALES</li>
        </ol>
        </nav>";
    }

    public function getTemplateName()
    {
        return "partials/basic-ficha.html.twig";
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
        return new Twig_Source("
        <nav aria-colspan=\"breadcrumb\"></nav>
        <ol class=\"breadcrumb bg-white\">
            <li class=\"breadcrumb-item\"><a class=\"categoriaBread\" href=\"#\">CATEGORIAS</a></li>
            <li class=\"breadcrumb-item currentCategoria\" aria-current=\"page\">PROFESIONALES</li>
        </ol>
        </nav>", "partials/basic-ficha.html.twig", "/Applications/MAMP/htdocs/mye2o/grav-admin/user/themes/mye2o-theme/templates/partials/basic-ficha.html.twig");
    }
}

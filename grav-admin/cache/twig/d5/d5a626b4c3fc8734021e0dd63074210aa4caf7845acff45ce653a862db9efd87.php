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
        echo "<div>
    <img src=\"";
        // line 2
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://images/logo.png");
        echo "\">
</div>

<h1> proviamo a scirvere adesso fdsgshthrgsd</h1>";
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
        return array (  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div>
    <img src=\"{{ url ('theme://images/logo.png') }}\">
</div>

<h1> proviamo a scirvere adesso fdsgshthrgsd</h1>", "partials/basic-ficha.html.twig", "/Applications/MAMP/htdocs/mye2o/grav-admin/user/themes/mye2o-theme/templates/partials/basic-ficha.html.twig");
    }
}

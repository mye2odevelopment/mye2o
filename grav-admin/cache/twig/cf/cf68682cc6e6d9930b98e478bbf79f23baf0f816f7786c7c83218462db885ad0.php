<?php

/* partials/base.html.twig */
class __TwigTemplate_7ad7daa9a8a1f1c3446899bbc057bb7d8d3c1fc89c2dacfa8edaa63542e2da4a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'header' => array($this, 'block_header'),
            'body' => array($this, 'block_body'),
            'content' => array($this, 'block_content'),
            'footer' => array($this, 'block_footer'),
            'bottom' => array($this, 'block_bottom'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context["theme_config"] = $this->getAttribute($this->getAttribute(($context["config"] ?? null), "themes", array()), $this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "system", array()), "pages", array()), "theme", array()));
        // line 2
        echo "<!DOCTYPE html>
<html lang=\"";
        // line 3
        echo (($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", array()), "getActive", array())) ? ($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", array()), "getActive", array())) : ($this->getAttribute(($context["theme_config"] ?? null), "default_lang", array())));
        echo "\">
<head>
";
        // line 5
        $this->displayBlock('head', $context, $blocks);
        // line 38
        echo "</head>
<body id=\"top\" class=\"";
        // line 39
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "body_classes", array());
        echo "\">

";
        // line 41
        $this->displayBlock('header', $context, $blocks);
        // line 56
        echo "
";
        // line 57
        $this->displayBlock('body', $context, $blocks);
        // line 64
        echo "
";
        // line 65
        $this->displayBlock('footer', $context, $blocks);
        // line 72
        echo "
";
        // line 73
        $this->displayBlock('bottom', $context, $blocks);
        // line 76
        echo "
</body>
</html>
";
    }

    // line 5
    public function block_head($context, array $blocks = array())
    {
        // line 6
        echo "    <meta charset=\"utf-8\" />
    <title>";
        // line 7
        if ($this->getAttribute(($context["header"] ?? null), "title", array())) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["header"] ?? null), "title", array()), "html");
            echo " | ";
        }
        echo twig_escape_filter($this->env, $this->getAttribute(($context["site"] ?? null), "title", array()), "html");
        echo "</title>

    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    ";
        // line 11
        $this->loadTemplate("partials/metadata.html.twig", "partials/base.html.twig", 11)->display($context);
        // line 12
        echo "
    <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 13
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://images/logo.png");
        echo "\" />
    <link rel=\"canonical\" href=\"";
        // line 14
        echo $this->getAttribute(($context["page"] ?? null), "url", array(0 => true, 1 => true), "method");
        echo "\" />

    ";
        // line 16
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 25
        echo "    ";
        echo $this->getAttribute(($context["assets"] ?? null), "css", array(), "method");
        echo "

    ";
        // line 27
        $this->displayBlock('javascripts', $context, $blocks);
        // line 35
        echo "    ";
        echo $this->getAttribute(($context["assets"] ?? null), "js", array(), "method");
        echo "

";
    }

    // line 16
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 17
        echo "        ";
        // line 18
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", array(0 => "https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css", 1 => 99), "method");
        // line 19
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", array(0 => "theme://css/reset.css", 1 => 99), "method");
        // line 20
        echo "        ";
        // line 21
        echo "        ";
        // line 22
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", array(0 => "theme://css/various.css", 1 => 96), "method");
        // line 23
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", array(0 => "theme://css/realhome.css", 1 => 95), "method");
        // line 24
        echo "    ";
    }

    // line 27
    public function block_javascripts($context, array $blocks = array())
    {
        // line 28
        echo "        ";
        // line 29
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", array(0 => "theme://js/common_scripts.js", 1 => 99), "method");
        // line 30
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", array(0 => "https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js", 1 => 100), "method");
        // line 31
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", array(0 => "plugins://simplesearch/js/simplesearch.js", 1 => 98), "method");
        // line 32
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", array(0 => "theme://js/app.js", 1 => 97), "method");
        // line 33
        echo "        ";
        // line 34
        echo "    ";
    }

    // line 41
    public function block_header($context, array $blocks = array())
    {
        // line 42
        echo "    ";
    }

    // line 57
    public function block_body($context, array $blocks = array())
    {
        // line 58
        echo "    <section id=\"body\">
        <div class=\"\">
        ";
        // line 60
        $this->displayBlock('content', $context, $blocks);
        // line 61
        echo "        </div>
    </section>
";
    }

    // line 60
    public function block_content($context, array $blocks = array())
    {
    }

    // line 65
    public function block_footer($context, array $blocks = array())
    {
        // line 66
        echo "    <div class=\"footer text-center\">
        <div class=\"wrapper padding\">
            <p><a href=\"http://getgrav.org\">Grav</a> was <i class=\"fa fa-code\"></i> with <i class=\"fa fa-heart\"></i> by <a href=\"http://www.rockettheme.com\">RocketTheme</a>.</p>
        </div>
    </div>
";
    }

    // line 73
    public function block_bottom($context, array $blocks = array())
    {
        // line 74
        echo "    ";
        echo $this->getAttribute(($context["assets"] ?? null), "js", array(0 => "bottom"), "method");
        echo "
";
    }

    public function getTemplateName()
    {
        return "partials/base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  210 => 74,  207 => 73,  198 => 66,  195 => 65,  190 => 60,  184 => 61,  182 => 60,  178 => 58,  175 => 57,  171 => 42,  168 => 41,  164 => 34,  162 => 33,  159 => 32,  156 => 31,  153 => 30,  150 => 29,  148 => 28,  145 => 27,  141 => 24,  138 => 23,  135 => 22,  133 => 21,  131 => 20,  128 => 19,  125 => 18,  123 => 17,  120 => 16,  112 => 35,  110 => 27,  104 => 25,  102 => 16,  97 => 14,  93 => 13,  90 => 12,  88 => 11,  77 => 7,  74 => 6,  71 => 5,  64 => 76,  62 => 73,  59 => 72,  57 => 65,  54 => 64,  52 => 57,  49 => 56,  47 => 41,  42 => 39,  39 => 38,  37 => 5,  32 => 3,  29 => 2,  27 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set theme_config = attribute(config.themes, config.system.pages.theme) %}
<!DOCTYPE html>
<html lang=\"{{ grav.language.getActive ?: theme_config.default_lang }}\">
<head>
{% block head %}
    <meta charset=\"utf-8\" />
    <title>{% if header.title %}{{ header.title|e('html') }} | {% endif %}{{ site.title|e('html') }}</title>

    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    {% include 'partials/metadata.html.twig' %}

    <link rel=\"icon\" type=\"image/png\" href=\"{{ url('theme://images/logo.png') }}\" />
    <link rel=\"canonical\" href=\"{{ page.url(true, true) }}\" />

    {% block stylesheets %}
        {# {% do assets.addCss('https://unpkg.com/purecss@1.0.0/build/pure-min.css', 100) %} #}
        {% do assets.addCss('https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css', 99) %}
        {% do assets.addCss('theme://css/reset.css', 99) %}
        {# {% do assets.addCss('https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css', 98) %} #}
        {# {% do assets.addCss('theme://css/custom.css', 98) %} #}
        {% do assets.addCss('theme://css/various.css', 96) %}
        {% do assets.addCss('theme://css/realhome.css', 95) %}
    {% endblock %}
    {{ assets.css() }}

    {% block javascripts %}
        {# {% do assets.addJs('jquery', 100) %} #}
        {% do assets.addJs('theme://js/common_scripts.js', 99) %}
        {% do assets.addJs('https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js', 100) %}
        {% do assets.addJs('plugins://simplesearch/js/simplesearch.js', 98) %}
        {% do assets.addJs('theme://js/app.js', 97) %}
        {# {% do assets.addJs('theme://js/main.js', 98) %} #}
    {% endblock %}
    {{ assets.js() }}

{% endblock head%}
</head>
<body id=\"top\" class=\"{{ page.header.body_classes }}\">

{% block header %}
    {# <div class=\"header\">
        <div class=\"wrapper padding\">
            <a class=\"logo left\" href=\"{{ base_url == '' ? '/' : base_url }}\">
                <i class=\"fa fa-rebel\"></i>
                {{ config.site.title }}
            </a>
            {% block header_navigation %}
            <nav class=\"main-nav\">
                {% include 'partials/navigation.html.twig' %}
            </nav>
            {% endblock %}
        </div>
    </div> #}
{% endblock %}

{% block body %}
    <section id=\"body\">
        <div class=\"\">
        {% block content %}{% endblock %}
        </div>
    </section>
{% endblock %}

{% block footer %}
    <div class=\"footer text-center\">
        <div class=\"wrapper padding\">
            <p><a href=\"http://getgrav.org\">Grav</a> was <i class=\"fa fa-code\"></i> with <i class=\"fa fa-heart\"></i> by <a href=\"http://www.rockettheme.com\">RocketTheme</a>.</p>
        </div>
    </div>
{% endblock %}

{% block bottom %}
    {{ assets.js('bottom') }}
{% endblock %}

</body>
</html>
", "partials/base.html.twig", "/home/factoria/carpetagit/mye2o/grav-admin/user/themes/mye2o-theme/templates/partials/base.html.twig");
    }
}

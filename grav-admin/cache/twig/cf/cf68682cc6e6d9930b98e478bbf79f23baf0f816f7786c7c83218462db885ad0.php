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
            'header_navigation' => array($this, 'block_header_navigation'),
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
        // line 37
        echo "</head>
<body id=\"top\" class=\"";
        // line 38
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "body_classes", array());
        echo "\">

";
        // line 40
        $this->displayBlock('header', $context, $blocks);
        // line 55
        echo "
";
        // line 56
        $this->displayBlock('body', $context, $blocks);
        // line 63
        echo "
";
        // line 64
        $this->displayBlock('footer', $context, $blocks);
        // line 71
        echo "
";
        // line 72
        $this->displayBlock('bottom', $context, $blocks);
        // line 75
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
        // line 26
        echo "    ";
        echo $this->getAttribute(($context["assets"] ?? null), "css", array(), "method");
        echo "

    ";
        // line 28
        $this->displayBlock('javascripts', $context, $blocks);
        // line 34
        echo "    ";
        echo $this->getAttribute(($context["assets"] ?? null), "js", array(), "method");
        echo "

";
    }

    // line 16
    public function block_stylesheets($context, array $blocks = array())
    {
        echo "     
        ";
        // line 17
        $this->getAttribute(($context["assets"] ?? null), "addCss", array(0 => "theme://css/reset.css", 1 => 98), "method");
        // line 18
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", array(0 => "https://unpkg.com/purecss@1.0.0/build/pure-min.css", 1 => 100), "method");
        // line 19
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", array(0 => "https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css", 1 => 99), "method");
        // line 20
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", array(0 => "https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css", 1 => 96), "method");
        // line 21
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", array(0 => "theme://css-compiled/ficha.css", 1 => 95), "method");
        // line 22
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", array(0 => "theme://css-compiled/fichaTest.css", 1 => 94), "method");
        // line 23
        echo "

    ";
    }

    // line 28
    public function block_javascripts($context, array $blocks = array())
    {
        // line 29
        echo "        ";
        // line 30
        echo "        
        ";
        // line 31
        $this->getAttribute(($context["assets"] ?? null), "addJs", array(0 => "https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"), "method");
        // line 32
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", array(0 => "theme://js/app.js", 1 => 99), "method");
        // line 33
        echo "    ";
    }

    // line 40
    public function block_header($context, array $blocks = array())
    {
        // line 41
        echo "    <div class=\"header\">
        <div class=\"wrapper padding\">
            <a class=\"logo left\" href=\"";
        // line 43
        echo (((($context["base_url"] ?? null) == "")) ? ("/") : (($context["base_url"] ?? null)));
        echo "\">
                <i class=\"fa fa-rebel\"></i>
                ";
        // line 45
        echo $this->getAttribute($this->getAttribute(($context["config"] ?? null), "site", array()), "title", array());
        echo "
            </a>
            ";
        // line 47
        $this->displayBlock('header_navigation', $context, $blocks);
        // line 52
        echo "        </div>
    </div>
";
    }

    // line 47
    public function block_header_navigation($context, array $blocks = array())
    {
        // line 48
        echo "            <nav class=\"main-nav\">
                ";
        // line 49
        $this->loadTemplate("partials/navigation.html.twig", "partials/base.html.twig", 49)->display($context);
        // line 50
        echo "            </nav>
            ";
    }

    // line 56
    public function block_body($context, array $blocks = array())
    {
        // line 57
        echo "    <section id=\"body\">
        <div class=\"wrapper padding\">
        ";
        // line 59
        $this->displayBlock('content', $context, $blocks);
        // line 60
        echo "        </div>
    </section>
";
    }

    // line 59
    public function block_content($context, array $blocks = array())
    {
    }

    // line 64
    public function block_footer($context, array $blocks = array())
    {
        // line 65
        echo "    ";
    }

    // line 72
    public function block_bottom($context, array $blocks = array())
    {
        // line 73
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
        return array (  234 => 73,  231 => 72,  227 => 65,  224 => 64,  219 => 59,  213 => 60,  211 => 59,  207 => 57,  204 => 56,  199 => 50,  197 => 49,  194 => 48,  191 => 47,  185 => 52,  183 => 47,  178 => 45,  173 => 43,  169 => 41,  166 => 40,  162 => 33,  159 => 32,  157 => 31,  154 => 30,  152 => 29,  149 => 28,  143 => 23,  140 => 22,  137 => 21,  134 => 20,  131 => 19,  128 => 18,  126 => 17,  121 => 16,  113 => 34,  111 => 28,  105 => 26,  103 => 16,  98 => 14,  94 => 13,  91 => 12,  89 => 11,  78 => 7,  75 => 6,  72 => 5,  65 => 75,  63 => 72,  60 => 71,  58 => 64,  55 => 63,  53 => 56,  50 => 55,  48 => 40,  43 => 38,  40 => 37,  38 => 5,  33 => 3,  30 => 2,  28 => 1,);
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
        {% do assets.addCss('theme://css/reset.css', 98) %}
        {% do assets.addCss('https://unpkg.com/purecss@1.0.0/build/pure-min.css', 100) %}
        {% do assets.addCss('https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css', 99) %}
        {% do assets.addCss('https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css', 96)  %}
        {% do assets.addCss('theme://css-compiled/ficha.css', 95) %}
        {% do assets.addCss('theme://css-compiled/fichaTest.css', 94) %}


    {% endblock %}
    {{ assets.css() }}

    {% block javascripts %}
        {# {% do assets.addJs('jquery', 100) %} #}
        
        {% do assets.addJs('https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js')%}
        {% do assets.addJs('theme://js/app.js', 99) %}
    {% endblock %}
    {{ assets.js() }}

{% endblock head%}
</head>
<body id=\"top\" class=\"{{ page.header.body_classes }}\">

{% block header %}
    <div class=\"header\">
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
    </div>
{% endblock %}

{% block body %}
    <section id=\"body\">
        <div class=\"wrapper padding\">
        {% block content %}{% endblock %}
        </div>
    </section>
{% endblock %}

{% block footer %}
    {# <div class=\"footer text-center\">
        <div class=\"wrapper padding\">
            <p><a href=\"http://getgrav.org\">Grav</a> was <i class=\"fa fa-code\"></i> with <i class=\"fa fa-heart\"></i> by <a href=\"http://www.rockettheme.com\">RocketTheme</a>.</p>
        </div>
    </div> #}
{% endblock %}

{% block bottom %}
    {{ assets.js('bottom') }}
{% endblock %}

</body>
</html>
", "partials/base.html.twig", "/home/factoria/carpetagit/mye2o/grav-admin/user/themes/mye2o-theme/templates/partials/base.html.twig");
    }
}

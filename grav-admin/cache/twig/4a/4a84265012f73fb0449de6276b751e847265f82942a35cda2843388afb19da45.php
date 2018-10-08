<?php

/* partials/base.html.twig */
class __TwigTemplate_4770e80a0d516c8eb95d62c527e9bdf4681da7a8c383e2b02a2d8f291a1d6557 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'body_classes' => array($this, 'block_body_classes'),
            'header' => array($this, 'block_header'),
            'header_navigation' => array($this, 'block_header_navigation'),
            'hero' => array($this, 'block_hero'),
            'body' => array($this, 'block_body'),
            'messages' => array($this, 'block_messages'),
            'content' => array($this, 'block_content'),
            'footer' => array($this, 'block_footer'),
            'bottom' => array($this, 'block_bottom'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context["body_classes"] = $this->env->getExtension('Grav\Common\Twig\TwigExtension')->bodyClassFunc(array(0 => "header-fixed", 1 => "header-animated", 2 => "header-dark", 3 => "header-transparent", 4 => "sticky-footer"));
        // line 2
        $context["grid_size"] = $this->env->getExtension('Grav\Common\Twig\TwigExtension')->themeVarFunc("grid-size");
        // line 3
        $context["compress"] = (($this->env->getExtension('Grav\Common\Twig\TwigExtension')->themeVarFunc("production_mode")) ? (".min.css") : (".css"));
        // line 4
        echo "<!DOCTYPE html>
<html lang=\"";
        // line 5
        echo (($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", array()), "getActive", array())) ? ($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", array()), "getActive", array())) : ($this->getAttribute($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "config", array()), "site", array()), "default_lang", array())));
        echo "\">
<head>
";
        // line 7
        $this->displayBlock('head', $context, $blocks);
        // line 36
        echo "</head>
<body id=\"top\" class=\"";
        // line 37
        $this->displayBlock('body_classes', $context, $blocks);
        echo "\">
    <div id=\"page-wrapper\">
    ";
        // line 39
        $this->displayBlock('header', $context, $blocks);
        // line 70
        echo "
    ";
        // line 71
        $this->displayBlock('hero', $context, $blocks);
        // line 72
        echo "
        <section id=\"start\">
        ";
        // line 74
        $this->displayBlock('body', $context, $blocks);
        // line 84
        echo "        </section>

    </div>

";
        // line 88
        $this->displayBlock('footer', $context, $blocks);
        // line 95
        echo "
    
    <div class=\"mobile-container\">
        <div class=\"overlay\" id=\"overlay\">
            <div class=\"mobile-logo\">
                ";
        // line 100
        $this->loadTemplate("partials/logo.html.twig", "partials/base.html.twig", 100)->display(array_merge($context, array("mobile" => true)));
        // line 101
        echo "            </div>
            <nav class=\"overlay-menu\">
                ";
        // line 103
        $this->loadTemplate("partials/navigation.html.twig", "partials/base.html.twig", 103)->display(array_merge($context, array("tree" => true)));
        // line 104
        echo "            </nav>
        </div>
    </div>

";
        // line 108
        $this->displayBlock('bottom', $context, $blocks);
        // line 111
        echo "
</body>
";
    }

    // line 7
    public function block_head($context, array $blocks = array())
    {
        // line 8
        echo "    <meta charset=\"utf-8\" />
    <title>";
        // line 9
        if ($this->getAttribute(($context["header"] ?? null), "title", array())) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["header"] ?? null), "title", array()), "html");
            echo " | ";
        }
        echo twig_escape_filter($this->env, $this->getAttribute(($context["site"] ?? null), "title", array()), "html");
        echo "</title>

    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    ";
        // line 13
        $this->loadTemplate("partials/metadata.html.twig", "partials/base.html.twig", 13)->display($context);
        // line 14
        echo "
    <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 15
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://images/favicon.png");
        echo "\" />
    <link rel=\"canonical\" href=\"";
        // line 16
        echo $this->getAttribute(($context["page"] ?? null), "url", array(0 => true, 1 => true), "method");
        echo "\" />

    ";
        // line 18
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 26
        echo "    ";
        echo $this->getAttribute(($context["assets"] ?? null), "css", array(), "method");
        echo "

    ";
        // line 28
        $this->displayBlock('javascripts', $context, $blocks);
        // line 33
        echo "    ";
        echo $this->getAttribute(($context["assets"] ?? null), "js", array(), "method");
        echo "

";
    }

    // line 18
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 19
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", array(0 => ("theme://css-compiled/spectre" . ($context["compress"] ?? null))), "method");
        // line 20
        echo "        ";
        if ($this->env->getExtension('Grav\Common\Twig\TwigExtension')->themeVarFunc("spectre.exp")) {
            $this->getAttribute(($context["assets"] ?? null), "addCss", array(0 => ("theme://css-compiled/spectre-exp" . ($context["compress"] ?? null))), "method");
        }
        // line 21
        echo "        ";
        if ($this->env->getExtension('Grav\Common\Twig\TwigExtension')->themeVarFunc("spectre.icons")) {
            $this->getAttribute(($context["assets"] ?? null), "addCss", array(0 => ("theme://css-compiled/spectre-icons" . ($context["compress"] ?? null))), "method");
        }
        // line 22
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", array(0 => ("theme://css-compiled/theme" . ($context["compress"] ?? null))), "method");
        // line 23
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", array(0 => "theme://css/custom.css"), "method");
        // line 24
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", array(0 => "theme://css/line-awesome.min.css"), "method");
        // line 25
        echo "    ";
    }

    // line 28
    public function block_javascripts($context, array $blocks = array())
    {
        // line 29
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", array(0 => "jquery", 1 => 101), "method");
        // line 30
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", array(0 => "theme://js/jquery.treemenu.js", 1 => array("group" => "bottom")), "method");
        // line 31
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", array(0 => "theme://js/site.js", 1 => array("group" => "bottom")), "method");
        // line 32
        echo "    ";
    }

    // line 37
    public function block_body_classes($context, array $blocks = array())
    {
        echo ($context["body_classes"] ?? null);
    }

    // line 39
    public function block_header($context, array $blocks = array())
    {
        // line 40
        echo "        <section id=\"header\" class=\"section\">
            <section class=\"container ";
        // line 41
        echo ($context["grid_size"] ?? null);
        echo "\">
                <nav class=\"navbar\">
                    <section class=\"navbar-section logo\">
                        ";
        // line 44
        $this->loadTemplate("partials/logo.html.twig", "partials/base.html.twig", 44)->display($context);
        // line 45
        echo "                    </section>
                    <section class=\"navbar-section\">

                        <nav class=\"dropmenu animated\">
                            ";
        // line 49
        $this->displayBlock('header_navigation', $context, $blocks);
        // line 52
        echo "                        </nav>

                        ";
        // line 54
        if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", array()), "login", array()), "enabled", array()) && $this->getAttribute($this->getAttribute(($context["grav"] ?? null), "user", array()), "username", array()))) {
            // line 55
            echo "                            <span class=\"login-status-wrapper\"><i class=\"fa fa-user\"></i> ";
            $this->loadTemplate("partials/login-status.html.twig", "partials/base.html.twig", 55)->display($context);
            echo "</span>
                        ";
        }
        // line 57
        echo "
                    </section>
                </nav>
            </section>
        </section>
        <div class=\"mobile-menu\">
            <div class=\"button_container\" id=\"toggle\">
                <span class=\"top\"></span>
                <span class=\"middle\"></span>
                <span class=\"bottom\"></span>
            </div>
        </div>
    ";
    }

    // line 49
    public function block_header_navigation($context, array $blocks = array())
    {
        // line 50
        echo "                        ";
        $this->loadTemplate("partials/navigation.html.twig", "partials/base.html.twig", 50)->display($context);
        // line 51
        echo "                            ";
    }

    // line 71
    public function block_hero($context, array $blocks = array())
    {
    }

    // line 74
    public function block_body($context, array $blocks = array())
    {
        // line 75
        echo "            <section id=\"body-wrapper\" class=\"section\">
                <section class=\"container ";
        // line 76
        echo ($context["grid_size"] ?? null);
        echo "\">
                    ";
        // line 77
        $this->displayBlock('messages', $context, $blocks);
        // line 80
        echo "                    ";
        $this->displayBlock('content', $context, $blocks);
        // line 81
        echo "                </section>
            </section>
        ";
    }

    // line 77
    public function block_messages($context, array $blocks = array())
    {
        // line 78
        echo "                        ";
        try {
            $this->loadTemplate("partials/messages.html.twig", "partials/base.html.twig", 78)->display($context);
        } catch (Twig_Error_Loader $e) {
            // ignore missing template
        }

        // line 79
        echo "                    ";
    }

    // line 80
    public function block_content($context, array $blocks = array())
    {
    }

    // line 88
    public function block_footer($context, array $blocks = array())
    {
        // line 89
        echo "    <section id=\"footer\" class=\"section bg-gray\">
        <section class=\"container ";
        // line 90
        echo ($context["grid_size"] ?? null);
        echo "\">
            <p><a href=\"http://getgrav.org\">Grav</a> was <i class=\"fa fa-code\"></i> with <i class=\"fa fa-heart-o pulse \"></i> by <a href=\"https://trilby.media\">Trilby Media</a>.</p>
        </section>
    </section>
";
    }

    // line 108
    public function block_bottom($context, array $blocks = array())
    {
        // line 109
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
        return array (  329 => 109,  326 => 108,  317 => 90,  314 => 89,  311 => 88,  306 => 80,  302 => 79,  294 => 78,  291 => 77,  285 => 81,  282 => 80,  280 => 77,  276 => 76,  273 => 75,  270 => 74,  265 => 71,  261 => 51,  258 => 50,  255 => 49,  239 => 57,  233 => 55,  231 => 54,  227 => 52,  225 => 49,  219 => 45,  217 => 44,  211 => 41,  208 => 40,  205 => 39,  199 => 37,  195 => 32,  192 => 31,  189 => 30,  186 => 29,  183 => 28,  179 => 25,  176 => 24,  173 => 23,  170 => 22,  165 => 21,  160 => 20,  157 => 19,  154 => 18,  146 => 33,  144 => 28,  138 => 26,  136 => 18,  131 => 16,  127 => 15,  124 => 14,  122 => 13,  111 => 9,  108 => 8,  105 => 7,  99 => 111,  97 => 108,  91 => 104,  89 => 103,  85 => 101,  83 => 100,  76 => 95,  74 => 88,  68 => 84,  66 => 74,  62 => 72,  60 => 71,  57 => 70,  55 => 39,  50 => 37,  47 => 36,  45 => 7,  40 => 5,  37 => 4,  35 => 3,  33 => 2,  31 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set body_classes = body_class(['header-fixed', 'header-animated', 'header-dark', 'header-transparent', 'sticky-footer']) %}
{% set grid_size = theme_var('grid-size') %}
{% set compress = theme_var('production_mode') ? '.min.css' : '.css' %}
<!DOCTYPE html>
<html lang=\"{{ grav.language.getActive ?: grav.config.site.default_lang }}\">
<head>
{% block head %}
    <meta charset=\"utf-8\" />
    <title>{% if header.title %}{{ header.title|e('html') }} | {% endif %}{{ site.title|e('html') }}</title>

    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    {% include 'partials/metadata.html.twig' %}

    <link rel=\"icon\" type=\"image/png\" href=\"{{ url('theme://images/favicon.png') }}\" />
    <link rel=\"canonical\" href=\"{{ page.url(true, true) }}\" />

    {% block stylesheets %}
        {% do assets.addCss('theme://css-compiled/spectre'~compress) %}
        {% if theme_var('spectre.exp') %}{% do assets.addCss('theme://css-compiled/spectre-exp'~compress)  %}{% endif %}
        {% if theme_var('spectre.icons') %}{%  do assets.addCss('theme://css-compiled/spectre-icons'~compress) %}{% endif %}
        {% do assets.addCss('theme://css-compiled/theme'~compress) %}
        {% do assets.addCss('theme://css/custom.css') %}
        {% do assets.addCss('theme://css/line-awesome.min.css') %}
    {% endblock %}
    {{ assets.css() }}

    {% block javascripts %}
        {% do assets.addJs('jquery', 101) %}
        {% do assets.addJs('theme://js/jquery.treemenu.js', {group:'bottom'}) %}
        {% do assets.addJs('theme://js/site.js', {group:'bottom'}) %}
    {% endblock %}
    {{ assets.js() }}

{% endblock head %}
</head>
<body id=\"top\" class=\"{% block body_classes %}{{ body_classes }}{% endblock %}\">
    <div id=\"page-wrapper\">
    {% block header %}
        <section id=\"header\" class=\"section\">
            <section class=\"container {{ grid_size }}\">
                <nav class=\"navbar\">
                    <section class=\"navbar-section logo\">
                        {% include 'partials/logo.html.twig' %}
                    </section>
                    <section class=\"navbar-section\">

                        <nav class=\"dropmenu animated\">
                            {% block header_navigation %}
                        {% include 'partials/navigation.html.twig' %}
                            {% endblock %}
                        </nav>

                        {% if config.plugins.login.enabled and grav.user.username %}
                            <span class=\"login-status-wrapper\"><i class=\"fa fa-user\"></i> {% include 'partials/login-status.html.twig' %}</span>
                        {% endif %}

                    </section>
                </nav>
            </section>
        </section>
        <div class=\"mobile-menu\">
            <div class=\"button_container\" id=\"toggle\">
                <span class=\"top\"></span>
                <span class=\"middle\"></span>
                <span class=\"bottom\"></span>
            </div>
        </div>
    {% endblock %}

    {% block hero %}{% endblock %}

        <section id=\"start\">
        {% block body %}
            <section id=\"body-wrapper\" class=\"section\">
                <section class=\"container {{ grid_size }}\">
                    {% block messages %}
                        {% include 'partials/messages.html.twig' ignore missing %}
                    {% endblock %}
                    {% block content %}{% endblock %}
                </section>
            </section>
        {% endblock %}
        </section>

    </div>

{% block footer %}
    <section id=\"footer\" class=\"section bg-gray\">
        <section class=\"container {{ grid_size }}\">
            <p><a href=\"http://getgrav.org\">Grav</a> was <i class=\"fa fa-code\"></i> with <i class=\"fa fa-heart-o pulse \"></i> by <a href=\"https://trilby.media\">Trilby Media</a>.</p>
        </section>
    </section>
{% endblock %}

    
    <div class=\"mobile-container\">
        <div class=\"overlay\" id=\"overlay\">
            <div class=\"mobile-logo\">
                {% include 'partials/logo.html.twig' with {mobile: true} %}
            </div>
            <nav class=\"overlay-menu\">
                {% include 'partials/navigation.html.twig' with {tree: true} %}
            </nav>
        </div>
    </div>

{% block bottom %}
    {{ assets.js('bottom') }}
{% endblock %}

</body>
", "partials/base.html.twig", "/Applications/MAMP/htdocs/grav-admin/user/themes/quark/templates/partials/base.html.twig");
    }
}

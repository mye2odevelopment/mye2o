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
        // line 6
        $this->displayBlock('head', $context, $blocks);
        // line 35
        echo "</head>

<body id=\"top\" class=\"";
        // line 37
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "body_classes", array());
        echo "\">

    <div id=\"page\">

        ";
        // line 41
        $this->displayBlock('header', $context, $blocks);
        // line 85
        echo "
        ";
        // line 86
        $this->displayBlock('body', $context, $blocks);
        // line 93
        echo "
        ";
        // line 94
        $this->displayBlock('footer', $context, $blocks);
        // line 166
        echo "
        ";
        // line 170
        echo "    </div>
</body>

</html>";
    }

    // line 6
    public function block_head($context, array $blocks = array())
    {
        // line 7
        echo "    <meta charset=\"utf-8\" />
    <title>";
        // line 8
        if ($this->getAttribute(($context["header"] ?? null), "title", array())) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["header"] ?? null), "title", array()), "html");
            echo " | ";
        }
        echo twig_escape_filter($this->env, $this->getAttribute(($context["site"] ?? null), "title", array()), "html");
        echo "</title>

    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    ";
        // line 12
        $this->loadTemplate("partials/metadata.html.twig", "partials/base.html.twig", 12)->display($context);
        // line 13
        echo "
    <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 14
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://images/logo.png");
        echo "\" />
    <link rel=\"canonical\" href=\"";
        // line 15
        echo $this->getAttribute(($context["page"] ?? null), "url", array(0 => true, 1 => true), "method");
        echo "\" />

    ";
        // line 17
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 24
        echo "    ";
        echo $this->getAttribute(($context["assets"] ?? null), "css", array(), "method");
        echo "

    ";
        // line 26
        $this->displayBlock('javascripts', $context, $blocks);
        // line 32
        echo "    ";
        echo $this->getAttribute(($context["assets"] ?? null), "js", array(), "method");
        echo "

    ";
    }

    // line 17
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 18
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", array(0 => "theme://css/reset.css", 1 => 98), "method");
        // line 19
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", array(0 => "https://use.fontawesome.com/releases/v5.4.1/css/all.css", 1 => 99), "method");
        // line 20
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", array(0 => "https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css", 1 => 96), "method");
        // line 21
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", array(0 => "theme://various.css", 1 => 96), "method");
        // line 22
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", array(0 => "theme://css/home.css", 1 => 95), "method");
        // line 23
        echo "    ";
    }

    // line 26
    public function block_javascripts($context, array $blocks = array())
    {
        // line 27
        echo "    ";
        // line 28
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", array(0 => "theme://js/jquery-2.2.4.min.js", 1 => 100), "method");
        // line 29
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", array(0 => "theme://js/common_scripts.js", 1 => 99), "method");
        // line 30
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", array(0 => "theme://js/main.js", 1 => 98), "method");
        // line 31
        echo "    ";
    }

    // line 41
    public function block_header($context, array $blocks = array())
    {
        // line 42
        echo "        <header class=\"header menu_2\">
            <div id=\"preloader\">
                <div data-loader=\"circle-side\"></div>
            </div><!-- /Preload -->
            <div id=\"logo\">
                <a href=\"";
        // line 47
        echo (((($context["base_url"] ?? null) == "")) ? ("/") : (($context["base_url"] ?? null)));
        echo "\"><img src=\"";
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://images/logo.png");
        echo "\" width=\"190\"
                        height=\"50\" data-retina=\"true\" alt=\"MyE2O\"></a>
            </div>
            <ul id=\"top_menu\">
                <li><a href=\"#\" class=\"btn_1 rounded\">Login</a></li>
            </ul>
            <!-- /top_menu -->
            <a href=\"#menu\" class=\"btn_mobile\">
                <div class=\"hamburger hamburger--spin\" id=\"hamburger\">
                    <div class=\"hamburger-box\">
                        <div class=\"hamburger-inner\"></div>
                    </div>
                </div>
            </a>
            <nav id=\"menu\" class=\"main-menu\">
                <ul>
                    <li><span><a href=\"";
        // line 63
        echo (((($context["base_url"] ?? null) == "")) ? ("/") : (($context["base_url"] ?? null)));
        echo "\">Inicio</a></span></li>
                    <li><span><a href=\"#0\">Buenas prácticas</a></span></li>
                    <li><span><a href=\"#0\">Acerca de MyE2O</a></span></li>
                    <li><span><a href=\"#0\">Quiénes somos</a></span></li>
                    <li><span><a href=\"#0\">Foro</a></span></li>
                </ul>
            </nav>
        </header>
        ";
        // line 84
        echo "        ";
    }

    // line 86
    public function block_body($context, array $blocks = array())
    {
        // line 87
        echo "        <section id=\"body\">
            <div class=\"wrapper padding\">
                ";
        // line 89
        $this->displayBlock('content', $context, $blocks);
        // line 90
        echo "            </div>
        </section>
        ";
    }

    // line 89
    public function block_content($context, array $blocks = array())
    {
    }

    // line 94
    public function block_footer($context, array $blocks = array())
    {
        // line 95
        echo "        <footer>
            <div class=\"container margin_120_95\">
                <div class=\"row\">
                    <div class=\"col-lg-5 col-md-12 p-r-5\">
                        <p><img src=\"";
        // line 99
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://images/logo.png");
        echo "\" width=\"300\" height=\"80\" data-retina=\"true\"
                                alt=\"\"></p>
                        <p>El dominio www.mye2o.org y su contenido es propiedad de la ASOCIACIÓN ESPAÑOLA DE ESCUELAS
                            DE SEGUNDA OPORTUNIDAD inscrita en el Registro Nacional de Asociaciones, con Número de
                            Identificación Fiscal G56045131.
                            Datos de contacto: Calle San Francisco de Sales, núm. 1, 14010 Córdoba.</p>
                        <div class=\"follow_us\">
                            <ul>
                                <li>Siguenos</li>
                                <li><a href=\"https://www.facebook.com/e2oespana/\"><i class=\"fab fa-facebook-f\"></i></a></li>
                                <li><a href=\"https://twitter.com/E2OEspana\"><i class=\"fab fa-twitter\"></i></a></li>
                                <li><a href=\"https://www.youtube.com/channel/UCh2UcwsijUa7EA7TztRy3dA\"><i class=\"fab fa-youtube\"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class=\"col-lg-3 col-md-6 ml-lg-auto\">
                        <h5>Menú</h5>
                        <ul class=\"links\">
                            <li><a href=\"#\">Inicio</a></li>
                            <li><a href=\"#0\">Buenas practicas</a></li>
                            <li><a href=\"#0\">Acerca de E2OenRed</a></li>
                            <li><a href=\"#0\">Quienes somos</a></li>
                            <li><a href=\"#0\">Foro</a></li>
                        </ul>
                    </div>
                    <div class=\"col-lg-3 col-md-6\">
                        <h5>Contáctanos</h5>
                        <ul class=\"contacts\">
                            <li><a href=\"tel://#\"><i class=\"ti-mobile\"></i> + 34 93 8093 3400</a></li>
                            <li><a href=\"mailto:info@e2oenespana.com\"><i class=\"ti-email\"></i> info@e2oespana.org</a></li>
                        </ul>
                        <div id=\"newsletter\">
                            <h6>Newsletter</h6>
                            <div id=\"message-newsletter\"></div>
                            <form method=\"post\" action=\"#\" name=\"newsletter_form\" id=\"newsletter_form\">
                                <div class=\"form-group\">
                                    <input type=\"email\" name=\"email_newsletter\" id=\"email_newsletter\" class=\"form-control\"
                                        placeholder=\"Tu correo\">
                                    <input type=\"submit\" value=\"Enviar\" id=\"submit-newsletter\">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!--/row-->
                <hr>
                <div class=\"row\">
                    <div class=\"col-md-8\">
                        <ul id=\"additional_links\">
                            <li><a href=\"#0\">Política de Privacidad</a></li>
                            <li><a href=\"#0\">Política de Cookies</a></li>
                        </ul>
                    </div>
                    <div class=\"col-md-4\">
                        <div id=\"copy\">© 2018 E2OESPAÑA</div>
                    </div>
                </div>
            </div>
        </footer>
        ";
        // line 165
        echo "        ";
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
        return array (  298 => 165,  236 => 99,  230 => 95,  227 => 94,  222 => 89,  216 => 90,  214 => 89,  210 => 87,  207 => 86,  203 => 84,  192 => 63,  171 => 47,  164 => 42,  161 => 41,  157 => 31,  154 => 30,  151 => 29,  148 => 28,  146 => 27,  143 => 26,  139 => 23,  136 => 22,  133 => 21,  130 => 20,  127 => 19,  124 => 18,  121 => 17,  113 => 32,  111 => 26,  105 => 24,  103 => 17,  98 => 15,  94 => 14,  91 => 13,  89 => 12,  78 => 8,  75 => 7,  72 => 6,  65 => 170,  62 => 166,  60 => 94,  57 => 93,  55 => 86,  52 => 85,  50 => 41,  43 => 37,  39 => 35,  37 => 6,  31 => 3,  28 => 2,  26 => 1,);
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
    {% do assets.addCss('https://use.fontawesome.com/releases/v5.4.1/css/all.css', 99) %}
    {% do assets.addCss('https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css', 96) %}
    {% do assets.addCss('theme://various.css', 96) %}
    {% do assets.addCss('theme://css/home.css', 95) %}
    {% endblock %}
    {{ assets.css() }}

    {% block javascripts %}
    {# {% do assets.addJs('https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js', 100)%} #}
    {% do assets.addJs('theme://js/jquery-2.2.4.min.js', 100) %}
    {% do assets.addJs('theme://js/common_scripts.js', 99) %}
    {% do assets.addJs('theme://js/main.js', 98) %}
    {% endblock %}
    {{ assets.js() }}

    {% endblock head %}
</head>

<body id=\"top\" class=\"{{ page.header.body_classes }}\">

    <div id=\"page\">

        {% block header %}
        <header class=\"header menu_2\">
            <div id=\"preloader\">
                <div data-loader=\"circle-side\"></div>
            </div><!-- /Preload -->
            <div id=\"logo\">
                <a href=\"{{ base_url == '' ? '/' : base_url }}\"><img src=\"{{ url('theme://images/logo.png') }}\" width=\"190\"
                        height=\"50\" data-retina=\"true\" alt=\"MyE2O\"></a>
            </div>
            <ul id=\"top_menu\">
                <li><a href=\"#\" class=\"btn_1 rounded\">Login</a></li>
            </ul>
            <!-- /top_menu -->
            <a href=\"#menu\" class=\"btn_mobile\">
                <div class=\"hamburger hamburger--spin\" id=\"hamburger\">
                    <div class=\"hamburger-box\">
                        <div class=\"hamburger-inner\"></div>
                    </div>
                </div>
            </a>
            <nav id=\"menu\" class=\"main-menu\">
                <ul>
                    <li><span><a href=\"{{ base_url == '' ? '/' : base_url }}\">Inicio</a></span></li>
                    <li><span><a href=\"#0\">Buenas prácticas</a></span></li>
                    <li><span><a href=\"#0\">Acerca de MyE2O</a></span></li>
                    <li><span><a href=\"#0\">Quiénes somos</a></span></li>
                    <li><span><a href=\"#0\">Foro</a></span></li>
                </ul>
            </nav>
        </header>
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
            <div class=\"wrapper padding\">
                {% block content %}{% endblock %}
            </div>
        </section>
        {% endblock %}

        {% block footer %}
        <footer>
            <div class=\"container margin_120_95\">
                <div class=\"row\">
                    <div class=\"col-lg-5 col-md-12 p-r-5\">
                        <p><img src=\"{{ url('theme://images/logo.png')}}\" width=\"300\" height=\"80\" data-retina=\"true\"
                                alt=\"\"></p>
                        <p>El dominio www.mye2o.org y su contenido es propiedad de la ASOCIACIÓN ESPAÑOLA DE ESCUELAS
                            DE SEGUNDA OPORTUNIDAD inscrita en el Registro Nacional de Asociaciones, con Número de
                            Identificación Fiscal G56045131.
                            Datos de contacto: Calle San Francisco de Sales, núm. 1, 14010 Córdoba.</p>
                        <div class=\"follow_us\">
                            <ul>
                                <li>Siguenos</li>
                                <li><a href=\"https://www.facebook.com/e2oespana/\"><i class=\"fab fa-facebook-f\"></i></a></li>
                                <li><a href=\"https://twitter.com/E2OEspana\"><i class=\"fab fa-twitter\"></i></a></li>
                                <li><a href=\"https://www.youtube.com/channel/UCh2UcwsijUa7EA7TztRy3dA\"><i class=\"fab fa-youtube\"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class=\"col-lg-3 col-md-6 ml-lg-auto\">
                        <h5>Menú</h5>
                        <ul class=\"links\">
                            <li><a href=\"#\">Inicio</a></li>
                            <li><a href=\"#0\">Buenas practicas</a></li>
                            <li><a href=\"#0\">Acerca de E2OenRed</a></li>
                            <li><a href=\"#0\">Quienes somos</a></li>
                            <li><a href=\"#0\">Foro</a></li>
                        </ul>
                    </div>
                    <div class=\"col-lg-3 col-md-6\">
                        <h5>Contáctanos</h5>
                        <ul class=\"contacts\">
                            <li><a href=\"tel://#\"><i class=\"ti-mobile\"></i> + 34 93 8093 3400</a></li>
                            <li><a href=\"mailto:info@e2oenespana.com\"><i class=\"ti-email\"></i> info@e2oespana.org</a></li>
                        </ul>
                        <div id=\"newsletter\">
                            <h6>Newsletter</h6>
                            <div id=\"message-newsletter\"></div>
                            <form method=\"post\" action=\"#\" name=\"newsletter_form\" id=\"newsletter_form\">
                                <div class=\"form-group\">
                                    <input type=\"email\" name=\"email_newsletter\" id=\"email_newsletter\" class=\"form-control\"
                                        placeholder=\"Tu correo\">
                                    <input type=\"submit\" value=\"Enviar\" id=\"submit-newsletter\">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!--/row-->
                <hr>
                <div class=\"row\">
                    <div class=\"col-md-8\">
                        <ul id=\"additional_links\">
                            <li><a href=\"#0\">Política de Privacidad</a></li>
                            <li><a href=\"#0\">Política de Cookies</a></li>
                        </ul>
                    </div>
                    <div class=\"col-md-4\">
                        <div id=\"copy\">© 2018 E2OESPAÑA</div>
                    </div>
                </div>
            </div>
        </footer>
        {# <div class=\"footer text-center\">
            <div class=\"wrapper padding\">
                <p><a href=\"http://getgrav.org\">Grav</a> was <i class=\"fa fa-code\"></i> with <i class=\"fa fa-heart\"></i>
                    by
                    <a href=\"http://www.rockettheme.com\">RocketTheme</a>.</p>
            </div>
        </div> #}
        {% endblock %}

        {# {% block bottom %}
        {{ assets.js('bottom') }}
        {% endblock %} #}
    </div>
</body>

</html>", "partials/base.html.twig", "/home/factoria/carpetagit/mye2o/grav-admin/user/themes/mye2o-theme/templates/partials/base.html.twig");
    }
}

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

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "    <main>
\t\t<section class=\"hero_single version_1\">
\t\t\t<div class=\"wrapper\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<h3>Las buenas prácticas educativas</h3>
\t\t\t\t\t<p>de las escuelas de segunda oportunidad (E2O)</p>
\t\t\t\t\t<form>
\t\t\t\t\t\t<div id=\"custom-search-input\">
\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t<input type=\"text\" class=\" search-query\" placeholder=\"Busca aqui las buenas prácticas de nuestra plataforma\">
\t\t\t\t\t\t\t\t<input type=\"submit\" class=\"btn_search\" value=\"Buscar\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</form>
\t\t\t\t</div>
\t\t\t</div>
\t\t</section>
\t\t<!-- /hero_single -->

\t\t<div class=\"features clearfix\">
\t\t\t<div class=\"container\">
\t\t\t\t<ul>
\t\t\t\t\t<li><i class=\"fab fa-readme\"></i>
\t\t\t\t\t\t<h4>54</h4><span>Buenas prácticas</span>
\t\t\t\t\t</li>
\t\t\t\t\t<li><i class=\"fas fa-cloud-download-alt\"></i>
\t\t\t\t\t\t<h4>+100</h4><span>Documentos descargables</span>
\t\t\t\t\t</li>
\t\t\t\t\t<li><i class=\"fas fa-check-square\"></i>
\t\t\t\t\t\t<h4>54</h4><span>Centros acréditados</span>
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t</div>
\t\t</div>
\t\t<!-- /features -->

\t\t<div class=\"container-fluid margin_30_95\">
\t\t\t<div class=\"main_title_2\">
\t\t\t\t<span><em></em></span>
\t\t\t\t<h2>Prácticas recientes</h2>
\t\t\t\t<p>Aqui puedes acceder a las buenas practicas más recientes subidas por <b>nuestra comunidad</b></p>
\t\t\t</div>
\t\t\t<div id=\"reccomended\" class=\"owl-carousel owl-theme\">
\t\t\t\t<div class=\"item\">
\t\t\t\t\t<div class=\"box_grid\">
\t\t\t\t\t\t<figure>
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t<div class=\"preview\"><span>Leer mas</span></div><img src=\"http://via.placeholder.com/800x533/ccc/fff/course__list_1.jpg\" class=\"img-fluid\" alt=\"\"></a>
\t\t\t\t\t\t</figure>
\t\t\t\t\t\t<div class=\"wrapper\">
\t\t\t\t\t\t\t<small>Publicado por: Sonny Moore</small>
\t\t\t\t\t\t\t<h3>Titulo de la buena practica</h3>
\t\t\t\t\t\t\t<p>Ecce dabo Pinkman Isai OK? Sicut locutus est tibi, et datus est, et hic sine Semper consequat volumus ... et ille in urbe ista licet? Et infernus...</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t<li><i class=\"far fa-eye\"></i> </i>  100</li>
\t\t\t\t\t\t\t<li><i class=\"far fa-comments\"></i> </i> 5</li>
\t\t\t\t\t\t\t<li><a href=\"#\">Leer más</a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<!-- /item -->
\t\t\t\t<div class=\"item\">
\t\t\t\t\t<div class=\"box_grid\">
\t\t\t\t\t\t<figure>
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t<div class=\"preview\"><span>Leer mas</span></div><img src=\"http://via.placeholder.com/800x533/ccc/fff/course__list_1.jpg\" class=\"img-fluid\" alt=\"\"></a>
\t\t\t\t\t\t</figure>
\t\t\t\t\t\t<div class=\"wrapper\">
\t\t\t\t\t\t\t<small>Publicado por: Sonny Moore</small>
\t\t\t\t\t\t\t<h3>Titulo de la buena practica</h3>
\t\t\t\t\t\t\t<p>Ecce dabo Pinkman Isai OK? Sicut locutus est tibi, et datus est, et hic sine Semper consequat volumus ... et ille in urbe ista licet? Et infernus...</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t<li><i class=\"far fa-eye\"></i> </i>  100</li>
\t\t\t\t\t\t\t<li><i class=\"far fa-comments\"></i> </i> 5</li>
\t\t\t\t\t\t\t<li><a href=\"#\">Leer más</a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<!-- /item -->
\t\t\t\t<div class=\"item\">
\t\t\t\t\t<div class=\"box_grid\">
\t\t\t\t\t\t<figure>
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t<div class=\"preview\"><span>Leer mas</span></div><img src=\"http://via.placeholder.com/800x533/ccc/fff/course__list_1.jpg\" class=\"img-fluid\" alt=\"\"></a>
\t\t\t\t\t\t</figure>
\t\t\t\t\t\t<div class=\"wrapper\">
\t\t\t\t\t\t\t<small>Publicado por: Sonny Moore</small>
\t\t\t\t\t\t\t<h3>Titulo de la buena practica</h3>
\t\t\t\t\t\t\t<p>Ecce dabo Pinkman Isai OK? Sicut locutus est tibi, et datus est, et hic sine Semper consequat volumus ... et ille in urbe ista licet? Et infernus...</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t<li><i class=\"far fa-eye\"></i> </i>  100</li>
\t\t\t\t\t\t\t<li><i class=\"far fa-comments\"></i> </i> 5</li>
\t\t\t\t\t\t\t<li><a href=\"#\">Leer más</a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<!-- /item -->
\t\t\t\t<div class=\"item\">
\t\t\t\t\t<div class=\"box_grid\">
\t\t\t\t\t\t<figure>
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t<div class=\"preview\"><span>Leer mas</span></div><img src=\"http://via.placeholder.com/800x533/ccc/fff/course__list_1.jpg\" class=\"img-fluid\" alt=\"\"></a>
\t\t\t\t\t\t</figure>
\t\t\t\t\t\t<div class=\"wrapper\">
\t\t\t\t\t\t\t<small>Publicado por: Sonny Moore</small>
\t\t\t\t\t\t\t<h3>Titulo de la buena practica</h3>
\t\t\t\t\t\t\t<p>Ecce dabo Pinkman Isai OK? Sicut locutus est tibi, et datus est, et hic sine Semper consequat volumus ... et ille in urbe ista licet? Et infernus...</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t<li><i class=\"far fa-eye\"></i> </i>  100</li>
\t\t\t\t\t\t\t<li><i class=\"far fa-comments\"></i> </i> 5</li>
\t\t\t\t\t\t\t<li><a href=\"#\">Leer más</a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<!-- /item -->
\t\t\t\t<div class=\"item\">
\t\t\t\t\t<div class=\"box_grid\">
\t\t\t\t\t\t<figure>
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t<div class=\"preview\"><span>Leer mas</span></div><img src=\"http://via.placeholder.com/800x533/ccc/fff/course__list_1.jpg\" class=\"img-fluid\" alt=\"\"></a>
\t\t\t\t\t\t</figure>
\t\t\t\t\t\t<div class=\"wrapper\">
\t\t\t\t\t\t\t<small>Publicado por: Sonny Moore</small>
\t\t\t\t\t\t\t<h3>Titulo de la buena practica</h3>
\t\t\t\t\t\t\t<p>Ecce dabo Pinkman Isai OK? Sicut locutus est tibi, et datus est, et hic sine Semper consequat volumus ... et ille in urbe ista licet? Et infernus...</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t<li><i class=\"far fa-eye\"></i> </i>  100</li>
\t\t\t\t\t\t\t<li><i class=\"far fa-comments\"></i> </i> 5</li>
\t\t\t\t\t\t\t<li><a href=\"#\">Leer más</a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<!-- /item -->
\t\t\t\t<div class=\"item\">
\t\t\t\t\t<div class=\"box_grid\">
\t\t\t\t\t\t<figure>
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t<div class=\"preview\"><span>Leer mas</span></div><img src=\"http://via.placeholder.com/800x533/ccc/fff/course__list_1.jpg\" class=\"img-fluid\" alt=\"\"></a>
\t\t\t\t\t\t</figure>
\t\t\t\t\t\t<div class=\"wrapper\">
\t\t\t\t\t\t\t<small>Publicado por: Sonny Moore</small>
\t\t\t\t\t\t\t<h3>Titulo de la buena practica</h3>
\t\t\t\t\t\t\t<p>Ecce dabo Pinkman Isai OK? Sicut locutus est tibi, et datus est, et hic sine Semper consequat volumus ... et ille in urbe ista licet? Et infernus...</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t<li><i class=\"far fa-eye\"></i> </i>  100</li>
\t\t\t\t\t\t\t<li><i class=\"far fa-comments\"></i> </i> 5</li>
\t\t\t\t\t\t\t<li><a href=\"#\">Leer más</a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<!-- /item -->
\t\t\t</div>
\t\t\t<!-- /carousel -->
\t\t\t<!-- /container -->
\t\t\t<hr>
\t\t</div>


\t\t<div class=\"container-fluid margin_30_95\">
\t\t\t<div class=\"main_title_2\">
\t\t\t\t<span><em></em></span>
\t\t\t\t<h2>Prácticas mas vistas</h2>
\t\t\t\t<p>Aqui puedes acceder a las buenas practicas más vistas subidas por <b>nuestra comunidad</b></p>
\t\t\t</div>
\t\t\t<div id=\"reccomended\" class=\"owl-carousel owl-theme\">
\t\t\t\t<div class=\"item\">
\t\t\t\t\t<div class=\"box_grid\">
\t\t\t\t\t\t<figure>
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t<div class=\"preview\"><span>Leer mas</span></div><img src=\"http://via.placeholder.com/800x533/ccc/fff/course__list_1.jpg\" class=\"img-fluid\" alt=\"\"></a>
\t\t\t\t\t\t</figure>
\t\t\t\t\t\t<div class=\"wrapper\">
\t\t\t\t\t\t\t<small>Publicado por: Sonny Moore</small>
\t\t\t\t\t\t\t<h3>Titulo de la buena practica</h3>
\t\t\t\t\t\t\t<p>Ecce dabo Pinkman Isai OK? Sicut locutus est tibi, et datus est, et hic sine Semper consequat volumus ... et ille in urbe ista licet? Et infernus...</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t<li><i class=\"icon-eye\"></i>100</li>
\t\t\t\t\t\t\t<li><i class=\"icon-chat-empty\"></i> 5</li>
\t\t\t\t\t\t\t<li><a href=\"#\">Leer más</a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<!-- /item -->
\t\t\t\t<div class=\"item\">
\t\t\t\t\t<div class=\"box_grid\">
\t\t\t\t\t\t<figure>
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t<div class=\"preview\"><span>Leer mas</span></div><img src=\"http://via.placeholder.com/800x533/ccc/fff/course__list_1.jpg\" class=\"img-fluid\" alt=\"\"></a>
\t\t\t\t\t\t</figure>
\t\t\t\t\t\t<div class=\"wrapper\">
\t\t\t\t\t\t\t<small>Publicado por: Sonny Moore</small>
\t\t\t\t\t\t\t<h3>Titulo de la buena practica</h3>
\t\t\t\t\t\t\t<p>Ecce dabo Pinkman Isai OK? Sicut locutus est tibi, et datus est, et hic sine Semper consequat volumus ... et ille in urbe ista licet? Et infernus...</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t<li><i class=\"icon-eye\"></i>100</li>
\t\t\t\t\t\t\t<li><i class=\"icon-chat-empty\"></i> 5</li>
\t\t\t\t\t\t\t<li><a href=\"#\">Leer más</a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<!-- /item -->
\t\t\t\t<div class=\"item\">
\t\t\t\t\t<div class=\"box_grid\">
\t\t\t\t\t\t<figure>
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t<div class=\"preview\"><span>Leer mas</span></div><img src=\"http://via.placeholder.com/800x533/ccc/fff/course__list_1.jpg\" class=\"img-fluid\" alt=\"\"></a>
\t\t\t\t\t\t</figure>
\t\t\t\t\t\t<div class=\"wrapper\">
\t\t\t\t\t\t\t<small>Publicado por: Sonny Moore</small>
\t\t\t\t\t\t\t<h3>Titulo de la buena practica</h3>
\t\t\t\t\t\t\t<p>Ecce dabo Pinkman Isai OK? Sicut locutus est tibi, et datus est, et hic sine Semper consequat volumus ... et ille in urbe ista licet? Et infernus...</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t<li><i class=\"icon-eye\"></i>100</li>
\t\t\t\t\t\t\t<li><i class=\"icon-chat-empty\"></i> 5</li>
\t\t\t\t\t\t\t<li><a href=\"#\">Leer más</a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<!-- /item -->
\t\t\t\t<div class=\"item\">
\t\t\t\t\t<div class=\"box_grid\">
\t\t\t\t\t\t<figure>
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t<div class=\"preview\"><span>Leer mas</span></div><img src=\"http://via.placeholder.com/800x533/ccc/fff/course__list_1.jpg\" class=\"img-fluid\" alt=\"\"></a>
\t\t\t\t\t\t</figure>
\t\t\t\t\t\t<div class=\"wrapper\">
\t\t\t\t\t\t\t<small>Publicado por: Sonny Moore</small>
\t\t\t\t\t\t\t<h3>Titulo de la buena practica</h3>
\t\t\t\t\t\t\t<p>Ecce dabo Pinkman Isai OK? Sicut locutus est tibi, et datus est, et hic sine Semper consequat volumus ... et ille in urbe ista licet? Et infernus...</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t<li><i class=\"icon-eye\"></i>100</li>
\t\t\t\t\t\t\t<li><i class=\"icon-chat-empty\"></i> 5</li>
\t\t\t\t\t\t\t<li><a href=\"#\">Leer más</a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<!-- /item -->
\t\t\t\t<div class=\"item\">
\t\t\t\t\t<div class=\"box_grid\">
\t\t\t\t\t\t<figure>
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t<div class=\"preview\"><span>Leer mas</span></div><img src=\"http://via.placeholder.com/800x533/ccc/fff/course__list_1.jpg\" class=\"img-fluid\" alt=\"\"></a>
\t\t\t\t\t\t</figure>
\t\t\t\t\t\t<div class=\"wrapper\">
\t\t\t\t\t\t\t<small>Publicado por: Sonny Moore</small>
\t\t\t\t\t\t\t<h3>Titulo de la buena practica</h3>
\t\t\t\t\t\t\t<p>Ecce dabo Pinkman Isai OK? Sicut locutus est tibi, et datus est, et hic sine Semper consequat volumus ... et ille in urbe ista licet? Et infernus...</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t<li><i class=\"icon-eye\"></i>100</li>
\t\t\t\t\t\t\t<li><i class=\"icon-chat-empty\"></i> 5</li>
\t\t\t\t\t\t\t<li><a href=\"#\">Leer más</a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<!-- /item -->
\t\t\t\t<div class=\"item\">
\t\t\t\t\t<div class=\"box_grid\">
\t\t\t\t\t\t<figure>
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t<div class=\"preview\"><span>Leer mas</span></div><img src=\"http://via.placeholder.com/800x533/ccc/fff/course__list_1.jpg\" class=\"img-fluid\" alt=\"\"></a>
\t\t\t\t\t\t</figure>
\t\t\t\t\t\t<div class=\"wrapper\">
\t\t\t\t\t\t\t<small>Publicado por: Sonny Moore</small>
\t\t\t\t\t\t\t<h3>Titulo de la buena practica</h3>
\t\t\t\t\t\t\t<p>Ecce dabo Pinkman Isai OK? Sicut locutus est tibi, et datus est, et hic sine Semper consequat volumus ... et ille in urbe ista licet? Et infernus...</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t<li><i class=\"icon-eye\"></i>100</li>
\t\t\t\t\t\t\t<li><i class=\"icon-chat-empty\"></i> 5</li>
\t\t\t\t\t\t\t<li><a href=\"#\">Leer más</a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<!-- /item -->
\t\t\t</div>
\t\t\t<!-- /row -->
\t\t</div>
\t\t<!-- /container -->

\t\t<div class=\"call_section\">
\t\t\t<div class=\"container clearfix\">
\t\t\t\t<div class=\"col-lg-5 col-md-6 float-right wow\" data-wow-offset=\"250\">
\t\t\t\t\t<div class=\"block-reveal\">
\t\t\t\t\t\t<div class=\"block-vertical\"></div>
\t\t\t\t\t\t<div class=\"box_1\">
\t\t\t\t\t\t\t<h3>Únete a nuestra red</h3>
\t\t\t\t\t\t\t<p>Ius cu tamquam persequeris, eu veniam apeirian platonem qui, id aliquip voluptatibus pri. Ei mea primis ornatus disputationi. Menandri erroribus cu per, duo solet congue ut. </p>
\t\t\t\t\t\t\t<a href=\"#0\" class=\"btn_1 rounded\">Leer mas</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<!--/call_section-->
\t</main>
\t<!-- /main -->
";
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
        return array (  31 => 4,  28 => 3,  11 => 1,);
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
    <main>
\t\t<section class=\"hero_single version_1\">
\t\t\t<div class=\"wrapper\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<h3>Las buenas prácticas educativas</h3>
\t\t\t\t\t<p>de las escuelas de segunda oportunidad (E2O)</p>
\t\t\t\t\t<form>
\t\t\t\t\t\t<div id=\"custom-search-input\">
\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t<input type=\"text\" class=\" search-query\" placeholder=\"Busca aqui las buenas prácticas de nuestra plataforma\">
\t\t\t\t\t\t\t\t<input type=\"submit\" class=\"btn_search\" value=\"Buscar\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</form>
\t\t\t\t</div>
\t\t\t</div>
\t\t</section>
\t\t<!-- /hero_single -->

\t\t<div class=\"features clearfix\">
\t\t\t<div class=\"container\">
\t\t\t\t<ul>
\t\t\t\t\t<li><i class=\"fab fa-readme\"></i>
\t\t\t\t\t\t<h4>54</h4><span>Buenas prácticas</span>
\t\t\t\t\t</li>
\t\t\t\t\t<li><i class=\"fas fa-cloud-download-alt\"></i>
\t\t\t\t\t\t<h4>+100</h4><span>Documentos descargables</span>
\t\t\t\t\t</li>
\t\t\t\t\t<li><i class=\"fas fa-check-square\"></i>
\t\t\t\t\t\t<h4>54</h4><span>Centros acréditados</span>
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t</div>
\t\t</div>
\t\t<!-- /features -->

\t\t<div class=\"container-fluid margin_30_95\">
\t\t\t<div class=\"main_title_2\">
\t\t\t\t<span><em></em></span>
\t\t\t\t<h2>Prácticas recientes</h2>
\t\t\t\t<p>Aqui puedes acceder a las buenas practicas más recientes subidas por <b>nuestra comunidad</b></p>
\t\t\t</div>
\t\t\t<div id=\"reccomended\" class=\"owl-carousel owl-theme\">
\t\t\t\t<div class=\"item\">
\t\t\t\t\t<div class=\"box_grid\">
\t\t\t\t\t\t<figure>
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t<div class=\"preview\"><span>Leer mas</span></div><img src=\"http://via.placeholder.com/800x533/ccc/fff/course__list_1.jpg\" class=\"img-fluid\" alt=\"\"></a>
\t\t\t\t\t\t</figure>
\t\t\t\t\t\t<div class=\"wrapper\">
\t\t\t\t\t\t\t<small>Publicado por: Sonny Moore</small>
\t\t\t\t\t\t\t<h3>Titulo de la buena practica</h3>
\t\t\t\t\t\t\t<p>Ecce dabo Pinkman Isai OK? Sicut locutus est tibi, et datus est, et hic sine Semper consequat volumus ... et ille in urbe ista licet? Et infernus...</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t<li><i class=\"far fa-eye\"></i> </i>  100</li>
\t\t\t\t\t\t\t<li><i class=\"far fa-comments\"></i> </i> 5</li>
\t\t\t\t\t\t\t<li><a href=\"#\">Leer más</a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<!-- /item -->
\t\t\t\t<div class=\"item\">
\t\t\t\t\t<div class=\"box_grid\">
\t\t\t\t\t\t<figure>
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t<div class=\"preview\"><span>Leer mas</span></div><img src=\"http://via.placeholder.com/800x533/ccc/fff/course__list_1.jpg\" class=\"img-fluid\" alt=\"\"></a>
\t\t\t\t\t\t</figure>
\t\t\t\t\t\t<div class=\"wrapper\">
\t\t\t\t\t\t\t<small>Publicado por: Sonny Moore</small>
\t\t\t\t\t\t\t<h3>Titulo de la buena practica</h3>
\t\t\t\t\t\t\t<p>Ecce dabo Pinkman Isai OK? Sicut locutus est tibi, et datus est, et hic sine Semper consequat volumus ... et ille in urbe ista licet? Et infernus...</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t<li><i class=\"far fa-eye\"></i> </i>  100</li>
\t\t\t\t\t\t\t<li><i class=\"far fa-comments\"></i> </i> 5</li>
\t\t\t\t\t\t\t<li><a href=\"#\">Leer más</a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<!-- /item -->
\t\t\t\t<div class=\"item\">
\t\t\t\t\t<div class=\"box_grid\">
\t\t\t\t\t\t<figure>
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t<div class=\"preview\"><span>Leer mas</span></div><img src=\"http://via.placeholder.com/800x533/ccc/fff/course__list_1.jpg\" class=\"img-fluid\" alt=\"\"></a>
\t\t\t\t\t\t</figure>
\t\t\t\t\t\t<div class=\"wrapper\">
\t\t\t\t\t\t\t<small>Publicado por: Sonny Moore</small>
\t\t\t\t\t\t\t<h3>Titulo de la buena practica</h3>
\t\t\t\t\t\t\t<p>Ecce dabo Pinkman Isai OK? Sicut locutus est tibi, et datus est, et hic sine Semper consequat volumus ... et ille in urbe ista licet? Et infernus...</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t<li><i class=\"far fa-eye\"></i> </i>  100</li>
\t\t\t\t\t\t\t<li><i class=\"far fa-comments\"></i> </i> 5</li>
\t\t\t\t\t\t\t<li><a href=\"#\">Leer más</a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<!-- /item -->
\t\t\t\t<div class=\"item\">
\t\t\t\t\t<div class=\"box_grid\">
\t\t\t\t\t\t<figure>
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t<div class=\"preview\"><span>Leer mas</span></div><img src=\"http://via.placeholder.com/800x533/ccc/fff/course__list_1.jpg\" class=\"img-fluid\" alt=\"\"></a>
\t\t\t\t\t\t</figure>
\t\t\t\t\t\t<div class=\"wrapper\">
\t\t\t\t\t\t\t<small>Publicado por: Sonny Moore</small>
\t\t\t\t\t\t\t<h3>Titulo de la buena practica</h3>
\t\t\t\t\t\t\t<p>Ecce dabo Pinkman Isai OK? Sicut locutus est tibi, et datus est, et hic sine Semper consequat volumus ... et ille in urbe ista licet? Et infernus...</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t<li><i class=\"far fa-eye\"></i> </i>  100</li>
\t\t\t\t\t\t\t<li><i class=\"far fa-comments\"></i> </i> 5</li>
\t\t\t\t\t\t\t<li><a href=\"#\">Leer más</a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<!-- /item -->
\t\t\t\t<div class=\"item\">
\t\t\t\t\t<div class=\"box_grid\">
\t\t\t\t\t\t<figure>
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t<div class=\"preview\"><span>Leer mas</span></div><img src=\"http://via.placeholder.com/800x533/ccc/fff/course__list_1.jpg\" class=\"img-fluid\" alt=\"\"></a>
\t\t\t\t\t\t</figure>
\t\t\t\t\t\t<div class=\"wrapper\">
\t\t\t\t\t\t\t<small>Publicado por: Sonny Moore</small>
\t\t\t\t\t\t\t<h3>Titulo de la buena practica</h3>
\t\t\t\t\t\t\t<p>Ecce dabo Pinkman Isai OK? Sicut locutus est tibi, et datus est, et hic sine Semper consequat volumus ... et ille in urbe ista licet? Et infernus...</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t<li><i class=\"far fa-eye\"></i> </i>  100</li>
\t\t\t\t\t\t\t<li><i class=\"far fa-comments\"></i> </i> 5</li>
\t\t\t\t\t\t\t<li><a href=\"#\">Leer más</a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<!-- /item -->
\t\t\t\t<div class=\"item\">
\t\t\t\t\t<div class=\"box_grid\">
\t\t\t\t\t\t<figure>
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t<div class=\"preview\"><span>Leer mas</span></div><img src=\"http://via.placeholder.com/800x533/ccc/fff/course__list_1.jpg\" class=\"img-fluid\" alt=\"\"></a>
\t\t\t\t\t\t</figure>
\t\t\t\t\t\t<div class=\"wrapper\">
\t\t\t\t\t\t\t<small>Publicado por: Sonny Moore</small>
\t\t\t\t\t\t\t<h3>Titulo de la buena practica</h3>
\t\t\t\t\t\t\t<p>Ecce dabo Pinkman Isai OK? Sicut locutus est tibi, et datus est, et hic sine Semper consequat volumus ... et ille in urbe ista licet? Et infernus...</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t<li><i class=\"far fa-eye\"></i> </i>  100</li>
\t\t\t\t\t\t\t<li><i class=\"far fa-comments\"></i> </i> 5</li>
\t\t\t\t\t\t\t<li><a href=\"#\">Leer más</a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<!-- /item -->
\t\t\t</div>
\t\t\t<!-- /carousel -->
\t\t\t<!-- /container -->
\t\t\t<hr>
\t\t</div>


\t\t<div class=\"container-fluid margin_30_95\">
\t\t\t<div class=\"main_title_2\">
\t\t\t\t<span><em></em></span>
\t\t\t\t<h2>Prácticas mas vistas</h2>
\t\t\t\t<p>Aqui puedes acceder a las buenas practicas más vistas subidas por <b>nuestra comunidad</b></p>
\t\t\t</div>
\t\t\t<div id=\"reccomended\" class=\"owl-carousel owl-theme\">
\t\t\t\t<div class=\"item\">
\t\t\t\t\t<div class=\"box_grid\">
\t\t\t\t\t\t<figure>
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t<div class=\"preview\"><span>Leer mas</span></div><img src=\"http://via.placeholder.com/800x533/ccc/fff/course__list_1.jpg\" class=\"img-fluid\" alt=\"\"></a>
\t\t\t\t\t\t</figure>
\t\t\t\t\t\t<div class=\"wrapper\">
\t\t\t\t\t\t\t<small>Publicado por: Sonny Moore</small>
\t\t\t\t\t\t\t<h3>Titulo de la buena practica</h3>
\t\t\t\t\t\t\t<p>Ecce dabo Pinkman Isai OK? Sicut locutus est tibi, et datus est, et hic sine Semper consequat volumus ... et ille in urbe ista licet? Et infernus...</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t<li><i class=\"icon-eye\"></i>100</li>
\t\t\t\t\t\t\t<li><i class=\"icon-chat-empty\"></i> 5</li>
\t\t\t\t\t\t\t<li><a href=\"#\">Leer más</a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<!-- /item -->
\t\t\t\t<div class=\"item\">
\t\t\t\t\t<div class=\"box_grid\">
\t\t\t\t\t\t<figure>
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t<div class=\"preview\"><span>Leer mas</span></div><img src=\"http://via.placeholder.com/800x533/ccc/fff/course__list_1.jpg\" class=\"img-fluid\" alt=\"\"></a>
\t\t\t\t\t\t</figure>
\t\t\t\t\t\t<div class=\"wrapper\">
\t\t\t\t\t\t\t<small>Publicado por: Sonny Moore</small>
\t\t\t\t\t\t\t<h3>Titulo de la buena practica</h3>
\t\t\t\t\t\t\t<p>Ecce dabo Pinkman Isai OK? Sicut locutus est tibi, et datus est, et hic sine Semper consequat volumus ... et ille in urbe ista licet? Et infernus...</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t<li><i class=\"icon-eye\"></i>100</li>
\t\t\t\t\t\t\t<li><i class=\"icon-chat-empty\"></i> 5</li>
\t\t\t\t\t\t\t<li><a href=\"#\">Leer más</a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<!-- /item -->
\t\t\t\t<div class=\"item\">
\t\t\t\t\t<div class=\"box_grid\">
\t\t\t\t\t\t<figure>
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t<div class=\"preview\"><span>Leer mas</span></div><img src=\"http://via.placeholder.com/800x533/ccc/fff/course__list_1.jpg\" class=\"img-fluid\" alt=\"\"></a>
\t\t\t\t\t\t</figure>
\t\t\t\t\t\t<div class=\"wrapper\">
\t\t\t\t\t\t\t<small>Publicado por: Sonny Moore</small>
\t\t\t\t\t\t\t<h3>Titulo de la buena practica</h3>
\t\t\t\t\t\t\t<p>Ecce dabo Pinkman Isai OK? Sicut locutus est tibi, et datus est, et hic sine Semper consequat volumus ... et ille in urbe ista licet? Et infernus...</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t<li><i class=\"icon-eye\"></i>100</li>
\t\t\t\t\t\t\t<li><i class=\"icon-chat-empty\"></i> 5</li>
\t\t\t\t\t\t\t<li><a href=\"#\">Leer más</a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<!-- /item -->
\t\t\t\t<div class=\"item\">
\t\t\t\t\t<div class=\"box_grid\">
\t\t\t\t\t\t<figure>
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t<div class=\"preview\"><span>Leer mas</span></div><img src=\"http://via.placeholder.com/800x533/ccc/fff/course__list_1.jpg\" class=\"img-fluid\" alt=\"\"></a>
\t\t\t\t\t\t</figure>
\t\t\t\t\t\t<div class=\"wrapper\">
\t\t\t\t\t\t\t<small>Publicado por: Sonny Moore</small>
\t\t\t\t\t\t\t<h3>Titulo de la buena practica</h3>
\t\t\t\t\t\t\t<p>Ecce dabo Pinkman Isai OK? Sicut locutus est tibi, et datus est, et hic sine Semper consequat volumus ... et ille in urbe ista licet? Et infernus...</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t<li><i class=\"icon-eye\"></i>100</li>
\t\t\t\t\t\t\t<li><i class=\"icon-chat-empty\"></i> 5</li>
\t\t\t\t\t\t\t<li><a href=\"#\">Leer más</a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<!-- /item -->
\t\t\t\t<div class=\"item\">
\t\t\t\t\t<div class=\"box_grid\">
\t\t\t\t\t\t<figure>
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t<div class=\"preview\"><span>Leer mas</span></div><img src=\"http://via.placeholder.com/800x533/ccc/fff/course__list_1.jpg\" class=\"img-fluid\" alt=\"\"></a>
\t\t\t\t\t\t</figure>
\t\t\t\t\t\t<div class=\"wrapper\">
\t\t\t\t\t\t\t<small>Publicado por: Sonny Moore</small>
\t\t\t\t\t\t\t<h3>Titulo de la buena practica</h3>
\t\t\t\t\t\t\t<p>Ecce dabo Pinkman Isai OK? Sicut locutus est tibi, et datus est, et hic sine Semper consequat volumus ... et ille in urbe ista licet? Et infernus...</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t<li><i class=\"icon-eye\"></i>100</li>
\t\t\t\t\t\t\t<li><i class=\"icon-chat-empty\"></i> 5</li>
\t\t\t\t\t\t\t<li><a href=\"#\">Leer más</a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<!-- /item -->
\t\t\t\t<div class=\"item\">
\t\t\t\t\t<div class=\"box_grid\">
\t\t\t\t\t\t<figure>
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t<div class=\"preview\"><span>Leer mas</span></div><img src=\"http://via.placeholder.com/800x533/ccc/fff/course__list_1.jpg\" class=\"img-fluid\" alt=\"\"></a>
\t\t\t\t\t\t</figure>
\t\t\t\t\t\t<div class=\"wrapper\">
\t\t\t\t\t\t\t<small>Publicado por: Sonny Moore</small>
\t\t\t\t\t\t\t<h3>Titulo de la buena practica</h3>
\t\t\t\t\t\t\t<p>Ecce dabo Pinkman Isai OK? Sicut locutus est tibi, et datus est, et hic sine Semper consequat volumus ... et ille in urbe ista licet? Et infernus...</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t<li><i class=\"icon-eye\"></i>100</li>
\t\t\t\t\t\t\t<li><i class=\"icon-chat-empty\"></i> 5</li>
\t\t\t\t\t\t\t<li><a href=\"#\">Leer más</a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<!-- /item -->
\t\t\t</div>
\t\t\t<!-- /row -->
\t\t</div>
\t\t<!-- /container -->

\t\t<div class=\"call_section\">
\t\t\t<div class=\"container clearfix\">
\t\t\t\t<div class=\"col-lg-5 col-md-6 float-right wow\" data-wow-offset=\"250\">
\t\t\t\t\t<div class=\"block-reveal\">
\t\t\t\t\t\t<div class=\"block-vertical\"></div>
\t\t\t\t\t\t<div class=\"box_1\">
\t\t\t\t\t\t\t<h3>Únete a nuestra red</h3>
\t\t\t\t\t\t\t<p>Ius cu tamquam persequeris, eu veniam apeirian platonem qui, id aliquip voluptatibus pri. Ei mea primis ornatus disputationi. Menandri erroribus cu per, duo solet congue ut. </p>
\t\t\t\t\t\t\t<a href=\"#0\" class=\"btn_1 rounded\">Leer mas</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<!--/call_section-->
\t</main>
\t<!-- /main -->
{% endblock %}", "home.html.twig", "/home/factoria/carpetagit/mye2o/grav-admin/user/themes/mye2o-theme/templates/home.html.twig");
    }
}

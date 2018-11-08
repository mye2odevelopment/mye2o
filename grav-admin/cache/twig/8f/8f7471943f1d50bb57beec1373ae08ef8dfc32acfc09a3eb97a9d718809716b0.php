<?php

/* tools.html.twig */
class __TwigTemplate_c834b7478da123ea5beb4d956fe1084f9d82d827d5d13874a1b0b0391ca5823f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("partials/base.html.twig", "tools.html.twig", 1);
        $this->blocks = array(
            'titlebar' => array($this, 'block_titlebar'),
            'content_top' => array($this, 'block_content_top'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "partials/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["tools_slug"] = twig_escape_filter($this->env, $this->getAttribute(($context["uri"] ?? null), "basename", array()));
        // line 4
        if ((($context["tools_slug"] ?? null) == "tools")) {
            $context["tools_slug"] = "direct-install";
        }
        // line 5
        $context["title"] = (($this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.TOOLS") . ": ") . $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter(("PLUGIN_ADMIN." . twig_upper_filter($this->env, $this->env->getExtension('Grav\Common\Twig\TwigExtension')->inflectorFilter("underscor", ($context["tools_slug"] ?? null))))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 7
    public function block_titlebar($context, array $blocks = array())
    {
        // line 8
        echo "    <h1><i class=\"fa fa-fw fa-briefcase\"></i> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.TOOLS"), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter(("PLUGIN_ADMIN." . twig_upper_filter($this->env, $this->env->getExtension('Grav\Common\Twig\TwigExtension')->inflectorFilter("underscor", ($context["tools_slug"] ?? null))))), "html", null, true);
        echo "</h1>
";
    }

    // line 11
    public function block_content_top($context, array $blocks = array())
    {
        // line 12
        echo "
    ";
        // line 13
        if ((twig_length_filter($this->env, $this->getAttribute(($context["admin"] ?? null), "tools", array())) > 1)) {
            // line 14
            echo "
    <div class=\"form-tabs\">
        <div class=\"tabs-nav\">
        ";
            // line 17
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["admin"] ?? null), "tools", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["tool"]) {
                // line 18
                echo "            <a href=\"";
                echo twig_escape_filter($this->env, ($context["base_url_relative"] ?? null), "html", null, true);
                echo "/tools/";
                echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\TwigExtension')->inflectorFilter("hyphen", $context["tool"]), "html", null, true);
                echo "\" ";
                if ((($context["tools_slug"] ?? null) == $this->env->getExtension('Grav\Common\Twig\TwigExtension')->inflectorFilter("hyphen", $context["tool"]))) {
                    echo "class=\"active\"";
                }
                echo ">
                ";
                // line 19
                echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter($context["tool"])), "html", null, true);
                echo "
            </a>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tool'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 22
            echo "        </div>
    </div>

    ";
        }
    }

    // line 28
    public function block_content($context, array $blocks = array())
    {
        // line 29
        echo "    ";
        if ($this->env->getExtension('Grav\Common\Twig\TwigExtension')->authorize(array(0 => "admin.tools", 1 => "admin.super"))) {
            // line 30
            echo "        ";
            try {
                $this->loadTemplate((("partials/tools-" . ($context["tools_slug"] ?? null)) . ".html.twig"), "tools.html.twig", 30)->display($context);
            } catch (Twig_Error_Loader $e) {
                // ignore missing template
            }

            // line 31
            echo "    ";
        }
    }

    public function getTemplateName()
    {
        return "tools.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 31,  102 => 30,  99 => 29,  96 => 28,  88 => 22,  79 => 19,  68 => 18,  64 => 17,  59 => 14,  57 => 13,  54 => 12,  51 => 11,  42 => 8,  39 => 7,  35 => 1,  33 => 5,  29 => 4,  27 => 3,  11 => 1,);
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

{% set tools_slug = uri.basename|e %}
{% if tools_slug == 'tools' %}{% set tools_slug = 'direct-install' %}{% endif %}
{% set title = \"PLUGIN_ADMIN.TOOLS\"|tu ~ \": \" ~ (\"PLUGIN_ADMIN.\" ~ tools_slug|underscorize|upper)|tu %}

{% block titlebar %}
    <h1><i class=\"fa fa-fw fa-briefcase\"></i> {{ \"PLUGIN_ADMIN.TOOLS\"|tu }} - {{ (\"PLUGIN_ADMIN.\" ~ tools_slug|underscorize|upper)|tu }}</h1>
{% endblock %}

{% block content_top %}

    {% if admin.tools|length > 1 %}

    <div class=\"form-tabs\">
        <div class=\"tabs-nav\">
        {% for tool in admin.tools %}
            <a href=\"{{ base_url_relative }}/tools/{{tool|hyphenize}}\" {% if tools_slug == tool|hyphenize %}class=\"active\"{% endif %}>
                {{ tool|tu|capitalize }}
            </a>
        {% endfor %}
        </div>
    </div>

    {% endif %}
{% endblock %}

{% block content %}
    {% if authorize(['admin.tools', 'admin.super']) %}
        {% include 'partials/tools-' ~ tools_slug ~ '.html.twig' ignore missing %}
    {% endif %}
{% endblock %}

", "tools.html.twig", "/home/factoria/carpetagit/mye2o/grav-admin/user/plugins/admin/themes/grav/templates/tools.html.twig");
    }
}

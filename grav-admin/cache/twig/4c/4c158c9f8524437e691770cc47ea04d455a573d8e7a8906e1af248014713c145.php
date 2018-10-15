<?php

/* simplesearch_results.html.twig */
class __TwigTemplate_5c3fa00232cebf77dedba812d9a6f772587b91c09ae383401a5682fd3badb783 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("partials/simplesearch_base.html.twig", "simplesearch_results.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "partials/simplesearch_base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "    <div class=\"content-padding simplesearch\">
    <h1 class=\"search-header\">";
        // line 5
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate("PLUGIN_SIMPLESEARCH.SEARCH_RESULTS");
        echo "</h1>
    <div class=\"center\">
        ";
        // line 7
        $this->loadTemplate("partials/simplesearch_searchbox.html.twig", "simplesearch_results.html.twig", 7)->display($context);
        // line 8
        echo "    </div>

    <p>
        ";
        // line 11
        if (($context["query"] ?? null)) {
            // line 12
            echo "            ";
            $context["count"] = ((($context["search_results"] ?? null)) ? ($this->getAttribute(($context["search_results"] ?? null), "count", array())) : (0));
            // line 13
            echo "            ";
            if ((($context["count"] ?? null) == 1)) {
                // line 14
                echo "                ";
                echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate("PLUGIN_SIMPLESEARCH.SEARCH_RESULTS_SUMMARY_SINGULAR", twig_escape_filter($this->env, ($context["query"] ?? null)));
                echo "
            ";
            } else {
                // line 16
                echo "                ";
                echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate("PLUGIN_SIMPLESEARCH.SEARCH_RESULTS_SUMMARY_PLURAL", twig_escape_filter($this->env, ($context["query"] ?? null)), ($context["count"] ?? null));
                echo "
            ";
            }
            // line 18
            echo "        ";
        }
        // line 19
        echo "    </p>
    ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["search_results"] ?? null));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 21
            echo "        ";
            $this->loadTemplate("partials/simplesearch_item.html.twig", "simplesearch_results.html.twig", 21)->display(array_merge($context, array("page" => $context["page"])));
            // line 22
            echo "    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "    </div>
";
    }

    public function getTemplateName()
    {
        return "simplesearch_results.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 23,  92 => 22,  89 => 21,  72 => 20,  69 => 19,  66 => 18,  60 => 16,  54 => 14,  51 => 13,  48 => 12,  46 => 11,  41 => 8,  39 => 7,  34 => 5,  31 => 4,  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'partials/simplesearch_base.html.twig' %}

{% block content %}
    <div class=\"content-padding simplesearch\">
    <h1 class=\"search-header\">{{\"PLUGIN_SIMPLESEARCH.SEARCH_RESULTS\"|t}}</h1>
    <div class=\"center\">
        {% include 'partials/simplesearch_searchbox.html.twig' %}
    </div>

    <p>
        {% if query %}
            {% set count = search_results ? search_results.count : 0 %}
            {% if count == 1 %}
                {{ \"PLUGIN_SIMPLESEARCH.SEARCH_RESULTS_SUMMARY_SINGULAR\"|t(query|e)|raw }}
            {% else %}
                {{ \"PLUGIN_SIMPLESEARCH.SEARCH_RESULTS_SUMMARY_PLURAL\"|t(query|e, count)|raw }}
            {% endif %}
        {% endif %}
    </p>
    {% for page in search_results %}
        {% include 'partials/simplesearch_item.html.twig' with {'page':page} %}
    {% endfor %}
    </div>
{% endblock %}
", "simplesearch_results.html.twig", "/home/factoria/carpetagit/mye2o/grav-admin/user/plugins/simplesearch/templates/simplesearch_results.html.twig");
    }
}

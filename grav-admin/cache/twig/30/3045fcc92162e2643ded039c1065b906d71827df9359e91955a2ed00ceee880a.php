<?php

/* forms/fields/dateformat/dateformat.html.twig */
class __TwigTemplate_53dbfa2c523a81db7079e1676b699aec99d93ebdbabb2d98285adddb18d08ef5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("forms/field.html.twig", "forms/fields/dateformat/dateformat.html.twig", 1);
        $this->blocks = array(
            'global_attributes' => array($this, 'block_global_attributes'),
            'input' => array($this, 'block_input'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "forms/field.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_global_attributes($context, array $blocks = array())
    {
        // line 4
        echo "    data-grav-selectize=\"";
        echo twig_escape_filter($this->env, twig_jsonencode_filter((($this->getAttribute(($context["field"] ?? null), "selectize", array(), "any", true, true)) ? ($this->getAttribute(($context["field"] ?? null), "selectize", array())) : (array()))), "html_attr");
        echo "\"
    data-grav-field=\"select\"
    ";
        // line 6
        $this->displayParentBlock("global_attributes", $context, $blocks);
        echo "
";
    }

    // line 9
    public function block_input($context, array $blocks = array())
    {
        // line 10
        echo "    <div class=\"form-select-wrapper ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "size", array()), "html", null, true);
        echo "\">
        <select class=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "classes", array()), "html", null, true);
        echo "\" name=\"";
        echo twig_escape_filter($this->env, ($this->env->getExtension('Grav\Common\Twig\TwigExtension')->fieldNameFilter((($context["scope"] ?? null) . $this->getAttribute(($context["field"] ?? null), "name", array()))) . (($this->getAttribute(($context["field"] ?? null), "multiple", array())) ? ("[]") : (""))), "html", null, true);
        echo "\"
                ";
        // line 12
        if (twig_in_filter($this->getAttribute(($context["field"] ?? null), "autofocus", array()), array(0 => "on", 1 => "true", 2 => 1))) {
            echo "autofocus=\"autofocus\"";
        }
        // line 13
        echo "                ";
        if (twig_in_filter($this->getAttribute(($context["field"] ?? null), "novalidate", array()), array(0 => "on", 1 => "true", 2 => 1))) {
            echo "novalidate=\"novalidate\"";
        }
        // line 14
        echo "                ";
        if (twig_in_filter($this->getAttribute($this->getAttribute(($context["field"] ?? null), "validate", array()), "required", array()), array(0 => "on", 1 => "true", 2 => 1))) {
            echo "required=\"required\"";
        }
        // line 15
        echo "                ";
        if (twig_in_filter($this->getAttribute(($context["field"] ?? null), "multiple", array()), array(0 => "on", 1 => "true", 2 => 1))) {
            echo "multiple=\"multiple\"";
        }
        // line 16
        echo "                ";
        if (($this->getAttribute(($context["field"] ?? null), "disabled", array()) || ($context["isDisabledToggleable"] ?? null))) {
            echo "disabled=\"disabled\"";
        }
        // line 17
        echo "                ";
        if ($this->getAttribute(($context["field"] ?? null), "form", array())) {
            echo "form=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "form", array()), "html", null, true);
            echo "\"";
        }
        // line 18
        echo "                >
            ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["field"] ?? null), "options", array()));
        foreach ($context['_seq'] as $context["key"] => $context["text"]) {
            // line 20
            echo "            <option ";
            if ((($context["key"] == ($context["value"] ?? null)) || twig_in_filter($context["text"], ($context["value"] ?? null)))) {
                echo "selected=\"selected\"";
            }
            echo " value=\"";
            echo twig_escape_filter($this->env, (($this->getAttribute(($context["field"] ?? null), "multiple", array())) ? ($context["text"]) : ($context["key"])), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, ((twig_test_empty($context["key"])) ? ($context["text"]) : (twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", $context["key"])))), "html", null, true);
            echo "</option>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['text'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "        </select>
    </div>
";
    }

    public function getTemplateName()
    {
        return "forms/fields/dateformat/dateformat.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 22,  96 => 20,  92 => 19,  89 => 18,  82 => 17,  77 => 16,  72 => 15,  67 => 14,  62 => 13,  58 => 12,  52 => 11,  47 => 10,  44 => 9,  38 => 6,  32 => 4,  29 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"forms/field.html.twig\" %}

{% block global_attributes %}
    data-grav-selectize=\"{{ (field.selectize is defined ? field.selectize : {})|json_encode()|e('html_attr') }}\"
    data-grav-field=\"select\"
    {{ parent() }}
{% endblock %}

{% block input %}
    <div class=\"form-select-wrapper {{ field.size }}\">
        <select class=\"{{ field.classes }}\" name=\"{{ (scope ~ field.name)|fieldName ~ (field.multiple ? '[]' : '') }}\"
                {% if field.autofocus in ['on', 'true', 1] %}autofocus=\"autofocus\"{% endif %}
                {% if field.novalidate in ['on', 'true', 1] %}novalidate=\"novalidate\"{% endif %}
                {% if field.validate.required in ['on', 'true', 1] %}required=\"required\"{% endif %}
                {% if field.multiple in ['on', 'true', 1] %}multiple=\"multiple\"{% endif %}
                {% if field.disabled or isDisabledToggleable %}disabled=\"disabled\"{% endif %}
                {% if field.form %}form=\"{{ field.form }}\"{% endif %}
                >
            {% for key, text in field.options %}
            <option {% if key == value or text in value %}selected=\"selected\"{% endif %} value=\"{{ field.multiple ? text : key }}\">{{ key is empty ? text : \"now\"|date(key)|e }}</option>
            {% endfor %}
        </select>
    </div>
{% endblock %}
", "forms/fields/dateformat/dateformat.html.twig", "/home/factoria/carpetagit/mye2o/grav-admin/user/plugins/admin/themes/grav/templates/forms/fields/dateformat/dateformat.html.twig");
    }
}

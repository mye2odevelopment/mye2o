<?php

/* forms/fields/range/range.html.twig */
class __TwigTemplate_6d96910b553874676b4c8f34134314fa59a4edb78fc4c255d439a765168bdf79 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("forms/field.html.twig", "forms/fields/range/range.html.twig", 1);
        $this->blocks = array(
            'input_attributes' => array($this, 'block_input_attributes'),
            'append' => array($this, 'block_append'),
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
    public function block_input_attributes($context, array $blocks = array())
    {
        // line 4
        echo "    type=\"range\"
    class=\"rangefield ";
        // line 5
        if ($this->getAttribute(($context["field"] ?? null), "classes", array(), "any", true, true)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "classes", array()), "html", null, true);
            echo " ";
        }
        echo "\"
    ";
        // line 6
        if ($this->getAttribute($this->getAttribute(($context["field"] ?? null), "validate", array()), "min", array())) {
            echo "min=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["field"] ?? null), "validate", array()), "min", array()), "html", null, true);
            echo "\"";
        }
        // line 7
        echo "    ";
        if ($this->getAttribute($this->getAttribute(($context["field"] ?? null), "validate", array()), "max", array())) {
            echo "max=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["field"] ?? null), "validate", array()), "max", array()), "html", null, true);
            echo "\"";
        }
        // line 8
        echo "    ";
        if ($this->getAttribute($this->getAttribute(($context["field"] ?? null), "validate", array()), "step", array())) {
            echo "step=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["field"] ?? null), "validate", array()), "step", array()), "html", null, true);
            echo "\"";
        }
        // line 9
        echo "    ";
        if ($this->getAttribute(($context["field"] ?? null), "id", array(), "any", true, true)) {
            // line 10
            echo "        id=\"range_";
            echo twig_escape_filter($this->env, twig_replace_filter(twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "id", array())), array("." => "_")), "html", null, true);
            echo "\"
        oninput=\"number_";
            // line 11
            echo twig_escape_filter($this->env, twig_replace_filter(twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "id", array())), array("." => "_")), "html", null, true);
            echo "_output.value = this.value\"
    ";
        } else {
            // line 13
            echo "        id=\"range_";
            echo twig_escape_filter($this->env, twig_replace_filter(twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "name", array())), array("." => "_")), "html", null, true);
            echo "\"
        oninput=\"number_";
            // line 14
            echo twig_escape_filter($this->env, twig_replace_filter(twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "name", array())), array("." => "_")), "html", null, true);
            echo "_output.value = this.value\"
    ";
        }
        // line 16
        echo "    ";
        $this->displayParentBlock("input_attributes", $context, $blocks);
        echo "
";
    }

    // line 18
    public function block_append($context, array $blocks = array())
    {
        // line 19
        echo "    <input
        type=\"number\"
        class=\"rangefield ";
        // line 21
        if ($this->getAttribute(($context["field"] ?? null), "classes", array(), "any", true, true)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "classes", array()), "html", null, true);
            echo " ";
        }
        echo "\"
        ";
        // line 22
        if ($this->getAttribute($this->getAttribute(($context["field"] ?? null), "validate", array()), "min", array())) {
            echo "min=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["field"] ?? null), "validate", array()), "min", array()), "html", null, true);
            echo "\"";
        }
        // line 23
        echo "        ";
        if ($this->getAttribute($this->getAttribute(($context["field"] ?? null), "validate", array()), "max", array())) {
            echo "max=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["field"] ?? null), "validate", array()), "max", array()), "html", null, true);
            echo "\"";
        }
        // line 24
        echo "        ";
        if ($this->getAttribute($this->getAttribute(($context["field"] ?? null), "validate", array()), "step", array())) {
            echo "step=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["field"] ?? null), "validate", array()), "step", array()), "html", null, true);
            echo "\"";
        }
        // line 25
        echo "        ";
        if (($context["value"] ?? null)) {
            // line 26
            echo "            value=\"";
            echo twig_escape_filter($this->env, ($context["value"] ?? null), "html", null, true);
            echo "\"
        ";
        } elseif ($this->getAttribute(        // line 27
($context["field"] ?? null), "default", array())) {
            // line 28
            echo "            value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "default", array()), "html", null, true);
            echo "\"
        ";
        } else {
            // line 30
            echo "            value=\"0\"
        ";
        }
        // line 32
        echo "        ";
        if ($this->getAttribute(($context["field"] ?? null), "id", array(), "any", true, true)) {
            // line 33
            echo "            id=\"number_";
            echo twig_escape_filter($this->env, twig_replace_filter(twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "id", array())), array("." => "_")), "html", null, true);
            echo "_output\"
            oninput=\"range_";
            // line 34
            echo twig_escape_filter($this->env, twig_replace_filter(twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "id", array())), array("." => "_")), "html", null, true);
            echo ".value = this.value\"
        ";
        } else {
            // line 36
            echo "            id=\"number_";
            echo twig_escape_filter($this->env, twig_replace_filter(twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "name", array())), array("." => "_")), "html", null, true);
            echo "_output\"
            oninput=\"range_";
            // line 37
            echo twig_escape_filter($this->env, twig_replace_filter(twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "name", array())), array("." => "_")), "html", null, true);
            echo ".value = this.value\"
        ";
        }
        // line 39
        echo "    />
    <span class=\"range-append\">";
        // line 40
        echo twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "append", array()), "html", null, true);
        echo "</span>

";
    }

    public function getTemplateName()
    {
        return "forms/fields/range/range.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  172 => 40,  169 => 39,  164 => 37,  159 => 36,  154 => 34,  149 => 33,  146 => 32,  142 => 30,  136 => 28,  134 => 27,  129 => 26,  126 => 25,  119 => 24,  112 => 23,  106 => 22,  99 => 21,  95 => 19,  92 => 18,  85 => 16,  80 => 14,  75 => 13,  70 => 11,  65 => 10,  62 => 9,  55 => 8,  48 => 7,  42 => 6,  35 => 5,  32 => 4,  29 => 3,  11 => 1,);
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

{% block input_attributes %}
    type=\"range\"
    class=\"rangefield {% if field.classes is defined %}{{ field.classes }} {% endif %}\"
    {% if field.validate.min %}min=\"{{ field.validate.min }}\"{% endif %}
    {% if field.validate.max %}max=\"{{ field.validate.max }}\"{% endif %}
    {% if field.validate.step %}step=\"{{ field.validate.step }}\"{% endif %}
    {% if field.id is defined %}
        id=\"range_{{ field.id|e|replace({'.': '_'}) }}\"
        oninput=\"number_{{ field.id|e|replace({'.': '_'}) }}_output.value = this.value\"
    {% else %}
        id=\"range_{{ field.name|e|replace({'.': '_'}) }}\"
        oninput=\"number_{{ field.name|e|replace({'.': '_'}) }}_output.value = this.value\"
    {% endif %}
    {{ parent() }}
{% endblock %}
{% block append %}
    <input
        type=\"number\"
        class=\"rangefield {% if field.classes is defined %}{{ field.classes }} {% endif %}\"
        {% if field.validate.min %}min=\"{{ field.validate.min }}\"{% endif %}
        {% if field.validate.max %}max=\"{{ field.validate.max }}\"{% endif %}
        {% if field.validate.step %}step=\"{{ field.validate.step }}\"{% endif %}
        {% if value %}
            value=\"{{ value }}\"
        {% elseif field.default %}
            value=\"{{ field.default }}\"
        {% else %}
            value=\"0\"
        {% endif %}
        {% if field.id is defined %}
            id=\"number_{{ field.id|e|replace({'.': '_'}) }}_output\"
            oninput=\"range_{{ field.id|e|replace({'.': '_'}) }}.value = this.value\"
        {% else %}
            id=\"number_{{ field.name|e|replace({'.': '_'}) }}_output\"
            oninput=\"range_{{ field.name|e|replace({'.': '_'}) }}.value = this.value\"
        {% endif %}
    />
    <span class=\"range-append\">{{ field.append }}</span>

{% endblock append %}
", "forms/fields/range/range.html.twig", "/home/factoria/carpetagit/mye2o/grav-admin/user/plugins/admin/themes/grav/templates/forms/fields/range/range.html.twig");
    }
}

<?php

/* partials/messages.html.twig */
class __TwigTemplate_7f8fdad173b3ccc67899c4497648b91ec9fc54798fc95e880e90e69a163d2f2e extends Twig_Template
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
        $context["type_mapping"] = array("info" => "success", "error" => "error", "warning" => "warning");
        // line 2
        $context["icon_mapping"] = array("info" => "checkmark", "error" => "wrong", "warning" => "information");
        // line 3
        echo "
";
        // line 4
        if ($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "messages", array()), "all", array())) {
            // line 5
            echo "    <div id=\"messages\">
    ";
            // line 6
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "messages", array()), "fetch", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 7
                echo "
        ";
                // line 8
                $context["scope"] = twig_escape_filter($this->env, $this->getAttribute($context["message"], "scope", array()));
                // line 9
                echo "        ";
                $context["type"] = $this->getAttribute(($context["type_mapping"] ?? null), ($context["scope"] ?? null), array(), "array");
                // line 10
                echo "        ";
                $context["icon"] = $this->getAttribute(($context["icon_mapping"] ?? null), ($context["scope"] ?? null), array(), "array");
                // line 11
                echo "
        <div class=\"toast toast-";
                // line 12
                echo ($context["type"] ?? null);
                echo " ";
                echo ($context["scope"] ?? null);
                echo "\">
            <i class=\"icon dripicons-";
                // line 13
                echo ($context["icon"] ?? null);
                echo "\"></i> ";
                echo $this->getAttribute($context["message"], "message", array());
                echo "
        </div>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 16
            echo "    </div>
";
        }
    }

    public function getTemplateName()
    {
        return "partials/messages.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 16,  55 => 13,  49 => 12,  46 => 11,  43 => 10,  40 => 9,  38 => 8,  35 => 7,  31 => 6,  28 => 5,  26 => 4,  23 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set type_mapping = {'info':'success', 'error': 'error', 'warning': 'warning'} %}
{% set icon_mapping = {'info':'checkmark', 'error':'wrong', 'warning':'information'} %}

{% if grav.messages.all %}
    <div id=\"messages\">
    {% for message in grav.messages.fetch %}

        {% set scope = message.scope|e %}
        {% set type = type_mapping[scope] %}
        {% set icon = icon_mapping[scope] %}

        <div class=\"toast toast-{{ type }} {{ scope }}\">
            <i class=\"icon dripicons-{{ icon }}\"></i> {{ message.message|raw }}
        </div>
    {% endfor %}
    </div>
{% endif %}", "partials/messages.html.twig", "/Applications/MAMP/htdocs/mye2o/grav-admin/user/themes/quark/templates/partials/messages.html.twig");
    }
}

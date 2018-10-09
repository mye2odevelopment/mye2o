<?php

/* partials/navigation.html.twig */
class __TwigTemplate_c56ebc96aff5c7ac7565af1cc886dbca64b9d91b7cb80af89e7a733bb2475551 extends Twig_Template
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
        // line 24
        echo "
<ul>
    ";
        // line 26
        if ($this->getAttribute($this->getAttribute(($context["theme_config"] ?? null), "dropdown", array()), "enabled", array())) {
            // line 27
            echo "        ";
            echo $this->getAttribute($this, "loop", array(0 => ($context["pages"] ?? null)), "method");
            echo "
    ";
        } else {
            // line 29
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["pages"] ?? null), "children", array()), "visible", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 30
                echo "            ";
                $context["current_page"] = ((($this->getAttribute($context["page"], "active", array()) || $this->getAttribute($context["page"], "activeChild", array()))) ? ("selected") : (""));
                // line 31
                echo "            <li class=\"";
                echo ($context["current_page"] ?? null);
                echo "\">
                <a href=\"";
                // line 32
                echo $this->getAttribute($context["page"], "url", array());
                echo "\">
                    ";
                // line 33
                if ($this->getAttribute($this->getAttribute($context["page"], "header", array()), "icon", array())) {
                    echo "<i class=\"fa fa-";
                    echo $this->getAttribute($this->getAttribute($context["page"], "header", array()), "icon", array());
                    echo "\"></i>";
                }
                // line 34
                echo "                    ";
                echo $this->getAttribute($context["page"], "menu", array());
                echo "
                </a>
            </li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 38
            echo "    ";
        }
        // line 39
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["site"] ?? null), "menu", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["mitem"]) {
            // line 40
            echo "        <li>
            <a href=\"";
            // line 41
            echo $this->getAttribute($context["mitem"], "url", array());
            echo "\">
                ";
            // line 42
            if ($this->getAttribute($context["mitem"], "icon", array())) {
                echo "<i class=\"fa fa-";
                echo $this->getAttribute($context["mitem"], "icon", array());
                echo "\"></i>";
            }
            // line 43
            echo "                ";
            echo $this->getAttribute($context["mitem"], "text", array());
            echo "
            </a>
        </li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mitem'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "</ul>

";
    }

    // line 1
    public function getloop($__page__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "page" => $__page__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 2
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "children", array()), "visible", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                // line 3
                echo "        ";
                $context["current_page"] = ((($this->getAttribute($context["p"], "active", array()) || $this->getAttribute($context["p"], "activeChild", array()))) ? ("selected") : (""));
                // line 4
                echo "        ";
                if (($this->getAttribute($this->getAttribute($this->getAttribute($context["p"], "children", array()), "visible", array()), "count", array()) > 0)) {
                    // line 5
                    echo "            <li class=\"has-children ";
                    echo ($context["current_page"] ?? null);
                    echo "\">
                <a href=\"";
                    // line 6
                    echo $this->getAttribute($context["p"], "url", array());
                    echo "\">
                    ";
                    // line 7
                    if ($this->getAttribute($this->getAttribute($context["p"], "header", array()), "icon", array())) {
                        echo "<i class=\"fa fa-";
                        echo $this->getAttribute($this->getAttribute($context["p"], "header", array()), "icon", array());
                        echo "\"></i>";
                    }
                    // line 8
                    echo "                    ";
                    echo $this->getAttribute($context["p"], "menu", array());
                    echo "
                </a>
                <ul>
                    ";
                    // line 11
                    echo $this->getAttribute($this, "loop", array(0 => $context["p"]), "method");
                    echo "
                </ul>
            </li>
        ";
                } else {
                    // line 15
                    echo "            <li class=\"";
                    echo ($context["current_page"] ?? null);
                    echo "\">
                <a href=\"";
                    // line 16
                    echo $this->getAttribute($context["p"], "url", array());
                    echo "\">
                    ";
                    // line 17
                    if ($this->getAttribute($this->getAttribute($context["p"], "header", array()), "icon", array())) {
                        echo "<i class=\"fa fa-";
                        echo $this->getAttribute($this->getAttribute($context["p"], "header", array()), "icon", array());
                        echo "\"></i>";
                    }
                    // line 18
                    echo "                    ";
                    echo $this->getAttribute($context["p"], "menu", array());
                    echo "
                </a>
            </li>
        ";
                }
                // line 22
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "partials/navigation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  178 => 22,  170 => 18,  164 => 17,  160 => 16,  155 => 15,  148 => 11,  141 => 8,  135 => 7,  131 => 6,  126 => 5,  123 => 4,  120 => 3,  115 => 2,  103 => 1,  97 => 47,  86 => 43,  80 => 42,  76 => 41,  73 => 40,  68 => 39,  65 => 38,  54 => 34,  48 => 33,  44 => 32,  39 => 31,  36 => 30,  31 => 29,  25 => 27,  23 => 26,  19 => 24,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% macro loop(page) %}
    {% for p in page.children.visible %}
        {% set current_page = (p.active or p.activeChild) ? 'selected' : '' %}
        {% if p.children.visible.count > 0 %}
            <li class=\"has-children {{ current_page }}\">
                <a href=\"{{ p.url }}\">
                    {% if p.header.icon %}<i class=\"fa fa-{{ p.header.icon }}\"></i>{% endif %}
                    {{ p.menu }}
                </a>
                <ul>
                    {{ _self.loop(p) }}
                </ul>
            </li>
        {% else %}
            <li class=\"{{ current_page }}\">
                <a href=\"{{ p.url }}\">
                    {% if p.header.icon %}<i class=\"fa fa-{{ p.header.icon }}\"></i>{% endif %}
                    {{ p.menu }}
                </a>
            </li>
        {% endif %}
    {% endfor %}
{% endmacro %}

<ul>
    {% if theme_config.dropdown.enabled %}
        {{ _self.loop(pages) }}
    {% else %}
        {% for page in pages.children.visible %}
            {% set current_page = (page.active or page.activeChild) ? 'selected' : '' %}
            <li class=\"{{ current_page }}\">
                <a href=\"{{ page.url }}\">
                    {% if page.header.icon %}<i class=\"fa fa-{{ page.header.icon }}\"></i>{% endif %}
                    {{ page.menu }}
                </a>
            </li>
        {% endfor %}
    {% endif %}
    {% for mitem in site.menu %}
        <li>
            <a href=\"{{ mitem.url }}\">
                {% if mitem.icon %}<i class=\"fa fa-{{ mitem.icon }}\"></i>{% endif %}
                {{ mitem.text }}
            </a>
        </li>
    {% endfor %}
</ul>

", "partials/navigation.html.twig", "/home/factoria/carpetagit/mye2o/grav-admin/user/themes/mye2o-theme/templates/partials/navigation.html.twig");
    }
}

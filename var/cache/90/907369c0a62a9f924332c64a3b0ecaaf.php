<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* _partials/_items.html.twig */
class __TwigTemplate_4c43bfeff203ec8a29ff4b3c892c5717 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        if (array_key_exists("items", $context)) {
            // line 2
            echo "    ";
            $context["cssClass"] = ((array_key_exists("class", $context)) ? ((isset($context["class"]) || array_key_exists("class", $context) ? $context["class"] : (function () { throw new RuntimeError('Variable "class" does not exist.', 2, $this->source); })())) : ("default-class"));
            // line 3
            echo "    <div class=\"";
            echo twig_escape_filter($this->env, (isset($context["cssClass"]) || array_key_exists("cssClass", $context) ? $context["cssClass"] : (function () { throw new RuntimeError('Variable "cssClass" does not exist.', 3, $this->source); })()), "html", null, true);
            echo "\">
        <ul>
            ";
            // line 5
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 5, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 6
                echo "                <li>";
                echo twig_escape_filter($this->env, $context["item"], "html", null, true);
                echo "</li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 8
            echo "        </ul>
    </div>
";
        }
    }

    public function getTemplateName()
    {
        return "_partials/_items.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 8,  52 => 6,  48 => 5,  42 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if items is defined %}
    {% set cssClass = class is defined ? class : 'default-class' %}
    <div class=\"{{ cssClass }}\">
        <ul>
            {% for item in items %}
                <li>{{ item }}</li>
            {% endfor %}
        </ul>
    </div>
{% endif %}", "_partials/_items.html.twig", "/home/noziho/PhpstormProjects/twigw_mvc/templates/_partials/_items.html.twig");
    }
}

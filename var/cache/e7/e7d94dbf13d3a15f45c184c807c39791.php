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

/* home/home.html.twig */
class __TwigTemplate_31bf9565c94f2a14dad32c887a7c4698 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title_page' => [$this, 'block_title_page'],
            'css' => [$this, 'block_css'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("base.html.twig", "home/home.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title_page($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Ma super home page";
    }

    // line 3
    public function block_css($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "    <link rel=\"stylesheet\" href=\"/assets/css/home.css\">
";
    }

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 7
        echo "    <h1>
        Ma titre
    </h1>

    ";
        // line 11
        $context["number1"] = [0 => "1", 1 => "2", 2 => "3", 3 => "4"];
        // line 12
        echo "    ";
        $this->loadTemplate("_partials/_items.html.twig", "home/home.html.twig", 12)->display(twig_array_merge($context, ["items" => (isset($context["number1"]) || array_key_exists("number1", $context) ? $context["number1"] : (function () { throw new RuntimeError('Variable "number1" does not exist.', 12, $this->source); })())]));
        // line 13
        echo "

    ";
        // line 15
        $context["number2"] = [0 => "5", 1 => "6", 2 => "7", 3 => "8"];
        // line 16
        echo "    ";
        $this->loadTemplate("_partials/_items.html.twig", "home/home.html.twig", 16)->display(twig_array_merge($context, ["items" => (isset($context["number2"]) || array_key_exists("number2", $context) ? $context["number2"] : (function () { throw new RuntimeError('Variable "number2" does not exist.', 16, $this->source); })()), "class" => "number2"]));
        // line 17
        echo "
";
    }

    public function getTemplateName()
    {
        return "home/home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 17,  85 => 16,  83 => 15,  79 => 13,  76 => 12,  74 => 11,  68 => 7,  64 => 6,  59 => 4,  55 => 3,  48 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block title_page %}Ma super home page{% endblock %}
{% block css %}
    <link rel=\"stylesheet\" href=\"/assets/css/home.css\">
{% endblock %}
{% block body %}
    <h1>
        Ma titre
    </h1>

    {% set number1 = ['1', '2', '3', '4'] %}
    {% include '_partials/_items.html.twig' with {items: number1} %}


    {% set number2 = ['5', '6', '7', '8'] %}
    {% include '_partials/_items.html.twig' with {items: number2, class:'number2'} %}

{% endblock %}", "home/home.html.twig", "/home/noziho/PhpstormProjects/twigw_mvc/templates/home/home.html.twig");
    }
}

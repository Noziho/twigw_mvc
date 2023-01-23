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

/* base.html.twig */
class __TwigTemplate_3519a6b19cb9caaf6846e17a7ddc1abd extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'lang' => [$this, 'block_lang'],
            'title_page' => [$this, 'block_title_page'],
            'css' => [$this, 'block_css'],
            'js_head' => [$this, 'block_js_head'],
            'body' => [$this, 'block_body'],
            'sidebar' => [$this, 'block_sidebar'],
            'content' => [$this, 'block_content'],
            'js_body' => [$this, 'block_js_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!doctype html>
<html lang=\"";
        // line 2
        $this->displayBlock('lang', $context, $blocks);
        echo "\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\"
          content=\"width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">
    <title>";
        // line 8
        $this->displayBlock('title_page', $context, $blocks);
        echo "</title>
    <link rel=\"stylesheet\" href=\"/assets/css/style.css\">
    ";
        // line 10
        $this->displayBlock('css', $context, $blocks);
        // line 11
        echo "    ";
        $this->displayBlock('js_head', $context, $blocks);
        // line 12
        echo "</head>
<body>

    ";
        // line 15
        $this->displayBlock('body', $context, $blocks);
        // line 19
        echo "
    ";
        // line 20
        $this->displayBlock('js_body', $context, $blocks);
        // line 21
        echo "</body>
</html>";
    }

    // line 2
    public function block_lang($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "fr";
    }

    // line 8
    public function block_title_page($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Home";
    }

    // line 10
    public function block_css($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 11
    public function block_js_head($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 15
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 16
        echo "        ";
        $this->displayBlock('sidebar', $context, $blocks);
        // line 17
        echo "        ";
        $this->displayBlock('content', $context, $blocks);
        // line 18
        echo "    ";
    }

    // line 16
    public function block_sidebar($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 17
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 20
    public function block_js_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo " ";
    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  136 => 20,  130 => 17,  124 => 16,  120 => 18,  117 => 17,  114 => 16,  110 => 15,  104 => 11,  98 => 10,  91 => 8,  84 => 2,  79 => 21,  77 => 20,  74 => 19,  72 => 15,  67 => 12,  64 => 11,  62 => 10,  57 => 8,  48 => 2,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!doctype html>
<html lang=\"{% block lang %}fr{% endblock %}\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\"
          content=\"width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">
    <title>{% block title_page %}Home{% endblock %}</title>
    <link rel=\"stylesheet\" href=\"/assets/css/style.css\">
    {% block css %}{% endblock %}
    {% block js_head %}{% endblock %}
</head>
<body>

    {% block body %}
        {% block sidebar %}{% endblock %}
        {% block content %}{% endblock %}
    {% endblock %}

    {% block js_body %} {% endblock %}
</body>
</html>", "base.html.twig", "/home/noziho/PhpstormProjects/twigw_mvc/templates/base.html.twig");
    }
}

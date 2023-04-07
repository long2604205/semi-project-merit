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

/* client/system/home.html.twig */
class __TwigTemplate_5a5a04057fa294b7204133f6ae051ca5 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "client/master.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "client/system/home.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "client/system/home.html.twig"));

        $this->parent = $this->loadTemplate("client/master.html.twig", "client/system/home.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 2
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "\t<!-- home -->
\t<div class=\"home home--static\">
\t\t<div class=\"home__carousel owl-carousel\" id=\"flixtv-hero\">
        ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["bestactor"]) || array_key_exists("bestactor", $context) ? $context["bestactor"] : (function () { throw new RuntimeError('Variable "bestactor" does not exist.', 6, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["actorlist"]) {
            // line 7
            echo "\t\t\t<div class=\"home__card\">
\t\t\t\t<a href=\"";
            // line 8
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("client_detail", ["id" => twig_get_attribute($this->env, $this->source, $context["actorlist"], "id", [], "any", false, false, false, 8)]), "html", null, true);
            echo "\">
\t\t\t\t\t<img src=\"";
            // line 9
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["actorlist"], "image", [], "any", false, false, false, 9), "html", null, true);
            echo "\" alt=\"\">
\t\t\t\t</a>
\t\t\t\t<div>
\t\t\t\t\t<h2>";
            // line 12
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["actorlist"], "name", [], "any", false, false, false, 12), "html", null, true);
            echo "</h2>
\t\t\t\t\t<ul>
\t\t\t\t\t\t<li>";
            // line 14
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["actorlist"], "country", [], "any", false, false, false, 14), "html", null, true);
            echo "</li>
                        ";
            // line 15
            $context["age"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_date_converter($this->env), "diff", [0 => twig_date_converter($this->env, twig_get_attribute($this->env, $this->source, $context["actorlist"], "birth", [], "any", false, false, false, 15))], "method", false, false, false, 15), "y", [], "any", false, false, false, 15);
            // line 16
            echo "                        <li>";
            echo twig_escape_filter($this->env, (isset($context["age"]) || array_key_exists("age", $context) ? $context["age"] : (function () { throw new RuntimeError('Variable "age" does not exist.', 16, $this->source); })()), "html", null, true);
            echo " Years old</li>
\t\t\t\t\t\t<li>Height: ";
            // line 17
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["actorlist"], "height", [], "any", false, false, false, 17), "html", null, true);
            echo "</li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['actorlist'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "\t\t</div>

\t\t<button class=\"home__nav home__nav--prev\" data-nav=\"#flixtv-hero\" type=\"button\"></button>
\t\t<button class=\"home__nav home__nav--next\" data-nav=\"#flixtv-hero\" type=\"button\"></button>
\t</div>
\t<!-- end home -->
\t<!-- United States -->
\t<section class=\"section\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t<h2 class=\"section__title\">
\t\t\t\t\t\t<a>United States actors</a>
\t\t\t\t\t</h2>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t<div class=\"section__carousel-wrap\">
\t\t\t\t\t\t<div class=\"section__carousel owl-carousel\" id=\"popular\">
\t\t\t\t\t\t\t";
        // line 40
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["actorUS"]) || array_key_exists("actorUS", $context) ? $context["actorUS"] : (function () { throw new RuntimeError('Variable "actorUS" does not exist.', 40, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["us"]) {
            // line 41
            echo "\t\t\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t\t\t<a href=\"";
            // line 42
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("client_detail", ["id" => twig_get_attribute($this->env, $this->source, $context["us"], "id", [], "any", false, false, false, 42)]), "html", null, true);
            echo "\" class=\"card__cover\">
\t\t\t\t\t\t\t\t\t<img src=\"";
            // line 43
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["us"], "image", [], "any", false, false, false, 43), "html", null, true);
            echo "\" alt=\"\">
\t\t\t\t\t\t\t\t\t<svg width=\"22\" height=\"22\" viewbox=\"0 0 22 22\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\"><path fill-rule=\"evenodd\" clip-rule=\"evenodd\" d=\"M11 1C16.5228 1 21 5.47716 21 11C21 16.5228 16.5228 21 11 21C5.47716 21 1 16.5228 1 11C1 5.47716 5.47716 1 11 1Z\" stroke-linecap=\"round\" stroke-linejoin=\"round\"/><path fill-rule=\"evenodd\" clip-rule=\"evenodd\" d=\"M14.0501 11.4669C13.3211 12.2529 11.3371 13.5829 10.3221 14.0099C10.1601 14.0779 9.74711 14.2219 9.65811 14.2239C9.46911 14.2299 9.28711 14.1239 9.19911 13.9539C9.16511 13.8879 9.06511 13.4569 9.03311 13.2649C8.93811 12.6809 8.88911 11.7739 8.89011 10.8619C8.88911 9.90489 8.94211 8.95489 9.04811 8.37689C9.07611 8.22089 9.15811 7.86189 9.18211 7.80389C9.22711 7.69589 9.30911 7.61089 9.40811 7.55789C9.48411 7.51689 9.57111 7.49489 9.65811 7.49789C9.74711 7.49989 10.1091 7.62689 10.2331 7.67589C11.2111 8.05589 13.2801 9.43389 14.0401 10.2439C14.1081 10.3169 14.2951 10.5129 14.3261 10.5529C14.3971 10.6429 14.4321 10.7519 14.4321 10.8619C14.4321 10.9639 14.4011 11.0679 14.3371 11.1549C14.3041 11.1999 14.1131 11.3999 14.0501 11.4669Z\" stroke-linecap=\"round\" stroke-linejoin=\"round\"/></svg>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<h3 class=\"card__title\">
\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 47
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("client_detail", ["id" => twig_get_attribute($this->env, $this->source, $context["us"], "id", [], "any", false, false, false, 47)]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["us"], "name", [], "any", false, false, false, 47), "html", null, true);
            echo "</a>
\t\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t\t\t<ul class=\"card__list\">
\t\t\t\t\t\t\t\t\t<li>";
            // line 50
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["us"], "country", [], "any", false, false, false, 50), "html", null, true);
            echo "</li>
\t\t\t\t\t\t\t\t\t";
            // line 51
            $context["age"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_date_converter($this->env), "diff", [0 => twig_date_converter($this->env, twig_get_attribute($this->env, $this->source, $context["us"], "birth", [], "any", false, false, false, 51))], "method", false, false, false, 51), "y", [], "any", false, false, false, 51);
            // line 52
            echo "\t\t\t\t\t\t\t\t\t<li>";
            echo twig_escape_filter($this->env, (isset($context["age"]) || array_key_exists("age", $context) ? $context["age"] : (function () { throw new RuntimeError('Variable "age" does not exist.', 52, $this->source); })()), "html", null, true);
            echo " Years old</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['us'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        echo "\t\t\t\t\t\t</div>

\t\t\t\t\t\t<button class=\"section__nav section__nav--cards section__nav--prev\" data-nav=\"#popular\" type=\"button\">
\t\t\t\t\t\t\t<svg width=\"17\" height=\"15\" viewbox=\"0 0 17 15\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\"><path d=\"M1.25 7.72559L16.25 7.72559\" stroke-width=\"1.5\" stroke-linecap=\"round\" stroke-linejoin=\"round\"/><path d=\"M7.2998 1.70124L1.2498 7.72524L7.2998 13.7502\" stroke-width=\"1.5\" stroke-linecap=\"round\" stroke-linejoin=\"round\"/></svg>
\t\t\t\t\t\t</button>
\t\t\t\t\t\t<button class=\"section__nav section__nav--cards section__nav--next\" data-nav=\"#popular\" type=\"button\">
\t\t\t\t\t\t\t<svg width=\"17\" height=\"15\" viewbox=\"0 0 17 15\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\"><path d=\"M15.75 7.72559L0.75 7.72559\" stroke-width=\"1.5\" stroke-linecap=\"round\" stroke-linejoin=\"round\"/><path d=\"M9.7002 1.70124L15.7502 7.72524L9.7002 13.7502\" stroke-width=\"1.5\" stroke-linecap=\"round\" stroke-linejoin=\"round\"/></svg>
\t\t\t\t\t\t</button>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</section>
\t<!-- End United States -->
\t<!-- Start Chinese -->
\t<section class=\"section section--pb0 section--gradient\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t<h2 class=\"section__title\">China actors</h2>
\t\t\t\t</div>

\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t<div class=\"section__carousel-wrap\">
\t\t\t\t\t\t<div class=\"section__carousel owl-carousel\" id=\"newest\">
\t\t\t\t\t\t\t";
        // line 81
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["actorCN"]) || array_key_exists("actorCN", $context) ? $context["actorCN"] : (function () { throw new RuntimeError('Variable "actorCN" does not exist.', 81, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["cn"]) {
            // line 82
            echo "\t\t\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t\t\t<a href=\"";
            // line 83
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("client_detail", ["id" => twig_get_attribute($this->env, $this->source, $context["cn"], "id", [], "any", false, false, false, 83)]), "html", null, true);
            echo "\" class=\"card__cover\">
\t\t\t\t\t\t\t\t\t<img src=\"";
            // line 84
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cn"], "image", [], "any", false, false, false, 84), "html", null, true);
            echo "\" alt=\"\">
\t\t\t\t\t\t\t\t\t<svg width=\"22\" height=\"22\" viewBox=\"0 0 22 22\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\"><path fill-rule=\"evenodd\" clip-rule=\"evenodd\" d=\"M11 1C16.5228 1 21 5.47716 21 11C21 16.5228 16.5228 21 11 21C5.47716 21 1 16.5228 1 11C1 5.47716 5.47716 1 11 1Z\" stroke-linecap=\"round\" stroke-linejoin=\"round\"/><path fill-rule=\"evenodd\" clip-rule=\"evenodd\" d=\"M14.0501 11.4669C13.3211 12.2529 11.3371 13.5829 10.3221 14.0099C10.1601 14.0779 9.74711 14.2219 9.65811 14.2239C9.46911 14.2299 9.28711 14.1239 9.19911 13.9539C9.16511 13.8879 9.06511 13.4569 9.03311 13.2649C8.93811 12.6809 8.88911 11.7739 8.89011 10.8619C8.88911 9.90489 8.94211 8.95489 9.04811 8.37689C9.07611 8.22089 9.15811 7.86189 9.18211 7.80389C9.22711 7.69589 9.30911 7.61089 9.40811 7.55789C9.48411 7.51689 9.57111 7.49489 9.65811 7.49789C9.74711 7.49989 10.1091 7.62689 10.2331 7.67589C11.2111 8.05589 13.2801 9.43389 14.0401 10.2439C14.1081 10.3169 14.2951 10.5129 14.3261 10.5529C14.3971 10.6429 14.4321 10.7519 14.4321 10.8619C14.4321 10.9639 14.4011 11.0679 14.3371 11.1549C14.3041 11.1999 14.1131 11.3999 14.0501 11.4669Z\" stroke-linecap=\"round\" stroke-linejoin=\"round\"/></svg>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<h3 class=\"card__title\">
\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 88
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("client_detail", ["id" => twig_get_attribute($this->env, $this->source, $context["cn"], "id", [], "any", false, false, false, 88)]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cn"], "name", [], "any", false, false, false, 88), "html", null, true);
            echo "</a>
\t\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t\t\t<ul class=\"card__list\">
\t\t\t\t\t\t\t\t\t<li>";
            // line 91
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cn"], "country", [], "any", false, false, false, 91), "html", null, true);
            echo "</li>
\t\t\t\t\t\t\t\t\t";
            // line 92
            $context["age"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_date_converter($this->env), "diff", [0 => twig_date_converter($this->env, twig_get_attribute($this->env, $this->source, $context["cn"], "birth", [], "any", false, false, false, 92))], "method", false, false, false, 92), "y", [], "any", false, false, false, 92);
            // line 93
            echo "\t\t\t\t\t\t\t\t\t<li>";
            echo twig_escape_filter($this->env, (isset($context["age"]) || array_key_exists("age", $context) ? $context["age"] : (function () { throw new RuntimeError('Variable "age" does not exist.', 93, $this->source); })()), "html", null, true);
            echo " Years old</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cn'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 97
        echo "\t\t\t\t\t\t</div>

\t\t\t\t\t\t<button class=\"section__nav section__nav--cards section__nav--prev\" data-nav=\"#newest\" type=\"button\"><svg width=\"17\" height=\"15\" viewBox=\"0 0 17 15\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\"><path d=\"M1.25 7.72559L16.25 7.72559\" stroke-width=\"1.5\" stroke-linecap=\"round\" stroke-linejoin=\"round\"/><path d=\"M7.2998 1.70124L1.2498 7.72524L7.2998 13.7502\" stroke-width=\"1.5\" stroke-linecap=\"round\" stroke-linejoin=\"round\"/></svg></button>
\t\t\t\t\t\t<button class=\"section__nav section__nav--cards section__nav--next\" data-nav=\"#newest\" type=\"button\"><svg width=\"17\" height=\"15\" viewBox=\"0 0 17 15\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\"><path d=\"M15.75 7.72559L0.75 7.72559\" stroke-width=\"1.5\" stroke-linecap=\"round\" stroke-linejoin=\"round\"/><path d=\"M9.7002 1.70124L15.7502 7.72524L9.7002 13.7502\" stroke-width=\"1.5\" stroke-linecap=\"round\" stroke-linejoin=\"round\"/></svg></button>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</section>
\t<!-- End Chinese -->
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "client/system/home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  250 => 97,  239 => 93,  237 => 92,  233 => 91,  225 => 88,  218 => 84,  214 => 83,  211 => 82,  207 => 81,  180 => 56,  169 => 52,  167 => 51,  163 => 50,  155 => 47,  148 => 43,  144 => 42,  141 => 41,  137 => 40,  117 => 22,  106 => 17,  101 => 16,  99 => 15,  95 => 14,  90 => 12,  84 => 9,  80 => 8,  77 => 7,  73 => 6,  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"client/master.html.twig\" %}
{% block body %}
\t<!-- home -->
\t<div class=\"home home--static\">
\t\t<div class=\"home__carousel owl-carousel\" id=\"flixtv-hero\">
        {% for actorlist in bestactor %}
\t\t\t<div class=\"home__card\">
\t\t\t\t<a href=\"{{ path('client_detail',{'id':actorlist.id})}}\">
\t\t\t\t\t<img src=\"{{actorlist.image}}\" alt=\"\">
\t\t\t\t</a>
\t\t\t\t<div>
\t\t\t\t\t<h2>{{actorlist.name}}</h2>
\t\t\t\t\t<ul>
\t\t\t\t\t\t<li>{{actorlist.country}}</li>
                        {% set age = date().diff(date(actorlist.birth)).y %}
                        <li>{{age}} Years old</li>
\t\t\t\t\t\t<li>Height: {{actorlist.height}}</li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</div>
        {% endfor %}
\t\t</div>

\t\t<button class=\"home__nav home__nav--prev\" data-nav=\"#flixtv-hero\" type=\"button\"></button>
\t\t<button class=\"home__nav home__nav--next\" data-nav=\"#flixtv-hero\" type=\"button\"></button>
\t</div>
\t<!-- end home -->
\t<!-- United States -->
\t<section class=\"section\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t<h2 class=\"section__title\">
\t\t\t\t\t\t<a>United States actors</a>
\t\t\t\t\t</h2>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t<div class=\"section__carousel-wrap\">
\t\t\t\t\t\t<div class=\"section__carousel owl-carousel\" id=\"popular\">
\t\t\t\t\t\t\t{% for us in actorUS %}
\t\t\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t\t\t<a href=\"{{ path('client_detail',{'id':us.id})}}\" class=\"card__cover\">
\t\t\t\t\t\t\t\t\t<img src=\"{{us.image}}\" alt=\"\">
\t\t\t\t\t\t\t\t\t<svg width=\"22\" height=\"22\" viewbox=\"0 0 22 22\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\"><path fill-rule=\"evenodd\" clip-rule=\"evenodd\" d=\"M11 1C16.5228 1 21 5.47716 21 11C21 16.5228 16.5228 21 11 21C5.47716 21 1 16.5228 1 11C1 5.47716 5.47716 1 11 1Z\" stroke-linecap=\"round\" stroke-linejoin=\"round\"/><path fill-rule=\"evenodd\" clip-rule=\"evenodd\" d=\"M14.0501 11.4669C13.3211 12.2529 11.3371 13.5829 10.3221 14.0099C10.1601 14.0779 9.74711 14.2219 9.65811 14.2239C9.46911 14.2299 9.28711 14.1239 9.19911 13.9539C9.16511 13.8879 9.06511 13.4569 9.03311 13.2649C8.93811 12.6809 8.88911 11.7739 8.89011 10.8619C8.88911 9.90489 8.94211 8.95489 9.04811 8.37689C9.07611 8.22089 9.15811 7.86189 9.18211 7.80389C9.22711 7.69589 9.30911 7.61089 9.40811 7.55789C9.48411 7.51689 9.57111 7.49489 9.65811 7.49789C9.74711 7.49989 10.1091 7.62689 10.2331 7.67589C11.2111 8.05589 13.2801 9.43389 14.0401 10.2439C14.1081 10.3169 14.2951 10.5129 14.3261 10.5529C14.3971 10.6429 14.4321 10.7519 14.4321 10.8619C14.4321 10.9639 14.4011 11.0679 14.3371 11.1549C14.3041 11.1999 14.1131 11.3999 14.0501 11.4669Z\" stroke-linecap=\"round\" stroke-linejoin=\"round\"/></svg>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<h3 class=\"card__title\">
\t\t\t\t\t\t\t\t\t<a href=\"{{ path('client_detail',{'id':us.id})}}\">{{us.name}}</a>
\t\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t\t\t<ul class=\"card__list\">
\t\t\t\t\t\t\t\t\t<li>{{us.country}}</li>
\t\t\t\t\t\t\t\t\t{% set age = date().diff(date(us.birth)).y %}
\t\t\t\t\t\t\t\t\t<li>{{age}} Years old</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<button class=\"section__nav section__nav--cards section__nav--prev\" data-nav=\"#popular\" type=\"button\">
\t\t\t\t\t\t\t<svg width=\"17\" height=\"15\" viewbox=\"0 0 17 15\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\"><path d=\"M1.25 7.72559L16.25 7.72559\" stroke-width=\"1.5\" stroke-linecap=\"round\" stroke-linejoin=\"round\"/><path d=\"M7.2998 1.70124L1.2498 7.72524L7.2998 13.7502\" stroke-width=\"1.5\" stroke-linecap=\"round\" stroke-linejoin=\"round\"/></svg>
\t\t\t\t\t\t</button>
\t\t\t\t\t\t<button class=\"section__nav section__nav--cards section__nav--next\" data-nav=\"#popular\" type=\"button\">
\t\t\t\t\t\t\t<svg width=\"17\" height=\"15\" viewbox=\"0 0 17 15\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\"><path d=\"M15.75 7.72559L0.75 7.72559\" stroke-width=\"1.5\" stroke-linecap=\"round\" stroke-linejoin=\"round\"/><path d=\"M9.7002 1.70124L15.7502 7.72524L9.7002 13.7502\" stroke-width=\"1.5\" stroke-linecap=\"round\" stroke-linejoin=\"round\"/></svg>
\t\t\t\t\t\t</button>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</section>
\t<!-- End United States -->
\t<!-- Start Chinese -->
\t<section class=\"section section--pb0 section--gradient\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t<h2 class=\"section__title\">China actors</h2>
\t\t\t\t</div>

\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t<div class=\"section__carousel-wrap\">
\t\t\t\t\t\t<div class=\"section__carousel owl-carousel\" id=\"newest\">
\t\t\t\t\t\t\t{% for cn in actorCN %}
\t\t\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t\t\t<a href=\"{{ path('client_detail',{'id':cn.id})}}\" class=\"card__cover\">
\t\t\t\t\t\t\t\t\t<img src=\"{{cn.image}}\" alt=\"\">
\t\t\t\t\t\t\t\t\t<svg width=\"22\" height=\"22\" viewBox=\"0 0 22 22\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\"><path fill-rule=\"evenodd\" clip-rule=\"evenodd\" d=\"M11 1C16.5228 1 21 5.47716 21 11C21 16.5228 16.5228 21 11 21C5.47716 21 1 16.5228 1 11C1 5.47716 5.47716 1 11 1Z\" stroke-linecap=\"round\" stroke-linejoin=\"round\"/><path fill-rule=\"evenodd\" clip-rule=\"evenodd\" d=\"M14.0501 11.4669C13.3211 12.2529 11.3371 13.5829 10.3221 14.0099C10.1601 14.0779 9.74711 14.2219 9.65811 14.2239C9.46911 14.2299 9.28711 14.1239 9.19911 13.9539C9.16511 13.8879 9.06511 13.4569 9.03311 13.2649C8.93811 12.6809 8.88911 11.7739 8.89011 10.8619C8.88911 9.90489 8.94211 8.95489 9.04811 8.37689C9.07611 8.22089 9.15811 7.86189 9.18211 7.80389C9.22711 7.69589 9.30911 7.61089 9.40811 7.55789C9.48411 7.51689 9.57111 7.49489 9.65811 7.49789C9.74711 7.49989 10.1091 7.62689 10.2331 7.67589C11.2111 8.05589 13.2801 9.43389 14.0401 10.2439C14.1081 10.3169 14.2951 10.5129 14.3261 10.5529C14.3971 10.6429 14.4321 10.7519 14.4321 10.8619C14.4321 10.9639 14.4011 11.0679 14.3371 11.1549C14.3041 11.1999 14.1131 11.3999 14.0501 11.4669Z\" stroke-linecap=\"round\" stroke-linejoin=\"round\"/></svg>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<h3 class=\"card__title\">
\t\t\t\t\t\t\t\t\t<a href=\"{{ path('client_detail',{'id':cn.id})}}\">{{cn.name}}</a>
\t\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t\t\t<ul class=\"card__list\">
\t\t\t\t\t\t\t\t\t<li>{{cn.country}}</li>
\t\t\t\t\t\t\t\t\t{% set age = date().diff(date(cn.birth)).y %}
\t\t\t\t\t\t\t\t\t<li>{{age}} Years old</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<button class=\"section__nav section__nav--cards section__nav--prev\" data-nav=\"#newest\" type=\"button\"><svg width=\"17\" height=\"15\" viewBox=\"0 0 17 15\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\"><path d=\"M1.25 7.72559L16.25 7.72559\" stroke-width=\"1.5\" stroke-linecap=\"round\" stroke-linejoin=\"round\"/><path d=\"M7.2998 1.70124L1.2498 7.72524L7.2998 13.7502\" stroke-width=\"1.5\" stroke-linecap=\"round\" stroke-linejoin=\"round\"/></svg></button>
\t\t\t\t\t\t<button class=\"section__nav section__nav--cards section__nav--next\" data-nav=\"#newest\" type=\"button\"><svg width=\"17\" height=\"15\" viewBox=\"0 0 17 15\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\"><path d=\"M15.75 7.72559L0.75 7.72559\" stroke-width=\"1.5\" stroke-linecap=\"round\" stroke-linejoin=\"round\"/><path d=\"M9.7002 1.70124L15.7502 7.72524L9.7002 13.7502\" stroke-width=\"1.5\" stroke-linecap=\"round\" stroke-linejoin=\"round\"/></svg></button>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</section>
\t<!-- End Chinese -->
{% endblock %}
", "client/system/home.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/ASMactor/templates/client/system/home.html.twig");
    }
}

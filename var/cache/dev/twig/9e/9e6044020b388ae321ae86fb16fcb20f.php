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

/* client/actor/detail.html.twig */
class __TwigTemplate_0d5bb4e697eb7fa2f6ef38bfd637b3ab extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "client/actor/detail.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "client/actor/detail.html.twig"));

        $this->parent = $this->loadTemplate("client/master.html.twig", "client/actor/detail.html.twig", 1);
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
        echo "\t<!-- details -->
\t<section class=\"section section--head section--gradient\">
\t\t<div class=\"container\">
\t\t\t<!-- article -->
\t\t\t<div class=\"article\" style=\"justify-content: center;\">
\t\t\t\t";
        // line 9
        echo "                    <!-- Image player -->
\t\t\t\t\t";
        // line 12
        echo "\t\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t\t<!-- article content -->
\t\t\t\t\t\t<div class=\"article__content\">
\t\t\t\t\t\t\t<h1>";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["detail"]) || array_key_exists("detail", $context) ? $context["detail"] : (function () { throw new RuntimeError('Variable "detail" does not exist.', 15, $this->source); })()), "name", [], "any", false, false, false, 15), "html", null, true);
        echo "</h1>
                            <img src=\"";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["detail"]) || array_key_exists("detail", $context) ? $context["detail"] : (function () { throw new RuntimeError('Variable "detail" does not exist.', 16, $this->source); })()), "image", [], "any", false, false, false, 16), "html", null, true);
        echo "\" style=\"width: 400px; height:auto;\" class=\"img-fluid \${3|rounded-top,rounded-right,rounded-bottom,rounded-left,rounded-circle,|}\" alt=\"\">
\t\t\t\t\t\t\t<ul class=\"list\">
\t\t\t\t\t\t\t\t<li>";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["detail"]) || array_key_exists("detail", $context) ? $context["detail"] : (function () { throw new RuntimeError('Variable "detail" does not exist.', 18, $this->source); })()), "country", [], "any", false, false, false, 18), "html", null, true);
        echo "</li>
                                ";
        // line 19
        $context["age"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_date_converter($this->env), "diff", [0 => twig_date_converter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["detail"]) || array_key_exists("detail", $context) ? $context["detail"] : (function () { throw new RuntimeError('Variable "detail" does not exist.', 19, $this->source); })()), "birth", [], "any", false, false, false, 19))], "method", false, false, false, 19), "y", [], "any", false, false, false, 19);
        // line 20
        echo "\t\t\t\t\t\t\t\t<li>";
        echo twig_escape_filter($this->env, (isset($context["age"]) || array_key_exists("age", $context) ? $context["age"] : (function () { throw new RuntimeError('Variable "age" does not exist.', 20, $this->source); })()), "html", null, true);
        echo " Years old</li>
\t\t\t\t\t\t\t\t<li>Height: ";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["detail"]) || array_key_exists("detail", $context) ? $context["detail"] : (function () { throw new RuntimeError('Variable "detail" does not exist.', 21, $this->source); })()), "height", [], "any", false, false, false, 21), "html", null, true);
        echo "</li>
\t\t\t\t\t\t\t</ul>
                            <ul class=\"list\">
\t\t\t\t\t\t\t\t<li><b>Birth Name:</b>";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["detail"]) || array_key_exists("detail", $context) ? $context["detail"] : (function () { throw new RuntimeError('Variable "detail" does not exist.', 24, $this->source); })()), "birthName", [], "any", false, false, false, 24), "html", null, true);
        echo "</li>
\t\t\t\t\t\t\t</ul>
                            <ul class=\"list\">
\t\t\t\t\t\t\t\t<li><b>Born:</b>";
        // line 27
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["detail"]) || array_key_exists("detail", $context) ? $context["detail"] : (function () { throw new RuntimeError('Variable "detail" does not exist.', 27, $this->source); })()), "birth", [], "any", false, false, false, 27), "F j, Y"), "html", null, true);
        echo " in ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["detail"]) || array_key_exists("detail", $context) ? $context["detail"] : (function () { throw new RuntimeError('Variable "detail" does not exist.', 27, $this->source); })()), "born", [], "any", false, false, false, 27), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["detail"]) || array_key_exists("detail", $context) ? $context["detail"] : (function () { throw new RuntimeError('Variable "detail" does not exist.', 27, $this->source); })()), "country", [], "any", false, false, false, 27), "html", null, true);
        echo "</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t<h4><b>Movie: </b></h4>
\t\t\t\t\t\t\t";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["actor"]) || array_key_exists("actor", $context) ? $context["actor"] : (function () { throw new RuntimeError('Variable "actor" does not exist.', 30, $this->source); })()), "movie", [], "any", false, false, false, 30));
        foreach ($context['_seq'] as $context["_key"] => $context["movies"]) {
            // line 31
            echo "                                <tr>
                                    <th scope=\"row\"><a href=\"https://www.google.com/search?q=";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["movies"], "title", [], "any", false, false, false, 32), "html", null, true);
            echo "\" rel=\"search\" target=\"_blank\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["movies"], "title", [], "any", false, false, false, 32), "html", null, true);
            echo " , </a></th>
                                </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['movies'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "  
\t\t\t\t\t\t\t<h4><b></b></h4>  
                            <h4><b>Biography: </b></h4>                          
\t\t\t\t\t\t\t<p>";
        // line 37
        echo twig_get_attribute($this->env, $this->source, (isset($context["detail"]) || array_key_exists("detail", $context) ? $context["detail"] : (function () { throw new RuntimeError('Variable "detail" does not exist.', 37, $this->source); })()), "biography", [], "any", false, false, false, 37);
        echo "</p>
                            <h4><b>Photos of ";
        // line 38
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["detail"]) || array_key_exists("detail", $context) ? $context["detail"] : (function () { throw new RuntimeError('Variable "detail" does not exist.', 38, $this->source); })()), "name", [], "any", false, false, false, 38), "html", null, true);
        echo " </b></h4> 
                            <div class=\"row row--grid\">
                                <div class=\"col-12\">
                                    <h5 class=\"sidebar__title\"><b></b></h5>
                                </div>
                                ";
        // line 43
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["detail"]) || array_key_exists("detail", $context) ? $context["detail"] : (function () { throw new RuntimeError('Variable "detail" does not exist.', 43, $this->source); })()), "imageShares", [], "any", false, false, false, 43));
        foreach ($context['_seq'] as $context["_key"] => $context["list"]) {
            // line 44
            echo "                                <div class=\"col-6 col-sm-4 col-md-3 col-xl-6\">
                                    <div class=\"card\">
                                        <a href=\"";
            // line 46
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["list"], "img", [], "any", false, false, false, 46), "html", null, true);
            echo "\" target=\"_blank\" class=\"card__cover\">
                                            <img src=\"";
            // line 47
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["list"], "img", [], "any", false, false, false, 47), "html", null, true);
            echo "\" alt=\"\">
                                        </a>
                                    </div>
                                </div>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['list'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo " 
                            </div>
                            <!-- end new items -->
                        </div>
\t\t\t\t\t\t<!-- end article content -->
\t\t\t\t\t</div>
\t\t\t\t\t<!-- end article -->
\t\t\t\t";
        // line 59
        echo "\t\t\t</section>
\t\t\t<!-- end details -->


\t\t\t<!-- similar -->
\t\t\t<section class=\"section\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t\t\t<h2 class=\"section__title\">
\t\t\t\t\t\t\t\t<a href=\"category.html\">Similar actor</a>
\t\t\t\t\t\t\t</h2>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t\t\t<div class=\"section__carousel-wrap\">
\t\t\t\t\t\t\t\t<div class=\"section__carousel owl-carousel\" id=\"similar\">
                                    ";
        // line 75
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["similar"]) || array_key_exists("similar", $context) ? $context["similar"] : (function () { throw new RuntimeError('Variable "similar" does not exist.', 75, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["similars"]) {
            // line 76
            echo "\t\t\t\t\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 77
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("client_detail", ["id" => twig_get_attribute($this->env, $this->source, $context["similars"], "id", [], "any", false, false, false, 77)]), "html", null, true);
            echo "\" class=\"card__cover\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
            // line 78
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["similars"], "image", [], "any", false, false, false, 78), "html", null, true);
            echo "\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<h3 class=\"card__title\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 81
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("client_detail", ["id" => twig_get_attribute($this->env, $this->source, $context["similars"], "id", [], "any", false, false, false, 81)]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["similars"], "name", [], "any", false, false, false, 81), "html", null, true);
            echo "</a>
\t\t\t\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t\t\t\t\t<ul class=\"card__list\">
\t\t\t\t\t\t\t\t\t\t\t<li>Free</li>
\t\t\t\t\t\t\t\t\t\t\t<li>Action</li>
\t\t\t\t\t\t\t\t\t\t\t<li>2019</li>
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t</div>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['similars'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 90
        echo "\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<button class=\"section__nav section__nav--cards section__nav--prev\" data-nav=\"#similar\" type=\"button\">
\t\t\t\t\t\t\t\t\t<svg width=\"17\" height=\"15\" viewbox=\"0 0 17 15\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\"><path d=\"M1.25 7.72559L16.25 7.72559\" stroke-width=\"1.5\" stroke-linecap=\"round\" stroke-linejoin=\"round\"/><path d=\"M7.2998 1.70124L1.2498 7.72524L7.2998 13.7502\" stroke-width=\"1.5\" stroke-linecap=\"round\" stroke-linejoin=\"round\"/></svg>
\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t<button class=\"section__nav section__nav--cards section__nav--next\" data-nav=\"#similar\" type=\"button\">
\t\t\t\t\t\t\t\t\t<svg width=\"17\" height=\"15\" viewbox=\"0 0 17 15\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\"><path d=\"M15.75 7.72559L0.75 7.72559\" stroke-width=\"1.5\" stroke-linecap=\"round\" stroke-linejoin=\"round\"/><path d=\"M9.7002 1.70124L15.7502 7.72524L9.7002 13.7502\" stroke-width=\"1.5\" stroke-linecap=\"round\" stroke-linejoin=\"round\"/></svg>
\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</section>
\t\t\t<!-- end similar -->
\t\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "client/actor/detail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  244 => 90,  227 => 81,  221 => 78,  217 => 77,  214 => 76,  210 => 75,  192 => 59,  183 => 51,  172 => 47,  168 => 46,  164 => 44,  160 => 43,  152 => 38,  148 => 37,  143 => 34,  132 => 32,  129 => 31,  125 => 30,  115 => 27,  109 => 24,  103 => 21,  98 => 20,  96 => 19,  92 => 18,  87 => 16,  83 => 15,  78 => 12,  75 => 9,  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"client/master.html.twig\" %}
{% block body %}
\t<!-- details -->
\t<section class=\"section section--head section--gradient\">
\t\t<div class=\"container\">
\t\t\t<!-- article -->
\t\t\t<div class=\"article\" style=\"justify-content: center;\">
\t\t\t\t{# <div class=\"row\"> #}
                    <!-- Image player -->
\t\t\t\t\t{# <div class=\"col-12 col-xl-8\">
\t\t\t\t\t</div> #}
\t\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t\t<!-- article content -->
\t\t\t\t\t\t<div class=\"article__content\">
\t\t\t\t\t\t\t<h1>{{detail.name}}</h1>
                            <img src=\"{{detail.image}}\" style=\"width: 400px; height:auto;\" class=\"img-fluid \${3|rounded-top,rounded-right,rounded-bottom,rounded-left,rounded-circle,|}\" alt=\"\">
\t\t\t\t\t\t\t<ul class=\"list\">
\t\t\t\t\t\t\t\t<li>{{detail.country}}</li>
                                {% set age = date().diff(date(detail.birth)).y %}
\t\t\t\t\t\t\t\t<li>{{age}} Years old</li>
\t\t\t\t\t\t\t\t<li>Height: {{detail.height}}</li>
\t\t\t\t\t\t\t</ul>
                            <ul class=\"list\">
\t\t\t\t\t\t\t\t<li><b>Birth Name:</b>{{detail.birthName}}</li>
\t\t\t\t\t\t\t</ul>
                            <ul class=\"list\">
\t\t\t\t\t\t\t\t<li><b>Born:</b>{{detail.birth|date('F j, Y')}} in {{detail.born}}, {{detail.country}}</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t<h4><b>Movie: </b></h4>
\t\t\t\t\t\t\t{% for movies in actor.movie %}
                                <tr>
                                    <th scope=\"row\"><a href=\"https://www.google.com/search?q={{movies.title}}\" rel=\"search\" target=\"_blank\">{{movies.title}} , </a></th>
                                </tr>
                            {% endfor %}  
\t\t\t\t\t\t\t<h4><b></b></h4>  
                            <h4><b>Biography: </b></h4>                          
\t\t\t\t\t\t\t<p>{{ detail.biography|raw }}</p>
                            <h4><b>Photos of {{detail.name}} </b></h4> 
                            <div class=\"row row--grid\">
                                <div class=\"col-12\">
                                    <h5 class=\"sidebar__title\"><b></b></h5>
                                </div>
                                {% for list in detail.imageShares %}
                                <div class=\"col-6 col-sm-4 col-md-3 col-xl-6\">
                                    <div class=\"card\">
                                        <a href=\"{{list.img}}\" target=\"_blank\" class=\"card__cover\">
                                            <img src=\"{{list.img}}\" alt=\"\">
                                        </a>
                                    </div>
                                </div>
                                {% endfor %} 
                            </div>
                            <!-- end new items -->
                        </div>
\t\t\t\t\t\t<!-- end article content -->
\t\t\t\t\t</div>
\t\t\t\t\t<!-- end article -->
\t\t\t\t{# </div> #}
\t\t\t</section>
\t\t\t<!-- end details -->


\t\t\t<!-- similar -->
\t\t\t<section class=\"section\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t\t\t<h2 class=\"section__title\">
\t\t\t\t\t\t\t\t<a href=\"category.html\">Similar actor</a>
\t\t\t\t\t\t\t</h2>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t\t\t<div class=\"section__carousel-wrap\">
\t\t\t\t\t\t\t\t<div class=\"section__carousel owl-carousel\" id=\"similar\">
                                    {% for similars in similar %}
\t\t\t\t\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t\t\t\t\t<a href=\"{{ path('client_detail',{'id':similars.id})}}\" class=\"card__cover\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"{{similars.image}}\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<h3 class=\"card__title\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{ path('client_detail',{'id':similars.id})}}\">{{similars.name}}</a>
\t\t\t\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t\t\t\t\t<ul class=\"card__list\">
\t\t\t\t\t\t\t\t\t\t\t<li>Free</li>
\t\t\t\t\t\t\t\t\t\t\t<li>Action</li>
\t\t\t\t\t\t\t\t\t\t\t<li>2019</li>
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t</div>
                                    {% endfor %}
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<button class=\"section__nav section__nav--cards section__nav--prev\" data-nav=\"#similar\" type=\"button\">
\t\t\t\t\t\t\t\t\t<svg width=\"17\" height=\"15\" viewbox=\"0 0 17 15\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\"><path d=\"M1.25 7.72559L16.25 7.72559\" stroke-width=\"1.5\" stroke-linecap=\"round\" stroke-linejoin=\"round\"/><path d=\"M7.2998 1.70124L1.2498 7.72524L7.2998 13.7502\" stroke-width=\"1.5\" stroke-linecap=\"round\" stroke-linejoin=\"round\"/></svg>
\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t<button class=\"section__nav section__nav--cards section__nav--next\" data-nav=\"#similar\" type=\"button\">
\t\t\t\t\t\t\t\t\t<svg width=\"17\" height=\"15\" viewbox=\"0 0 17 15\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\"><path d=\"M15.75 7.72559L0.75 7.72559\" stroke-width=\"1.5\" stroke-linecap=\"round\" stroke-linejoin=\"round\"/><path d=\"M9.7002 1.70124L15.7502 7.72524L9.7002 13.7502\" stroke-width=\"1.5\" stroke-linecap=\"round\" stroke-linejoin=\"round\"/></svg>
\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</section>
\t\t\t<!-- end similar -->
\t\t{% endblock %}
", "client/actor/detail.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/ASMactor/templates/client/actor/detail.html.twig");
    }
}

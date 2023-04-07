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

/* client/widgets/navbar.html.twig */
class __TwigTemplate_6e09f32cc387d53f80e1fe43fa9b8786 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "client/widgets/navbar.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "client/widgets/navbar.html.twig"));

        // line 1
        echo "<!-- header (relative style) -->
<header class=\"header header--static\">
\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-12\">
\t\t\t\t<div class=\"header__content\">
\t\t\t\t\t<button class=\"header__menu\" type=\"button\">
\t\t\t\t\t\t<span></span>
\t\t\t\t\t\t<span></span>
\t\t\t\t\t\t<span></span>
\t\t\t\t\t</button>

\t\t\t\t\t<a href=\"";
        // line 13
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_client");
        echo "\" class=\"header__logo\">
\t\t\t\t\t\t";
        // line 15
        echo "\t\t\t\t\t\t<img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("main/img/cinemax.png"), "html", null, true);
        echo "\" alt=\"\">
\t\t\t\t\t</a>

\t\t\t\t\t<ul class=\"header__nav\">
\t\t\t\t\t\t<li class=\"header__nav-item\">
\t\t\t\t\t\t\t<a class=\"header__nav-link\" href=\"";
        // line 20
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_client");
        echo "\">Home</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"header__nav-item\">
\t\t\t\t\t\t\t<a class=\"header__nav-link\" href=\"";
        // line 23
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("about");
        echo "\">About Us</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"header__nav-item\">
\t\t\t\t\t\t\t<a class=\"header__nav-link\" href=\"";
        // line 26
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("client_contact");
        echo "\">Contact</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"header__nav-item\">
\t\t\t\t\t\t\t<a class=\"header__nav-link\" href=\"";
        // line 29
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("soon");
        echo "\">Coming Soon</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"header__nav-item\">
\t\t\t\t\t\t\t<a href=\"";
        // line 32
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("search_actor");
        echo "\" class=\"header__nav-link\" style=\"padding-left: 10px;\">
\t\t\t\t\t\t\t\tSearch<i class=\"fas fa-search\" style=\"padding-left: 5px;\"></i>
\t\t\t\t\t\t\t\t";
        // line 35
        echo "\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t\t";
        // line 57
        echo "

\t\t\t\t\t";
        // line 73
        echo "\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</header>
<!-- end header -->
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "client/widgets/navbar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 73,  104 => 57,  99 => 35,  94 => 32,  88 => 29,  82 => 26,  76 => 23,  70 => 20,  61 => 15,  57 => 13,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- header (relative style) -->
<header class=\"header header--static\">
\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-12\">
\t\t\t\t<div class=\"header__content\">
\t\t\t\t\t<button class=\"header__menu\" type=\"button\">
\t\t\t\t\t\t<span></span>
\t\t\t\t\t\t<span></span>
\t\t\t\t\t\t<span></span>
\t\t\t\t\t</button>

\t\t\t\t\t<a href=\"{{ path('app_client')}}\" class=\"header__logo\">
\t\t\t\t\t\t{# <img src=\"{{asset('main/img/logo-main.png')}}\" alt=\"\"> #}
\t\t\t\t\t\t<img src=\"{{asset('main/img/cinemax.png')}}\" alt=\"\">
\t\t\t\t\t</a>

\t\t\t\t\t<ul class=\"header__nav\">
\t\t\t\t\t\t<li class=\"header__nav-item\">
\t\t\t\t\t\t\t<a class=\"header__nav-link\" href=\"{{ path('app_client')}}\">Home</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"header__nav-item\">
\t\t\t\t\t\t\t<a class=\"header__nav-link\" href=\"{{path('about')}}\">About Us</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"header__nav-item\">
\t\t\t\t\t\t\t<a class=\"header__nav-link\" href=\"{{path('client_contact')}}\">Contact</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"header__nav-item\">
\t\t\t\t\t\t\t<a class=\"header__nav-link\" href=\"{{path('soon')}}\">Coming Soon</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"header__nav-item\">
\t\t\t\t\t\t\t<a href=\"{{path('search_actor')}}\" class=\"header__nav-link\" style=\"padding-left: 10px;\">
\t\t\t\t\t\t\t\tSearch<i class=\"fas fa-search\" style=\"padding-left: 5px;\"></i>
\t\t\t\t\t\t\t\t{# <svg xmlns=\"http://www.w3.org/2000/svg\" viewbox=\"0 0 24 24\"><path d=\"M21.71,20.29,18,16.61A9,9,0,1,0,16.61,18l3.68,3.68a1,1,0,0,0,1.42,0A1,1,0,0,0,21.71,20.29ZM11,18a7,7,0,1,1,7-7A7,7,0,0,1,11,18Z\"/></svg> #}
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t\t{# <div class=\"header__actions\">
\t\t\t\t\t\t{{ form_start(form,{
\t\t\t\t\t\t\t'attr':{
\t\t\t\t\t\t\t\t'class':'header__form',

\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t}) }}
\t\t\t\t\t\t\t{{ form_widget(form.searchActor,{
\t\t\t\t\t\t\t\t'attr':{
\t\t\t\t\t\t\t\t\t'class':'header__form-input',
\t\t\t\t\t\t\t\t\t'type': 'text',
\t\t\t\t\t\t\t\t\t'placeholder':\"I'm looking for...\"
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t}) }}
\t\t\t\t\t\t\t<button class=\"header__form-btn\" type=\"Submit\">
\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" viewbox=\"0 0 24 24\"><path d=\"M21.71,20.29,18,16.61A9,9,0,1,0,16.61,18l3.68,3.68a1,1,0,0,0,1.42,0A1,1,0,0,0,21.71,20.29ZM11,18a7,7,0,1,1,7-7A7,7,0,0,1,11,18Z\"/></svg>
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t{{ form_end(form) }}
\t\t\t\t\t</div> #}


\t\t\t\t\t{# <div class=\"header__actions\">
\t\t\t\t\t\t<form action=\"#\" class=\"header__form\">
\t\t\t\t\t\t\t<input class=\"header__form-input\" type=\"text\" placeholder=\"I'm looking for...\">
\t\t\t\t\t\t\t<li class=\"header__nav-item\">
\t\t\t\t\t\t\t\t<a href=\"##\" class=\"header__form-btn\" style=\"padding-left: 10px;\">
\t\t\t\t\t\t\t\t\tSearch<i class=\"fas fa-search\" style=\"padding-left: 5px;\"></i>
\t\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" viewbox=\"0 0 24 24\"><path d=\"M21.71,20.29,18,16.61A9,9,0,1,0,16.61,18l3.68,3.68a1,1,0,0,0,1.42,0A1,1,0,0,0,21.71,20.29ZM11,18a7,7,0,1,1,7-7A7,7,0,0,1,11,18Z\"/></svg>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<button type=\"button\" class=\"header__form-close\">
\t\t\t\t\t\t\t\t<svg width=\"20\" height=\"20\" viewbox=\"0 0 20 20\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\"><path fill-rule=\"evenodd\" clip-rule=\"evenodd\" d=\"M14.3345 0.000183105H5.66549C2.26791 0.000183105 0.000488281 2.43278 0.000488281 5.91618V14.0842C0.000488281 17.5709 2.26186 20.0002 5.66549 20.0002H14.3335C17.7381 20.0002 20.0005 17.5709 20.0005 14.0842V5.91618C20.0005 2.42969 17.7383 0.000183105 14.3345 0.000183105ZM5.66549 1.50018H14.3345C16.885 1.50018 18.5005 3.23515 18.5005 5.91618V14.0842C18.5005 16.7653 16.8849 18.5002 14.3335 18.5002H5.66549C3.11525 18.5002 1.50049 16.7655 1.50049 14.0842V5.91618C1.50049 3.23856 3.12083 1.50018 5.66549 1.50018ZM7.07071 7.0624C7.33701 6.79616 7.75367 6.772 8.04726 6.98988L8.13137 7.06251L9.99909 8.93062L11.8652 7.06455C12.1581 6.77166 12.6329 6.77166 12.9258 7.06455C13.1921 7.33082 13.2163 7.74748 12.9984 8.04109L12.9258 8.12521L11.0596 9.99139L12.9274 11.8595C13.2202 12.1524 13.2202 12.6273 12.9273 12.9202C12.661 13.1864 12.2443 13.2106 11.9507 12.9927L11.8666 12.9201L9.99898 11.052L8.13382 12.9172C7.84093 13.2101 7.36605 13.2101 7.07316 12.9172C6.80689 12.6509 6.78269 12.2343 7.00054 11.9407L7.07316 11.8566L8.93843 9.99128L7.0706 8.12306C6.77774 7.83013 6.77779 7.35526 7.07071 7.0624Z\"/></svg>
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t</form>
\t\t\t\t\t</div> #}
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</header>
<!-- end header -->
", "client/widgets/navbar.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/ASMactor/templates/client/widgets/navbar.html.twig");
    }
}

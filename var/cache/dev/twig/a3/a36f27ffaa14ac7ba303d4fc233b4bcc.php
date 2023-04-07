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

/* client/system/soon.html.twig */
class __TwigTemplate_0dead4f8ada3654f40761f0ddce86d12 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "client/system/soon.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "client/system/soon.html.twig"));

        $this->parent = $this->loadTemplate("client/master.html.twig", "client/system/soon.html.twig", 1);
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
        echo "    <!-- head -->
\t<section class=\"section section--head\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-12 col-xl-6\">
\t\t\t\t\t<h1 class=\"section__title section__title--head\">Coming Soon</h1>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</section>
\t<!-- end head -->

\t<!-- about -->
\t<section class=\"section section--pb0\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<!-- section text -->
\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t<p class=\"section__text section__text--small\">Feature in progress, please come back later.</p>

\t\t\t\t</div>
\t\t\t\t<!-- end section text -->
\t\t\t</div>

\t\t\t<div class=\"row row--grid\">
\t\t\t\t<div class=\"col-12 col-lg-4\">
\t\t\t\t\t<div class=\"step\">
\t\t\t\t\t\t<span class=\"step__number\">M</span>
\t\t\t\t\t\t<h3 class=\"step__title\">Movie Data</h3>
\t\t\t\t\t\t<p class=\"step__text\">The feature allows users to search and look up data on movies, from the country and genre to actors participating in that movie.</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-12 col-lg-4\">
\t\t\t\t\t<div class=\"step\">
\t\t\t\t\t\t<span class=\"step__number\">C</span>
\t\t\t\t\t\t<h3 class=\"step__title\">Cinema</h3>
\t\t\t\t\t\t<p class=\"step__text\">The cinema feature lets users watch movies and download movies directly on the Mines website.</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-12 col-lg-4\">
\t\t\t\t\t<div class=\"step\">
\t\t\t\t\t\t<span class=\"step__number\">S</span>
\t\t\t\t\t\t<h3 class=\"step__title\">Social</h3>
\t\t\t\t\t\t<p class=\"step__text\">The Social feature allows users to register an account, comment and exchange with other users directly on the Mines platform.</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</section>
\t<!-- end about -->
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "client/system/soon.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"client/master.html.twig\" %}
{% block body %}
    <!-- head -->
\t<section class=\"section section--head\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-12 col-xl-6\">
\t\t\t\t\t<h1 class=\"section__title section__title--head\">Coming Soon</h1>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</section>
\t<!-- end head -->

\t<!-- about -->
\t<section class=\"section section--pb0\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<!-- section text -->
\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t<p class=\"section__text section__text--small\">Feature in progress, please come back later.</p>

\t\t\t\t</div>
\t\t\t\t<!-- end section text -->
\t\t\t</div>

\t\t\t<div class=\"row row--grid\">
\t\t\t\t<div class=\"col-12 col-lg-4\">
\t\t\t\t\t<div class=\"step\">
\t\t\t\t\t\t<span class=\"step__number\">M</span>
\t\t\t\t\t\t<h3 class=\"step__title\">Movie Data</h3>
\t\t\t\t\t\t<p class=\"step__text\">The feature allows users to search and look up data on movies, from the country and genre to actors participating in that movie.</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-12 col-lg-4\">
\t\t\t\t\t<div class=\"step\">
\t\t\t\t\t\t<span class=\"step__number\">C</span>
\t\t\t\t\t\t<h3 class=\"step__title\">Cinema</h3>
\t\t\t\t\t\t<p class=\"step__text\">The cinema feature lets users watch movies and download movies directly on the Mines website.</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-12 col-lg-4\">
\t\t\t\t\t<div class=\"step\">
\t\t\t\t\t\t<span class=\"step__number\">S</span>
\t\t\t\t\t\t<h3 class=\"step__title\">Social</h3>
\t\t\t\t\t\t<p class=\"step__text\">The Social feature allows users to register an account, comment and exchange with other users directly on the Mines platform.</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</section>
\t<!-- end about -->
{% endblock %}", "client/system/soon.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/ASMactor/templates/client/system/soon.html.twig");
    }
}

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

/* client/system/about.html.twig */
class __TwigTemplate_0b64e357a76c8f5a002a430caa77d851 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "client/system/about.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "client/system/about.html.twig"));

        $this->parent = $this->loadTemplate("client/master.html.twig", "client/system/about.html.twig", 1);
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
\t\t\t\t\t<h1 class=\"section__title section__title--head\">Mines – Best place for Actor - Movie</h1>
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
\t\t\t\t\t<p class=\"section__text section__text--small\">Many desktop publishing packages and <a href=\"#\">web page</a> editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>

\t\t\t\t\t<p class=\"section__text section__text--small\">All the Lorem Ipsum generators on the <b>Internet</b> tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</p>
\t\t\t\t</div>
\t\t\t\t<!-- end section text -->
\t\t\t</div>

\t\t\t<div class=\"row row--grid\">
\t\t\t\t<div class=\"col-12 col-lg-4\">
\t\t\t\t\t<div class=\"step\">
\t\t\t\t\t\t<span class=\"step__number\">01</span>
\t\t\t\t\t\t<h3 class=\"step__title\">Choose your Plan</h3>
\t\t\t\t\t\t<p class=\"step__text\">It to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t
\t\t\t\t<div class=\"col-12 col-lg-4\">
\t\t\t\t\t<div class=\"step\">
\t\t\t\t\t\t<span class=\"step__number\">02</span>
\t\t\t\t\t\t<h3 class=\"step__title\">Create an account</h3>
\t\t\t\t\t\t<p class=\"step__text\">All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first</p>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"col-12 col-lg-4\">
\t\t\t\t\t<div class=\"step\">
\t\t\t\t\t\t<span class=\"step__number\">03</span>
\t\t\t\t\t\t<h3 class=\"step__title\">Enjoy FlixTV</h3>
\t\t\t\t\t\t<p class=\"step__text\">It to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting</p>
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
        return "client/system/about.html.twig";
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
\t\t\t\t\t<h1 class=\"section__title section__title--head\">Mines – Best place for Actor - Movie</h1>
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
\t\t\t\t\t<p class=\"section__text section__text--small\">Many desktop publishing packages and <a href=\"#\">web page</a> editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>

\t\t\t\t\t<p class=\"section__text section__text--small\">All the Lorem Ipsum generators on the <b>Internet</b> tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</p>
\t\t\t\t</div>
\t\t\t\t<!-- end section text -->
\t\t\t</div>

\t\t\t<div class=\"row row--grid\">
\t\t\t\t<div class=\"col-12 col-lg-4\">
\t\t\t\t\t<div class=\"step\">
\t\t\t\t\t\t<span class=\"step__number\">01</span>
\t\t\t\t\t\t<h3 class=\"step__title\">Choose your Plan</h3>
\t\t\t\t\t\t<p class=\"step__text\">It to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t
\t\t\t\t<div class=\"col-12 col-lg-4\">
\t\t\t\t\t<div class=\"step\">
\t\t\t\t\t\t<span class=\"step__number\">02</span>
\t\t\t\t\t\t<h3 class=\"step__title\">Create an account</h3>
\t\t\t\t\t\t<p class=\"step__text\">All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first</p>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"col-12 col-lg-4\">
\t\t\t\t\t<div class=\"step\">
\t\t\t\t\t\t<span class=\"step__number\">03</span>
\t\t\t\t\t\t<h3 class=\"step__title\">Enjoy FlixTV</h3>
\t\t\t\t\t\t<p class=\"step__text\">It to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</section>
\t<!-- end about -->
{% endblock %}", "client/system/about.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/ASMactor/templates/client/system/about.html.twig");
    }
}

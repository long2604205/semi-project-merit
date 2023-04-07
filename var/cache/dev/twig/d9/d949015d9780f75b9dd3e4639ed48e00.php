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

/* admin/system/system.html.twig */
class __TwigTemplate_362f8ceb0311085888611c0f0c7da759 extends Template
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
        return "admin/master.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/system/system.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/system/system.html.twig"));

        $this->parent = $this->loadTemplate("admin/master.html.twig", "admin/system/system.html.twig", 1);
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
        echo "\t<div class=\"card-box pd-20 height-100-p mb-30\">
\t\t<div class=\"row align-items-center\">
\t\t\t<div class=\"col-md-4\">
\t\t\t\t<img src=\"";
        // line 6
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 6, $this->source); })()), "user", [], "any", false, false, false, 6), "image", [], "any", false, false, false, 6), "html", null, true);
        echo "\" alt=\"\">
\t\t\t</div>
\t\t\t<div class=\"col-md-8\">
\t\t\t\t<h4 class=\"font-20 weight-500 mb-10 text-capitalize\">
\t\t\t\t\tWelcome back
\t\t\t\t\t<div class=\"weight-600 font-30 text-blue\">";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 11, $this->source); })()), "user", [], "any", false, false, false, 11), "name", [], "any", false, false, false, 11), "html", null, true);
        echo "!</div>
\t\t\t\t</h4>
\t\t\t\t<p class=\"font-18 max-width-600\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde hic non repellendus debitis iure, doloremque assumenda. Autem modi, corrupti, nobis ea iure fugiat, veniam non quaerat mollitia animi error corporis.</p>
\t\t\t</div>
\t\t</div>
\t</div>
\t<div class=\"bg-white pd-20 card-box mb-30\">
\t\t<h4 class=\"h4 text-blue\">Line Chart</h4>
\t\t<div id=\"chart1\"></div>
\t</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "admin/system/system.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 11,  73 => 6,  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"admin/master.html.twig\" %}
{% block body %}
\t<div class=\"card-box pd-20 height-100-p mb-30\">
\t\t<div class=\"row align-items-center\">
\t\t\t<div class=\"col-md-4\">
\t\t\t\t<img src=\"{{app.user.image}}\" alt=\"\">
\t\t\t</div>
\t\t\t<div class=\"col-md-8\">
\t\t\t\t<h4 class=\"font-20 weight-500 mb-10 text-capitalize\">
\t\t\t\t\tWelcome back
\t\t\t\t\t<div class=\"weight-600 font-30 text-blue\">{{app.user.name}}!</div>
\t\t\t\t</h4>
\t\t\t\t<p class=\"font-18 max-width-600\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde hic non repellendus debitis iure, doloremque assumenda. Autem modi, corrupti, nobis ea iure fugiat, veniam non quaerat mollitia animi error corporis.</p>
\t\t\t</div>
\t\t</div>
\t</div>
\t<div class=\"bg-white pd-20 card-box mb-30\">
\t\t<h4 class=\"h4 text-blue\">Line Chart</h4>
\t\t<div id=\"chart1\"></div>
\t</div>
{% endblock %}
", "admin/system/system.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/ASMactor/templates/admin/system/system.html.twig");
    }
}

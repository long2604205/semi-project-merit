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

/* admin/widgets/pageload.html.twig */
class __TwigTemplate_27534ea39bd47aedc5ab7908b0dc2ea1 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/widgets/pageload.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/widgets/pageload.html.twig"));

        // line 1
        echo "\t<!--<div class=\"pre-loader\">
\t\t<div class=\"pre-loader-box\">
\t\t\t<div class=\"loader-logo\"><img src=\"vendors/images/deskapp-logo.svg\" alt=\"\"></div>
\t\t\t<div class='loader-progress' id=\"progress_div\">
\t\t\t\t<div class='bar' id='bar1'></div>
\t\t\t</div>
\t\t\t<div class='percent' id='percent1'>0%</div>
\t\t\t<div class=\"loading-text\">
\t\t\t\tLoading...
\t\t\t</div>
\t\t</div>
\t</div> -->";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "admin/widgets/pageload.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("\t<!--<div class=\"pre-loader\">
\t\t<div class=\"pre-loader-box\">
\t\t\t<div class=\"loader-logo\"><img src=\"vendors/images/deskapp-logo.svg\" alt=\"\"></div>
\t\t\t<div class='loader-progress' id=\"progress_div\">
\t\t\t\t<div class='bar' id='bar1'></div>
\t\t\t</div>
\t\t\t<div class='percent' id='percent1'>0%</div>
\t\t\t<div class=\"loading-text\">
\t\t\t\tLoading...
\t\t\t</div>
\t\t</div>
\t</div> -->", "admin/widgets/pageload.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/ASMactor/templates/admin/widgets/pageload.html.twig");
    }
}

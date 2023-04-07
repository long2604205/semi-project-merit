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

/* admin/widgets/navbar.html.twig */
class __TwigTemplate_1f3262851018b108d331647590fc40d4 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/widgets/navbar.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/widgets/navbar.html.twig"));

        // line 1
        echo "\t<div class=\"header\">
\t\t<div class=\"header-left\">
\t\t\t<div class=\"menu-icon dw dw-menu\"></div>
\t\t\t<div class=\"search-toggle-icon dw dw-search2\" data-toggle=\"header_search\"></div>
\t\t\t";
        // line 13
        echo "\t\t</div>
\t\t<div class=\"header-right\">
\t\t\t<div class=\"dashboard-setting user-notification\">
\t\t\t\t<div class=\"dropdown\">
\t\t\t\t\t<a class=\"dropdown-toggle no-arrow\" href=\"javascript:;\" data-toggle=\"right-sidebar\">
\t\t\t\t\t\t<i class=\"dw dw-settings2\"></i>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"user-info-dropdown\">
\t\t\t\t<div class=\"dropdown\">
\t\t\t\t\t<a class=\"dropdown-toggle\" href=\"#\" role=\"button\" data-toggle=\"dropdown\">
\t\t\t\t\t\t<span class=\"user-icon\">
\t\t\t\t\t\t\t";
        // line 27
        echo "\t\t\t\t\t\t\t<img src=\"";
        (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, true, false, 27), "image", [], "any", true, true, false, 27) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, true, false, 27), "image", [], "any", false, false, false, 27)))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, true, false, 27), "image", [], "any", false, false, false, 27), "html", null, true))) : (print ("")));
        echo "\" alt=\"\">
\t\t\t\t\t\t</span>
\t\t\t\t\t\t<span class=\"user-name\">";
        // line 29
        (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, true, false, 29), "name", [], "any", true, true, false, 29) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, true, false, 29), "name", [], "any", false, false, false, 29)))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, true, false, 29), "name", [], "any", false, false, false, 29), "html", null, true))) : (print ("")));
        echo "</span>
\t\t\t\t\t</a>
\t\t\t\t\t<div class=\"dropdown-menu dropdown-menu-right dropdown-menu-icon-list\">
\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
        // line 32
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_profile");
        echo "\"><i class=\"dw dw-user1\"></i> Profile</a>
\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
        // line 33
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        echo "\"><i class=\"dw dw-logout\"></i> Log Out</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "admin/widgets/navbar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 33,  76 => 32,  70 => 29,  64 => 27,  49 => 13,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("\t<div class=\"header\">
\t\t<div class=\"header-left\">
\t\t\t<div class=\"menu-icon dw dw-menu\"></div>
\t\t\t<div class=\"search-toggle-icon dw dw-search2\" data-toggle=\"header_search\"></div>
\t\t\t{# <div class=\"header-search\">
\t\t\t\t<form>
\t\t\t\t\t<div class=\"form-group mb-0\">
\t\t\t\t\t\t<i class=\"dw dw-search2 search-icon\"></i>
\t\t\t\t\t\t<input type=\"text\" class=\"form-control search-input\" placeholder=\"Search Here\">
\t\t\t\t\t</div>
\t\t\t\t</form>
\t\t\t</div> #}
\t\t</div>
\t\t<div class=\"header-right\">
\t\t\t<div class=\"dashboard-setting user-notification\">
\t\t\t\t<div class=\"dropdown\">
\t\t\t\t\t<a class=\"dropdown-toggle no-arrow\" href=\"javascript:;\" data-toggle=\"right-sidebar\">
\t\t\t\t\t\t<i class=\"dw dw-settings2\"></i>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"user-info-dropdown\">
\t\t\t\t<div class=\"dropdown\">
\t\t\t\t\t<a class=\"dropdown-toggle\" href=\"#\" role=\"button\" data-toggle=\"dropdown\">
\t\t\t\t\t\t<span class=\"user-icon\">
\t\t\t\t\t\t\t{# <img src=\"{{asset('admintemplate/vendors/images/photo1.jpg')}}\" alt=\"\"> #}
\t\t\t\t\t\t\t<img src=\"{{app.user.image ?? ''}}\" alt=\"\">
\t\t\t\t\t\t</span>
\t\t\t\t\t\t<span class=\"user-name\">{{app.user.name ?? ''}}</span>
\t\t\t\t\t</a>
\t\t\t\t\t<div class=\"dropdown-menu dropdown-menu-right dropdown-menu-icon-list\">
\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"{{ path('app_profile')}}\"><i class=\"dw dw-user1\"></i> Profile</a>
\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"{{ path('app_logout')}}\"><i class=\"dw dw-logout\"></i> Log Out</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>", "admin/widgets/navbar.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/ASMactor/templates/admin/widgets/navbar.html.twig");
    }
}

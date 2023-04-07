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

/* admin/user/list.html.twig */
class __TwigTemplate_01883130bb9f3041cfbe5e40f0389f5c extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/user/list.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/user/list.html.twig"));

        $this->parent = $this->loadTemplate("admin/master.html.twig", "admin/user/list.html.twig", 1);
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
        echo "\t\t\t<div class=\"card-box pb-10\">
\t\t\t\t<div class=\"clearfix\">
\t\t\t\t\t<div class=\"pull-left\">
\t\t\t\t\t\t<h2 class=\"h4 pd-20\">";
        // line 6
        echo twig_escape_filter($this->env, (isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 6, $this->source); })()), "html", null, true);
        echo "</h2>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"pull-right\">
\t\t\t\t\t\t<a href=\"";
        // line 9
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_create");
        echo "\" class=\"btn btn-primary btn-sm scroll-click\" rel=\"content-y\" role=\"button\">ADD NEW USER</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<table class=\"data-table table nowrap\">
\t\t\t\t\t<thead>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<th class=\"table-plus\">Name</th>
\t\t\t\t\t\t\t<th>Username</th>
\t\t\t\t\t\t\t<th>Email</th>
\t\t\t\t\t\t\t<th>Phone</th>
\t\t\t\t\t\t\t<th class=\"datatable-nosort\">Actions</th>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</thead>
\t\t\t\t\t<tbody>
\t\t\t\t\t";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 23, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["list"]) {
            // line 24
            echo "\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td class=\"table-plus\">
\t\t\t\t\t\t\t\t<div class=\"name-avatar d-flex align-items-center\">
\t\t\t\t\t\t\t\t\t<div class=\"avatar mr-2 flex-shrink-0\">
\t\t\t\t\t\t\t\t\t\t<img src=\"";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["list"], "image", [], "any", false, false, false, 28), "html", null, true);
            echo "\" class=\"border-radius-100 shadow\" width=\"40\" height=\"40\" alt=\"\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"txt\">
\t\t\t\t\t\t\t\t\t\t<div class=\"weight-600\">";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["list"], "name", [], "any", false, false, false, 31), "html", null, true);
            echo "</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td>";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["list"], "username", [], "any", false, false, false, 35), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t<td>";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["list"], "email", [], "any", false, false, false, 36), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t<td>";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["list"], "phone", [], "any", false, false, false, 37), "html", null, true);
            echo "</td>\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<div class=\"table-actions\">
\t\t\t\t\t\t\t\t\t<a href=\"user/edit/";
            // line 40
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["list"], "id", [], "any", false, false, false, 40), "html", null, true);
            echo "\" data-color=\"#265ed7\"><i class=\"icon-copy dw dw-edit2\"></i></a>
\t\t\t\t\t\t\t\t\t<a href=\"user/delete/";
            // line 41
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["list"], "id", [], "any", false, false, false, 41), "html", null, true);
            echo "\" data-color=\"#e95959\"><i class=\"icon-copy dw dw-delete-3\"></i></a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['list'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "\t\t\t\t\t</tbody>
\t\t\t\t</table>
\t\t\t</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "admin/user/list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  148 => 46,  137 => 41,  133 => 40,  127 => 37,  123 => 36,  119 => 35,  112 => 31,  106 => 28,  100 => 24,  96 => 23,  79 => 9,  73 => 6,  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"admin/master.html.twig\" %}
{% block body %}
\t\t\t<div class=\"card-box pb-10\">
\t\t\t\t<div class=\"clearfix\">
\t\t\t\t\t<div class=\"pull-left\">
\t\t\t\t\t\t<h2 class=\"h4 pd-20\">{{title}}</h2>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"pull-right\">
\t\t\t\t\t\t<a href=\"{{ path('user_create')}}\" class=\"btn btn-primary btn-sm scroll-click\" rel=\"content-y\" role=\"button\">ADD NEW USER</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<table class=\"data-table table nowrap\">
\t\t\t\t\t<thead>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<th class=\"table-plus\">Name</th>
\t\t\t\t\t\t\t<th>Username</th>
\t\t\t\t\t\t\t<th>Email</th>
\t\t\t\t\t\t\t<th>Phone</th>
\t\t\t\t\t\t\t<th class=\"datatable-nosort\">Actions</th>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</thead>
\t\t\t\t\t<tbody>
\t\t\t\t\t{% for list in user %}
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td class=\"table-plus\">
\t\t\t\t\t\t\t\t<div class=\"name-avatar d-flex align-items-center\">
\t\t\t\t\t\t\t\t\t<div class=\"avatar mr-2 flex-shrink-0\">
\t\t\t\t\t\t\t\t\t\t<img src=\"{{ list.image }}\" class=\"border-radius-100 shadow\" width=\"40\" height=\"40\" alt=\"\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"txt\">
\t\t\t\t\t\t\t\t\t\t<div class=\"weight-600\">{{list.name}}</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td>{{list.username}}</td>
\t\t\t\t\t\t\t<td>{{list.email}}</td>
\t\t\t\t\t\t\t<td>{{list.phone}}</td>\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<div class=\"table-actions\">
\t\t\t\t\t\t\t\t\t<a href=\"user/edit/{{list.id}}\" data-color=\"#265ed7\"><i class=\"icon-copy dw dw-edit2\"></i></a>
\t\t\t\t\t\t\t\t\t<a href=\"user/delete/{{list.id}}\" data-color=\"#e95959\"><i class=\"icon-copy dw dw-delete-3\"></i></a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t{% endfor %}
\t\t\t\t\t</tbody>
\t\t\t\t</table>
\t\t\t</div>
{% endblock %}", "admin/user/list.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/ASMactor/templates/admin/user/list.html.twig");
    }
}

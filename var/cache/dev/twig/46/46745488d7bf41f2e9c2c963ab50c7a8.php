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

/* admin/actor/list.html.twig */
class __TwigTemplate_70578973e43e2ac8316c3eca44521e55 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/actor/list.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/actor/list.html.twig"));

        $this->parent = $this->loadTemplate("admin/master.html.twig", "admin/actor/list.html.twig", 1);
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

        echo "\t\t\t
\t<div class=\"card-box mb-30\">
\t\t<div class=\"clearfix\">
\t\t\t<div class=\"pull-left\">
\t\t\t\t<h2 class=\"h4 pd-20\">";
        // line 6
        echo twig_escape_filter($this->env, (isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 6, $this->source); })()), "html", null, true);
        echo "</h2>
\t\t\t</div>
\t\t\t<div class=\"pull-right\">
\t\t\t\t<a href=\"";
        // line 9
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("create_actor");
        echo "\" class=\"btn btn-primary btn-sm scroll-click\" rel=\"content-y\" role=\"button\">ADD NEW ACTOR</a>
\t\t\t</div>
\t\t</div>
\t\t<table class=\"data-table table nowrap\">
\t\t\t<thead>
\t\t\t\t<tr>
\t\t\t\t\t<th class=\"table-plus datatable-nosort\">Image</th>
\t\t\t\t\t<th>Name</th>
\t\t\t\t\t<th>Birthday</th>
\t\t\t\t\t<th>Gender</th>
\t\t\t\t\t<th>Country</th>
\t\t\t\t\t<th>Height</th>
\t\t\t\t\t";
        // line 22
        echo "\t\t\t\t\t<th class=\"datatable-nosort\">Action</th>
\t\t\t\t</tr>
\t\t\t</thead>
\t\t\t<tbody>
\t\t\t\t";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["actors"]) || array_key_exists("actors", $context) ? $context["actors"] : (function () { throw new RuntimeError('Variable "actors" does not exist.', 26, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["list"]) {
            // line 27
            echo "\t\t\t\t\t<tr>
\t\t\t\t\t\t<td class=\"table-plus\">
\t\t\t\t\t\t\t<img src=\"";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["list"], "image", [], "any", false, false, false, 29), "html", null, true);
            echo "\" width=\"70\" height=\"70\" alt=\"\">
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<h5 class=\"font-16\">";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["list"], "name", [], "any", false, false, false, 32), "html", null, true);
            echo "</h5>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>";
            // line 34
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["list"], "birth", [], "any", false, false, false, 34), "d/m/Y"), "html", null, true);
            echo "</td>
\t\t\t\t\t\t<td>";
            // line 35
            echo (((twig_get_attribute($this->env, $this->source, $context["list"], "gender", [], "any", false, false, false, 35) == 1)) ? ("Male") : ("Female"));
            echo "</td>
\t\t\t\t\t\t<td>";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["list"], "country", [], "any", false, false, false, 36), "html", null, true);
            echo "</td>
\t\t\t\t\t\t<td>";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["list"], "height", [], "any", false, false, false, 37), "html", null, true);
            echo "</td>
\t\t\t\t\t\t";
            // line 39
            echo "\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<div class=\"dropdown\">
\t\t\t\t\t\t\t\t<a class=\"btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle\" href=\"#\" role=\"button\" data-toggle=\"dropdown\">
\t\t\t\t\t\t\t\t\t<i class=\"dw dw-more\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<div class=\"dropdown-menu dropdown-menu-right dropdown-menu-icon-list\">
\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
            // line 45
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_detail", ["id" => twig_get_attribute($this->env, $this->source, $context["list"], "id", [], "any", false, false, false, 45)]), "html", null, true);
            echo "\"><i class=\"dw dw-eye\"></i> View</a>
\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
            // line 46
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("edit_actor", ["id" => twig_get_attribute($this->env, $this->source, $context["list"], "id", [], "any", false, false, false, 46)]), "html", null, true);
            echo "\"><i class=\"dw dw-edit2\"></i> Edit</a>
\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
            // line 47
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_actordelete", ["id" => twig_get_attribute($this->env, $this->source, $context["list"], "id", [], "any", false, false, false, 47)]), "html", null, true);
            echo "\"><i class=\"dw dw-delete-3\"></i> Delete</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['list'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        echo "\t\t\t</tbody>
\t\t</table>
\t</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "admin/actor/list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  163 => 53,  151 => 47,  147 => 46,  143 => 45,  135 => 39,  131 => 37,  127 => 36,  123 => 35,  119 => 34,  114 => 32,  108 => 29,  104 => 27,  100 => 26,  94 => 22,  79 => 9,  73 => 6,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"admin/master.html.twig\" %}
{% block body %}\t\t\t
\t<div class=\"card-box mb-30\">
\t\t<div class=\"clearfix\">
\t\t\t<div class=\"pull-left\">
\t\t\t\t<h2 class=\"h4 pd-20\">{{title}}</h2>
\t\t\t</div>
\t\t\t<div class=\"pull-right\">
\t\t\t\t<a href=\"{{ path('create_actor')}}\" class=\"btn btn-primary btn-sm scroll-click\" rel=\"content-y\" role=\"button\">ADD NEW ACTOR</a>
\t\t\t</div>
\t\t</div>
\t\t<table class=\"data-table table nowrap\">
\t\t\t<thead>
\t\t\t\t<tr>
\t\t\t\t\t<th class=\"table-plus datatable-nosort\">Image</th>
\t\t\t\t\t<th>Name</th>
\t\t\t\t\t<th>Birthday</th>
\t\t\t\t\t<th>Gender</th>
\t\t\t\t\t<th>Country</th>
\t\t\t\t\t<th>Height</th>
\t\t\t\t\t{# <th>Img</th> #}
\t\t\t\t\t<th class=\"datatable-nosort\">Action</th>
\t\t\t\t</tr>
\t\t\t</thead>
\t\t\t<tbody>
\t\t\t\t{% for list in actors %}
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td class=\"table-plus\">
\t\t\t\t\t\t\t<img src=\"{{ list.image }}\" width=\"70\" height=\"70\" alt=\"\">
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<h5 class=\"font-16\">{{list.name}}</h5>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>{{list.birth|date('d/m/Y')}}</td>
\t\t\t\t\t\t<td>{{list.gender == 1 ? 'Male' : 'Female'}}</td>
\t\t\t\t\t\t<td>{{list.country}}</td>
\t\t\t\t\t\t<td>{{list.height}}</td>
\t\t\t\t\t\t{# <td><a href=\"{{ path('app_image',{id:list.id})}}\">Images</a></td> #}
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<div class=\"dropdown\">
\t\t\t\t\t\t\t\t<a class=\"btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle\" href=\"#\" role=\"button\" data-toggle=\"dropdown\">
\t\t\t\t\t\t\t\t\t<i class=\"dw dw-more\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<div class=\"dropdown-menu dropdown-menu-right dropdown-menu-icon-list\">
\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"{{ path('app_detail',{'id':list.id})}}\"><i class=\"dw dw-eye\"></i> View</a>
\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"{{ path('edit_actor',{'id':list.id})}}\"><i class=\"dw dw-edit2\"></i> Edit</a>
\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"{{ path('app_actordelete',{'id':list.id})}}\"><i class=\"dw dw-delete-3\"></i> Delete</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t{% endfor %}
\t\t\t</tbody>
\t\t</table>
\t</div>
{% endblock %}





", "admin/actor/list.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/ASMactor/templates/admin/actor/list.html.twig");
    }
}

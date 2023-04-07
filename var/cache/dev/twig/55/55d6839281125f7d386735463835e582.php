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

/* admin/contact/list.html.twig */
class __TwigTemplate_29808f50391ef01e8fba840c633ec7c7 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/contact/list.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/contact/list.html.twig"));

        $this->parent = $this->loadTemplate("admin/master.html.twig", "admin/contact/list.html.twig", 1);
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
        <div class=\"card-box mb-30\">
            <div class=\"clearfix\">
                <div class=\"pull-left\">
                    <h2 class=\"h4 pd-20\">";
        // line 6
        echo twig_escape_filter($this->env, (isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 6, $this->source); })()), "html", null, true);
        echo "</h2>
                </div>
            </div>
            <table class=\"data-table table nowrap\">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Subject</th>
                        <th>Email</th>
                        <th>Time</th>
                        <th>Date</th>
                        ";
        // line 18
        echo "                        <th class=\"datatable-nosort\">Action</th>
                    </tr>
                </thead>
                <tbody>
                    ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["contact"]) || array_key_exists("contact", $context) ? $context["contact"] : (function () { throw new RuntimeError('Variable "contact" does not exist.', 22, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["list"]) {
            // line 23
            echo "                        <tr>
                            <td>
                                <h5 class=\"font-16\">";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["list"], "name", [], "any", false, false, false, 25), "html", null, true);
            echo "</h5>
                            </td>
                            <td>
                                <h5 class=\"font-16\">";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["list"], "subject", [], "any", false, false, false, 28), "html", null, true);
            echo "</h5>
                            </td>
                            <td>";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["list"], "email", [], "any", false, false, false, 30), "html", null, true);
            echo "</td>
                            <td>";
            // line 31
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["list"], "time", [], "any", false, false, false, 31), "H:i"), "html", null, true);
            echo "</td>
                            <td>";
            // line 32
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["list"], "time", [], "any", false, false, false, 32), "Y-m-d"), "html", null, true);
            echo "</td>
                            ";
            // line 34
            echo "\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<div class=\"table-actions\">
\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 36
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("client_contact_detail", ["id" => twig_get_attribute($this->env, $this->source, $context["list"], "id", [], "any", false, false, false, 36)]), "html", null, true);
            echo "\" data-color=\"#265ed7\"><i class=\"icon-copy dw dw-eye\"></i></a>
\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("client_contact_remove", ["id" => twig_get_attribute($this->env, $this->source, $context["list"], "id", [], "any", false, false, false, 37)]), "html", null, true);
            echo "\" data-color=\"#e95959\"><i class=\"icon-copy dw dw-delete-3\"></i></a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['list'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "                </tbody>
            </table>
        </div>
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "admin/contact/list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  143 => 42,  132 => 37,  128 => 36,  124 => 34,  120 => 32,  116 => 31,  112 => 30,  107 => 28,  101 => 25,  97 => 23,  93 => 22,  87 => 18,  73 => 6,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"admin/master.html.twig\" %}
    {% block body %}\t\t\t
        <div class=\"card-box mb-30\">
            <div class=\"clearfix\">
                <div class=\"pull-left\">
                    <h2 class=\"h4 pd-20\">{{title}}</h2>
                </div>
            </div>
            <table class=\"data-table table nowrap\">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Subject</th>
                        <th>Email</th>
                        <th>Time</th>
                        <th>Date</th>
                        {# <th>Img</th> #}
                        <th class=\"datatable-nosort\">Action</th>
                    </tr>
                </thead>
                <tbody>
                    {% for list in contact %}
                        <tr>
                            <td>
                                <h5 class=\"font-16\">{{list.name}}</h5>
                            </td>
                            <td>
                                <h5 class=\"font-16\">{{list.subject}}</h5>
                            </td>
                            <td>{{list.email}}</td>
                            <td>{{list.time|date('H:i')}}</td>
                            <td>{{list.time|date('Y-m-d')}}</td>
                            {# <td><a href=\"{{ path('app_image',{id:list.id})}}\">Images</a></td> #}
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<div class=\"table-actions\">
\t\t\t\t\t\t\t\t\t<a href=\"{{ path('client_contact_detail',{'id':list.id})}}\" data-color=\"#265ed7\"><i class=\"icon-copy dw dw-eye\"></i></a>
\t\t\t\t\t\t\t\t\t<a href=\"{{ path('client_contact_remove',{'id':list.id})}}\" data-color=\"#e95959\"><i class=\"icon-copy dw dw-delete-3\"></i></a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</td>
                        </tr>
                    {% endfor %}
                </tbody>
            </table>
        </div>
    {% endblock %}
    
    
    
    
    
    ", "admin/contact/list.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/ASMactor/templates/admin/contact/list.html.twig");
    }
}

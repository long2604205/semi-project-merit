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

/* admin/movie/list.html.twig */
class __TwigTemplate_d3e0d13674cea66a30932052213ad033 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/movie/list.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/movie/list.html.twig"));

        $this->parent = $this->loadTemplate("admin/master.html.twig", "admin/movie/list.html.twig", 1);
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
                <div class=\"pull-right\">
                    <a href=\"";
        // line 9
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("create_movie");
        echo "\" class=\"btn btn-primary btn-sm scroll-click\" rel=\"content-y\" role=\"button\">ADD NEW MOVIE</a>
                </div>
            </div>
            <table class=\"data-table table nowrap\">
                <thead>
                    <tr>
                        <th class=\"table-plus datatable-nosort\">Image</th>
                        <th>Title</th>
                        <th>Release Year</th>
                        <th>Duration</th>
                        <th>Country</th>
                        <th>Publisher</th>
                        ";
        // line 22
        echo "                        <th class=\"datatable-nosort\">Action</th>
                    </tr>
                </thead>
                <tbody>
                    ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["movie"]) || array_key_exists("movie", $context) ? $context["movie"] : (function () { throw new RuntimeError('Variable "movie" does not exist.', 26, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["movies"]) {
            // line 27
            echo "                        <tr>
                            <td class=\"table-plus\">
                                <img src=\"";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["movies"], "image", [], "any", false, false, false, 29), "html", null, true);
            echo "\" width=\"70\" height=\"70\" alt=\"\">
                            </td>
                            <td>
                                <h5 class=\"font-16\">";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["movies"], "title", [], "any", false, false, false, 32), "html", null, true);
            echo "</h5>
                            </td>
                            <td>";
            // line 34
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["movies"], "releaseYear", [], "any", false, false, false, 34), "Y"), "html", null, true);
            echo "</td>
                            <td>";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["movies"], "duration", [], "any", false, false, false, 35), "html", null, true);
            echo "</td>
                            <td>";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["movies"], "country", [], "any", false, false, false, 36), "html", null, true);
            echo "</td>
                            <td>";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["movies"], "publisher", [], "any", false, false, false, 37), "html", null, true);
            echo "</td>
                            ";
            // line 39
            echo "                            <td>
                                <div class=\"dropdown\">
                                    <a class=\"btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle\" href=\"#\" role=\"button\" data-toggle=\"dropdown\">
                                        <i class=\"dw dw-more\"></i>
                                    </a>
                                    <div class=\"dropdown-menu dropdown-menu-right dropdown-menu-icon-list\">
                                        <a class=\"dropdown-item\" href=\"";
            // line 45
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_detail", ["id" => twig_get_attribute($this->env, $this->source, $context["movies"], "id", [], "any", false, false, false, 45)]), "html", null, true);
            echo "\"><i class=\"dw dw-eye\"></i> View</a>
                                        <a class=\"dropdown-item\" href=\"";
            // line 46
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("edit_actor", ["id" => twig_get_attribute($this->env, $this->source, $context["movies"], "id", [], "any", false, false, false, 46)]), "html", null, true);
            echo "\"><i class=\"dw dw-edit2\"></i> Edit</a>
                                        <a class=\"dropdown-item\" href=\"";
            // line 47
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("delete_movie", ["id" => twig_get_attribute($this->env, $this->source, $context["movies"], "id", [], "any", false, false, false, 47)]), "html", null, true);
            echo "\"><i class=\"dw dw-delete-3\"></i> Delete</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['movies'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        echo "                </tbody>
            </table>
        </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "admin/movie/list.html.twig";
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
        <div class=\"card-box mb-30\">
            <div class=\"clearfix\">
                <div class=\"pull-left\">
                    <h2 class=\"h4 pd-20\">{{title}}</h2>
                </div>
                <div class=\"pull-right\">
                    <a href=\"{{ path('create_movie')}}\" class=\"btn btn-primary btn-sm scroll-click\" rel=\"content-y\" role=\"button\">ADD NEW MOVIE</a>
                </div>
            </div>
            <table class=\"data-table table nowrap\">
                <thead>
                    <tr>
                        <th class=\"table-plus datatable-nosort\">Image</th>
                        <th>Title</th>
                        <th>Release Year</th>
                        <th>Duration</th>
                        <th>Country</th>
                        <th>Publisher</th>
                        {# <th>Img</th> #}
                        <th class=\"datatable-nosort\">Action</th>
                    </tr>
                </thead>
                <tbody>
                    {% for movies in movie %}
                        <tr>
                            <td class=\"table-plus\">
                                <img src=\"{{ movies.image }}\" width=\"70\" height=\"70\" alt=\"\">
                            </td>
                            <td>
                                <h5 class=\"font-16\">{{movies.title}}</h5>
                            </td>
                            <td>{{movies.releaseYear|date('Y')}}</td>
                            <td>{{movies.duration}}</td>
                            <td>{{movies.country}}</td>
                            <td>{{movies.publisher}}</td>
                            {# <td><a href=\"{{ path('app_image',{id:list.id})}}\">Images</a></td> #}
                            <td>
                                <div class=\"dropdown\">
                                    <a class=\"btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle\" href=\"#\" role=\"button\" data-toggle=\"dropdown\">
                                        <i class=\"dw dw-more\"></i>
                                    </a>
                                    <div class=\"dropdown-menu dropdown-menu-right dropdown-menu-icon-list\">
                                        <a class=\"dropdown-item\" href=\"{{ path('app_detail',{'id':movies.id})}}\"><i class=\"dw dw-eye\"></i> View</a>
                                        <a class=\"dropdown-item\" href=\"{{ path('edit_actor',{'id':movies.id})}}\"><i class=\"dw dw-edit2\"></i> Edit</a>
                                        <a class=\"dropdown-item\" href=\"{{ path('delete_movie',{'id':movies.id})}}\"><i class=\"dw dw-delete-3\"></i> Delete</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    {% endfor %}
                </tbody>
            </table>
        </div>
{% endblock %}    ", "admin/movie/list.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/ASMactor/templates/admin/movie/list.html.twig");
    }
}

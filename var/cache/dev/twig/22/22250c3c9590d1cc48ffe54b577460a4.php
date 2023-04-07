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

/* admin/actor/detail.html.twig */
class __TwigTemplate_73d56491268a0fe3fe0b007ecdd50040 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/actor/detail.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/actor/detail.html.twig"));

        $this->parent = $this->loadTemplate("admin/master.html.twig", "admin/actor/detail.html.twig", 1);
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
        echo "\t<div class=\"card-box mb-30\">
\t\t<div class=\"clearfix\">
\t\t\t<div class=\"pull-left\">
\t\t\t\t<h2 class=\"h4 pd-20\">Biography</h2>
\t\t\t</div>
\t\t</div>
        <div class=\"row\">
            <div class=\"col-xl-4 col-lg-4 col-md-4 col-sm-12 mb-30\">
                <div class=\"pd-20 card-box height-100-p\">
                    <div class=\"profile-photo\">
                        <img src=\"";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["detail"]) || array_key_exists("detail", $context) ? $context["detail"] : (function () { throw new RuntimeError('Variable "detail" does not exist.', 13, $this->source); })()), "image", [], "any", false, false, false, 13), "html", null, true);
        echo "\" alt=\"\" class=\"avatar-photo\">
                    </div>
                    <h5 class=\"text-center h5 mb-0\">";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["detail"]) || array_key_exists("detail", $context) ? $context["detail"] : (function () { throw new RuntimeError('Variable "detail" does not exist.', 15, $this->source); })()), "name", [], "any", false, false, false, 15), "html", null, true);
        echo "</h5>
                    <p class=\"text-center text-muted font-14\">Nick Name: ";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["detail"]) || array_key_exists("detail", $context) ? $context["detail"] : (function () { throw new RuntimeError('Variable "detail" does not exist.', 16, $this->source); })()), "nickName", [], "any", false, false, false, 16), "html", null, true);
        echo "</p>
                    <div class=\"profile-info\">
                        <h5 class=\"mb-20 h5 text-blue\">Overview</h5>
                        <ul>
                            <li>
                                <span>Birth Name:</span>
                                ";
        // line 22
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["detail"]) || array_key_exists("detail", $context) ? $context["detail"] : (function () { throw new RuntimeError('Variable "detail" does not exist.', 22, $this->source); })()), "birthName", [], "any", false, false, false, 22), "html", null, true);
        echo "
                            </li>
                            <li>
                                <span>Birthday</span>
                                ";
        // line 26
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["detail"]) || array_key_exists("detail", $context) ? $context["detail"] : (function () { throw new RuntimeError('Variable "detail" does not exist.', 26, $this->source); })()), "birth", [], "any", false, false, false, 26), "F j, Y"), "html", null, true);
        echo "
                            </li>
                            <li>
                                <span>Born</span>
                                ";
        // line 30
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["detail"]) || array_key_exists("detail", $context) ? $context["detail"] : (function () { throw new RuntimeError('Variable "detail" does not exist.', 30, $this->source); })()), "born", [], "any", false, false, false, 30), "html", null, true);
        echo "
                            </li>
                            <li>
                                <span>Country:</span>
                                ";
        // line 34
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["detail"]) || array_key_exists("detail", $context) ? $context["detail"] : (function () { throw new RuntimeError('Variable "detail" does not exist.', 34, $this->source); })()), "country", [], "any", false, false, false, 34), "html", null, true);
        echo "
                            </li>
                            <li>
                                <span>Height</span>
                                ";
        // line 38
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["detail"]) || array_key_exists("detail", $context) ? $context["detail"] : (function () { throw new RuntimeError('Variable "detail" does not exist.', 38, $this->source); })()), "height", [], "any", false, false, false, 38), "html", null, true);
        echo "
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class=\"col-xl-8 col-lg-8 col-md-8 col-sm-12 mb-30\">
                <div class=\"product-detail-desc pd-20 card-box height-100-p\">
                    <h4 class=\"mb-20 pt-20\">";
        // line 46
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["detail"]) || array_key_exists("detail", $context) ? $context["detail"] : (function () { throw new RuntimeError('Variable "detail" does not exist.', 46, $this->source); })()), "name", [], "any", false, false, false, 46), "html", null, true);
        echo "</h4>
                    ";
        // line 47
        echo twig_get_attribute($this->env, $this->source, (isset($context["detail"]) || array_key_exists("detail", $context) ? $context["detail"] : (function () { throw new RuntimeError('Variable "detail" does not exist.', 47, $this->source); })()), "biography", [], "any", false, false, false, 47);
        echo "
                </div>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-xl-4 col-lg-4 col-md-4 col-sm-12 mb-30\">
                <div class=\"pd-20 card-box height-100-p\">
                    <h5 class=\"text-center h5 mb-0\">The Movies</h5>
                    <p class=\"text-center text-muted font-14\"></p>
                    <p class=\"text-center text-muted font-14\"><a href=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("add_movie", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["detail"]) || array_key_exists("detail", $context) ? $context["detail"] : (function () { throw new RuntimeError('Variable "detail" does not exist.', 56, $this->source); })()), "id", [], "any", false, false, false, 56)]), "html", null, true);
        echo "\" class=\"btn btn-primary btn-sm scroll-click\" rel=\"content-y\" role=\"button\">ADD NEW MOVIE</a>
                    </p>
                    <div class=\"profile-info\">
                        <table class=\"table table-striped text-center\">
                            <tbody>
                                ";
        // line 61
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["actor"]) || array_key_exists("actor", $context) ? $context["actor"] : (function () { throw new RuntimeError('Variable "actor" does not exist.', 61, $this->source); })()), "movie", [], "any", false, false, false, 61));
        foreach ($context['_seq'] as $context["_key"] => $context["movies"]) {
            // line 62
            echo "                                <tr>
                                    <th scope=\"row\"><a href=\"https://www.google.com/search?q=";
            // line 63
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["movies"], "title", [], "any", false, false, false, 63), "html", null, true);
            echo "\" rel=\"search\" target=\"_blank\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["movies"], "title", [], "any", false, false, false, 63), "html", null, true);
            echo "</a></th>
                                </tr>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['movies'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 66
        echo "                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class=\"col-xl-8 col-lg-8 col-md-8 col-sm-12 mb-30\">
                <div class=\"product-detail-desc pd-20 card-box height-100-p\">
                    <div class=\"pull-right\">
                        <a href=\"";
        // line 74
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_addimage", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["detail"]) || array_key_exists("detail", $context) ? $context["detail"] : (function () { throw new RuntimeError('Variable "detail" does not exist.', 74, $this->source); })()), "id", [], "any", false, false, false, 74)]), "html", null, true);
        echo "\" class=\"btn btn-primary btn-sm scroll-click\" rel=\"content-y\" role=\"button\">UPLOAD PHOTOS</a>
                    </div>
                    <h4 class=\"mb-20 pt-20\">The photos of ";
        // line 76
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["detail"]) || array_key_exists("detail", $context) ? $context["detail"] : (function () { throw new RuntimeError('Variable "detail" does not exist.', 76, $this->source); })()), "name", [], "any", false, false, false, 76), "html", null, true);
        echo "</h4>
                    <div class=\"row\">
                        ";
        // line 78
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["actor"]) || array_key_exists("actor", $context) ? $context["actor"] : (function () { throw new RuntimeError('Variable "actor" does not exist.', 78, $this->source); })()), "imageShares", [], "any", false, false, false, 78));
        foreach ($context['_seq'] as $context["_key"] => $context["list"]) {
            // line 79
            echo "                        <div class=\"col-sm-12 col-md-6 mt-4\">
                            <img src=\"";
            // line 80
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["list"], "img", [], "any", false, false, false, 80), "html", null, true);
            echo "\" alt=\"\">
                        </div>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['list'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 83
        echo "                    </div>
                </div>
            </div>
        </div>
\t</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "admin/actor/detail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  215 => 83,  206 => 80,  203 => 79,  199 => 78,  194 => 76,  189 => 74,  179 => 66,  168 => 63,  165 => 62,  161 => 61,  153 => 56,  141 => 47,  137 => 46,  126 => 38,  119 => 34,  112 => 30,  105 => 26,  98 => 22,  89 => 16,  85 => 15,  80 => 13,  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"admin/master.html.twig\" %}
{% block body %}
\t<div class=\"card-box mb-30\">
\t\t<div class=\"clearfix\">
\t\t\t<div class=\"pull-left\">
\t\t\t\t<h2 class=\"h4 pd-20\">Biography</h2>
\t\t\t</div>
\t\t</div>
        <div class=\"row\">
            <div class=\"col-xl-4 col-lg-4 col-md-4 col-sm-12 mb-30\">
                <div class=\"pd-20 card-box height-100-p\">
                    <div class=\"profile-photo\">
                        <img src=\"{{detail.image}}\" alt=\"\" class=\"avatar-photo\">
                    </div>
                    <h5 class=\"text-center h5 mb-0\">{{detail.name}}</h5>
                    <p class=\"text-center text-muted font-14\">Nick Name: {{detail.nickName}}</p>
                    <div class=\"profile-info\">
                        <h5 class=\"mb-20 h5 text-blue\">Overview</h5>
                        <ul>
                            <li>
                                <span>Birth Name:</span>
                                {{detail.birthName}}
                            </li>
                            <li>
                                <span>Birthday</span>
                                {{detail.birth|date('F j, Y')}}
                            </li>
                            <li>
                                <span>Born</span>
                                {{detail.born}}
                            </li>
                            <li>
                                <span>Country:</span>
                                {{detail.country}}
                            </li>
                            <li>
                                <span>Height</span>
                                {{detail.height}}
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class=\"col-xl-8 col-lg-8 col-md-8 col-sm-12 mb-30\">
                <div class=\"product-detail-desc pd-20 card-box height-100-p\">
                    <h4 class=\"mb-20 pt-20\">{{detail.name}}</h4>
                    {{ detail.biography|raw }}
                </div>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-xl-4 col-lg-4 col-md-4 col-sm-12 mb-30\">
                <div class=\"pd-20 card-box height-100-p\">
                    <h5 class=\"text-center h5 mb-0\">The Movies</h5>
                    <p class=\"text-center text-muted font-14\"></p>
                    <p class=\"text-center text-muted font-14\"><a href=\"{{ path('add_movie',{'id':detail.id})}}\" class=\"btn btn-primary btn-sm scroll-click\" rel=\"content-y\" role=\"button\">ADD NEW MOVIE</a>
                    </p>
                    <div class=\"profile-info\">
                        <table class=\"table table-striped text-center\">
                            <tbody>
                                {% for movies in actor.movie %}
                                <tr>
                                    <th scope=\"row\"><a href=\"https://www.google.com/search?q={{movies.title}}\" rel=\"search\" target=\"_blank\">{{movies.title}}</a></th>
                                </tr>
                                {% endfor %}
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class=\"col-xl-8 col-lg-8 col-md-8 col-sm-12 mb-30\">
                <div class=\"product-detail-desc pd-20 card-box height-100-p\">
                    <div class=\"pull-right\">
                        <a href=\"{{ path('app_addimage',{'id':detail.id})}}\" class=\"btn btn-primary btn-sm scroll-click\" rel=\"content-y\" role=\"button\">UPLOAD PHOTOS</a>
                    </div>
                    <h4 class=\"mb-20 pt-20\">The photos of {{detail.name}}</h4>
                    <div class=\"row\">
                        {% for list in actor.imageShares %}
                        <div class=\"col-sm-12 col-md-6 mt-4\">
                            <img src=\"{{list.img}}\" alt=\"\">
                        </div>
                        {% endfor %}
                    </div>
                </div>
            </div>
        </div>
\t</div>
{% endblock %}
", "admin/actor/detail.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/ASMactor/templates/admin/actor/detail.html.twig");
    }
}

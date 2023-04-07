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

/* admin/contact/detail.html.twig */
class __TwigTemplate_c4b9235c110fc76f9e30372204ad39cb extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/contact/detail.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/contact/detail.html.twig"));

        $this->parent = $this->loadTemplate("admin/master.html.twig", "admin/contact/detail.html.twig", 1);
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
        echo "        <div class=\"card-box mb-30\">
            <div class=\"clearfix\">
                <div class=\"pull-left\">
                    <h2 class=\"h4 pd-20\">View Message</h2>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-xl-4 col-lg-4 col-md-4 col-sm-12 mb-30\">
                    <div class=\"pd-20 card-box height-100-p\">
                        <h5 class=\"text-center h5 mb-0\">";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["detail"]) || array_key_exists("detail", $context) ? $context["detail"] : (function () { throw new RuntimeError('Variable "detail" does not exist.', 12, $this->source); })()), "subject", [], "any", false, false, false, 12), "html", null, true);
        echo "</h5>
                        <p class=\"text-center text-muted font-14\"></p>
                        <div class=\"profile-info\">
                            <h5 class=\"mb-20 h5 text-blue\">Infomation</h5>
                            <ul>
                                <li>
                                    <span>Name:</span>
                                    ";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["detail"]) || array_key_exists("detail", $context) ? $context["detail"] : (function () { throw new RuntimeError('Variable "detail" does not exist.', 19, $this->source); })()), "Name", [], "any", false, false, false, 19), "html", null, true);
        echo "
                                </li>
                                <li>
                                    <span>Email</span>
                                    ";
        // line 23
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["detail"]) || array_key_exists("detail", $context) ? $context["detail"] : (function () { throw new RuntimeError('Variable "detail" does not exist.', 23, $this->source); })()), "email", [], "any", false, false, false, 23), "html", null, true);
        echo "
                                </li>
                                <li>
                                    <span>Time</span>
                                    ";
        // line 27
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["detail"]) || array_key_exists("detail", $context) ? $context["detail"] : (function () { throw new RuntimeError('Variable "detail" does not exist.', 27, $this->source); })()), "time", [], "any", false, false, false, 27), "H:i"), "html", null, true);
        echo "
                                </li>
                                <li>
                                    <span>Date</span>
                                    ";
        // line 31
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["detail"]) || array_key_exists("detail", $context) ? $context["detail"] : (function () { throw new RuntimeError('Variable "detail" does not exist.', 31, $this->source); })()), "time", [], "any", false, false, false, 31), "Y-m-d"), "html", null, true);
        echo "
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class=\"col-xl-8 col-lg-8 col-md-8 col-sm-12 mb-30\">
                    <div class=\"product-detail-desc pd-20 card-box height-100-p\">
                        <h4 class=\"mb-20 pt-20\">Message</h4>
                        ";
        // line 40
        echo twig_get_attribute($this->env, $this->source, (isset($context["detail"]) || array_key_exists("detail", $context) ? $context["detail"] : (function () { throw new RuntimeError('Variable "detail" does not exist.', 40, $this->source); })()), "message", [], "any", false, false, false, 40);
        echo "
                    </div>
                </div>
            </div>
        </div>
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "admin/contact/detail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 40,  110 => 31,  103 => 27,  96 => 23,  89 => 19,  79 => 12,  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"admin/master.html.twig\" %}
    {% block body %}
        <div class=\"card-box mb-30\">
            <div class=\"clearfix\">
                <div class=\"pull-left\">
                    <h2 class=\"h4 pd-20\">View Message</h2>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-xl-4 col-lg-4 col-md-4 col-sm-12 mb-30\">
                    <div class=\"pd-20 card-box height-100-p\">
                        <h5 class=\"text-center h5 mb-0\">{{detail.subject}}</h5>
                        <p class=\"text-center text-muted font-14\"></p>
                        <div class=\"profile-info\">
                            <h5 class=\"mb-20 h5 text-blue\">Infomation</h5>
                            <ul>
                                <li>
                                    <span>Name:</span>
                                    {{detail.Name}}
                                </li>
                                <li>
                                    <span>Email</span>
                                    {{detail.email}}
                                </li>
                                <li>
                                    <span>Time</span>
                                    {{detail.time|date('H:i')}}
                                </li>
                                <li>
                                    <span>Date</span>
                                    {{detail.time|date('Y-m-d')}}
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class=\"col-xl-8 col-lg-8 col-md-8 col-sm-12 mb-30\">
                    <div class=\"product-detail-desc pd-20 card-box height-100-p\">
                        <h4 class=\"mb-20 pt-20\">Message</h4>
                        {{ detail.message|raw }}
                    </div>
                </div>
            </div>
        </div>
    {% endblock %}
    ", "admin/contact/detail.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/ASMactor/templates/admin/contact/detail.html.twig");
    }
}

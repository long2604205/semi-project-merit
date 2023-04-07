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

/* admin/user/register.html.twig */
class __TwigTemplate_c2702cd9ec6986166d062656d6bb72bc extends Template
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
        return "admin/empty.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/user/register.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/user/register.html.twig"));

        $this->parent = $this->loadTemplate("admin/empty.html.twig", "admin/user/register.html.twig", 1);
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
        echo "    <div class=\"row align-items-center\">
        <div class=\"col-md-6 col-lg-7\">
            <img src=\"vendors/images/login-page-img.png\" alt=\"\">
        </div>
        <div class=\"col-md-6 col-lg-5\">
            <div class=\"login-box bg-white box-shadow border-radius-10\">
                <div class=\"login-title\">
                    <h2 class=\"text-center text-primary\">Sign Up</h2>
                </div>
                <form>
                    <div class=\"input-group custom\">
                        <input type=\"text\" class=\"form-control form-control-lg\" placeholder=\"Username\">
                        <div class=\"input-group-append custom\">
                            <span class=\"input-group-text\"><i class=\"icon-copy dw dw-user1\"></i></span>
                        </div>
                    </div>
                    <div class=\"input-group custom\">
                        <input type=\"password\" class=\"form-control form-control-lg\" placeholder=\"**********\">
                        <div class=\"input-group-append custom\">
                            <span class=\"input-group-text\"><i class=\"dw dw-padlock1\"></i></span>
                        </div>
                    </div>
                    <div class=\"row pb-30\">
                        <div class=\"col-6\">
                            <div class=\"custom-control custom-checkbox\">
                                <input type=\"checkbox\" class=\"custom-control-input\" id=\"customCheck1\">
                                <label class=\"custom-control-label\" for=\"customCheck1\">Remember</label>
                            </div>
                        </div>
                        <div class=\"col-6\">
                            <div class=\"forgot-password\"><a href=\"forgot-password.html\">Forgot Password</a></div>
                        </div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-sm-12\">
                            <div class=\"input-group mb-0\">
                                    <input class=\"btn btn-primary btn-lg btn-block\" type=\"submit\" value=\"Sign Up\">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "admin/user/register.html.twig";
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
        return new Source("{% extends \"admin/empty.html.twig\" %}
{% block body %}
    <div class=\"row align-items-center\">
        <div class=\"col-md-6 col-lg-7\">
            <img src=\"vendors/images/login-page-img.png\" alt=\"\">
        </div>
        <div class=\"col-md-6 col-lg-5\">
            <div class=\"login-box bg-white box-shadow border-radius-10\">
                <div class=\"login-title\">
                    <h2 class=\"text-center text-primary\">Sign Up</h2>
                </div>
                <form>
                    <div class=\"input-group custom\">
                        <input type=\"text\" class=\"form-control form-control-lg\" placeholder=\"Username\">
                        <div class=\"input-group-append custom\">
                            <span class=\"input-group-text\"><i class=\"icon-copy dw dw-user1\"></i></span>
                        </div>
                    </div>
                    <div class=\"input-group custom\">
                        <input type=\"password\" class=\"form-control form-control-lg\" placeholder=\"**********\">
                        <div class=\"input-group-append custom\">
                            <span class=\"input-group-text\"><i class=\"dw dw-padlock1\"></i></span>
                        </div>
                    </div>
                    <div class=\"row pb-30\">
                        <div class=\"col-6\">
                            <div class=\"custom-control custom-checkbox\">
                                <input type=\"checkbox\" class=\"custom-control-input\" id=\"customCheck1\">
                                <label class=\"custom-control-label\" for=\"customCheck1\">Remember</label>
                            </div>
                        </div>
                        <div class=\"col-6\">
                            <div class=\"forgot-password\"><a href=\"forgot-password.html\">Forgot Password</a></div>
                        </div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-sm-12\">
                            <div class=\"input-group mb-0\">
                                    <input class=\"btn btn-primary btn-lg btn-block\" type=\"submit\" value=\"Sign Up\">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
        {# {{ form_start(registrationForm) }}
            {{ form_row(registrationForm.username) }}
            {{ form_row(registrationForm.plainPassword, {
                label: 'Password'
            }) }}
            {{ form_row(registrationForm.agreeTerms) }}
    
            <button type=\"submit\" class=\"btn\">Register</button>
        {{ form_end(registrationForm) }} #}
{% endblock %}", "admin/user/register.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/ASMactor/templates/admin/user/register.html.twig");
    }
}

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

/* admin/user/signin.html.twig */
class __TwigTemplate_c4e5efc7de3da2759517414f547d4bec extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/user/signin.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/user/signin.html.twig"));

        $this->parent = $this->loadTemplate("admin/empty.html.twig", "admin/user/signin.html.twig", 1);
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
        echo "<div class=\"container\">
    <div class=\"row align-items-center\">
        <div class=\"col-md-6 col-lg-7\">
            <img src=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admintemplate/vendors/images/login-page-img.png"), "html", null, true);
        echo "\" alt=\"\">
        </div>
        <div class=\"col-md-6 col-lg-5\">
            <div class=\"login-box bg-white box-shadow border-radius-10\">
                <div class=\"login-title\">
                    <h2 class=\"text-center text-primary\">Sign In</h2>
                </div>
                <form method=\"post\">
                    ";
        // line 14
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 14, $this->source); })())) {
            // line 15
            echo "                        <div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 15, $this->source); })()), "messageKey", [], "any", false, false, false, 15), twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 15, $this->source); })()), "messageData", [], "any", false, false, false, 15), "security"), "html", null, true);
            echo "</div>
                    ";
        }
        // line 17
        echo "                
                    ";
        // line 18
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 18, $this->source); })()), "user", [], "any", false, false, false, 18)) {
            // line 19
            echo "                        <div class=\"alert alert-warning\">
                            You are logged in as ";
            // line 20
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 20, $this->source); })()), "user", [], "any", false, false, false, 20), "userIdentifier", [], "any", false, false, false, 20), "html", null, true);
            echo ", <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\">Logout</a>
                        </div>
                    ";
        }
        // line 23
        echo "                    <div class=\"select-role\">
                    <div class=\"input-group custom\">
                        <input type=\"text\" class=\"form-control form-control-lg\" placeholder=\"Username\" value=\"";
        // line 25
        echo twig_escape_filter($this->env, (isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new RuntimeError('Variable "last_username" does not exist.', 25, $this->source); })()), "html", null, true);
        echo "\" name=\"username\" id=\"inputUsername\"  autocomplete=\"username\" required autofocus>
                        <div class=\"input-group-append custom\">
                            <span class=\"input-group-text\"><i class=\"icon-copy dw dw-user1\"></i></span>
                        </div>
                    </div>
                    <div class=\"input-group custom\">
                        <input type=\"password\" class=\"form-control form-control-lg\" placeholder=\"**********\" name=\"password\" id=\"inputPassword\"  autocomplete=\"current-password\" required>
                        <div class=\"input-group-append custom\">
                            <span class=\"input-group-text\"><i class=\"dw dw-padlock1\"></i></span>
                        </div>
                    </div>
                    <input type=\"hidden\" name=\"_csrf_token\"value=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        echo "\">
                    <div class=\"row pb-30\">
                        <div class=\"col-6\">
                            <div class=\"custom-control custom-checkbox\">
                                <input type=\"checkbox\" name=\"_remember_me\" class=\"custom-control-input\" id=\"customCheck1\">
                                <label class=\"custom-control-label\" for=\"customCheck1\">Remember</label>
                            </div>
                        </div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-sm-12\">
                            <div class=\"input-group mb-0\">
                                    <input class=\"btn btn-primary btn-lg btn-block\" type=\"submit\" value=\"Sign In\">
                            </div>
                        </div>
                    </div>
                </form>
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
        return "admin/user/signin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 36,  112 => 25,  108 => 23,  100 => 20,  97 => 19,  95 => 18,  92 => 17,  86 => 15,  84 => 14,  73 => 6,  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"admin/empty.html.twig\" %}
{% block body %}
<div class=\"container\">
    <div class=\"row align-items-center\">
        <div class=\"col-md-6 col-lg-7\">
            <img src=\"{{asset('admintemplate/vendors/images/login-page-img.png')}}\" alt=\"\">
        </div>
        <div class=\"col-md-6 col-lg-5\">
            <div class=\"login-box bg-white box-shadow border-radius-10\">
                <div class=\"login-title\">
                    <h2 class=\"text-center text-primary\">Sign In</h2>
                </div>
                <form method=\"post\">
                    {% if error %}
                        <div class=\"alert alert-danger\">{{ error.messageKey|trans(error.messageData, 'security') }}</div>
                    {% endif %}
                
                    {% if app.user %}
                        <div class=\"alert alert-warning\">
                            You are logged in as {{ app.user.userIdentifier }}, <a href=\"{{ path('app_logout') }}\">Logout</a>
                        </div>
                    {% endif %}
                    <div class=\"select-role\">
                    <div class=\"input-group custom\">
                        <input type=\"text\" class=\"form-control form-control-lg\" placeholder=\"Username\" value=\"{{ last_username }}\" name=\"username\" id=\"inputUsername\"  autocomplete=\"username\" required autofocus>
                        <div class=\"input-group-append custom\">
                            <span class=\"input-group-text\"><i class=\"icon-copy dw dw-user1\"></i></span>
                        </div>
                    </div>
                    <div class=\"input-group custom\">
                        <input type=\"password\" class=\"form-control form-control-lg\" placeholder=\"**********\" name=\"password\" id=\"inputPassword\"  autocomplete=\"current-password\" required>
                        <div class=\"input-group-append custom\">
                            <span class=\"input-group-text\"><i class=\"dw dw-padlock1\"></i></span>
                        </div>
                    </div>
                    <input type=\"hidden\" name=\"_csrf_token\"value=\"{{ csrf_token('authenticate') }}\">
                    <div class=\"row pb-30\">
                        <div class=\"col-6\">
                            <div class=\"custom-control custom-checkbox\">
                                <input type=\"checkbox\" name=\"_remember_me\" class=\"custom-control-input\" id=\"customCheck1\">
                                <label class=\"custom-control-label\" for=\"customCheck1\">Remember</label>
                            </div>
                        </div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-sm-12\">
                            <div class=\"input-group mb-0\">
                                    <input class=\"btn btn-primary btn-lg btn-block\" type=\"submit\" value=\"Sign In\">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
{% endblock %}", "admin/user/signin.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/ASMactor/templates/admin/user/signin.html.twig");
    }
}

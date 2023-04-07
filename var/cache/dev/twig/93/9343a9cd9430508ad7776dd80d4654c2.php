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

/* admin/user/form.html.twig */
class __TwigTemplate_489d5e4102455239a457bcf029fd9708 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/user/form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/user/form.html.twig"));

        $this->parent = $this->loadTemplate("admin/master.html.twig", "admin/user/form.html.twig", 1);
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
        echo "<!-- horizontal Basic Forms Start -->
<div class=\"pd-20 card-box mb-30\">
\t<div class=\"clearfix\">
\t\t<div class=\"pull-left\">
\t\t\t<h4 class=\"text-blue h4\">";
        // line 7
        echo twig_escape_filter($this->env, (isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 7, $this->source); })()), "html", null, true);
        echo "</h4>
\t\t</div>
\t</div>
    ";
        // line 10
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 10, $this->source); })()), 'form_start');
        echo "
        <div class=\"form-group\">
            <label>Username</label>
            ";
        // line 13
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 13, $this->source); })()), "username", [], "any", false, false, false, 13), 'widget', ["attr" => ["class" => "form-control", "type" => "text"]]);
        // line 18
        echo "
        </div>
\t\t<div class=\"form-group\">
\t\t\t<label>Name</label>
\t\t\t";
        // line 22
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 22, $this->source); })()), "name", [], "any", false, false, false, 22), 'widget', ["attr" => ["class" => "form-control", "type" => "text"]]);
        // line 27
        echo "
\t\t</div>
\t\t<div class=\"form-group\">
\t\t\t<label>Password</label>
\t\t\t";
        // line 31
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 31, $this->source); })()), "password", [], "any", false, false, false, 31), 'widget', ["attr" => ["class" => "form-control", "type" => "password"]]);
        // line 36
        echo "
\t\t</div>
\t\t<div class=\"form-group\">
\t\t\t<label>Email</label>
\t\t\t";
        // line 40
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 40, $this->source); })()), "email", [], "any", false, false, false, 40), 'widget', ["attr" => ["class" => "form-control", "type" => "text"]]);
        // line 45
        echo "
\t\t</div>

\t\t<div class=\"form-group\">
\t\t\t<label>Phone</label>
\t\t\t";
        // line 50
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 50, $this->source); })()), "phone", [], "any", false, false, false, 50), 'widget', ["attr" => ["class" => "form-control", "type" => "text"]]);
        // line 56
        echo "\t\t\t
\t\t</div>
\t\t<div class=\"form-group\">
\t\t\t<label>Image</label>
\t\t\t";
        // line 60
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 60, $this->source); })()), "image", [], "any", false, false, false, 60), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Select Date"]]);
        // line 65
        echo "
\t\t</div>
\t\t<div class=\"form-group text-right\">
\t\t\t<a href=\"";
        // line 68
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user");
        echo "\" class=\"btn btn-secondary\">Back</a>
\t\t\t<button type=\"submit\" class=\"btn btn-primary\">ADD</button>
\t\t</div>
\t";
        // line 71
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 71, $this->source); })()), 'form_end');
        echo "
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "admin/user/form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  140 => 71,  134 => 68,  129 => 65,  127 => 60,  121 => 56,  119 => 50,  112 => 45,  110 => 40,  104 => 36,  102 => 31,  96 => 27,  94 => 22,  88 => 18,  86 => 13,  80 => 10,  74 => 7,  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"admin/master.html.twig\" %}
{% block body %}
<!-- horizontal Basic Forms Start -->
<div class=\"pd-20 card-box mb-30\">
\t<div class=\"clearfix\">
\t\t<div class=\"pull-left\">
\t\t\t<h4 class=\"text-blue h4\">{{title}}</h4>
\t\t</div>
\t</div>
    {{ form_start(form) }}
        <div class=\"form-group\">
            <label>Username</label>
            {{ form_widget(form.username,{
                'attr':{
                    'class':'form-control',
                    'type': 'text'
                }
            }) }}
        </div>
\t\t<div class=\"form-group\">
\t\t\t<label>Name</label>
\t\t\t{{ form_widget(form.name,{
\t\t\t\t'attr':{
\t\t\t\t\t'class':'form-control',
\t\t\t\t\t'type': 'text'
\t\t\t\t}
\t\t\t}) }}
\t\t</div>
\t\t<div class=\"form-group\">
\t\t\t<label>Password</label>
\t\t\t{{ form_widget(form.password,{
\t\t\t\t'attr':{
\t\t\t\t\t'class':'form-control',
\t\t\t\t\t'type': 'password'
\t\t\t\t}
\t\t\t}) }}
\t\t</div>
\t\t<div class=\"form-group\">
\t\t\t<label>Email</label>
\t\t\t{{ form_widget(form.email,{
\t\t\t\t'attr':{
\t\t\t\t\t'class':'form-control',
\t\t\t\t\t'type': 'text'
\t\t\t\t}
\t\t\t}) }}
\t\t</div>

\t\t<div class=\"form-group\">
\t\t\t<label>Phone</label>
\t\t\t{{ form_widget(form.phone,{
\t\t\t\t'attr':{
\t\t\t\t\t'class':'form-control',
                    'type':'text'
\t\t\t\t}

\t\t\t}) }}\t\t\t
\t\t</div>
\t\t<div class=\"form-group\">
\t\t\t<label>Image</label>
\t\t\t{{ form_widget(form.image,{
\t\t\t\t'attr':{
\t\t\t\t\t'class':'form-control',
\t\t\t\t\t'placeholder': 'Select Date'
\t\t\t\t}
\t\t\t}) }}
\t\t</div>
\t\t<div class=\"form-group text-right\">
\t\t\t<a href=\"{{ path('app_user')}}\" class=\"btn btn-secondary\">Back</a>
\t\t\t<button type=\"submit\" class=\"btn btn-primary\">ADD</button>
\t\t</div>
\t{{ form_end(form) }}
</div>
{% endblock %}", "admin/user/form.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/ASMactor/templates/admin/user/form.html.twig");
    }
}

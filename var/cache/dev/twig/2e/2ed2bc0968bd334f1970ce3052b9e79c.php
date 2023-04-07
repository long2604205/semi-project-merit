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

/* admin/movie/create.html.twig */
class __TwigTemplate_b55f601b329d50ea7e134c96c88419f7 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/movie/create.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/movie/create.html.twig"));

        $this->parent = $this->loadTemplate("admin/master.html.twig", "admin/movie/create.html.twig", 1);
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

        echo "\t
<!-- horizontal Basic Forms Start -->
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
\t\t<div class=\"form-group\">
\t\t\t<label>Title</label>
\t\t\t";
        // line 13
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 13, $this->source); })()), "title", [], "any", false, false, false, 13), 'widget', ["attr" => ["class" => "form-control", "type" => "text"]]);
        // line 18
        echo "
\t\t</div>
\t\t<div class=\"form-group\">
\t\t\t<label>Duration</label>
\t\t\t";
        // line 22
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 22, $this->source); })()), "duration", [], "any", false, false, false, 22), 'widget', ["attr" => ["class" => "form-control", "type" => "text"]]);
        // line 27
        echo "
\t\t</div>
\t\t<div class=\"form-group\">
\t\t\t<label>Country</label>
\t\t\t";
        // line 31
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 31, $this->source); })()), "country", [], "any", false, false, false, 31), 'widget', ["attr" => ["class" => "form-control", "type" => "text"]]);
        // line 36
        echo "
\t\t</div>
\t\t<div class=\"form-group\">
\t\t\t<label>Publisher</label>
\t\t\t";
        // line 40
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 40, $this->source); })()), "publisher", [], "any", false, false, false, 40), 'widget', ["attr" => ["class" => "form-control", "type" => "text"]]);
        // line 45
        echo "
\t\t</div>
\t\t<div class=\"form-group\">
\t\t\t<label>Release Year</label>
\t\t\t";
        // line 49
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 49, $this->source); })()), "releaseYear", [], "any", false, false, false, 49), 'widget', ["attr" => ["class" => "form-control"]]);
        // line 54
        echo "\t\t\t
\t\t</div>
\t\t<div class=\"form-group\">
\t\t\t<label>Image</label>
\t\t\t";
        // line 58
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 58, $this->source); })()), "image", [], "any", false, false, false, 58), 'widget', ["attr" => ["class" => "form-control", "type" => "text"]]);
        // line 63
        echo "
\t\t</div>
\t\t<div class=\"form-group\">
\t\t\t<label>Video</label>
\t\t\t";
        // line 67
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 67, $this->source); })()), "video", [], "any", false, false, false, 67), 'widget', ["attr" => ["class" => "form-control", "type" => "text"]]);
        // line 72
        echo "
\t\t</div>
\t\t<div class=\"form-group\">
\t\t\t<label>Description</label>
\t\t\t";
        // line 76
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 76, $this->source); })()), "description", [], "any", false, false, false, 76), 'widget', ["attr" => ["class" => "textarea_editor form-control border-radius-0", "placeholder" => "Enter text ..."]]);
        // line 81
        echo "
\t\t</div>
\t\t<div class=\"form-group text-right\">
\t\t\t<a href=\"";
        // line 84
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_movie");
        echo "\" class=\"btn btn-secondary\">Back</a>
\t\t\t<button type=\"submit\" class=\"btn btn-primary\">ADD</button>
\t\t</div>
\t";
        // line 87
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 87, $this->source); })()), 'form_end');
        echo "
</div>
<!-- horizontal Basic Forms End -->
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "admin/movie/create.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  155 => 87,  149 => 84,  144 => 81,  142 => 76,  136 => 72,  134 => 67,  128 => 63,  126 => 58,  120 => 54,  118 => 49,  112 => 45,  110 => 40,  104 => 36,  102 => 31,  96 => 27,  94 => 22,  88 => 18,  86 => 13,  80 => 10,  74 => 7,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"admin/master.html.twig\" %}
{% block body %}\t
<!-- horizontal Basic Forms Start -->
<div class=\"pd-20 card-box mb-30\">
\t<div class=\"clearfix\">
\t\t<div class=\"pull-left\">
\t\t\t<h4 class=\"text-blue h4\">{{title}}</h4>
\t\t</div>
\t</div>
    {{ form_start(form) }}
\t\t<div class=\"form-group\">
\t\t\t<label>Title</label>
\t\t\t{{ form_widget(form.title,{
\t\t\t\t'attr':{
\t\t\t\t\t'class':'form-control',
\t\t\t\t\t'type': 'text'
\t\t\t\t}
\t\t\t}) }}
\t\t</div>
\t\t<div class=\"form-group\">
\t\t\t<label>Duration</label>
\t\t\t{{ form_widget(form.duration,{
\t\t\t\t'attr':{
\t\t\t\t\t'class':'form-control',
\t\t\t\t\t'type': 'text'
\t\t\t\t}
\t\t\t}) }}
\t\t</div>
\t\t<div class=\"form-group\">
\t\t\t<label>Country</label>
\t\t\t{{ form_widget(form.country,{
\t\t\t\t'attr':{
\t\t\t\t\t'class':'form-control',
\t\t\t\t\t'type': 'text'
\t\t\t\t}
\t\t\t}) }}
\t\t</div>
\t\t<div class=\"form-group\">
\t\t\t<label>Publisher</label>
\t\t\t{{ form_widget(form.publisher,{
\t\t\t\t'attr':{
\t\t\t\t\t'class':'form-control',
\t\t\t\t\t'type': 'text'
\t\t\t\t}
\t\t\t}) }}
\t\t</div>
\t\t<div class=\"form-group\">
\t\t\t<label>Release Year</label>
\t\t\t{{ form_widget(form.releaseYear,{
\t\t\t\t'attr':{
\t\t\t\t\t'class':'form-control',
\t\t\t\t}

\t\t\t}) }}\t\t\t
\t\t</div>
\t\t<div class=\"form-group\">
\t\t\t<label>Image</label>
\t\t\t{{ form_widget(form.image,{
\t\t\t\t'attr':{
\t\t\t\t\t'class':'form-control',
\t\t\t\t\t'type': 'text'
\t\t\t\t}
\t\t\t}) }}
\t\t</div>
\t\t<div class=\"form-group\">
\t\t\t<label>Video</label>
\t\t\t{{ form_widget(form.video,{
\t\t\t\t'attr':{
\t\t\t\t\t'class':'form-control',
\t\t\t\t\t'type': 'text'
\t\t\t\t}
\t\t\t}) }}
\t\t</div>
\t\t<div class=\"form-group\">
\t\t\t<label>Description</label>
\t\t\t{{ form_widget(form.description,{
\t\t\t\t'attr':{
\t\t\t\t\t'class':'textarea_editor form-control border-radius-0',
\t\t\t\t\t'placeholder' : 'Enter text ...',
\t\t\t\t}
\t\t\t}) }}
\t\t</div>
\t\t<div class=\"form-group text-right\">
\t\t\t<a href=\"{{ path('app_movie')}}\" class=\"btn btn-secondary\">Back</a>
\t\t\t<button type=\"submit\" class=\"btn btn-primary\">ADD</button>
\t\t</div>
\t{{ form_end(form) }}
</div>
<!-- horizontal Basic Forms End -->
{% endblock %}
", "admin/movie/create.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/ASMactor/templates/admin/movie/create.html.twig");
    }
}

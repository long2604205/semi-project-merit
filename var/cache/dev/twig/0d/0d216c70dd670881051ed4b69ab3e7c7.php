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

/* admin/actor/edit.html.twig */
class __TwigTemplate_a413a3cf6be2b2c5176ae1e3ea526296 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/actor/edit.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/actor/edit.html.twig"));

        $this->parent = $this->loadTemplate("admin/master.html.twig", "admin/actor/edit.html.twig", 1);
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
        <div class=\"clearfix\">
            <div class=\"pull-left\">
                <h4 class=\"text-blue h4\">";
        // line 7
        echo twig_escape_filter($this->env, (isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 7, $this->source); })()), "html", null, true);
        echo "</h4>
            </div>
        </div>
        ";
        // line 10
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 10, $this->source); })()), 'form_start');
        echo "
            <div class=\"form-group\">
                <label>Name</label>
                ";
        // line 13
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 13, $this->source); })()), "name", [], "any", false, false, false, 13), 'widget', ["attr" => ["class" => "form-control", "type" => "text"]]);
        // line 18
        echo "
            </div>
            <div class=\"form-group\">
                <label>Birth Name</label>
                ";
        // line 22
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 22, $this->source); })()), "birthName", [], "any", false, false, false, 22), 'widget', ["attr" => ["class" => "form-control", "type" => "text"]]);
        // line 27
        echo "
            </div>
            <div class=\"form-group\">
                <label>Nick Name</label>
                ";
        // line 31
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 31, $this->source); })()), "nickName", [], "any", false, false, false, 31), 'widget', ["attr" => ["class" => "form-control", "type" => "text"]]);
        // line 36
        echo "
            </div>
    
            <div class=\"form-group\">
                <label>Gender</label>
                ";
        // line 41
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 41, $this->source); })()), "gender", [], "any", false, false, false, 41), 'widget', ["attr" => ["class" => "custom-select col-12"]]);
        // line 46
        echo "\t\t\t
            </div>
            <div class=\"form-group\">
                <label>Birthday</label>
                ";
        // line 50
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 50, $this->source); })()), "birth", [], "any", false, false, false, 50), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Select Date"]]);
        // line 55
        echo "
            </div>
            <div class=\"form-group\">
                <label>Born</label>
                ";
        // line 59
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 59, $this->source); })()), "born", [], "any", false, false, false, 59), 'widget', ["attr" => ["class" => "form-control", "type" => "text"]]);
        // line 64
        echo "
            </div>
            <div class=\"form-group\">
                <label>Country</label>
                ";
        // line 68
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 68, $this->source); })()), "country", [], "any", false, false, false, 68), 'widget', ["attr" => ["class" => "form-control", "type" => "text"]]);
        // line 73
        echo "
            </div>
            <div class=\"form-group\">
                <label>Height</label>
                ";
        // line 77
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 77, $this->source); })()), "height", [], "any", false, false, false, 77), 'widget', ["attr" => ["class" => "form-control", "type" => "text"]]);
        // line 82
        echo "
            </div>
            <div class=\"form-group\">
                <label>Image</label>
                ";
        // line 86
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 86, $this->source); })()), "image", [], "any", false, false, false, 86), 'widget', ["attr" => ["class" => "form-control-file form-control height-auto", "type" => "file"]]);
        // line 91
        echo "
            </div>
            <div class=\"form-group\">
                <label>Biography</label>
                ";
        // line 95
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 95, $this->source); })()), "biography", [], "any", false, false, false, 95), 'widget', ["attr" => ["class" => "textarea_editor form-control border-radius-0", "placeholder" => "Enter text ..."]]);
        // line 100
        echo "
            </div>
            <div class=\"form-group text-right\">
                <a href=\"";
        // line 103
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_actor");
        echo "\" class=\"btn btn-secondary\">Back</a>
                <button type=\"submit\" class=\"btn btn-primary\">Update</button>
            </div>
        ";
        // line 106
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 106, $this->source); })()), 'form_end');
        echo "
    </div>
    <!-- horizontal Basic Forms End -->
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "admin/actor/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  172 => 106,  166 => 103,  161 => 100,  159 => 95,  153 => 91,  151 => 86,  145 => 82,  143 => 77,  137 => 73,  135 => 68,  129 => 64,  127 => 59,  121 => 55,  119 => 50,  113 => 46,  111 => 41,  104 => 36,  102 => 31,  96 => 27,  94 => 22,  88 => 18,  86 => 13,  80 => 10,  74 => 7,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"admin/master.html.twig\" %}
    {% block body %}\t
    <!-- horizontal Basic Forms Start -->
    <div class=\"pd-20 card-box mb-30\">
        <div class=\"clearfix\">
            <div class=\"pull-left\">
                <h4 class=\"text-blue h4\">{{title}}</h4>
            </div>
        </div>
        {{ form_start(form) }}
            <div class=\"form-group\">
                <label>Name</label>
                {{ form_widget(form.name,{
                    'attr':{
                        'class':'form-control',
                        'type': 'text'
                    }
                }) }}
            </div>
            <div class=\"form-group\">
                <label>Birth Name</label>
                {{ form_widget(form.birthName,{
                    'attr':{
                        'class':'form-control',
                        'type': 'text'
                    }
                }) }}
            </div>
            <div class=\"form-group\">
                <label>Nick Name</label>
                {{ form_widget(form.nickName,{
                    'attr':{
                        'class':'form-control',
                        'type': 'text'
                    }
                }) }}
            </div>
    
            <div class=\"form-group\">
                <label>Gender</label>
                {{ form_widget(form.gender,{
                    'attr':{
                        'class':'custom-select col-12',
                    }
    
                }) }}\t\t\t
            </div>
            <div class=\"form-group\">
                <label>Birthday</label>
                {{ form_widget(form.birth,{
                    'attr':{
                        'class':'form-control',
                        'placeholder': 'Select Date'
                    }
                }) }}
            </div>
            <div class=\"form-group\">
                <label>Born</label>
                {{ form_widget(form.born,{
                    'attr':{
                        'class':'form-control',
                        'type': 'text'
                    }
                }) }}
            </div>
            <div class=\"form-group\">
                <label>Country</label>
                {{ form_widget(form.country,{
                    'attr':{
                        'class':'form-control',
                        'type': 'text'
                    }
                }) }}
            </div>
            <div class=\"form-group\">
                <label>Height</label>
                {{ form_widget(form.height,{
                    'attr':{
                        'class':'form-control',
                        'type': 'text'
                    }
                }) }}
            </div>
            <div class=\"form-group\">
                <label>Image</label>
                {{ form_widget(form.image,{
                    'attr':{
                        'class':'form-control-file form-control height-auto',
                        'type': 'file'
                    }
                }) }}
            </div>
            <div class=\"form-group\">
                <label>Biography</label>
                {{ form_widget(form.biography,{
                    'attr':{
                        'class':'textarea_editor form-control border-radius-0',
                        'placeholder' : 'Enter text ...',
                    }
                }) }}
            </div>
            <div class=\"form-group text-right\">
                <a href=\"{{ path('app_actor')}}\" class=\"btn btn-secondary\">Back</a>
                <button type=\"submit\" class=\"btn btn-primary\">Update</button>
            </div>
        {{ form_end(form) }}
    </div>
    <!-- horizontal Basic Forms End -->
    {% endblock %}
    ", "admin/actor/edit.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/ASMactor/templates/admin/actor/edit.html.twig");
    }
}

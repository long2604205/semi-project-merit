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

/* admin/actor/addimage.html.twig */
class __TwigTemplate_f256273cbba169cb7a160532dbc236d9 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/actor/addimage.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/actor/addimage.html.twig"));

        $this->parent = $this->loadTemplate("admin/master.html.twig", "admin/actor/addimage.html.twig", 1);
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
                <h4 class=\"text-blue h4\">Upload a new photo for: ";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["actor"]) || array_key_exists("actor", $context) ? $context["actor"] : (function () { throw new RuntimeError('Variable "actor" does not exist.', 7, $this->source); })()), "name", [], "any", false, false, false, 7), "html", null, true);
        echo "</h4>
            </div>
        </div>
        ";
        // line 10
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 10, $this->source); })()), 'form_start');
        echo "
            ";
        // line 19
        echo "            <div class=\"form-group\">
                <label>Image</label>
                ";
        // line 21
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 21, $this->source); })()), "img", [], "any", false, false, false, 21), 'widget', ["attr" => ["class" => "form-control-file form-control height-auto"]]);
        // line 25
        echo "
            </div>
            <div class=\"form-group text-right\">
                <button type=\"submit\" class=\"btn btn-primary\">ADD</button>
            </div>
        ";
        // line 30
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 30, $this->source); })()), 'form_end');
        echo "
    </div>
    <!-- horizontal Basic Forms End -->
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "admin/actor/addimage.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 30,  90 => 25,  88 => 21,  84 => 19,  80 => 10,  74 => 7,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"admin/master.html.twig\" %}
    {% block body %}\t
    <!-- horizontal Basic Forms Start -->
    <div class=\"pd-20 card-box mb-30\">
        <div class=\"clearfix\">
            <div class=\"pull-left\">
                <h4 class=\"text-blue h4\">Upload a new photo for: {{actor.name}}</h4>
            </div>
        </div>
        {{ form_start(form) }}
            {# <div class=\"form-group\">
                <label>Actor</label>
                {{ form_widget(form.actor,{
                    'attr':{
                        'value':\"1\",
                    }
                }) }}
            </div> #}
            <div class=\"form-group\">
                <label>Image</label>
                {{ form_widget(form.img,{
                    'attr':{
                        'class':'form-control-file form-control height-auto',
                    }
                }) }}
            </div>
            <div class=\"form-group text-right\">
                <button type=\"submit\" class=\"btn btn-primary\">ADD</button>
            </div>
        {{ form_end(form) }}
    </div>
    <!-- horizontal Basic Forms End -->
    {% endblock %}
    ", "admin/actor/addimage.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/ASMactor/templates/admin/actor/addimage.html.twig");
    }
}

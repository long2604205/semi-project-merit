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

/* admin/master.html.twig */
class __TwigTemplate_aed19f01874db44c5c396b8545ed9b32 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/master.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/master.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
\t<!-- Start head -->
\t";
        // line 5
        echo twig_include($this->env, $context, "admin/widgets/head.html.twig");
        echo "
\t<!-- End head -->
</head>
<body>
\t<!-- Start pre-load -->
\t";
        // line 10
        echo twig_include($this->env, $context, "admin/widgets/pageload.html.twig");
        echo "
\t<!-- End pre-load -->

\t<!-- Start header -->
\t";
        // line 14
        echo twig_include($this->env, $context, "admin/widgets/navbar.html.twig");
        echo "
\t<!-- End header -->

\t<!-- Start side bar -->
\t";
        // line 18
        echo twig_include($this->env, $context, "admin/widgets/sidebar.html.twig");
        echo "
\t<!-- End side bar -->

\t<div class=\"main-container\">
\t\t<div class=\"pd-ltr-20\">
\t\t\t";
        // line 24
        echo "\t\t";
        $this->displayBlock('body', $context, $blocks);
        // line 25
        echo "\t\t</div>
\t</div>
\t<!-- js -->
\t";
        // line 28
        echo twig_include($this->env, $context, "admin/widgets/script.html.twig");
        echo "
\t<!-- end js -->
</body>
</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 24
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "admin/master.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 24,  88 => 28,  83 => 25,  80 => 24,  72 => 18,  65 => 14,  58 => 10,  50 => 5,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
<head>
\t<!-- Start head -->
\t{{ include('admin/widgets/head.html.twig') }}
\t<!-- End head -->
</head>
<body>
\t<!-- Start pre-load -->
\t{{ include('admin/widgets/pageload.html.twig') }}
\t<!-- End pre-load -->

\t<!-- Start header -->
\t{{ include('admin/widgets/navbar.html.twig') }}
\t<!-- End header -->

\t<!-- Start side bar -->
\t{{ include('admin/widgets/sidebar.html.twig') }}
\t<!-- End side bar -->

\t<div class=\"main-container\">
\t\t<div class=\"pd-ltr-20\">
\t\t\t{# {{ include('admin/system/system.html.twig') }} #}
\t\t{% block body %}{% endblock %}
\t\t</div>
\t</div>
\t<!-- js -->
\t{{ include('admin/widgets/script.html.twig') }}
\t<!-- end js -->
</body>
</html>", "admin/master.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/ASMactor/templates/admin/master.html.twig");
    }
}

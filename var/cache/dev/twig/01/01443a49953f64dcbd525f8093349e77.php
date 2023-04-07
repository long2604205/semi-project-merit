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

/* client/master.html.twig */
class __TwigTemplate_f4e6615668ef47a5a1bdfef060bdd2bb extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "client/master.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "client/master.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
\t<head>
\t\t<!-- Start head -->
\t\t";
        // line 5
        echo twig_include($this->env, $context, "client/widgets/head.html.twig");
        echo "
\t\t<!-- End head -->
\t</head>

\t<body>
\t\t<!-- Start header -->
\t\t";
        // line 11
        echo twig_include($this->env, $context, "client/widgets/navbar.html.twig");
        echo "
\t\t<!-- End header -->

\t\t";
        // line 14
        $this->displayBlock('body', $context, $blocks);
        // line 15
        echo "
\t\t<!-- footer -->
\t\t";
        // line 17
        echo twig_include($this->env, $context, "client/widgets/footer.html.twig");
        echo "
\t\t<!-- end footer -->

\t\t<!-- js -->
\t";
        // line 21
        echo twig_include($this->env, $context, "client/widgets/script.html.twig");
        echo "
\t\t<!-- end js -->
\t</body>
</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 14
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
        return "client/master.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 14,  78 => 21,  71 => 17,  67 => 15,  65 => 14,  59 => 11,  50 => 5,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
\t<head>
\t\t<!-- Start head -->
\t\t{{ include('client/widgets/head.html.twig') }}
\t\t<!-- End head -->
\t</head>

\t<body>
\t\t<!-- Start header -->
\t\t{{ include('client/widgets/navbar.html.twig') }}
\t\t<!-- End header -->

\t\t{% block body %}{% endblock %}

\t\t<!-- footer -->
\t\t{{ include('client/widgets/footer.html.twig') }}
\t\t<!-- end footer -->

\t\t<!-- js -->
\t{{ include('client/widgets/script.html.twig') }}
\t\t<!-- end js -->
\t</body>
</html>
", "client/master.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/ASMactor/templates/client/master.html.twig");
    }
}

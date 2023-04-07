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

/* admin/empty.html.twig */
class __TwigTemplate_ea8aa1d40c11ff503f4a4bd4dc3fd734 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/empty.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/empty.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>

<head>
\t<!-- Basic Page Info -->
\t<meta charset=\"utf-8\">
\t<title>Mines – Actor & Movie Infomation</title>
\t<!-- Site favicon -->
\t<link rel=\"icon\" type=\"image/png\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("main/img/cinema-icon.png"), "html", null, true);
        echo "\" sizes=\"32x32\">
\t<link rel=\"apple-touch-icon\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("main/img/cinema-icon.png"), "html", null, true);
        echo "\">

\t<!-- Mobile Specific Metas -->
\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1\">

\t<!-- Google Font -->
\t<link href=\"https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap\" rel=\"stylesheet\">
\t<!-- CSS -->
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admintemplate/vendors/styles/core.css"), "html", null, true);
        echo "\">
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admintemplate/vendors/styles/icon-font.min.css"), "html", null, true);
        echo "\">
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admintemplate/src/plugins/jquery-steps/jquery.steps.css"), "html", null, true);
        echo "\">
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admintemplate/vendors/styles/style.css"), "html", null, true);
        echo "\">

\t<!-- Global site tag (gtag.js) - Google Analytics -->
\t<script async src=\"https://www.googletagmanager.com/gtag/js?id=UA-119386393-1\"></script>
\t<script>
\t\twindow.dataLayer = window.dataLayer || [];
\t\tfunction gtag(){dataLayer.push(arguments);}
\t\tgtag('js', new Date());

\t\tgtag('config', 'UA-119386393-1');
\t</script>
</head>

<body class=\"login-page\">
\t<div class=\"login-header box-shadow\">
\t\t<div class=\"container-fluid d-flex justify-content-between align-items-center\">
\t\t\t<div class=\"brand-logo\">
\t\t\t\t<a href=\"";
        // line 38
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        echo "\">
\t\t\t\t\t<img src=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("main/img/Logo-main-dark.png"), "html", null, true);
        echo "\" alt=\"\">
\t\t\t\t</a>
\t\t\t</div>
\t\t</div>
\t</div>
\t<div class=\"register-page-wrap d-flex align-items-center flex-wrap justify-content-center\">
\t\t<div class=\"container\">
            ";
        // line 46
        $this->displayBlock('body', $context, $blocks);
        // line 47
        echo "\t\t</div>
\t</div>
\t<!-- js -->
\t<script src=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admintemplate/vendors/scripts/core.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admintemplate/vendors/scripts/script.min.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admintemplate/vendors/scripts/process.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admintemplate/vendors/scripts/layout-settings.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admintemplate/src/plugins/jquery-steps/jquery.steps.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admintemplate/vendors/scripts/steps-setting.js"), "html", null, true);
        echo "\"></script>
</body>

</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 46
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
        return "admin/empty.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  156 => 46,  142 => 55,  138 => 54,  134 => 53,  130 => 52,  126 => 51,  122 => 50,  117 => 47,  115 => 46,  105 => 39,  101 => 38,  81 => 21,  77 => 20,  73 => 19,  69 => 18,  58 => 10,  54 => 9,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>

<head>
\t<!-- Basic Page Info -->
\t<meta charset=\"utf-8\">
\t<title>Mines – Actor & Movie Infomation</title>
\t<!-- Site favicon -->
\t<link rel=\"icon\" type=\"image/png\" href=\"{{asset('main/img/cinema-icon.png')}}\" sizes=\"32x32\">
\t<link rel=\"apple-touch-icon\" href=\"{{asset('main/img/cinema-icon.png')}}\">

\t<!-- Mobile Specific Metas -->
\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1\">

\t<!-- Google Font -->
\t<link href=\"https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap\" rel=\"stylesheet\">
\t<!-- CSS -->
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"{{asset('admintemplate/vendors/styles/core.css')}}\">
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"{{asset('admintemplate/vendors/styles/icon-font.min.css')}}\">
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"{{asset('admintemplate/src/plugins/jquery-steps/jquery.steps.css')}}\">
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"{{asset('admintemplate/vendors/styles/style.css')}}\">

\t<!-- Global site tag (gtag.js) - Google Analytics -->
\t<script async src=\"https://www.googletagmanager.com/gtag/js?id=UA-119386393-1\"></script>
\t<script>
\t\twindow.dataLayer = window.dataLayer || [];
\t\tfunction gtag(){dataLayer.push(arguments);}
\t\tgtag('js', new Date());

\t\tgtag('config', 'UA-119386393-1');
\t</script>
</head>

<body class=\"login-page\">
\t<div class=\"login-header box-shadow\">
\t\t<div class=\"container-fluid d-flex justify-content-between align-items-center\">
\t\t\t<div class=\"brand-logo\">
\t\t\t\t<a href=\"{{path('app_login')}}\">
\t\t\t\t\t<img src=\"{{asset('main/img/Logo-main-dark.png')}}\" alt=\"\">
\t\t\t\t</a>
\t\t\t</div>
\t\t</div>
\t</div>
\t<div class=\"register-page-wrap d-flex align-items-center flex-wrap justify-content-center\">
\t\t<div class=\"container\">
            {% block body %}{% endblock %}
\t\t</div>
\t</div>
\t<!-- js -->
\t<script src=\"{{asset('admintemplate/vendors/scripts/core.js')}}\"></script>
\t<script src=\"{{asset('admintemplate/vendors/scripts/script.min.js')}}\"></script>
\t<script src=\"{{asset('admintemplate/vendors/scripts/process.js')}}\"></script>
\t<script src=\"{{asset('admintemplate/vendors/scripts/layout-settings.js')}}\"></script>
\t<script src=\"{{asset('admintemplate/src/plugins/jquery-steps/jquery.steps.js')}}\"></script>
\t<script src=\"{{asset('admintemplate/vendors/scripts/steps-setting.js')}}\"></script>
</body>

</html>", "admin/empty.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/ASMactor/templates/admin/empty.html.twig");
    }
}

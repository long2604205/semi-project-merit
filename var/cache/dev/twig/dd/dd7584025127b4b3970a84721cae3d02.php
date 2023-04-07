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

/* admin/widgets/head.html.twig */
class __TwigTemplate_9a189bf0b38923f550db1d1af0619969 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/widgets/head.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/widgets/head.html.twig"));

        // line 1
        echo "<!-- Basic Page Info -->
\t<meta charset=\"utf-8\">
\t<title>Mines – Actor & Movie Infomation</title>
\t<!-- Site favicon -->
\t<link rel=\"icon\" type=\"image/png\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("main/img/cinema-icon.png"), "html", null, true);
        echo "\" sizes=\"32x32\">
\t<link rel=\"apple-touch-icon\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("main/img/cinema-icon.png"), "html", null, true);
        echo "\">

\t<!-- Mobile Specific Metas -->
\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1\">

\t<!-- Google Font -->
\t<link href=\"https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap\" rel=\"stylesheet\">
\t<!-- CSS -->
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admintemplate/vendors/styles/core.css"), "html", null, true);
        echo "\">
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admintemplate/vendors/styles/icon-font.min.css"), "html", null, true);
        echo "\">
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admintemplate/src/plugins/datatables/css/dataTables.bootstrap4.min.css"), "html", null, true);
        echo "\">
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admintemplate/src/plugins/datatables/css/responsive.bootstrap4.min.css"), "html", null, true);
        echo "\">
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admintemplate/vendors/styles/style.css"), "html", null, true);
        echo "\">

\t<!-- Global site tag (gtag.js) - Google Analytics -->
\t<script async src=\"https://www.googletagmanager.com/gtag/js?id=UA-119386393-1\"></script>
\t<script>
\t\twindow.dataLayer = window.dataLayer || [];
\t\tfunction gtag(){dataLayer.push(arguments);}
\t\tgtag('js', new Date());

\t\tgtag('config', 'UA-119386393-1');
\t</script>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "admin/widgets/head.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 18,  76 => 17,  72 => 16,  68 => 15,  64 => 14,  53 => 6,  49 => 5,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- Basic Page Info -->
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
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"{{asset('admintemplate/src/plugins/datatables/css/dataTables.bootstrap4.min.css')}}\">
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"{{asset('admintemplate/src/plugins/datatables/css/responsive.bootstrap4.min.css')}}\">
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"{{asset('admintemplate/vendors/styles/style.css')}}\">

\t<!-- Global site tag (gtag.js) - Google Analytics -->
\t<script async src=\"https://www.googletagmanager.com/gtag/js?id=UA-119386393-1\"></script>
\t<script>
\t\twindow.dataLayer = window.dataLayer || [];
\t\tfunction gtag(){dataLayer.push(arguments);}
\t\tgtag('js', new Date());

\t\tgtag('config', 'UA-119386393-1');
\t</script>", "admin/widgets/head.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/ASMactor/templates/admin/widgets/head.html.twig");
    }
}

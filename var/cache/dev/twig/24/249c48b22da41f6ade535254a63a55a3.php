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

/* error/404.html.twig */
class __TwigTemplate_f615d2446541fbdbbe602de039493acd extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "error/404.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "error/404.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
\t<meta charset=\"utf-8\">
\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">

\t<!-- CSS -->
\t<link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("main/css/bootstrap-reboot.min.css"), "html", null, true);
        echo "\">
\t<link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("main/css/bootstrap-grid.min.css"), "html", null, true);
        echo "\">
\t<link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("main/css/owl.carousel.min.css"), "html", null, true);
        echo "\">
\t<link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("main/css/slider-radio.css"), "html", null, true);
        echo "\">
\t<link rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("main/css/select2.min.css"), "html", null, true);
        echo "\">
\t<link rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("main/css/magnific-popup.css"), "html", null, true);
        echo "\">
\t<link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("main/css/plyr.css"), "html", null, true);
        echo "\">
\t<link rel=\"stylesheet\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("main/css/main.css"), "html", null, true);
        echo "\">

\t<!-- Favicons -->
    <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("main/img/cinema-icon.png"), "html", null, true);
        echo "\" sizes=\"32x32\">
    <link rel=\"apple-touch-icon\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("main/img/cinema-icon.png"), "html", null, true);
        echo "\">

\t<meta name=\"description\" content=\"\">
\t<meta name=\"keywords\" content=\"\">
\t<meta name=\"author\" content=\"Dmitry Volkov\">
    <title>Mines – Actor & Movie Infomation</title>
</head>
<body>
\t<!-- page 404 -->
\t<div class=\"page-404 section--full-bg\" data-bg=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("main/img/bg.jpg"), "html", null, true);
        echo "\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t<div class=\"page-404__wrap\">
\t\t\t\t\t\t<div class=\"page-404__content\">
\t\t\t\t\t\t\t<h1 class=\"page-404__title\">404</h1>
\t\t\t\t\t\t\t<p class=\"page-404__text\">The page you are looking for not available!</p>
\t\t\t\t\t\t\t<a href=\"";
        // line 36
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_client");
        echo "\" class=\"page-404__btn\">go back</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t<!-- end page 404 -->

\t<!-- JS -->
\t<script src=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("main/js/jquery-3.5.1.min.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("main/js/bootstrap.bundle.min.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("main/js/owl.carousel.min.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("main/js/slider-radio.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("main/js/select2.min.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("main/js/smooth-scrollbar.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("main/js/jquery.magnific-popup.min.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("main/js/plyr.min.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("main/js/main.js"), "html", null, true);
        echo "\"></script>
</body>
</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "error/404.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  158 => 54,  154 => 53,  150 => 52,  146 => 51,  142 => 50,  138 => 49,  134 => 48,  130 => 47,  126 => 46,  113 => 36,  102 => 28,  90 => 19,  86 => 18,  80 => 15,  76 => 14,  72 => 13,  68 => 12,  64 => 11,  60 => 10,  56 => 9,  52 => 8,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
\t<meta charset=\"utf-8\">
\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">

\t<!-- CSS -->
\t<link rel=\"stylesheet\" href=\"{{asset('main/css/bootstrap-reboot.min.css')}}\">
\t<link rel=\"stylesheet\" href=\"{{asset('main/css/bootstrap-grid.min.css')}}\">
\t<link rel=\"stylesheet\" href=\"{{asset('main/css/owl.carousel.min.css')}}\">
\t<link rel=\"stylesheet\" href=\"{{asset('main/css/slider-radio.css')}}\">
\t<link rel=\"stylesheet\" href=\"{{asset('main/css/select2.min.css')}}\">
\t<link rel=\"stylesheet\" href=\"{{asset('main/css/magnific-popup.css')}}\">
\t<link rel=\"stylesheet\" href=\"{{asset('main/css/plyr.css')}}\">
\t<link rel=\"stylesheet\" href=\"{{asset('main/css/main.css')}}\">

\t<!-- Favicons -->
    <link rel=\"icon\" type=\"image/png\" href=\"{{asset('main/img/cinema-icon.png')}}\" sizes=\"32x32\">
    <link rel=\"apple-touch-icon\" href=\"{{asset('main/img/cinema-icon.png')}}\">

\t<meta name=\"description\" content=\"\">
\t<meta name=\"keywords\" content=\"\">
\t<meta name=\"author\" content=\"Dmitry Volkov\">
    <title>Mines – Actor & Movie Infomation</title>
</head>
<body>
\t<!-- page 404 -->
\t<div class=\"page-404 section--full-bg\" data-bg=\"{{asset('main/img/bg.jpg')}}\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t<div class=\"page-404__wrap\">
\t\t\t\t\t\t<div class=\"page-404__content\">
\t\t\t\t\t\t\t<h1 class=\"page-404__title\">404</h1>
\t\t\t\t\t\t\t<p class=\"page-404__text\">The page you are looking for not available!</p>
\t\t\t\t\t\t\t<a href=\"{{path('app_client')}}\" class=\"page-404__btn\">go back</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t<!-- end page 404 -->

\t<!-- JS -->
\t<script src=\"{{asset('main/js/jquery-3.5.1.min.js')}}\"></script>
\t<script src=\"{{asset('main/js/bootstrap.bundle.min.js')}}\"></script>
\t<script src=\"{{asset('main/js/owl.carousel.min.js')}}\"></script>
\t<script src=\"{{asset('main/js/slider-radio.js')}}\"></script>
\t<script src=\"{{asset('main/js/select2.min.js')}}\"></script>
\t<script src=\"{{asset('main/js/smooth-scrollbar.js')}}\"></script>
\t<script src=\"{{asset('main/js/jquery.magnific-popup.min.js')}}\"></script>
\t<script src=\"{{asset('main/js/plyr.min.js')}}\"></script>
\t<script src=\"{{asset('main/js/main.js')}}\"></script>
</body>
</html>", "error/404.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/ASMactor/templates/error/404.html.twig");
    }
}

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

/* client/widgets/head.html.twig */
class __TwigTemplate_a3926871d897b999bdf1fdebf26c6883 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "client/widgets/head.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "client/widgets/head.html.twig"));

        // line 1
        echo "<meta charset=\"utf-8\">
<meta
name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">

<!-- CSS -->
<link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("main/css/bootstrap-reboot.min.css"), "html", null, true);
        echo "\">
<link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("main/css/bootstrap-grid.min.css"), "html", null, true);
        echo "\">
<link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("main/css/owl.carousel.min.css"), "html", null, true);
        echo "\">
<link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("main/css/slider-radio.css"), "html", null, true);
        echo "\">
<link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("main/css/select2.min.css"), "html", null, true);
        echo "\">
<link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("main/css/magnific-popup.css"), "html", null, true);
        echo "\">
<link rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("main/css/plyr.css"), "html", null, true);
        echo "\">
<link
rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("main/css/main.css"), "html", null, true);
        echo "\">

<!-- Favicons -->
<link rel=\"icon\" type=\"image/png\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("main/img/cinema-icon.png"), "html", null, true);
        echo "\" sizes=\"32x32\">
<link rel=\"apple-touch-icon\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("main/img/cinema-icon.png"), "html", null, true);
        echo "\">
<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css\" integrity=\"sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==\" crossorigin=\"anonymous\" referrerpolicy=\"no-referrer\" />

<meta name=\"description\" content=\"\">
<meta name=\"keywords\" content=\"\">
<meta name=\"author\" content=\"Dmitry Volkov\">
<title>Mines – Actor & Movie Infomation</title>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "client/widgets/head.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 18,  85 => 17,  79 => 14,  74 => 12,  70 => 11,  66 => 10,  62 => 9,  58 => 8,  54 => 7,  50 => 6,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<meta charset=\"utf-8\">
<meta
name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">

<!-- CSS -->
<link rel=\"stylesheet\" href=\"{{asset('main/css/bootstrap-reboot.min.css')}}\">
<link rel=\"stylesheet\" href=\"{{asset('main/css/bootstrap-grid.min.css')}}\">
<link rel=\"stylesheet\" href=\"{{asset('main/css/owl.carousel.min.css')}}\">
<link rel=\"stylesheet\" href=\"{{asset('main/css/slider-radio.css')}}\">
<link rel=\"stylesheet\" href=\"{{asset('main/css/select2.min.css')}}\">
<link rel=\"stylesheet\" href=\"{{asset('main/css/magnific-popup.css')}}\">
<link rel=\"stylesheet\" href=\"{{asset('main/css/plyr.css')}}\">
<link
rel=\"stylesheet\" href=\"{{asset('main/css/main.css')}}\">

<!-- Favicons -->
<link rel=\"icon\" type=\"image/png\" href=\"{{asset('main/img/cinema-icon.png')}}\" sizes=\"32x32\">
<link rel=\"apple-touch-icon\" href=\"{{asset('main/img/cinema-icon.png')}}\">
<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css\" integrity=\"sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==\" crossorigin=\"anonymous\" referrerpolicy=\"no-referrer\" />

<meta name=\"description\" content=\"\">
<meta name=\"keywords\" content=\"\">
<meta name=\"author\" content=\"Dmitry Volkov\">
<title>Mines – Actor & Movie Infomation</title>
", "client/widgets/head.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/ASMactor/templates/client/widgets/head.html.twig");
    }
}

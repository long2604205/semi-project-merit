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

/* client/widgets/footer.html.twig */
class __TwigTemplate_c8833e4525c8ec1aba5e632d716388d7 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "client/widgets/footer.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "client/widgets/footer.html.twig"));

        // line 1
        echo "<!-- footer -->
<footer class=\"footer\">
\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-12 col-sm-8 col-md-6 col-lg-4 col-xl-3 order-4 order-md-1 order-lg-4 order-xl-1\">
\t\t\t\t<div class=\"footer__flixtv\">
\t\t\t\t\t<img src=\"\" alt=\"\">
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>

\t\t<div class=\"row\" style=\"text-align: center;\">
\t\t\t<div class=\"col-12\" style=\"text-align: center;\">
\t\t\t\t<div class=\"col-12\" style=\"justify-content: center;\">
\t\t\t\t\t<small class=\"footer__copyright\" style=\"text-align: center;\">Copyright © Mines, 2023. Created by 杨志龙 - Dương Chí Long - Lion Wilson</small>
";
        // line 20
        echo "\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</footer>
<!-- end footer -->
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "client/widgets/footer.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  60 => 20,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- footer -->
<footer class=\"footer\">
\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-12 col-sm-8 col-md-6 col-lg-4 col-xl-3 order-4 order-md-1 order-lg-4 order-xl-1\">
\t\t\t\t<div class=\"footer__flixtv\">
\t\t\t\t\t<img src=\"\" alt=\"\">
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>

\t\t<div class=\"row\" style=\"text-align: center;\">
\t\t\t<div class=\"col-12\" style=\"text-align: center;\">
\t\t\t\t<div class=\"col-12\" style=\"justify-content: center;\">
\t\t\t\t\t<small class=\"footer__copyright\" style=\"text-align: center;\">Copyright © Mines, 2023. Created by 杨志龙 - Dương Chí Long - Lion Wilson</small>
{# 
\t\t\t\t\t<div class=\"footer__content\">
\t\t\t\t\t\t<small class=\"footer__copyright\" style=\"text-align: center;\">Copyright © Mines, 2023. Created by 杨志龙 - Dương Chí long - Lion Wilson</small>
\t\t\t\t\t</div> #}
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</footer>
<!-- end footer -->
", "client/widgets/footer.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/ASMactor/templates/client/widgets/footer.html.twig");
    }
}

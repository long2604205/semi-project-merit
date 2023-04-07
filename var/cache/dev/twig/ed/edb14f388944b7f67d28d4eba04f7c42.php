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

/* admin/widgets/script.html.twig */
class __TwigTemplate_c08e3f820402ac1bbaf8e72ee6631bd8 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/widgets/script.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/widgets/script.html.twig"));

        // line 1
        echo "\t<script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admintemplate/vendors/scripts/core.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 2
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admintemplate/vendors/scripts/script.min.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admintemplate/vendors/scripts/process.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admintemplate/vendors/scripts/layout-settings.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admintemplate/src/plugins/apexcharts/apexcharts.min.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admintemplate/src/plugins/datatables/js/jquery.dataTables.min.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admintemplate/src/plugins/datatables/js/dataTables.bootstrap4.min.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admintemplate/src/plugins/datatables/js/dataTables.responsive.min.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admintemplate/src/plugins/datatables/js/responsive.bootstrap4.min.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admintemplate/vendors/scripts/dashboard3.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admintemplate/src/plugins/apexcharts/apexcharts.min.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admintemplate/vendors/scripts/apexcharts-setting.js"), "html", null, true);
        echo "\"></script>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "admin/widgets/script.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 12,  84 => 11,  80 => 10,  76 => 9,  72 => 8,  68 => 7,  64 => 6,  60 => 5,  56 => 4,  52 => 3,  48 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("\t<script src=\"{{asset('admintemplate/vendors/scripts/core.js')}}\"></script>
\t<script src=\"{{asset('admintemplate/vendors/scripts/script.min.js')}}\"></script>
\t<script src=\"{{asset('admintemplate/vendors/scripts/process.js')}}\"></script>
\t<script src=\"{{asset('admintemplate/vendors/scripts/layout-settings.js')}}\"></script>
\t<script src=\"{{asset('admintemplate/src/plugins/apexcharts/apexcharts.min.js')}}\"></script>
\t<script src=\"{{asset('admintemplate/src/plugins/datatables/js/jquery.dataTables.min.js')}}\"></script>
\t<script src=\"{{asset('admintemplate/src/plugins/datatables/js/dataTables.bootstrap4.min.js')}}\"></script>
\t<script src=\"{{asset('admintemplate/src/plugins/datatables/js/dataTables.responsive.min.js')}}\"></script>
\t<script src=\"{{asset('admintemplate/src/plugins/datatables/js/responsive.bootstrap4.min.js')}}\"></script>
\t<script src=\"{{asset('admintemplate/vendors/scripts/dashboard3.js')}}\"></script>
\t<script src=\"{{asset('admintemplate/src/plugins/apexcharts/apexcharts.min.js')}}\"></script>
\t<script src=\"{{asset('admintemplate/vendors/scripts/apexcharts-setting.js')}}\"></script>", "admin/widgets/script.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/ASMactor/templates/admin/widgets/script.html.twig");
    }
}

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

/* admin/widgets/sidebar.html.twig */
class __TwigTemplate_612799fe93f0a3ac59814df352347858 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/widgets/sidebar.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/widgets/sidebar.html.twig"));

        // line 1
        echo "\t<div class=\"right-sidebar\">
\t\t<div class=\"sidebar-title\">
\t\t\t<h3 class=\"weight-600 font-16 text-blue\">
\t\t\t\tLayout Settings
\t\t\t\t<span class=\"btn-block font-weight-400 font-12\">User Interface Settings</span>
\t\t\t</h3>
\t\t\t<div class=\"close-sidebar\" data-toggle=\"right-sidebar-close\">
\t\t\t\t<i class=\"icon-copy ion-close-round\"></i>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"right-sidebar-body customscroll\">
\t\t\t<div class=\"right-sidebar-body-content\">
\t\t\t\t<h4 class=\"weight-600 font-18 pb-10\">Header Background</h4>
\t\t\t\t<div class=\"sidebar-btn-group pb-30 mb-10\">
\t\t\t\t\t<a href=\"javascript:void(0);\" class=\"btn btn-outline-primary header-white active\">White</a>
\t\t\t\t\t<a href=\"javascript:void(0);\" class=\"btn btn-outline-primary header-dark\">Dark</a>
\t\t\t\t</div>

\t\t\t\t<h4 class=\"weight-600 font-18 pb-10\">Sidebar Background</h4>
\t\t\t\t<div class=\"sidebar-btn-group pb-30 mb-10\">
\t\t\t\t\t<a href=\"javascript:void(0);\" class=\"btn btn-outline-primary sidebar-light \">White</a>
\t\t\t\t\t<a href=\"javascript:void(0);\" class=\"btn btn-outline-primary sidebar-dark active\">Dark</a>
\t\t\t\t</div>

\t\t\t\t<h4 class=\"weight-600 font-18 pb-10\">Menu Dropdown Icon</h4>
\t\t\t\t<div class=\"sidebar-radio-group pb-10 mb-10\">
\t\t\t\t\t<div class=\"custom-control custom-radio custom-control-inline\">
\t\t\t\t\t\t<input type=\"radio\" id=\"sidebaricon-1\" name=\"menu-dropdown-icon\" class=\"custom-control-input\" value=\"icon-style-1\" checked=\"\">
\t\t\t\t\t\t<label class=\"custom-control-label\" for=\"sidebaricon-1\"><i class=\"fa fa-angle-down\"></i></label>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"custom-control custom-radio custom-control-inline\">
\t\t\t\t\t\t<input type=\"radio\" id=\"sidebaricon-2\" name=\"menu-dropdown-icon\" class=\"custom-control-input\" value=\"icon-style-2\">
\t\t\t\t\t\t<label class=\"custom-control-label\" for=\"sidebaricon-2\"><i class=\"ion-plus-round\"></i></label>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"custom-control custom-radio custom-control-inline\">
\t\t\t\t\t\t<input type=\"radio\" id=\"sidebaricon-3\" name=\"menu-dropdown-icon\" class=\"custom-control-input\" value=\"icon-style-3\">
\t\t\t\t\t\t<label class=\"custom-control-label\" for=\"sidebaricon-3\"><i class=\"fa fa-angle-double-right\"></i></label>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<h4 class=\"weight-600 font-18 pb-10\">Menu List Icon</h4>
\t\t\t\t<div class=\"sidebar-radio-group pb-30 mb-10\">
\t\t\t\t\t<div class=\"custom-control custom-radio custom-control-inline\">
\t\t\t\t\t\t<input type=\"radio\" id=\"sidebariconlist-1\" name=\"menu-list-icon\" class=\"custom-control-input\" value=\"icon-list-style-1\" checked=\"\">
\t\t\t\t\t\t<label class=\"custom-control-label\" for=\"sidebariconlist-1\"><i class=\"ion-minus-round\"></i></label>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"custom-control custom-radio custom-control-inline\">
\t\t\t\t\t\t<input type=\"radio\" id=\"sidebariconlist-2\" name=\"menu-list-icon\" class=\"custom-control-input\" value=\"icon-list-style-2\">
\t\t\t\t\t\t<label class=\"custom-control-label\" for=\"sidebariconlist-2\"><i class=\"fa fa-circle-o\" aria-hidden=\"true\"></i></label>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"custom-control custom-radio custom-control-inline\">
\t\t\t\t\t\t<input type=\"radio\" id=\"sidebariconlist-3\" name=\"menu-list-icon\" class=\"custom-control-input\" value=\"icon-list-style-3\">
\t\t\t\t\t\t<label class=\"custom-control-label\" for=\"sidebariconlist-3\"><i class=\"dw dw-check\"></i></label>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"custom-control custom-radio custom-control-inline\">
\t\t\t\t\t\t<input type=\"radio\" id=\"sidebariconlist-4\" name=\"menu-list-icon\" class=\"custom-control-input\" value=\"icon-list-style-4\" checked=\"\">
\t\t\t\t\t\t<label class=\"custom-control-label\" for=\"sidebariconlist-4\"><i class=\"icon-copy dw dw-next-2\"></i></label>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"custom-control custom-radio custom-control-inline\">
\t\t\t\t\t\t<input type=\"radio\" id=\"sidebariconlist-5\" name=\"menu-list-icon\" class=\"custom-control-input\" value=\"icon-list-style-5\">
\t\t\t\t\t\t<label class=\"custom-control-label\" for=\"sidebariconlist-5\"><i class=\"dw dw-fast-forward-1\"></i></label>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"custom-control custom-radio custom-control-inline\">
\t\t\t\t\t\t<input type=\"radio\" id=\"sidebariconlist-6\" name=\"menu-list-icon\" class=\"custom-control-input\" value=\"icon-list-style-6\">
\t\t\t\t\t\t<label class=\"custom-control-label\" for=\"sidebariconlist-6\"><i class=\"dw dw-next\"></i></label>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"reset-options pt-30 text-center\">
\t\t\t\t\t<button class=\"btn btn-danger\" id=\"reset-settings\">Reset Settings</button>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>

\t<div class=\"left-side-bar\">
\t\t<div class=\"brand-logo\">
\t\t\t<a href=\"#\">
\t\t\t\t<img src=\"";
        // line 79
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("main/img/Logo-main-dark.png"), "html", null, true);
        echo "\" alt=\"\" class=\"dark-logo\">
\t\t\t\t<img src=\"";
        // line 80
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("main/img/Logo-mainx.png"), "html", null, true);
        echo "\" alt=\"\" class=\"light-logo\">
\t\t\t</a>
\t\t\t<div class=\"close-sidebar\" data-toggle=\"left-sidebar-close\">
\t\t\t\t<i class=\"ion-close-round\"></i>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"menu-block customscroll\">
\t\t\t<div class=\"sidebar-menu\">
\t\t\t\t<li>
\t\t\t\t\t<a href=\"";
        // line 89
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dashboard");
        echo "\" href=\"javascript:;\" class=\"dropdown-toggle no-arrow\">
\t\t\t\t\t\t\t<span class=\"micon dw dw-house-1\"></span><span class=\"mtext\">Home</span>
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<a href=\"";
        // line 94
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user");
        echo "\" class=\"dropdown-toggle no-arrow\">
\t\t\t\t\t\t<span class=\"micon dw dw-user2\"></span><span class=\"mtext\">User</span>
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<a href=\"";
        // line 99
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_actor");
        echo "\" class=\"dropdown-toggle no-arrow\">
\t\t\t\t\t\t<span class=\"micon ti-gallery\"></span><span class=\"mtext\">Actor</span>
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<a href=\"";
        // line 104
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("client_contact_list");
        echo "\" class=\"dropdown-toggle no-arrow\">
\t\t\t\t\t\t<span class=\"micon dw dw-message-1\"></span><span class=\"mtext\">Contact</span>
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t</div>
\t\t</div>
\t</div>
\t<div class=\"mobile-menu-overlay\"></div>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "admin/widgets/sidebar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  163 => 104,  155 => 99,  147 => 94,  139 => 89,  127 => 80,  123 => 79,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("\t<div class=\"right-sidebar\">
\t\t<div class=\"sidebar-title\">
\t\t\t<h3 class=\"weight-600 font-16 text-blue\">
\t\t\t\tLayout Settings
\t\t\t\t<span class=\"btn-block font-weight-400 font-12\">User Interface Settings</span>
\t\t\t</h3>
\t\t\t<div class=\"close-sidebar\" data-toggle=\"right-sidebar-close\">
\t\t\t\t<i class=\"icon-copy ion-close-round\"></i>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"right-sidebar-body customscroll\">
\t\t\t<div class=\"right-sidebar-body-content\">
\t\t\t\t<h4 class=\"weight-600 font-18 pb-10\">Header Background</h4>
\t\t\t\t<div class=\"sidebar-btn-group pb-30 mb-10\">
\t\t\t\t\t<a href=\"javascript:void(0);\" class=\"btn btn-outline-primary header-white active\">White</a>
\t\t\t\t\t<a href=\"javascript:void(0);\" class=\"btn btn-outline-primary header-dark\">Dark</a>
\t\t\t\t</div>

\t\t\t\t<h4 class=\"weight-600 font-18 pb-10\">Sidebar Background</h4>
\t\t\t\t<div class=\"sidebar-btn-group pb-30 mb-10\">
\t\t\t\t\t<a href=\"javascript:void(0);\" class=\"btn btn-outline-primary sidebar-light \">White</a>
\t\t\t\t\t<a href=\"javascript:void(0);\" class=\"btn btn-outline-primary sidebar-dark active\">Dark</a>
\t\t\t\t</div>

\t\t\t\t<h4 class=\"weight-600 font-18 pb-10\">Menu Dropdown Icon</h4>
\t\t\t\t<div class=\"sidebar-radio-group pb-10 mb-10\">
\t\t\t\t\t<div class=\"custom-control custom-radio custom-control-inline\">
\t\t\t\t\t\t<input type=\"radio\" id=\"sidebaricon-1\" name=\"menu-dropdown-icon\" class=\"custom-control-input\" value=\"icon-style-1\" checked=\"\">
\t\t\t\t\t\t<label class=\"custom-control-label\" for=\"sidebaricon-1\"><i class=\"fa fa-angle-down\"></i></label>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"custom-control custom-radio custom-control-inline\">
\t\t\t\t\t\t<input type=\"radio\" id=\"sidebaricon-2\" name=\"menu-dropdown-icon\" class=\"custom-control-input\" value=\"icon-style-2\">
\t\t\t\t\t\t<label class=\"custom-control-label\" for=\"sidebaricon-2\"><i class=\"ion-plus-round\"></i></label>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"custom-control custom-radio custom-control-inline\">
\t\t\t\t\t\t<input type=\"radio\" id=\"sidebaricon-3\" name=\"menu-dropdown-icon\" class=\"custom-control-input\" value=\"icon-style-3\">
\t\t\t\t\t\t<label class=\"custom-control-label\" for=\"sidebaricon-3\"><i class=\"fa fa-angle-double-right\"></i></label>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<h4 class=\"weight-600 font-18 pb-10\">Menu List Icon</h4>
\t\t\t\t<div class=\"sidebar-radio-group pb-30 mb-10\">
\t\t\t\t\t<div class=\"custom-control custom-radio custom-control-inline\">
\t\t\t\t\t\t<input type=\"radio\" id=\"sidebariconlist-1\" name=\"menu-list-icon\" class=\"custom-control-input\" value=\"icon-list-style-1\" checked=\"\">
\t\t\t\t\t\t<label class=\"custom-control-label\" for=\"sidebariconlist-1\"><i class=\"ion-minus-round\"></i></label>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"custom-control custom-radio custom-control-inline\">
\t\t\t\t\t\t<input type=\"radio\" id=\"sidebariconlist-2\" name=\"menu-list-icon\" class=\"custom-control-input\" value=\"icon-list-style-2\">
\t\t\t\t\t\t<label class=\"custom-control-label\" for=\"sidebariconlist-2\"><i class=\"fa fa-circle-o\" aria-hidden=\"true\"></i></label>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"custom-control custom-radio custom-control-inline\">
\t\t\t\t\t\t<input type=\"radio\" id=\"sidebariconlist-3\" name=\"menu-list-icon\" class=\"custom-control-input\" value=\"icon-list-style-3\">
\t\t\t\t\t\t<label class=\"custom-control-label\" for=\"sidebariconlist-3\"><i class=\"dw dw-check\"></i></label>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"custom-control custom-radio custom-control-inline\">
\t\t\t\t\t\t<input type=\"radio\" id=\"sidebariconlist-4\" name=\"menu-list-icon\" class=\"custom-control-input\" value=\"icon-list-style-4\" checked=\"\">
\t\t\t\t\t\t<label class=\"custom-control-label\" for=\"sidebariconlist-4\"><i class=\"icon-copy dw dw-next-2\"></i></label>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"custom-control custom-radio custom-control-inline\">
\t\t\t\t\t\t<input type=\"radio\" id=\"sidebariconlist-5\" name=\"menu-list-icon\" class=\"custom-control-input\" value=\"icon-list-style-5\">
\t\t\t\t\t\t<label class=\"custom-control-label\" for=\"sidebariconlist-5\"><i class=\"dw dw-fast-forward-1\"></i></label>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"custom-control custom-radio custom-control-inline\">
\t\t\t\t\t\t<input type=\"radio\" id=\"sidebariconlist-6\" name=\"menu-list-icon\" class=\"custom-control-input\" value=\"icon-list-style-6\">
\t\t\t\t\t\t<label class=\"custom-control-label\" for=\"sidebariconlist-6\"><i class=\"dw dw-next\"></i></label>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"reset-options pt-30 text-center\">
\t\t\t\t\t<button class=\"btn btn-danger\" id=\"reset-settings\">Reset Settings</button>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>

\t<div class=\"left-side-bar\">
\t\t<div class=\"brand-logo\">
\t\t\t<a href=\"#\">
\t\t\t\t<img src=\"{{asset('main/img/Logo-main-dark.png')}}\" alt=\"\" class=\"dark-logo\">
\t\t\t\t<img src=\"{{asset('main/img/Logo-mainx.png')}}\" alt=\"\" class=\"light-logo\">
\t\t\t</a>
\t\t\t<div class=\"close-sidebar\" data-toggle=\"left-sidebar-close\">
\t\t\t\t<i class=\"ion-close-round\"></i>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"menu-block customscroll\">
\t\t\t<div class=\"sidebar-menu\">
\t\t\t\t<li>
\t\t\t\t\t<a href=\"{{ path('dashboard')}}\" href=\"javascript:;\" class=\"dropdown-toggle no-arrow\">
\t\t\t\t\t\t\t<span class=\"micon dw dw-house-1\"></span><span class=\"mtext\">Home</span>
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<a href=\"{{ path('app_user')}}\" class=\"dropdown-toggle no-arrow\">
\t\t\t\t\t\t<span class=\"micon dw dw-user2\"></span><span class=\"mtext\">User</span>
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<a href=\"{{ path('app_actor')}}\" class=\"dropdown-toggle no-arrow\">
\t\t\t\t\t\t<span class=\"micon ti-gallery\"></span><span class=\"mtext\">Actor</span>
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<a href=\"{{path('client_contact_list')}}\" class=\"dropdown-toggle no-arrow\">
\t\t\t\t\t\t<span class=\"micon dw dw-message-1\"></span><span class=\"mtext\">Contact</span>
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t</div>
\t\t</div>
\t</div>
\t<div class=\"mobile-menu-overlay\"></div>", "admin/widgets/sidebar.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/ASMactor/templates/admin/widgets/sidebar.html.twig");
    }
}

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

/* layout/parts/page_header.html.twig */
class __TwigTemplate_4984e685adb5ed268f08bd2d64f47083777f1b95b468a1c89edc1407a53951e8 extends Template
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
        // line 33
        echo "
";
        // line 34
        $context["anonymous"] = (null === $this->extensions['Glpi\Application\View\Extension\SessionExtension']->session("glpiactiveprofile"));
        // line 35
        echo "
";
        // line 36
        $context["is_vertical"] = (0 === twig_compare($this->extensions['Glpi\Application\View\Extension\SessionExtension']->userPref("page_layout"), "vertical"));
        // line 37
        echo "
<body class=\"";
        // line 38
        echo ((($this->extensions['Glpi\Application\View\Extension\SessionExtension']->userPref("fold_menu") && ($context["is_vertical"] ?? null))) ? ("navbar-collapsed") : (""));
        echo " ";
        echo ((($context["is_vertical"] ?? null)) ? ("vertical-layout") : ("horizontal-layout"));
        echo " ";
        echo ((($context["is_debug_active"] ?? null)) ? ("debug-active") : (""));
        echo "\">
   ";
        // line 39
        echo twig_include($this->env, $context, "layout/parts/impersonate_banner.html.twig");
        echo "
   ";
        // line 40
        echo twig_include($this->env, $context, "components/messages_after_redirect_toasts.html.twig", ["display_container" => true]);
        echo "

   <div class=\"page\">

      ";
        // line 44
        if (($context["is_vertical"] ?? null)) {
            // line 45
            echo "      <aside class=\"navbar navbar-vertical navbar-expand-lg sticky-lg-top sidebar\">
         <div class=\"container-fluid\">
            <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbar-menu\">
               <span class=\"navbar-toggler-icon\"></span>
            </button>

            <a href=\"";
            // line 51
            echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\RoutingExtension']->indexPath(), "html", null, true);
            echo "\" accesskey=\"1\" title=\"";
            echo twig_escape_filter($this->env, __("Home"), "html", null, true);
            echo "\"
               class=\"navbar-brand navbar-brand-autodark\">
               <span class=\"glpi-logo\"></span>
            </a>

            ";
            // line 56
            if ( !($context["anonymous"] ?? null)) {
                // line 57
                echo "               <span class=\"d-none d-lg-inline-block\">
                   ";
                // line 58
                echo twig_include($this->env, $context, "layout/parts/goto_button.html.twig");
                echo "
               </span>
            ";
            }
            // line 61
            echo "
            ";
            // line 62
            if ( !(null === ($context["user"] ?? null))) {
                // line 63
                echo "               ";
                // line 64
                echo "               <div class=\"d-lg-none\">
                  ";
                // line 65
                echo twig_include($this->env, $context, "layout/parts/user_header.html.twig");
                echo "
               </div>
            ";
            }
            // line 68
            echo "
            ";
            // line 69
            if ( !($context["anonymous"] ?? null)) {
                // line 70
                echo "               <div class=\"collapse navbar-collapse\" id=\"navbar-menu\">
                   <span class=\"d-inline-block d-lg-none ms-2\">
                       ";
                // line 72
                echo twig_include($this->env, $context, "layout/parts/goto_button.html.twig");
                echo "
                   </span>
                   ";
                // line 74
                echo twig_include($this->env, $context, "layout/parts/menu.html.twig");
                echo "


                  <p class=\"text-start\">
                     <button class=\"btn btn-sm btn-ghost-secondary mb-2 reduce-menu d-none d-md-block\">
                        <span class=\"menu-label\">";
                // line 79
                echo twig_escape_filter($this->env, __("Collapse menu"), "html", null, true);
                echo "</span>
                     </button>
                  </p>
               </div>
            ";
            }
            // line 84
            echo "         </div>
      </aside>
      ";
        }
        // line 87
        echo "
      <header class=\"navbar d-print-none sticky-lg-top shadow-sm ";
        // line 88
        echo (((0 === twig_compare($this->extensions['Glpi\Application\View\Extension\SessionExtension']->userPref("page_layout"), "vertical"))) ? ("navbar-light navbar-expand-md") : ("navbar-dark navbar-expand-xl topbar"));
        echo "\">
         <div class=\"container-fluid flex-xl-nowrap pe-xl-0\">
            ";
        // line 90
        if ((0 === twig_compare($this->extensions['Glpi\Application\View\Extension\SessionExtension']->userPref("page_layout"), "vertical"))) {
            // line 91
            echo "               ";
            echo twig_include($this->env, $context, "layout/parts/breadcrumbs.html.twig");
            echo "

               <div class=\"ms-lg-auto d-none d-lg-block flex-grow-1 flex-lg-grow-0\">
                  ";
            // line 94
            echo twig_include($this->env, $context, "layout/parts/global_search_form.html.twig");
            echo "
               </div>
            ";
        } elseif ((0 === twig_compare($this->extensions['Glpi\Application\View\Extension\SessionExtension']->userPref("page_layout"), "horizontal"))) {
            // line 97
            echo "               <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbar-menu\">
                  <span class=\"navbar-toggler-icon\"></span>
               </button>

               <a href=\"";
            // line 101
            echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\RoutingExtension']->indexPath(), "html", null, true);
            echo "\" accesskey=\"1\" title=\"";
            echo twig_escape_filter($this->env, __("Home"), "html", null, true);
            echo "\"
                  class=\"navbar-brand navbar-brand-autodark\">
                  <span class=\"glpi-logo\"></span>
               </a>

               <div class=\"d-lg-none\">
                  ";
            // line 107
            echo twig_include($this->env, $context, "layout/parts/user_header.html.twig");
            echo "
               </div>

               <div class=\"collapse navbar-collapse justify-content-center\" id=\"navbar-menu\">
                  ";
            // line 111
            echo twig_include($this->env, $context, "layout/parts/menu.html.twig");
            echo "
                  <span class=\"ms-xl-2 d-inline-block mt-2 mt-xl-2\">
                     ";
            // line 113
            echo twig_include($this->env, $context, "layout/parts/goto_button.html.twig");
            echo "
                  </span>
               </div>
            ";
        }
        // line 117
        echo "
            <div class=\"ms-md-4 d-none d-lg-block\">
               ";
        // line 119
        echo twig_include($this->env, $context, "layout/parts/user_header.html.twig");
        echo "
            </div>
         </div>
      </header>

      ";
        // line 124
        if ((0 === twig_compare($this->extensions['Glpi\Application\View\Extension\SessionExtension']->userPref("page_layout"), "horizontal"))) {
            // line 125
            echo "      <div class=\"navbar navbar-expand-md navbar-light secondary-bar sticky-md-top shadow-sm\">
         <div class=\"container-fluid justify-content-start\">
            ";
            // line 127
            echo twig_include($this->env, $context, "layout/parts/breadcrumbs.html.twig");
            echo "
            <div class=\"ms-md-auto d-none d-md-block flex-grow-1 flex-md-grow-0\">
               ";
            // line 129
            echo twig_include($this->env, $context, "layout/parts/global_search_form.html.twig");
            echo "
            </div>
         </div>
      </div>
      ";
        }
        // line 134
        echo "
      <div class=\"page-wrapper mb-0\">
         <div class=\"page-body container-fluid\">
            <main role=\"main\" id=\"page\" class=\"legacy\">
";
    }

    public function getTemplateName()
    {
        return "layout/parts/page_header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  241 => 134,  233 => 129,  228 => 127,  224 => 125,  222 => 124,  214 => 119,  210 => 117,  203 => 113,  198 => 111,  191 => 107,  180 => 101,  174 => 97,  168 => 94,  161 => 91,  159 => 90,  154 => 88,  151 => 87,  146 => 84,  138 => 79,  130 => 74,  125 => 72,  121 => 70,  119 => 69,  116 => 68,  110 => 65,  107 => 64,  105 => 63,  103 => 62,  100 => 61,  94 => 58,  91 => 57,  89 => 56,  79 => 51,  71 => 45,  69 => 44,  62 => 40,  58 => 39,  50 => 38,  47 => 37,  45 => 36,  42 => 35,  40 => 34,  37 => 33,);
    }

    public function getSourceContext()
    {
        return new Source("", "layout/parts/page_header.html.twig", "/var/www/html/templates/layout/parts/page_header.html.twig");
    }
}

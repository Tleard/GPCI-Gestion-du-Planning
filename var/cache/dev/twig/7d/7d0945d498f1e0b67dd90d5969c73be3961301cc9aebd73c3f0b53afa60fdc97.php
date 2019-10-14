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

/* ClientPlanningBundle:Templates:index.html.twig */
class __TwigTemplate_21b6ab92583f79a7c72b4fb94a0b774fdd7b97df9a62fc111613e36929aa20da extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "ClientPlanningBundle:Templates:index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "ClientPlanningBundle:Templates:index.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>

<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">

    <title>Ifide - Calendrier</title>

    <!-- Bootstrap CSS CDN -->
    <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css\" integrity=\"sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4\" crossorigin=\"anonymous\">
    <!-- Our Custom CSS -->
    <link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/component.css"), "html", null, true);
        echo "\">

    <!-- Font Awesome JS -->
    <script defer src=\"https://use.fontawesome.com/releases/v5.0.13/js/solid.js\" integrity=\"sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ\" crossorigin=\"anonymous\"></script>
    <script defer src=\"https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js\" integrity=\"sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY\" crossorigin=\"anonymous\"></script>
</head>

<body>
<div class=\"wrapper\">
    <!-- Sidebar  -->
    <nav id=\"sidebar\">
        <div class=\"sidebar-header text-center\">
            <img src=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/ifide_Logo.png"), "html", null, true);
        echo "\" alt=\"Logo Ifide\">
        </div>

        <ul class=\"list-unstyled components\">
            <li class=\"active\">
                <a href=\"#homeSubmenu\" data-toggle=\"collapse\" aria-expanded=\"false\" class=\"dropdown-toggle\">Home</a>
                <ul class=\"collapse list-unstyled\" id=\"homeSubmenu\">
                    <li>
                        <a href=\"#\">Page 1</a>
                    </li>
                    <li>
                        <a href=\"#\">Page 2</a>
                    </li>
                    <li>
                        <a href=\"#\">Page 3</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href=\"#\">About</a>
            </li>
            <li>
                <a href=\"#pageSubmenu\" data-toggle=\"collapse\" aria-expanded=\"false\" class=\"dropdown-toggle\">Pages</a>
                <ul class=\"collapse list-unstyled\" id=\"pageSubmenu\">
                    <li>
                        <a href=\"#\">Page 1</a>
                    </li>
                    <li>
                        <a href=\"#\">Page 2</a>
                    </li>
                    <li>
                        <a href=\"#\">Page 3</a>
                    </li>
                </ul>
            </li>
        </ul>

        <ul class=\"list-unstyled CTAs\">
            <li>
                <a href=\"#\" class=\"download\">Button</a>
            </li>
            <li>
                <a href=\"#\" class=\"article\">Button 2</a>
            </li>
        </ul>
    </nav>

    <!-- Page Content  -->
    <div id=\"content\">

        <nav class=\"navbar navbar-expand-lg navbar-light bg-light\">
            <div class=\"container-fluid\">

                <button type=\"button\" id=\"sidebarCollapse\" class=\"btn btn-info\">
                    <i class=\"fas fa-align-left\"></i>
                    <span>Toggle Sidebar</span>
                </button>
                <button class=\"btn btn-dark d-inline-block d-lg-none ml-auto\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                    <i class=\"fas fa-align-justify\"></i>
                </button>

                <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
                    <ul class=\"nav navbar-nav ml-auto\">
                        <li class=\"nav-item active\">
                            <a class=\"nav-link\" href=\"#\">Page</a>
                        </li>
                        <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"#\">Page</a>
                        </li>
                        <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"#\">Page</a>
                        </li>
                        <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"#\">Page</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
</div>

<!-- jQuery CDN - Slim version (=without AJAX) -->
<script src=\"https://code.jquery.com/jquery-3.3.1.slim.min.js\" integrity=\"sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo\" crossorigin=\"anonymous\"></script>
<!-- Popper.JS -->
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js\" integrity=\"sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ\" crossorigin=\"anonymous\"></script>
<!-- Bootstrap JS -->
<script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js\" integrity=\"sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm\" crossorigin=\"anonymous\"></script>

<script type=\"text/javascript\">
    \$(document).ready(function () {
        \$('#sidebarCollapse').on('click', function () {
            \$('#sidebar').toggleClass('active');
        });
    });
</script>
</body>

</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "ClientPlanningBundle:Templates:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 26,  58 => 14,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>

<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">

    <title>Ifide - Calendrier</title>

    <!-- Bootstrap CSS CDN -->
    <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css\" integrity=\"sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4\" crossorigin=\"anonymous\">
    <!-- Our Custom CSS -->
    <link rel=\"stylesheet\" href=\"{{asset('css/component.css')}}\">

    <!-- Font Awesome JS -->
    <script defer src=\"https://use.fontawesome.com/releases/v5.0.13/js/solid.js\" integrity=\"sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ\" crossorigin=\"anonymous\"></script>
    <script defer src=\"https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js\" integrity=\"sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY\" crossorigin=\"anonymous\"></script>
</head>

<body>
<div class=\"wrapper\">
    <!-- Sidebar  -->
    <nav id=\"sidebar\">
        <div class=\"sidebar-header text-center\">
            <img src=\"{{asset('images/ifide_Logo.png')}}\" alt=\"Logo Ifide\">
        </div>

        <ul class=\"list-unstyled components\">
            <li class=\"active\">
                <a href=\"#homeSubmenu\" data-toggle=\"collapse\" aria-expanded=\"false\" class=\"dropdown-toggle\">Home</a>
                <ul class=\"collapse list-unstyled\" id=\"homeSubmenu\">
                    <li>
                        <a href=\"#\">Page 1</a>
                    </li>
                    <li>
                        <a href=\"#\">Page 2</a>
                    </li>
                    <li>
                        <a href=\"#\">Page 3</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href=\"#\">About</a>
            </li>
            <li>
                <a href=\"#pageSubmenu\" data-toggle=\"collapse\" aria-expanded=\"false\" class=\"dropdown-toggle\">Pages</a>
                <ul class=\"collapse list-unstyled\" id=\"pageSubmenu\">
                    <li>
                        <a href=\"#\">Page 1</a>
                    </li>
                    <li>
                        <a href=\"#\">Page 2</a>
                    </li>
                    <li>
                        <a href=\"#\">Page 3</a>
                    </li>
                </ul>
            </li>
        </ul>

        <ul class=\"list-unstyled CTAs\">
            <li>
                <a href=\"#\" class=\"download\">Button</a>
            </li>
            <li>
                <a href=\"#\" class=\"article\">Button 2</a>
            </li>
        </ul>
    </nav>

    <!-- Page Content  -->
    <div id=\"content\">

        <nav class=\"navbar navbar-expand-lg navbar-light bg-light\">
            <div class=\"container-fluid\">

                <button type=\"button\" id=\"sidebarCollapse\" class=\"btn btn-info\">
                    <i class=\"fas fa-align-left\"></i>
                    <span>Toggle Sidebar</span>
                </button>
                <button class=\"btn btn-dark d-inline-block d-lg-none ml-auto\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                    <i class=\"fas fa-align-justify\"></i>
                </button>

                <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
                    <ul class=\"nav navbar-nav ml-auto\">
                        <li class=\"nav-item active\">
                            <a class=\"nav-link\" href=\"#\">Page</a>
                        </li>
                        <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"#\">Page</a>
                        </li>
                        <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"#\">Page</a>
                        </li>
                        <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"#\">Page</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
</div>

<!-- jQuery CDN - Slim version (=without AJAX) -->
<script src=\"https://code.jquery.com/jquery-3.3.1.slim.min.js\" integrity=\"sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo\" crossorigin=\"anonymous\"></script>
<!-- Popper.JS -->
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js\" integrity=\"sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ\" crossorigin=\"anonymous\"></script>
<!-- Bootstrap JS -->
<script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js\" integrity=\"sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm\" crossorigin=\"anonymous\"></script>

<script type=\"text/javascript\">
    \$(document).ready(function () {
        \$('#sidebarCollapse').on('click', function () {
            \$('#sidebar').toggleClass('active');
        });
    });
</script>
</body>

</html>", "ClientPlanningBundle:Templates:index.html.twig", "/var/www/html/SIO/PPE3/GPCI-Gestion-du-Planning/src/Client/PlanningBundle/Resources/views/Templates/index.html.twig");
    }
}

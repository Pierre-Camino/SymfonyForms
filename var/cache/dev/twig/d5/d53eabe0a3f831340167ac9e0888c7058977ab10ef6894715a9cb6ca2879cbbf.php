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

/* parts/_header.html.twig */
class __TwigTemplate_2f62b602cf325016ffbc39846e7eba514bf3396d23ef94e1740a7493f22d11dc extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "parts/_header.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "parts/_header.html.twig"));

        // line 1
        echo "<nav class=\"navbar navbar-expand-lg navbar-dark bg-primary\">
\t<a class=\"navbar-brand\" href=\"";
        // line 2
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("index");
        echo "\">
\t\t<font style=\"vertical-align: inherit;\">
\t\t\t<font style=\"vertical-align: inherit;\">
\t\t\t\tMon Blog
\t\t\t</font>
\t\t</font>
\t</a>
\t<button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"# navbarColor01\" aria-controls=\"navbarColor01\" aria-extended=\"false\" aria-label=\"Basculer la navigation \">
\t\t<span class=\"navbar-toggler-icon\"></span>
\t</button>

\t<div class=\"collapse navbar-collapse\" id=\"navbarColor01\">
\t\t<ul class=\"navbar-nav mr-auto\">
\t\t\t<li class=\"nav-item \">
\t\t\t\t<a class=\"nav-link\" href=\"";
        // line 16
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("accueil");
        echo "\">
\t\t\t\t\t<font style=\"vertical-align: inherit;\">
\t\t\t\t\t\t<font style=\"vertical-align: inherit;\">
\t\t\t\t\t\t\tAccueil
\t\t\t\t\t\t</font>
\t\t\t\t\t</font>
\t\t\t\t</a>
\t\t\t</li>
\t\t\t<li class=\"nav-item\">
\t\t\t\t<a class=\"nav-link\" href=\"";
        // line 25
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("formulaire");
        echo "\">
\t\t\t\t\t<font style=\"vertical-align: inherit;\">
\t\t\t\t\t\t<font style=\"vertical-align: inherit;\">
\t\t\t\t\t\t\tFormulaire
\t\t\t\t\t\t</font>
\t\t\t\t\t</font>
\t\t\t\t</a>
\t\t\t</li>
\t\t\t<li class=\"nav-item\">
\t\t\t\t<a class=\"nav-link\" href=\"";
        // line 34
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contact");
        echo "\">
\t\t\t\t\t<font style=\"vertical-align: inherit;\">
\t\t\t\t\t\t<font style=\"vertical-align: inherit;\">
\t\t\t\t\t\t\tContact
\t\t\t\t\t\t</font>
\t\t\t\t\t</font>
\t\t\t\t</a>
\t\t\t</li>
\t\t</ul>
\t\t
\t</div>
</nav>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "parts/_header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 34,  75 => 25,  63 => 16,  46 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<nav class=\"navbar navbar-expand-lg navbar-dark bg-primary\">
\t<a class=\"navbar-brand\" href=\"{{path('index')}}\">
\t\t<font style=\"vertical-align: inherit;\">
\t\t\t<font style=\"vertical-align: inherit;\">
\t\t\t\tMon Blog
\t\t\t</font>
\t\t</font>
\t</a>
\t<button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"# navbarColor01\" aria-controls=\"navbarColor01\" aria-extended=\"false\" aria-label=\"Basculer la navigation \">
\t\t<span class=\"navbar-toggler-icon\"></span>
\t</button>

\t<div class=\"collapse navbar-collapse\" id=\"navbarColor01\">
\t\t<ul class=\"navbar-nav mr-auto\">
\t\t\t<li class=\"nav-item \">
\t\t\t\t<a class=\"nav-link\" href=\"{{path('accueil')}}\">
\t\t\t\t\t<font style=\"vertical-align: inherit;\">
\t\t\t\t\t\t<font style=\"vertical-align: inherit;\">
\t\t\t\t\t\t\tAccueil
\t\t\t\t\t\t</font>
\t\t\t\t\t</font>
\t\t\t\t</a>
\t\t\t</li>
\t\t\t<li class=\"nav-item\">
\t\t\t\t<a class=\"nav-link\" href=\"{{path('formulaire')}}\">
\t\t\t\t\t<font style=\"vertical-align: inherit;\">
\t\t\t\t\t\t<font style=\"vertical-align: inherit;\">
\t\t\t\t\t\t\tFormulaire
\t\t\t\t\t\t</font>
\t\t\t\t\t</font>
\t\t\t\t</a>
\t\t\t</li>
\t\t\t<li class=\"nav-item\">
\t\t\t\t<a class=\"nav-link\" href=\"{{path('contact')}}\">
\t\t\t\t\t<font style=\"vertical-align: inherit;\">
\t\t\t\t\t\t<font style=\"vertical-align: inherit;\">
\t\t\t\t\t\t\tContact
\t\t\t\t\t\t</font>
\t\t\t\t\t</font>
\t\t\t\t</a>
\t\t\t</li>
\t\t</ul>
\t\t
\t</div>
</nav>
", "parts/_header.html.twig", "/var/www/html/DWWM-2020-2021/Veilles/Symfony Forms/veille_symfony_forms/templates/parts/_header.html.twig");
    }
}

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

/* contact/contact.html.twig */
class __TwigTemplate_840addf35c439be6695868ad21e84ffb84c770322627a181f5876f4ac7da5c96 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "contact/contact.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "contact/contact.html.twig"));

        // line 1
        echo "<section class=\"container\">
\t<div class=\"container contact-form mt-5\">
\t\t<div class=\"contact-image\">
\t\t\t<img src=\"https://image.ibb.co/kUagtU/rocket_contact.png\" alt=\"rocket_contact\"/>
\t\t</div>
\t\t<form method=\"post\" action=\"\">
\t\t\t<h3>Formulaire simple créé à la main</h3>
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<input type=\"text\" name=\"nom\" class=\"form-control\" placeholder=\"Votre Nom*\" value=\"\"/>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<input type=\"text\" name=\"mail\" class=\"form-control\" placeholder=\"Votre Email *\" value=\"\"/>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<input type=\"text\" name=\"tel\" class=\"form-control\" placeholder=\"Votre N° de Téléphone *\" value=\"\"/>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<input type=\"submit\" name=\"envoyer\" class=\"btnContact\" value=\"Envoyer\"/>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<textarea name=\"message\" class=\"form-control\" placeholder=\"Votre Message *\" style=\"width: 100%; height: 150px;\"></textarea>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</form>
\t</div>
</section>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "contact/contact.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section class=\"container\">
\t<div class=\"container contact-form mt-5\">
\t\t<div class=\"contact-image\">
\t\t\t<img src=\"https://image.ibb.co/kUagtU/rocket_contact.png\" alt=\"rocket_contact\"/>
\t\t</div>
\t\t<form method=\"post\" action=\"\">
\t\t\t<h3>Formulaire simple créé à la main</h3>
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<input type=\"text\" name=\"nom\" class=\"form-control\" placeholder=\"Votre Nom*\" value=\"\"/>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<input type=\"text\" name=\"mail\" class=\"form-control\" placeholder=\"Votre Email *\" value=\"\"/>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<input type=\"text\" name=\"tel\" class=\"form-control\" placeholder=\"Votre N° de Téléphone *\" value=\"\"/>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<input type=\"submit\" name=\"envoyer\" class=\"btnContact\" value=\"Envoyer\"/>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<textarea name=\"message\" class=\"form-control\" placeholder=\"Votre Message *\" style=\"width: 100%; height: 150px;\"></textarea>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</form>
\t</div>
</section>
", "contact/contact.html.twig", "/var/www/html/DWWM-2020-2021/Veilles/Symfony Forms/veille_symfony_forms/templates/contact/contact.html.twig");
    }
}

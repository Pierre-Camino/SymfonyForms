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

/* accueil/index.html.twig */
class __TwigTemplate_1e967e70dd9a4ce6f496ab488cfcdde896027d7b5652bd8a8413dfbc683979a8 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "accueil/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "accueil/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "accueil/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "
\t<h1 class=\"text-center mt-5\">Liste des articles</h1>

\t";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["articles"]) || array_key_exists("articles", $context) ? $context["articles"] : (function () { throw new RuntimeError('Variable "articles" does not exist.', 8, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 9
            echo "\t\t<article class=\"row border text-justify mt-5\">
\t\t\t<aside class=\"col-6\">
\t\t\t\t<a href=\"";
            // line 11
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("article", ["id" => twig_get_attribute($this->env, $this->source, $context["article"], "id", [], "any", false, false, false, 11)]), "html", null, true);
            echo "\">
\t\t\t\t\t<h3 class=\"text-center font-weight-bold\">
\t\t\t\t\t\t";
            // line 13
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "titre", [], "any", false, false, false, 13), "html", null, true);
            echo "
\t\t\t\t\t</h3>
\t\t\t\t</a>
\t\t\t\t<h5>
\t\t\t\t\tParu le :
\t\t\t\t\t";
            // line 18
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "paruLe", [], "any", false, false, false, 18), "d/m/Y"), "html", null, true);
            echo "
\t\t\t\t\tà
\t\t\t\t\t";
            // line 20
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "paruLe", [], "any", false, false, false, 20), "H:i"), "html", null, true);
            echo "
\t\t\t\t</h5>
\t\t\t\t<p class=\"text-justify\">
\t\t\t\t\t";
            // line 23
            echo twig_get_attribute($this->env, $this->source, $context["article"], "contenu", [], "any", false, false, false, 23);
            echo "
\t\t\t\t</p>
\t\t\t</aside>
\t\t\t<img class=\"col-6\" src=\"";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "image", [], "any", false, false, false, 26), "html", null, true);
            echo "\" alt=\"image de l'article\">
\t\t</article>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "accueil/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 29,  111 => 26,  105 => 23,  99 => 20,  94 => 18,  86 => 13,  81 => 11,  77 => 9,  73 => 8,  68 => 5,  58 => 4,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}


{% block body %}

\t<h1 class=\"text-center mt-5\">Liste des articles</h1>

\t{% for article in articles %}
\t\t<article class=\"row border text-justify mt-5\">
\t\t\t<aside class=\"col-6\">
\t\t\t\t<a href=\"{{ path('article', {id:article.id}) }}\">
\t\t\t\t\t<h3 class=\"text-center font-weight-bold\">
\t\t\t\t\t\t{{ article.titre }}
\t\t\t\t\t</h3>
\t\t\t\t</a>
\t\t\t\t<h5>
\t\t\t\t\tParu le :
\t\t\t\t\t{{ article.paruLe | date('d/m/Y') }}
\t\t\t\t\tà
\t\t\t\t\t{{ article.paruLe | date('H:i') }}
\t\t\t\t</h5>
\t\t\t\t<p class=\"text-justify\">
\t\t\t\t\t{{ article.contenu | raw }}
\t\t\t\t</p>
\t\t\t</aside>
\t\t\t<img class=\"col-6\" src=\"{{ article.image }}\" alt=\"image de l'article\">
\t\t</article>
\t{% endfor %}


{% endblock %}
", "accueil/index.html.twig", "/var/www/html/DWWM-2020-2021/Veilles/Symfony Forms/veille_symfony_forms/templates/accueil/index.html.twig");
    }
}

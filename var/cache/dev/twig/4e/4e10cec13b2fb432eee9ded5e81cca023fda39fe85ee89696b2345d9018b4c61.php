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

/* formulaire/recup controlleur sans symfony.php */
class __TwigTemplate_433d5964b3ca3b800e3b97667076f51383919e114de89a3f416166c757f53c41 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "formulaire/recup controlleur sans symfony.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "formulaire/recup controlleur sans symfony.php"));

        // line 1
        echo "if(\$request->request->count() > 0){
            \$article = new Article();
            \$article->setTitre(\$request->request->get('titre'))
                    ->setContenu(\$request->request->get('contenu'))
                    ->setImage(\$request->request->get('image'))
                    ->setParuLe(new DateTime());

            \$manager->persist(\$article);
            \$manager->flush();

            return \$this->redirectToRoute('article', ['id' => \$article->getId()]);
        }
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "formulaire/recup controlleur sans symfony.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("if(\$request->request->count() > 0){
            \$article = new Article();
            \$article->setTitre(\$request->request->get('titre'))
                    ->setContenu(\$request->request->get('contenu'))
                    ->setImage(\$request->request->get('image'))
                    ->setParuLe(new DateTime());

            \$manager->persist(\$article);
            \$manager->flush();

            return \$this->redirectToRoute('article', ['id' => \$article->getId()]);
        }
", "formulaire/recup controlleur sans symfony.php", "/var/www/html/DWWM-2020-2021/Veilles/Symfony Forms/veille_symfony_forms/templates/formulaire/recup controlleur sans symfony.php");
    }
}

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

/* formulaire/recup controlleur.php */
class __TwigTemplate_b90af685283a6c435ff1834521c95c2233b82bb6352ced1a71d497bfadf7ec4f extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "formulaire/recup controlleur.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "formulaire/recup controlleur.php"));

        // line 1
        echo "<?php

namespace App\\Controller;

use Doctrine\\ORM\\EntityManagerInterface;
use App\\Entity\\Article;
use Symfony\\Bundle\\FrameworkBundle\\Controller\\AbstractController;
use Symfony\\Component\\HttpFoundation\\Response;
use Symfony\\Component\\Routing\\Annotation\\Route;
use Symfony\\Component\\HttpFoundation\\Request;
use DateTime;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\SubmitType;

class FormulaireController extends AbstractController
{
    /**
     * @Route(\"/formulaire\", name=\"formulaire\")
     */
    public function index(Request \$request, EntityManagerInterface \$manager): Response
    {
        \$article = new Article();

        \$form = \$this->createFormBuilder(\$article, [
            'attr' => [
                'class' => \"container\"
            ]
        ])
                     ->add('titre')
                     ->add('image')
                     ->add('contenu')
                     ->getForm();
        
        return \$this->render('formulaire/index.html.twig', [
            'form' => \$form->createView()
        ]);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "formulaire/recup controlleur.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace App\\Controller;

use Doctrine\\ORM\\EntityManagerInterface;
use App\\Entity\\Article;
use Symfony\\Bundle\\FrameworkBundle\\Controller\\AbstractController;
use Symfony\\Component\\HttpFoundation\\Response;
use Symfony\\Component\\Routing\\Annotation\\Route;
use Symfony\\Component\\HttpFoundation\\Request;
use DateTime;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\SubmitType;

class FormulaireController extends AbstractController
{
    /**
     * @Route(\"/formulaire\", name=\"formulaire\")
     */
    public function index(Request \$request, EntityManagerInterface \$manager): Response
    {
        \$article = new Article();

        \$form = \$this->createFormBuilder(\$article, [
            'attr' => [
                'class' => \"container\"
            ]
        ])
                     ->add('titre')
                     ->add('image')
                     ->add('contenu')
                     ->getForm();
        
        return \$this->render('formulaire/index.html.twig', [
            'form' => \$form->createView()
        ]);
    }
}
", "formulaire/recup controlleur.php", "/var/www/html/DWWM-2020-2021/Veilles/Symfony Forms/veille_symfony_forms/templates/formulaire/recup controlleur.php");
    }
}

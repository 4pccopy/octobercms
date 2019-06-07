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

/* C:\localhosting\htdocs\chikaradojo/themes/dojo-theme/partials/jumbotron.htm */
class __TwigTemplate_582d193fa32c6ad0b70e363d6d38c5c128baf0bf63a4162dbfdcf7274c75e4c1 extends \Twig\Template
{
    private $source;

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
        // line 1
        echo "<section id=\"jumbotron\" class=\"m-t-3\">
\t<div class=\"jumbotron\">
\t\t<div class=\"container text-xs-center text-center\">
\t\t\t";
        // line 4
        $context['__placeholder_jumbotron_default_contents'] = null;        ob_start();        // line 5
        echo "\t\t\t<h1 class=\"display-3\">Chikara Kyokushin Karate Dojo</h1>
\t\t\t<p class=\"lead\">Welcome to Chikara Dojo. The North-Easts only Kyokushin Karate club!</p>
\t\t\t<hr class=\"m-y-2\">
\t\t\t<p>\"If you do not overcome your tendancy to give up easily, your life will lead to nothing\" Mas Oyama</p>
\t\t\t";
        $context['__placeholder_jumbotron_default_contents'] = ob_get_clean();        // line 4
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('jumbotron', $context['__placeholder_jumbotron_default_contents']);
        unset($context['__placeholder_jumbotron_default_contents']);        // line 10
        echo "\t\t</div>
\t</div>
</section>";
    }

    public function getTemplateName()
    {
        return "C:\\localhosting\\htdocs\\chikaradojo/themes/dojo-theme/partials/jumbotron.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 10,  47 => 4,  41 => 5,  40 => 4,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section id=\"jumbotron\" class=\"m-t-3\">
\t<div class=\"jumbotron\">
\t\t<div class=\"container text-xs-center text-center\">
\t\t\t{% placeholder jumbotron default %}
\t\t\t<h1 class=\"display-3\">Chikara Kyokushin Karate Dojo</h1>
\t\t\t<p class=\"lead\">Welcome to Chikara Dojo. The North-Easts only Kyokushin Karate club!</p>
\t\t\t<hr class=\"m-y-2\">
\t\t\t<p>\"If you do not overcome your tendancy to give up easily, your life will lead to nothing\" Mas Oyama</p>
\t\t\t{% endplaceholder %}
\t\t</div>
\t</div>
</section>", "C:\\localhosting\\htdocs\\chikaradojo/themes/dojo-theme/partials/jumbotron.htm", "");
    }
}

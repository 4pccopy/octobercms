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

/* C:\localhosting\htdocs\chikaradojo/themes/dojo-theme/partials/navbar.htm */
class __TwigTemplate_853cb27f656413566a80ccd799efa12e45518d0f91ed3c21b5482c6242ace7c8 extends \Twig\Template
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
        echo "<section id=\"navbar\" class=\"pb-5\">
\t<nav class=\"navbar fixed-top navbar-expand-lg navbar-dark bg-dark\">
  <a class=\"navbar-brand\" href=\"";
        // line 3
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("home");
        echo "\">Chikara Dojo</a>
  <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarNavDropdown\" aria-controls=\"navbarNavDropdown\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
    <span class=\"navbar-toggler-icon\"></span>
  </button>
  <div class=\"collapse navbar-collapse\" id=\"navbarNavDropdown\">
    <ul class=\"navbar-nav\">
      <li class=\"nav-item";
        // line 9
        echo (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 9), "baseFileName", [], "any", false, false, false, 9) == "home")) ? (" active") : (""));
        echo "\">
        <a class=\"nav-link \" href=\"";
        // line 10
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("home");
        echo "\">Home <span class=\"sr-only\">(current)</span></a>
      </li>
      <li class=\"nav-item";
        // line 12
        echo (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 12), "baseFileName", [], "any", false, false, false, 12) == "about")) ? (" active") : (""));
        echo "\">
        <a class=\"nav-link\" href=\"";
        // line 13
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("about");
        echo "\">About</a>
      </li>
      <li class=\"nav-item";
        // line 15
        echo (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 15), "baseFileName", [], "any", false, false, false, 15) == "blog")) ? (" active") : (""));
        echo "\">
        <a class=\"nav-link\" href=\"";
        // line 16
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("blog");
        echo "\">Blog</a>
      </li>
\t\t\t<li class=\"nav-item";
        // line 18
        echo (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 18), "baseFileName", [], "any", false, false, false, 18) == "contact")) ? (" active") : (""));
        echo "\">
\t\t\t\t<a class=\"nav-link\" href=\"";
        // line 19
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("contact");
        echo "\">contact</a>
\t\t\t</li>
    </ul>
  </div>
</nav>
</section>";
    }

    public function getTemplateName()
    {
        return "C:\\localhosting\\htdocs\\chikaradojo/themes/dojo-theme/partials/navbar.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 19,  75 => 18,  70 => 16,  66 => 15,  61 => 13,  57 => 12,  52 => 10,  48 => 9,  39 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section id=\"navbar\" class=\"pb-5\">
\t<nav class=\"navbar fixed-top navbar-expand-lg navbar-dark bg-dark\">
  <a class=\"navbar-brand\" href=\"{{ 'home'|page }}\">Chikara Dojo</a>
  <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarNavDropdown\" aria-controls=\"navbarNavDropdown\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
    <span class=\"navbar-toggler-icon\"></span>
  </button>
  <div class=\"collapse navbar-collapse\" id=\"navbarNavDropdown\">
    <ul class=\"navbar-nav\">
      <li class=\"nav-item{{ this.page.baseFileName == 'home' ? ' active' }}\">
        <a class=\"nav-link \" href=\"{{ 'home'|page }}\">Home <span class=\"sr-only\">(current)</span></a>
      </li>
      <li class=\"nav-item{{ this.page.baseFileName == 'about' ? ' active' }}\">
        <a class=\"nav-link\" href=\"{{ 'about'|page }}\">About</a>
      </li>
      <li class=\"nav-item{{ this.page.baseFileName == 'blog' ? ' active' }}\">
        <a class=\"nav-link\" href=\"{{ 'blog'|page }}\">Blog</a>
      </li>
\t\t\t<li class=\"nav-item{{ this.page.baseFileName == 'contact' ? ' active' }}\">
\t\t\t\t<a class=\"nav-link\" href=\"{{ 'contact'|page }}\">contact</a>
\t\t\t</li>
    </ul>
  </div>
</nav>
</section>", "C:\\localhosting\\htdocs\\chikaradojo/themes/dojo-theme/partials/navbar.htm", "");
    }
}

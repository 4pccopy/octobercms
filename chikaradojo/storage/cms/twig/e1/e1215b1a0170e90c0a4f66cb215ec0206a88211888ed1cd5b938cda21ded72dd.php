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

/* C:\localhosting\htdocs\chikaradojo/themes/dojo-theme/pages/home.htm */
class __TwigTemplate_70d00a44636adedf719860614c6e6257fd20cfe08e747eaf3c018e0a650a174e extends \Twig\Template
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
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("jumbotron"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 2
        echo "
<div class=\"container.fluid  mt-5\">
  <div class=\"row mb-3\">
    <div class=\"col justify-content-center text-center\">
      <h3> Check out our blog</h3>
      <a href=\"";
        // line 7
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("blog");
        echo "\" type=\"button\" class=\"btn btn-danger btn-lg w-75\" >Blog</a>
    </div>
    <div class=\"col justify-content-center text-center\">
      <h3> Learn more about our club!</h3>
      <a href=\"";
        // line 11
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("about");
        echo "\"  type=\"button\" class=\"btn btn-danger btn-lg w-75\">About us</a>
    </div>
  </div>

  </div>

<div class=\"container  mt-5\">
<div class=\"row justify-content-center\">
        <h1 class=\"text-center\">Welcome to the home of Chikara Karate Dojo</h1>

        <p class=\"text-center\">Here at Chikara Karate Dojo we live and practice the teachings of Sosai Mas Oyama and his Knockdown style of Kyokushin Extreme Karate.</p>

        <p class=\"text-center\">Through self-discipline and hard training, we strive to perfect both body and mind turn them into powerful tools for everyday life. By perfecting both the body and mind together you can turn yourself into the perfect tool for everyday life. Both mentally and physically.</p>

        <p class=\"text-center\">Based in Spennymoor, County Durham we are open 4 days a week for our regular classes and cater to both children and adults. Whether you wish to train for fitness, competition, or just for something to fill your evenings, we can cater to you.</p>

        <p class=\"text-center\">If you have any questions or queries about our Karate style or club, please get in touch with us on 07713 411198 or reach us on our contact page.</p>

        <p class=\"text-center\">We hope to see you with us soon. <strong>OSU!!</strong></p>

      </div>



</div>


<!--<div class=\"container\">
  <div id=\"carouselExampleSlidesOnly\" class=\"carousel slide\" data-ride=\"carousel\">
    <div class=\"carousel-inner\">
      <div class=\"carousel-item active\">
        <img class=\"d-block w-100\" src=\"http://localhost:888/chikaradojo/storage/app/media/image1.jpg\" alt=\"First slide\">
      </div>
      <div class=\"carousel-item\">
        <img class=\"d-block w-100\" src=\"http://localhost:888/chikaradojo/storage/app/media/image2.jpg\" alt=\"Second slide\">
      </div>
      <div class=\"carousel-item\">
        <img class=\"d-block w-100\" src=\"http://localhost:888/chikaradojo/storage/app/media/image3.jpg\" alt=\"Third slide\">
      </div>
    </div>
  </div>
</div> -->

<!-- <div class=\"container\">
  <img class=\"rounded\" src=\"http://localhost:888/chikaradojo/storage/app/media/23794844_1815154978496988_7230713849417357789_n.jpg\" >
</div> -->";
    }

    public function getTemplateName()
    {
        return "C:\\localhosting\\htdocs\\chikaradojo/themes/dojo-theme/pages/home.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 11,  46 => 7,  39 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% partial 'jumbotron' %}

<div class=\"container.fluid  mt-5\">
  <div class=\"row mb-3\">
    <div class=\"col justify-content-center text-center\">
      <h3> Check out our blog</h3>
      <a href=\"{{ 'blog'|page }}\" type=\"button\" class=\"btn btn-danger btn-lg w-75\" >Blog</a>
    </div>
    <div class=\"col justify-content-center text-center\">
      <h3> Learn more about our club!</h3>
      <a href=\"{{ 'about'|page }}\"  type=\"button\" class=\"btn btn-danger btn-lg w-75\">About us</a>
    </div>
  </div>

  </div>

<div class=\"container  mt-5\">
<div class=\"row justify-content-center\">
        <h1 class=\"text-center\">Welcome to the home of Chikara Karate Dojo</h1>

        <p class=\"text-center\">Here at Chikara Karate Dojo we live and practice the teachings of Sosai Mas Oyama and his Knockdown style of Kyokushin Extreme Karate.</p>

        <p class=\"text-center\">Through self-discipline and hard training, we strive to perfect both body and mind turn them into powerful tools for everyday life. By perfecting both the body and mind together you can turn yourself into the perfect tool for everyday life. Both mentally and physically.</p>

        <p class=\"text-center\">Based in Spennymoor, County Durham we are open 4 days a week for our regular classes and cater to both children and adults. Whether you wish to train for fitness, competition, or just for something to fill your evenings, we can cater to you.</p>

        <p class=\"text-center\">If you have any questions or queries about our Karate style or club, please get in touch with us on 07713 411198 or reach us on our contact page.</p>

        <p class=\"text-center\">We hope to see you with us soon. <strong>OSU!!</strong></p>

      </div>



</div>


<!--<div class=\"container\">
  <div id=\"carouselExampleSlidesOnly\" class=\"carousel slide\" data-ride=\"carousel\">
    <div class=\"carousel-inner\">
      <div class=\"carousel-item active\">
        <img class=\"d-block w-100\" src=\"http://localhost:888/chikaradojo/storage/app/media/image1.jpg\" alt=\"First slide\">
      </div>
      <div class=\"carousel-item\">
        <img class=\"d-block w-100\" src=\"http://localhost:888/chikaradojo/storage/app/media/image2.jpg\" alt=\"Second slide\">
      </div>
      <div class=\"carousel-item\">
        <img class=\"d-block w-100\" src=\"http://localhost:888/chikaradojo/storage/app/media/image3.jpg\" alt=\"Third slide\">
      </div>
    </div>
  </div>
</div> -->

<!-- <div class=\"container\">
  <img class=\"rounded\" src=\"http://localhost:888/chikaradojo/storage/app/media/23794844_1815154978496988_7230713849417357789_n.jpg\" >
</div> -->", "C:\\localhosting\\htdocs\\chikaradojo/themes/dojo-theme/pages/home.htm", "");
    }
}

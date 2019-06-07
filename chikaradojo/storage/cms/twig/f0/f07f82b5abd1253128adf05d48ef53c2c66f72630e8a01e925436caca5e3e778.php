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

/* C:\localhosting\htdocs\chikaradojo/themes/dojo-theme/pages/contact.htm */
class __TwigTemplate_37d066813020556ba5de23b4af007a936bc87332cbed2b23e460c6030cbd9a4d extends \Twig\Template
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
        echo "<div class=\"container mt-5\">
<h2>Contact</h2>
<p>For all enquires about class times and prices, as well as upcoming competitions and events, please feel free to contact us on the form below or reach out to us on our Facebook Page.</p>

<p>You can also call us on 07713 411198.</p>
</div>

<form class=\"container mt-5\">
  <div class=\"row\">
  <div class=\"col\">
    <label for=\"firstName\">First Name</label>
    <input type=\"text\" class=\"form-control\" id=\"firstName\" placeholder=\"First name\">
  </div>
  <div class=\"col\">
    <label for=\"lastName\">Last Name</label>
    <input type=\"text\" class=\"form-control\" id=\"lastName\" placeholder=\"Last name\">
  </div>
</div>
  <div class=\"form-group mt-2\">
    <label for=\"formEmailInput\">Email address</label>
    <input type=\"email\" class=\"form-control\" id=\"formEmailInput\" placeholder=\"name@example.com\">
  </div>
  <div class=\"form-group\">
    <label for=\"formTextInput\">Your comment here!</label>
    <textarea class=\"form-control\" id=\"formTextInput\" rows=\"3\"></textarea>
  </div>
  <button class=\"btn btn-danger\" type=\"submit\">Submit details</button>

  <ul>

    ";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "all", [], "method", false, false, false, 31));
        foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
            // line 32
            echo "      <li>";
            echo twig_escape_filter($this->env, $context["error"], "html", null, true);
            echo "</li>

    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "  </ul>
</form>";
    }

    public function getTemplateName()
    {
        return "C:\\localhosting\\htdocs\\chikaradojo/themes/dojo-theme/pages/contact.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 35,  71 => 32,  67 => 31,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"container mt-5\">
<h2>Contact</h2>
<p>For all enquires about class times and prices, as well as upcoming competitions and events, please feel free to contact us on the form below or reach out to us on our Facebook Page.</p>

<p>You can also call us on 07713 411198.</p>
</div>

<form class=\"container mt-5\">
  <div class=\"row\">
  <div class=\"col\">
    <label for=\"firstName\">First Name</label>
    <input type=\"text\" class=\"form-control\" id=\"firstName\" placeholder=\"First name\">
  </div>
  <div class=\"col\">
    <label for=\"lastName\">Last Name</label>
    <input type=\"text\" class=\"form-control\" id=\"lastName\" placeholder=\"Last name\">
  </div>
</div>
  <div class=\"form-group mt-2\">
    <label for=\"formEmailInput\">Email address</label>
    <input type=\"email\" class=\"form-control\" id=\"formEmailInput\" placeholder=\"name@example.com\">
  </div>
  <div class=\"form-group\">
    <label for=\"formTextInput\">Your comment here!</label>
    <textarea class=\"form-control\" id=\"formTextInput\" rows=\"3\"></textarea>
  </div>
  <button class=\"btn btn-danger\" type=\"submit\">Submit details</button>

  <ul>

    {% for error in errors.all() %}
      <li>{{ error }}</li>

    {% endfor %}
  </ul>
</form>", "C:\\localhosting\\htdocs\\chikaradojo/themes/dojo-theme/pages/contact.htm", "");
    }
}

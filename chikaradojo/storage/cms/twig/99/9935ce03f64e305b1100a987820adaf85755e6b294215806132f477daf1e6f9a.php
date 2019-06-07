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

/* C:\localhosting\htdocs\chikaradojo/themes/dojo-theme/pages/blog.htm */
class __TwigTemplate_12ba713ced22563cd49ab38d4333b7960aaca19afdca8fdbb02892049e4ce4ef extends \Twig\Template
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
        $context["posts"] = twig_get_attribute($this->env, $this->source, ($context["blogPosts"] ?? null), "posts", [], "any", false, false, false, 1);
        // line 2
        echo "<div class=\"container mt-5\">
  <h2>Welcome to our Blog</h2>

  <p> Here you will find all of our recent and past posts regarding all that goes on in our club. If anything you read here interests you further, please do get in <a href=\"";
        // line 5
        echo $this->extensions['Cms\Twig\Extension']->pageFilter(($context["contact"] ?? null));
        echo "\"><strong>touch</strong></a>

</div>
<div class=\"container\">
  <div class=\"row\">
    <div class=\"col-9\">
      <ul class=\"post-list list-unstyled\">
          ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["posts"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 13
            echo "              <li>
                  <h3><a class=\"blogTitles\" href=\"";
            // line 14
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "url", [], "any", false, false, false, 14), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "title", [], "any", false, false, false, 14), "html", null, true);
            echo "</a></h3>

                  <p class=\"info\">
                      Posted
                      ";
            // line 18
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["post"], "categories", [], "any", false, false, false, 18), "count", [], "any", false, false, false, 18)) {
                echo " in ";
            }
            // line 19
            echo "                      ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["post"], "categories", [], "any", false, false, false, 19));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 20
                echo "                          <a href=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "url", [], "any", false, false, false, 20), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 20), "html", null, true);
                echo "</a>";
                if ( !twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 20)) {
                    echo ", ";
                }
                // line 21
                echo "                      ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 22
            echo "                      on ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "published_at", [], "any", false, false, false, 22), "M d, Y"), "html", null, true);
            echo "
                  </p>

                  <p class=\"excerpt\">";
            // line 25
            echo twig_get_attribute($this->env, $this->source, $context["post"], "summary", [], "any", false, false, false, 25);
            echo "</p>
                      <hr>
              </li>
          ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 29
            echo "              <li class=\"no-data\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["blogPosts"] ?? null), "noPostsMessage", [], "any", false, false, false, 29), "html", null, true);
            echo "</li>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "
      </ul>
    </div>
    <div class=\"col-3\">
      <img src=\"http://localhost:888/chikaradojo/storage/app/media/iko.jpg\" class=\"rounded img-fluid\">
    </div>
  </div>




";
        // line 42
        if ((twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "lastPage", [], "any", false, false, false, 42) > 1)) {
            // line 43
            echo "    <ul class=\"pagination\">
        ";
            // line 44
            if ((twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "currentPage", [], "any", false, false, false, 44) > 1)) {
                // line 45
                echo "            <li><a href=\"";
                echo $this->extensions['Cms\Twig\Extension']->pageFilter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 45), "baseFileName", [], "any", false, false, false, 45), [twig_get_attribute($this->env, $this->source, ($context["blogPosts"] ?? null), "pageParam", [], "any", false, false, false, 45) => (twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "currentPage", [], "any", false, false, false, 45) - 1)]);
                echo "\">&larr; Prev</a></li>
        ";
            }
            // line 47
            echo "
        ";
            // line 48
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "lastPage", [], "any", false, false, false, 48)));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 49
                echo "            <li class=\"";
                echo (((twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "currentPage", [], "any", false, false, false, 49) == $context["page"])) ? ("active") : (null));
                echo "\">
                <a href=\"";
                // line 50
                echo $this->extensions['Cms\Twig\Extension']->pageFilter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 50), "baseFileName", [], "any", false, false, false, 50), [twig_get_attribute($this->env, $this->source, ($context["blogPosts"] ?? null), "pageParam", [], "any", false, false, false, 50) => $context["page"]]);
                echo "\">";
                echo twig_escape_filter($this->env, $context["page"], "html", null, true);
                echo "</a>
            </li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 53
            echo "
        ";
            // line 54
            if ((twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "lastPage", [], "any", false, false, false, 54) > twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "currentPage", [], "any", false, false, false, 54))) {
                // line 55
                echo "            <li><a href=\"";
                echo $this->extensions['Cms\Twig\Extension']->pageFilter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 55), "baseFileName", [], "any", false, false, false, 55), [twig_get_attribute($this->env, $this->source, ($context["blogPosts"] ?? null), "pageParam", [], "any", false, false, false, 55) => (twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "currentPage", [], "any", false, false, false, 55) + 1)]);
                echo "\">Next &rarr;</a></li>
        ";
            }
            // line 57
            echo "    </ul>
";
        }
        // line 59
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "C:\\localhosting\\htdocs\\chikaradojo/themes/dojo-theme/pages/blog.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  203 => 59,  199 => 57,  193 => 55,  191 => 54,  188 => 53,  177 => 50,  172 => 49,  168 => 48,  165 => 47,  159 => 45,  157 => 44,  154 => 43,  152 => 42,  139 => 31,  130 => 29,  121 => 25,  114 => 22,  100 => 21,  91 => 20,  73 => 19,  69 => 18,  60 => 14,  57 => 13,  52 => 12,  42 => 5,  37 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set posts = blogPosts.posts %}
<div class=\"container mt-5\">
  <h2>Welcome to our Blog</h2>

  <p> Here you will find all of our recent and past posts regarding all that goes on in our club. If anything you read here interests you further, please do get in <a href=\"{{ contact|page }}\"><strong>touch</strong></a>

</div>
<div class=\"container\">
  <div class=\"row\">
    <div class=\"col-9\">
      <ul class=\"post-list list-unstyled\">
          {% for post in posts %}
              <li>
                  <h3><a class=\"blogTitles\" href=\"{{ post.url }}\">{{ post.title }}</a></h3>

                  <p class=\"info\">
                      Posted
                      {% if post.categories.count %} in {% endif %}
                      {% for category in post.categories %}
                          <a href=\"{{ category.url }}\">{{ category.name }}</a>{% if not loop.last %}, {% endif %}
                      {% endfor %}
                      on {{ post.published_at|date('M d, Y') }}
                  </p>

                  <p class=\"excerpt\">{{ post.summary|raw }}</p>
                      <hr>
              </li>
          {% else %}
              <li class=\"no-data\">{{ blogPosts.noPostsMessage }}</li>
          {% endfor %}

      </ul>
    </div>
    <div class=\"col-3\">
      <img src=\"http://localhost:888/chikaradojo/storage/app/media/iko.jpg\" class=\"rounded img-fluid\">
    </div>
  </div>




{% if posts.lastPage > 1 %}
    <ul class=\"pagination\">
        {% if posts.currentPage > 1 %}
            <li><a href=\"{{ this.page.baseFileName|page({ (blogPosts.pageParam): (posts.currentPage-1) }) }}\">&larr; Prev</a></li>
        {% endif %}

        {% for page in 1..posts.lastPage %}
            <li class=\"{{ posts.currentPage == page ? 'active' : null }}\">
                <a href=\"{{ this.page.baseFileName|page({ (blogPosts.pageParam): page }) }}\">{{ page }}</a>
            </li>
        {% endfor %}

        {% if posts.lastPage > posts.currentPage %}
            <li><a href=\"{{ this.page.baseFileName|page({ (blogPosts.pageParam): (posts.currentPage+1) }) }}\">Next &rarr;</a></li>
        {% endif %}
    </ul>
{% endif %}
</div>", "C:\\localhosting\\htdocs\\chikaradojo/themes/dojo-theme/pages/blog.htm", "");
    }
}

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

/* C:\localhosting\htdocs\chikaradojo/themes/dojo-theme/pages/blogsingle.htm */
class __TwigTemplate_1dc04eff92f288646b912d5d56816e8853258cdcfc4269c9db10dbd069956219 extends \Twig\Template
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
        $context["post"] = twig_get_attribute($this->env, $this->source, ($context["blogPost"] ?? null), "post", [], "any", false, false, false, 1);
        // line 2
        echo "<div class=\"container pt-5\">
  <div class=\"row\">
    <div class=\"col-9\">
      <div class=\"content\">";
        // line 5
        echo twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "content_html", [], "any", false, false, false, 5);
        echo "</div>

      ";
        // line 7
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "featured_images", [], "any", false, false, false, 7), "count", [], "any", false, false, false, 7)) {
            // line 8
            echo "          <div class=\"featured-images text-center\">
              ";
            // line 9
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "featured_images", [], "any", false, false, false, 9));
            foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                // line 10
                echo "                  <p>
                      <img class=\"img-fluid\"
                          data-src=\"";
                // line 12
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["image"], "filename", [], "any", false, false, false, 12), "html", null, true);
                echo "\"
                          src=\"";
                // line 13
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["image"], "path", [], "any", false, false, false, 13), "html", null, true);
                echo "\"
                          alt=\"";
                // line 14
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["image"], "description", [], "any", false, false, false, 14), "html", null, true);
                echo "\"
                          style=\"max-width: 100%\" />
                  </p>
              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 18
            echo "          </div>
      ";
        }
        // line 20
        echo "
      <p class=\"info\">
          Posted
          ";
        // line 23
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "categories", [], "any", false, false, false, 23), "count", [], "any", false, false, false, 23)) {
            echo " in
              ";
            // line 24
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "categories", [], "any", false, false, false, 24));
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
                // line 25
                echo "                  <a href=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "url", [], "any", false, false, false, 25), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 25), "html", null, true);
                echo "</a>";
                if ( !twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 25)) {
                    echo ", ";
                }
                // line 26
                echo "              ";
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
            // line 27
            echo "          ";
        }
        // line 28
        echo "          on ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "published_at", [], "any", false, false, false, 28), "M d, Y"), "html", null, true);
        echo "
      </p>
    </div>

    <div class=\"col-3\">
      <h4>Check out our other posts</h4>
    ";
        // line 34
        $context["posts"] = twig_get_attribute($this->env, $this->source, ($context["blogPosts"] ?? null), "posts", [], "any", false, false, false, 34);
        // line 35
        echo "
<ul class=\"post-list list-unstyled\">
    ";
        // line 37
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["posts"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 38
            echo "        <li>
            <h3><a class=\"blogTitles\" href=\"";
            // line 39
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "url", [], "any", false, false, false, 39), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "title", [], "any", false, false, false, 39), "html", null, true);
            echo "</a></h3>

            <p class=\"info\">
                Posted
                ";
            // line 43
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["post"], "categories", [], "any", false, false, false, 43), "count", [], "any", false, false, false, 43)) {
                echo " in ";
            }
            // line 44
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["post"], "categories", [], "any", false, false, false, 44));
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
                // line 45
                echo "                    <a href=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "url", [], "any", false, false, false, 45), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 45), "html", null, true);
                echo "</a>";
                if ( !twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 45)) {
                    echo ", ";
                }
                // line 46
                echo "                ";
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
            // line 47
            echo "                on ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "published_at", [], "any", false, false, false, 47), "M d, Y"), "html", null, true);
            echo "
            </p>

        </li>
    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 52
            echo "        <li class=\"no-data\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["blogPosts"] ?? null), "noPostsMessage", [], "any", false, false, false, 52), "html", null, true);
            echo "</li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        echo "</ul>

";
        // line 56
        if ((twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "lastPage", [], "any", false, false, false, 56) > 1)) {
            // line 57
            echo "    <ul class=\"pagination\">
        ";
            // line 58
            if ((twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "currentPage", [], "any", false, false, false, 58) > 1)) {
                // line 59
                echo "            <li><a href=\"";
                echo $this->extensions['Cms\Twig\Extension']->pageFilter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 59), "baseFileName", [], "any", false, false, false, 59), [twig_get_attribute($this->env, $this->source, ($context["blogPosts"] ?? null), "pageParam", [], "any", false, false, false, 59) => (twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "currentPage", [], "any", false, false, false, 59) - 1)]);
                echo "\">&larr; Prev</a></li>
        ";
            }
            // line 61
            echo "
        ";
            // line 62
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "lastPage", [], "any", false, false, false, 62)));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 63
                echo "            <li class=\"";
                echo (((twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "currentPage", [], "any", false, false, false, 63) == $context["page"])) ? ("active") : (null));
                echo "\">
                <a href=\"";
                // line 64
                echo $this->extensions['Cms\Twig\Extension']->pageFilter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 64), "baseFileName", [], "any", false, false, false, 64), [twig_get_attribute($this->env, $this->source, ($context["blogPosts"] ?? null), "pageParam", [], "any", false, false, false, 64) => $context["page"]]);
                echo "\">";
                echo twig_escape_filter($this->env, $context["page"], "html", null, true);
                echo "</a>
            </li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 67
            echo "
        ";
            // line 68
            if ((twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "lastPage", [], "any", false, false, false, 68) > twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "currentPage", [], "any", false, false, false, 68))) {
                // line 69
                echo "            <li><a href=\"";
                echo $this->extensions['Cms\Twig\Extension']->pageFilter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 69), "baseFileName", [], "any", false, false, false, 69), [twig_get_attribute($this->env, $this->source, ($context["blogPosts"] ?? null), "pageParam", [], "any", false, false, false, 69) => (twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "currentPage", [], "any", false, false, false, 69) + 1)]);
                echo "\">Next &rarr;</a></li>
        ";
            }
            // line 71
            echo "    </ul>
";
        }
        // line 73
        echo "
    </div>
  </div>
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\localhosting\\htdocs\\chikaradojo/themes/dojo-theme/pages/blogsingle.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  287 => 73,  283 => 71,  277 => 69,  275 => 68,  272 => 67,  261 => 64,  256 => 63,  252 => 62,  249 => 61,  243 => 59,  241 => 58,  238 => 57,  236 => 56,  232 => 54,  223 => 52,  212 => 47,  198 => 46,  189 => 45,  171 => 44,  167 => 43,  158 => 39,  155 => 38,  150 => 37,  146 => 35,  144 => 34,  134 => 28,  131 => 27,  117 => 26,  108 => 25,  91 => 24,  87 => 23,  82 => 20,  78 => 18,  68 => 14,  64 => 13,  60 => 12,  56 => 10,  52 => 9,  49 => 8,  47 => 7,  42 => 5,  37 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set post = blogPost.post %}
<div class=\"container pt-5\">
  <div class=\"row\">
    <div class=\"col-9\">
      <div class=\"content\">{{ post.content_html|raw }}</div>

      {% if post.featured_images.count %}
          <div class=\"featured-images text-center\">
              {% for image in post.featured_images %}
                  <p>
                      <img class=\"img-fluid\"
                          data-src=\"{{ image.filename }}\"
                          src=\"{{ image.path }}\"
                          alt=\"{{ image.description }}\"
                          style=\"max-width: 100%\" />
                  </p>
              {% endfor %}
          </div>
      {% endif %}

      <p class=\"info\">
          Posted
          {% if post.categories.count %} in
              {% for category in post.categories %}
                  <a href=\"{{ category.url }}\">{{ category.name }}</a>{% if not loop.last %}, {% endif %}
              {% endfor %}
          {% endif %}
          on {{ post.published_at|date('M d, Y') }}
      </p>
    </div>

    <div class=\"col-3\">
      <h4>Check out our other posts</h4>
    {% set posts = blogPosts.posts %}

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

        </li>
    {% else %}
        <li class=\"no-data\">{{ blogPosts.noPostsMessage }}</li>
    {% endfor %}
</ul>

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

    </div>
  </div>
</div>", "C:\\localhosting\\htdocs\\chikaradojo/themes/dojo-theme/pages/blogsingle.htm", "");
    }
}

<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* modules/contrib/diba_carousel/templates/block--diba-carousel.html.twig */
class __TwigTemplate_9ebc1032a5d68777127736d267ae1a1c8279dee2ab878d8975bea805215afe57 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 9, "block" => 18, "set" => 19, "for" => 34, "trans" => 98];
        $filters = ["escape" => 7, "length" => 19, "round" => 23, "striptags" => 61, "raw" => 61, "t" => 113];
        $functions = ["attach_library" => 15, "range" => 34, "file_url" => 61, "link" => 69];

        try {
            $this->sandbox->checkSecurity(
                ['if', 'block', 'set', 'for', 'trans'],
                ['escape', 'length', 'round', 'striptags', 'raw', 't'],
                ['attach_library', 'range', 'file_url', 'link']
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 7
        echo "<div";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["attributes"] ?? null), "addClass", [0 => [0 => "block", 1 => "diba-carousel"]], "method")), "html", null, true);
        echo ">
  ";
        // line 8
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null)), "html", null, true);
        echo "
  ";
        // line 9
        if (($context["label"] ?? null)) {
            // line 10
            echo "    <h2";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_attributes"] ?? null)), "html", null, true);
            echo ">";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null)), "html", null, true);
            echo "</h2>
  ";
        }
        // line 12
        echo "  ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null)), "html", null, true);
        echo "

  ";
        // line 14
        if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["elements"] ?? null), "content", []), "config", []), "carousel_style", []) == "diba")) {
            // line 15
            echo "    ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->attachLibrary("diba_carousel/diba-style"), "html", null, true);
            echo "
  ";
        }
        // line 17
        echo "
  ";
        // line 18
        $this->displayBlock('content', $context, $blocks);
        // line 118
        echo "</div>
";
    }

    // line 18
    public function block_content($context, array $blocks = [])
    {
        // line 19
        echo "    ";
        $context["items_count"] = twig_length_filter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["elements"] ?? null), "content", []), "items", [])));
        // line 20
        echo "
    ";
        // line 21
        if ((($context["items_count"] ?? null) > 0)) {
            // line 22
            echo "      ";
            $context["items_by_slide"] = $this->getAttribute($this->getAttribute($this->getAttribute(($context["elements"] ?? null), "content", []), "config", []), "items_by_slide", []);
            // line 23
            echo "      ";
            $context["slides_count"] = twig_round((($context["items_count"] ?? null) / ($context["items_by_slide"] ?? null)), 0, "ceil");
            // line 24
            echo "      ";
            $context["data_interval"] = $this->getAttribute($this->getAttribute($this->getAttribute(($context["elements"] ?? null), "content", []), "config", []), "data_interval", []);
            // line 25
            echo "
      ";
            // line 26
            if ((($context["data_interval"] ?? null) == 0)) {
                // line 27
                echo "        ";
                $context["data_interval"] = "false";
                // line 28
                echo "      ";
            }
            // line 29
            echo "      <div id=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["elements"] ?? null), "content", []), "id", [])), "html", null, true);
            echo "\" class=\"carousel slide\" data-ride=\"carousel\" data-interval=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["data_interval"] ?? null)), "html", null, true);
            echo "\">

        ";
            // line 32
            echo "        ";
            if (((($context["slides_count"] ?? null) > 1) && $this->getAttribute($this->getAttribute($this->getAttribute(($context["elements"] ?? null), "content", []), "config", []), "show_indicators", []))) {
                // line 33
                echo "          <ol class=\"carousel-indicators\">
          ";
                // line 34
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(0, (($context["slides_count"] ?? null) - 1)));
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
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 35
                    echo "            <li data-target=\"#";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["elements"] ?? null), "content", []), "id", [])), "html", null, true);
                    echo "\" data-slide-to=\"";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($context["i"]), "html", null, true);
                    echo "\"";
                    if ($this->getAttribute($context["loop"], "first", [])) {
                        echo " class=\"active\"";
                    }
                    echo "></li>
          ";
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
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 37
                echo "          </ol>
        ";
            }
            // line 39
            echo "
        <div class=\"carousel-inner\">
          ";
            // line 41
            $context["item_cols"] = (12 / ($context["items_by_slide"] ?? null));
            // line 42
            echo "          ";
            $context["item_slide"] = 0;
            // line 43
            echo "
          ";
            // line 45
            echo "          ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["elements"] ?? null), "content", []), "items", []));
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
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 46
                echo "            ";
                $context["item_slide"] = (($context["item_slide"] ?? null) + 1);
                // line 47
                echo "
            ";
                // line 49
                echo "            ";
                if ((($context["item_slide"] ?? null) == 1)) {
                    // line 50
                    echo "              <div class=\"item carousel-item";
                    if ($this->getAttribute($context["loop"], "first", [])) {
                        echo " active";
                    }
                    echo "\">
            ";
                }
                // line 52
                echo "
              ";
                // line 54
                echo "              ";
                if ((($context["items_by_slide"] ?? null) > 1)) {
                    // line 55
                    echo "                ";
                    if ((($context["item_slide"] ?? null) == 1)) {
                        echo "<div class=\"row carousel-row\">";
                    }
                    // line 56
                    echo "                <div class=\"col-sm-";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["item_cols"] ?? null)), "html", null, true);
                    echo " carousel-col\">
              ";
                }
                // line 58
                echo "
                ";
                // line 60
                echo "                ";
                if ($this->getAttribute($context["item"], "image", [])) {
                    // line 61
                    echo "                  <img src=\"";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, call_user_func_array($this->env->getFunction('file_url')->getCallable(), [$this->sandbox->ensureToStringAllowed($this->getAttribute($context["item"], "image", []))]), "html", null, true);
                    echo "\" alt=\"";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, strip_tags($this->sandbox->ensureToStringAllowed($this->getAttribute($context["item"], "title", []))), "html", null, true);
                    echo "\" width=\"";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["item"], "image_width", [])), "html", null, true);
                    echo "\" height=\"";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["item"], "image_height", [])), "html", null, true);
                    echo "\"";
                    if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["elements"] ?? null), "content", []), "config", []), "image_class", [])) {
                        echo " class=\"";
                        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->getAttribute(($context["elements"] ?? null), "content", []), "config", []), "image_class", [])), "html", null, true);
                        echo "\"";
                    }
                    echo ">
                ";
                }
                // line 63
                echo "
                ";
                // line 65
                echo "                <div class=\"carousel-caption\">
                  ";
                // line 66
                if ($this->getAttribute($context["item"], "title", [])) {
                    // line 67
                    echo "                    <h2 class=\"caption-title\">
                      ";
                    // line 68
                    if ($this->getAttribute($context["item"], "url", [])) {
                        // line 69
                        echo "                        ";
                        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->getLink($this->sandbox->ensureToStringAllowed($this->getAttribute($context["item"], "title", [])), $this->sandbox->ensureToStringAllowed($this->getAttribute($context["item"], "url", []))), "html", null, true);
                        echo "
                      ";
                    } else {
                        // line 71
                        echo "                        ";
                        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->sandbox->ensureToStringAllowed($this->getAttribute($context["item"], "title", [])));
                        echo "
                      ";
                    }
                    // line 73
                    echo "                    </h2>
                  ";
                }
                // line 75
                echo "                  ";
                if ($this->getAttribute($context["item"], "description", [])) {
                    // line 76
                    echo "                    <div class=\"caption-desc\">";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->sandbox->ensureToStringAllowed($this->getAttribute($context["item"], "description", [])));
                    echo "</div>
                  ";
                }
                // line 78
                echo "                </div>

              ";
                // line 81
                echo "              ";
                if ((($context["items_by_slide"] ?? null) > 1)) {
                    // line 82
                    echo "                </div>
                ";
                    // line 83
                    if (($this->getAttribute($context["loop"], "last", []) || (($context["item_slide"] ?? null) >= ($context["items_by_slide"] ?? null)))) {
                        echo "</div>";
                    }
                    // line 84
                    echo "              ";
                }
                // line 85
                echo "
            ";
                // line 87
                echo "            ";
                if (($this->getAttribute($context["loop"], "last", []) || (($context["item_slide"] ?? null) >= ($context["items_by_slide"] ?? null)))) {
                    // line 88
                    echo "              </div>
              ";
                    // line 89
                    $context["item_slide"] = 0;
                    // line 90
                    echo "            ";
                }
                // line 91
                echo "          ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 92
            echo "
          ";
            // line 94
            echo "          ";
            if (((($context["slides_count"] ?? null) > 1) && $this->getAttribute($this->getAttribute($this->getAttribute(($context["elements"] ?? null), "content", []), "config", []), "show_controls", []))) {
                // line 95
                echo "            <div class=\"carousel-controls\">
              <a class=\"carousel-control-prev left carousel-control\" href=\"#";
                // line 96
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["elements"] ?? null), "content", []), "id", [])), "html", null, true);
                echo "\" role=\"button\" data-slide=\"prev\">
                <span class=\"carousel-control-prev-icon glyphicon glyphicon-chevron-left\" aria-hidden=\"true\"></span>
                <span class=\"sr-only\">";
                // line 98
                echo t("Previous", array());
                echo "</span>
              </a>
              <a class=\"carousel-control-next right carousel-control\" href=\"#";
                // line 100
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["elements"] ?? null), "content", []), "id", [])), "html", null, true);
                echo "\" role=\"button\" data-slide=\"next\">
                <span class=\"carousel-control-next-icon glyphicon glyphicon-chevron-right\" aria-hidden=\"true\"></span>
                <span class=\"sr-only\">";
                // line 102
                echo t("Next", array());
                echo "</span>
              </a>
            </div>
          ";
            }
            // line 106
            echo "
        </div>
      </div>

      ";
            // line 111
            echo "      ";
            if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["elements"] ?? null), "content", []), "config", []), "more_link", []) && $this->getAttribute($this->getAttribute($this->getAttribute(($context["elements"] ?? null), "content", []), "config", []), "more_link_text", []))) {
                // line 112
                echo "        <div class=\"carousel-more-link\">
          ";
                // line 113
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->getLink(t($this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->getAttribute(($context["elements"] ?? null), "content", []), "config", []), "more_link_text", []))), $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->getAttribute(($context["elements"] ?? null), "content", []), "config", []), "more_link", [])), ["title" => $this->getAttribute($this->getAttribute($this->getAttribute(($context["elements"] ?? null), "content", []), "config", []), "more_link_text", [])]), "html", null, true);
                echo "
        </div>
      ";
            }
            // line 116
            echo "    ";
        }
        // line 117
        echo "  ";
    }

    public function getTemplateName()
    {
        return "modules/contrib/diba_carousel/templates/block--diba-carousel.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  411 => 117,  408 => 116,  402 => 113,  399 => 112,  396 => 111,  390 => 106,  383 => 102,  378 => 100,  373 => 98,  368 => 96,  365 => 95,  362 => 94,  359 => 92,  345 => 91,  342 => 90,  340 => 89,  337 => 88,  334 => 87,  331 => 85,  328 => 84,  324 => 83,  321 => 82,  318 => 81,  314 => 78,  308 => 76,  305 => 75,  301 => 73,  295 => 71,  289 => 69,  287 => 68,  284 => 67,  282 => 66,  279 => 65,  276 => 63,  258 => 61,  255 => 60,  252 => 58,  246 => 56,  241 => 55,  238 => 54,  235 => 52,  227 => 50,  224 => 49,  221 => 47,  218 => 46,  200 => 45,  197 => 43,  194 => 42,  192 => 41,  188 => 39,  184 => 37,  161 => 35,  144 => 34,  141 => 33,  138 => 32,  130 => 29,  127 => 28,  124 => 27,  122 => 26,  119 => 25,  116 => 24,  113 => 23,  110 => 22,  108 => 21,  105 => 20,  102 => 19,  99 => 18,  94 => 118,  92 => 18,  89 => 17,  83 => 15,  81 => 14,  75 => 12,  67 => 10,  65 => 9,  61 => 8,  56 => 7,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "modules/contrib/diba_carousel/templates/block--diba-carousel.html.twig", "/var/www/html/lips-zim/modules/contrib/diba_carousel/templates/block--diba-carousel.html.twig");
    }
}

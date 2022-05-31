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

/* themes/custom/lips/templates/page.html.twig */
class __TwigTemplate_ac8c167a1d1a72bae9311bc124ad0c15c7e4d141aa1c6f68a538da4be42fad1a extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'navbar' => [$this, 'block_navbar'],
            'banner' => [$this, 'block_banner'],
            'latest_news' => [$this, 'block_latest_news'],
            'main' => [$this, 'block_main'],
            'breadcrumb' => [$this, 'block_breadcrumb'],
            'header' => [$this, 'block_header'],
            'sidebar_first' => [$this, 'block_sidebar_first'],
            'highlighted' => [$this, 'block_highlighted'],
            'help' => [$this, 'block_help'],
            'content' => [$this, 'block_content'],
            'sidebar_second' => [$this, 'block_sidebar_second'],
            'footerone' => [$this, 'block_footerone'],
            'footertwo' => [$this, 'block_footertwo'],
            'footerThree' => [$this, 'block_footerThree'],
            'footerfour' => [$this, 'block_footerfour'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["set" => 62, "if" => 64, "block" => 65];
        $filters = ["clean_class" => 70, "escape" => 74, "t" => 83];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'block'],
                ['clean_class', 'escape', 't'],
                []
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
        // line 54
        echo "<div class=\"header-brand-cont\">
   <div class=\"logos\">
    <div class=\"row\">
      <div class=\"col-md-4\"> <a href=\"#\"> <img src=\"/lips-zim/sites/default/files/2021-07/coatofarms.png\" alt=\"\" srcset=\"\"></a></div>
      <div class=\"col-md-4\"><a href=\"/lips-zim\"><img src=\"/lips-zim/sites/default/files/2021-07/Asset%201%404x.png\" alt=\"\" srcset=\"\"></a></div>
      <div class=\"col-md-4\"><a href=\"#\"><img src=\"/lips-zim/sites/default/files/2021-07/EU%404x.png\" alt=\"\" srcset=\"\"></a></div>
    </div>
  </div>
  ";
        // line 62
        $context["container"] = (($this->getAttribute($this->getAttribute(($context["theme"] ?? null), "settings", []), "fluid_container", [])) ? ("container-fluid") : ("container"));
        // line 63
        echo "  ";
        // line 64
        echo "  ";
        if (($this->getAttribute(($context["page"] ?? null), "navigation", []) || $this->getAttribute(($context["page"] ?? null), "navigation_collapsible", []))) {
            // line 65
            echo "    ";
            $this->displayBlock('navbar', $context, $blocks);
            // line 103
            echo "  ";
        }
        // line 104
        echo "  ";
        if ($this->getAttribute(($context["page"] ?? null), "banner", [])) {
            // line 105
            echo " ";
            $this->displayBlock('banner', $context, $blocks);
            // line 112
            echo " ";
        }
        // line 113
        echo "


";
        // line 116
        if ($this->getAttribute(($context["page"] ?? null), "latest_news", [])) {
            // line 117
            echo " ";
            $this->displayBlock('latest_news', $context, $blocks);
            // line 122
            echo " ";
        }
        // line 124
        $this->displayBlock('main', $context, $blocks);
        // line 203
        echo "
<div class=\"footer-container\">

  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-md-3\">
        ";
        // line 209
        if ($this->getAttribute(($context["page"] ?? null), "footerone", [])) {
            // line 210
            echo "          ";
            $this->displayBlock('footerone', $context, $blocks);
            // line 213
            echo "        ";
        }
        // line 214
        echo "      </div>
      <div class=\"col-md-4\">
        ";
        // line 216
        if ($this->getAttribute(($context["page"] ?? null), "footertwo", [])) {
            // line 217
            echo "          ";
            $this->displayBlock('footertwo', $context, $blocks);
            // line 220
            echo "        ";
        }
        // line 221
        echo "      </div>
      <div class=\"col-md-2\">
        ";
        // line 223
        if ($this->getAttribute(($context["page"] ?? null), "footerThree", [])) {
            // line 224
            echo "          ";
            $this->displayBlock('footerThree', $context, $blocks);
            // line 227
            echo "        ";
        }
        // line 228
        echo "      </div>
      <div class=\"col-md-3\">
        ";
        // line 230
        if ($this->getAttribute(($context["page"] ?? null), "footerfour", [])) {
            // line 231
            echo "          ";
            $this->displayBlock('footerfour', $context, $blocks);
            // line 234
            echo "        ";
        }
        // line 235
        echo "      </div>
    </div>
    ";
        // line 242
        echo "  </div>
</div>
<div class=\"copyright-cont\">
    <div class=\"container\">
        <div class=\"row\">
     <div class=\"copyright col-md-12\">
      <p>&copy; 2021 LIPS-Zim | <a href=\"https://www.ilri.org/ilri-privacy-statement\"target=\"blank\">Privacy Policy</a></p>
     </div>
   </div>
    </div>
</div>
</div>
<script>

window.onscroll = function() {myFunction()};
var header = document.getElementById(\"header-cont\");
var sticky = header.offsetTop;
function myFunction() {
  if (window.pageYOffset > sticky) {
    header.classList.add(\"sticky\");
  } else {
    header.classList.remove(\"sticky\");
  }
}
</script>
";
    }

    // line 65
    public function block_navbar($context, array $blocks = [])
    {
        // line 66
        echo "      ";
        // line 67
        $context["navbar_classes"] = [0 => "navbar", 1 => (($this->getAttribute($this->getAttribute(        // line 69
($context["theme"] ?? null), "settings", []), "navbar_inverse", [])) ? ("navbar-inverse") : ("navbar-default")), 2 => (($this->getAttribute($this->getAttribute(        // line 70
($context["theme"] ?? null), "settings", []), "navbar_position", [])) ? (("navbar-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["theme"] ?? null), "settings", []), "navbar_position", []))))) : (($context["container"] ?? null)))];
        // line 73
        echo "      <div class=\"header-cont\" id=\"header-cont\">
        <header";
        // line 74
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["navbar_attributes"] ?? null), "addClass", [0 => ($context["navbar_classes"] ?? null)], "method")), "html", null, true);
        echo " id=\"navbar\" role=\"banner\">
          ";
        // line 75
        if ( !$this->getAttribute(($context["navbar_attributes"] ?? null), "hasClass", [0 => ($context["container"] ?? null)], "method")) {
            // line 76
            echo "            <div class=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null)), "html", null, true);
            echo "\">
          ";
        }
        // line 78
        echo "          <div class=\"navbar-header\">
            ";
        // line 79
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "navigation", [])), "html", null, true);
        echo "
            ";
        // line 81
        echo "            ";
        if ($this->getAttribute(($context["page"] ?? null), "navigation_collapsible", [])) {
            // line 82
            echo "              <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#navbar-collapse\">
                <span class=\"sr-only\">";
            // line 83
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Toggle navigation"));
            echo "</span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
              </button>
            ";
        }
        // line 89
        echo "          </div>

          ";
        // line 92
        echo "          ";
        if ($this->getAttribute(($context["page"] ?? null), "navigation_collapsible", [])) {
            // line 93
            echo "            <div id=\"navbar-collapse\" class=\"navbar-collapse collapse\">
              ";
            // line 94
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "navigation_collapsible", [])), "html", null, true);
            echo "
            </div>
          ";
        }
        // line 97
        echo "          ";
        if ( !$this->getAttribute(($context["navbar_attributes"] ?? null), "hasClass", [0 => ($context["container"] ?? null)], "method")) {
            // line 98
            echo "            </div>
          ";
        }
        // line 100
        echo "        </header>
      </div>
    ";
    }

    // line 105
    public function block_banner($context, array $blocks = [])
    {
        // line 106
        echo "   <div role=\"main\" class=\"main-container js-quickedit-main-content\">
    <section class=\"banner\">
      ";
        // line 108
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "banner", [])), "html", null, true);
        echo "
    </section>
   </div>
   ";
    }

    // line 117
    public function block_latest_news($context, array $blocks = [])
    {
        // line 118
        echo "    <section class=\"latest-news-container\">
      ";
        // line 119
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "latest_news", [])), "html", null, true);
        echo "
    </section>
   ";
    }

    // line 124
    public function block_main($context, array $blocks = [])
    {
        // line 125
        echo "


";
        // line 128
        if ($this->getAttribute(($context["page"] ?? null), "breadcrumb", [])) {
            // line 129
            echo " ";
            $this->displayBlock('breadcrumb', $context, $blocks);
            // line 137
            echo " ";
        }
        // line 138
        echo "<div role=\"main\" class=\"main-container ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null)), "html", null, true);
        echo " js-quickedit-main-content\">
  <div class=\"row\">

      ";
        // line 142
        echo "      ";
        if ($this->getAttribute(($context["page"] ?? null), "header", [])) {
            // line 143
            echo "        ";
            $this->displayBlock('header', $context, $blocks);
            // line 148
            echo "      ";
        }
        // line 149
        echo "
      ";
        // line 151
        echo "      ";
        if ($this->getAttribute(($context["page"] ?? null), "sidebar_first", [])) {
            // line 152
            echo "        ";
            $this->displayBlock('sidebar_first', $context, $blocks);
            // line 157
            echo "      ";
        }
        // line 158
        echo "
      ";
        // line 160
        echo "      ";
        // line 161
        $context["content_classes"] = [0 => ((($this->getAttribute(        // line 162
($context["page"] ?? null), "sidebar_first", []) && $this->getAttribute(($context["page"] ?? null), "sidebar_second", []))) ? ("col-sm-6") : ("")), 1 => ((($this->getAttribute(        // line 163
($context["page"] ?? null), "sidebar_first", []) && twig_test_empty($this->getAttribute(($context["page"] ?? null), "sidebar_second", [])))) ? ("col-sm-9") : ("")), 2 => ((($this->getAttribute(        // line 164
($context["page"] ?? null), "sidebar_second", []) && twig_test_empty($this->getAttribute(($context["page"] ?? null), "sidebar_first", [])))) ? ("col-sm-9") : ("")), 3 => (((twig_test_empty($this->getAttribute(        // line 165
($context["page"] ?? null), "sidebar_first", [])) && twig_test_empty($this->getAttribute(($context["page"] ?? null), "sidebar_second", [])))) ? ("col-sm-12") : (""))];
        // line 168
        echo "      <section>

        ";
        // line 171
        echo "        ";
        if ($this->getAttribute(($context["page"] ?? null), "highlighted", [])) {
            // line 172
            echo "          ";
            $this->displayBlock('highlighted', $context, $blocks);
            // line 175
            echo "        ";
        }
        // line 176
        echo "
        ";
        // line 178
        echo "        ";
        if ($this->getAttribute(($context["page"] ?? null), "help", [])) {
            // line 179
            echo "          ";
            $this->displayBlock('help', $context, $blocks);
            // line 182
            echo "        ";
        }
        // line 183
        echo "
        ";
        // line 185
        echo "        ";
        $this->displayBlock('content', $context, $blocks);
        // line 190
        echo "      </section>

      ";
        // line 193
        echo "      ";
        if ($this->getAttribute(($context["page"] ?? null), "sidebar_second", [])) {
            // line 194
            echo "        ";
            $this->displayBlock('sidebar_second', $context, $blocks);
            // line 199
            echo "      ";
        }
        // line 200
        echo "    </div>
  </div>
";
    }

    // line 129
    public function block_breadcrumb($context, array $blocks = [])
    {
        // line 130
        echo "    <section class=\"breadcrumb-container\">
    <div class=\"container\">
     ";
        // line 132
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "breadcrumb", [])), "html", null, true);
        echo "
    </div>
     
    </section>
   ";
    }

    // line 143
    public function block_header($context, array $blocks = [])
    {
        // line 144
        echo "          <div class=\"col-sm-12\" role=\"heading\">
            ";
        // line 145
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "header", [])), "html", null, true);
        echo "
          </div>
       ";
    }

    // line 152
    public function block_sidebar_first($context, array $blocks = [])
    {
        // line 153
        echo "          <aside class=\"col-sm-3\" role=\"complementary\">
            ";
        // line 154
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "sidebar_first", [])), "html", null, true);
        echo "
          </aside>
        ";
    }

    // line 172
    public function block_highlighted($context, array $blocks = [])
    {
        // line 173
        echo "            <div class=\"highlighted\">";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "highlighted", [])), "html", null, true);
        echo "</div>
          ";
    }

    // line 179
    public function block_help($context, array $blocks = [])
    {
        // line 180
        echo "            ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "help", [])), "html", null, true);
        echo "
          ";
    }

    // line 185
    public function block_content($context, array $blocks = [])
    {
        // line 186
        echo "          <a id=\"main-content\"></a>
    
          ";
        // line 188
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "content", [])), "html", null, true);
        echo "
        ";
    }

    // line 194
    public function block_sidebar_second($context, array $blocks = [])
    {
        // line 195
        echo "          <aside class=\"col-sm-3\" role=\"complementary\">
            ";
        // line 196
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "sidebar_second", [])), "html", null, true);
        echo "
          </aside>
        ";
    }

    // line 210
    public function block_footerone($context, array $blocks = [])
    {
        // line 211
        echo "            ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footerone", [])), "html", null, true);
        echo "
          ";
    }

    // line 217
    public function block_footertwo($context, array $blocks = [])
    {
        // line 218
        echo "            ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footertwo", [])), "html", null, true);
        echo "
          ";
    }

    // line 224
    public function block_footerThree($context, array $blocks = [])
    {
        // line 225
        echo "            ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footerThree", [])), "html", null, true);
        echo "
          ";
    }

    // line 231
    public function block_footerfour($context, array $blocks = [])
    {
        // line 232
        echo "            ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footerfour", [])), "html", null, true);
        echo "
          ";
    }

    public function getTemplateName()
    {
        return "themes/custom/lips/templates/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  531 => 232,  528 => 231,  521 => 225,  518 => 224,  511 => 218,  508 => 217,  501 => 211,  498 => 210,  491 => 196,  488 => 195,  485 => 194,  479 => 188,  475 => 186,  472 => 185,  465 => 180,  462 => 179,  455 => 173,  452 => 172,  445 => 154,  442 => 153,  439 => 152,  432 => 145,  429 => 144,  426 => 143,  417 => 132,  413 => 130,  410 => 129,  404 => 200,  401 => 199,  398 => 194,  395 => 193,  391 => 190,  388 => 185,  385 => 183,  382 => 182,  379 => 179,  376 => 178,  373 => 176,  370 => 175,  367 => 172,  364 => 171,  360 => 168,  358 => 165,  357 => 164,  356 => 163,  355 => 162,  354 => 161,  352 => 160,  349 => 158,  346 => 157,  343 => 152,  340 => 151,  337 => 149,  334 => 148,  331 => 143,  328 => 142,  321 => 138,  318 => 137,  315 => 129,  313 => 128,  308 => 125,  305 => 124,  298 => 119,  295 => 118,  292 => 117,  284 => 108,  280 => 106,  277 => 105,  271 => 100,  267 => 98,  264 => 97,  258 => 94,  255 => 93,  252 => 92,  248 => 89,  239 => 83,  236 => 82,  233 => 81,  229 => 79,  226 => 78,  220 => 76,  218 => 75,  214 => 74,  211 => 73,  209 => 70,  208 => 69,  207 => 67,  205 => 66,  202 => 65,  173 => 242,  169 => 235,  166 => 234,  163 => 231,  161 => 230,  157 => 228,  154 => 227,  151 => 224,  149 => 223,  145 => 221,  142 => 220,  139 => 217,  137 => 216,  133 => 214,  130 => 213,  127 => 210,  125 => 209,  117 => 203,  115 => 124,  112 => 122,  109 => 117,  107 => 116,  102 => 113,  99 => 112,  96 => 105,  93 => 104,  90 => 103,  87 => 65,  84 => 64,  82 => 63,  80 => 62,  70 => 54,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/lips/templates/page.html.twig", "/var/www/html/lips-zim/themes/custom/lips/templates/page.html.twig");
    }
}

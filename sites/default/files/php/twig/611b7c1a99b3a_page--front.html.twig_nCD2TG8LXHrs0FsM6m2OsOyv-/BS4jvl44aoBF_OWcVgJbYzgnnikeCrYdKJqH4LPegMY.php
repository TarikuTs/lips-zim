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

/* themes/custom/lips/templates/page--front.html.twig */
class __TwigTemplate_e06ac297b169cf772ec8e93bec0258ec5225ea94674dc4b01714498136d6965d extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'navbar' => [$this, 'block_navbar'],
            'main' => [$this, 'block_main'],
            'slideshow' => [$this, 'block_slideshow'],
            'aboutleft' => [$this, 'block_aboutleft'],
            'aboutright' => [$this, 'block_aboutright'],
            'objectivesleft' => [$this, 'block_objectivesleft'],
            'objectivesright' => [$this, 'block_objectivesright'],
            'newletter' => [$this, 'block_newletter'],
            'wherewework' => [$this, 'block_wherewework'],
            'whereweworkright' => [$this, 'block_whereweworkright'],
            'news' => [$this, 'block_news'],
            'partnerone' => [$this, 'block_partnerone'],
            'partnertwo' => [$this, 'block_partnertwo'],
            'partnerthree' => [$this, 'block_partnerthree'],
            'partnerfour' => [$this, 'block_partnerfour'],
            'partnerfive' => [$this, 'block_partnerfive'],
            'partnersix' => [$this, 'block_partnersix'],
            'partnerslogo' => [$this, 'block_partnerslogo'],
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
        }
        // line 104
        echo "</div>
";
        // line 106
        $this->displayBlock('main', $context, $blocks);
        // line 230
        echo "<!--<div class=\"partner-container\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-md-2\">
        ";
        // line 234
        if ($this->getAttribute(($context["page"] ?? null), "partnerone", [])) {
            // line 235
            echo "          ";
            $this->displayBlock('partnerone', $context, $blocks);
            // line 238
            echo "        ";
        }
        // line 239
        echo "      </div>
      <div class=\"col-md-2\">
        ";
        // line 241
        if ($this->getAttribute(($context["page"] ?? null), "partnertwo", [])) {
            // line 242
            echo "          ";
            $this->displayBlock('partnertwo', $context, $blocks);
            // line 245
            echo "        ";
        }
        // line 246
        echo "      </div>
      <div class=\"col-md-2\">
        ";
        // line 248
        if ($this->getAttribute(($context["page"] ?? null), "partnerthree", [])) {
            // line 249
            echo "          ";
            $this->displayBlock('partnerthree', $context, $blocks);
            // line 252
            echo "        ";
        }
        // line 253
        echo "      </div>
      <div class=\"col-md-2\">
        ";
        // line 255
        if ($this->getAttribute(($context["page"] ?? null), "partnerfour", [])) {
            // line 256
            echo "          ";
            $this->displayBlock('partnerfour', $context, $blocks);
            // line 259
            echo "        ";
        }
        // line 260
        echo "      </div>
      <div class=\"col-md-2\">
        ";
        // line 262
        if ($this->getAttribute(($context["page"] ?? null), "partnerfive", [])) {
            // line 263
            echo "          ";
            $this->displayBlock('partnerfive', $context, $blocks);
            // line 266
            echo "        ";
        }
        // line 267
        echo "      </div>
      <div class=\"col-md-2\">
        ";
        // line 269
        if ($this->getAttribute(($context["page"] ?? null), "partnersix", [])) {
            // line 270
            echo "          ";
            $this->displayBlock('partnersix', $context, $blocks);
            // line 273
            echo "        ";
        }
        // line 274
        echo "      </div>
    </div>
  </div>
</div>-->
<div class=\"partner-container\">
  <div class=\"container\">
    <div class=\"row\">
    <div class=\"col-md-12\">
        ";
        // line 282
        if ($this->getAttribute(($context["page"] ?? null), "partnerslogo", [])) {
            // line 283
            echo "         ";
            $this->displayBlock('partnerslogo', $context, $blocks);
            // line 286
            echo "         ";
        }
        // line 287
        echo "    </div>
   </div>
  </div>
</div>
<div class=\"footer-container\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-md-3\">
        ";
        // line 295
        if ($this->getAttribute(($context["page"] ?? null), "footerone", [])) {
            // line 296
            echo "          ";
            $this->displayBlock('footerone', $context, $blocks);
            // line 299
            echo "        ";
        }
        // line 300
        echo "      </div>
      <div class=\"col-md-4\">
        ";
        // line 302
        if ($this->getAttribute(($context["page"] ?? null), "footertwo", [])) {
            // line 303
            echo "          ";
            $this->displayBlock('footertwo', $context, $blocks);
            // line 306
            echo "        ";
        }
        // line 307
        echo "      </div>
      <div class=\"col-md-2\">
        ";
        // line 309
        if ($this->getAttribute(($context["page"] ?? null), "footerThree", [])) {
            // line 310
            echo "          ";
            $this->displayBlock('footerThree', $context, $blocks);
            // line 313
            echo "        ";
        }
        // line 314
        echo "      </div>
      <div class=\"col-md-3\">
        ";
        // line 316
        if ($this->getAttribute(($context["page"] ?? null), "footerfour", [])) {
            // line 317
            echo "          ";
            $this->displayBlock('footerfour', $context, $blocks);
            // line 320
            echo "        ";
        }
        // line 321
        echo "      </div>
    </div>
    ";
        // line 328
        echo " </div>
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

    // line 106
    public function block_main($context, array $blocks = [])
    {
        // line 107
        echo "  <div role=\"main\" class=\"main-container js-quickedit-main-content\">
    <section class=\"slideshow\">
      ";
        // line 109
        if ($this->getAttribute(($context["page"] ?? null), "slideshow", [])) {
            // line 110
            echo "                ";
            $this->displayBlock('slideshow', $context, $blocks);
            // line 113
            echo "              ";
        }
        // line 114
        echo "    </section>
    <section class=\"about\">
        <div class=\"container\">
          <div class=\"row\">
            <div class=\"col-md-12\">
             <div class=\"about-desc\">
              ";
        // line 120
        if ($this->getAttribute(($context["page"] ?? null), "aboutleft", [])) {
            // line 121
            echo "                ";
            $this->displayBlock('aboutleft', $context, $blocks);
            // line 124
            echo "               </div>
              ";
        }
        // line 126
        echo "            </div>
           <!-- <div class=\"col-md-6\">
              <div class=\"about-desc\">
                 ";
        // line 129
        if ($this->getAttribute(($context["page"] ?? null), "aboutright", [])) {
            // line 130
            echo "                ";
            $this->displayBlock('aboutright', $context, $blocks);
            // line 133
            echo "              ";
        }
        // line 134
        echo "              </div>-->
            </div>
          </div>
        </div>
    </section>
    <!--<section class=\"objectives\">
        <div class=\"container\">
          <div class=\"row\">
            <div class=\"col-md-12\">
              <div class=\"subtitle\">
                LEARN
              </div>
              <div class=\"title\">
                OUR OBJECTIVES
              </div>
            </div>
          </div>
          <div class=\"row\">
            <div class=\"col-md-6\">
              ";
        // line 153
        if ($this->getAttribute(($context["page"] ?? null), "objectivesleft", [])) {
            // line 154
            echo "                ";
            $this->displayBlock('objectivesleft', $context, $blocks);
            // line 157
            echo "              ";
        }
        // line 158
        echo "            </div>
            <div class=\"col-md-6\">
              ";
        // line 160
        if ($this->getAttribute(($context["page"] ?? null), "objectivesright", [])) {
            // line 161
            echo "                ";
            $this->displayBlock('objectivesright', $context, $blocks);
            // line 164
            echo "              ";
        }
        // line 165
        echo "            </div>
            
          </div>
        </div>
    </section> -->
    <section class=\"newletter\">
        <div class=\"container\">
          <div class=\"row\">
            <div class=\"col-md-12\">
              ";
        // line 174
        if ($this->getAttribute(($context["page"] ?? null), "newletter", [])) {
            // line 175
            echo "                ";
            $this->displayBlock('newletter', $context, $blocks);
            // line 178
            echo "              ";
        }
        // line 179
        echo "            </div>
          </div>
        </div>
    </section>
    <section class=\"where-we-work\">
    <div class=\"container\">
          <h2 class=\"block-title\">WHERE WE WORK </h2>
          <div class=\"row\">
            <div class=\"col-md-9\">
              ";
        // line 188
        if ($this->getAttribute(($context["page"] ?? null), "wherewework", [])) {
            // line 189
            echo "                ";
            $this->displayBlock('wherewework', $context, $blocks);
            // line 192
            echo "              ";
        }
        // line 193
        echo "            </div>
            <div class=\"col-md-3\">
              <div class=\"where-we-work-tip\">
              <div class=\"tip-title\">
                <h3>Regions</h3>
              </div>
                ";
        // line 199
        if ($this->getAttribute(($context["page"] ?? null), "whereweworkright", [])) {
            // line 200
            echo "                ";
            $this->displayBlock('whereweworkright', $context, $blocks);
            // line 203
            echo "              ";
        }
        // line 204
        echo "              </div>
            </div>
          </div>
        </div>
    </section>
    <section class=\"news\">
      <div class=\"container\">
          <!--<div class=\"subtitle\">
                READ  
              </div>-->
              <div class=\"title\">
                NEWS AND CLIPPINGS
              </div>
          <div class=\"row\">
            <div class=\"col-md-12\">
              ";
        // line 219
        if ($this->getAttribute(($context["page"] ?? null), "news", [])) {
            // line 220
            echo "                ";
            $this->displayBlock('news', $context, $blocks);
            // line 223
            echo "              ";
        }
        // line 224
        echo "            </div>
          </div>
        </div>
    </section>
  </div>
";
    }

    // line 110
    public function block_slideshow($context, array $blocks = [])
    {
        // line 111
        echo "                  ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "slideshow", [])), "html", null, true);
        echo "
                ";
    }

    // line 121
    public function block_aboutleft($context, array $blocks = [])
    {
        // line 122
        echo "                  ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "aboutleft", [])), "html", null, true);
        echo "
                ";
    }

    // line 130
    public function block_aboutright($context, array $blocks = [])
    {
        // line 131
        echo "                  ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "aboutright", [])), "html", null, true);
        echo "
                ";
    }

    // line 154
    public function block_objectivesleft($context, array $blocks = [])
    {
        // line 155
        echo "                  ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "objectivesleft", [])), "html", null, true);
        echo "
                ";
    }

    // line 161
    public function block_objectivesright($context, array $blocks = [])
    {
        // line 162
        echo "                  ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "objectivesright", [])), "html", null, true);
        echo "
                ";
    }

    // line 175
    public function block_newletter($context, array $blocks = [])
    {
        // line 176
        echo "                  ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "newletter", [])), "html", null, true);
        echo "
                ";
    }

    // line 189
    public function block_wherewework($context, array $blocks = [])
    {
        // line 190
        echo "                  ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "wherewework", [])), "html", null, true);
        echo "
                ";
    }

    // line 200
    public function block_whereweworkright($context, array $blocks = [])
    {
        // line 201
        echo "                  ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "whereweworkright", [])), "html", null, true);
        echo "
                ";
    }

    // line 220
    public function block_news($context, array $blocks = [])
    {
        // line 221
        echo "                  ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "news", [])), "html", null, true);
        echo "
                ";
    }

    // line 235
    public function block_partnerone($context, array $blocks = [])
    {
        // line 236
        echo "            ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "partnerone", [])), "html", null, true);
        echo "
          ";
    }

    // line 242
    public function block_partnertwo($context, array $blocks = [])
    {
        // line 243
        echo "            ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "partnertwo", [])), "html", null, true);
        echo "
          ";
    }

    // line 249
    public function block_partnerthree($context, array $blocks = [])
    {
        // line 250
        echo "            ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "partnerthree", [])), "html", null, true);
        echo "
          ";
    }

    // line 256
    public function block_partnerfour($context, array $blocks = [])
    {
        // line 257
        echo "            ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "partnerfour", [])), "html", null, true);
        echo "
          ";
    }

    // line 263
    public function block_partnerfive($context, array $blocks = [])
    {
        // line 264
        echo "            ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "partnerfive", [])), "html", null, true);
        echo "
          ";
    }

    // line 270
    public function block_partnersix($context, array $blocks = [])
    {
        // line 271
        echo "            ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "partnersix", [])), "html", null, true);
        echo "
          ";
    }

    // line 283
    public function block_partnerslogo($context, array $blocks = [])
    {
        // line 284
        echo "           ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "partnerslogo", [])), "html", null, true);
        echo "
             ";
    }

    // line 296
    public function block_footerone($context, array $blocks = [])
    {
        // line 297
        echo "            ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footerone", [])), "html", null, true);
        echo "
          ";
    }

    // line 303
    public function block_footertwo($context, array $blocks = [])
    {
        // line 304
        echo "            ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footertwo", [])), "html", null, true);
        echo "
          ";
    }

    // line 310
    public function block_footerThree($context, array $blocks = [])
    {
        // line 311
        echo "            ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footerThree", [])), "html", null, true);
        echo "
          ";
    }

    // line 317
    public function block_footerfour($context, array $blocks = [])
    {
        // line 318
        echo "            ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footerfour", [])), "html", null, true);
        echo "
          ";
    }

    public function getTemplateName()
    {
        return "themes/custom/lips/templates/page--front.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  723 => 318,  720 => 317,  713 => 311,  710 => 310,  703 => 304,  700 => 303,  693 => 297,  690 => 296,  683 => 284,  680 => 283,  673 => 271,  670 => 270,  663 => 264,  660 => 263,  653 => 257,  650 => 256,  643 => 250,  640 => 249,  633 => 243,  630 => 242,  623 => 236,  620 => 235,  613 => 221,  610 => 220,  603 => 201,  600 => 200,  593 => 190,  590 => 189,  583 => 176,  580 => 175,  573 => 162,  570 => 161,  563 => 155,  560 => 154,  553 => 131,  550 => 130,  543 => 122,  540 => 121,  533 => 111,  530 => 110,  521 => 224,  518 => 223,  515 => 220,  513 => 219,  496 => 204,  493 => 203,  490 => 200,  488 => 199,  480 => 193,  477 => 192,  474 => 189,  472 => 188,  461 => 179,  458 => 178,  455 => 175,  453 => 174,  442 => 165,  439 => 164,  436 => 161,  434 => 160,  430 => 158,  427 => 157,  424 => 154,  422 => 153,  401 => 134,  398 => 133,  395 => 130,  393 => 129,  388 => 126,  384 => 124,  381 => 121,  379 => 120,  371 => 114,  368 => 113,  365 => 110,  363 => 109,  359 => 107,  356 => 106,  350 => 100,  346 => 98,  343 => 97,  337 => 94,  334 => 93,  331 => 92,  327 => 89,  318 => 83,  315 => 82,  312 => 81,  308 => 79,  305 => 78,  299 => 76,  297 => 75,  293 => 74,  290 => 73,  288 => 70,  287 => 69,  286 => 67,  284 => 66,  281 => 65,  253 => 328,  249 => 321,  246 => 320,  243 => 317,  241 => 316,  237 => 314,  234 => 313,  231 => 310,  229 => 309,  225 => 307,  222 => 306,  219 => 303,  217 => 302,  213 => 300,  210 => 299,  207 => 296,  205 => 295,  195 => 287,  192 => 286,  189 => 283,  187 => 282,  177 => 274,  174 => 273,  171 => 270,  169 => 269,  165 => 267,  162 => 266,  159 => 263,  157 => 262,  153 => 260,  150 => 259,  147 => 256,  145 => 255,  141 => 253,  138 => 252,  135 => 249,  133 => 248,  129 => 246,  126 => 245,  123 => 242,  121 => 241,  117 => 239,  114 => 238,  111 => 235,  109 => 234,  103 => 230,  101 => 106,  98 => 104,  94 => 65,  91 => 64,  89 => 63,  87 => 62,  77 => 54,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/lips/templates/page--front.html.twig", "/var/www/html/lips-zim/themes/custom/lips/templates/page--front.html.twig");
    }
}

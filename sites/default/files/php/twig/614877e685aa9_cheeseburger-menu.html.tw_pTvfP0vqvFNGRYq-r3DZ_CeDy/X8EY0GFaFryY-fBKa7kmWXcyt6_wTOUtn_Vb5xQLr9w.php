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

/* modules/cheeseburger_menu/templates/cheeseburger-menu.html.twig */
class __TwigTemplate_4da525bcfc0447a376062f1b01d5dcf8a6fcec0cdebac7c539be4a32566d86aa extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["import" => 1, "if" => 2, "for" => 6, "macro" => 47];
        $filters = ["escape" => 3, "raw" => 4];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['import', 'if', 'for', 'macro'],
                ['escape', 'raw'],
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
        // line 1
        $context["cheesebuger"] = $this;
        // line 2
        if (($context["show_navigation"] ?? null)) {
            // line 3
            echo "\t<div";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["side_navigation_menu_attribute"] ?? null)), "html", null, true);
            echo ">
\t\t<div";
            // line 4
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["side_navigation_trigger_attribute"] ?? null)), "html", null, true);
            echo ">";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->sandbox->ensureToStringAllowed(($context["close_icon"] ?? null)));
            echo "</div>

\t\t";
            // line 6
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["tree"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["menu"]) {
                // line 7
                echo "      ";
                if ( !$this->getAttribute($context["menu"], "isNavigationTitleHidden", [])) {
                    // line 8
                    echo "        <div ";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["menu"], "getIdAsAttribute", [])), "html", null, true);
                    echo " ";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["menu"], "navigationItemAttribute", [])), "html", null, true);
                    echo ">
          ";
                    // line 9
                    if ($this->getAttribute($context["menu"], "hasIcon", [])) {
                        // line 10
                        echo "            ";
                        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->sandbox->ensureToStringAllowed($this->getAttribute($context["menu"], "icon", [])));
                        echo "
          ";
                    }
                    // line 12
                    echo "          <span>";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["menu"], "title", [])), "html", null, true);
                    echo "</span>
        </div>
      ";
                }
                // line 15
                echo "\t\t\t";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["menu"], "getNavigationMenuItems", [], "method"));
                foreach ($context['_seq'] as $context["_key"] => $context["menu_item"]) {
                    // line 16
                    echo "\t\t\t\t<div ";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["menu"], "navigationItemAttribute", [])), "html", null, true);
                    echo ">
\t\t\t\t\t<a href=\"";
                    // line 17
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["menu_item"], "url", [])), "html", null, true);
                    echo "\">
\t\t\t\t\t\t<span>";
                    // line 18
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["menu_item"], "title", [])), "html", null, true);
                    echo "</span>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['menu_item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 22
                echo "\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['menu'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 23
            echo "\t</div>
";
        }
        // line 25
        echo "
";
        // line 27
        echo "<div";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["main_navigation_attribute"] ?? null)), "html", null, true);
        echo ">
\t";
        // line 28
        if ((($context["show_navigation"] ?? null) == false)) {
            // line 29
            echo "\t\t<div";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["side_navigation_trigger_attribute"] ?? null)), "html", null, true);
            echo ">";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->sandbox->ensureToStringAllowed(($context["close_icon"] ?? null)));
            echo "</div>
\t";
        }
        // line 31
        echo "\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["tree"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["menu"]) {
            // line 32
            echo "\t\t<div ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["menu"], "getIdAsAttribute", [])), "html", null, true);
            echo ">
\t\t\t";
            // line 33
            if ( !$this->getAttribute($context["menu"], "isTitleHidden", [])) {
                // line 34
                echo "\t\t\t\t<div ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["menu"], "titleAttribute", [])), "html", null, true);
                echo ">";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["menu"], "title", [])), "html", null, true);
                echo "</div>
\t\t\t";
            }
            // line 36
            echo "\t\t\t<ul
\t\t\t\tclass=\"cheeseburger-menu__mainmenu\">
\t\t\t\t";
            // line 39
            echo "\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["menu"]);
            foreach ($context['_seq'] as $context["_key"] => $context["menu_item"]) {
                // line 40
                echo "\t\t\t\t\t";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($context["cheesebuger"]->getrender_menu_item($context["menu_item"], ($context["trigger_icon"] ?? null)));
                echo "
\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['menu_item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 42
            echo "\t\t\t</ul>
\t\t</div>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['menu'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "</div>

";
    }

    // line 47
    public function getrender_menu_item($__menu_item__ = null, $__trigger_icon__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals([
            "menu_item" => $__menu_item__,
            "trigger_icon" => $__trigger_icon__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 48
            echo "\t";
            $context["render_menu_item"] = $this;
            // line 49
            echo "\t<li ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["menu_item"] ?? null), "attribute", [])), "html", null, true);
            echo ">
\t\t";
            // line 50
            if ($this->getAttribute(($context["menu_item"] ?? null), "isLink", [], "method")) {
                // line 51
                echo "\t\t\t<a";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["menu_item"] ?? null), "labelAttribute", [])), "html", null, true);
                echo " href=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["menu_item"] ?? null), "url", [])), "html", null, true);
                echo "\">
\t\t\t\t<span>";
                // line 52
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["menu_item"] ?? null), "title", [])), "html", null, true);
                echo "</span>
\t\t\t</a>
\t\t";
            } else {
                // line 55
                echo "\t\t\t";
                if ($this->getAttribute(($context["menu_item"] ?? null), "hasChild", [])) {
                    // line 56
                    echo "\t\t\t\t<span";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["menu_item"] ?? null), "labelAttribute", [])), "html", null, true);
                    echo " data-cheeseburger-parent-trigger>
\t\t\t\t\t<span>";
                    // line 57
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["menu_item"] ?? null), "title", [])), "html", null, true);
                    echo "</span>
\t\t\t\t</span>
\t\t\t";
                } else {
                    // line 60
                    echo "\t\t\t\t<span";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["menu_item"] ?? null), "labelAttribute", [])), "html", null, true);
                    echo ">
\t\t\t\t\t<span>";
                    // line 61
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["menu_item"] ?? null), "title", [])), "html", null, true);
                    echo "</span>
\t\t\t\t</span>
\t\t\t";
                }
                // line 64
                echo "\t\t";
            }
            // line 65
            echo "
\t\t";
            // line 66
            if ($this->getAttribute(($context["menu_item"] ?? null), "hasChild", [])) {
                // line 67
                echo "\t\t\t<span";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["menu_item"] ?? null), "triggerAttribute", [])), "html", null, true);
                echo " data-cheeseburger-parent-trigger>";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->sandbox->ensureToStringAllowed(($context["trigger_icon"] ?? null)));
                echo "</span>
\t\t\t<ul class=\"cheeseburger-menu__submenu\">
\t\t\t\t";
                // line 69
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["menu_item"] ?? null), "children", []));
                foreach ($context['_seq'] as $context["_key"] => $context["child_menu_item"]) {
                    // line 70
                    echo "\t\t\t\t\t";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($context["render_menu_item"]->getrender_menu_item($context["child_menu_item"], ($context["trigger_icon"] ?? null)));
                    echo "
\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child_menu_item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 72
                echo "\t\t\t</ul>
\t\t";
            }
            // line 74
            echo "\t</li>
";
        } catch (\Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (\Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "modules/cheeseburger_menu/templates/cheeseburger-menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  298 => 74,  294 => 72,  285 => 70,  281 => 69,  273 => 67,  271 => 66,  268 => 65,  265 => 64,  259 => 61,  254 => 60,  248 => 57,  243 => 56,  240 => 55,  234 => 52,  227 => 51,  225 => 50,  220 => 49,  217 => 48,  204 => 47,  198 => 45,  190 => 42,  181 => 40,  176 => 39,  172 => 36,  164 => 34,  162 => 33,  157 => 32,  152 => 31,  144 => 29,  142 => 28,  137 => 27,  134 => 25,  130 => 23,  124 => 22,  114 => 18,  110 => 17,  105 => 16,  100 => 15,  93 => 12,  87 => 10,  85 => 9,  78 => 8,  75 => 7,  71 => 6,  64 => 4,  59 => 3,  57 => 2,  55 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "modules/cheeseburger_menu/templates/cheeseburger-menu.html.twig", "/var/www/html/lips-zim/modules/cheeseburger_menu/templates/cheeseburger-menu.html.twig");
    }
}

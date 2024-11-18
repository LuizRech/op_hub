<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* themes/ajans/templates/navigation/menu--main.html.twig */
class __TwigTemplate_be9d46483a5dbdab2a09451be4d612ce extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension(SandboxExtension::class);
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 25
        $macros["menus"] = $this->macros["menus"] = $this;
        // line 26
        yield "
";
        // line 31
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(CoreExtension::callMacro($macros["menus"], "macro_menu_links", [($context["items"] ?? null), ($context["attributes"] ?? null), 0], 31, $context, $this->getSourceContext()));
        yield "

";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["_self", "items", "attributes", "menu_level"]);        return; yield '';
    }

    // line 33
    public function macro_menu_links($__items__ = null, $__attributes__ = null, $__menu_level__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "items" => $__items__,
            "attributes" => $__attributes__,
            "menu_level" => $__menu_level__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 34
            yield "  ";
            $macros["menus"] = $this;
            // line 35
            yield "  ";
            if (($context["items"] ?? null)) {
                // line 36
                yield "  
    ";
                // line 38
                $context["classes"] = [(((                // line 39
($context["menu_level"] ?? null) == 0)) ? ("uk-navbar-nav") : ("")), (((                // line 40
($context["menu_level"] ?? null) > 0)) ? ("uk-nav") : ("")), (((                // line 41
($context["menu_level"] ?? null) > 0)) ? ("uk-navbar-dropdown-nav") : ("")), "uk-visible@m"];
                // line 45
                yield "


    ";
                // line 48
                if ((($context["menu_level"] ?? null) > 0)) {
                    // line 49
                    yield "      <div class=\"uk-navbar-dropdown\">
    ";
                }
                // line 51
                yield "
    <ul";
                // line 52
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [($context["classes"] ?? null)], "method", false, false, true, 52), 52, $this->source), "html", null, true);
                yield ">
    ";
                // line 53
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(($context["items"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 54
                    yield "      <li";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "attributes", [], "any", false, false, true, 54), 54, $this->source), "html", null, true);
                    yield ">
        ";
                    // line 55
                    if (CoreExtension::getAttribute($this->env, $this->source, $context["item"], "is_header", [], "any", false, false, true, 55)) {
                        // line 56
                        yield "          ";
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 56), 56, $this->source), "html", null, true);
                        yield "
        ";
                    } elseif ( !CoreExtension::getAttribute($this->env, $this->source,                     // line 57
$context["item"], "is_divider", [], "any", false, false, true, 57)) {
                        // line 58
                        yield "          ";
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getLink($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 58), 58, $this->source), $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 58), 58, $this->source)), "html", null, true);
                        yield "
        ";
                    }
                    // line 60
                    yield "        ";
                    if (CoreExtension::getAttribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 60)) {
                        // line 61
                        yield "          ";
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(CoreExtension::callMacro($macros["menus"], "macro_menu_links", [CoreExtension::getAttribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 61), CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "removeClass", [($context["classes"] ?? null)], "method", false, false, true, 61), (($context["menu_level"] ?? null) + 1)], 61, $context, $this->getSourceContext()));
                        yield "
        ";
                    }
                    // line 63
                    yield "      </li>
    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 65
                yield "    </ul>

    ";
                // line 67
                if ((($context["menu_level"] ?? null) > 0)) {
                    // line 68
                    yield "      </div>
    ";
                }
                // line 70
                yield "    
    
        ";
                // line 73
                $context["classesm"] = ["uk-nav", "uk-navbar-dropdown-nav"];
                // line 78
                yield "
    <div class=\"uk-hidden@m\">
        <a class=\"uk-navbar-toggle\" uk-navbar-toggle-icon href=\"#\"></a>
        <div class=\"uk-navbar-dropdown\">
            <ul";
                // line 82
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "removeClass", [($context["classes"] ?? null)], "method", false, false, true, 82), "addClass", [($context["classesm"] ?? null)], "method", false, false, true, 82), 82, $this->source), "html", null, true);
                yield ">
                ";
                // line 83
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(($context["items"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 84
                    yield "                    <li";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "attributes", [], "any", false, false, true, 84), 84, $this->source), "html", null, true);
                    yield ">
                        ";
                    // line 85
                    if (CoreExtension::getAttribute($this->env, $this->source, $context["item"], "is_header", [], "any", false, false, true, 85)) {
                        // line 86
                        yield "                          ";
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 86), 86, $this->source), "html", null, true);
                        yield "
                        ";
                    } elseif ( !CoreExtension::getAttribute($this->env, $this->source,                     // line 87
$context["item"], "is_divider", [], "any", false, false, true, 87)) {
                        // line 88
                        yield "                          ";
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getLink($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 88), 88, $this->source), $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 88), 88, $this->source)), "html", null, true);
                        yield "
                        ";
                    }
                    // line 90
                    yield "                        ";
                    if (CoreExtension::getAttribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 90)) {
                        // line 91
                        yield "                          ";
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(CoreExtension::callMacro($macros["menus"], "macro_menu_links", [CoreExtension::getAttribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 91), CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "removeClass", [($context["classes"] ?? null)], "method", false, false, true, 91), (($context["menu_level"] ?? null) + 1)], 91, $context, $this->getSourceContext()));
                        yield "
                        ";
                    }
                    // line 93
                    yield "                    </li>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 95
                yield "            </ul>
        </div>
    </div>
    ";
            }
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "themes/ajans/templates/navigation/menu--main.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  206 => 95,  199 => 93,  193 => 91,  190 => 90,  184 => 88,  182 => 87,  177 => 86,  175 => 85,  170 => 84,  166 => 83,  162 => 82,  156 => 78,  154 => 73,  150 => 70,  146 => 68,  144 => 67,  140 => 65,  133 => 63,  127 => 61,  124 => 60,  118 => 58,  116 => 57,  111 => 56,  109 => 55,  104 => 54,  100 => 53,  96 => 52,  93 => 51,  89 => 49,  87 => 48,  82 => 45,  80 => 41,  79 => 40,  78 => 39,  77 => 38,  74 => 36,  71 => 35,  68 => 34,  54 => 33,  45 => 31,  42 => 26,  40 => 25,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/ajans/templates/navigation/menu--main.html.twig", "/var/www/html/web/themes/ajans/templates/navigation/menu--main.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("import" => 25, "macro" => 33, "if" => 35, "set" => 38, "for" => 53);
        static $filters = array("escape" => 52);
        static $functions = array("link" => 58);

        try {
            $this->sandbox->checkSecurity(
                ['import', 'macro', 'if', 'set', 'for'],
                ['escape'],
                ['link'],
                $this->source
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

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
}

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

/* themes/ajans/templates/layout/page--front.html.twig */
class __TwigTemplate_aeb775394bcc2bdf0bc75dee9794807f extends Template
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
        // line 1
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "top_header", [], "any", false, false, true, 1)) {
            // line 2
            yield "    <div class=\"user_menu\">
      <div class=\"container\">
        ";
            // line 4
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "top_header", [], "any", false, false, true, 4), 4, $this->source), "html", null, true);
            yield "
      </div>
    </div>
  ";
        }
        // line 8
        yield "<div class=\"uk-section uk-section-default uk-section-xsmall shadow\" uk-sticky=\"show-on-up: true\">
\t<div class=\"uk-container\">
\t\t<nav class=\"uk-navbar-container uk-navbar-transparent\" uk-navbar=\"dropbar: true; dropbar-mode: push; mode: click; boundary-align: true; align: center\">

\t\t\t";
        // line 12
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "navbar_left", [], "any", false, false, true, 12)) {
            // line 13
            yield "\t\t\t\t<div class=\"uk-navbar-left\">
\t\t\t\t\t";
            // line 14
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "navbar_left", [], "any", false, false, true, 14), 14, $this->source), "html", null, true);
            yield "
\t\t\t\t</div>
\t\t\t";
        }
        // line 17
        yield "
\t\t\t";
        // line 18
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "navbar_center", [], "any", false, false, true, 18)) {
            // line 19
            yield "\t\t\t\t<div class=\"uk-navbar-center\">
\t\t\t\t\t";
            // line 20
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "navbar_center", [], "any", false, false, true, 20), 20, $this->source), "html", null, true);
            yield "
\t\t\t\t</div>
\t\t\t";
        }
        // line 23
        yield "
\t\t\t<div class=\"uk-navbar-right uk-visible@m\">
\t\t\t\t";
        // line 25
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "navbar_right", [], "any", false, false, true, 25)) {
            // line 26
            yield "\t\t\t\t\t";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "navbar_right", [], "any", false, false, true, 26), 26, $this->source), "html", null, true);
            yield "
\t\t\t\t";
        } else {
            // line 28
            yield "\t\t\t\t\t<div class=\"uk-flex uk-flex-middle uk-visible@m\">
\t\t\t\t\t\t<a class=\"uk-icon-link uk-margin-right\" uk-icon=\"forward\"></a>
\t\t\t\t\t\t<a class=\"uk-icon-link uk-margin-right\" uk-icon=\"cog\"></a>
\t\t\t\t\t\t<a class=\"uk-icon-link uk-margin-right\" uk-icon=\"user\"></a>
\t\t\t\t\t</div>
\t\t\t\t";
        }
        // line 34
        yield "\t\t\t</div>
\t\t</nav>
\t\t<div class=\"uk-navbar-dropbar\"></div>
\t</div>
</div>

\t";
        // line 40
        if ((($context["is_front"] ?? null) && ($context["show_slideshow"] ?? null))) {
            // line 41
            yield "<div class=\"uk-section uk-background-cover\" style=\"background-image: url(";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["slider_image"] ?? null), 41, $this->source), "html", null, true);
            yield ")\">
\t<div id=\"slideshow\" class=\"uk-position-relative uk-visible-toggle\" tabindex=\"-1\" uk-slideshow=\"";
            // line 42
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["slideshow_ratio"] ?? null), 42, $this->source), "html", null, true);
            yield "\">
\t\t<ul class=\"uk-slideshow-items\">
\t\t\t";
            // line 44
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["slider_content"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["slider_contents"]) {
                // line 45
                yield "\t\t\t";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed($context["slider_contents"], 45, $this->source));
                yield "
\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['slider_contents'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 47
            yield "\t\t</ul>
\t\t<a class=\"uk-position-center-left uk-position-large uk-text-primary\" href=\"#\" uk-slidenav-previous uk-slideshow-item=\"previous\"></a>
\t\t<a class=\"uk-position-center-right uk-position-large uk-text-primary\" href=\"#\" uk-slidenav-next uk-slideshow-item=\"next\"></a>
\t</div>
</div>
\t";
        }
        // line 53
        yield "
";
        // line 54
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "content_top", [], "any", false, false, true, 54)) {
            // line 55
            yield "\t\t\t";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "content_top", [], "any", false, false, true, 55), 55, $this->source), "html", null, true);
            yield "
";
        }
        // line 57
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 57)) {
            // line 58
            yield "\t\t\t\t<div class=\"main-content uk-width-expand\">
\t\t\t\t\t<div class=\"uk-container\">";
            // line 59
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 59), 59, $this->source), "html", null, true);
            yield "</div>
\t\t\t\t</div>
\t\t\t";
        }
        // line 62
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "content_bottom", [], "any", false, false, true, 62)) {
            // line 63
            yield "\t\t\t";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "content_bottom", [], "any", false, false, true, 63), 63, $this->source), "html", null, true);
            yield "
";
        }
        // line 65
        yield "

\t";
        // line 67
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 67)) {
            // line 68
            yield "\t\t<div id=\"footer\" class=\"uk-section uk-section-secondary uk-section-small\">
\t\t\t<div class=\"uk-container\">
\t\t\t\t<div class=\"uk-child-width-expand\" uk-grid>
\t\t\t\t\t";
            // line 71
            if (($context["show_about_block"] ?? null)) {
                // line 72
                yield "\t\t\t\t\t\t<div class=\"uk-width-1-4\">
\t\t\t\t\t\t\t<div class=\"uk-panel block\">
\t\t\t\t\t\t\t\t<div class=\"uk-flex-middle\">
\t\t\t\t\t\t\t\t\t<span class=\"uk-margin-small-right uk-icon\" uk-icon=\"icon: nut; ratio: 2\"></span>
\t\t\t\t\t\t\t\t\t<span class=\"first-word uk-h4 uk-text-light\">";
                // line 76
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["site_name"] ?? null), 76, $this->source), "html", null, true);
                yield "</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<p class=\"uk-margin\">";
                // line 79
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, (Twig\Extension\CoreExtension::slice($this->env->getCharset(), Twig\Extension\CoreExtension::striptags($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(($context["about_us"] ?? null), 79, $this->source))), 0, 150) . "..."), "html", null, true);
                // line 80
                yield "</p>
\t\t\t\t\t\t\t\t<ul class=\"uk-child-width-auto uk-grid\" uk-grid=\"\">
\t\t\t\t\t\t\t\t\t";
                // line 82
                if (($context["facebook_url"] ?? null)) {
                    // line 83
                    yield "\t\t\t\t\t\t\t\t\t<li class=\"uk-first-column\">
\t\t\t\t\t\t\t\t\t\t<a class=\"uk-icon-button uk-icon\" target=\"_blank\" href=\"";
                    // line 84
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["facebook_url"] ?? null), 84, $this->source), "html", null, true);
                    yield "\" uk-icon=\"facebook\">
\t\t\t\t\t\t\t\t\t\t</svg></a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t";
                }
                // line 88
                yield "\t\t\t\t\t\t\t\t\t";
                if (($context["linkedin_url"] ?? null)) {
                    // line 89
                    yield "\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a class=\"uk-icon-button uk-icon\" target=\"_blank\" href=\"";
                    // line 90
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["linkedin_url"] ?? null), 90, $this->source), "html", null, true);
                    yield "\" uk-icon=\"linkedin\"></a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t";
                }
                // line 93
                yield "\t\t\t\t\t\t\t\t\t";
                if (($context["instagram_url"] ?? null)) {
                    // line 94
                    yield "\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a class=\"uk-icon-button uk-icon\" target=\"_blank\" href=\"";
                    // line 95
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["instagram_url"] ?? null), 95, $this->source), "html", null, true);
                    yield "\" uk-icon=\"instagram\"></a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t";
                }
                // line 98
                yield "\t\t\t\t\t\t\t\t\t";
                if (($context["twitter_url"] ?? null)) {
                    // line 99
                    yield "\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a class=\"uk-icon-button uk-icon\" target=\"_blank\" href=\"";
                    // line 100
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["twitter_url"] ?? null), 100, $this->source), "html", null, true);
                    yield "\" uk-icon=\"twitter\"></a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t";
                }
                // line 103
                yield "                  <li>
                    <a class=\"uk-icon-button uk-icon\" target=\"_blank\" href=\"";
                // line 104
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["twitter_url"] ?? null), 104, $this->source), "html", null, true);
                yield "\" uk-icon=\"x\"></a>
                  </li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a class=\"uk-icon-button uk-icon\" target=\"_blank\" href=\"";
                // line 107
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["whatsup_url"] ?? null), 107, $this->source), "html", null, true);
                yield "\" uk-icon=\"whatsapp\"></a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a class=\"uk-icon-button uk-icon\" target=\"_blank\" href=\"";
                // line 110
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["youtube_url"] ?? null), 110, $this->source), "html", null, true);
                yield "\" uk-icon=\"youtube\"></a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
            }
            // line 116
            yield "\t\t\t\t\t";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 116), 116, $this->source), "html", null, true);
            yield "
\t\t\t\t\t";
            // line 117
            if (($context["show_contact_block"] ?? null)) {
                // line 118
                yield "\t\t\t\t\t\t<div class=\"uk-width-1-4\">
\t\t\t\t\t\t\t<div class=\"uk-panel block\">
\t\t\t\t\t\t\t\t<h3 class=\"uk-h4 uk-text-light uk-margin-bottom\">";
                // line 120
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["contact_title"] ?? null), 120, $this->source), "html", null, true);
                yield "</h3>

\t\t\t\t\t\t\t\t<ul class=\"uk-list\">
\t\t\t\t\t\t\t\t\t<li><span class=\"uk-margin-small-right uk-icon\" uk-icon=\"receiver\"></span>";
                // line 123
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["phone"] ?? null), 123, $this->source), "html", null, true);
                yield "</li>
\t\t\t\t\t\t\t\t\t<li><span class=\"uk-margin-small-right uk-icon\" uk-icon=\"mail\"></span>";
                // line 124
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["email"] ?? null), 124, $this->source), "html", null, true);
                yield "</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
            }
            // line 129
            yield "\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t";
        }
        // line 133
        yield "
";
        // line 134
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_bottom", [], "any", false, false, true, 134)) {
            // line 135
            yield "\t<div class=\"uk-section uk-section-primary uk-section-small\">
\t\t<div class=\"uk-container\">
\t\t\t";
            // line 137
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_bottom", [], "any", false, false, true, 137), 137, $this->source), "html", null, true);
            yield "
\t\t</div>
\t</div>
";
        }
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["page", "is_front", "show_slideshow", "slider_image", "slideshow_ratio", "slider_content", "show_about_block", "site_name", "about_us", "facebook_url", "linkedin_url", "instagram_url", "twitter_url", "whatsup_url", "youtube_url", "show_contact_block", "contact_title", "phone", "email"]);        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "themes/ajans/templates/layout/page--front.html.twig";
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
        return array (  321 => 137,  317 => 135,  315 => 134,  312 => 133,  306 => 129,  298 => 124,  294 => 123,  288 => 120,  284 => 118,  282 => 117,  277 => 116,  268 => 110,  262 => 107,  256 => 104,  253 => 103,  247 => 100,  244 => 99,  241 => 98,  235 => 95,  232 => 94,  229 => 93,  223 => 90,  220 => 89,  217 => 88,  210 => 84,  207 => 83,  205 => 82,  201 => 80,  199 => 79,  194 => 76,  188 => 72,  186 => 71,  181 => 68,  179 => 67,  175 => 65,  169 => 63,  167 => 62,  161 => 59,  158 => 58,  156 => 57,  150 => 55,  148 => 54,  145 => 53,  137 => 47,  128 => 45,  124 => 44,  119 => 42,  114 => 41,  112 => 40,  104 => 34,  96 => 28,  90 => 26,  88 => 25,  84 => 23,  78 => 20,  75 => 19,  73 => 18,  70 => 17,  64 => 14,  61 => 13,  59 => 12,  53 => 8,  46 => 4,  42 => 2,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/ajans/templates/layout/page--front.html.twig", "/var/www/html/web/themes/ajans/templates/layout/page--front.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 1, "for" => 44);
        static $filters = array("escape" => 4, "raw" => 45, "slice" => 79, "striptags" => 79, "render" => 79);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'for'],
                ['escape', 'raw', 'slice', 'striptags', 'render'],
                [],
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

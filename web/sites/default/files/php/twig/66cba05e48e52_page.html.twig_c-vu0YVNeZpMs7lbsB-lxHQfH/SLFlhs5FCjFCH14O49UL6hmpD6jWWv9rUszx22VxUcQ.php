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

/* themes/ajans/templates/layout/page.html.twig */
class __TwigTemplate_40611f99c21f7ba2bd829f9af585d67c extends Template
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
        yield "<div class=\"uk-section uk-section-default uk-section-xsmall shadow\" uk-sticky=\"show-on-up: true\">
\t<div class=\"uk-container\">
\t\t<nav class=\"uk-navbar-container uk-navbar-transparent\" uk-navbar=\"dropbar: true; dropbar-mode: push; mode: click; boundary-align: true; align: center\">

\t\t\t";
        // line 5
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "navbar_left", [], "any", false, false, true, 5)) {
            // line 6
            yield "\t\t\t\t<div class=\"uk-navbar-left\">
\t\t\t\t\t";
            // line 7
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "navbar_left", [], "any", false, false, true, 7), 7, $this->source), "html", null, true);
            yield "
\t\t\t\t</div>
\t\t\t";
        }
        // line 10
        yield "
\t\t\t";
        // line 11
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "navbar_center", [], "any", false, false, true, 11)) {
            // line 12
            yield "\t\t\t\t<div class=\"uk-navbar-center\">
\t\t\t\t\t";
            // line 13
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "navbar_center", [], "any", false, false, true, 13), 13, $this->source), "html", null, true);
            yield "
\t\t\t\t</div>
\t\t\t";
        }
        // line 16
        yield "
\t\t\t<div class=\"uk-navbar-right uk-visible@m\">
\t\t\t\t";
        // line 18
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "navbar_right", [], "any", false, false, true, 18)) {
            // line 19
            yield "\t\t\t\t\t";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "navbar_right", [], "any", false, false, true, 19), 19, $this->source), "html", null, true);
            yield "
\t\t\t\t";
        } else {
            // line 21
            yield "\t\t\t\t\t<div class=\"uk-flex uk-flex-middle uk-visible@m\">
\t\t\t\t\t\t<a class=\"uk-icon-link uk-margin-right\" uk-icon=\"forward\"></a>
\t\t\t\t\t\t<a class=\"uk-icon-link uk-margin-right\" uk-icon=\"cog\"></a>
\t\t\t\t\t\t<a class=\"uk-icon-link uk-margin-right\" uk-icon=\"user\"></a>
\t\t\t\t\t</div>
\t\t\t\t";
        }
        // line 27
        yield "\t\t\t</div>
\t\t</nav>
\t\t<div class=\"uk-navbar-dropbar\"></div>
\t</div>
</div>

";
        // line 33
        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["node"] ?? null), "body", [], "any", false, false, true, 33), "summary", [], "any", false, false, true, 33)) {
            // line 34
            yield "\t<div class=\"uk-section uk-section-default\" style=\"background-image: url(";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getFileUrl($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["node"] ?? null), "field_image", [], "any", false, false, true, 34), "entity", [], "any", false, false, true, 34), "fileuri", [], "any", false, false, true, 34), 34, $this->source)), "html", null, true);
            yield ")\">
\t\t<div class=\"uk-container\">
\t\t\t";
            // line 36
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["node"] ?? null), "body", [], "any", false, false, true, 36), "summary", [], "any", false, false, true, 36), 36, $this->source));
            yield "
\t\t</div>
\t</div>
";
        }
        // line 40
        yield "
";
        // line 41
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "content_top", [], "any", false, false, true, 41)) {
            // line 42
            yield "\t";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "content_top", [], "any", false, false, true, 42), 42, $this->source), "html", null, true);
            yield "
";
        }
        // line 44
        yield "
<div class=\"uk-section uk-section-default\">
\t<div class=\"uk-container\">

\t\t<div class=\"uk-margin-bottom\" uk-grid>
\t\t\t";
        // line 49
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 49)) {
            // line 50
            yield "\t\t\t\t<div class=\"uk-width-1-4@m\">
\t\t\t\t\t";
            // line 51
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 51), 51, $this->source), "html", null, true);
            yield "
\t\t\t\t</div>
\t\t\t";
        }
        // line 54
        yield "
\t\t\t<!--- Start Content -->
\t\t\t";
        // line 56
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 56)) {
            // line 57
            yield "\t\t\t\t<div class=\"main-content uk-width-expand\">
\t\t\t\t\t<div class=\"uk-container\">";
            // line 58
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 58), 58, $this->source), "html", null, true);
            yield "</div>
\t\t\t\t</div>
\t\t\t";
        }
        // line 61
        yield "\t\t\t<!-- End: Content -->
\t\t</div>
\t</div>


\t";
        // line 66
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "content_bottom", [], "any", false, false, true, 66)) {
            // line 67
            yield "\t\t";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "content_bottom", [], "any", false, false, true, 67), 67, $this->source), "html", null, true);
            yield "
\t";
        }
        // line 69
        yield "

\t";
        // line 71
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 71)) {
            // line 72
            yield "\t\t<div id=\"footer\" class=\"uk-section uk-section-secondary uk-section-small\">
\t\t\t<div class=\"uk-container\">
\t\t\t\t<div class=\"uk-child-width-expand\" uk-grid>
\t\t\t\t\t";
            // line 75
            if (($context["show_about_block"] ?? null)) {
                // line 76
                yield "\t\t\t\t\t\t<div class=\"uk-width-1-4\">
\t\t\t\t\t\t\t<div class=\"uk-panel block\">
\t\t\t\t\t\t\t\t<div class=\"uk-flex-middle\">
\t\t\t\t\t\t\t\t\t<span class=\"uk-margin-small-right uk-icon\" uk-icon=\"icon: nut; ratio: 2\"></span>
\t\t\t\t\t\t\t\t\t<span class=\"first-word uk-h4 uk-text-light\">";
                // line 80
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["site_name"] ?? null), 80, $this->source), "html", null, true);
                yield "</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<p class=\"uk-margin\">";
                // line 83
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, (Twig\Extension\CoreExtension::slice($this->env->getCharset(), Twig\Extension\CoreExtension::striptags($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(($context["about_us"] ?? null), 83, $this->source))), 0, 150) . "..."), "html", null, true);
                // line 84
                yield "</p>
\t\t\t\t\t\t\t\t<ul class=\"uk-child-width-auto uk-grid\" uk-grid=\"\">
\t\t\t\t\t\t\t\t\t";
                // line 86
                if (($context["facebook_url"] ?? null)) {
                    // line 87
                    yield "\t\t\t\t\t\t\t\t\t<li class=\"uk-first-column\">
\t\t\t\t\t\t\t\t\t\t<a class=\"uk-icon-button uk-icon\" target=\"_blank\" href=\"";
                    // line 88
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["facebook_url"] ?? null), 88, $this->source), "html", null, true);
                    yield "\" uk-icon=\"facebook\">
\t\t\t\t\t\t\t\t\t\t</svg></a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t";
                }
                // line 92
                yield "\t\t\t\t\t\t\t\t\t";
                if (($context["linkedin_url"] ?? null)) {
                    // line 93
                    yield "\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a class=\"uk-icon-button uk-icon\" target=\"_blank\" href=\"";
                    // line 94
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["linkedin_url"] ?? null), 94, $this->source), "html", null, true);
                    yield "\" uk-icon=\"linkedin\"></a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t";
                }
                // line 97
                yield "\t\t\t\t\t\t\t\t\t";
                if (($context["instagram_url"] ?? null)) {
                    // line 98
                    yield "\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a class=\"uk-icon-button uk-icon\" target=\"_blank\" href=\"";
                    // line 99
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["instagram_url"] ?? null), 99, $this->source), "html", null, true);
                    yield "\" uk-icon=\"instagram\"></a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t";
                }
                // line 102
                yield "\t\t\t\t\t\t\t\t\t";
                if (($context["twitter_url"] ?? null)) {
                    // line 103
                    yield "\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a class=\"uk-icon-button uk-icon\" target=\"_blank\" href=\"";
                    // line 104
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["twitter_url"] ?? null), 104, $this->source), "html", null, true);
                    yield "\" uk-icon=\"twitter\"></a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t";
                }
                // line 107
                yield "
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a class=\"uk-icon-button uk-icon\" target=\"_blank\" href=\"";
                // line 109
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["whatsup_url"] ?? null), 109, $this->source), "html", null, true);
                yield "\" uk-icon=\"whatsapp\"></a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a class=\"uk-icon-button uk-icon\" target=\"_blank\" href=\"";
                // line 112
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["youtube_url"] ?? null), 112, $this->source), "html", null, true);
                yield "\" uk-icon=\"youtube\"></a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
            }
            // line 119
            yield "\t\t\t\t\t";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 119), 119, $this->source), "html", null, true);
            yield "
\t\t\t\t\t";
            // line 120
            if (($context["show_contact_block"] ?? null)) {
                // line 121
                yield "\t\t\t\t\t\t<div class=\"uk-width-1-4\">
\t\t\t\t\t\t\t<div class=\"uk-panel block\">
\t\t\t\t\t\t\t\t<h3 class=\"uk-h4 uk-text-light uk-margin-bottom\">";
                // line 123
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["contact_title"] ?? null), 123, $this->source), "html", null, true);
                yield "</h3>

\t\t\t\t\t\t\t\t<ul class=\"uk-list\">
\t\t\t\t\t\t\t\t\t<li><span class=\"uk-margin-small-right uk-icon\" uk-icon=\"receiver\"></span>";
                // line 126
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["phone"] ?? null), 126, $this->source), "html", null, true);
                yield "</li>
\t\t\t\t\t\t\t\t\t<li><span class=\"uk-margin-small-right uk-icon\" uk-icon=\"mail\"></span>";
                // line 127
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["email"] ?? null), 127, $this->source), "html", null, true);
                yield "</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
            }
            // line 132
            yield "\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t";
        }
        // line 136
        yield "
\t";
        // line 137
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_bottom", [], "any", false, false, true, 137)) {
            // line 138
            yield "\t\t<div class=\"uk-section uk-section-primary uk-section-small\">
\t\t\t<div class=\"uk-container\">
\t\t\t\t";
            // line 140
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_bottom", [], "any", false, false, true, 140), 140, $this->source), "html", null, true);
            yield "
\t\t\t</div>
\t\t</div>
\t";
        }
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["page", "node", "show_about_block", "site_name", "about_us", "facebook_url", "linkedin_url", "instagram_url", "twitter_url", "whatsup_url", "youtube_url", "show_contact_block", "contact_title", "phone", "email"]);        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "themes/ajans/templates/layout/page.html.twig";
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
        return array (  315 => 140,  311 => 138,  309 => 137,  306 => 136,  300 => 132,  292 => 127,  288 => 126,  282 => 123,  278 => 121,  276 => 120,  271 => 119,  261 => 112,  255 => 109,  251 => 107,  245 => 104,  242 => 103,  239 => 102,  233 => 99,  230 => 98,  227 => 97,  221 => 94,  218 => 93,  215 => 92,  208 => 88,  205 => 87,  203 => 86,  199 => 84,  197 => 83,  192 => 80,  186 => 76,  184 => 75,  179 => 72,  177 => 71,  173 => 69,  167 => 67,  165 => 66,  158 => 61,  152 => 58,  149 => 57,  147 => 56,  143 => 54,  137 => 51,  134 => 50,  132 => 49,  125 => 44,  119 => 42,  117 => 41,  114 => 40,  107 => 36,  101 => 34,  99 => 33,  91 => 27,  83 => 21,  77 => 19,  75 => 18,  71 => 16,  65 => 13,  62 => 12,  60 => 11,  57 => 10,  51 => 7,  48 => 6,  46 => 5,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/ajans/templates/layout/page.html.twig", "/var/www/html/web/themes/ajans/templates/layout/page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 5);
        static $filters = array("escape" => 7, "raw" => 36, "slice" => 83, "striptags" => 83, "render" => 83);
        static $functions = array("file_url" => 34);

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape', 'raw', 'slice', 'striptags', 'render'],
                ['file_url'],
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

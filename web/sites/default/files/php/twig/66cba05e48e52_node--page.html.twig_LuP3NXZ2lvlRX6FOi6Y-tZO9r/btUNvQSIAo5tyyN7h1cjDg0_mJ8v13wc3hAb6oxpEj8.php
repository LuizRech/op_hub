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

/* themes/ajans/templates/content/node--page.html.twig */
class __TwigTemplate_aa5ca4f84e54d7784fec0811cb62107a extends Template
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
        // line 66
        yield "
 ";
        // line 67
        if ((($context["view_mode"] ?? null) == "teaser")) {
            // line 68
            yield "
  ";
            // line 70
            $context["classes"] = ["node", ("node--type-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source,             // line 72
($context["node"] ?? null), "bundle", [], "any", false, false, true, 72), 72, $this->source))), ((CoreExtension::getAttribute($this->env, $this->source,             // line 73
($context["node"] ?? null), "isPromoted", [], "method", false, false, true, 73)) ? ("node--promoted") : ("")), ((CoreExtension::getAttribute($this->env, $this->source,             // line 74
($context["node"] ?? null), "isSticky", [], "method", false, false, true, 74)) ? ("node--sticky") : ("")), (( !CoreExtension::getAttribute($this->env, $this->source,             // line 75
($context["node"] ?? null), "isPublished", [], "method", false, false, true, 75)) ? ("node--unpublished") : ("")), ((            // line 76
($context["view_mode"] ?? null)) ? (("node--view-mode-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["view_mode"] ?? null), 76, $this->source)))) : ("")), "uk-article"];
            // line 80
            yield "
  <article";
            // line 81
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [($context["classes"] ?? null)], "method", false, false, true, 81), 81, $this->source), "html", null, true);
            yield ">
  ";
            // line 82
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null), 82, $this->source), "html", null, true);
            yield "
  ";
            // line 83
            if ( !($context["page"] ?? null)) {
                // line 84
                yield "    <div class=\"title\">
    <h2";
                // line 85
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_attributes"] ?? null), 85, $this->source), "html", null, true);
                yield ">
      ";
                // line 86
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 86, $this->source), "html", null, true);
                yield "
    </h2>
    </div>
  ";
            }
            // line 90
            yield "  ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null), 90, $this->source), "html", null, true);
            yield "
  <div";
            // line 91
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["content_attributes"] ?? null), "addClass", ["node__content"], "method", false, false, true, 91), 91, $this->source), "html", null, true);
            yield ">
  ";
            // line 92
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content"] ?? null), 92, $this->source), "html", null, true);
            yield "
  </div>
  </article>

  ";
        } else {
            // line 97
            yield "
    ";
            // line 99
            $context["classes"] = ["node", ("node--type-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source,             // line 101
($context["node"] ?? null), "bundle", [], "any", false, false, true, 101), 101, $this->source))), ((CoreExtension::getAttribute($this->env, $this->source,             // line 102
($context["node"] ?? null), "isPromoted", [], "method", false, false, true, 102)) ? ("node--promoted") : ("")), ((CoreExtension::getAttribute($this->env, $this->source,             // line 103
($context["node"] ?? null), "isSticky", [], "method", false, false, true, 103)) ? ("node--sticky") : ("")), (( !CoreExtension::getAttribute($this->env, $this->source,             // line 104
($context["node"] ?? null), "isPublished", [], "method", false, false, true, 104)) ? ("node--unpublished") : ("")), ((            // line 105
($context["view_mode"] ?? null)) ? (("node--view-mode-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["view_mode"] ?? null), 105, $this->source)))) : ("")), "uk-article"];
            // line 109
            yield "
    <article";
            // line 110
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [($context["classes"] ?? null)], "method", false, false, true, 110), 110, $this->source), "html", null, true);
            yield ">

    ";
            // line 112
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null), 112, $this->source), "html", null, true);
            yield "
    ";
            // line 113
            if ( !($context["page"] ?? null)) {
                // line 114
                yield "      <h2";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["title_attributes"] ?? null), "addClass", ["uk-article-title"], "method", false, false, true, 114), 114, $this->source), "html", null, true);
                yield ">
      <a class=\"uk-link-reset\" href=\"";
                // line 115
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["url"] ?? null), 115, $this->source), "html", null, true);
                yield "\" rel=\"bookmark\">";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 115, $this->source), "html", null, true);
                yield "</a>
      </h2>
    ";
            }
            // line 118
            yield "    ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null), 118, $this->source), "html", null, true);
            yield "


    ";
            // line 121
            if (($context["display_submitted"] ?? null)) {
                // line 122
                yield "      <footer class=\"comment-submitted\">
      <div";
                // line 123
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["author_attributes"] ?? null), "addClass", ["node__submitted"], "method", false, false, true, 123), 123, $this->source), "html", null, true);
                yield ">
      ";
                // line 124
                yield t("Submitted by @author_name on @date", array("@author_name" => ($context["author_name"] ?? null), "@date" => ($context["date"] ?? null), ));
                // line 125
                yield "      ";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["metadata"] ?? null), 125, $this->source), "html", null, true);
                yield "
      </div>
      </footer>
    ";
            }
            // line 129
            yield "
    <div";
            // line 130
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["content_attributes"] ?? null), "addClass", ["node__content"], "method", false, false, true, 130), 130, $this->source), "html", null, true);
            yield ">
    ";
            // line 131
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content"] ?? null), 131, $this->source), "html", null, true);
            yield "
    </div>

    </article>
  ";
        }
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["view_mode", "node", "attributes", "title_prefix", "page", "title_attributes", "label", "title_suffix", "content_attributes", "content", "url", "display_submitted", "author_attributes", "author_name", "date", "metadata"]);        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "themes/ajans/templates/content/node--page.html.twig";
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
        return array (  169 => 131,  165 => 130,  162 => 129,  154 => 125,  152 => 124,  148 => 123,  145 => 122,  143 => 121,  136 => 118,  128 => 115,  123 => 114,  121 => 113,  117 => 112,  112 => 110,  109 => 109,  107 => 105,  106 => 104,  105 => 103,  104 => 102,  103 => 101,  102 => 99,  99 => 97,  91 => 92,  87 => 91,  82 => 90,  75 => 86,  71 => 85,  68 => 84,  66 => 83,  62 => 82,  58 => 81,  55 => 80,  53 => 76,  52 => 75,  51 => 74,  50 => 73,  49 => 72,  48 => 70,  45 => 68,  43 => 67,  40 => 66,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/ajans/templates/content/node--page.html.twig", "/var/www/html/web/themes/ajans/templates/content/node--page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 67, "set" => 70, "trans" => 124);
        static $filters = array("clean_class" => 72, "escape" => 81);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'set', 'trans'],
                ['clean_class', 'escape'],
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

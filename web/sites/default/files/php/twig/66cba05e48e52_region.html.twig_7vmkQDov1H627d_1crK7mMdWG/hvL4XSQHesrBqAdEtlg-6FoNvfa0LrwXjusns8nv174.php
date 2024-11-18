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

/* themes/ajans/templates/layout/region.html.twig */
class __TwigTemplate_4bbeeaed6898667837945cc69b5a113e extends Template
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
        // line 16
        $context["classes"] = ["region", ("region-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(        // line 18
($context["region"] ?? null), 18, $this->source)))];
        // line 21
        yield "
";
        // line 22
        if (($context["content"] ?? null)) {
            // line 23
            yield "\t";
            if ((\Drupal\Component\Utility\Html::getClass(($context["region"] ?? null)) == "footer")) {
                // line 24
                yield "\t\t<div class=\"uk-child-width-expand\" uk-grid>
\t";
            } elseif ((\Drupal\Component\Utility\Html::getClass(            // line 25
($context["region"] ?? null)) == "footer-bottom")) {
                // line 26
                yield "\t\t<div class=\"uk-flex uk-flex-between\">
\t";
            } elseif ((\Drupal\Component\Utility\Html::getClass(            // line 27
($context["region"] ?? null)) == "navbar-center")) {
                // line 28
                yield "\t";
            } else {
                // line 29
                yield "\t\t<div";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [($context["classes"] ?? null)], "method", false, false, true, 29), 29, $this->source), "html", null, true);
                yield ">
\t";
            }
            // line 30
            yield "  
\t    ";
            // line 31
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content"] ?? null), 31, $this->source), "html", null, true);
            yield "
\t ";
            // line 32
            if ((\Drupal\Component\Utility\Html::getClass(($context["region"] ?? null)) != "navbar-center")) {
                // line 33
                yield "  </div>
";
            }
        }
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["region", "content", "attributes"]);        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "themes/ajans/templates/layout/region.html.twig";
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
        return array (  79 => 33,  77 => 32,  73 => 31,  70 => 30,  64 => 29,  61 => 28,  59 => 27,  56 => 26,  54 => 25,  51 => 24,  48 => 23,  46 => 22,  43 => 21,  41 => 18,  40 => 16,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/ajans/templates/layout/region.html.twig", "/var/www/html/web/themes/ajans/templates/layout/region.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 16, "if" => 22);
        static $filters = array("clean_class" => 18, "escape" => 29);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
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

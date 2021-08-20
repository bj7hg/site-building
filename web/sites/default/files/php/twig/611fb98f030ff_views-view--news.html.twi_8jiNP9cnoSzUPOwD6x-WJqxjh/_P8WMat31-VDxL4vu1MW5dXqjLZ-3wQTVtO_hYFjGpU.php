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

/* themes/custom/rgb_exam/templates/views-view--news.html.twig */
class __TwigTemplate_91f327540cb44b6a62087c41c96e1bbe7a90939d8ffdbfb32288a329a43cf1fc extends \Twig\Template
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
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 36
        $context["classes"] = [0 => "view", 1 => ("view-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(        // line 38
($context["id"] ?? null), 38, $this->source))), 2 => ("view-id-" . $this->sandbox->ensureToStringAllowed(        // line 39
($context["id"] ?? null), 39, $this->source)), 3 => ("view-display-id-" . $this->sandbox->ensureToStringAllowed(        // line 40
($context["display_id"] ?? null), 40, $this->source)), 4 => ((        // line 41
($context["dom_id"] ?? null)) ? (("js-view-dom-id-" . $this->sandbox->ensureToStringAllowed(($context["dom_id"] ?? null), 41, $this->source))) : (""))];
        // line 44
        echo "<div";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\flag\TwigExtension\FlagCount']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 44), 44, $this->source), "html", null, true));
        echo ">
  ";
        // line 45
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\flag\TwigExtension\FlagCount']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null), 45, $this->source), "html", null, true));
        echo "
  ";
        // line 46
        if (($context["title"] ?? null)) {
            // line 47
            echo "    ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\flag\TwigExtension\FlagCount']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null), 47, $this->source), "html", null, true));
            echo "
  ";
        }
        // line 49
        echo "  ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\flag\TwigExtension\FlagCount']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null), 49, $this->source), "html", null, true));
        echo "
  ";
        // line 50
        if (($context["header"] ?? null)) {
            // line 51
            echo "    <div class=\"view-header\">
      ";
            // line 52
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\flag\TwigExtension\FlagCount']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header"] ?? null), 52, $this->source), "html", null, true));
            echo "
    </div>
  ";
        }
        // line 55
        echo "  <div class=\"wrapper-news\">
  ";
        // line 56
        if (($context["exposed"] ?? null)) {
            // line 57
            echo "    <div class=\" container view-filters form-group\">
      ";
            // line 58
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\flag\TwigExtension\FlagCount']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["exposed"] ?? null), 58, $this->source), "html", null, true));
            echo "
    </div>
  ";
        }
        // line 61
        echo "  ";
        if (($context["attachment_before"] ?? null)) {
            // line 62
            echo "    <div class=\"attachment attachment-before\">
      ";
            // line 63
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\flag\TwigExtension\FlagCount']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["attachment_before"] ?? null), 63, $this->source), "html", null, true));
            echo "
    </div>
  ";
        }
        // line 66
        echo "
  ";
        // line 67
        if (($context["rows"] ?? null)) {
            // line 68
            echo "    <div class=\"view-content container\">
      ";
            // line 69
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\flag\TwigExtension\FlagCount']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["rows"] ?? null), 69, $this->source), "html", null, true));
            echo "
    </div>
  ";
        } elseif (        // line 71
($context["empty"] ?? null)) {
            // line 72
            echo "    <div class=\"view-empty\">
      ";
            // line 73
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\flag\TwigExtension\FlagCount']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["empty"] ?? null), 73, $this->source), "html", null, true));
            echo "
    </div>
  ";
        }
        // line 76
        echo "
  ";
        // line 77
        if (($context["pager"] ?? null)) {
            // line 78
            echo "    ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\flag\TwigExtension\FlagCount']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["pager"] ?? null), 78, $this->source), "html", null, true));
            echo "
  ";
        }
        // line 80
        echo "    </div>
  ";
        // line 81
        if (($context["attachment_after"] ?? null)) {
            // line 82
            echo "    <div class=\"attachment attachment-after\">
      ";
            // line 83
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\flag\TwigExtension\FlagCount']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["attachment_after"] ?? null), 83, $this->source), "html", null, true));
            echo "
    </div>
  ";
        }
        // line 86
        echo "  ";
        if (($context["more"] ?? null)) {
            // line 87
            echo "    ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\flag\TwigExtension\FlagCount']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["more"] ?? null), 87, $this->source), "html", null, true));
            echo "
  ";
        }
        // line 89
        echo "  ";
        if (($context["footer"] ?? null)) {
            // line 90
            echo "    <div class=\"view-footer\">
      ";
            // line 91
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\flag\TwigExtension\FlagCount']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer"] ?? null), 91, $this->source), "html", null, true));
            echo "
    </div>
  ";
        }
        // line 94
        echo "  ";
        if (($context["feed_icons"] ?? null)) {
            // line 95
            echo "    <div class=\"feed-icons\">
      ";
            // line 96
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\flag\TwigExtension\FlagCount']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["feed_icons"] ?? null), 96, $this->source), "html", null, true));
            echo "
    </div>
  ";
        }
        // line 99
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "themes/custom/rgb_exam/templates/views-view--news.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  186 => 99,  180 => 96,  177 => 95,  174 => 94,  168 => 91,  165 => 90,  162 => 89,  156 => 87,  153 => 86,  147 => 83,  144 => 82,  142 => 81,  139 => 80,  133 => 78,  131 => 77,  128 => 76,  122 => 73,  119 => 72,  117 => 71,  112 => 69,  109 => 68,  107 => 67,  104 => 66,  98 => 63,  95 => 62,  92 => 61,  86 => 58,  83 => 57,  81 => 56,  78 => 55,  72 => 52,  69 => 51,  67 => 50,  62 => 49,  56 => 47,  54 => 46,  50 => 45,  45 => 44,  43 => 41,  42 => 40,  41 => 39,  40 => 38,  39 => 36,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Default theme implementation for main view template.
 *
 * Available variables:
 * - attributes: Remaining HTML attributes for the element.
 * - css_name: A css-safe version of the view name.
 * - css_class: The user-specified classes names, if any.
 * - header: The optional header.
 * - footer: The optional footer.
 * - rows: The results of the view query, if any.
 * - empty: The content to display if there are no rows.
 * - pager: The optional pager next/prev links to display.
 * - exposed: Exposed widget form/info to display.
 * - feed_icons: Optional feed icons to display.
 * - more: An optional link to the next page of results.
 * - title: Title of the view, only used when displaying in the admin preview.
 * - title_prefix: Additional output populated by modules, intended to be
 *   displayed in front of the view title.
 * - title_suffix: Additional output populated by modules, intended to be
 *   displayed after the view title.
 * - attachment_before: An optional attachment view to be displayed before the
 *   view content.
 * - attachment_after: An optional attachment view to be displayed after the
 *   view content.
 * - dom_id: Unique id for every view being printed to give unique class for
 *   JavaScript.
 *
 * @ingroup templates
 *
 * @see template_preprocess_views_view()
 */
#}
{%
  set classes = [
    'view',
    'view-' ~ id|clean_class,
    'view-id-' ~ id,
    'view-display-id-' ~ display_id,
    dom_id ? 'js-view-dom-id-' ~ dom_id,
  ]
%}
<div{{ attributes.addClass(classes) }}>
  {{ title_prefix }}
  {% if title %}
    {{ title }}
  {% endif %}
  {{ title_suffix }}
  {% if header %}
    <div class=\"view-header\">
      {{ header }}
    </div>
  {% endif %}
  <div class=\"wrapper-news\">
  {% if exposed %}
    <div class=\" container view-filters form-group\">
      {{ exposed }}
    </div>
  {% endif %}
  {% if attachment_before %}
    <div class=\"attachment attachment-before\">
      {{ attachment_before }}
    </div>
  {% endif %}

  {% if rows %}
    <div class=\"view-content container\">
      {{ rows }}
    </div>
  {% elseif empty %}
    <div class=\"view-empty\">
      {{ empty }}
    </div>
  {% endif %}

  {% if pager %}
    {{ pager }}
  {% endif %}
    </div>
  {% if attachment_after %}
    <div class=\"attachment attachment-after\">
      {{ attachment_after }}
    </div>
  {% endif %}
  {% if more %}
    {{ more }}
  {% endif %}
  {% if footer %}
    <div class=\"view-footer\">
      {{ footer }}
    </div>
  {% endif %}
  {% if feed_icons %}
    <div class=\"feed-icons\">
      {{ feed_icons }}
    </div>
  {% endif %}
</div>
", "themes/custom/rgb_exam/templates/views-view--news.html.twig", "/var/www/web/themes/custom/rgb_exam/templates/views-view--news.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 36, "if" => 46);
        static $filters = array("clean_class" => 38, "escape" => 44);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['clean_class', 'escape'],
                []
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

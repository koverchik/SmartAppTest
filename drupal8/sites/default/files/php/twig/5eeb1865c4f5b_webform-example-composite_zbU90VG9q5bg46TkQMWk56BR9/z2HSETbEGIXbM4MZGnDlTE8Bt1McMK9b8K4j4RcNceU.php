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

/* modules/webform/modules/webform_example_composite/templates/webform-example-composite.html.twig */
class __TwigTemplate_4d13f736f057b77d63b2491a1e480657d980d8ec2e236d5170254e7816956328 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 15];
        $filters = ["escape" => 14];
        $functions = ["attach_library" => 14];

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape'],
                ['attach_library']
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
        // line 14
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->attachLibrary("webform_example_composite/webform_example_composite"), "html", null, true);
        echo "
";
        // line 15
        if (($context["flexbox"] ?? null)) {
            // line 16
            echo "    <div class=\"webform-flexbox\">
      ";
            // line 17
            if ($this->getAttribute(($context["content"] ?? null), "first_name", [])) {
                // line 18
                echo "        <div class=\"webform-flex webform-flex--1\"><div class=\"webform-flex--container\">";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "first_name", [])), "html", null, true);
                echo "</div></div>
      ";
            }
            // line 20
            echo "      ";
            if ($this->getAttribute(($context["content"] ?? null), "last_name", [])) {
                // line 21
                echo "        <div class=\"webform-flex webform-flex--1\"><div class=\"webform-flex--container\">";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "last_name", [])), "html", null, true);
                echo "</div></div>
      ";
            }
            // line 23
            echo "      ";
            if ($this->getAttribute(($context["content"] ?? null), "date_of_birth", [])) {
                // line 24
                echo "        <div class=\"webform-flex webform-flex--1\"><div class=\"webform-flex--container\">";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "date_of_birth", [])), "html", null, true);
                echo "</div></div>
      ";
            }
            // line 26
            echo "      ";
            if ($this->getAttribute(($context["content"] ?? null), "gender", [])) {
                // line 27
                echo "        <div class=\"webform-flex webform-flex--1\"><div class=\"webform-flex--container\">";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "gender", [])), "html", null, true);
                echo "</div></div>
      ";
            }
            // line 29
            echo "    </div>
";
        } else {
            // line 31
            echo "  ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content"] ?? null)), "html", null, true);
            echo "
";
        }
        // line 33
        echo "
";
    }

    public function getTemplateName()
    {
        return "modules/webform/modules/webform_example_composite/templates/webform-example-composite.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 33,  103 => 31,  99 => 29,  93 => 27,  90 => 26,  84 => 24,  81 => 23,  75 => 21,  72 => 20,  66 => 18,  64 => 17,  61 => 16,  59 => 15,  55 => 14,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "modules/webform/modules/webform_example_composite/templates/webform-example-composite.html.twig", "/var/www/html/drupal8/modules/webform/modules/webform_example_composite/templates/webform-example-composite.html.twig");
    }
}

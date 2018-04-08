<?php

/* themes/contrib/thunder_admin/templates/form/details.html.twig */
class __TwigTemplate_ea08c8d43202328259fcae065e5183b5824d5ba236b0cc9daf6998bf0b3afa82 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array("if" => 18, "set" => 20, "include" => 28);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('if', 'set', 'include'),
                array(),
                array()
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 17
        echo "<details";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["attributes"] ?? null), "html", null, true));
        echo " data-form-description-container>";
        // line 18
        if (($context["title"] ?? null)) {
            // line 20
            $context["summary_classes"] = array(0 => ((            // line 21
($context["required"] ?? null)) ? ("js-form-required") : ("")), 1 => ((            // line 22
($context["required"] ?? null)) ? ("form-required") : ("")));
            // line 25
            echo "    <summary";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["summary_attributes"] ?? null), "addClass", array(0 => ($context["summary_classes"] ?? null)), "method"), "html", null, true));
            echo ">
      ";
            // line 26
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title"] ?? null), "html", null, true));
            // line 27
            if (($context["description"] ?? null)) {
                // line 28
                $this->loadTemplate("@thunder_admin/button-description-toggle.html.twig", "themes/contrib/thunder_admin/templates/form/details.html.twig", 28)->display(array_merge($context, array("class" => "details__toggle-description")));
            }
            // line 30
            echo "</summary>";
        }
        // line 32
        echo "<div class=\"details-wrapper\">
    ";
        // line 33
        if (($context["errors"] ?? null)) {
            // line 34
            echo "      <div class=\"form-item--error-message\">
        <strong>";
            // line 35
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["errors"] ?? null), "html", null, true));
            echo "</strong>
      </div>
    ";
        }
        // line 38
        if (($context["description"] ?? null)) {
            // line 39
            echo "<div class=\"js-details-description details-description\">";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["description"] ?? null), "html", null, true));
            echo "</div>";
        }
        // line 41
        if (($context["children"] ?? null)) {
            // line 42
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["children"] ?? null), "html", null, true));
        }
        // line 44
        if (($context["value"] ?? null)) {
            // line 45
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["value"] ?? null), "html", null, true));
        }
        // line 47
        echo "</div>
</details>
";
    }

    public function getTemplateName()
    {
        return "themes/contrib/thunder_admin/templates/form/details.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 47,  96 => 45,  94 => 44,  91 => 42,  89 => 41,  84 => 39,  82 => 38,  76 => 35,  73 => 34,  71 => 33,  68 => 32,  65 => 30,  62 => 28,  60 => 27,  58 => 26,  53 => 25,  51 => 22,  50 => 21,  49 => 20,  47 => 18,  43 => 17,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/contrib/thunder_admin/templates/form/details.html.twig", "/app/docroot/themes/contrib/thunder_admin/templates/form/details.html.twig");
    }
}

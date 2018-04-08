<?php

/* themes/contrib/thunder_admin/templates/form/form-element.html.twig */
class __TwigTemplate_8ffd0464f39374583843787ef1ef866566a9dffa1250046cdd72bc4981259103 extends Twig_Template
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
        $tags = array("set" => 49, "if" => 71, "include" => 93);
        $filters = array("clean_class" => 52);
        $functions = array("attach_library" => 47);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('set', 'if', 'include'),
                array('clean_class'),
                array('attach_library')
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

        // line 47
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->attachLibrary("thunder_admin/form-toggle-description"), "html", null, true));
        echo "
";
        // line 49
        $context["classes"] = array(0 => "js-form-item", 1 => "form-item", 2 => ("js-form-type-" . \Drupal\Component\Utility\Html::getClass(        // line 52
($context["type"] ?? null))), 3 => ("form-type-" . \Drupal\Component\Utility\Html::getClass(        // line 53
($context["type"] ?? null))), 4 => ("js-form-item-" . \Drupal\Component\Utility\Html::getClass(        // line 54
($context["name"] ?? null))), 5 => ("form-item-" . \Drupal\Component\Utility\Html::getClass(        // line 55
($context["name"] ?? null))), 6 => ((!twig_in_filter(        // line 56
($context["title_display"] ?? null), array(0 => "after", 1 => "before"))) ? ("form-no-label") : ("")), 7 => (((        // line 57
($context["disabled"] ?? null) == "disabled")) ? ("form-disabled") : ("")), 8 => ((        // line 58
($context["errors"] ?? null)) ? ("form-item--error") : ("")));
        // line 62
        $context["description_classes"] = array(0 => "description", 1 => "form-item__description", 2 => "js-form-item__description", 3 => "js-description", 4 => (((        // line 67
($context["description_display"] ?? null) == "invisible")) ? ("visually-hidden") : ("")));
        // line 70
        echo "<div";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["attributes"] ?? null), "addClass", array(0 => ($context["classes"] ?? null)), "method"), "html", null, true));
        echo " data-form-description-container>
  ";
        // line 71
        if (twig_in_filter(($context["label_display"] ?? null), array(0 => "before", 1 => "invisible"))) {
            // line 72
            echo "    ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["label"] ?? null), "html", null, true));
            echo "
  ";
        }
        // line 74
        echo "
  ";
        // line 75
        if (((($context["description_display"] ?? null) == "before") && $this->getAttribute(($context["description"] ?? null), "content", array()))) {
            // line 76
            echo "    <div";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["description"] ?? null), "attributes", array()), "addClass", array(0 => ($context["description_classes"] ?? null)), "method"), "addClass", array(0 => "form-item__description--before"), "method"), "html", null, true));
            echo ">
      ";
            // line 77
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["description"] ?? null), "content", array()), "html", null, true));
            echo "
    </div>
  ";
        }
        // line 80
        echo "
  <div class=\"form-item__field-wrapper\">
    ";
        // line 82
        if ( !twig_test_empty(($context["prefix"] ?? null))) {
            // line 83
            echo "      <span class=\"field-prefix\">";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["prefix"] ?? null), "html", null, true));
            echo "</span>
    ";
        }
        // line 85
        echo "    ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["children"] ?? null), "html", null, true));
        echo "
    ";
        // line 86
        if ( !twig_test_empty(($context["suffix"] ?? null))) {
            // line 87
            echo "      <span class=\"field-suffix\">";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["suffix"] ?? null), "html", null, true));
            echo "</span>
    ";
        }
        // line 89
        echo "    ";
        if ((($context["label_display"] ?? null) == "after")) {
            // line 90
            echo "      ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["label"] ?? null), "html", null, true));
            echo "
    ";
        }
        // line 92
        echo "    ";
        if ($this->getAttribute(($context["description"] ?? null), "content", array())) {
            // line 93
            echo "      ";
            $this->loadTemplate("@thunder_admin/button-description-toggle.html.twig", "themes/contrib/thunder_admin/templates/form/form-element.html.twig", 93)->display(array_merge($context, array("class" => "form-item__toggle-description")));
            // line 94
            echo "    ";
        } else {
            // line 95
            echo "      <div class=\"form-item__toggle-description-placeholder\">&nbsp;</div>
    ";
        }
        // line 97
        echo "  </div>

  ";
        // line 99
        if (($context["errors"] ?? null)) {
            // line 100
            echo "    <div class=\"form-item--error-message\">
      <strong>";
            // line 101
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["errors"] ?? null), "html", null, true));
            echo "</strong>
    </div>
  ";
        }
        // line 104
        echo "  ";
        if ((twig_in_filter(($context["description_display"] ?? null), array(0 => "after", 1 => "invisible")) && $this->getAttribute(($context["description"] ?? null), "content", array()))) {
            // line 105
            echo "    <div";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["description"] ?? null), "attributes", array()), "addClass", array(0 => ($context["description_classes"] ?? null)), "method"), "addClass", array(0 => "form-item__description--after"), "method"), "html", null, true));
            echo ">
      ";
            // line 106
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["description"] ?? null), "content", array()), "html", null, true));
            echo "
    </div>
  ";
        }
        // line 109
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "themes/contrib/thunder_admin/templates/form/form-element.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  164 => 109,  158 => 106,  153 => 105,  150 => 104,  144 => 101,  141 => 100,  139 => 99,  135 => 97,  131 => 95,  128 => 94,  125 => 93,  122 => 92,  116 => 90,  113 => 89,  107 => 87,  105 => 86,  100 => 85,  94 => 83,  92 => 82,  88 => 80,  82 => 77,  77 => 76,  75 => 75,  72 => 74,  66 => 72,  64 => 71,  59 => 70,  57 => 67,  56 => 62,  54 => 58,  53 => 57,  52 => 56,  51 => 55,  50 => 54,  49 => 53,  48 => 52,  47 => 49,  43 => 47,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/contrib/thunder_admin/templates/form/form-element.html.twig", "/app/docroot/themes/contrib/thunder_admin/templates/form/form-element.html.twig");
    }
}

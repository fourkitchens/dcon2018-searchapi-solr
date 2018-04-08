<?php

/* themes/contrib/thunder_admin/templates/form/datetime-wrapper.html.twig */
class __TwigTemplate_9ceb2b9e9bdb7f86ca2cd2709eb43424625e1dd1b904faa72a76e779aa996ce5 extends Twig_Template
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
        $tags = array("set" => 17, "if" => 24, "include" => 30);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('set', 'if', 'include'),
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
        $context["title_classes"] = array(0 => "label", 1 => ((        // line 19
($context["required"] ?? null)) ? ("js-form-required") : ("")), 2 => ((        // line 20
($context["required"] ?? null)) ? ("form-required") : ("")));
        // line 23
        echo "<div class=\"form-item datetime-wrapper\" data-form-description-container>
  ";
        // line 24
        if (($context["title"] ?? null)) {
            // line 25
            echo "    <label";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["title_attributes"] ?? null), "addClass", array(0 => ($context["title_classes"] ?? null)), "method"), "html", null, true));
            echo ">";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title"] ?? null), "html", null, true));
            echo "</label>
  ";
        }
        // line 27
        echo "  <div class=\"form-item__field-wrapper\">
    ";
        // line 28
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["content"] ?? null), "html", null, true));
        echo "
    ";
        // line 29
        if (($context["description"] ?? null)) {
            // line 30
            echo "      ";
            $this->loadTemplate("@thunder_admin/button-description-toggle.html.twig", "themes/contrib/thunder_admin/templates/form/datetime-wrapper.html.twig", 30)->display(array_merge($context, array("class" => "form-item__toggle-description")));
            // line 31
            echo "    ";
        }
        // line 32
        echo "  </div>
  ";
        // line 33
        if (($context["errors"] ?? null)) {
            // line 34
            echo "    <div class=\"form-item--error-message\">
      <strong>";
            // line 35
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["errors"] ?? null), "html", null, true));
            echo "</strong>
    </div>
  ";
        }
        // line 38
        echo "  ";
        if (($context["description"] ?? null)) {
            // line 39
            echo "    <div class=\"description js-form-item__description\">";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["description"] ?? null), "html", null, true));
            echo "</div>
  ";
        }
        // line 41
        echo "</div>

";
    }

    public function getTemplateName()
    {
        return "themes/contrib/thunder_admin/templates/form/datetime-wrapper.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 41,  92 => 39,  89 => 38,  83 => 35,  80 => 34,  78 => 33,  75 => 32,  72 => 31,  69 => 30,  67 => 29,  63 => 28,  60 => 27,  52 => 25,  50 => 24,  47 => 23,  45 => 20,  44 => 19,  43 => 17,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/contrib/thunder_admin/templates/form/datetime-wrapper.html.twig", "/app/docroot/themes/contrib/thunder_admin/templates/form/datetime-wrapper.html.twig");
    }
}

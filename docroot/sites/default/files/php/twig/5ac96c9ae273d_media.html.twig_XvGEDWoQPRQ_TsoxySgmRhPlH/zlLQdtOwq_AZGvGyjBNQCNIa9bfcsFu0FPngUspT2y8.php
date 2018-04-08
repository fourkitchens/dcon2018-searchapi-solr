<?php

/* core/themes/classy/templates/content/media.html.twig */
class __TwigTemplate_f0cac38ca2fdc4d186283fa9d779dd0e73bbd1396ca2527515dcb3283874b936 extends Twig_Template
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
        $tags = array("set" => 16, "if" => 25);
        $filters = array("clean_class" => 18);
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('set', 'if'),
                array('clean_class'),
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

        // line 16
        $context["classes"] = array(0 => "media", 1 => ("media--type-" . \Drupal\Component\Utility\Html::getClass($this->getAttribute(        // line 18
($context["media"] ?? null), "bundle", array(), "method"))), 2 => (( !$this->getAttribute(        // line 19
($context["media"] ?? null), "isPublished", array(), "method")) ? ("media--unpublished") : ("")), 3 => ((        // line 20
($context["view_mode"] ?? null)) ? (("media--view-mode-" . \Drupal\Component\Utility\Html::getClass($this->getAttribute(($context["view_mode"] ?? null), "id", array(), "method")))) : ("")));
        // line 23
        echo "<article";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["attributes"] ?? null), "addClass", array(0 => ($context["classes"] ?? null)), "method"), "html", null, true));
        echo ">
  ";
        // line 24
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["title_suffix"] ?? null), "contextual_links", array()), "html", null, true));
        echo "
  ";
        // line 25
        if (($context["content"] ?? null)) {
            // line 26
            echo "    ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["content"] ?? null), "html", null, true));
            echo "
  ";
        }
        // line 28
        echo "</article>
";
    }

    public function getTemplateName()
    {
        return "core/themes/classy/templates/content/media.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 28,  59 => 26,  57 => 25,  53 => 24,  48 => 23,  46 => 20,  45 => 19,  44 => 18,  43 => 16,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "core/themes/classy/templates/content/media.html.twig", "/app/docroot/core/themes/classy/templates/content/media.html.twig");
    }
}

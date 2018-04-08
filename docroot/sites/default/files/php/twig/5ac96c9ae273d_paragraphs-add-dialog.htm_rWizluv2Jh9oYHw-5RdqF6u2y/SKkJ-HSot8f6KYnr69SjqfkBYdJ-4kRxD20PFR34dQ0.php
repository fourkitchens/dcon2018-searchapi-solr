<?php

/* modules/contrib/paragraphs/templates/paragraphs-add-dialog.html.twig */
class __TwigTemplate_c1d6450c6ada0765b0443e0b83ab6f4e54edbe2d87a267b40366aa45964e6f11 extends Twig_Template
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
        $tags = array();
        $filters = array("t" => 21);
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array(),
                array('t'),
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

        // line 20
        echo "
<div class=\"paragraphs-add-dialog-template\" title=\"";
        // line 21
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Add paragraph")));
        echo "\" style=\"display: none;\">
    <ul class=\"paragraphs-add-dialog-list\">
        <li class=\"paragraphs-add-dialog-row-template\">
            <button class=\"paragraphs-add-type-trigger-element button\" data-type-name=\"content\" data-type=\"data-type\"
                    data-delta=\"data-delta\"></button>
        </li>
    </ul>
</div>
";
    }

    public function getTemplateName()
    {
        return "modules/contrib/paragraphs/templates/paragraphs-add-dialog.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 21,  43 => 20,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "modules/contrib/paragraphs/templates/paragraphs-add-dialog.html.twig", "/app/docroot/modules/contrib/paragraphs/templates/paragraphs-add-dialog.html.twig");
    }
}

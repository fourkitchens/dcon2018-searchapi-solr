<?php

/* modules/contrib/paragraphs/templates/paragraphs-add-in-between-button.html.twig */
class __TwigTemplate_75b9f3e73fa7d843123d6bb34e969915de5ca2a3ee87cfcc41e3e97582bf0d24 extends Twig_Template
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
        $filters = array("t" => 25);
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

        // line 19
        echo "
<table class=\"paragraphs-add-in-between-button-template-container\" style=\"display: none;\">
    <tr class=\"add-in-between-row paragraphs-add-in-between-button-template\">
        <td colspan=\"100%\">
            <div class=\"paragraph-type-add-modal\">
                <input class=\"paragraph-type-add-modal-button button--small js-show button js-form-submit form-submit\"
                       type=\"submit\" value=\"";
        // line 25
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("+ Add")));
        echo "\">
            </div>
        </td>
    </tr>
</table>
";
    }

    public function getTemplateName()
    {
        return "modules/contrib/paragraphs/templates/paragraphs-add-in-between-button.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 25,  43 => 19,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "modules/contrib/paragraphs/templates/paragraphs-add-in-between-button.html.twig", "/app/docroot/modules/contrib/paragraphs/templates/paragraphs-add-in-between-button.html.twig");
    }
}

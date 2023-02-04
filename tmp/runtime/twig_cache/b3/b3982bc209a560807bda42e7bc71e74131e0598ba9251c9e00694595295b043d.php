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

/* /survey/questions/answer/list_dropdown/rows/option.twig */
class __TwigTemplate_f29ee384ab076d8a51a51c79db3a4d2facf499a8888102f51fe9b7a4d254e91a extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 10
        echo "
<!-- option -->
<option data-content=\"";
        // line 12
        echo LS_Twig_Extension::processString($this->sandbox->ensureToStringAllowed(($context["answer"] ?? null)), 1);
        echo "\" value='";
        echo $this->sandbox->ensureToStringAllowed(($context["value"] ?? null));
        echo "' ";
        echo $this->sandbox->ensureToStringAllowed(($context["opt_select"] ?? null));
        echo " ";
        if ( !twig_test_empty(($context["classes"] ?? null))) {
            echo " class=\"";
            echo $this->sandbox->ensureToStringAllowed(($context["classes"] ?? null));
            echo "\" ";
        }
        echo " >
    ";
        // line 13
        echo LS_Twig_Extension::flatString(LS_Twig_Extension::processString($this->sandbox->ensureToStringAllowed(($context["answer"] ?? null)), 1), 1);
        echo "
</option>
<!-- end of option -->
";
    }

    public function getTemplateName()
    {
        return "/survey/questions/answer/list_dropdown/rows/option.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 13,  36 => 12,  32 => 10,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "/survey/questions/answer/list_dropdown/rows/option.twig", "C:\\xampp\\htdocs\\formularioReg\\themes\\question\\bootstrap_dropdown\\survey\\questions\\answer\\list_dropdown\\rows\\option.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["if" => 12];
        static $filters = [];
        static $functions = ["processString" => 12, "flatString" => 13];

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                [],
                ['processString', 'flatString']
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
}

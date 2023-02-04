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

/* /survey/questions/answer/list_dropdown/answer.twig */
class __TwigTemplate_1c07b928829c43eabae716447ed2910a9c4753f29a3789a784ebf2a4f8c7eef9 extends \Twig\Template
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
        // line 15
        echo "
<!-- List Dropdown -->

<!-- answer-->
<div class=\"form-inline\">
    <div class=\"";
        // line 20
        echo $this->sandbox->ensureToStringAllowed(($context["coreClass"] ?? null));
        echo " form-group\">
        <select
                class=\"form-control list-question-select\"
                name=\"";
        // line 23
        echo $this->sandbox->ensureToStringAllowed(($context["name"] ?? null));
        echo "\"
                id=\"answer";
        // line 24
        echo $this->sandbox->ensureToStringAllowed(($context["name"] ?? null));
        echo "\"
                ";
        // line 25
        if (($context["dropdownSize"] ?? null)) {
            echo " size=";
            echo $this->sandbox->ensureToStringAllowed(($context["dropdownSize"] ?? null));
            echo " ";
        }
        // line 26
        echo "                aria-labelledby=\"ls-question-text-";
        echo $this->sandbox->ensureToStringAllowed(($context["basename"] ?? null));
        echo "\"
        >
                ";
        // line 29
        echo "                ";
        echo $this->sandbox->ensureToStringAllowed(($context["sOptions"] ?? null));
        echo "
        </select>
            ";
        // line 32
        echo "            ";
        echo $this->sandbox->ensureToStringAllowed(($context["sOther"] ?? null));
        echo "

        ";
        // line 35
        echo "        ";
        echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["C"] ?? null), "Html", []), "hiddenField", [0 => ("java" . $this->sandbox->ensureToStringAllowed(($context["name"] ?? null))), 1 => ($context["value"] ?? null), 2 => ["id" => ("java" . $this->sandbox->ensureToStringAllowed(        // line 36
($context["name"] ?? null))), "disabled" => "disabled"]], "method"));
        // line 39
        echo "
    </div>
</div>
<!-- end of answer  -->
";
    }

    public function getTemplateName()
    {
        return "/survey/questions/answer/list_dropdown/answer.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 39,  79 => 36,  77 => 35,  71 => 32,  65 => 29,  59 => 26,  53 => 25,  49 => 24,  45 => 23,  39 => 20,  32 => 15,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "/survey/questions/answer/list_dropdown/answer.twig", "C:\\xampp\\htdocs\\formularioReg\\application\\views\\survey\\questions\\answer\\list_dropdown\\answer.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["if" => 25];
        static $filters = [];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                [],
                []
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

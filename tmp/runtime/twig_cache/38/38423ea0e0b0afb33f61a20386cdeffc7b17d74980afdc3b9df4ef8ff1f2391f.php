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

/* /survey/questions/answer/numerical/answer.twig */
class __TwigTemplate_c776135f72e05b4b6576bcf35688ba70870a7495019deac8165191c1dc1fdf4e extends \Twig\Template
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
        // line 18
        echo "<!-- Numerical -->

<!-- answer -->
";
        // line 21
        if (($context["withColumn"] ?? null)) {
            // line 22
            echo "<div class='";
            echo $this->sandbox->ensureToStringAllowed(($context["coreClass"] ?? null));
            echo " row'>
    <div class=\"";
            // line 23
            echo $this->sandbox->ensureToStringAllowed(($context["extraclass"] ?? null));
            echo "\">
";
        } else {
            // line 25
            echo "<div class='";
            echo $this->sandbox->ensureToStringAllowed(($context["coreClass"] ?? null));
            echo " ";
            echo $this->sandbox->ensureToStringAllowed(($context["extraclass"] ?? null));
            echo "'>
";
        }
        // line 27
        echo "    ";
        if (((($context["prefix"] ?? null) != "") || (($context["suffix"] ?? null) != ""))) {
            // line 28
            echo "        <div class=\"ls-input-group\">
    ";
        }
        // line 29
        echo " 
    <!-- Prefix -->
    ";
        // line 31
        if ((($context["prefix"] ?? null) != "")) {
            // line 32
            echo "        <div class='ls-input-group-extra prefix-text prefix'>";
            echo LS_Twig_Extension::processString($this->sandbox->ensureToStringAllowed(($context["prefix"] ?? null)));
            echo "</div>
    ";
        }
        // line 33
        echo " 
    
    ";
        // line 36
        echo "    ";
        // line 37
        echo "    ";
        echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["C"] ?? null), "Html", []), "textField", [0 => ($context["id"] ?? null), 1 => ($context["fValue"] ?? null), 2 => ["id" => ("answer" . $this->sandbox->ensureToStringAllowed(        // line 38
($context["id"] ?? null))), "class" => ("form-control " . $this->sandbox->ensureToStringAllowed(        // line 39
($context["answertypeclass"] ?? null))), "title" => gT("Only numbers may be entered in this field."), "size" => ((        // line 41
($context["inputsize"] ?? null)) ? (($context["inputsize"] ?? null)) : (null)), "placeholder" => LS_Twig_Extension::flatString(LS_Twig_Extension::processString($this->sandbox->ensureToStringAllowed(        // line 42
($context["placeholder"] ?? null)), 1), 1), "maxlength" => ((        // line 43
($context["maxlength"] ?? null)) ? (($context["maxlength"] ?? null)) : (null)), "data-number" => 1, "data-integer" =>         // line 45
($context["integeronly"] ?? null), "aria-labelledby" => ("ls-question-text-" . $this->sandbox->ensureToStringAllowed(        // line 46
($context["basename"] ?? null)))]], "method"));
        // line 48
        echo "
    <!-- Suffix -->
    ";
        // line 50
        if ((($context["suffix"] ?? null) != "")) {
            // line 51
            echo "        <div class='ls-input-group-extra suffix-text suffix'>";
            echo LS_Twig_Extension::processString($this->sandbox->ensureToStringAllowed(($context["suffix"] ?? null)));
            echo "</div>
    ";
        }
        // line 52
        echo " 
    ";
        // line 53
        if (((($context["prefix"] ?? null) != "") || (($context["suffix"] ?? null) != ""))) {
            // line 54
            echo "        </div>
    ";
        }
        // line 55
        echo " 
";
        // line 56
        if (($context["withColumn"] ?? null)) {
            // line 57
            echo "    </div>
</div>
";
        } else {
            // line 60
            echo "</div>
";
        }
        // line 61
        echo " 
<!-- end of answer -->
";
    }

    public function getTemplateName()
    {
        return "/survey/questions/answer/numerical/answer.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 61,  123 => 60,  118 => 57,  116 => 56,  113 => 55,  109 => 54,  107 => 53,  104 => 52,  98 => 51,  96 => 50,  92 => 48,  90 => 46,  89 => 45,  88 => 43,  87 => 42,  86 => 41,  85 => 39,  84 => 38,  82 => 37,  80 => 36,  76 => 33,  70 => 32,  68 => 31,  64 => 29,  60 => 28,  57 => 27,  49 => 25,  44 => 23,  39 => 22,  37 => 21,  32 => 18,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "/survey/questions/answer/numerical/answer.twig", "C:\\xampp\\htdocs\\formularioReg\\application\\views\\survey\\questions\\answer\\numerical\\answer.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["if" => 21];
        static $filters = [];
        static $functions = ["processString" => 32, "gT" => 40, "flatString" => 42];

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                [],
                ['processString', 'gT', 'flatString']
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

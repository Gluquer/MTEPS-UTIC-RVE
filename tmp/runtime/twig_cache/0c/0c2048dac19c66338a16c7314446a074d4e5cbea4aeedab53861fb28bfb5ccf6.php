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

/* /survey/questions/answer/list_dropdown/rows/othertext.twig */
class __TwigTemplate_0a1c330ad0743e9af449245ac770b9a3c1ea064bd640aaa45921941b9b3541b6 extends \Twig\Template
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
        // line 11
        echo "<label for=\"othertext";
        echo $this->sandbox->ensureToStringAllowed(($context["name"] ?? null));
        echo "\" class=\"sr-only\">
    ";
        // line 12
        echo LS_Twig_Extension::processString($this->sandbox->ensureToStringAllowed(($context["label"] ?? null)));
        echo "
</label>
<div class=\"form-group text-item other-text-item\">
";
        // line 15
        echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["C"] ?? null), "Html", []), "textField", [0 => ($this->sandbox->ensureToStringAllowed(($context["name"] ?? null)) . "other"), 1 => ($context["value"] ?? null), 2 => ["id" => ("othertext" . $this->sandbox->ensureToStringAllowed(        // line 16
($context["name"] ?? null))), "class" => "form-control", "aria-labelledby" => (("answer" . $this->sandbox->ensureToStringAllowed(        // line 18
($context["name"] ?? null))) . "-oth-")]], "method"));
        // line 20
        echo "
</div>
<script>
if( \$(\"#answer";
        // line 23
        echo $this->sandbox->ensureToStringAllowed(($context["name"] ?? null));
        echo "\").val() != \"-oth-\" ){
    \$(\"#othertext";
        // line 24
        echo $this->sandbox->ensureToStringAllowed(($context["name"] ?? null));
        echo "\").hide();
}
\$(document).on(\"change\",\"#answer";
        // line 26
        echo $this->sandbox->ensureToStringAllowed(($context["name"] ?? null));
        echo "\", function(){
    if(\$(\"#answer";
        // line 27
        echo $this->sandbox->ensureToStringAllowed(($context["name"] ?? null));
        echo "\").val() != \"-oth-\"){
        \$(\"#othertext";
        // line 28
        echo $this->sandbox->ensureToStringAllowed(($context["name"] ?? null));
        echo "\").hide();
        \$(\"#othertext";
        // line 29
        echo $this->sandbox->ensureToStringAllowed(($context["name"] ?? null));
        echo "\").val(\"\").trigger(\"keyup\");
    }else{
        \$(\"#othertext";
        // line 31
        echo $this->sandbox->ensureToStringAllowed(($context["name"] ?? null));
        echo "\").show();
        \$(\"#othertext";
        // line 32
        echo $this->sandbox->ensureToStringAllowed(($context["name"] ?? null));
        echo "\").focus();
    }
});
</script>
<!-- end of othertext -->
";
    }

    public function getTemplateName()
    {
        return "/survey/questions/answer/list_dropdown/rows/othertext.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 32,  78 => 31,  73 => 29,  69 => 28,  65 => 27,  61 => 26,  56 => 24,  52 => 23,  47 => 20,  45 => 18,  44 => 16,  43 => 15,  37 => 12,  32 => 11,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "/survey/questions/answer/list_dropdown/rows/othertext.twig", "C:\\xampp\\htdocs\\formularioReg\\application\\views\\survey\\questions\\answer\\list_dropdown\\rows\\othertext.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = [];
        static $filters = [];
        static $functions = ["processString" => 12];

        try {
            $this->sandbox->checkSecurity(
                [],
                [],
                ['processString']
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

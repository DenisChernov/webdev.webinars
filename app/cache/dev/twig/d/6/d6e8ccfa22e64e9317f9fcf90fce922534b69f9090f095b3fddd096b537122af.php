<?php

/* SensioDistributionBundle::Configurator/steps.html.twig */
class __TwigTemplate_d6e8ccfa22e64e9317f9fcf90fce922534b69f9090f095b3fddd096b537122af extends Twig_Template
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
        $__internal_d9e5b789c04eab62c79d35ed223ce55e445f571b49371a8b7e1405c923a00239 = $this->env->getExtension("native_profiler");
        $__internal_d9e5b789c04eab62c79d35ed223ce55e445f571b49371a8b7e1405c923a00239->enter($__internal_d9e5b789c04eab62c79d35ed223ce55e445f571b49371a8b7e1405c923a00239_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SensioDistributionBundle::Configurator/steps.html.twig"));

        // line 1
        echo "<div class=\"symfony-block-steps\">
    ";
        // line 2
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["count"]) ? $context["count"] : $this->getContext($context, "count"))));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 3
            echo "
      ";
            // line 4
            if (($context["i"] == ((isset($context["index"]) ? $context["index"] : $this->getContext($context, "index")) + 1))) {
                // line 5
                echo "          <span class=\"selected\">Step ";
                echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                echo "</span>
      ";
            } else {
                // line 7
                echo "          <span>Step ";
                echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                echo "</span>
      ";
            }
            // line 9
            echo "
      ";
            // line 10
            if (($context["i"] != (isset($context["count"]) ? $context["count"] : $this->getContext($context, "count")))) {
                // line 11
                echo "        &gt;
      ";
            }
            // line 13
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "</div>
";
        
        $__internal_d9e5b789c04eab62c79d35ed223ce55e445f571b49371a8b7e1405c923a00239->leave($__internal_d9e5b789c04eab62c79d35ed223ce55e445f571b49371a8b7e1405c923a00239_prof);

    }

    public function getTemplateName()
    {
        return "SensioDistributionBundle::Configurator/steps.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 14,  55 => 13,  51 => 11,  49 => 10,  46 => 9,  40 => 7,  34 => 5,  32 => 4,  29 => 3,  25 => 2,  22 => 1,);
    }
}

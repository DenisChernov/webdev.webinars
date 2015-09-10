<?php

/* TwigBundle:Exception:traces.txt.twig */
class __TwigTemplate_c9b301505faf84367a86fc5879cd0362cc8169ef50b8fe37151cbcb361c158b1 extends Twig_Template
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
        $__internal_9eea54eead6ac30e23df37a08920042788bd3b205f2f68a69df523459dd4d534 = $this->env->getExtension("native_profiler");
        $__internal_9eea54eead6ac30e23df37a08920042788bd3b205f2f68a69df523459dd4d534->enter($__internal_9eea54eead6ac30e23df37a08920042788bd3b205f2f68a69df523459dd4d534_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.txt.twig"));

        // line 1
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()))) {
            // line 2
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
                // line 3
                $this->loadTemplate("TwigBundle:Exception:trace.txt.twig", "TwigBundle:Exception:traces.txt.twig", 3)->display(array("trace" => $context["trace"]));
                // line 4
                echo "
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        
        $__internal_9eea54eead6ac30e23df37a08920042788bd3b205f2f68a69df523459dd4d534->leave($__internal_9eea54eead6ac30e23df37a08920042788bd3b205f2f68a69df523459dd4d534_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:traces.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  28 => 3,  24 => 2,  22 => 1,);
    }
}

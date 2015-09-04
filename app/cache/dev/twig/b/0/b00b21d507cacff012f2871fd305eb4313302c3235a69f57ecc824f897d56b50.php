<?php

/* ChernovDATimeManagerBundle:Default:index.html.twig */
class __TwigTemplate_b00b21d507cacff012f2871fd305eb4313302c3235a69f57ecc824f897d56b50 extends Twig_Template
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
        $__internal_11800c96ff63a86b55c2f6bb9fb3b07ce8126ec3af7905de8ada28d0ba0d90d1 = $this->env->getExtension("native_profiler");
        $__internal_11800c96ff63a86b55c2f6bb9fb3b07ce8126ec3af7905de8ada28d0ba0d90d1->enter($__internal_11800c96ff63a86b55c2f6bb9fb3b07ce8126ec3af7905de8ada28d0ba0d90d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ChernovDATimeManagerBundle:Default:index.html.twig"));

        // line 1
        echo "Hello ";
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        echo "!
";
        
        $__internal_11800c96ff63a86b55c2f6bb9fb3b07ce8126ec3af7905de8ada28d0ba0d90d1->leave($__internal_11800c96ff63a86b55c2f6bb9fb3b07ce8126ec3af7905de8ada28d0ba0d90d1_prof);

    }

    public function getTemplateName()
    {
        return "ChernovDATimeManagerBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}

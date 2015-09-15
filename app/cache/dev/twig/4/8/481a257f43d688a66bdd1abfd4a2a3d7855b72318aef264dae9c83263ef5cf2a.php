<?php

/* webinars/block_header.html */
class __TwigTemplate_481a257f43d688a66bdd1abfd4a2a3d7855b72318aef264dae9c83263ef5cf2a extends Twig_Template
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
        $__internal_14ff140c8955c739a2ae7ff336f321358b165c08a10008a668984a25a29dc69d = $this->env->getExtension("native_profiler");
        $__internal_14ff140c8955c739a2ae7ff336f321358b165c08a10008a668984a25a29dc69d->enter($__internal_14ff140c8955c739a2ae7ff336f321358b165c08a10008a668984a25a29dc69d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "webinars/block_header.html"));

        // line 1
        echo "<div class=\"block_header\">
    <span class=\"page_header\" style=\"color: ";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["color"]) ? $context["color"] : $this->getContext($context, "color")), "html", null, true);
        echo ";\">";
        echo twig_escape_filter($this->env, (isset($context["header"]) ? $context["header"] : $this->getContext($context, "header")), "html", null, true);
        echo "</span>
</div>";
        
        $__internal_14ff140c8955c739a2ae7ff336f321358b165c08a10008a668984a25a29dc69d->leave($__internal_14ff140c8955c739a2ae7ff336f321358b165c08a10008a668984a25a29dc69d_prof);

    }

    public function getTemplateName()
    {
        return "webinars/block_header.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}

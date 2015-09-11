<?php

/* webinars/page_editor.html.twig */
class __TwigTemplate_9bf74dc6762433c75daa6188c834328b0d537de227f0d4451d253a1c25997fd4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("base.html.twig", "webinars/page_editor.html.twig", 3);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a49e4caceee17b077571cc98ee2841e14b1b51e6516314de040832e1fdc5ffca = $this->env->getExtension("native_profiler");
        $__internal_a49e4caceee17b077571cc98ee2841e14b1b51e6516314de040832e1fdc5ffca->enter($__internal_a49e4caceee17b077571cc98ee2841e14b1b51e6516314de040832e1fdc5ffca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "webinars/page_editor.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a49e4caceee17b077571cc98ee2841e14b1b51e6516314de040832e1fdc5ffca->leave($__internal_a49e4caceee17b077571cc98ee2841e14b1b51e6516314de040832e1fdc5ffca_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_f0eae8b5597c2ce9bddbee4549ea2cf2aa9c2086faad7dd679caebd7191f7251 = $this->env->getExtension("native_profiler");
        $__internal_f0eae8b5597c2ce9bddbee4549ea2cf2aa9c2086faad7dd679caebd7191f7251->enter($__internal_f0eae8b5597c2ce9bddbee4549ea2cf2aa9c2086faad7dd679caebd7191f7251_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    ";
        $this->loadTemplate("webinars/header_mnu.html", "webinars/page_editor.html.twig", 6)->display($context);
        
        $__internal_f0eae8b5597c2ce9bddbee4549ea2cf2aa9c2086faad7dd679caebd7191f7251->leave($__internal_f0eae8b5597c2ce9bddbee4549ea2cf2aa9c2086faad7dd679caebd7191f7251_prof);

    }

    public function getTemplateName()
    {
        return "webinars/page_editor.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 6,  34 => 5,  11 => 3,);
    }
}

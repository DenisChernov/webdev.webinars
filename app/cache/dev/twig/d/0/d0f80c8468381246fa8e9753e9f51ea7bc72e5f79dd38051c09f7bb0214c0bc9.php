<?php

/* webinars/background_vide.html */
class __TwigTemplate_d0f80c8468381246fa8e9753e9f51ea7bc72e5f79dd38051c09f7bb0214c0bc9 extends Twig_Template
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
        $__internal_a4588ad07cda0c9519a3ffb98fa09343069164542e058bc5d0d557abea1cb4ab = $this->env->getExtension("native_profiler");
        $__internal_a4588ad07cda0c9519a3ffb98fa09343069164542e058bc5d0d557abea1cb4ab->enter($__internal_a4588ad07cda0c9519a3ffb98fa09343069164542e058bc5d0d557abea1cb4ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "webinars/background_vide.html"));

        // line 1
        echo "<video autoplay loop muted class=\"bgvideo\" id=\"bgvideo\">
    <source src=\"/video/video.mp4\" type=\"video/mp4\"></source>
</video>";
        
        $__internal_a4588ad07cda0c9519a3ffb98fa09343069164542e058bc5d0d557abea1cb4ab->leave($__internal_a4588ad07cda0c9519a3ffb98fa09343069164542e058bc5d0d557abea1cb4ab_prof);

    }

    public function getTemplateName()
    {
        return "webinars/background_vide.html";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}

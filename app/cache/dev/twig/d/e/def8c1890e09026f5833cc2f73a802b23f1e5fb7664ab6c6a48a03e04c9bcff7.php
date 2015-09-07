<?php

/* webinars/background_vide.html */
class __TwigTemplate_def8c1890e09026f5833cc2f73a802b23f1e5fb7664ab6c6a48a03e04c9bcff7 extends Twig_Template
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
        $__internal_3aa233856e799a6ff8cfd87cc517013b7c68d500bd5e2fd75e4c128e27c6467d = $this->env->getExtension("native_profiler");
        $__internal_3aa233856e799a6ff8cfd87cc517013b7c68d500bd5e2fd75e4c128e27c6467d->enter($__internal_3aa233856e799a6ff8cfd87cc517013b7c68d500bd5e2fd75e4c128e27c6467d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "webinars/background_vide.html"));

        // line 1
        echo "<video autoplay loop muted class=\"bgvideo\" id=\"bgvideo\">
    <source src=\"/video/video.mp4\" type=\"video/mp4\"></source>
</video>";
        
        $__internal_3aa233856e799a6ff8cfd87cc517013b7c68d500bd5e2fd75e4c128e27c6467d->leave($__internal_3aa233856e799a6ff8cfd87cc517013b7c68d500bd5e2fd75e4c128e27c6467d_prof);

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

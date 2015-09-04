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
        $__internal_b04e1be138c5a6d99dc436871aeae7643564ed14bb7673fa20f6a78a57a36f79 = $this->env->getExtension("native_profiler");
        $__internal_b04e1be138c5a6d99dc436871aeae7643564ed14bb7673fa20f6a78a57a36f79->enter($__internal_b04e1be138c5a6d99dc436871aeae7643564ed14bb7673fa20f6a78a57a36f79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "webinars/background_vide.html"));

        // line 1
        echo "<video autoplay loop muted class=\"bgvideo\" id=\"bgvideo\">
    <source src=\"video/video.mp4\" type=\"video/mp4\"></source>
</video>";
        
        $__internal_b04e1be138c5a6d99dc436871aeae7643564ed14bb7673fa20f6a78a57a36f79->leave($__internal_b04e1be138c5a6d99dc436871aeae7643564ed14bb7673fa20f6a78a57a36f79_prof);

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

<?php

/* webinars/create_webinar.html.twig */
class __TwigTemplate_963e660bb22fb77b641230ff800c646b188700bcd6a5e985bc06da04d5c33a3e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("base.html.twig", "webinars/create_webinar.html.twig", 3);
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
        $__internal_40131200f7122993b250efaa71905318c9508a23e52146ee624ec12a887e0dd6 = $this->env->getExtension("native_profiler");
        $__internal_40131200f7122993b250efaa71905318c9508a23e52146ee624ec12a887e0dd6->enter($__internal_40131200f7122993b250efaa71905318c9508a23e52146ee624ec12a887e0dd6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "webinars/create_webinar.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_40131200f7122993b250efaa71905318c9508a23e52146ee624ec12a887e0dd6->leave($__internal_40131200f7122993b250efaa71905318c9508a23e52146ee624ec12a887e0dd6_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_2227dd174c8fe301c0d485bc09c53ab4b4d563143d5190cf0a241ecc39a4a69e = $this->env->getExtension("native_profiler");
        $__internal_2227dd174c8fe301c0d485bc09c53ab4b4d563143d5190cf0a241ecc39a4a69e->enter($__internal_2227dd174c8fe301c0d485bc09c53ab4b4d563143d5190cf0a241ecc39a4a69e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    ";
        $this->loadTemplate("webinars/header_mnu.html", "webinars/create_webinar.html.twig", 6)->display($context);
        // line 7
        echo "

";
        
        $__internal_2227dd174c8fe301c0d485bc09c53ab4b4d563143d5190cf0a241ecc39a4a69e->leave($__internal_2227dd174c8fe301c0d485bc09c53ab4b4d563143d5190cf0a241ecc39a4a69e_prof);

    }

    public function getTemplateName()
    {
        return "webinars/create_webinar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 7,  40 => 6,  34 => 5,  11 => 3,);
    }
}

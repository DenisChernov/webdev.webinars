<?php

/* webinars/webinars.html.twig */
class __TwigTemplate_25889b653adcf463d2a87201f5c88ee2e187faf4dd015f30bdbff612a2a830e3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("base.html.twig", "webinars/webinars.html.twig", 3);
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
        $__internal_07534feaabfc2c9c44bed544a0f608eba40c55b8cab7e8e54964c7514871e917 = $this->env->getExtension("native_profiler");
        $__internal_07534feaabfc2c9c44bed544a0f608eba40c55b8cab7e8e54964c7514871e917->enter($__internal_07534feaabfc2c9c44bed544a0f608eba40c55b8cab7e8e54964c7514871e917_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "webinars/webinars.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_07534feaabfc2c9c44bed544a0f608eba40c55b8cab7e8e54964c7514871e917->leave($__internal_07534feaabfc2c9c44bed544a0f608eba40c55b8cab7e8e54964c7514871e917_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_8971dc75e50b3d302286138eec1e271dd8987d2e2a9b145c81048d49f9d50b6f = $this->env->getExtension("native_profiler");
        $__internal_8971dc75e50b3d302286138eec1e271dd8987d2e2a9b145c81048d49f9d50b6f->enter($__internal_8971dc75e50b3d302286138eec1e271dd8987d2e2a9b145c81048d49f9d50b6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
";
        // line 9
        echo "
";
        // line 11
        echo "    ";
        $this->loadTemplate("webinars/header_mnu.html", "webinars/webinars.html.twig", 11)->display($context);
        
        $__internal_8971dc75e50b3d302286138eec1e271dd8987d2e2a9b145c81048d49f9d50b6f->leave($__internal_8971dc75e50b3d302286138eec1e271dd8987d2e2a9b145c81048d49f9d50b6f_prof);

    }

    public function getTemplateName()
    {
        return "webinars/webinars.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 11,  43 => 9,  40 => 6,  34 => 5,  11 => 3,);
    }
}

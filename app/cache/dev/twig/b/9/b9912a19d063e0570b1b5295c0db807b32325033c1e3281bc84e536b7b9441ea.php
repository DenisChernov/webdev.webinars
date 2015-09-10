<?php

/* webinars/create_webinar.html.twig */
class __TwigTemplate_b9912a19d063e0570b1b5295c0db807b32325033c1e3281bc84e536b7b9441ea extends Twig_Template
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
        $__internal_2c06ecf146d7691b2bf9df8f5b9a6efc53e17e7817bdb1a6e9dfea0f4c0f2a8d = $this->env->getExtension("native_profiler");
        $__internal_2c06ecf146d7691b2bf9df8f5b9a6efc53e17e7817bdb1a6e9dfea0f4c0f2a8d->enter($__internal_2c06ecf146d7691b2bf9df8f5b9a6efc53e17e7817bdb1a6e9dfea0f4c0f2a8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "webinars/create_webinar.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2c06ecf146d7691b2bf9df8f5b9a6efc53e17e7817bdb1a6e9dfea0f4c0f2a8d->leave($__internal_2c06ecf146d7691b2bf9df8f5b9a6efc53e17e7817bdb1a6e9dfea0f4c0f2a8d_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_a9de7150aae2bd22199b5d4ecde6478268d56518196f75d3c25c2aa54181a114 = $this->env->getExtension("native_profiler");
        $__internal_a9de7150aae2bd22199b5d4ecde6478268d56518196f75d3c25c2aa54181a114->enter($__internal_a9de7150aae2bd22199b5d4ecde6478268d56518196f75d3c25c2aa54181a114_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    ";
        $this->loadTemplate("webinars/header_mnu.html", "webinars/create_webinar.html.twig", 6)->display($context);
        // line 7
        echo "
";
        
        $__internal_a9de7150aae2bd22199b5d4ecde6478268d56518196f75d3c25c2aa54181a114->leave($__internal_a9de7150aae2bd22199b5d4ecde6478268d56518196f75d3c25c2aa54181a114_prof);

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

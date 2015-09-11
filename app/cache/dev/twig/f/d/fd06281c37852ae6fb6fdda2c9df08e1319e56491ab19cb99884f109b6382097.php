<?php

/* webinars/user_profile.html.twig */
class __TwigTemplate_fd06281c37852ae6fb6fdda2c9df08e1319e56491ab19cb99884f109b6382097 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("base.html.twig", "webinars/user_profile.html.twig", 3);
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
        $__internal_74537ee770e9993598a93d9c185ad1eab9d1339cd0de1ea35c3f69f745a6eb26 = $this->env->getExtension("native_profiler");
        $__internal_74537ee770e9993598a93d9c185ad1eab9d1339cd0de1ea35c3f69f745a6eb26->enter($__internal_74537ee770e9993598a93d9c185ad1eab9d1339cd0de1ea35c3f69f745a6eb26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "webinars/user_profile.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_74537ee770e9993598a93d9c185ad1eab9d1339cd0de1ea35c3f69f745a6eb26->leave($__internal_74537ee770e9993598a93d9c185ad1eab9d1339cd0de1ea35c3f69f745a6eb26_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_aa0b14b5bf4c3ddd054a5c202162cc9e33b2643673a4c33d1ba81b2c4cf0011f = $this->env->getExtension("native_profiler");
        $__internal_aa0b14b5bf4c3ddd054a5c202162cc9e33b2643673a4c33d1ba81b2c4cf0011f->enter($__internal_aa0b14b5bf4c3ddd054a5c202162cc9e33b2643673a4c33d1ba81b2c4cf0011f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    ";
        $this->loadTemplate("webinars/header_mnu.html", "webinars/user_profile.html.twig", 6)->display($context);
        
        $__internal_aa0b14b5bf4c3ddd054a5c202162cc9e33b2643673a4c33d1ba81b2c4cf0011f->leave($__internal_aa0b14b5bf4c3ddd054a5c202162cc9e33b2643673a4c33d1ba81b2c4cf0011f_prof);

    }

    public function getTemplateName()
    {
        return "webinars/user_profile.html.twig";
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

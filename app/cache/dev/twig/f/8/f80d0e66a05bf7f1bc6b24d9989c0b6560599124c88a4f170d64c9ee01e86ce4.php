<?php

/* webinars/page_admin.html.twig */
class __TwigTemplate_f80d0e66a05bf7f1bc6b24d9989c0b6560599124c88a4f170d64c9ee01e86ce4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("base.html.twig", "webinars/page_admin.html.twig", 3);
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
        $__internal_76c278f339050d372fccf8eb3618ccfabefa451a947a24de641629aa407ed941 = $this->env->getExtension("native_profiler");
        $__internal_76c278f339050d372fccf8eb3618ccfabefa451a947a24de641629aa407ed941->enter($__internal_76c278f339050d372fccf8eb3618ccfabefa451a947a24de641629aa407ed941_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "webinars/page_admin.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_76c278f339050d372fccf8eb3618ccfabefa451a947a24de641629aa407ed941->leave($__internal_76c278f339050d372fccf8eb3618ccfabefa451a947a24de641629aa407ed941_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_c2925eccdb10756189890db8b7b8cf3f29bc2c633645b5db5046f7200e8ebc3d = $this->env->getExtension("native_profiler");
        $__internal_c2925eccdb10756189890db8b7b8cf3f29bc2c633645b5db5046f7200e8ebc3d->enter($__internal_c2925eccdb10756189890db8b7b8cf3f29bc2c633645b5db5046f7200e8ebc3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    ";
        $this->loadTemplate("webinars/header_mnu.html", "webinars/page_admin.html.twig", 6)->display($context);
        // line 7
        echo "    ";
        // line 8
        echo "    ";
        $this->loadTemplate("webinars/form_newwebinar.html", "webinars/page_admin.html.twig", 8)->display($context);
        // line 9
        echo "    ";
        // line 10
        echo "
    ";
        // line 11
        $this->loadTemplate("webinars/admin.html", "webinars/page_admin.html.twig", 11)->display($context);
        
        $__internal_c2925eccdb10756189890db8b7b8cf3f29bc2c633645b5db5046f7200e8ebc3d->leave($__internal_c2925eccdb10756189890db8b7b8cf3f29bc2c633645b5db5046f7200e8ebc3d_prof);

    }

    public function getTemplateName()
    {
        return "webinars/page_admin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 11,  50 => 10,  48 => 9,  45 => 8,  43 => 7,  40 => 6,  34 => 5,  11 => 3,);
    }
}

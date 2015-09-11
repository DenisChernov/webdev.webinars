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
        $__internal_8ebcffc88cfcd018238434f56bd259b9845ee1ce37d29e45ee98e10f2b773567 = $this->env->getExtension("native_profiler");
        $__internal_8ebcffc88cfcd018238434f56bd259b9845ee1ce37d29e45ee98e10f2b773567->enter($__internal_8ebcffc88cfcd018238434f56bd259b9845ee1ce37d29e45ee98e10f2b773567_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "webinars/page_admin.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8ebcffc88cfcd018238434f56bd259b9845ee1ce37d29e45ee98e10f2b773567->leave($__internal_8ebcffc88cfcd018238434f56bd259b9845ee1ce37d29e45ee98e10f2b773567_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_67c1562b12094a49f73fbb2ca3ac5be0195818a28f1dc21dac64df8761b1399a = $this->env->getExtension("native_profiler");
        $__internal_67c1562b12094a49f73fbb2ca3ac5be0195818a28f1dc21dac64df8761b1399a->enter($__internal_67c1562b12094a49f73fbb2ca3ac5be0195818a28f1dc21dac64df8761b1399a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    ";
        $this->loadTemplate("webinars/header_mnu.html", "webinars/page_admin.html.twig", 6)->display($context);
        // line 7
        echo "
    ";
        // line 8
        $this->loadTemplate("webinars/admin.html", "webinars/page_admin.html.twig", 8)->display($context);
        
        $__internal_67c1562b12094a49f73fbb2ca3ac5be0195818a28f1dc21dac64df8761b1399a->leave($__internal_67c1562b12094a49f73fbb2ca3ac5be0195818a28f1dc21dac64df8761b1399a_prof);

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
        return array (  46 => 8,  43 => 7,  40 => 6,  34 => 5,  11 => 3,);
    }
}

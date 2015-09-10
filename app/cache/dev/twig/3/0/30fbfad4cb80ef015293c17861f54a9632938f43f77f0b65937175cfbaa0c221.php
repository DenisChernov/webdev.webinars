<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_30fbfad4cb80ef015293c17861f54a9632938f43f77f0b65937175cfbaa0c221 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_833c3e0b5b6647427dfd3860aa7818fdebbfa2bcb42929e52a5f1fc43b2914b6 = $this->env->getExtension("native_profiler");
        $__internal_833c3e0b5b6647427dfd3860aa7818fdebbfa2bcb42929e52a5f1fc43b2914b6->enter($__internal_833c3e0b5b6647427dfd3860aa7818fdebbfa2bcb42929e52a5f1fc43b2914b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_833c3e0b5b6647427dfd3860aa7818fdebbfa2bcb42929e52a5f1fc43b2914b6->leave($__internal_833c3e0b5b6647427dfd3860aa7818fdebbfa2bcb42929e52a5f1fc43b2914b6_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_746bec6cb8e6bf444f55b548e9cd0299bea6ec21280ba6b1e09d60b30cd08d12 = $this->env->getExtension("native_profiler");
        $__internal_746bec6cb8e6bf444f55b548e9cd0299bea6ec21280ba6b1e09d60b30cd08d12->enter($__internal_746bec6cb8e6bf444f55b548e9cd0299bea6ec21280ba6b1e09d60b30cd08d12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_746bec6cb8e6bf444f55b548e9cd0299bea6ec21280ba6b1e09d60b30cd08d12->leave($__internal_746bec6cb8e6bf444f55b548e9cd0299bea6ec21280ba6b1e09d60b30cd08d12_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_9034bf0c07dc4e03f30684ae281dde5d7bbccd3b9f0c15991aafb61ad0832d1f = $this->env->getExtension("native_profiler");
        $__internal_9034bf0c07dc4e03f30684ae281dde5d7bbccd3b9f0c15991aafb61ad0832d1f->enter($__internal_9034bf0c07dc4e03f30684ae281dde5d7bbccd3b9f0c15991aafb61ad0832d1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_9034bf0c07dc4e03f30684ae281dde5d7bbccd3b9f0c15991aafb61ad0832d1f->leave($__internal_9034bf0c07dc4e03f30684ae281dde5d7bbccd3b9f0c15991aafb61ad0832d1f_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_9f47a430f5cc1b83e3190f692d138218971a459b102cbff65314072c8bcbc388 = $this->env->getExtension("native_profiler");
        $__internal_9f47a430f5cc1b83e3190f692d138218971a459b102cbff65314072c8bcbc388->enter($__internal_9f47a430f5cc1b83e3190f692d138218971a459b102cbff65314072c8bcbc388_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_9f47a430f5cc1b83e3190f692d138218971a459b102cbff65314072c8bcbc388->leave($__internal_9f47a430f5cc1b83e3190f692d138218971a459b102cbff65314072c8bcbc388_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}

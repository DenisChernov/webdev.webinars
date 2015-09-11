<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_92adb170012d2b6562e02fbc8d7a3fc4e150d74b355c78d523f4e4e28a773681 extends Twig_Template
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
        $__internal_cdb3e5a157af924926799669ad3f61865ea4ffdb1ef4d715c984b56f7ba31fd1 = $this->env->getExtension("native_profiler");
        $__internal_cdb3e5a157af924926799669ad3f61865ea4ffdb1ef4d715c984b56f7ba31fd1->enter($__internal_cdb3e5a157af924926799669ad3f61865ea4ffdb1ef4d715c984b56f7ba31fd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cdb3e5a157af924926799669ad3f61865ea4ffdb1ef4d715c984b56f7ba31fd1->leave($__internal_cdb3e5a157af924926799669ad3f61865ea4ffdb1ef4d715c984b56f7ba31fd1_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_f325b710f1da03762bad54ce20a7ad624f4c976d0ae69e93cb852d2a4edb969f = $this->env->getExtension("native_profiler");
        $__internal_f325b710f1da03762bad54ce20a7ad624f4c976d0ae69e93cb852d2a4edb969f->enter($__internal_f325b710f1da03762bad54ce20a7ad624f4c976d0ae69e93cb852d2a4edb969f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_f325b710f1da03762bad54ce20a7ad624f4c976d0ae69e93cb852d2a4edb969f->leave($__internal_f325b710f1da03762bad54ce20a7ad624f4c976d0ae69e93cb852d2a4edb969f_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_29477fc46b591395c87a92e51c012baf8905ff5254e509263363a84479d89426 = $this->env->getExtension("native_profiler");
        $__internal_29477fc46b591395c87a92e51c012baf8905ff5254e509263363a84479d89426->enter($__internal_29477fc46b591395c87a92e51c012baf8905ff5254e509263363a84479d89426_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_29477fc46b591395c87a92e51c012baf8905ff5254e509263363a84479d89426->leave($__internal_29477fc46b591395c87a92e51c012baf8905ff5254e509263363a84479d89426_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_de78ff0d38366452a7d0584627872e8f5913e3e5c8c400246c00ae864cd29370 = $this->env->getExtension("native_profiler");
        $__internal_de78ff0d38366452a7d0584627872e8f5913e3e5c8c400246c00ae864cd29370->enter($__internal_de78ff0d38366452a7d0584627872e8f5913e3e5c8c400246c00ae864cd29370_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_de78ff0d38366452a7d0584627872e8f5913e3e5c8c400246c00ae864cd29370->leave($__internal_de78ff0d38366452a7d0584627872e8f5913e3e5c8c400246c00ae864cd29370_prof);

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

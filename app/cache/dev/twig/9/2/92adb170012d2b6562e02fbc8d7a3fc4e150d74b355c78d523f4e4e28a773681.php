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
        $__internal_2a054529f289cffc8cb88e849e773a2dd652ac032b23e9204975b1989e97becf = $this->env->getExtension("native_profiler");
        $__internal_2a054529f289cffc8cb88e849e773a2dd652ac032b23e9204975b1989e97becf->enter($__internal_2a054529f289cffc8cb88e849e773a2dd652ac032b23e9204975b1989e97becf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2a054529f289cffc8cb88e849e773a2dd652ac032b23e9204975b1989e97becf->leave($__internal_2a054529f289cffc8cb88e849e773a2dd652ac032b23e9204975b1989e97becf_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_f41402b135a472a8ef2a796718218aef9d632c02d6d025c8adcc77d6e9a62cca = $this->env->getExtension("native_profiler");
        $__internal_f41402b135a472a8ef2a796718218aef9d632c02d6d025c8adcc77d6e9a62cca->enter($__internal_f41402b135a472a8ef2a796718218aef9d632c02d6d025c8adcc77d6e9a62cca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_f41402b135a472a8ef2a796718218aef9d632c02d6d025c8adcc77d6e9a62cca->leave($__internal_f41402b135a472a8ef2a796718218aef9d632c02d6d025c8adcc77d6e9a62cca_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_3cbaf50e63b93a92da9ea2851640ee1771b595d9767b698bb4131d2c9b41a999 = $this->env->getExtension("native_profiler");
        $__internal_3cbaf50e63b93a92da9ea2851640ee1771b595d9767b698bb4131d2c9b41a999->enter($__internal_3cbaf50e63b93a92da9ea2851640ee1771b595d9767b698bb4131d2c9b41a999_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_3cbaf50e63b93a92da9ea2851640ee1771b595d9767b698bb4131d2c9b41a999->leave($__internal_3cbaf50e63b93a92da9ea2851640ee1771b595d9767b698bb4131d2c9b41a999_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_19616f474adcd216225e1791ac21c6fe4385d63ea973575ac3955b9bec8e2369 = $this->env->getExtension("native_profiler");
        $__internal_19616f474adcd216225e1791ac21c6fe4385d63ea973575ac3955b9bec8e2369->enter($__internal_19616f474adcd216225e1791ac21c6fe4385d63ea973575ac3955b9bec8e2369_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_19616f474adcd216225e1791ac21c6fe4385d63ea973575ac3955b9bec8e2369->leave($__internal_19616f474adcd216225e1791ac21c6fe4385d63ea973575ac3955b9bec8e2369_prof);

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

<?php

/* base.html.twig */
class __TwigTemplate_b29daac9105d4cf172a4cdd39dcff02c60206c3661342de1e087e67563a887ee extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3140e3472a5c23ea05e1e6ec81a740a287b16ad517f7245c9f6fbe0c09502a1d = $this->env->getExtension("native_profiler");
        $__internal_3140e3472a5c23ea05e1e6ec81a740a287b16ad517f7245c9f6fbe0c09502a1d->enter($__internal_3140e3472a5c23ea05e1e6ec81a740a287b16ad517f7245c9f6fbe0c09502a1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"ru\">
<head>
    <meta charset=\"UTF-8\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    ";
        // line 7
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 8
        echo "
    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    <link href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("/css/bootstrap.min.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
    <link href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("/css/my.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
</head>
<body>

";
        // line 15
        $this->displayBlock('body', $context, $blocks);
        // line 18
        $this->displayBlock('javascripts', $context, $blocks);
        // line 26
        echo "</body>
</html>
";
        
        $__internal_3140e3472a5c23ea05e1e6ec81a740a287b16ad517f7245c9f6fbe0c09502a1d->leave($__internal_3140e3472a5c23ea05e1e6ec81a740a287b16ad517f7245c9f6fbe0c09502a1d_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_d394c0ea36855743fa5e2b408bb5f182b55109c315e06bf797b625bce2d0d153 = $this->env->getExtension("native_profiler");
        $__internal_d394c0ea36855743fa5e2b408bb5f182b55109c315e06bf797b625bce2d0d153->enter($__internal_d394c0ea36855743fa5e2b408bb5f182b55109c315e06bf797b625bce2d0d153_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Площадка семинаров IT-Murman";
        
        $__internal_d394c0ea36855743fa5e2b408bb5f182b55109c315e06bf797b625bce2d0d153->leave($__internal_d394c0ea36855743fa5e2b408bb5f182b55109c315e06bf797b625bce2d0d153_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_516e4f4d1fb057d53ba49f78f45a4a0b0852cff59bdfdd2588a9bbc636dbfae5 = $this->env->getExtension("native_profiler");
        $__internal_516e4f4d1fb057d53ba49f78f45a4a0b0852cff59bdfdd2588a9bbc636dbfae5->enter($__internal_516e4f4d1fb057d53ba49f78f45a4a0b0852cff59bdfdd2588a9bbc636dbfae5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_516e4f4d1fb057d53ba49f78f45a4a0b0852cff59bdfdd2588a9bbc636dbfae5->leave($__internal_516e4f4d1fb057d53ba49f78f45a4a0b0852cff59bdfdd2588a9bbc636dbfae5_prof);

    }

    // line 15
    public function block_body($context, array $blocks = array())
    {
        $__internal_11be76305db0246f0de62ae4b0fc48e6e0b069771501c63779496e88177fb13f = $this->env->getExtension("native_profiler");
        $__internal_11be76305db0246f0de62ae4b0fc48e6e0b069771501c63779496e88177fb13f->enter($__internal_11be76305db0246f0de62ae4b0fc48e6e0b069771501c63779496e88177fb13f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 16
        echo "
";
        
        $__internal_11be76305db0246f0de62ae4b0fc48e6e0b069771501c63779496e88177fb13f->leave($__internal_11be76305db0246f0de62ae4b0fc48e6e0b069771501c63779496e88177fb13f_prof);

    }

    // line 18
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_5307182eb6a141de64f307ab5a4abca548b955f48dc4a125831711ca213323b2 = $this->env->getExtension("native_profiler");
        $__internal_5307182eb6a141de64f307ab5a4abca548b955f48dc4a125831711ca213323b2->enter($__internal_5307182eb6a141de64f307ab5a4abca548b955f48dc4a125831711ca213323b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 19
        echo "
    <script src=\"http://code.jquery.com/jquery-latest.js\"></script>
    <script src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("/js/bootstrap.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("/js/my.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("/js/bootstrap.file-input.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>

";
        
        $__internal_5307182eb6a141de64f307ab5a4abca548b955f48dc4a125831711ca213323b2->leave($__internal_5307182eb6a141de64f307ab5a4abca548b955f48dc4a125831711ca213323b2_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 23,  121 => 22,  117 => 21,  113 => 19,  107 => 18,  99 => 16,  93 => 15,  82 => 7,  70 => 6,  61 => 26,  59 => 18,  57 => 15,  50 => 11,  46 => 10,  42 => 9,  39 => 8,  37 => 7,  33 => 6,  26 => 1,);
    }
}

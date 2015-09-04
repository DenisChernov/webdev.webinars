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
        $__internal_089f6553db2fcd2a675757eef2592c9201f776b56d62ae23a5ae91cc9f35f7c5 = $this->env->getExtension("native_profiler");
        $__internal_089f6553db2fcd2a675757eef2592c9201f776b56d62ae23a5ae91cc9f35f7c5->enter($__internal_089f6553db2fcd2a675757eef2592c9201f776b56d62ae23a5ae91cc9f35f7c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"ru\">
<head>
    <meta charset=\"UTF-8\" />
    <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    <link href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("/css/bootstrap.min.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
    <link href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("/css/my.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
</head>
<body>

";
        // line 13
        $this->displayBlock('body', $context, $blocks);
        // line 16
        $this->displayBlock('javascripts', $context, $blocks);
        // line 22
        echo "</body>
</html>
";
        
        $__internal_089f6553db2fcd2a675757eef2592c9201f776b56d62ae23a5ae91cc9f35f7c5->leave($__internal_089f6553db2fcd2a675757eef2592c9201f776b56d62ae23a5ae91cc9f35f7c5_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_170d05d5110a94a3d59ac3084e6566d586851cc3bbe416b65f1a1a6d5de2960a = $this->env->getExtension("native_profiler");
        $__internal_170d05d5110a94a3d59ac3084e6566d586851cc3bbe416b65f1a1a6d5de2960a->enter($__internal_170d05d5110a94a3d59ac3084e6566d586851cc3bbe416b65f1a1a6d5de2960a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Площадка семинаров IT-Murman";
        
        $__internal_170d05d5110a94a3d59ac3084e6566d586851cc3bbe416b65f1a1a6d5de2960a->leave($__internal_170d05d5110a94a3d59ac3084e6566d586851cc3bbe416b65f1a1a6d5de2960a_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_47be0ba470a664528bd7b0da847fe84aa9d6d8adc4a68429a7db37a61c9b92f0 = $this->env->getExtension("native_profiler");
        $__internal_47be0ba470a664528bd7b0da847fe84aa9d6d8adc4a68429a7db37a61c9b92f0->enter($__internal_47be0ba470a664528bd7b0da847fe84aa9d6d8adc4a68429a7db37a61c9b92f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_47be0ba470a664528bd7b0da847fe84aa9d6d8adc4a68429a7db37a61c9b92f0->leave($__internal_47be0ba470a664528bd7b0da847fe84aa9d6d8adc4a68429a7db37a61c9b92f0_prof);

    }

    // line 13
    public function block_body($context, array $blocks = array())
    {
        $__internal_c4673c1581c489092520265b2e59a9b3bdf361916924722d849ecd752dcb6696 = $this->env->getExtension("native_profiler");
        $__internal_c4673c1581c489092520265b2e59a9b3bdf361916924722d849ecd752dcb6696->enter($__internal_c4673c1581c489092520265b2e59a9b3bdf361916924722d849ecd752dcb6696_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 14
        echo "
";
        
        $__internal_c4673c1581c489092520265b2e59a9b3bdf361916924722d849ecd752dcb6696->leave($__internal_c4673c1581c489092520265b2e59a9b3bdf361916924722d849ecd752dcb6696_prof);

    }

    // line 16
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_af4b862359a2bb2eb8e2f24044b9765970ea175a6bc75b87ca5b268ca5dc0054 = $this->env->getExtension("native_profiler");
        $__internal_af4b862359a2bb2eb8e2f24044b9765970ea175a6bc75b87ca5b268ca5dc0054->enter($__internal_af4b862359a2bb2eb8e2f24044b9765970ea175a6bc75b87ca5b268ca5dc0054_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 17
        echo "
    <script src=\"http://code.jquery.com/jquery-latest.js\"></script>
    <script src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("/js/bootstrap.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("/js/my.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
";
        
        $__internal_af4b862359a2bb2eb8e2f24044b9765970ea175a6bc75b87ca5b268ca5dc0054->leave($__internal_af4b862359a2bb2eb8e2f24044b9765970ea175a6bc75b87ca5b268ca5dc0054_prof);

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
        return array (  118 => 20,  114 => 19,  110 => 17,  104 => 16,  96 => 14,  90 => 13,  79 => 6,  67 => 5,  58 => 22,  56 => 16,  54 => 13,  47 => 9,  43 => 8,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}

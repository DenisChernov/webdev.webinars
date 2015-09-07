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
        $__internal_2a43c4a6b8ccc0bfd2d408a58f15eb5fc1e006603635ce4a7cd26fade3a28b09 = $this->env->getExtension("native_profiler");
        $__internal_2a43c4a6b8ccc0bfd2d408a58f15eb5fc1e006603635ce4a7cd26fade3a28b09->enter($__internal_2a43c4a6b8ccc0bfd2d408a58f15eb5fc1e006603635ce4a7cd26fade3a28b09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        // line 24
        echo "</body>
</html>
";
        
        $__internal_2a43c4a6b8ccc0bfd2d408a58f15eb5fc1e006603635ce4a7cd26fade3a28b09->leave($__internal_2a43c4a6b8ccc0bfd2d408a58f15eb5fc1e006603635ce4a7cd26fade3a28b09_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_83146970a3ea8d976887fb2f05acb8b418d1f21dcaab0b76e0d5e4dd2fa95863 = $this->env->getExtension("native_profiler");
        $__internal_83146970a3ea8d976887fb2f05acb8b418d1f21dcaab0b76e0d5e4dd2fa95863->enter($__internal_83146970a3ea8d976887fb2f05acb8b418d1f21dcaab0b76e0d5e4dd2fa95863_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Площадка семинаров IT-Murman";
        
        $__internal_83146970a3ea8d976887fb2f05acb8b418d1f21dcaab0b76e0d5e4dd2fa95863->leave($__internal_83146970a3ea8d976887fb2f05acb8b418d1f21dcaab0b76e0d5e4dd2fa95863_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_e020c5a834ceecfc7babc67aff18a2593034165d8a0b5d68c1b87537788ea9be = $this->env->getExtension("native_profiler");
        $__internal_e020c5a834ceecfc7babc67aff18a2593034165d8a0b5d68c1b87537788ea9be->enter($__internal_e020c5a834ceecfc7babc67aff18a2593034165d8a0b5d68c1b87537788ea9be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_e020c5a834ceecfc7babc67aff18a2593034165d8a0b5d68c1b87537788ea9be->leave($__internal_e020c5a834ceecfc7babc67aff18a2593034165d8a0b5d68c1b87537788ea9be_prof);

    }

    // line 13
    public function block_body($context, array $blocks = array())
    {
        $__internal_8d767a774692c37a31aaff25ce852e25e9ba23dcc445b4add642f8369b9d24b6 = $this->env->getExtension("native_profiler");
        $__internal_8d767a774692c37a31aaff25ce852e25e9ba23dcc445b4add642f8369b9d24b6->enter($__internal_8d767a774692c37a31aaff25ce852e25e9ba23dcc445b4add642f8369b9d24b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 14
        echo "
";
        
        $__internal_8d767a774692c37a31aaff25ce852e25e9ba23dcc445b4add642f8369b9d24b6->leave($__internal_8d767a774692c37a31aaff25ce852e25e9ba23dcc445b4add642f8369b9d24b6_prof);

    }

    // line 16
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_2e952bd29f27dbdaf77c421375fff0ec0ade9eb10cec84b6cea64ffae5e64708 = $this->env->getExtension("native_profiler");
        $__internal_2e952bd29f27dbdaf77c421375fff0ec0ade9eb10cec84b6cea64ffae5e64708->enter($__internal_2e952bd29f27dbdaf77c421375fff0ec0ade9eb10cec84b6cea64ffae5e64708_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
    <script src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("/js/bootstrap.file-input.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>

";
        
        $__internal_2e952bd29f27dbdaf77c421375fff0ec0ade9eb10cec84b6cea64ffae5e64708->leave($__internal_2e952bd29f27dbdaf77c421375fff0ec0ade9eb10cec84b6cea64ffae5e64708_prof);

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
        return array (  122 => 21,  118 => 20,  114 => 19,  110 => 17,  104 => 16,  96 => 14,  90 => 13,  79 => 6,  67 => 5,  58 => 24,  56 => 16,  54 => 13,  47 => 9,  43 => 8,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}

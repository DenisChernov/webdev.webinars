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
        $__internal_a60375b62977bb0bce234f68839e666ca27213dee20acaadffa09d1f76eda994 = $this->env->getExtension("native_profiler");
        $__internal_a60375b62977bb0bce234f68839e666ca27213dee20acaadffa09d1f76eda994->enter($__internal_a60375b62977bb0bce234f68839e666ca27213dee20acaadffa09d1f76eda994_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
    <link href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("/css/bootstrap-datetimepicker.min.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
    <link rel=\"stylesheet\" href=\"http://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.6.2/css/bootstrap-select.min.css\" />
</head>
<body>

";
        // line 17
        $this->displayBlock('body', $context, $blocks);
        // line 20
        $this->displayBlock('javascripts', $context, $blocks);
        // line 34
        echo "</body>
</html>
";
        
        $__internal_a60375b62977bb0bce234f68839e666ca27213dee20acaadffa09d1f76eda994->leave($__internal_a60375b62977bb0bce234f68839e666ca27213dee20acaadffa09d1f76eda994_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_17464bb9c85739143a31e7d39ab3eac63401547425ac1a67bd83df82eb4a7824 = $this->env->getExtension("native_profiler");
        $__internal_17464bb9c85739143a31e7d39ab3eac63401547425ac1a67bd83df82eb4a7824->enter($__internal_17464bb9c85739143a31e7d39ab3eac63401547425ac1a67bd83df82eb4a7824_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Площадка семинаров IT-Murman";
        
        $__internal_17464bb9c85739143a31e7d39ab3eac63401547425ac1a67bd83df82eb4a7824->leave($__internal_17464bb9c85739143a31e7d39ab3eac63401547425ac1a67bd83df82eb4a7824_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_1ced8db85235dbf425a4fe25404af431edff2266c90f5ccff9fa955ff0914039 = $this->env->getExtension("native_profiler");
        $__internal_1ced8db85235dbf425a4fe25404af431edff2266c90f5ccff9fa955ff0914039->enter($__internal_1ced8db85235dbf425a4fe25404af431edff2266c90f5ccff9fa955ff0914039_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_1ced8db85235dbf425a4fe25404af431edff2266c90f5ccff9fa955ff0914039->leave($__internal_1ced8db85235dbf425a4fe25404af431edff2266c90f5ccff9fa955ff0914039_prof);

    }

    // line 17
    public function block_body($context, array $blocks = array())
    {
        $__internal_1a556f0d1a649bec85ba3c2459050a2032f5608feaec4f34502dfa12b531a426 = $this->env->getExtension("native_profiler");
        $__internal_1a556f0d1a649bec85ba3c2459050a2032f5608feaec4f34502dfa12b531a426->enter($__internal_1a556f0d1a649bec85ba3c2459050a2032f5608feaec4f34502dfa12b531a426_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 18
        echo "
";
        
        $__internal_1a556f0d1a649bec85ba3c2459050a2032f5608feaec4f34502dfa12b531a426->leave($__internal_1a556f0d1a649bec85ba3c2459050a2032f5608feaec4f34502dfa12b531a426_prof);

    }

    // line 20
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_4a49ec706c65f489e9f2edddae626b846a8a53318b11b583ccd6e798a4186266 = $this->env->getExtension("native_profiler");
        $__internal_4a49ec706c65f489e9f2edddae626b846a8a53318b11b583ccd6e798a4186266->enter($__internal_4a49ec706c65f489e9f2edddae626b846a8a53318b11b583ccd6e798a4186266_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 21
        echo "

    <script src=\"http://code.jquery.com/jquery-latest.js\"></script>
    <script src=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("/js/moment-with-locales.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("/js/bootstrap.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("/js/my.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("/js/bootstrap-datetimepicker.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("/js/moment.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("/js/ru.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("/js/bootstrap.file-input.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"http://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.6.2/js/bootstrap-select.min.js\"></script>

";
        
        $__internal_4a49ec706c65f489e9f2edddae626b846a8a53318b11b583ccd6e798a4186266->leave($__internal_4a49ec706c65f489e9f2edddae626b846a8a53318b11b583ccd6e798a4186266_prof);

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
        return array (  147 => 30,  143 => 29,  139 => 28,  135 => 27,  131 => 26,  127 => 25,  123 => 24,  118 => 21,  112 => 20,  104 => 18,  98 => 17,  87 => 7,  75 => 6,  66 => 34,  64 => 20,  62 => 17,  54 => 12,  50 => 11,  46 => 10,  42 => 9,  39 => 8,  37 => 7,  33 => 6,  26 => 1,);
    }
}

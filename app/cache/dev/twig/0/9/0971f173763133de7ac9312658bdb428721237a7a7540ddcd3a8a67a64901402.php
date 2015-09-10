<?php

/* base.html.twig */
class __TwigTemplate_0971f173763133de7ac9312658bdb428721237a7a7540ddcd3a8a67a64901402 extends Twig_Template
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
        $__internal_cb6c5729d6f1bfce7c8b50050d262154c3ef0a19f283a119a5ce94a372ea2225 = $this->env->getExtension("native_profiler");
        $__internal_cb6c5729d6f1bfce7c8b50050d262154c3ef0a19f283a119a5ce94a372ea2225->enter($__internal_cb6c5729d6f1bfce7c8b50050d262154c3ef0a19f283a119a5ce94a372ea2225_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_cb6c5729d6f1bfce7c8b50050d262154c3ef0a19f283a119a5ce94a372ea2225->leave($__internal_cb6c5729d6f1bfce7c8b50050d262154c3ef0a19f283a119a5ce94a372ea2225_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_bbffb5eb917f83ff043594882dbdfa60cbb30121c2dd51feb100185019b9c0f8 = $this->env->getExtension("native_profiler");
        $__internal_bbffb5eb917f83ff043594882dbdfa60cbb30121c2dd51feb100185019b9c0f8->enter($__internal_bbffb5eb917f83ff043594882dbdfa60cbb30121c2dd51feb100185019b9c0f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Площадка семинаров IT-Murman";
        
        $__internal_bbffb5eb917f83ff043594882dbdfa60cbb30121c2dd51feb100185019b9c0f8->leave($__internal_bbffb5eb917f83ff043594882dbdfa60cbb30121c2dd51feb100185019b9c0f8_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_af4cf2c1dafb0d12a8a7335d5549970daad48a250eee2d9e9f8e82da026a2b98 = $this->env->getExtension("native_profiler");
        $__internal_af4cf2c1dafb0d12a8a7335d5549970daad48a250eee2d9e9f8e82da026a2b98->enter($__internal_af4cf2c1dafb0d12a8a7335d5549970daad48a250eee2d9e9f8e82da026a2b98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_af4cf2c1dafb0d12a8a7335d5549970daad48a250eee2d9e9f8e82da026a2b98->leave($__internal_af4cf2c1dafb0d12a8a7335d5549970daad48a250eee2d9e9f8e82da026a2b98_prof);

    }

    // line 13
    public function block_body($context, array $blocks = array())
    {
        $__internal_605429af1da98d0847d37c5c8ef430eaf9ac3025895aa4d4a2979e46c7ac67e1 = $this->env->getExtension("native_profiler");
        $__internal_605429af1da98d0847d37c5c8ef430eaf9ac3025895aa4d4a2979e46c7ac67e1->enter($__internal_605429af1da98d0847d37c5c8ef430eaf9ac3025895aa4d4a2979e46c7ac67e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 14
        echo "
";
        
        $__internal_605429af1da98d0847d37c5c8ef430eaf9ac3025895aa4d4a2979e46c7ac67e1->leave($__internal_605429af1da98d0847d37c5c8ef430eaf9ac3025895aa4d4a2979e46c7ac67e1_prof);

    }

    // line 16
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_41c7947f958a19d95956f7b76142f091a2f72297d574ef9a827b4357f02cd529 = $this->env->getExtension("native_profiler");
        $__internal_41c7947f958a19d95956f7b76142f091a2f72297d574ef9a827b4357f02cd529->enter($__internal_41c7947f958a19d95956f7b76142f091a2f72297d574ef9a827b4357f02cd529_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_41c7947f958a19d95956f7b76142f091a2f72297d574ef9a827b4357f02cd529->leave($__internal_41c7947f958a19d95956f7b76142f091a2f72297d574ef9a827b4357f02cd529_prof);

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

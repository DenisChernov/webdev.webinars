<?php

/* SensioDistributionBundle::Configurator/layout.html.twig */
class __TwigTemplate_33e55d1d235f6541830f160bc410f36e26fb048c90c632d27b711f7aa49efd5f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "SensioDistributionBundle::Configurator/layout.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_84a1f8bb198cb9f87aca0ed5989c0a70e6b271588b6de7eb1a3635a3de539a52 = $this->env->getExtension("native_profiler");
        $__internal_84a1f8bb198cb9f87aca0ed5989c0a70e6b271588b6de7eb1a3635a3de539a52->enter($__internal_84a1f8bb198cb9f87aca0ed5989c0a70e6b271588b6de7eb1a3635a3de539a52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SensioDistributionBundle::Configurator/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_84a1f8bb198cb9f87aca0ed5989c0a70e6b271588b6de7eb1a3635a3de539a52->leave($__internal_84a1f8bb198cb9f87aca0ed5989c0a70e6b271588b6de7eb1a3635a3de539a52_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_e4501e43f7f1baeabc96b3714aa20f26cbbee39f9c630e7330052199d1423f78 = $this->env->getExtension("native_profiler");
        $__internal_e4501e43f7f1baeabc96b3714aa20f26cbbee39f9c630e7330052199d1423f78->enter($__internal_e4501e43f7f1baeabc96b3714aa20f26cbbee39f9c630e7330052199d1423f78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/sensiodistribution/webconfigurator/css/configurator.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_e4501e43f7f1baeabc96b3714aa20f26cbbee39f9c630e7330052199d1423f78->leave($__internal_e4501e43f7f1baeabc96b3714aa20f26cbbee39f9c630e7330052199d1423f78_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_b5f1220f06bfb27f9b3c09334d2b12f86b2107ed1c66fd54f8a9863ba5415939 = $this->env->getExtension("native_profiler");
        $__internal_b5f1220f06bfb27f9b3c09334d2b12f86b2107ed1c66fd54f8a9863ba5415939->enter($__internal_b5f1220f06bfb27f9b3c09334d2b12f86b2107ed1c66fd54f8a9863ba5415939_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Web Configurator Bundle";
        
        $__internal_b5f1220f06bfb27f9b3c09334d2b12f86b2107ed1c66fd54f8a9863ba5415939->leave($__internal_b5f1220f06bfb27f9b3c09334d2b12f86b2107ed1c66fd54f8a9863ba5415939_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_5e314cb96261594c6046e4e42896fb871e0b56bdbca5b406e32855066f390ce3 = $this->env->getExtension("native_profiler");
        $__internal_5e314cb96261594c6046e4e42896fb871e0b56bdbca5b406e32855066f390ce3->enter($__internal_5e314cb96261594c6046e4e42896fb871e0b56bdbca5b406e32855066f390ce3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "    <div class=\"block\">
        ";
        // line 11
        $this->displayBlock('content', $context, $blocks);
        // line 12
        echo "    </div>
    <div class=\"version\">Symfony Standard Edition v.";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["version"]) ? $context["version"] : $this->getContext($context, "version")), "html", null, true);
        echo "</div>
";
        
        $__internal_5e314cb96261594c6046e4e42896fb871e0b56bdbca5b406e32855066f390ce3->leave($__internal_5e314cb96261594c6046e4e42896fb871e0b56bdbca5b406e32855066f390ce3_prof);

    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        $__internal_39568103bff73e917ca0f0af92056e834d7ac3ecab8cb7056de5f126fa643c30 = $this->env->getExtension("native_profiler");
        $__internal_39568103bff73e917ca0f0af92056e834d7ac3ecab8cb7056de5f126fa643c30->enter($__internal_39568103bff73e917ca0f0af92056e834d7ac3ecab8cb7056de5f126fa643c30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_39568103bff73e917ca0f0af92056e834d7ac3ecab8cb7056de5f126fa643c30->leave($__internal_39568103bff73e917ca0f0af92056e834d7ac3ecab8cb7056de5f126fa643c30_prof);

    }

    public function getTemplateName()
    {
        return "SensioDistributionBundle::Configurator/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 11,  79 => 13,  76 => 12,  74 => 11,  71 => 10,  65 => 9,  53 => 7,  43 => 4,  37 => 3,  11 => 1,);
    }
}

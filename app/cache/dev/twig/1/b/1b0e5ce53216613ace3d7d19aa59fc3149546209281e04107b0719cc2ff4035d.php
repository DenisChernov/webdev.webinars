<?php

/* SensioDistributionBundle::Configurator/final.html.twig */
class __TwigTemplate_1b0e5ce53216613ace3d7d19aa59fc3149546209281e04107b0719cc2ff4035d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SensioDistributionBundle::Configurator/layout.html.twig", "SensioDistributionBundle::Configurator/final.html.twig", 1);
        $this->blocks = array(
            'content_class' => array($this, 'block_content_class'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SensioDistributionBundle::Configurator/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_173e434874c8561847993f5d36e16316cc674203d322d8ac22daea92f77f4b23 = $this->env->getExtension("native_profiler");
        $__internal_173e434874c8561847993f5d36e16316cc674203d322d8ac22daea92f77f4b23->enter($__internal_173e434874c8561847993f5d36e16316cc674203d322d8ac22daea92f77f4b23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SensioDistributionBundle::Configurator/final.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_173e434874c8561847993f5d36e16316cc674203d322d8ac22daea92f77f4b23->leave($__internal_173e434874c8561847993f5d36e16316cc674203d322d8ac22daea92f77f4b23_prof);

    }

    // line 3
    public function block_content_class($context, array $blocks = array())
    {
        $__internal_551eb0fff6c18800f788f5fc9ab25c1125e060bba0de0c0a286343d4463a6c71 = $this->env->getExtension("native_profiler");
        $__internal_551eb0fff6c18800f788f5fc9ab25c1125e060bba0de0c0a286343d4463a6c71->enter($__internal_551eb0fff6c18800f788f5fc9ab25c1125e060bba0de0c0a286343d4463a6c71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_class"));

        echo "config_done";
        
        $__internal_551eb0fff6c18800f788f5fc9ab25c1125e060bba0de0c0a286343d4463a6c71->leave($__internal_551eb0fff6c18800f788f5fc9ab25c1125e060bba0de0c0a286343d4463a6c71_prof);

    }

    // line 4
    public function block_content($context, array $blocks = array())
    {
        $__internal_54117380a363f080549bf53b618dac7afd6fe3c9834a8a864886f4755b0aa37c = $this->env->getExtension("native_profiler");
        $__internal_54117380a363f080549bf53b618dac7afd6fe3c9834a8a864886f4755b0aa37c->enter($__internal_54117380a363f080549bf53b618dac7afd6fe3c9834a8a864886f4755b0aa37c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 5
        echo "    <div class=\"step\">
        <h1>Well done!</h1>
        ";
        // line 7
        if ((isset($context["is_writable"]) ? $context["is_writable"] : $this->getContext($context, "is_writable"))) {
            // line 8
            echo "        <h2>Your distribution is configured!</h2>
        ";
        } else {
            // line 10
            echo "        <h2 class=\"configure-error\">Your distribution is almost configured but...</h2>
        ";
        }
        // line 12
        echo "        <h3>
            <span>
                ";
        // line 14
        if ((isset($context["is_writable"]) ? $context["is_writable"] : $this->getContext($context, "is_writable"))) {
            // line 15
            echo "                    Your parameters.yml file has been overwritten with these parameters (in <em>";
            echo twig_escape_filter($this->env, (isset($context["yml_path"]) ? $context["yml_path"] : $this->getContext($context, "yml_path")), "html", null, true);
            echo "</em>):
                ";
        } else {
            // line 17
            echo "                    Your parameters.yml file is not writeable! Here are the parameters you can copy and paste in <em>";
            echo twig_escape_filter($this->env, (isset($context["yml_path"]) ? $context["yml_path"] : $this->getContext($context, "yml_path")), "html", null, true);
            echo "</em>:
                ";
        }
        // line 19
        echo "            </span>
        </h3>

        <textarea class=\"symfony-configuration\">";
        // line 22
        echo twig_escape_filter($this->env, (isset($context["parameters"]) ? $context["parameters"] : $this->getContext($context, "parameters")), "html", null, true);
        echo "</textarea>

        ";
        // line 24
        if ((isset($context["welcome_url"]) ? $context["welcome_url"] : $this->getContext($context, "welcome_url"))) {
            // line 25
            echo "            <ul>
                <li><a href=\"";
            // line 26
            echo twig_escape_filter($this->env, (isset($context["welcome_url"]) ? $context["welcome_url"] : $this->getContext($context, "welcome_url")), "html", null, true);
            echo "\">Go to the Welcome page</a></li>
            </ul>
        ";
        }
        // line 29
        echo "    </div>
";
        
        $__internal_54117380a363f080549bf53b618dac7afd6fe3c9834a8a864886f4755b0aa37c->leave($__internal_54117380a363f080549bf53b618dac7afd6fe3c9834a8a864886f4755b0aa37c_prof);

    }

    public function getTemplateName()
    {
        return "SensioDistributionBundle::Configurator/final.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 29,  100 => 26,  97 => 25,  95 => 24,  90 => 22,  85 => 19,  79 => 17,  73 => 15,  71 => 14,  67 => 12,  63 => 10,  59 => 8,  57 => 7,  53 => 5,  47 => 4,  35 => 3,  11 => 1,);
    }
}

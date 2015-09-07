<?php

/* webinars/webinar_speakers.html */
class __TwigTemplate_b084d036aec7c6663abaf4d93ac542dfb8a0dc96e5dae80ef145e0fc401aceaf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6b72ab26ba322f52e48302dd24afdb519281df2bcd88f9533619388fa71ccf75 = $this->env->getExtension("native_profiler");
        $__internal_6b72ab26ba322f52e48302dd24afdb519281df2bcd88f9533619388fa71ccf75->enter($__internal_6b72ab26ba322f52e48302dd24afdb519281df2bcd88f9533619388fa71ccf75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "webinars/webinar_speakers.html"));

        // line 1
        echo "<div class=\"speaker\">
    <img class=\"speaker_foto\" id=\"speaker_id_";
        // line 2
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["speaker"]) ? $context["speaker"] : $this->getContext($context, "speaker")), "id", array()), "html", null, true);
        echo "\" src=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["speaker"]) ? $context["speaker"] : $this->getContext($context, "speaker")), "pic", array()), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["speaker"]) ? $context["speaker"] : $this->getContext($context, "speaker")), "fio", array()), "html", null, true);
        echo "\"/>
    <div class=\"speaker_data\">
        <span class=\"speaker_fio\">";
        // line 4
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["speaker"]) ? $context["speaker"] : $this->getContext($context, "speaker")), "fio", array()), "html", null, true);
        echo "</span>
        <hr class=\"hr_fio\">
        <span class=\"speaker_position\">";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["speaker"]) ? $context["speaker"] : $this->getContext($context, "speaker")), "position", array()), "html", null, true);
        echo " </span>
    </div>
</div>

";
        
        $__internal_6b72ab26ba322f52e48302dd24afdb519281df2bcd88f9533619388fa71ccf75->leave($__internal_6b72ab26ba322f52e48302dd24afdb519281df2bcd88f9533619388fa71ccf75_prof);

    }

    public function getTemplateName()
    {
        return "webinars/webinar_speakers.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 6,  34 => 4,  25 => 2,  22 => 1,);
    }
}

<?php

/* webinars/webinar_speakers.html */
class __TwigTemplate_a3b06dda9790b282a7ae4bf51d69800ecfa174a75af0050c13a4e4932f6c76e9 extends Twig_Template
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
        $__internal_88294dc24a9747bfd264e683c1e71e62af44669c51eb99a2d45209aa64a868db = $this->env->getExtension("native_profiler");
        $__internal_88294dc24a9747bfd264e683c1e71e62af44669c51eb99a2d45209aa64a868db->enter($__internal_88294dc24a9747bfd264e683c1e71e62af44669c51eb99a2d45209aa64a868db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "webinars/webinar_speakers.html"));

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
        
        $__internal_88294dc24a9747bfd264e683c1e71e62af44669c51eb99a2d45209aa64a868db->leave($__internal_88294dc24a9747bfd264e683c1e71e62af44669c51eb99a2d45209aa64a868db_prof);

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

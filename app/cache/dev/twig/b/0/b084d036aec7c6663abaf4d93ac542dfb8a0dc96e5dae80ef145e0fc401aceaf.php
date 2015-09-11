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
        $__internal_368140751549b174318067ac6891b07b4a71051587f0d61d89524a83ea1ef890 = $this->env->getExtension("native_profiler");
        $__internal_368140751549b174318067ac6891b07b4a71051587f0d61d89524a83ea1ef890->enter($__internal_368140751549b174318067ac6891b07b4a71051587f0d61d89524a83ea1ef890_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "webinars/webinar_speakers.html"));

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
    <div class=\"speaker_data animated_show\">
        <span class=\"speaker_fio\">";
        // line 4
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["speaker"]) ? $context["speaker"] : $this->getContext($context, "speaker")), "fio", array()), "html", null, true);
        echo "</span>
        <hr class=\"hr_fio\">
        <span class=\"speaker_position\">";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["speaker"]) ? $context["speaker"] : $this->getContext($context, "speaker")), "position", array()), "html", null, true);
        echo "</span>
    </div>
</div>

";
        
        $__internal_368140751549b174318067ac6891b07b4a71051587f0d61d89524a83ea1ef890->leave($__internal_368140751549b174318067ac6891b07b4a71051587f0d61d89524a83ea1ef890_prof);

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

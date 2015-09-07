<?php

/* webinars/webinar_title.html */
class __TwigTemplate_ad665554c2ae4bad855423e970518b525de7010bf566340236cd945220a1ed93 extends Twig_Template
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
        $__internal_25c469d2e339a2f9b485602f37ac67c9d953687a74a486e6273ffb141bf7ae36 = $this->env->getExtension("native_profiler");
        $__internal_25c469d2e339a2f9b485602f37ac67c9d953687a74a486e6273ffb141bf7ae36->enter($__internal_25c469d2e339a2f9b485602f37ac67c9d953687a74a486e6273ffb141bf7ae36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "webinars/webinar_title.html"));

        // line 1
        echo "<div class=\"web_data\">
    <p class=\"title-big\">";
        // line 2
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["webinar"]) ? $context["webinar"] : $this->getContext($context, "webinar")), "title", array()), "html", null, true);
        echo "</p>
    <p class=\"web_description\">
        ";
        // line 4
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["webinar"]) ? $context["webinar"] : $this->getContext($context, "webinar")), "description", array()), "html", null, true);
        echo "
    </p>
    <p class=\"web_register_status\">
        ";
        // line 7
        if (($this->getAttribute((isset($context["webinar"]) ? $context["webinar"] : $this->getContext($context, "webinar")), "registerStatus", array()) == 2)) {
            // line 8
            echo "            Регистрация закрыта
        ";
        } elseif (($this->getAttribute(        // line 9
(isset($context["webinar"]) ? $context["webinar"] : $this->getContext($context, "webinar")), "registerStatus", array()) == 1)) {
            // line 10
            echo "            Регистрация уже открыта
        ";
        } elseif (($this->getAttribute(        // line 11
(isset($context["webinar"]) ? $context["webinar"] : $this->getContext($context, "webinar")), "registerStatus", array()) == 0)) {
            // line 12
            echo "            Регистрация будет доступна с ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["webinar"]) ? $context["webinar"] : $this->getContext($context, "webinar")), "dateBeg", array()), "html", null, true);
            echo " в ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["webinar"]) ? $context["webinar"] : $this->getContext($context, "webinar")), "timeBeg", array()), "html", null, true);
            echo "
        ";
        }
        // line 14
        echo "    </p>
    ";
        // line 15
        if (($this->getAttribute((isset($context["webinar"]) ? $context["webinar"] : $this->getContext($context, "webinar")), "registerStatus", array()) == 0)) {
            // line 16
            echo "        <div class=\"btnRegister\">
            <button type=\"button\" class=\"btn btn-warning btn-lg\" id=\"btn_register\">РЕГИСТРАЦИЯ</button>
        </div>
    ";
        }
        // line 20
        echo "
    <div class=\"readmore\">
        <p class=\"read_more\">Подробнее</p><br>
        <a href=\"#speakers\" id=\"scroll_to_speakers\"><img src=\"/images/arrows-down-yellow.png\"/></a>
    </div>
</div>
";
        
        $__internal_25c469d2e339a2f9b485602f37ac67c9d953687a74a486e6273ffb141bf7ae36->leave($__internal_25c469d2e339a2f9b485602f37ac67c9d953687a74a486e6273ffb141bf7ae36_prof);

    }

    public function getTemplateName()
    {
        return "webinars/webinar_title.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 20,  61 => 16,  59 => 15,  56 => 14,  48 => 12,  46 => 11,  43 => 10,  41 => 9,  38 => 8,  36 => 7,  30 => 4,  25 => 2,  22 => 1,);
    }
}

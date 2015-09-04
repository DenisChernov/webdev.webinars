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
        $__internal_8f2cccef31487ba76d9aa7657af4c14b5b7ddcacce28188ad9ece56fcb1d0780 = $this->env->getExtension("native_profiler");
        $__internal_8f2cccef31487ba76d9aa7657af4c14b5b7ddcacce28188ad9ece56fcb1d0780->enter($__internal_8f2cccef31487ba76d9aa7657af4c14b5b7ddcacce28188ad9ece56fcb1d0780_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "webinars/webinar_title.html"));

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
        } elseif (($this->getAttribute(        // line 12
(isset($context["webinar"]) ? $context["webinar"] : $this->getContext($context, "webinar")), "registerStatus", array()) == 0)) {
            // line 13
            echo "            Регистрация будет доступна с ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["webinar"]) ? $context["webinar"] : $this->getContext($context, "webinar")), "dateBeg", array()), "html", null, true);
            echo " в ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["webinar"]) ? $context["webinar"] : $this->getContext($context, "webinar")), "timeBeg", array()), "html", null, true);
            echo "
        ";
        }
        // line 15
        echo "    </p>
    ";
        // line 16
        if (($this->getAttribute((isset($context["webinar"]) ? $context["webinar"] : $this->getContext($context, "webinar")), "registerStatus", array()) == 0)) {
            // line 17
            echo "        <div class=\"btnRegister\">
            <button type=\"button\" class=\"btn btn-warning btn-lg\">РЕГИСТРАЦИЯ</button>
        </div>
    ";
        }
        // line 21
        echo "</div>
";
        
        $__internal_8f2cccef31487ba76d9aa7657af4c14b5b7ddcacce28188ad9ece56fcb1d0780->leave($__internal_8f2cccef31487ba76d9aa7657af4c14b5b7ddcacce28188ad9ece56fcb1d0780_prof);

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
        return array (  68 => 21,  62 => 17,  60 => 16,  57 => 15,  49 => 13,  47 => 12,  43 => 10,  41 => 9,  38 => 8,  36 => 7,  30 => 4,  25 => 2,  22 => 1,);
    }
}

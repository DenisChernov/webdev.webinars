<?php

/* webinars/header_mnu.html */
class __TwigTemplate_a48cc304f8b5f970becfd51791da2d2188a38aa41f0e86632a7de594b7e229d6 extends Twig_Template
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
        $__internal_b6993bd16ec1f210e6bed32b5b9942dad4ef0b197ad1c05483292e46e1c5f436 = $this->env->getExtension("native_profiler");
        $__internal_b6993bd16ec1f210e6bed32b5b9942dad4ef0b197ad1c05483292e46e1c5f436->enter($__internal_b6993bd16ec1f210e6bed32b5b9942dad4ef0b197ad1c05483292e46e1c5f436_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "webinars/header_mnu.html"));

        // line 1
        echo "<div class=\"first_page_block header_mnu\">
    <img class=\"company_logo\" src=\"images/it-pole-logo.png\"/>

    <div class=\"header_mnu_buttons\">
        <a href=\"#\" class=\"header_mnu_btn\" id=\"main\">Главная</a>
        <a href=\"#\" class=\"header_mnu_btn\" id=\"speakers\">Спикеры</a>
        <a href=\"#\" class=\"header_mnu_btn\" id=\"schedule\">Расписание</a>
        <a href=\"#\" class=\"header_mnu_btn\" id=\"about\">О компании</a>
        <a href=\"#\" class=\"header_mnu_btn\" id=\"login\">Войти</a>
        <a href=\"#\" class=\"header_mnu_btn\" id=\"news\">Новости</a>
    </div>
</div>
";
        
        $__internal_b6993bd16ec1f210e6bed32b5b9942dad4ef0b197ad1c05483292e46e1c5f436->leave($__internal_b6993bd16ec1f210e6bed32b5b9942dad4ef0b197ad1c05483292e46e1c5f436_prof);

    }

    public function getTemplateName()
    {
        return "webinars/header_mnu.html";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}

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
        $__internal_b23a15600f9eafcca0327921114385e9815a7b9b82bacdafabd878872d4d02b7 = $this->env->getExtension("native_profiler");
        $__internal_b23a15600f9eafcca0327921114385e9815a7b9b82bacdafabd878872d4d02b7->enter($__internal_b23a15600f9eafcca0327921114385e9815a7b9b82bacdafabd878872d4d02b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "webinars/header_mnu.html"));

        // line 1
        echo "<div class=\"first_page_block header_mnu animated_show_bg\">
    <img class=\"company_logo animated_resize\" src=\"/images/it-pole-logo_small.png\"/>
    <div class=\"header_mnu_buttons animated_margin\">
        <a href=\"#main\" class=\"header_mnu_btn\" id=\"btn_main\">Главная</a>
        <a href=\"#speakers\" class=\"header_mnu_btn\" id=\"btn_speakers\">Спикеры</a>
        <a href=\"#schedule\" class=\"header_mnu_btn\" id=\"btn_schedule\">Расписание</a>
        <a href=\"#listeners\" class=\"header_mnu_btn\" id=\"btn_listeners\">Участники</a>
        <a href=\"#about\" class=\"header_mnu_btn\" id=\"btn_about\">О компании</a>
        <a href=\"#login\" class=\"header_mnu_btn\" id=\"btn_login\">Войти</a>
        <a href=\"#news\" class=\"header_mnu_btn\" id=\"btn_news\">Новости</a>
    </div>
</div>
";
        
        $__internal_b23a15600f9eafcca0327921114385e9815a7b9b82bacdafabd878872d4d02b7->leave($__internal_b23a15600f9eafcca0327921114385e9815a7b9b82bacdafabd878872d4d02b7_prof);

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

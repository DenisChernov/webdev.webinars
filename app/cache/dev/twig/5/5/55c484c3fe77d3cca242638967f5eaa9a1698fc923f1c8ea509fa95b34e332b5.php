<?php

/* webinars/header_mnu.html */
class __TwigTemplate_55c484c3fe77d3cca242638967f5eaa9a1698fc923f1c8ea509fa95b34e332b5 extends Twig_Template
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
        $__internal_6ffa218ca913d4ebe10886c2d9f06dad5199e39b4cd7ba9f70d58bc912462ef4 = $this->env->getExtension("native_profiler");
        $__internal_6ffa218ca913d4ebe10886c2d9f06dad5199e39b4cd7ba9f70d58bc912462ef4->enter($__internal_6ffa218ca913d4ebe10886c2d9f06dad5199e39b4cd7ba9f70d58bc912462ef4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "webinars/header_mnu.html"));

        // line 1
        echo "<div class=\"first_page_block header_mnu animated_show_bg\">
    <img class=\"company_logo animated_resize\" src=\"/images/it-pole-logo_small.png\"/>
    <div class=\"header_mnu_buttons animated_margin\">
        <a href=\"#main\" class=\"header_mnu_btn\" id=\"btn_main\">Главная</a>
        <a href=\"#speakers\" class=\"header_mnu_btn\" id=\"btn_speakers\">Спикеры</a>
        <a href=\"#schedule\" class=\"header_mnu_btn\" id=\"btn_schedule\">Расписание</a>
        <a href=\"#about\" class=\"header_mnu_btn\" id=\"btn_about\">О компании</a>
        <a href=\"#login\" class=\"header_mnu_btn\" id=\"btn_login\">Войти</a>
        <a href=\"#news\" class=\"header_mnu_btn\" id=\"btn_news\">Новости</a>
    </div>
</div>
";
        
        $__internal_6ffa218ca913d4ebe10886c2d9f06dad5199e39b4cd7ba9f70d58bc912462ef4->leave($__internal_6ffa218ca913d4ebe10886c2d9f06dad5199e39b4cd7ba9f70d58bc912462ef4_prof);

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

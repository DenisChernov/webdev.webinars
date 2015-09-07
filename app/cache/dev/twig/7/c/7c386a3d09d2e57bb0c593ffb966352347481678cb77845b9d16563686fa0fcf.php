<?php

/* webinars/form_register.html */
class __TwigTemplate_7c386a3d09d2e57bb0c593ffb966352347481678cb77845b9d16563686fa0fcf extends Twig_Template
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
        $__internal_999b595c7b6817f55ffc473b44cdab8349d070e7c31b5b7e9351de810d8c7ce5 = $this->env->getExtension("native_profiler");
        $__internal_999b595c7b6817f55ffc473b44cdab8349d070e7c31b5b7e9351de810d8c7ce5->enter($__internal_999b595c7b6817f55ffc473b44cdab8349d070e7c31b5b7e9351de810d8c7ce5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "webinars/form_register.html"));

        // line 1
        echo "<div class=\"form_register invisible\">
    <form class=\"form-horizontal\" role=\"form\">
        <div class=\"form-group\" style=\"margin-left: 30px; margin-right: 30px;\">
            <div class=\"form-group\" style=\"padding-top: 10px\">
                <label style=\"text-align: center\">Регистрация участника</label>
            </div>

            <div class=\"form-group\">
                <label class=\"sr-only\" for=\"exampleInputEmail2\">Email</label>
                <input type=\"email\" class=\"form-control\" id=\"exampleInputEmail2\" placeholder=\"Введите e-mail\">
            </div>
            <div class=\"form-group\">
                <label class=\"sr-only\" for=\"exampleInputPassword2\">Пароль</label>
                <input type=\"password\" class=\"form-control\" id=\"exampleInputPassword2\" placeholder=\"Пароль\">
            </div>
            <div class=\"form-group\">
                <label for=\"avatar\">Фотография</label>
                <input type=\"file\" data-filename-placement=\"inside\" id=\"avatar\">
                <p class=\"help-block\">Фотография участника</p>
            </div>

        </div>
    </form>
</div>";
        
        $__internal_999b595c7b6817f55ffc473b44cdab8349d070e7c31b5b7e9351de810d8c7ce5->leave($__internal_999b595c7b6817f55ffc473b44cdab8349d070e7c31b5b7e9351de810d8c7ce5_prof);

    }

    public function getTemplateName()
    {
        return "webinars/form_register.html";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}

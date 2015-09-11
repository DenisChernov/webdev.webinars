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
        $__internal_36637b86030e399ad345bffc6221f69eee1a4b68b9d349b6bcce778ab63f65dc = $this->env->getExtension("native_profiler");
        $__internal_36637b86030e399ad345bffc6221f69eee1a4b68b9d349b6bcce778ab63f65dc->enter($__internal_36637b86030e399ad345bffc6221f69eee1a4b68b9d349b6bcce778ab63f65dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "webinars/form_register.html"));

        // line 1
        echo "    <div class=\"modal fade\" id=\"form_register\">
        <div class=\"modal-dialog\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                    <h4 class=\"modal-title\">Регистрация участника</h4>
                </div>
                <div class=\"modal-body\">

                    <label for=\"email\" class=\"control-label\">Email</label>
                    <input class=\"form-control\" id=\"email\" type=\"email\" placeholder=\"Ваш email, будет использован как логин\">

                    <label for=\"password\" class=\"control-label\">Пароль</label>
                    <input class=\"form-control\" id=\"password\" type=\"password\" placeholder=\"Ваш пароль для доступа к профилю\">

                    <label for=\"fio\" class=\"control-label\">ФИО</label>
                    <input class=\"form-control\" id=\"fio\" type=\"text\" placeholder=\"Ваши фамилия, имя, отчество\">

                    <label for=\"organisation\" class=\"control-label\">Организация</label>
                    <input class=\"form-control\" id=\"organisation\" type=\"text\" placeholder=\"Ваша организация\">

                    <label for=\"position\" class=\"control-label\">Должность</label>
                    <input class=\"form-control\" id=\"position\" type=\"text\" placeholder=\"Ваша должность\">

                    <label for=\"avatar\" class=\"control-label\">Ваше фото</label>
                    <input id=\"avatar\" type=\"file\" accept=\"image/*\">

                    <img class=\"avatar\" src=\"/images/nofoto.png\"/>

                </div>
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-default\" id=\"btnRegisterUser\">Зарегистрироваться</button>
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_36637b86030e399ad345bffc6221f69eee1a4b68b9d349b6bcce778ab63f65dc->leave($__internal_36637b86030e399ad345bffc6221f69eee1a4b68b9d349b6bcce778ab63f65dc_prof);

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

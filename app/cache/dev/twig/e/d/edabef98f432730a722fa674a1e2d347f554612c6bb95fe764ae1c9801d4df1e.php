<?php

/* webinars/form_register.html */
class __TwigTemplate_edabef98f432730a722fa674a1e2d347f554612c6bb95fe764ae1c9801d4df1e extends Twig_Template
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
        $__internal_ed3b2895fba509ec772090b690109759d5aa377b11bef7a4f12925ebee618ed0 = $this->env->getExtension("native_profiler");
        $__internal_ed3b2895fba509ec772090b690109759d5aa377b11bef7a4f12925ebee618ed0->enter($__internal_ed3b2895fba509ec772090b690109759d5aa377b11bef7a4f12925ebee618ed0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "webinars/form_register.html"));

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

                    <label for=\"organisation\" class=\"\"

                    <label for=\"avatar\" class=\"control-label\">Ваше фото</label>
                    <input id=\"avatar\" type=\"file\">

                </div>
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-default\" >Reg!</button>
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_ed3b2895fba509ec772090b690109759d5aa377b11bef7a4f12925ebee618ed0->leave($__internal_ed3b2895fba509ec772090b690109759d5aa377b11bef7a4f12925ebee618ed0_prof);

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

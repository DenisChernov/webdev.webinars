<?php

/* webinars/admin.html */
class __TwigTemplate_1df4322c75231a4c5464d97d796f4f62a52d5170ba39e3c370a95ccb85e4120f extends Twig_Template
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
        $__internal_978ddd5d99c2d97c16005030c00a37c842ebd1ac53f3e64fcb6a3cfaf01c51c0 = $this->env->getExtension("native_profiler");
        $__internal_978ddd5d99c2d97c16005030c00a37c842ebd1ac53f3e64fcb6a3cfaf01c51c0->enter($__internal_978ddd5d99c2d97c16005030c00a37c842ebd1ac53f3e64fcb6a3cfaf01c51c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "webinars/admin.html"));

        // line 1
        echo "<div class=\"admin_page\">

    <ul class=\"nav nav-tabs\">
        <li><a href=\"#tab_webinars\" data-toggle=\"tab\">Вебинары<button type=\"button\" id=\"btn_newWebinar\" class=\"btn btn-default btn-lg btnAdd>\"><span class=\"glyphicon glyphicon-plus\"></span></button></a></li>
        <li class=\"active\"><a href=\"#tab_speakers\" data-toggle=\"tab\">Спикеры<button id=\"btn_newSpeaker\" type=\"button\" class=\"btn btn-default btn-lg btnAdd>\"><span class=\"glyphicon glyphicon-plus\"></span></button></a></li>
        <li><a href=\"#tab_users\" data-toggle=\"tab\">Участники<button type=\"button\" id=\"btn_newUser\" class=\"btn btn-default btn-lg btnAdd>\"><span class=\"glyphicon glyphicon-plus\"></span></button></a></li>
    </ul>

    <!-- Tab panes -->
    <div class=\"tab-content\">
        <div class=\"tab-pane fade\" id=\"tab_webinars\">
            <table class=\"table table-stripped table-hover\" id=\"table_webinars\">
                <tr class=\"table-caption\">
                    <td class=\"table-cell\">#</td>
                    <td class=\"table-cell\">Заглавие</td>
                    <td class=\"table-cell\">Дата начала</td>
                    <td class=\"table-cell\">Время начала</td>
                    <td class=\"table-cell\">Статус активности</td>
                    <td class=\"table-cell\">Описание</td>
                    <td class=\"table-cell\" style=\"display: none\"></td>
                </tr>
            ";
        // line 22
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["webinars"]) ? $context["webinars"] : $this->getContext($context, "webinars")));
        foreach ($context['_seq'] as $context["_key"] => $context["webinar"]) {
            // line 23
            echo "                <tr class=\"table-row\" id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["webinar"], "id", array()), "html", null, true);
            echo "\">
                    <td class=\"table-cell webinar_tbl_id\">
                        <label class=\"control-label\" id=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["webinar"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["webinar"], "id", array()), "html", null, true);
            echo "</label>
                    </td>
                    <td class=\"table-cell webinar_tbl_title\">
                        <input readonly class=\"form-control\" value=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["webinar"], "title", array()), "html", null, true);
            echo "\"/>
                    </td>
                    <td class=\"table-cell webinar_tbl_dateBeg\">
                            <div class=\"input-group date datepicker\">
                                <input class=\"form-control\" value=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($context["webinar"], "dateBeg", array()), "html", null, true);
            echo "\" disabled/>
                                <span class=\"input-group-addon\">
                                    <span class=\"glyphicon glyphicon-calendar\"></span>
                                </span>
                            </div>
                    </td>
                    <td class=\"table-cell webinar_tbl_timeBeg\">
                        <div class=\"form-group\">
                            <div class=\"input-group date timepicker\">
                                <input class=\"form-control\" value=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute($context["webinar"], "timeBeg", array()), "html", null, true);
            echo "\" disabled/>
                                <span class=\"input-group-addon\">
                                    <span class=\"glyphicon glyphicon-time\"></span>
                                </span>
                            </div>
                        </div>
                    </td>
                    <td class=\"table-cell webinar_tbl_registerStatus\">
                        <div class=\"selectContainer\">
                            <select disabled name=\"language\" class=\"form-control\">
                                <option value=\"0\" ";
            // line 51
            if (($this->getAttribute($context["webinar"], "registerStatus", array()) == 0)) {
                echo " selected ";
            }
            echo ">0 - Предстоит</option>
                                <option value=\"1\" ";
            // line 52
            if (($this->getAttribute($context["webinar"], "registerStatus", array()) == 1)) {
                echo " selected ";
            }
            echo ">1 - В процессе</option>
                                <option value=\"2\" ";
            // line 53
            if (($this->getAttribute($context["webinar"], "registerStatus", array()) == 2)) {
                echo " selected ";
            }
            echo ">2 - Окончен</option>
                            </select>
                        </div>
                        <!--input class=\"form-control\" value=\"";
            // line 56
            echo twig_escape_filter($this->env, $this->getAttribute($context["webinar"], "registerStatus", array()), "html", null, true);
            echo "\"/-->
                    </td>
                    <td class=\"table-cell webinar_tbl_description\">
                        <textarea readonly class=\"form-control\" rows=\"4\">";
            // line 59
            echo twig_escape_filter($this->env, $this->getAttribute($context["webinar"], "description", array()), "html", null, true);
            echo "</textarea>
                    </td>
                    <td class=\"table-cell\" style=\"padding-top: 12px\">
                        <button title=\"Сохранить изменения\" type=\"button\" class=\"btn btn-default btnApplyChange\" disabled><span class=\"glyphicon glyphicon-ok\"></span></button>
                        <button title=\"Отменить изменения\" type=\"button\" class=\"btn btn-default btnCancelChange\" disabled><span class=\"glyphicon glyphicon-remove\"></span></button>
                        <button title=\"Внести изменения\" type=\"button\" class=\"btn btn-default btnDoChange\"><span class=\"glyphicon glyphicon-pencil\"></span></button>
                    </td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['webinar'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 68
        echo "            </table>
        </div>
        <div class=\"tab-pane fade active\" id=\"tab_speakers\">
            <div class=\"table-responsive\">

                <table class=\"table table-stripped\" id=\"table_speakers\">
                    <tr class=\"table-caption\">
                        <td class=\"table-cell\">#</td>
                        <td class=\"table-cell\">Фотография</td>
                        <td class=\"table-cell\">ФИО</td>
                        <td class=\"table-cell\">Организация</td>
                        <td class=\"table-cell\">Должность</td>
                    </tr>
                    ";
        // line 81
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["speakers"]) ? $context["speakers"] : $this->getContext($context, "speakers")));
        foreach ($context['_seq'] as $context["_key"] => $context["speaker"]) {
            // line 82
            echo "                        <tr class=\"table-row\">
                            <td class=\"table-cell speakers_tbl_id\">
                                <label class=\"control-label\" id=\"";
            // line 84
            echo twig_escape_filter($this->env, $this->getAttribute($context["speaker"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["speaker"], "id", array()), "html", null, true);
            echo "</label>
                            </td>
                            <td class=\"table-cell speakers_avatar\">
                                <img class=\"admin_speakers_avatar\" id=\"";
            // line 87
            echo twig_escape_filter($this->env, $this->getAttribute($context["speaker"], "pic", array()), "html", null, true);
            echo "\" src=\"/images/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["speaker"], "pic", array()), "html", null, true);
            echo "\"/>
                            </td>
                            <td class=\"table-cell speakers_tbl_fio\">
                                <input type=\"text\" class=\"form-control\" readonly value=\"";
            // line 90
            echo twig_escape_filter($this->env, $this->getAttribute($context["speaker"], "fio", array()), "html", null, true);
            echo "\"/>
                            </td>
                            <td class=\"table-cell speakers_tbl_org\">
                                <input type=\"text\" class=\"form-control\" readonly value=\"IT Консалтинг\" />
                            </td>
                            <td class=\"table-cell speakers_tbl_position\">
                                <input type=\"text\" class=\"form-control\" readonly value=\"";
            // line 96
            echo twig_escape_filter($this->env, $this->getAttribute($context["speaker"], "position", array()), "html", null, true);
            echo "\"/>
                            </td>
                            <td class=\"table-cell\" style=\"padding-top: 12px; width:4%;\">
                                <button title=\"Сохранить изменения\" type=\"button\" class=\"btn btn-default btnApplyChange\" disabled><span class=\"glyphicon glyphicon-ok\"></span></button>
                                <button title=\"Отменить изменения\" type=\"button\" class=\"btn btn-default btnCancelChange\" disabled><span class=\"glyphicon glyphicon-remove\"></span></button>
                                <button title=\"Внести изменения\" type=\"button\" class=\"btn btn-default btnDoChange\"><span class=\"glyphicon glyphicon-pencil\"></span></button>
                            </td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['speaker'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 105
        echo "                </table>
            </div>
        </div>
        <div class=\"tab-pane fade\" id=\"tab_users\">
            <div class=\"table-responsive\">
                <table class=\"table table-stripped\" id=\"table_users\">
                    <tr class=\"table-caption\">
                        <td class=\"table-cell\">#</td>
                        <td class=\"table-cell\">Фотография</td>
                        <td class=\"table-cell\">ФИО</td>
                        <td class=\"table-cell\">Организация</td>
                        <td class=\"table-cell\">Должность</td>
                        <td class=\"table-cell\">E-mail</td>
                        <td class=\"table-cell\">Пароль</td>
                    </tr>
                    ";
        // line 120
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) ? $context["users"] : $this->getContext($context, "users")));
        foreach ($context['_seq'] as $context["_key"] => $context["reguser"]) {
            // line 121
            echo "                    <tr class=\"table-row\">
                        <td class=\"table-cell users_tbl_id\">
                            <label class=\"control-label\" id=\"";
            // line 123
            echo twig_escape_filter($this->env, $this->getAttribute($context["reguser"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["reguser"], "id", array()), "html", null, true);
            echo "</label>
                        </td>
                        <td class=\"table-cell users_avatar\">
                            <img class=\"admin_speakers_avatar\" id=\"";
            // line 126
            echo twig_escape_filter($this->env, $this->getAttribute($context["reguser"], "avatar", array()), "html", null, true);
            echo "\" src=\"/images/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["reguser"], "avatar", array()), "html", null, true);
            echo "\"/>
                        </td>
                        <td class=\"table-cell users_tbl_fio\">
                            <input type=\"text\" class=\"form-control\" readonly value=\"";
            // line 129
            echo twig_escape_filter($this->env, $this->getAttribute($context["reguser"], "fio", array()), "html", null, true);
            echo "\"/>
                        </td>
                        <td class=\"table-cell users_tbl_org\">
                            <input type=\"text\" class=\"form-control\" readonly value=\"";
            // line 132
            echo twig_escape_filter($this->env, $this->getAttribute($context["reguser"], "work", array()), "html", null, true);
            echo "\" />
                        </td>
                        <td class=\"table-cell users_tbl_position\">
                            <input type=\"text\" class=\"form-control\" readonly value=\"";
            // line 135
            echo twig_escape_filter($this->env, $this->getAttribute($context["reguser"], "position", array()), "html", null, true);
            echo "\"/>
                        </td>
                        <td class=\"table-cell users_tbl_email\">
                            <input type=\"text\" class=\"form-control\" readonly value=\"";
            // line 138
            echo twig_escape_filter($this->env, $this->getAttribute($context["reguser"], "email", array()), "html", null, true);
            echo "\"/>
                        </td>
                        <td class=\"table-cell users_tbl_password\">
                            <input type=\"text\" class=\"form-control\" readonly value=\"";
            // line 141
            echo twig_escape_filter($this->env, $this->getAttribute($context["reguser"], "password", array()), "html", null, true);
            echo "\"/>
                        </td>
                        <td class=\"table-cell\" style=\"padding-top: 12px; width:4%;\">
                            <button title=\"Сохранить изменения\" type=\"button\" class=\"btn btn-default btnApplyChange\" disabled><span class=\"glyphicon glyphicon-ok\"></span></button>
                            <button title=\"Отменить изменения\" type=\"button\" class=\"btn btn-default btnCancelChange\" disabled><span class=\"glyphicon glyphicon-remove\"></span></button>
                            <button title=\"Внести изменения\" type=\"button\" class=\"btn btn-default btnDoChange\"><span class=\"glyphicon glyphicon-pencil\"></span></button>
                        </td>
                    </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reguser'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 150
        echo "                </table>
            </div>

        </div>
    </div>

</div>";
        
        $__internal_978ddd5d99c2d97c16005030c00a37c842ebd1ac53f3e64fcb6a3cfaf01c51c0->leave($__internal_978ddd5d99c2d97c16005030c00a37c842ebd1ac53f3e64fcb6a3cfaf01c51c0_prof);

    }

    public function getTemplateName()
    {
        return "webinars/admin.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  279 => 150,  264 => 141,  258 => 138,  252 => 135,  246 => 132,  240 => 129,  232 => 126,  224 => 123,  220 => 121,  216 => 120,  199 => 105,  184 => 96,  175 => 90,  167 => 87,  159 => 84,  155 => 82,  151 => 81,  136 => 68,  121 => 59,  115 => 56,  107 => 53,  101 => 52,  95 => 51,  82 => 41,  70 => 32,  63 => 28,  55 => 25,  49 => 23,  45 => 22,  22 => 1,);
    }
}

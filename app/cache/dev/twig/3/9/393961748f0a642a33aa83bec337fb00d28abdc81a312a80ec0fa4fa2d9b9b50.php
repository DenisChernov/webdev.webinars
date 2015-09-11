<?php

/* webinars/reg_users.html */
class __TwigTemplate_393961748f0a642a33aa83bec337fb00d28abdc81a312a80ec0fa4fa2d9b9b50 extends Twig_Template
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
        $__internal_b0fc3a13d0dce71590937ea13f2a640373f89bf248001dff502306365bb2b37d = $this->env->getExtension("native_profiler");
        $__internal_b0fc3a13d0dce71590937ea13f2a640373f89bf248001dff502306365bb2b37d->enter($__internal_b0fc3a13d0dce71590937ea13f2a640373f89bf248001dff502306365bb2b37d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "webinars/reg_users.html"));

        // line 1
        echo "<a href=\"#\" class=\"view_full_info\">
    <div class=\"reg_user_block table\">
        <div class=\"user_picture table-row animated_tablerow\">
            <img class=\"user_avatar\" src=\"/uploads/";
        // line 4
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "avatar", array()), "html", null, true);
        echo "\" />
        </div>
        <div class=\"user_bio table-row\">
            <div class=\"user_fio\">
                <span class=\"link_view_full_info\">";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "fio", array()), "html", null, true);
        echo "</span>
            </div>
            <div class=\"user_work\">
                <span class=\"link_view_full_info\">";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "position", array()), "html", null, true);
        echo " в ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "work", array()), "html", null, true);
        echo "</span>
            </div>
        </div>
    </div>
</a>
";
        
        $__internal_b0fc3a13d0dce71590937ea13f2a640373f89bf248001dff502306365bb2b37d->leave($__internal_b0fc3a13d0dce71590937ea13f2a640373f89bf248001dff502306365bb2b37d_prof);

    }

    public function getTemplateName()
    {
        return "webinars/reg_users.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 11,  34 => 8,  27 => 4,  22 => 1,);
    }
}

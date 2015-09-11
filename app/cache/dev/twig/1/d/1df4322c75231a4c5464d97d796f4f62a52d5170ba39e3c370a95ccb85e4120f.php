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
        $__internal_1ab16fc6c6d4ccd6b93b270ce018e6db46efb8ad2e6cef33af2fbeed38276d96 = $this->env->getExtension("native_profiler");
        $__internal_1ab16fc6c6d4ccd6b93b270ce018e6db46efb8ad2e6cef33af2fbeed38276d96->enter($__internal_1ab16fc6c6d4ccd6b93b270ce018e6db46efb8ad2e6cef33af2fbeed38276d96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "webinars/admin.html"));

        // line 1
        echo "<div class=\"admin_page\">

    <ul class=\"nav nav-tabs\">
        <li class=\"active\"><a href=\"#tab_webinars\" data-toggle=\"tab\">Вебинары</a></li>
        <li><a href=\"#tab_speakers\" data-toggle=\"tab\">Спикеры</a></li>
        <li><a href=\"#tab_users\" data-toggle=\"tab\">Участники</a></li>
    </ul>

    <!-- Tab panes -->
    <div class=\"tab-content\">
        <div class=\"tab-pane fade active\" id=\"tab_webinars\">
            ";
        // line 12
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["webinars"]) ? $context["webinars"] : $this->getContext($context, "webinars")));
        foreach ($context['_seq'] as $context["_key"] => $context["webinar"]) {
            // line 13
            echo "                ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["webinar"], "title", array()), "html", null, true);
            echo "
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['webinar'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "        </div>
        <div class=\"tab-pane fade\" id=\"tab_speakers\">
            <div class=\"table-responsive\">
                <div class=\"table\">
                    <div class=\"table-caption\">
                        ";
        // line 20
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["speakers"]) ? $context["speakers"] : $this->getContext($context, "speakers")));
        foreach ($context['_seq'] as $context["_key"] => $context["speaker"]) {
            // line 21
            echo "                        <div class=\"table-cell\">
                            ";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["speaker"], "fio", array()), "html", null, true);
            echo "
                        </div>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['speaker'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "                    </div>
                </div>
            </div>
        </div>
        <div class=\"tab-pane fade\" id=\"tab_users\">

        </div>
    </div>

</div>";
        
        $__internal_1ab16fc6c6d4ccd6b93b270ce018e6db46efb8ad2e6cef33af2fbeed38276d96->leave($__internal_1ab16fc6c6d4ccd6b93b270ce018e6db46efb8ad2e6cef33af2fbeed38276d96_prof);

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
        return array (  71 => 25,  62 => 22,  59 => 21,  55 => 20,  48 => 15,  39 => 13,  35 => 12,  22 => 1,);
    }
}

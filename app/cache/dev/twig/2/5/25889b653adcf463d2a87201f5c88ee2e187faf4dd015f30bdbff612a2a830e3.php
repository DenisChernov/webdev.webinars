<?php

/* webinars/webinars.html.twig */
class __TwigTemplate_25889b653adcf463d2a87201f5c88ee2e187faf4dd015f30bdbff612a2a830e3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("base.html.twig", "webinars/webinars.html.twig", 3);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1e4da1fc3bfb3af3f1fea2fb64e0ec7a387e2a32b6753ce71311f468b59bc5ce = $this->env->getExtension("native_profiler");
        $__internal_1e4da1fc3bfb3af3f1fea2fb64e0ec7a387e2a32b6753ce71311f468b59bc5ce->enter($__internal_1e4da1fc3bfb3af3f1fea2fb64e0ec7a387e2a32b6753ce71311f468b59bc5ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "webinars/webinars.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1e4da1fc3bfb3af3f1fea2fb64e0ec7a387e2a32b6753ce71311f468b59bc5ce->leave($__internal_1e4da1fc3bfb3af3f1fea2fb64e0ec7a387e2a32b6753ce71311f468b59bc5ce_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_dc059ecadd062e5d0251cb1bdca76270c292d4995a0f0a92712118f13b646c79 = $this->env->getExtension("native_profiler");
        $__internal_dc059ecadd062e5d0251cb1bdca76270c292d4995a0f0a92712118f13b646c79->enter($__internal_dc059ecadd062e5d0251cb1bdca76270c292d4995a0f0a92712118f13b646c79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    ";
        // line 7
        echo "    ";
        $this->loadTemplate("webinars/form_register.html", "webinars/webinars.html.twig", 7)->display($context);
        // line 8
        echo "    ";
        // line 9
        echo "
";
        // line 11
        echo "    ";
        $this->loadTemplate("webinars/header_mnu.html", "webinars/webinars.html.twig", 11)->display($context);
        // line 13
        echo "
";
        // line 15
        echo "    <div class=\"first_page\" id=\"main\">
        ";
        // line 17
        echo "        ";
        $this->loadTemplate("webinars/background_vide.html", "webinars/webinars.html.twig", 17)->display($context);
        // line 18
        echo "        ";
        // line 19
        echo "
    ";
        // line 20
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["webinars"]) ? $context["webinars"] : $this->getContext($context, "webinars")));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["webinar"]) {
            // line 21
            echo "        ";
            $this->loadTemplate("webinars/webinar_title.html", "webinars/webinars.html.twig", 21)->display(array_merge($context, array("webinar" => $context["webinar"])));
            // line 22
            echo "    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['webinar'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "    </div>
";
        // line 26
        echo "    <div class=\"comming_webinar_page\" id=\"comming_webinar\">
        <div class=\"animated_show_visible\">
        ";
        // line 28
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["webinars"]) ? $context["webinars"] : $this->getContext($context, "webinars")));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["webinar"]) {
            // line 29
            echo "            ";
            if (($this->getAttribute($context["webinar"], "registerStatus", array()) == 0)) {
                // line 30
                echo "                <div class=\"webinar_description\">
                    <div class=\"webinar_iscomming_header\">
                        <p class=\"webinar_iscomming\">Вебинар скоро начнется!</p>
                        <hr class=\"hr_fio\">
                    </div>
                    ";
                // line 35
                $this->loadTemplate("webinars/comming_webinar.html", "webinars/webinars.html.twig", 35)->display(array_merge($context, array("webinar" => $context["webinar"])));
                // line 36
                echo "                </div>
            ";
            } elseif (($this->getAttribute(            // line 37
$context["webinar"], "registerStatus", array()) == 1)) {
                // line 38
                echo "                <div class=\"webinar_description\">
                    <div class=\"webinar_inprogress_header\">
                        <p class=\"webinar_inprogress\">Вебинар уже идет!</p>
                        <hr class=\"hr_fio\">
                    </div>
                    ";
                // line 43
                $this->loadTemplate("webinars/comming_webinar.html", "webinars/webinars.html.twig", 43)->display(array_merge($context, array("webinar" => $context["webinar"])));
                // line 44
                echo "                </div>
            ";
            }
            // line 46
            echo "        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['webinar'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "        </div>
    </div>
";
        // line 51
        echo "    <div class=\"second_page\" id=\"speakers\">
        ";
        // line 52
        $this->loadTemplate("webinars/block_header.html", "webinars/webinars.html.twig", 52)->display(array_merge($context, array("header" => "Список докладчиков", "color" => "white")));
        // line 53
        echo "        <div class=\"speakers_data\">
            ";
        // line 54
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["speakers"]) ? $context["speakers"] : $this->getContext($context, "speakers")));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["speaker"]) {
            // line 55
            echo "                ";
            $this->loadTemplate("webinars/webinar_speakers.html", "webinars/webinars.html.twig", 55)->display(array_merge($context, array("speaker" => $context["speaker"])));
            // line 56
            echo "            ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['speaker'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
        echo "        </div>
    </div>
";
        // line 60
        echo "
";
        // line 62
        echo "    <div class=\"third_page\" id=\"listeners\">
        <div class=\"reg_user_header\">
            <p class=\"registered_users\">Зарегистрированные участники</p>
            <hr class=\"hr_fio\">
        </div>
        <div class=\"users_who_come\">
            ";
        // line 68
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) ? $context["users"] : $this->getContext($context, "users")));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 69
            echo "                ";
            $this->loadTemplate("webinars/reg_users.html", "webinars/webinars.html.twig", 69)->display(array_merge($context, array("user" => $context["user"])));
            // line 70
            echo "            ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 71
        echo "        <div>
    </div>
";
        
        $__internal_dc059ecadd062e5d0251cb1bdca76270c292d4995a0f0a92712118f13b646c79->leave($__internal_dc059ecadd062e5d0251cb1bdca76270c292d4995a0f0a92712118f13b646c79_prof);

    }

    public function getTemplateName()
    {
        return "webinars/webinars.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  264 => 71,  250 => 70,  247 => 69,  230 => 68,  222 => 62,  219 => 60,  215 => 57,  201 => 56,  198 => 55,  181 => 54,  178 => 53,  176 => 52,  173 => 51,  169 => 47,  155 => 46,  151 => 44,  149 => 43,  142 => 38,  140 => 37,  137 => 36,  135 => 35,  128 => 30,  125 => 29,  108 => 28,  104 => 26,  101 => 23,  87 => 22,  84 => 21,  67 => 20,  64 => 19,  62 => 18,  59 => 17,  56 => 15,  53 => 13,  50 => 11,  47 => 9,  45 => 8,  42 => 7,  40 => 6,  34 => 5,  11 => 3,);
    }
}

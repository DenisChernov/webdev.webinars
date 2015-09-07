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
        $__internal_8202257abedcc81b44a8e116821c15a2076bd47d4eedac79526ea71695a7c124 = $this->env->getExtension("native_profiler");
        $__internal_8202257abedcc81b44a8e116821c15a2076bd47d4eedac79526ea71695a7c124->enter($__internal_8202257abedcc81b44a8e116821c15a2076bd47d4eedac79526ea71695a7c124_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "webinars/webinars.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8202257abedcc81b44a8e116821c15a2076bd47d4eedac79526ea71695a7c124->leave($__internal_8202257abedcc81b44a8e116821c15a2076bd47d4eedac79526ea71695a7c124_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_702c8b078a01ae947a68d7f9aa8d3edf4821e4856ab12a6cf64325aeb1a74c0b = $this->env->getExtension("native_profiler");
        $__internal_702c8b078a01ae947a68d7f9aa8d3edf4821e4856ab12a6cf64325aeb1a74c0b->enter($__internal_702c8b078a01ae947a68d7f9aa8d3edf4821e4856ab12a6cf64325aeb1a74c0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        // line 25
        echo "
";
        // line 27
        echo "    <div class=\"second_page\" id=\"speakers\">
        <div class=\"speakers_data\">
            ";
        // line 29
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
            // line 30
            echo "                ";
            $this->loadTemplate("webinars/webinar_speakers.html", "webinars/webinars.html.twig", 30)->display(array_merge($context, array("speaker" => $context["speaker"])));
            // line 31
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
        // line 32
        echo "        </div>
    </div>
";
        // line 35
        echo "
";
        // line 37
        echo "    <div class=\"third_page\">
        <div class=\"users_who_come\">
            ";
        // line 39
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
            // line 40
            echo "                ";
            $this->loadTemplate("webinars/reg_users.html", "webinars/webinars.html.twig", 40)->display(array_merge($context, array("user" => $context["user"])));
            // line 41
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
        // line 42
        echo "        <div>
    </div>
";
        // line 45
        echo "

";
        
        $__internal_702c8b078a01ae947a68d7f9aa8d3edf4821e4856ab12a6cf64325aeb1a74c0b->leave($__internal_702c8b078a01ae947a68d7f9aa8d3edf4821e4856ab12a6cf64325aeb1a74c0b_prof);

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
        return array (  194 => 45,  190 => 42,  176 => 41,  173 => 40,  156 => 39,  152 => 37,  149 => 35,  145 => 32,  131 => 31,  128 => 30,  111 => 29,  107 => 27,  104 => 25,  101 => 23,  87 => 22,  84 => 21,  67 => 20,  64 => 19,  62 => 18,  59 => 17,  56 => 15,  53 => 13,  50 => 11,  47 => 9,  45 => 8,  42 => 7,  40 => 6,  34 => 5,  11 => 3,);
    }
}

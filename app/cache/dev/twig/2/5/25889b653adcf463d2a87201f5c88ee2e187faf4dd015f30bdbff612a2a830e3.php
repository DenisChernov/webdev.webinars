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
        $__internal_4911afa1853154fb75f58972d095bc0e0ad020fe26d05874f1239abee2e1b7b5 = $this->env->getExtension("native_profiler");
        $__internal_4911afa1853154fb75f58972d095bc0e0ad020fe26d05874f1239abee2e1b7b5->enter($__internal_4911afa1853154fb75f58972d095bc0e0ad020fe26d05874f1239abee2e1b7b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "webinars/webinars.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4911afa1853154fb75f58972d095bc0e0ad020fe26d05874f1239abee2e1b7b5->leave($__internal_4911afa1853154fb75f58972d095bc0e0ad020fe26d05874f1239abee2e1b7b5_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_6281ec744c34cfdd6018190839477f511dbc1dbfde733335f3bf7f7c586c84f3 = $this->env->getExtension("native_profiler");
        $__internal_6281ec744c34cfdd6018190839477f511dbc1dbfde733335f3bf7f7c586c84f3->enter($__internal_6281ec744c34cfdd6018190839477f511dbc1dbfde733335f3bf7f7c586c84f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "    ";
        $this->loadTemplate("webinars/header_mnu.html", "webinars/webinars.html.twig", 7)->display($context);
        // line 9
        echo "
";
        // line 11
        echo "    <div class=\"first_page\">
        ";
        // line 13
        echo "        ";
        $this->loadTemplate("webinars/background_vide.html", "webinars/webinars.html.twig", 13)->display($context);
        // line 14
        echo "        ";
        // line 15
        echo "
    ";
        // line 16
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
            // line 17
            echo "        ";
            $this->loadTemplate("webinars/webinar_title.html", "webinars/webinars.html.twig", 17)->display(array_merge($context, array("webinar" => $context["webinar"])));
            // line 18
            echo "
    ";
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
        // line 20
        echo "    </div>
";
        // line 22
        echo "
";
        // line 24
        echo "    <div class=\"second_page\">
        <div class=\"speakers_data\">
            ";
        // line 26
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
            // line 27
            echo "                ";
            $this->loadTemplate("webinars/webinar_speakers.html", "webinars/webinars.html.twig", 27)->display(array_merge($context, array("speaker" => $context["speaker"])));
            // line 28
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
        // line 29
        echo "        </div>
    </div>
";
        // line 32
        echo "
";
        // line 34
        echo "    <div class=\"third_page\">
        12345
    </div>
";
        // line 38
        echo "
";
        
        $__internal_6281ec744c34cfdd6018190839477f511dbc1dbfde733335f3bf7f7c586c84f3->leave($__internal_6281ec744c34cfdd6018190839477f511dbc1dbfde733335f3bf7f7c586c84f3_prof);

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
        return array (  148 => 38,  143 => 34,  140 => 32,  136 => 29,  122 => 28,  119 => 27,  102 => 26,  98 => 24,  95 => 22,  92 => 20,  77 => 18,  74 => 17,  57 => 16,  54 => 15,  52 => 14,  49 => 13,  46 => 11,  43 => 9,  40 => 7,  34 => 5,  11 => 3,);
    }
}

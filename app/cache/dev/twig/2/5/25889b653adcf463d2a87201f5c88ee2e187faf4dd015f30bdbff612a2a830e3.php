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
        $__internal_a813db4a96d737157cf1397d79d5e2831054209be39b7ab931d7c3c366f973b3 = $this->env->getExtension("native_profiler");
        $__internal_a813db4a96d737157cf1397d79d5e2831054209be39b7ab931d7c3c366f973b3->enter($__internal_a813db4a96d737157cf1397d79d5e2831054209be39b7ab931d7c3c366f973b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "webinars/webinars.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a813db4a96d737157cf1397d79d5e2831054209be39b7ab931d7c3c366f973b3->leave($__internal_a813db4a96d737157cf1397d79d5e2831054209be39b7ab931d7c3c366f973b3_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_9c8dc32fcae4f0abc911c897030989a50a024ebfc9c6bf4b42f0f3ce184501ef = $this->env->getExtension("native_profiler");
        $__internal_9c8dc32fcae4f0abc911c897030989a50a024ebfc9c6bf4b42f0f3ce184501ef->enter($__internal_9c8dc32fcae4f0abc911c897030989a50a024ebfc9c6bf4b42f0f3ce184501ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
";
        // line 10
        echo "
";
        // line 12
        echo "    ";
        $this->loadTemplate("webinars/header_mnu.html", "webinars/webinars.html.twig", 12)->display($context);
        // line 14
        echo "
";
        // line 16
        echo "    <div class=\"first_page\">
    ";
        // line 17
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
            // line 18
            echo "        ";
            $this->loadTemplate("webinars/webinar_title.html", "webinars/webinars.html.twig", 18)->display(array_merge($context, array("webinar" => $context["webinar"])));
            // line 19
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
        // line 21
        echo "    </div>
";
        
        $__internal_9c8dc32fcae4f0abc911c897030989a50a024ebfc9c6bf4b42f0f3ce184501ef->leave($__internal_9c8dc32fcae4f0abc911c897030989a50a024ebfc9c6bf4b42f0f3ce184501ef_prof);

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
        return array (  90 => 21,  75 => 19,  72 => 18,  55 => 17,  52 => 16,  49 => 14,  46 => 12,  43 => 10,  40 => 6,  34 => 5,  11 => 3,);
    }
}

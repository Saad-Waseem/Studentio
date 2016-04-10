<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_1917edee910d2f89dfb19ee5d473acc86e95ddd5946a271ece0d79dd89483d47 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a61eb2656f859d5474b4eb2303b12470a8e75b33de8fa1c559eeb224f3edd706 = $this->env->getExtension("native_profiler");
        $__internal_a61eb2656f859d5474b4eb2303b12470a8e75b33de8fa1c559eeb224f3edd706->enter($__internal_a61eb2656f859d5474b4eb2303b12470a8e75b33de8fa1c559eeb224f3edd706_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a61eb2656f859d5474b4eb2303b12470a8e75b33de8fa1c559eeb224f3edd706->leave($__internal_a61eb2656f859d5474b4eb2303b12470a8e75b33de8fa1c559eeb224f3edd706_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_47ae2c474fd336cdc38eab57fbf7b9e6d04ac12359c5393bf3aadccc7d98d54c = $this->env->getExtension("native_profiler");
        $__internal_47ae2c474fd336cdc38eab57fbf7b9e6d04ac12359c5393bf3aadccc7d98d54c->enter($__internal_47ae2c474fd336cdc38eab57fbf7b9e6d04ac12359c5393bf3aadccc7d98d54c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_47ae2c474fd336cdc38eab57fbf7b9e6d04ac12359c5393bf3aadccc7d98d54c->leave($__internal_47ae2c474fd336cdc38eab57fbf7b9e6d04ac12359c5393bf3aadccc7d98d54c_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_663b8f4ebe2bb78d847630e6f2652e1a734a6696a8ab4faf339ebb66a592ea77 = $this->env->getExtension("native_profiler");
        $__internal_663b8f4ebe2bb78d847630e6f2652e1a734a6696a8ab4faf339ebb66a592ea77->enter($__internal_663b8f4ebe2bb78d847630e6f2652e1a734a6696a8ab4faf339ebb66a592ea77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_663b8f4ebe2bb78d847630e6f2652e1a734a6696a8ab4faf339ebb66a592ea77->leave($__internal_663b8f4ebe2bb78d847630e6f2652e1a734a6696a8ab4faf339ebb66a592ea77_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_47f222ad52c5df2f2d69452d070cab3cf5d1d43317babf1a24f5c3265d4f2a32 = $this->env->getExtension("native_profiler");
        $__internal_47f222ad52c5df2f2d69452d070cab3cf5d1d43317babf1a24f5c3265d4f2a32->enter($__internal_47f222ad52c5df2f2d69452d070cab3cf5d1d43317babf1a24f5c3265d4f2a32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_47f222ad52c5df2f2d69452d070cab3cf5d1d43317babf1a24f5c3265d4f2a32->leave($__internal_47f222ad52c5df2f2d69452d070cab3cf5d1d43317babf1a24f5c3265d4f2a32_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */

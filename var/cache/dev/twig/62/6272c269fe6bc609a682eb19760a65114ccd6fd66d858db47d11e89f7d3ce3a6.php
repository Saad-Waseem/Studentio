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
        $__internal_57d781d5df94a21d109f7f697427a433f6959a2e48f402bef1d9fdcf4150f56b = $this->env->getExtension("native_profiler");
        $__internal_57d781d5df94a21d109f7f697427a433f6959a2e48f402bef1d9fdcf4150f56b->enter($__internal_57d781d5df94a21d109f7f697427a433f6959a2e48f402bef1d9fdcf4150f56b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_57d781d5df94a21d109f7f697427a433f6959a2e48f402bef1d9fdcf4150f56b->leave($__internal_57d781d5df94a21d109f7f697427a433f6959a2e48f402bef1d9fdcf4150f56b_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_a0b570a97bc2e75d9c30697155b65c1b2d4b29bef9621c87ccf1d98601028d31 = $this->env->getExtension("native_profiler");
        $__internal_a0b570a97bc2e75d9c30697155b65c1b2d4b29bef9621c87ccf1d98601028d31->enter($__internal_a0b570a97bc2e75d9c30697155b65c1b2d4b29bef9621c87ccf1d98601028d31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_a0b570a97bc2e75d9c30697155b65c1b2d4b29bef9621c87ccf1d98601028d31->leave($__internal_a0b570a97bc2e75d9c30697155b65c1b2d4b29bef9621c87ccf1d98601028d31_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_4c1afe9ffee4b6e87e24e82feaa3ae03c0c55193f7cfca4e82b4c13d8423a742 = $this->env->getExtension("native_profiler");
        $__internal_4c1afe9ffee4b6e87e24e82feaa3ae03c0c55193f7cfca4e82b4c13d8423a742->enter($__internal_4c1afe9ffee4b6e87e24e82feaa3ae03c0c55193f7cfca4e82b4c13d8423a742_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_4c1afe9ffee4b6e87e24e82feaa3ae03c0c55193f7cfca4e82b4c13d8423a742->leave($__internal_4c1afe9ffee4b6e87e24e82feaa3ae03c0c55193f7cfca4e82b4c13d8423a742_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_87ea1b6c7cf926865bd8806529e5061beddafcea669c3d077abc2a68b2a4c9f7 = $this->env->getExtension("native_profiler");
        $__internal_87ea1b6c7cf926865bd8806529e5061beddafcea669c3d077abc2a68b2a4c9f7->enter($__internal_87ea1b6c7cf926865bd8806529e5061beddafcea669c3d077abc2a68b2a4c9f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_87ea1b6c7cf926865bd8806529e5061beddafcea669c3d077abc2a68b2a4c9f7->leave($__internal_87ea1b6c7cf926865bd8806529e5061beddafcea669c3d077abc2a68b2a4c9f7_prof);

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

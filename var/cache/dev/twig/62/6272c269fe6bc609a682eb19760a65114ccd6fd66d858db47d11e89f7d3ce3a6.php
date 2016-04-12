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
        $__internal_cddfd3d6617fe9a4e47dae32eb3d09e4cd1af0e25a96f64aa969ea875a69e7fe = $this->env->getExtension("native_profiler");
        $__internal_cddfd3d6617fe9a4e47dae32eb3d09e4cd1af0e25a96f64aa969ea875a69e7fe->enter($__internal_cddfd3d6617fe9a4e47dae32eb3d09e4cd1af0e25a96f64aa969ea875a69e7fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cddfd3d6617fe9a4e47dae32eb3d09e4cd1af0e25a96f64aa969ea875a69e7fe->leave($__internal_cddfd3d6617fe9a4e47dae32eb3d09e4cd1af0e25a96f64aa969ea875a69e7fe_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_461b0e7df6a4ddead9a6a344ee0948b54f03a8284ff752051ce33f1e8026244a = $this->env->getExtension("native_profiler");
        $__internal_461b0e7df6a4ddead9a6a344ee0948b54f03a8284ff752051ce33f1e8026244a->enter($__internal_461b0e7df6a4ddead9a6a344ee0948b54f03a8284ff752051ce33f1e8026244a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_461b0e7df6a4ddead9a6a344ee0948b54f03a8284ff752051ce33f1e8026244a->leave($__internal_461b0e7df6a4ddead9a6a344ee0948b54f03a8284ff752051ce33f1e8026244a_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_3cbcd5a10fd395557397322615c044bcfd6c312f4cee44c6db4ee933146c2d05 = $this->env->getExtension("native_profiler");
        $__internal_3cbcd5a10fd395557397322615c044bcfd6c312f4cee44c6db4ee933146c2d05->enter($__internal_3cbcd5a10fd395557397322615c044bcfd6c312f4cee44c6db4ee933146c2d05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_3cbcd5a10fd395557397322615c044bcfd6c312f4cee44c6db4ee933146c2d05->leave($__internal_3cbcd5a10fd395557397322615c044bcfd6c312f4cee44c6db4ee933146c2d05_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_90a6310e6d738324744edfe8bd6e126a972f05dfe0aef4ae93bf22f94550cd15 = $this->env->getExtension("native_profiler");
        $__internal_90a6310e6d738324744edfe8bd6e126a972f05dfe0aef4ae93bf22f94550cd15->enter($__internal_90a6310e6d738324744edfe8bd6e126a972f05dfe0aef4ae93bf22f94550cd15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_90a6310e6d738324744edfe8bd6e126a972f05dfe0aef4ae93bf22f94550cd15->leave($__internal_90a6310e6d738324744edfe8bd6e126a972f05dfe0aef4ae93bf22f94550cd15_prof);

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

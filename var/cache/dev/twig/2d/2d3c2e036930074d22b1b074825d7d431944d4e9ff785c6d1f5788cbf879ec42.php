<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_ae8f0f10d33e06dd788ae644ff29cbd14fa691a6d8900f28874f65e1aa8c5d78 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0a3cc75cd176bfd6f1afa8a57681daf65aa01bf685c12011711f18a3410d3e54 = $this->env->getExtension("native_profiler");
        $__internal_0a3cc75cd176bfd6f1afa8a57681daf65aa01bf685c12011711f18a3410d3e54->enter($__internal_0a3cc75cd176bfd6f1afa8a57681daf65aa01bf685c12011711f18a3410d3e54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0a3cc75cd176bfd6f1afa8a57681daf65aa01bf685c12011711f18a3410d3e54->leave($__internal_0a3cc75cd176bfd6f1afa8a57681daf65aa01bf685c12011711f18a3410d3e54_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_d533afe9906a0d7e60413ded1963f6bd29693f611e06540abe577e3e8478c143 = $this->env->getExtension("native_profiler");
        $__internal_d533afe9906a0d7e60413ded1963f6bd29693f611e06540abe577e3e8478c143->enter($__internal_d533afe9906a0d7e60413ded1963f6bd29693f611e06540abe577e3e8478c143_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_d533afe9906a0d7e60413ded1963f6bd29693f611e06540abe577e3e8478c143->leave($__internal_d533afe9906a0d7e60413ded1963f6bd29693f611e06540abe577e3e8478c143_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_39f84cb25e5396b658fe0a1ada08a0b2017bc51aa3e66c5bf1b4caf371a78b40 = $this->env->getExtension("native_profiler");
        $__internal_39f84cb25e5396b658fe0a1ada08a0b2017bc51aa3e66c5bf1b4caf371a78b40->enter($__internal_39f84cb25e5396b658fe0a1ada08a0b2017bc51aa3e66c5bf1b4caf371a78b40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_39f84cb25e5396b658fe0a1ada08a0b2017bc51aa3e66c5bf1b4caf371a78b40->leave($__internal_39f84cb25e5396b658fe0a1ada08a0b2017bc51aa3e66c5bf1b4caf371a78b40_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_257d0b45a9c80d59ecffd0362ad7ade0d9da658e57e2e04d1eeadbd4d4edb8c1 = $this->env->getExtension("native_profiler");
        $__internal_257d0b45a9c80d59ecffd0362ad7ade0d9da658e57e2e04d1eeadbd4d4edb8c1->enter($__internal_257d0b45a9c80d59ecffd0362ad7ade0d9da658e57e2e04d1eeadbd4d4edb8c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_257d0b45a9c80d59ecffd0362ad7ade0d9da658e57e2e04d1eeadbd4d4edb8c1->leave($__internal_257d0b45a9c80d59ecffd0362ad7ade0d9da658e57e2e04d1eeadbd4d4edb8c1_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */

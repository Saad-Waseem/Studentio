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
        $__internal_ee964ab200a8ff724253e42eabce22c03b0f697293ccc7b83d93f85994dab56e = $this->env->getExtension("native_profiler");
        $__internal_ee964ab200a8ff724253e42eabce22c03b0f697293ccc7b83d93f85994dab56e->enter($__internal_ee964ab200a8ff724253e42eabce22c03b0f697293ccc7b83d93f85994dab56e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ee964ab200a8ff724253e42eabce22c03b0f697293ccc7b83d93f85994dab56e->leave($__internal_ee964ab200a8ff724253e42eabce22c03b0f697293ccc7b83d93f85994dab56e_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_a24d4fc9e5209fbac827981f2e08744d2f7a1a8817b80367efc6ac01e532a2b9 = $this->env->getExtension("native_profiler");
        $__internal_a24d4fc9e5209fbac827981f2e08744d2f7a1a8817b80367efc6ac01e532a2b9->enter($__internal_a24d4fc9e5209fbac827981f2e08744d2f7a1a8817b80367efc6ac01e532a2b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_a24d4fc9e5209fbac827981f2e08744d2f7a1a8817b80367efc6ac01e532a2b9->leave($__internal_a24d4fc9e5209fbac827981f2e08744d2f7a1a8817b80367efc6ac01e532a2b9_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_a174aa96a5c760cd1ff492441c63cddabd77da442f699ef2e4cf122b08ad76f7 = $this->env->getExtension("native_profiler");
        $__internal_a174aa96a5c760cd1ff492441c63cddabd77da442f699ef2e4cf122b08ad76f7->enter($__internal_a174aa96a5c760cd1ff492441c63cddabd77da442f699ef2e4cf122b08ad76f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_a174aa96a5c760cd1ff492441c63cddabd77da442f699ef2e4cf122b08ad76f7->leave($__internal_a174aa96a5c760cd1ff492441c63cddabd77da442f699ef2e4cf122b08ad76f7_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_988032d06df260803a6c8b232ac838a8c4a1131f6b9bc7737ed0762ddc398b96 = $this->env->getExtension("native_profiler");
        $__internal_988032d06df260803a6c8b232ac838a8c4a1131f6b9bc7737ed0762ddc398b96->enter($__internal_988032d06df260803a6c8b232ac838a8c4a1131f6b9bc7737ed0762ddc398b96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_988032d06df260803a6c8b232ac838a8c4a1131f6b9bc7737ed0762ddc398b96->leave($__internal_988032d06df260803a6c8b232ac838a8c4a1131f6b9bc7737ed0762ddc398b96_prof);

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

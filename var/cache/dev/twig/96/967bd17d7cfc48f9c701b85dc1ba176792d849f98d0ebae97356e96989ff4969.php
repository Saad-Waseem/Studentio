<?php

/* base.html.twig */
class __TwigTemplate_bdcfeba1c7f3dbd4834d9ef5266bd2b56a890fd6eaedc8b2c5e4dac24264f3cb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c537c2f5f14b3999daa5abdd00aecbcef708840c8935c79af9e34ebacee7af76 = $this->env->getExtension("native_profiler");
        $__internal_c537c2f5f14b3999daa5abdd00aecbcef708840c8935c79af9e34ebacee7af76->enter($__internal_c537c2f5f14b3999daa5abdd00aecbcef708840c8935c79af9e34ebacee7af76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_c537c2f5f14b3999daa5abdd00aecbcef708840c8935c79af9e34ebacee7af76->leave($__internal_c537c2f5f14b3999daa5abdd00aecbcef708840c8935c79af9e34ebacee7af76_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_48f3a927582ad75e6b9f6f1285c289dd13977b5b84ed460a1639cbd3f6ba968f = $this->env->getExtension("native_profiler");
        $__internal_48f3a927582ad75e6b9f6f1285c289dd13977b5b84ed460a1639cbd3f6ba968f->enter($__internal_48f3a927582ad75e6b9f6f1285c289dd13977b5b84ed460a1639cbd3f6ba968f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_48f3a927582ad75e6b9f6f1285c289dd13977b5b84ed460a1639cbd3f6ba968f->leave($__internal_48f3a927582ad75e6b9f6f1285c289dd13977b5b84ed460a1639cbd3f6ba968f_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_2a6db6391c141899afaa25963ca43c70af31e43eaaf5bcbe3e98264bee3275c0 = $this->env->getExtension("native_profiler");
        $__internal_2a6db6391c141899afaa25963ca43c70af31e43eaaf5bcbe3e98264bee3275c0->enter($__internal_2a6db6391c141899afaa25963ca43c70af31e43eaaf5bcbe3e98264bee3275c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_2a6db6391c141899afaa25963ca43c70af31e43eaaf5bcbe3e98264bee3275c0->leave($__internal_2a6db6391c141899afaa25963ca43c70af31e43eaaf5bcbe3e98264bee3275c0_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_9d13fc3f03e59d6132c3805fe1e293c27acfea7b9e1b504957a783aa9b5826aa = $this->env->getExtension("native_profiler");
        $__internal_9d13fc3f03e59d6132c3805fe1e293c27acfea7b9e1b504957a783aa9b5826aa->enter($__internal_9d13fc3f03e59d6132c3805fe1e293c27acfea7b9e1b504957a783aa9b5826aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_9d13fc3f03e59d6132c3805fe1e293c27acfea7b9e1b504957a783aa9b5826aa->leave($__internal_9d13fc3f03e59d6132c3805fe1e293c27acfea7b9e1b504957a783aa9b5826aa_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_8cda2ef1bfa69a387d2e9742eedc7c34940797f4954f2f489110020e82255a9d = $this->env->getExtension("native_profiler");
        $__internal_8cda2ef1bfa69a387d2e9742eedc7c34940797f4954f2f489110020e82255a9d->enter($__internal_8cda2ef1bfa69a387d2e9742eedc7c34940797f4954f2f489110020e82255a9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_8cda2ef1bfa69a387d2e9742eedc7c34940797f4954f2f489110020e82255a9d->leave($__internal_8cda2ef1bfa69a387d2e9742eedc7c34940797f4954f2f489110020e82255a9d_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */

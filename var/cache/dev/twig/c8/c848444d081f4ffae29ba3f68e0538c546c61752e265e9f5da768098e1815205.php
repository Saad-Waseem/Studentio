<?php

/* base.html.php */
class __TwigTemplate_5adf7b572209549e90e04d5b1c1f9eb1aa13adfdb684522b69832dc80ce97a3c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!-- app/Resources/views/base.html.php -->
<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title><?php \$view['slots']->output('title', 'Test Application') ?></title>
    </head>
    <body>
        <div id=\"sidebar\">
            <?php if (\$view['slots']->has('sidebar')): ?>
                <?php \$view['slots']->output('sidebar') ?>
            <?php else: ?>
                <ul>
                    <li><a href=\"/\">Home</a></li>
                    <li><a href=\"/blog\">Blog</a></li>
                </ul>
            <?php endif ?>
        </div>

        <div id=\"content\">
            <?php \$view['slots']->output('body') ?>
        </div>
    </body>
</html>";
    }

    public function getTemplateName()
    {
        return "base.html.php";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
/* <!-- app/Resources/views/base.html.php -->*/
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8">*/
/*         <title><?php $view['slots']->output('title', 'Test Application') ?></title>*/
/*     </head>*/
/*     <body>*/
/*         <div id="sidebar">*/
/*             <?php if ($view['slots']->has('sidebar')): ?>*/
/*                 <?php $view['slots']->output('sidebar') ?>*/
/*             <?php else: ?>*/
/*                 <ul>*/
/*                     <li><a href="/">Home</a></li>*/
/*                     <li><a href="/blog">Blog</a></li>*/
/*                 </ul>*/
/*             <?php endif ?>*/
/*         </div>*/
/* */
/*         <div id="content">*/
/*             <?php $view['slots']->output('body') ?>*/
/*         </div>*/
/*     </body>*/
/* </html>*/

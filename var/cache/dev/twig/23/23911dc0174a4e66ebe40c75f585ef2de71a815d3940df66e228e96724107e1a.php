<?php

/* lucky/base.html.php */
class __TwigTemplate_7aa64f77a7d8269315a65a7552ed0d5b8c372359bc6c7aa4a41ce3842af138b9 extends Twig_Template
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
        return "lucky/base.html.php";
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

<?php

/* lucky/number.html.php */
class __TwigTemplate_9747ed3523348030bfb939c481c086f7430c6703ff3eb0db6ad0f976d9275d47 extends Twig_Template
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
        echo "\t
<!-- app/Resources/views/lucky/number.html.php -->
<?php \$view->extend('::base.html.php') ?>

<?php \$view['slots']->start('body') ?>
    <h1>Lucky Numbers: <?php echo \$view->escape(\$luckyNumberList) ?></h1>
<?php \$view['slots']->stop() ?>";
    }

    public function getTemplateName()
    {
        return "lucky/number.html.php";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
/* 	*/
/* <!-- app/Resources/views/lucky/number.html.php -->*/
/* <?php $view->extend('::base.html.php') ?>*/
/* */
/* <?php $view['slots']->start('body') ?>*/
/*     <h1>Lucky Numbers: <?php echo $view->escape($luckyNumberList) ?></h1>*/
/* <?php $view['slots']->stop() ?>*/

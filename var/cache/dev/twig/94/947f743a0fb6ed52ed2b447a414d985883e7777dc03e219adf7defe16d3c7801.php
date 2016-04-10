<?php

/* lucky/index.html.php */
class __TwigTemplate_d9fff12ab6dd5c081ba571feb70b7f191ebc35c437e74b85170d5990315a45f1 extends Twig_Template
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
        echo "<!-- app/Resources/views/blog/index.html.php -->
<!-- This is a child template which extends base.html.php and override its default
implementation. -->
<?php \$view->extend('base.html.php') ?>  
 
 <!-- above path is relative to the app/Resources/views -->
<?php \$view['slots']->set('title', 'My cool blog posts') ?>

<?php \$view['slots']->start('body') ?>
    <?php foreach (\$blog_entries as \$entry): ?>
        <h2><?php echo \$entry->getTitle() ?></h2>
        <p><?php echo \$entry->getBody() ?></p>
    <?php endforeach ?>
<?php \$view['slots']->stop() ?>";
    }

    public function getTemplateName()
    {
        return "lucky/index.html.php";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
/* <!-- app/Resources/views/blog/index.html.php -->*/
/* <!-- This is a child template which extends base.html.php and override its default*/
/* implementation. -->*/
/* <?php $view->extend('base.html.php') ?>  */
/*  */
/*  <!-- above path is relative to the app/Resources/views -->*/
/* <?php $view['slots']->set('title', 'My cool blog posts') ?>*/
/* */
/* <?php $view['slots']->start('body') ?>*/
/*     <?php foreach ($blog_entries as $entry): ?>*/
/*         <h2><?php echo $entry->getTitle() ?></h2>*/
/*         <p><?php echo $entry->getBody() ?></p>*/
/*     <?php endforeach ?>*/
/* <?php $view['slots']->stop() ?>*/

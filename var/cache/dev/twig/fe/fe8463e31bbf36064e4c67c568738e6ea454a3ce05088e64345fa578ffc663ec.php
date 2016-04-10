<?php

/* registration/register.html.php */
class __TwigTemplate_cd682eda07c9d2e4373e76c853289d77b00413ce138a719f7e1ca96c0fd8e742 extends Twig_Template
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
        echo "<!-- app/Resources/views/registration/register.html.php -->

<?php //echo \$view['form']->start(\$form) ?>
<?php //echo \$view['form']->widget(\$form) ?>
    <?php //echo \$view['form']->row(\$form['username']) ?>
    <?php //echo \$view['form']->row(\$form['email']) ?>
<?php //echo \$view['form']->row(\$form['plainPassword']) ?>
    <?php //echo \$view['form']->row(\$form['plainPassword']['first']) ?>
    <?php //echo \$view['form']->row(\$form['plainPassword']['second']) ?>

    <!-- <button type=\"submit\">Register!</button> -->
<?php //echo \$view['form']->end(\$form) ?>
<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->row(\$form['username']) ?>
    <?php echo \$view['form']->row(\$form['email']) ?>

    <?php echo \$view['form']->row(\$form['plainPassword']['first']) ?>
    <?php echo \$view['form']->row(\$form['plainPassword']['second']) ?>

    <button type=\"submit\">Register!</button>
<?php echo \$view['form']->end(\$form) ?>";
    }

    public function getTemplateName()
    {
        return "registration/register.html.php";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
/* <!-- app/Resources/views/registration/register.html.php -->*/
/* */
/* <?php //echo $view['form']->start($form) ?>*/
/* <?php //echo $view['form']->widget($form) ?>*/
/*     <?php //echo $view['form']->row($form['username']) ?>*/
/*     <?php //echo $view['form']->row($form['email']) ?>*/
/* <?php //echo $view['form']->row($form['plainPassword']) ?>*/
/*     <?php //echo $view['form']->row($form['plainPassword']['first']) ?>*/
/*     <?php //echo $view['form']->row($form['plainPassword']['second']) ?>*/
/* */
/*     <!-- <button type="submit">Register!</button> -->*/
/* <?php //echo $view['form']->end($form) ?>*/
/* <?php echo $view['form']->start($form) ?>*/
/*     <?php echo $view['form']->row($form['username']) ?>*/
/*     <?php echo $view['form']->row($form['email']) ?>*/
/* */
/*     <?php echo $view['form']->row($form['plainPassword']['first']) ?>*/
/*     <?php echo $view['form']->row($form['plainPassword']['second']) ?>*/
/* */
/*     <button type="submit">Register!</button>*/
/* <?php echo $view['form']->end($form) ?>*/

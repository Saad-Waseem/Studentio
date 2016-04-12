<?php

/* registration/login.html.php */
class __TwigTemplate_3c47d412e840cafb91d0e0c8463b59ee39c5ca13fdaa2e01d38211bd4f126caa extends Twig_Template
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
        echo "<?php if (\$error): ?>
    <div><?php echo \$error->getMessage() ?></div>
<?php endif ?>

<form action=\"<?php echo \$view['router']->path('login') ?>\" method=\"post\">
\t<?php //echo \$view['router']->path('login') ?>
    <label for=\"username\">Email:</label>
    <input type=\"text\" id=\"email\" name=\"_email\" value=\"<?php echo \$last_username ?>\" />

    <label for=\"password\">Password:</label>
    <input type=\"password\" id=\"password\" name=\"_password\" />

    
        <!-- If you want to control the URL the user
        is redirected to on success (more details below) -->
        <input type=\"hidden\" name=\"_target_path\" value=\"front\" />
    

    <button type=\"submit\">login</button>
</form>";
    }

    public function getTemplateName()
    {
        return "registration/login.html.php";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
/* <?php if ($error): ?>*/
/*     <div><?php echo $error->getMessage() ?></div>*/
/* <?php endif ?>*/
/* */
/* <form action="<?php echo $view['router']->path('login') ?>" method="post">*/
/* 	<?php //echo $view['router']->path('login') ?>*/
/*     <label for="username">Email:</label>*/
/*     <input type="text" id="email" name="_email" value="<?php echo $last_username ?>" />*/
/* */
/*     <label for="password">Password:</label>*/
/*     <input type="password" id="password" name="_password" />*/
/* */
/*     */
/*         <!-- If you want to control the URL the user*/
/*         is redirected to on success (more details below) -->*/
/*         <input type="hidden" name="_target_path" value="front" />*/
/*     */
/* */
/*     <button type="submit">login</button>*/
/* </form>*/

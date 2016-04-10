<!-- app/Resources/views/registration/register.html.php -->

<?php //echo $view['form']->start($form) ?>
<?php //echo $view['form']->widget($form) ?>
    <?php //echo $view['form']->row($form['username']) ?>
    <?php //echo $view['form']->row($form['email']) ?>
<?php //echo $view['form']->row($form['plainPassword']) ?>
    <?php //echo $view['form']->row($form['plainPassword']['first']) ?>
    <?php //echo $view['form']->row($form['plainPassword']['second']) ?>

    <!-- <button type="submit">Register!</button> -->
<?php //echo $view['form']->end($form) ?>
<?php echo $view['form']->start($form) ?>
    <?php echo $view['form']->row($form['username']) ?>
    <?php echo $view['form']->row($form['email']) ?>

    <?php echo $view['form']->row($form['plainPassword']['first']) ?>
    <?php echo $view['form']->row($form['plainPassword']['second']) ?>

    <button type="submit">Register!</button>
<?php echo $view['form']->end($form) ?>
<!-- app/Resources/views/blog/index.html.php -->
<!-- This is a child template which extends base.html.php and override its default
implementation. -->
<?php $view->extend('base.html.php') ?>  
 
 <!-- above path is relative to the app/Resources/views -->
<?php $view['slots']->set('title', 'My cool blog posts') ?>

<?php $view['slots']->start('body') ?>
    <?php foreach ($blog_entries as $entry): ?>
        <h2><?php echo $entry->getTitle() ?></h2>
        <p><?php echo $entry->getBody() ?></p>
    <?php endforeach ?>
<?php $view['slots']->stop() ?>
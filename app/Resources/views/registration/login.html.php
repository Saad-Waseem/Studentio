<?php if ($error): ?>
    <div><?php echo $error->getMessage() ?></div>
<?php endif ?>

<form action="<?php echo $view['router']->path('login') ?>" method="post">
	<?php //echo $view['router']->path('login') ?>
    <label for="username">Email:</label>
    <input type="text" id="email" name="_email" value="<?php echo $last_username ?>" />

    <label for="password">Password:</label>
    <input type="password" id="password" name="_password" />

    
        <!-- If you want to control the URL the user
        is redirected to on success (more details below) -->
        <input type="hidden" name="_target_path" value="front" />
    

    <button type="submit">login</button>
</form>
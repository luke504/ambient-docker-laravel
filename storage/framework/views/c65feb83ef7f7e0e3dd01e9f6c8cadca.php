<html>
    <head></head>
    <body>
        <h1>Form</h1>
        <form method="post" action="<?php echo e(route('createpost')); ?>">
            <?php echo csrf_field(); ?>
            <input type="text" placeholder="Enter your post" name="post"></input>
            <button type="submit">Add New Post</button>
        </form>
    </body>
</html><?php /**PATH /mnt/c/Users/lucac/laravel_project/resources/views/addpost.blade.php ENDPATH**/ ?>
<?php require VIEW_ROOT . '/templates/header.php'; ?>
<button class="admin-btn"><a style="text-decoration: none; color: inherit;" href="<?php echo BASE_URL; ?>/admin/login.php">Admin</a></button>
<?php if (!$page) : ?>

    <p>No page found, sorry.</p>

<?php else : ?>
    
    <h2><?php echo e($page['title']) ?></h2>

    <?php echo e($page['body']); ?>

    <p class="faded">
        Created on <?php echo $page['created']->format('jS M Y'); ?>
        <?php if ($page['updated']): ?>
            Last updated <?php echo $page['updated']->format('jS M Y '); ?>
        <?php endif; ?>
        
    </p>

<?php endif; ?>



<?php require VIEW_ROOT . '/templates/footer.php' ?>
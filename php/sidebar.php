<div class="sidebar-menu">
    <h5 class="sidebar-title">Navigation</h5>
    <div class="sidebar-divider"></div>
</div>

<!-- Static pages -->
<a class="sidebar-link" href="<?= $site->url() ?>"><?= $L->get('Home page') ?></a>
<?php foreach ($staticContent as $staticPage) : ?>
<a class="sidebar-link" href="<?php echo $staticPage->permalink() ?>"><?php echo $staticPage->title() ?></a>
<?php endforeach ?>

<br />

<!-- Social Networks -->
<?php foreach (Theme::socialNetworks() as $key => $label) : ?>
    <a class="sidebar-link" href="<?php echo $site->{$key}(); ?>" target="_blank">
        <i class="fab fa-<?= $key ?>"></i> <?php echo $label; ?>
    </a>
<?php endforeach; ?>

<!-- RSS -->
<?php if (Theme::rssUrl()) : ?>
    <a class="sidebar-link" href="<?php echo Theme::rssUrl() ?>" target="_blank">
        <i class="fas fa-rss"></i> RSS
    </a>
<?php endif; ?>

<?php
Theme::plugins('siteSidebar');
?>

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
    <a class="sidebar-link sidebar-link-with-icon" href="<?php echo $site->{$key}(); ?>" target="_blank">
        <img class="nav-svg-icon sidebar-icon" src="<?php echo DOMAIN_THEME . 'img/' . $key . '.svg' ?>" alt="<?php echo $label ?>" />
        <?php echo $label; ?>
    </a>
<?php endforeach; ?>

<?php
Theme::plugins('siteSidebar');
?>

<!-- Post -->
<div class="card">

    <!-- Load Bludit Plugins: Page Begin -->
    <?php Theme::plugins('pageBegin'); ?>

    <!-- Cover image -->
    <?php if ($page->coverImage()) : ?>
    <img class="img-fluid rounded-top" alt="Cover Image" src="<?php echo $page->coverImage(); ?>"/>
    <?php endif ?>

    <h2 class="card-title">
        <a class="card-title" href="<?php echo $page->permalink(); ?>">
        <?php echo $page->title(); ?>
        </a>
    </h2>

    <?php if (!$page->isStatic() && !$url->notFound()) : ?>
    <!-- Creation date -->
    <h6 class="card-subtitle mb-3 text-muted"><?php echo $page->date(); ?> - <?php echo $L->get('Reading time') . ': ' . $page->readingTime() ?></h6>
    <?php endif ?>

    <!-- Full content -->
    <?php echo $page->content(); ?>

    <!-- Load Bludit Plugins: Page End -->
    <?php Theme::plugins('pageEnd'); ?>

</div>

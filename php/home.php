<?php if (empty($content)) : ?>
    <div class="mt-4">
    <?php $language->p('No pages found') ?>
    </div>
<?php endif ?>

<?php foreach ($content as $page) : ?>
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

    <!-- Breaked content -->
    <?php echo $page->contentBreak(); ?>

    <!-- "Read more" button -->
    <?php if ($page->readMore()) : ?>
    <div class="text-right">
        <a class='btn' href="<?php echo $page->permalink(); ?>"><?php echo $L->get('Read more'); ?></a>
    </div>
    <?php endif ?>

    <!-- Load Bludit Plugins: Page End -->
    <?php Theme::plugins('pageEnd'); ?>

</div>


<?php endforeach ?>

<!-- Pagination -->
<?php if (Paginator::numberOfPages() > 1) : ?>
<div class='text-center mx-auto pt-10'>
<nav aria-label="pagination">
  <ul class="pagination">

    <!-- Previous page -->
    <?php if (Paginator::showPrev()) : ?>
    <li class="page-item">
      <a href="<?php echo Paginator::previousPageUrl() ?>" class="page-link">
        <i class="fa fa-angle-left" aria-hidden="true"></i>
        <span><?php echo $L->get('Previous'); ?></span>
      </a>
    </li>
    <?php endif; ?>

    <!-- Home Page -->
    <li class="page-item <?= (Paginator::currentPage() == 1) ? 'disabled' : '' ?>">
        <a href="<?php echo Theme::siteUrl() ?>" class="page-link">Home</a>
    </li>

    <!-- Next page -->
    <?php if (Paginator::showNext()) : ?>
    <li class="page-item">
      <a href="<?php echo Paginator::nextPageUrl() ?>" class="page-link">
        <span><?php echo $L->get('Next'); ?></span>
        <i class="fa fa-angle-right" aria-hidden="true"></i>
      </a>
    </li>
    <?php endif; ?>

  </ul>
</nav>
</div>
<?php endif ?>

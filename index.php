<!DOCTYPE html>
<html lang="<?php echo Theme::lang() ?>">

<head>
<?php include(THEME_DIR_PHP . 'head.php'); ?>
</head>

<?php
$preferredMode = 'dark-mode';
if (
    isset($_COOKIE['halfmoon_preferredMode']) &&
    ($_COOKIE['halfmoon_preferredMode'] === 'light-mode')
) {
    $preferredMode = 'light-mode';
}
?>

<body class="<?= $preferredMode ?> with-custom-webkit-scrollbars with-custom-css-scrollbars" data-dm-shortcut-enabled="true" data-sidebar-shortcut-enabled="true">

    <!-- Load Bludit Plugins: Site Body Begin -->
    <?php Theme::plugins('siteBodyBegin'); ?>

    <!-- Page wrapper start -->
    <div id="page-wrapper" class="page-wrapper with-navbar with-sidebar with-navbar-fixed-bottom" data-sidebar-type="overlayed-sm-and-down">

        <!-- Sticky alerts -->
        <div class="sticky-alerts"></div>

        <!-- Navbar -->
        <?php include(THEME_DIR_PHP . 'navbar.php'); ?>

        <!-- Sidebar overlay -->
        <div class="sidebar-overlay" onclick="halfmoon.toggleSidebar()"></div>

        <!-- Sidebar start -->
        <div class="sidebar">
            <div class='sidebar-content'>
                <?php include(THEME_DIR_PHP . 'sidebar.php'); ?>
            </div>
        </div>
        <!-- Sidebar end -->

        <!-- Content wrapper start -->
        <div class="content-wrapper">
            <div class="container">
                <div class="row row-eq-spacing">
                    <div class="col-md-12">

                        <?php
                        // Bludit content are pages
                        // But if you order the content by date
                        // These pages works as posts

                        // $WHERE_AM_I variable detect where the user is browsing
                        // If the user is watching a particular page/post the variable takes the value "page"
                        // If the user is watching the frontpage the variable takes the value "home"
                        if ($WHERE_AM_I == 'page') {
                            include(THEME_DIR_PHP . 'page.php');
                        } else {
                            include(THEME_DIR_PHP . 'home.php');
                        }
                        ?>

                    </div>
                </div>
            </div>
        </div>
        <!-- Content wrapper end -->

        <!-- Footer -->
        <?php include(THEME_DIR_PHP . 'footer.php'); ?>

    </div>
    <!-- Page wrapper end -->

    <!-- Javascript, Halfmoon JS -->
    <?php
    // Include Jquery file from Bludit Core
    echo Theme::jquery();
    echo Theme::js('js/halfmoon.min.js');
    ?>

    <script>
    // Toggles the parent's dark mode (if this page is loaded in an iFrame)
    function parentToggleDarkmode() {
        window.parent.toggleDarkModeFromChild();
    }

    // Override the dark mode toggle function to call the parent's one
    // Again, this is for the case where the page is loaded in an iFrame
    if (window !== window.parent) {
        halfmoon.toggleDarkMode = parentToggleDarkmode;
    }

    // halfmoon hacks
    $(function() {
        // Plugin search better layout
        $('#jspluginSearchText').addClass('form-control');
        // Use classes from framework
        $('code').addClass('code');
        $('table').addClass('table table-hover table-bordered');
    });
    </script>

    <!-- Load Bludit Plugins: Site Body End -->
    <?php Theme::plugins('siteBodyEnd'); ?>

</body>

</html>

<!-- Navbar start -->
<nav class="navbar">
    <div class="navbar-content">
        <button id="toggle-sidebar-btn" class="btn btn-action" type="button" onclick="halfmoon.toggleSidebar()">
            <i class="fa fa-bars" aria-hidden="true"></i>
        </button>
    </div>
    <a href="<?php echo Theme::siteUrl() ?>" class="navbar-brand ml-10 ml-sm-20">
        <img src="<?php echo DOMAIN_THEME_IMG . 'logo.png'; ?>" alt="site-logo">
    </a>
    <div class="navbar-content ml-auto">
        <button class="btn btn-action mr-5" type="button" onclick="halfmoon.toggleDarkMode()">
            <i class="fas fa-moon" aria-hidden="true"></i>
            <span class="sr-only">Toggle dark mode</span>
        </button>
    </div>
</nav>
<!-- Navbar end -->

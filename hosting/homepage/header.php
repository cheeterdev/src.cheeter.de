<nav class="nav-container">
    <div class="flex-between">
        <a href="/" class="gradient-tex header-text"><?= $siteName ?></a>

        <div class="desktop-menu">
            <div class="dropdown">
                <a href="#" class="nav-link">Web Hosting <i class='bx bx-chevron-down'></i></a>
                <div class="dropdown-content">
                    <a href="#" class="nav-link">Coming soon</a>
                    <a href="#" class="nav-link">Coming soon</a>
                    <a href="#" class="nav-link">Coming soon</a>
                </div>
            </div>
            <a href="#" class="nav-link">Free Hosting</a>
            <a href="#" class="nav-link">Forum</a>
            <a href="#" class="nav-button header-btn">Dashboard</a>
        </div>

        <button id="mobile-menu-btn" class="mobile-menu-btn">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-16 6h16"/>
            </svg>
        </button>
    </div>

    <div id="mobile-menu" class="mobile-menu" style="display: none;">
        <div style="margin-bottom: 1rem;">
            <div class="mobile-dropdown">
                <a href="#" class="mobile-link nav-link">Web Hosting <i class='bx bx-chevron-down'></i></a>
                <div class="mobile-dropdown-content">
                    <a href="#" class="mobile-link nav-link">Coming soon</a>
                    <a href="#" class="mobile-link nav-link">Coming soon</a>
                    <a href="#" class="mobile-link nav-link">Coming soon</a>
                </div>
            </div>
            <a href="about.php" class="mobile-link nav-link">Free Hosting</a>
            <a href="contacts.php" class="mobile-link">Forum</a>
            <a href="signup.php" class="mobile-link">Dashboard</a>
        </div>
    </div>
</nav>
<!-- Preloader -->
<div class="preloader-bg"></div>
<div id="preloader">
    <div id="preloader-status">
        <div class="preloader-position loader"><span></span></div>
    </div>
</div>
<!-- Progress scroll totop -->
<div class="progress-wrap cursor-pointer">
    <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
        <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
    </svg>
</div>
<!-- Navbar -->
<?php
$currentPage = basename($_SERVER['PHP_SELF']);
$servicePages = [
    'services.php',
    'wedding-planning.php',
    'destination-weddings.php',
    'corporate-events.php',
    'social-events.php',
    'luxury-decor-styling.php',
    'end-to-end-event-management.php',
    'service-detail.php'
];
?>
<nav class="navbar navbar-expand-lg">
    <div class="container">
        <!-- Logo -->
        <div class="logo-wrapper">
            <a class="logo" href="#">
                <img src="img/logo.png" class="logo-img" alt="" />
            </a>
            <!-- <a class="logo" href="index.html"> <h2>Florya</h2> </a> -->
        </div>
        <!-- Button -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar"
            aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"><i class="ti-menu"></i></span>
        </button>
        <!-- Menu -->
        <div class="collapse navbar-collapse" id="navbar">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link <?php echo in_array($currentPage, ['index.php', 'index.html', 'index-2.html', 'index2.html', 'index3.html', 'index4.html']) ? 'active' : ''; ?>"
                        href="index.php">Home</a>
                    <!-- <ul class="dropdown-menu">
                        <li>
                            <a href="index-2.html" class="dropdown-item active"><span>Slider</span></a>
                        </li>
                        <li>
                            <a href="index2.html" class="dropdown-item"><span>Video</span></a>
                        </li>
                        <li>
                            <a href="index3.html" class="dropdown-item"><span>Parallax Image</span></a>
                        </li>
                        <li>
                            <a href="index4.html" class="dropdown-item"><span>Slideshow</span></a>
                        </li>
                        <li>
                            <a href="onepage.html" class="dropdown-item"><span>Onepage</span></a>
                        </li>
                    </ul> -->
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php echo $currentPage === 'about.php' ? 'active' : ''; ?>"
                        href="about.php">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php echo in_array($currentPage, $servicePages) ? 'active' : ''; ?>"
                        href="services.php">Services</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        data-bs-auto-close="outside" aria-expanded="false">Portfolio <i class="ti-angle-down"></i></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="portfolio-grid.html" class="dropdown-item"><span>Portfolio Grid</span></a>
                        </li>
                        <li>
                            <a href="portfolio-masonry.html" class="dropdown-item"><span>Portfolio Masonry</span></a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php echo $currentPage === 'our-process.php' ? 'active' : ''; ?>"
                        href="our-process.php">Our Process</a>
                    <!-- <ul class="dropdown-menu">
                        <li>
                            <a href="blog-2-column.html" class="dropdown-item"><span>Blog 2 Column</span></a>
                        </li>
                        <li>
                            <a href="blog-right-sidebar.html" class="dropdown-item"><span>Blog Right Sidebar</span></a>
                        </li>
                        <li>
                            <a href="blog-left-sidebar.html" class="dropdown-item"><span>Blog Left Sidebar</span></a>
                        </li>
                    </ul> -->
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        data-bs-auto-close="outside" aria-expanded="false">Pages <i class="ti-angle-down"></i></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="services-page.html" class="dropdown-item"><span>Services Details</span></a>
                        </li>
                        <li>
                            <a href="portfolio-page.html" class="dropdown-item"><span>Portfolio Page</span></a>
                        </li>
                        <li>
                            <a href="post.html" class="dropdown-item"><span>Post Single</span></a>
                        </li>
                        <li class="dropdown-submenu dropdown">
                            <a class="dropdown-item dropdown-toggle" data-bs-toggle="dropdown"
                                data-bs-auto-close="outside" aria-expanded="false" href="#"><span>Other Pages <i
                                        class="ti-angle-right"></i></span></a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="coming-soon.html" class="dropdown-item"><span>Coming Soon</span></a>
                                </li>
                                <li>
                                    <a href="404.html" class="dropdown-item"><span>404 Error</span></a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php echo in_array($currentPage, ['gallery.php','gallery.html']) ? 'active' : ''; ?>"
                        href="gallery.php">Gallery</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php echo $currentPage === 'contact.php' ? 'active' : ''; ?>"
                        href="contact.php">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Gallery | Tavix Events</title>
    <meta name="description"
        content="Explore Tavix Events gallery featuring weddings, corporate events, and social celebrations." />
    <meta name="keywords" content="Tavix Events gallery, event photos, wedding gallery, corporate event gallery" />
    <meta name="author" content="Tavix Events" />
    <meta name="robots" content="index, follow" />
    <link rel="canonical" href="gallery.php" />
    <link rel="icon" href="img/favicon.png" type="image/png" />

    <link rel="preconnect" href="../../../../../fonts.googleapis.com/index.html" />
    <link rel="preconnect" href="../../../../../fonts.gstatic.com/index.html" crossorigin />
    <link
        href="../../../../../fonts.googleapis.com/css27b24.css?family=Didact+Gothic&amp;family=Playfair+Display:ital,wght@0,400..900;1,400..900&amp;display=swap"
        rel="stylesheet" />

    <link rel="stylesheet" href="css/plugins.css" />
    <link rel="stylesheet" href="css/style.css" />

    <style>
    .gallery-grid-wrap {
        background: #f2f2f2;
        padding: 24px 0 70px;
    }

    .gallery-showcase {
        padding: 0 10px;
    }

    .gallery-showcase .row {
        --bs-gutter-x: 14px;
        --bs-gutter-y: 14px;
    }

        .gallery-showcase .gallery-item {
            padding-right: calc(var(--bs-gutter-x) * 0.5);
            padding-left: calc(var(--bs-gutter-x) * 0.5);
            padding-top: calc(var(--bs-gutter-y) * 0.5);
            padding-bottom: calc(var(--bs-gutter-y) * 0.5);
        }

    .gallery-showcase .gallery-item .gallery-link {
        display: block;
        width: 100%;
        aspect-ratio: 4 / 3;
        overflow: hidden;
        background: #ddd;
    }

    .gallery-showcase .gallery-item img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        display: block;
        transition: transform 0.35s ease;
    }

    .gallery-showcase .gallery-item:hover img {
        transform: scale(1.02);
    }

    .gallery-pagination {
        margin-top: 60px;
        display: flex;
        justify-content: center;
        gap: 14px;
    }

    .gallery-pagination a,
    .gallery-pagination span {
        width: 52px;
        height: 52px;
        border-radius: 50%;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        border: 2px solid #c7cdc6;
        color: #748173;
        font-size: 28px;
        line-height: 1;
        font-weight: 500;
        background: #fff;
        text-decoration: none;
        transition: all 0.2s ease;
    }

    .gallery-pagination .active {
        background: #748173;
        border-color: #748173;
        color: #fff;
    }

    .gallery-pagination a:hover {
        border-color: #748173;
        color: #748173;
    }

    .gallery-pagination .next {
        font-size: 30px;
        font-weight: 400;
    }

    @media (max-width: 991.98px) {
        .gallery-grid-wrap {
            padding-top: 12px;
        }

        .gallery-showcase .gallery-item img {
            height: 100%;
        }

        .gallery-pagination {
            gap: 10px;
            margin-top: 34px;
        }

        .gallery-pagination a,
        .gallery-pagination span {
            width: 44px;
            height: 44px;
            font-size: 22px;
        }
    }

    @media (max-width: 575.98px) {
        .gallery-showcase .gallery-item .gallery-link {
            aspect-ratio: 1 / 1;
        }
    }
    </style>
</head>

<body>
    <?php include 'includes/header.php'; ?>

    <div class="banner-header2 section-padding valign bg-img bg-fixed" data-overlay-dark="3"
        data-background="img/banner.jpg">
        <div class="container">
            <div class="row">
                <div class="col-md-12 caption mt-90">
                    <h6>Image Collection</h6>
                    <h1>Event <span>Gallery</span></h1>
                </div>
            </div>
        </div>
    </div>

    <section class="gallery-grid-wrap">
        <div class="container-fluid gallery-showcase">
            <div class="row" id="galleryGrid">
                <div class="col-sm-6 col-md-4 gallery-item" data-page="1"><a href="img/couple/3.jpg"
                        class="img-zoom gallery-link"><img src="img/couple/3.jpg" alt="Gallery image 1" /></a></div>
                <div class="col-sm-6 col-md-4 gallery-item" data-page="1"><a href="img/slider/1.jpg"
                        class="img-zoom gallery-link"><img src="img/slider/1.jpg" alt="Gallery image 2" /></a></div>
                <div class="col-sm-6 col-md-4 gallery-item" data-page="1"><a href="img/couple/5.jpg"
                        class="img-zoom gallery-link"><img src="img/couple/5.jpg" alt="Gallery image 3" /></a></div>
                <div class="col-sm-6 col-md-4 gallery-item" data-page="1"><a href="img/slider/2.jpg"
                        class="img-zoom gallery-link"><img src="img/slider/2.jpg" alt="Gallery image 4" /></a></div>
                <div class="col-sm-6 col-md-4 gallery-item" data-page="1"><a href="img/slider/3.jpg"
                        class="img-zoom gallery-link"><img src="img/slider/3.jpg" alt="Gallery image 5" /></a></div>
                <div class="col-sm-6 col-md-4 gallery-item" data-page="1"><a href="img/slider/4.jpg"
                        class="img-zoom gallery-link"><img src="img/slider/4.jpg" alt="Gallery image 6" /></a></div>

                <div class="col-sm-6 col-md-4 gallery-item" data-page="2"><a href="img/couple/4.jpg"
                        class="img-zoom gallery-link"><img src="img/couple/4.jpg" alt="Gallery image 7" /></a></div>
                <div class="col-sm-6 col-md-4 gallery-item" data-page="2"><a href="img/slider/5.jpg"
                        class="img-zoom gallery-link"><img src="img/slider/5.jpg" alt="Gallery image 8" /></a></div>
                <div class="col-sm-6 col-md-4 gallery-item" data-page="2"><a href="img/slider/6.jpg"
                        class="img-zoom gallery-link"><img src="img/slider/6.jpg" alt="Gallery image 9" /></a></div>
            </div>

            <div class="gallery-pagination" id="galleryPagination" aria-label="Gallery Pagination">
                <a href="#" class="next" id="galleryNext">&raquo;</a>
            </div>
        </div>
    </section>

    <?php include 'includes/testimonials.php'?>

    <?php include 'includes/footer.php'; ?>

    <script src="js/jquery-3.6.3.min.js"></script>
    <script src="js/jquery-migrate-3.0.0.min.js"></script>
    <script src="js/modernizr-2.6.2.min.js"></script>
    <script src="js/imagesloaded.pkgd.min.js"></script>
    <script src="js/jquery.isotope.v3.0.2.js"></script>
    <script src="js/pace.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/scrollIt.min.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.stellar.min.js"></script>
    <script src="js/jquery.magnific-popup.js"></script>
    <script src="js/YouTubePopUp.js"></script>
    <script src="js/smooth-scroll.min.js"></script>
    <script src="js/custom.js"></script>
    <script>
    (function() {
        var items = document.querySelectorAll('.gallery-item');
        var pagination = document.getElementById('galleryPagination');
        var nextBtn = document.getElementById('galleryNext');
        var currentPage = 1;
        var pages = Array.from(new Set(Array.from(items).map(function(item) {
            return parseInt(item.getAttribute('data-page'), 10);
        }))).sort(function(a, b) {
            return a - b;
        });
        var totalPages = pages.length;

        pages.forEach(function(page) {
            var a = document.createElement('a');
            a.href = '#';
            a.setAttribute('data-page', String(page));
            a.textContent = String(page);
            pagination.insertBefore(a, nextBtn);
        });

        var pageButtons = pagination.querySelectorAll('a[data-page]');

        function render(page) {
            currentPage = page;
            items.forEach(function(item) {
                item.style.display = item.getAttribute('data-page') === String(page) ? '' : 'none';
            });
            pageButtons.forEach(function(btn) {
                btn.classList.toggle('active', btn.getAttribute('data-page') === String(page));
            });
        }

        pageButtons.forEach(function(btn) {
            btn.addEventListener('click', function(e) {
                e.preventDefault();
                var page = parseInt(btn.getAttribute('data-page'), 10);
                if (page >= 1 && page <= totalPages) {
                    render(page);
                }
            });
        });

        nextBtn.addEventListener('click', function(e) {
            e.preventDefault();
            render(currentPage >= totalPages ? 1 : currentPage + 1);
        });

        render(1);
    })();
    </script>
</body>

</html>

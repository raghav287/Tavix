<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <?php
    $services = [
        'wedding-planning' => [
            'title' => 'Wedding Planning',
            'subtitle' => 'Signature Service',
            'hero_image' => 'img/slider/1.jpg',
            'content_image' => 'img/services/1.jpg',
            'intro' => 'From first consultation to final farewell, Tavix Events designs and manages personalized wedding experiences with seamless coordination and elevated aesthetics.',
            'details' => 'Our team handles timelines, vendor onboarding, guest flow, styling, and execution so families can enjoy every ritual without operational stress.',
            'includes' => [
                'Customized wedding planning roadmap',
                'Vendor sourcing, negotiation, and coordination',
                'Pre-wedding and wedding-day production',
                'Budget planning with transparent cost tracking',
                'On-site event management team'
            ],
            'deliverables' => [
                'Concept and theme development',
                'Function-wise run sheet and schedule',
                'Decor and experience curation',
                'Hospitality and guest management'
            ]
        ],
        'destination-weddings' => [
            'title' => 'Destination Weddings',
            'subtitle' => 'Travel + Celebration',
            'hero_image' => 'img/slider/2.jpg',
            'content_image' => 'img/services/5.jpg',
            'intro' => 'We plan destination weddings that feel effortless for hosts and guests, combining venue curation, travel logistics, and luxury hospitality.',
            'details' => 'From city selection to welcome experiences and event execution, we manage the full journey while preserving your style and traditions.',
            'includes' => [
                'Destination and venue shortlisting',
                'Travel, stay, and rooming coordination',
                'Multi-function planning and production',
                'Local vendor and permissions management',
                'Guest concierge and on-ground support'
            ],
            'deliverables' => [
                'Destination feasibility and budget plan',
                'Guest itinerary and logistics map',
                'Event styling and production management',
                'End-to-end destination execution'
            ]
        ],
        'corporate-events' => [
            'title' => 'Corporate Events',
            'subtitle' => 'Professional Execution',
            'hero_image' => 'img/slider/3.jpg',
            'content_image' => 'img/services/6.jpg',
            'intro' => 'Tavix Events delivers high-impact corporate events including conferences, launches, award ceremonies, and internal engagement programs.',
            'details' => 'We align event planning with business objectives and brand standards while ensuring punctual execution, compliance, and guest comfort.',
            'includes' => [
                'Conference and launch event planning',
                'Venue, AV, stage, and branding setup',
                'Speaker and agenda flow management',
                'Registration, hospitality, and protocol',
                'On-site operations and post-event closure'
            ],
            'deliverables' => [
                'Objective-led event blueprint',
                'Execution timeline and vendor matrix',
                'Branding and stage experience planning',
                'Operational command support'
            ]
        ],
        'social-events' => [
            'title' => 'Social Events',
            'subtitle' => 'Private Celebrations',
            'hero_image' => 'img/slider/4.jpg',
            'content_image' => 'img/services/2.jpg',
            'intro' => 'From intimate birthdays to milestone anniversaries and family celebrations, we craft meaningful social events with refined details.',
            'details' => 'Our approach combines creativity, guest comfort, and smooth coordination so every celebration feels personal, joyful, and memorable.',
            'includes' => [
                'Theme planning and experience design',
                'Venue decor and entertainment coordination',
                'Food and hospitality planning',
                'Photography and memory capture support',
                'Event-day orchestration and supervision'
            ],
            'deliverables' => [
                'Celebration concept and mood board',
                'Vendor and budget planning',
                'Guest-facing event flow',
                'Execution and quality control'
            ]
        ],
        'luxury-decor-styling' => [
            'title' => 'Luxury Decor & Styling',
            'subtitle' => 'Visual Storytelling',
            'hero_image' => 'img/slider/5.jpg',
            'content_image' => 'img/services/3.jpg',
            'intro' => 'We create premium decor concepts that transform venues into immersive event experiences with signature styling and visual elegance.',
            'details' => 'From floral language to lighting and table styling, every design element is curated to reflect your story and event mood.',
            'includes' => [
                'Theme and color story creation',
                'Stage, entry, and focal decor design',
                'Floral, lighting, and prop curation',
                'Luxury tablescape and lounge styling',
                'On-site styling supervision'
            ],
            'deliverables' => [
                'Concept deck and styling references',
                'Decor BOQ and production planning',
                'Vendor coordination and installation',
                'Final styling and finish checks'
            ]
        ],
        'end-to-end-event-management' => [
            'title' => 'End-to-End Event Management',
            'subtitle' => 'Complete Ownership',
            'hero_image' => 'img/slider/6.jpg',
            'content_image' => 'img/services/4.jpg',
            'intro' => 'Our full-service event management model covers strategy, planning, design, vendor management, and on-ground execution under one team.',
            'details' => 'Ideal for clients who want a single accountable partner delivering quality, timeline control, and cost transparency across the event lifecycle.',
            'includes' => [
                'Discovery, planning, and budgeting',
                'Venue, vendor, and contract management',
                'Creative direction and production',
                'Guest logistics and hospitality',
                'Event-day command center and wrap-up'
            ],
            'deliverables' => [
                'Centralized event management plan',
                'Milestone tracking and reporting',
                'Risk and contingency management',
                'Post-event review and closure'
            ]
        ],
    ];

    $slug = isset($serviceSlug) ? $serviceSlug : '';
    if (!isset($services[$slug])) {
        http_response_code(404);
        $service = [
            'title' => 'Service Not Found',
            'subtitle' => 'Tavix Events',
            'hero_image' => 'img/slider/1.jpg',
            'content_image' => 'img/services/1.jpg',
            'intro' => 'The requested service page could not be found.',
            'details' => 'Please visit our services page to explore available offerings.',
            'includes' => [],
            'deliverables' => []
        ];
    } else {
        $service = $services[$slug];
    }
    ?>
    <title><?php echo htmlspecialchars($service['title']); ?> | Tavix Events</title>
    <meta name="description"
        content="<?php echo htmlspecialchars($service['title']); ?> services by Tavix Events in Chandigarh with premium planning and execution support." />
    <meta name="keywords"
        content="Tavix Events, <?php echo htmlspecialchars($service['title']); ?>, Chandigarh event planning" />
    <link rel="canonical" href="index.php" />
    <link rel="icon" href="img/favicon.png" type="image/png" />

    <link rel="preconnect" href="../../../../../fonts.googleapis.com/index.html" />
    <link rel="preconnect" href="../../../../../fonts.gstatic.com/index.html" crossorigin />
    <link
        href="../../../../../fonts.googleapis.com/css27b24.css?family=Didact+Gothic&amp;family=Playfair+Display:ital,wght@0,400..900;1,400..900&amp;display=swap"
        rel="stylesheet" />

    <link rel="stylesheet" href="css/plugins.css" />
    <link rel="stylesheet" href="css/style.css" />
    <style>
    .service-detail-row {
        align-items: stretch;
    }

    .service-detail-image,
    .service-detail-content {
        display: flex;
        flex-direction: column;
        justify-content: flex-start;
    }

    .service-detail-image img {
        width: 100%;
        height: 100%;
        min-height: 520px;
        object-fit: cover;
        display: block;
        margin-bottom: 0 !important;
    }

    .service-detail-content .page-list {
        margin-bottom: 20px;
    }

    .service-back-btn {
        margin-top: auto;
        display: inline-block;
    }

    @media (max-width: 991.98px) {
        .service-detail-image img {
            min-height: auto;
            height: auto;
        }

        .service-back-btn {
            margin-top: 10px;
        }
    }
    </style>
</head>

<body>
    <?php include 'includes/header.php'; ?>

    <div class="banner-header section-padding valign bg-img bg-fixed" data-overlay-dark="3"
        data-background="<?php echo htmlspecialchars($service['hero_image']); ?>">
        <div class="container">
            <div class="row">
                <div class="col-md-6 slider-text js-fullheight">
                    <div class="slider-text-inner">
                        <div class="desc">
                            <h4><?php echo htmlspecialchars($service['subtitle']); ?></h4>
                            <h1><?php echo htmlspecialchars($service['title']); ?></h1>
                            <p><?php echo htmlspecialchars($service['intro']); ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="arrow bounce text-center">
            <a href="#" data-scroll-nav="1" class="">
                <i class="ti-arrow-down"></i>
            </a>
        </div>
    </div>

    <section class="services section-padding" data-scroll-index="1">
        <div class="container">
            <div class="row service-detail-row">
                <div class="col-md-5 animate-box service-detail-image" data-animate-effect="fadeInLeft">
                    <img src="<?php echo htmlspecialchars($service['content_image']); ?>" class="img-fluid mb-30"
                        alt="<?php echo htmlspecialchars($service['title']); ?>" />
                </div>
                <div class="col-md-7 animate-box service-detail-content" data-animate-effect="fadeInLeft">
                    <p><?php echo htmlspecialchars($service['details']); ?></p>
                    <h4 class="pwe-about-subheading">What We Include</h4>
                    <ul class="list-unstyled page-list mb-30">
                        <?php foreach ($service['includes'] as $item): ?>
                        <li>
                            <div class="page-list-icon"><span class="ti-check"></span></div>
                            <div class="page-list-text">
                                <p><?php echo htmlspecialchars($item); ?></p>
                            </div>
                        </li>
                        <?php endforeach; ?>
                    </ul>

                    <h4 class="pwe-about-subheading">Key Deliverables</h4>
                    <ul class="list-unstyled page-list mb-30">
                        <?php foreach ($service['deliverables'] as $item): ?>
                        <li>
                            <div class="page-list-icon"><span class="ti-star"></span></div>
                            <div class="page-list-text">
                                <p><?php echo htmlspecialchars($item); ?></p>
                            </div>
                        </li>
                        <?php endforeach; ?>
                    </ul>

                    <div class="butn-dark service-back-btn">
                        <a href="services.php"><span>Back to Services</span></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- <section class="section-padding bg-cream">
        <div class="container">
            <div class="row">
                <div class="col-md-12 mb-30">
                    <div class="section-subtitle">Tavix Events</div>
                    <div class="section-title">Company <span>Profile</span></div>
                </div>
                <div class="col-md-12 mb-30">
                    <h5>1. Company Overview</h5>
                    <p>
                        <strong>Company Name:</strong> Tavix Events<br />
                        <strong>Founders:</strong> Pooja Thakur &amp; Manish Thakur<br />
                        <strong>Established:</strong> 2024 (Rebranded from Elegant Events - Founded in 2020)<br />
                        <strong>Location:</strong> Chandigarh, India
                    </p>
                    <h6>Our Journey</h6>
                    <p>
                        Tavix Events is a premium event planning and management company evolved from Elegant Events, a
                        Chandigarh-based venture established in 2020. After successfully executing multiple events and
                        gaining deep industry expertise, the founders rebranded and elevated the vision to create
                        Tavix Events - a more refined, modern, and scalable event solutions brand.
                    </p>
                </div>
                <div class="col-md-6 mb-30">
                    <h5>2. Mission, Vision &amp; Core Values</h5>
                    <h6>Mission</h6>
                    <p>
                        To deliver exceptional, creative, and seamless event experiences that exceed client
                        expectations while maintaining the highest standards of professionalism and innovation.
                    </p>
                    <h6>Vision</h6>
                    <p>
                        To become one of India's most trusted and premium event management brands known for creativity,
                        execution excellence, and customer satisfaction.
                    </p>
                    <h6>Core Values</h6>
                    <ul>
                        <li>Client-Centric Approach</li>
                        <li>Creativity &amp; Innovation</li>
                        <li>Transparency &amp; Trust</li>
                        <li>Attention to Detail</li>
                        <li>Timely Execution</li>
                    </ul>
                </div>
                <div class="col-md-6 mb-30">
                    <h5>3. Founder Details</h5>
                    <h6>Pooja Thakur (Co-Founder)</h6>
                    <ul>
                        <li>Expertise in event styling, client coordination, and creative planning</li>
                        <li>Strong background in managing weddings and social events</li>
                        <li>Known for aesthetic design sense and personalized event execution</li>
                    </ul>
                    <h6>Manish Thakur (Co-Founder)</h6>
                    <ul>
                        <li>Expertise in operations, finance, and vendor management</li>
                        <li>Strong background in business strategy and execution</li>
                        <li>Ensures smooth workflow, budgeting, and scalable growth</li>
                    </ul>
                </div>
                <div class="col-md-6 mb-30">
                    <h5>4. Areas of Expertise</h5>
                    <ul>
                        <li>Wedding Planning &amp; Destination Weddings</li>
                        <li>Corporate Events &amp; Brand Activations</li>
                        <li>Social &amp; Private Celebrations</li>
                        <li>Luxury Event Styling &amp; Decor</li>
                        <li>End-to-End Event Management</li>
                    </ul>
                </div>
                <div class="col-md-6 mb-30">
                    <h5>5. Unique Selling Points (USPs)</h5>
                    <ul>
                        <li>Customized Event Experiences - No template-based planning</li>
                        <li>Budget Optimization Expertise - Maximum value within client budget</li>
                        <li>Strong Vendor Network - Trusted vendors across North India</li>
                        <li>Creative Concept Execution - Unique themes and styling</li>
                        <li>End-to-End Solutions - From planning to execution</li>
                        <li>Client Transparency - Clear costing and communication</li>
                    </ul>
                </div>
                <div class="col-md-6 mb-30">
                    <h5>6. Target Audience</h5>
                    <ul>
                        <li>Couples planning weddings (mid to luxury segment)</li>
                        <li>Corporates for events, launches, and conferences</li>
                        <li>Families planning private celebrations</li>
                        <li>Brands looking for event-based promotions</li>
                    </ul>
                </div>
                <div class="col-md-6 mb-30">
                    <h5>7. Services Offered</h5>
                    <h6>Wedding Services</h6>
                    <ul>
                        <li>Full Wedding Planning</li>
                        <li>Destination Wedding Planning</li>
                        <li>Pre-wedding Functions (Haldi, Mehendi, Sangeet)</li>
                        <li>Wedding Decor &amp; Styling</li>
                        <li>Vendor Management</li>
                    </ul>
                    <h6>Corporate Events</h6>
                    <ul>
                        <li>Corporate Meetings &amp; Conferences</li>
                        <li>Product Launches</li>
                        <li>Award Functions</li>
                        <li>Team Building Activities</li>
                    </ul>
                    <h6>Social Events</h6>
                    <ul>
                        <li>Birthday Parties</li>
                        <li>Anniversary Celebrations</li>
                        <li>Baby Showers</li>
                        <li>Private Gatherings</li>
                    </ul>
                    <h6>Specialized Services</h6>
                    <ul>
                        <li>Theme-Based Event Design</li>
                        <li>Venue Selection &amp; Booking</li>
                        <li>Artist &amp; Entertainment Management</li>
                        <li>Catering &amp; Hospitality</li>
                        <li>Photography &amp; Videography</li>
                        <li>Logistics &amp; Guest Management</li>
                    </ul>
                </div>
            </div>
        </div>
    </section> -->

    <?php include 'includes/testimonials.php'; ?>

    <section class="signup">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6 p-0">
                    <div class="img left"><img src="img/signup.jpg" alt="Quick inquiry" /></div>
                </div>
                <div class="col-md-6 p-0 valign">
                    <div class="content">
                        <div class="cont text-left">
                            <h6>Quick Inquiry</h6>
                            <h4>Let's Plan Your <span>Event</span></h4>
                            <p>
                                Weddings, corporate events, private celebrations, or brand
                                activations - share your requirement and we will get in touch.
                            </p>
                            <form method="post" class="contact__form" action="#">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="alert alert-success contact__msg" style="display: none"
                                            role="alert">
                                            Your inquiry was sent successfully.
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 form-group">
                                        <input name="name" type="text" placeholder="Full Name *" required />
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <input name="phone" type="text" placeholder="Phone Number *" required />
                                    </div>
                                    <div class="col-md-12 form-group">
                                        <input name="email" type="email" placeholder="Email Address *" required />
                                    </div>
                                    <div class="col-md-12 form-group">
                                        <textarea name="message" rows="3"
                                            placeholder="Tell us about your event"></textarea>
                                    </div>
                                    <div class="col-md-12">
                                        <button class="butn-dark" type="submit"><span>Submit Inquiry</span></button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

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
</body>

</html>
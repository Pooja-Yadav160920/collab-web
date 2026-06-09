@extends('layouts.app')
@section('content')


<!-- Hero Section -->
<section id="hero" class="hero section">

  <div class="container" data-aos="fade-up" data-aos-delay="100">

    <div class="row align-items-center gy-5">

      <div class="col-lg-6" data-aos="fade-right" data-aos-delay="200">
        <div class="hero-content">
          <div class="hero-tag" data-aos="fade-up" data-aos-delay="250">
            <span class="tag-dot"></span>
            <span class="tag-text">SMART PROCUREMENT PLATFORM</span>
          </div>

          <h1 class="hero-headline" data-aos="fade-up" data-aos-delay="300">End Email Chaos. Take Full Control of Your Supplier Ecosystem</h1>

          <p class="hero-text" data-aos="fade-up" data-aos-delay="350">Collab is a powerful supplier collaboration platform built for 3PL and supply chain companies—bringing POs, invoices, stock visibility, and supplier communication into one unified system.</p>

          <div class="hero-cta" data-aos="fade-up" data-aos-delay="400">
            <a href="#contact" class="cta-button">
              <span>Get In Touch</span>
              <i class="bi bi-arrow-right"></i>
            </a>
            <a href="https://www.youtube.com/watch?v=Y7f98aduVJ8" class="glightbox cta-link" data-gallery="hero-video">
              <i class="bi bi-play-circle"></i>
              <span>Watch Video</span>
            </a>
          </div>
        </div>
      </div>

      <!-- <div class="col-lg-6" data-aos="fade-left" data-aos-delay="300">
        <div class="stats-grid">
          <div class="stat-card stat-card-primary" data-aos="zoom-in" data-aos-delay="350">
            <div class="stat-icon-wrap">
              <i class="bi bi-rocket-takeoff"></i>
            </div>
            <div class="stat-info">
              <span class="stat-value">150+</span>
              <span class="stat-title">Projects Launched</span>
            </div>
          </div>

          <div class="stat-card" data-aos="zoom-in" data-aos-delay="400">
            <div class="stat-icon-wrap">
              <i class="bi bi-heart"></i>
            </div>
            <div class="stat-info">
              <span class="stat-value">98%</span>
              <span class="stat-title">Client Satisfaction</span>
            </div>
          </div>

          <div class="stat-card" data-aos="zoom-in" data-aos-delay="450">
            <div class="stat-icon-wrap">
              <i class="bi bi-lightbulb"></i>
            </div>
            <div class="stat-info">
              <span class="stat-value">19+</span>
              <span class="stat-title">Years Experience</span>
            </div>
          </div>

          <div class="stat-card stat-card-accent" data-aos="zoom-in" data-aos-delay="500">
            <div class="stat-icon-wrap">
              <i class="bi bi-briefcase"></i>
            </div>
            <div class="stat-info">
              <span class="stat-value">500+</span>
              <span class="stat-title">Team Experts</span>
            </div>
          </div>
        </div>
      </div> -->

    </div>

  </div>

</section><!-- /Hero Section -->

<section id="brands" class="testimonials section">

  <div class="container-fluid" data-aos="fade-up" data-aos-delay="100">

    <div class="row">
      <!-- <h2 class="section-title" data-aos="fade-up" data-aos-delay="200">Trusted by global manufacturers,
retailers, and distributors</h2> -->



      <!-- Right Testimonials Slider -->
      <div class="col-lg-12" data-aos="fade-left" data-aos-delay="200">
        <div class="testimonials-carousel swiper init-swiper">
          <script type="application/json" class="swiper-config">
            {
              "loop": true,
              "speed": 700,
              "autoplay": {
                "delay": 5000
              },
              "slidesPerView": 4,
              "spaceBetween": 24,
              "pagination": {
                "el": ".swiper-pagination",
                "type": "bullets",
                "clickable": true
              },
              "breakpoints": {
                "768": {
                  "slidesPerView": 7
                }
              }
            }
          </script>

          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="brand-card">
                <div class="author-info border-top-0">
                  <img src="images/brands/logo1.webp" alt="Brand 1" class="brand-img p-2" loading="lazy">
                </div>
              </div>
            </div>

            <div class="swiper-slide">
              <div class="brand-card">
                <div class="author-info border-top-0">
                  <img src="images/brands/logo2.webp" alt="Brand 2" class="brand-img p-2" loading="lazy">
                </div>
              </div>
            </div>

            <div class="swiper-slide">
              <div class="brand-card">
                <div class="author-info border-top-0">
                  <img src="images/brands/logo3.webp" alt="Brand 3" class="brand-img p-2" loading="lazy">
                </div>
              </div>
            </div>

            <div class="swiper-slide">
              <div class="brand-card">
                <div class="author-info border-top-0">
                  <img src="images/brands/logo4.webp" alt="Brand 4" class="brand-img p-2" loading="lazy">
                </div>
              </div>
            </div>

            <div class="swiper-slide">
              <div class="brand-card">
                <div class="author-info border-top-0">
                  <img src="images/brands/logo5.webp" alt="Brand 5" class="brand-img p-2" loading="lazy">
                </div>
              </div>
            </div>

            <div class="swiper-slide">
              <div class="brand-card">
                <div class="author-info border-top-0">
                  <img src="images/brands/logo6.webp" alt="Brand 6" class="brand-img p-2" loading="lazy">
                </div>
              </div>
            </div>

            <div class="swiper-slide">
              <div class="brand-card">
                <div class="author-info border-top-0">
                  <img src="images/brands/logo7.webp" alt="Brand 7" class="brand-img p-2" loading="lazy">
                </div>
              </div>
            </div>

            <div class="swiper-slide">
              <div class="brand-card">
                <div class="author-info border-top-0">
                  <img src="images/brands/logo8.webp" alt="Brand 8" class="brand-img p-2" loading="lazy">
                </div>
              </div>
            </div>

            <div class="swiper-slide">
              <div class="brand-card">
                <div class="author-info border-top-0">
                  <img src="images/brands/logo9.webp" alt="Brand 9" class="brand-img p-2" loading="lazy">
                </div>
              </div>
            </div>

            <div class="swiper-slide">
              <div class="brand-card">
                <div class="author-info border-top-0">
                  <img src="images/brands/logo10.webp" alt="Brand 10" class="brand-img p-2" loading="lazy">
                </div>
              </div>
            </div>

            <div class="swiper-slide">
              <div class="brand-card">
                <div class="author-info border-top-0">
                  <img src="images/brands/logo11.webp" alt="Brand 11" class="brand-img p-2" loading="lazy">
                </div>
              </div>
            </div>

            <div class="swiper-slide">
              <div class="brand-card">
                <div class="author-info border-top-0">
                  <img src="images/brands/logo12.webp" alt="Brand 12" class="brand-img p-2" loading="lazy">
                </div>
              </div>
            </div>

            <div class="swiper-slide">
              <div class="brand-card">
                <div class="author-info border-top-0">
                  <img src="images/brands/logo13.webp" alt="Brand 13" class="brand-img p-2" loading="lazy">
                </div>
              </div>
            </div>

            <div class="swiper-slide">
              <div class="brand-card">
                <div class="author-info border-top-0">
                  <img src="images/brands/logo14.webp" alt="Brand 14" class="brand-img p-2" loading="lazy">
                </div>
              </div>
            </div>

          </div>

          <!-- <div class="swiper-pagination"></div> -->

        </div>
      </div><!-- End Right Testimonials Slider -->

    </div>

  </div>

</section>

<!-- About Section -->
<section id="about" class="about section">

  <div class="container" data-aos="fade-up" data-aos-delay="100">

    <div class="row gy-5 align-items-center">

      <div class="col-xl-6 aos-init aos-animate" data-aos="fade-right" data-aos-delay="200">
        <div class="about-images-wrapper">
          <div class="image-main">
            <img src="/images/about2.webp" alt="Business meeting" class="img-fluid">
          </div>
          <div class="image-offset">
            <img src="/images/about1.avif" alt="Detail shot" class="img-fluid">
          </div>
          <div class="experience-badge">
            <span class="years purecounter" data-purecounter-start="0" data-purecounter-end="19" data-purecounter-duration="1">19</span>
            <span class="text">Years of<br>Excellence</span>
          </div>
          <div class="shape-pattern"></div>
        </div>
      </div>

      <div class="col-xl-6 aos-init aos-animate" data-aos="fade-left" data-aos-delay="300">
        <div class="about-content">
          <div class="section-subtitle">PROBLEM</div>
          <h2>Still Managing Suppliers on Emails and Excel?</h2>
          <p class="lead-text">
            Most businesses today struggle with fragmented supplier communication: </p>
          <p class="mb-4 description">
            <!-- Procurement teams often rely on disconnected tools and manual follow-ups to manage supplier operations. As businesses grow, this lack of centralized visibility creates delays, inefficiencies, and communication gaps across the entire supply chain.              </p> -->

          <div class="features-grid">
            <div class="feature-card">
              <i class="bi bi-check-circle-fill"></i>
              <span>Purchase Orders sent via email</span>
            </div>
            <div class="feature-card">
              <i class="bi bi-check-circle-fill"></i>
              <span>Suppliers replying on separate threads</span>
            </div>
            <div class="feature-card">
              <i class="bi bi-check-circle-fill"></i>
              <span>Invoice PDFs arriving manually</span>
            </div>
            <div class="feature-card">
              <i class="bi bi-check-circle-fill"></i>
              <span>Warehouse updates happening in isolation</span>
            </div>
            <div class="feature-card">
              <i class="bi bi-check-circle-fill"></i>
              <span>No single source of truth</span>
            </div>
          </div>

          <div class="impact-section">
            <div class="impact-header">
              <span>The Result?</span>
            </div>


            <div class="impact-list">

              <div class="impact-item">
                <i class="bi bi-eye"></i>
                <strong>Delayed Visibility</strong>
              </div>

              <div class="impact-item">
                <i class="bi bi-file-earmark-x"></i>
                <strong>Data Mismatch Between Systems</strong>
              </div>

              <div class="impact-item">
                <i class="bi bi-hourglass-split"></i>
                <strong>Manual Workload for Operations Teams</strong>
              </div>

              <div class="impact-item">
                <i class="bi bi-diagram-3"></i>
                <strong>Poor Coordination Between Client, Supplier & Warehouse</strong>
              </div>

            </div>
          </div>
        </div>
        <!-- <div class="action-buttons mt-4">
                <a href="#" class="btn btn-primary-custom">
                  Discover More <i class="bi bi-arrow-right"></i>
                </a>
                <div class="contact-info">
                  <div class="icon-box">
                    <i class="bi bi-telephone-fill"></i>
                  </div>
                  <div class="text">
                    <span>Call Us Today</span>
                    <a href="tel:+15551234567">+1 (555) 123-4567</a>
                  </div>
                </div>
              </div> -->

      </div>
    </div>

  </div>

  </div>

</section><!-- /About Section -->

<section id="solutions" class="about section">

  <div class="container" data-aos="fade-up" data-aos-delay="100">

    <div class="row gy-5 align-items-center">
      <div class="col-xl-5 aos-init aos-animate" data-aos="fade-left" data-aos-delay="300">
        <div class="about-content">
          <div class="section-subtitle">SOLUTION</div>
          <h2>Collab – One Platform. Complete Supplier Visibility.</h2>
          <p class="lead-text text-accent">
  Disconnected systems lead to delays, errors, and poor visibility. </p>
          <p class="mb-4 description">
              Collab bridges the gap between your clients, suppliers, and warehouse operations by digitizing and centralizing the entire procurement and fulfilment lifecycle.

              From PO creation → Supplier confirmation → Invoice upload → Warehouse GRN → Stock updates, everything happens in one place—live and transparent.

        </div>

      </div>
      <div class="col-xl-7 aos-init aos-animate" data-aos="fade-right" data-aos-delay="200">
        <div class="about-images-wrapper">
          <div class="image-main rounded-4">
           <img src="/images/solution.png"
     class="img-fluid border border-2 rounded-4"
     style="--bs-border-color:#4b49ac;">
          </div>
          <!-- <div class="image-offset">
            <img src="/images/about1.avif" alt="Detail shot" class="img-fluid">
          </div> -->
          <!-- <div class="experience-badge">
            <span class="years purecounter" data-purecounter-start="0" data-purecounter-end="19" data-purecounter-duration="1">19</span>
            <span class="text">Years of<br>Excellence</span>
          </div> -->
          <div class="shape-pattern"></div>
        </div>
      </div>

      
    </div>

  </div>

  </div>

</section>

<!-- Services Section -->
<section id="features" class="services section">

  <!-- Section Title -->
  <div class="container section-title" data-aos="fade-up">
    <h2>Key Features</h2>
    <p>Purpose Built features for modern procurement and supply chain management.</p>
  </div><!-- End Section Title -->

  <div class="container" data-aos="fade-up" data-aos-delay="100">

    <div class="row g-4">

      <!-- Service Card 1 -->
      <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
        <div class="service-card">
          <div class="icon-wrapper">
            <i class="bi bi-file-earmark-text"></i>
          </div>

          <h3>Centralized PO Management</h3>

          <ul class="service-list">
            <li><i class="bi bi-check-circle"></i> Create or sync POs directly from your ERP/WMS</li>
            <li><i class="bi bi-check-circle"></i> View, Download & Respond</li>
            <li><i class="bi bi-check-circle"></i> Track partial and complete fulfilments</li>
          </ul>
        </div>
      </div>

      <!-- Service Card 2 -->
      <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
        <div class="service-card">
          <div class="icon-wrapper">
            <i class="bi bi-receipt"></i>
          </div>

          <h3>Supplier Invoice Management</h3>

          <ul class="service-list">
            <li><i class="bi bi-check-circle"></i> Upload invoices directly on the platform</li>
            <li><i class="bi bi-check-circle"></i> Eliminate manual email-based invoice tracking</li>
            <li><i class="bi bi-check-circle"></i> Integrate with WMS for automated or AI-assisted entries</li>
          </ul>
        </div>
      </div>

      <!-- Service Card 3 -->
      <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
        <div class="service-card">
          <div class="icon-wrapper">
            <i class="bi bi-box-seam"></i>
          </div>

          <h3>Real-Time Order & Inventory Visibility</h3>

          <ul class="service-list">
            <li><i class="bi bi-check-circle"></i> Track PO status, ASN, MRN, and inbound processing</li>
            <li><i class="bi bi-check-circle"></i> Live warehouse stock visibility</li>
            <li><i class="bi bi-check-circle"></i> Unified dashboard for all stakeholders</li>
          </ul>
        </div>
      </div>

      <!-- Service Card 4 -->
      <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
        <div class="service-card">
          <div class="icon-wrapper">
            <i class="bi bi-people-fill"></i>
          </div>

          <h3>Role-Based Access Control</h3>

          <ul class="service-list">
            <li><i class="bi bi-check-circle"></i> Client Admin</li>
            <li><i class="bi bi-check-circle"></i> Client Users</li>
            <li><i class="bi bi-check-circle"></i> Suppliers</li>
          </ul>
        </div>
      </div>

      <!-- Service Card 5 -->
      <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
        <div class="service-card">
          <div class="icon-wrapper">
            <i class="bi bi-bell-fill"></i>
          </div>

          <h3>Automated Alerts & Notifications</h3>

          <ul class="service-list">
            <li><i class="bi bi-check-circle"></i> PO issuance alerts</li>
            <li><i class="bi bi-check-circle"></i> Supplier action reminders</li>
            <li><i class="bi bi-check-circle"></i> Invoice & GRN updates</li>
          </ul>
        </div>
      </div>

      <!-- Service Card 6 -->
      <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
        <div class="service-card">
          <div class="icon-wrapper">
            <i class="bi bi-diagram-3-fill"></i>
          </div>

          <h3>Seamless Integration</h3>

          <ul class="service-list">
            <li><i class="bi bi-check-circle"></i> Integrates with any WMS</li>
            <li><i class="bi bi-check-circle"></i> ERP & Inventory Systems</li>
            <li><i class="bi bi-check-circle"></i> Ensures data consistency across your ecosystem</li>
          </ul>
        </div>
      </div>
       <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
        <div class="service-card">
          <div class="icon-wrapper">
            <i class="bi bi-box-seam"></i>
          </div>

          <h3>Store Replenishment Management</h3>

          <ul class="service-list">
            <li><i class="bi bi-check-circle"></i>Raise and track store indents centrally</li>
            <li><i class="bi bi-check-circle"></i> Real-time visibility of stock and open POs</li>
            <li><i class="bi bi-check-circle"></i> Faster replenishment decisions across locations</li>
          </ul>
        </div>
      </div>
       <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
        <div class="service-card">
          <div class="icon-wrapper">
            <i class="bi bi-clipboard-data"></i>
          </div>

          <h3>Supplier Performance & Compliance Tracking</h3>

          <ul class="service-list">
            <li><i class="bi bi-check-circle"></i>Track order confirmation timelines</li>
            <li><i class="bi bi-check-circle"></i> Measure on-time deliveries</li>
            <li><i class="bi bi-check-circle"></i>Evaluate supplier compliance and reliability</li>
          </ul>
        </div>
      </div>
       <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
        <div class="service-card">
          <div class="icon-wrapper">
            <i class="bi bi-bar-chart-line-fill"></i>
          </div>

          <h3>Centralized Reporting Dashboard</h3>

          <ul class="service-list">
            <li><i class="bi bi-check-circle"></i>View procurement and supplier activities in one place</li>
            <li><i class="bi bi-check-circle"></i>Monitor order, invoice, and inventory status</li>
            <li><i class="bi bi-check-circle"></i>Support faster business decisions</li>
          </ul>
        </div>
      </div>

    </div>

    <!-- Stats Row -->
    <div class="stats-row" data-aos="fade-up" data-aos-delay="400">
      <div class="row g-4 justify-content-center">
        <div class="col-6 col-md-3">
          <div class="stat-item">
            <span class="stat-number">250+</span>
            <span class="stat-label">Projects Delivered</span>
          </div>
        </div>
        <div class="col-6 col-md-3">
          <div class="stat-item">
            <span class="stat-number">98%</span>
            <span class="stat-label">Client Satisfaction</span>
          </div>
        </div>
        <div class="col-6 col-md-3">
          <div class="stat-item">
            <span class="stat-number">15+</span>
            <span class="stat-label">Years Experience</span>
          </div>
        </div>
        <div class="col-6 col-md-3">
          <div class="stat-item">
            <span class="stat-number">40+</span>
            <span class="stat-label">Team Experts</span>
          </div>
        </div>
      </div>
    </div>

  </div>

</section><!-- /Services Section -->
<section id="why-us" class="why-us section light-background">

  <!-- Section Title -->
  <div class="container section-title" data-aos="fade-up">
    <h2>How It Works</h2>
    <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
  </div><!-- End Section Title -->

  <div class="container" data-aos="fade-up" data-aos-delay="100">

    <div class="row g-5">
      <!-- <div class="col-lg-5" data-aos="fade-right" data-aos-delay="200">
            <div class="sidebar-content">
              <div class="badge-wrapper">
                <span class="section-badge"><i class="bi bi-stars"></i> Our Difference</span>
              </div>
              <h2>Transform Your Vision Into Digital Excellence</h2>
              <p class="description">Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum.</p>

              <div class="col-lg-5" data-aos="fade-right" data-aos-delay="200">
    <img src="assets/img/process-flow.png"
         alt="Process Flow"
         class="img-fluid rounded-4 shadow-sm">
</div>

              <div class="action-buttons">
                <a href="#" class="btn-main">Get Started Today</a>
                <a href="#" class="btn-outline">Explore Portfolio</a>
              </div>
            </div>
          </div> -->

      <div class="col-lg-12" data-aos="fade-left" data-aos-delay="200">
        <!-- <div class="features-grid">
              <div class="feature-box highlight" data-aos="fade-up" data-aos-delay="250">
                <div class="feature-ribbon">Top Rated</div>
                <div class="feature-icon">
                  <i class="bi bi-rocket-takeoff-fill"></i>
                </div>
                <div class="feature-content">
                  <h4>Rapid Implementation</h4>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit sed do eiusmod tempor incididunt ut labore.</p>
                  <a href="#" class="feature-link">Discover How <i class="bi bi-chevron-right"></i></a>
                </div>
              </div>

              <div class="feature-box" data-aos="fade-up" data-aos-delay="300">
                <div class="feature-icon">
                  <i class="bi bi-bar-chart-line-fill"></i>
                </div>
                <div class="feature-content">
                  <h4>Analytics-First Approach</h4>
                  <p>Excepteur sint occaecat cupidatat non proident sunt in culpa qui officia deserunt mollit.</p>
                  <a href="#" class="feature-link">Discover How <i class="bi bi-chevron-right"></i></a>
                </div>
              </div>

              <div class="feature-box" data-aos="fade-up" data-aos-delay="350">
                <div class="feature-icon">
                  <i class="bi bi-award-fill"></i>
                </div>
                <div class="feature-content">
                  <h4>Award-Winning Team</h4>
                  <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla.</p>
                  <a href="#" class="feature-link">Discover How <i class="bi bi-chevron-right"></i></a>
                </div>
              </div>
            </div> -->

        <div class="process-timeline" data-aos="fade-up" data-aos-delay="400">
          <h5 class="timeline-title"><i class="bi bi-diagram-3-fill"></i> Our Proven Methodology</h5>
          <div class="timeline-steps">
            <div class="timeline-step">
              <div class="step-marker">1</div>
              <div class="step-info">
                <strong>Client raises PO </strong>
                <span>Creates and issues a <br> purchase order.</span>
              </div>
            </div>
            <div class="timeline-connector"></div>
            <div class="timeline-step">
              <div class="step-marker">2</div>
              <div class="step-info">
                <strong>Order Confirmation</strong>
                <span>Supplier receives notification &<br> confirms order</span>
              </div>
            </div>
            <div class="timeline-connector"></div>
            <div class="timeline-step">
              <div class="step-marker">3</div>
              <div class="step-info">
                <strong>Invoice Upload</strong>
                <span>Supplier uploads invoice<br> and dispatch details</span>
              </div>
            </div>
            <div class="timeline-connector"></div>
            <div class="timeline-step">
              <div class="step-marker">4</div>
              <div class="step-info">
                <strong>Goods Receipt</strong>
                <span>Warehouse receives goods<br> and updates GRN/MRN</span>
              </div>
            </div>
            <div class="timeline-connector"></div>

            <div class="timeline-step">
              <div class="step-marker">5</div>
              <div class="step-info">
                <strong>Stock Update</strong>
                <span>Stock reflects in real-time across systems</span>
              </div>
            </div>
          </div>
        </div>

        <div class="capabilities-section" data-aos="fade-up" data-aos-delay="450">
          <h5 class="capabilities-heading">What We Bring to the Table</h5>

          <div class="capabilities-grid">

            <div class="capability-card">
              <div class="capability-icon">
                <i class="bi bi-bullseye"></i>
              </div>
              <h6>Everyone Sees the Same Data</h6>
              <p>
                Centralized information ensures suppliers, warehouses, and procurement teams
                work from a single source of truth in real time.
              </p>
            </div>

            <div class="capability-card">
              <div class="capability-icon">
                <i class="bi bi-code-slash"></i>
              </div>
              <h6>No Duplication</h6>
              <p>
                Eliminate repetitive data entry and manual updates with synchronized workflows
                across purchasing, inventory, and supplier operations.
              </p>
            </div>

            <div class="capability-card">
              <div class="capability-icon">
                <i class="bi bi-arrow-repeat"></i>
              </div>
              <h6>No Confusion</h6>
              <p>
                Clear status tracking, automated notifications, and audit trails keep every
                stakeholder aligned throughout the order lifecycle.
              </p>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
  </div>

  </div>

</section>
<!-- Portfolio Section -->
<section id="benefits" class="portfolio section">


  <!-- <div class="container section-title" data-aos="fade-up">
    <h2>Portfolio</h2>
    <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
  </div> -->

  <div class="container" data-aos="fade-up" data-aos-delay="100">

    <div class="isotope-layout" data-default-filter=".benefits" data-layout="fitRows" data-sort="original-order">

      <div class="filters-wrapper" data-aos="fade-up" data-aos-delay="100">
        <ul class="portfolio-filters isotope-filters">
          <li data-filter=".benefits" class="filter-active">Benefits</li>
          <li data-filter=".use-cases">Use Cases</li>
          <li data-filter=".differentiation">Differentiation</li>

        </ul>
      </div>

      <div class="row g-4 isotope-container" data-aos="fade-up" data-aos-delay="200">

        <div class="col-lg-4 col-md-6 portfolio-item isotope-item benefits">
          <div class="project-card">
            <div class="image-wrapper">
              <img src="/images/benefits/benefit2.png" alt="Project showcase" class="img-fluid" loading="lazy">
              <div class="hover-overlay">
                <!-- <div class="overlay-actions">
                      <a href="assets/img/portfolio/portfolio-2.webp" class="glightbox action-btn" data-gallery="portfolio">
                        <i class="bi bi-eye"></i>
                      </a>
                      <a href="#" class="action-btn">
                        <i class="bi bi-link-45deg"></i>
                      </a>
                    </div> -->
              </div>
              <!-- <span class="category-badge">Web Design</span> -->
            </div>
            <div class="project-info">
              <h3>100% Visibility Across Supply Chain</h3>
              <p>Monitor purchase orders, shipments, inventory, and supplier activities
                in real time from a single centralized platform.</p>
              <div class="project-meta">
                <div class="tech-tags">
                  <!-- <span>Angular</span>
                      <span>Python</span> -->
                </div>
                <!-- <span class="year">2024</span> -->
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item isotope-item benefits">
          <div class="project-card featured">
            <div class="image-wrapper">
              <img src="/images/benefits/benefit1.png" alt="Project showcase" class="img-fluid" loading="lazy">
              <div class="hover-overlay">
                <!-- <div class="overlay-actions">
                      <a href="assets/img/portfolio/portfolio-4.webp" class="glightbox action-btn" data-gallery="portfolio">
                        <i class="bi bi-eye"></i>
                      </a>
                      <a href="#" class="action-btn">
                        <i class="bi bi-link-45deg"></i>
                      </a>
                    </div> -->
              </div>
              <!-- <span class="category-badge">Mobile Apps</span> -->
              <!-- <span class="featured-badge"><i class="bi bi-star-fill"></i> Featured</span> -->
            </div>
            <div class="project-info">
              <h3>Reduce Email Dependency by 80%+</h3>
              <p> Replace scattered email communication with structured workflows,
                automated notifications, and a shared collaboration workspace.</p>
              <div class="project-meta">
                <div class="tech-tags">
                  <!-- <span>Swift</span>
                              <span>Kotlin</span> -->
                </div>
                <!-- <span class="year">2024</span> -->
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 portfolio-item isotope-item benefits">
          <div class="project-card">
            <div class="image-wrapper">
              <img src="/images/benefits/benefit4.png" alt="Project showcase" class="img-fluid" loading="lazy">
              <div class="hover-overlay">
                <!-- <div class="overlay-actions">
                      <a href="assets/img/portfolio/portfolio-6.webp" class="glightbox action-btn" data-gallery="portfolio">
                        <i class="bi bi-eye"></i>
                      </a>
                      <a href="#" class="action-btn">
                        <i class="bi bi-link-45deg"></i>
                      </a>
                    </div> -->
              </div>
              <!-- <span class="category-badge">Branding</span> -->
            </div>
            <div class="project-info">
              <h3>Faster Order Processing & Reduced Errors</h3>
              <p> Automate order confirmations, invoice sharing, and approvals to
                accelerate operations while minimizing manual mistakes.</p>
              <div class="project-meta">
                <div class="tech-tags">
                  <!-- <span>Photoshop</span>
                      <span>Illustrator</span> -->
                </div>
                <!-- <span class="year">2023</span> -->
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item isotope-item benefits">
          <div class="project-card">
            <div class="image-wrapper">
              <img src="/images/benefits/benefit5.png" alt="Project showcase" class="img-fluid" loading="lazy">
              <div class="hover-overlay">
                <!-- <div class="overlay-actions">
                      <a href="assets/img/portfolio/portfolio-8.webp" class="glightbox action-btn" data-gallery="portfolio">
                        <i class="bi bi-eye"></i>
                      </a>
                      <a href="#" class="action-btn">
                        <i class="bi bi-link-45deg"></i>
                      </a>
                    </div> -->
              </div>
              <!-- <span class="category-badge">UI/UX</span> -->
            </div>
            <div class="project-info">
              <h3>Real Time Decision Making</h3>
              <p> Access live operational data and status updates to make quicker,
                data-driven decisions across the supply chain.</p>
              <div class="project-meta">
                <div class="tech-tags">
                  <!-- <span>Figma</span>
                      <span>Principle</span> -->
                </div>
                <!-- <span class="year">2024</span> -->
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item isotope-item benefits">
          <div class="project-card">
            <div class="image-wrapper">
              <img src="/images/benefits/benefit6.png" alt="Project showcase" class="img-fluid" loading="lazy">
              <div class="hover-overlay">
                <!-- <div class="overlay-actions">
                      <a href="assets/img/portfolio/portfolio-1.webp" class="glightbox action-btn" data-gallery="portfolio">
                        <i class="bi bi-eye"></i>
                      </a>
                      <a href="#" class="action-btn">
                        <i class="bi bi-link-45deg"></i>
                      </a>
                    </div> -->
              </div>
              <!-- <span class="category-badge">Web Design</span> -->
            </div>
            <div class="project-info">
              <h3>Improved Supplier Accountability</h3>
              <p> Track every action, update, and response with complete transparency,
                ensuring stronger compliance and supplier performance.</p>
              <div class="project-meta">
                <div class="tech-tags">
                  <!-- <span>React</span>
                      <span>MongoDB</span> -->
                </div>
                <!-- <span class="year">2023</span> -->
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 portfolio-item isotope-item benefits">
          <div class="project-card">
            <div class="image-wrapper">
              <img src="/images/benefits/benefit7.png" alt="Project showcase" class="img-fluid" loading="lazy">
              <div class="hover-overlay">
                <!-- <div class="overlay-actions">
                      <a href="assets/img/portfolio/portfolio-3.webp" class="glightbox action-btn" data-gallery="portfolio">
                        <i class="bi bi-eye"></i>
                      </a>
                      <a href="#" class="action-btn">
                        <i class="bi bi-link-45deg"></i>
                      </a>
                    </div> -->
              </div>
              <!-- <span class="category-badge">Mobile Apps</span> -->
            </div>
            <div class="project-info">
              <h3>Lower Operational Overhead</h3>
              <p> Reduce manual coordination efforts and administrative workload by
                digitizing supplier and warehouse communication processes.</p>
              <div class="project-meta">
                <div class="tech-tags">
                  <!-- <span>Flutter</span>
                      <span>AWS</span> -->
                </div>
                <!-- <span class="year">2024</span> -->
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item isotope-item use-cases">
          <div class="project-card featured">
            <div class="image-wrapper">
              <img src="/images/benefits/benefit10.png" alt="Project showcase" class="img-fluid" loading="lazy">
              <div class="hover-overlay">
                <!-- <div class="overlay-actions">
                      <a href="assets/img/portfolio/portfolio-7.webp" class="glightbox action-btn" data-gallery="portfolio">
                        <i class="bi bi-eye"></i>
                      </a>
                      <a href="#" class="action-btn">
                        <i class="bi bi-link-45deg"></i>
                      </a>
                    </div> -->
              </div>
              <!-- <span class="category-badge">UI/UX</span>
                  <span class="featured-badge"><i class="bi bi-star-fill"></i> Featured</span> -->
            </div>
            <div class="project-info">
              <h3>3PL Companies</h3>
              <p> Streamline communication between clients, suppliers, and warehouses
                while maintaining complete visibility across logistics operations.</p>
              <div class="project-meta">
                <div class="tech-tags">
                  <!-- <span>Sketch</span>
                      <span>Zeplin</span> -->
                </div>
                <!-- <span class="year">2024</span> -->
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item isotope-item use-cases">
          <div class="project-card">
            <div class="image-wrapper">
              <img src="/images/benefits/benefit11.png" alt="Project showcase" class="img-fluid" loading="lazy">
              <div class="hover-overlay">
                <!-- <div class="overlay-actions">
                      <a href="assets/img/portfolio/portfolio-9.webp" class="glightbox action-btn" data-gallery="portfolio">
                        <i class="bi bi-eye"></i>
                      </a>
                      <a href="#" class="action-btn">
                        <i class="bi bi-link-45deg"></i>
                      </a>
                    </div> -->
              </div>
              <!-- <span class="category-badge">Branding</span> -->
            </div>
            <div class="project-info">
              <h3>Retail Chains & Distribution Businesses</h3>
              <p>Manage suppliers, purchase orders, and inventory efficiently across
                multiple stores, distribution centers, and business locations.</p>
              <div class="project-meta">
                <div class="tech-tags">
                  <!-- <span>InDesign</span>
                        <span>Motion</span> -->
                </div>
                <!-- <span class="year">2023</span> -->
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 portfolio-item isotope-item use-cases">
          <div class="project-card">
            <div class="image-wrapper">
              <img src="/images/benefits/benefit12.png" alt="Project showcase" class="img-fluid" loading="lazy">
              <div class="hover-overlay">
                <!-- <div class="overlay-actions">
                      <a href="assets/img/portfolio/portfolio-9.webp" class="glightbox action-btn" data-gallery="portfolio">
                        <i class="bi bi-eye"></i>
                      </a>
                      <a href="#" class="action-btn">
                        <i class="bi bi-link-45deg"></i>
                      </a>
                    </div> -->
              </div>
              <!-- <span class="category-badge">Branding</span> -->
            </div>
            <div class="project-info">
              <h3>Manufacturing Units</h3>
              <p> Ensure timely procurement of raw materials and improve supplier
                coordination to keep production running without disruptions.</p>
              <div class="project-meta">
                <div class="tech-tags">
                  <!-- <span>InDesign</span>
                      <span>Motion</span> -->
                </div>
                <!-- <span class="year">2023</span> -->
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 portfolio-item isotope-item use-cases">
          <div class="project-card">
            <div class="image-wrapper">
              <img src="/images/benefits/benefit13.png" alt="Project showcase" class="img-fluid" loading="lazy">
              <div class="hover-overlay">
                <!-- <div class="overlay-actions">
                      <a href="assets/img/portfolio/portfolio-9.webp" class="glightbox action-btn" data-gallery="portfolio">
                        <i class="bi bi-eye"></i>
                      </a>
                      <a href="#" class="action-btn">
                        <i class="bi bi-link-45deg"></i>
                      </a>
                    </div> -->
              </div>
              <!-- <span class="category-badge">Branding</span> -->
            </div>
            <div class="project-info">
              <h3>Multi-location Enterprises</h3>
              <p>Centralize supplier collaboration and operational workflows across
                multiple plants, warehouses, and regional business units.</p>
              <div class="project-meta">
                <div class="tech-tags">
                  <!-- <span>InDesign</span>
                        <span>Motion</span> -->
                </div>
                <!-- <span class="year">2023</span> -->
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 portfolio-item isotope-item differentiation">
          <div class="project-card">
            <div class="image-wrapper">
              <img src="/images/benefits/benefit8.png" alt="Project showcase" class="img-fluid" loading="lazy">
              <div class="hover-overlay">
                <!-- <div class="overlay-actions">
                      <a href="assets/img/portfolio/portfolio-9.webp" class="glightbox action-btn" data-gallery="portfolio">
                        <i class="bi bi-eye"></i>
                      </a>
                      <a href="#" class="action-btn">
                        <i class="bi bi-link-45deg"></i>
                      </a>
                    </div> -->
              </div>
              <!-- <span class="category-badge">Branding</span> -->
            </div>
            <div class="project-info">
              <h3>Built for Logistics & 3PL Operations</h3>
              <p> Unlike generic supplier portals, Collab is designed specifically for
                logistics providers and 3PL businesses managing complex supply chains.</p>
              <div class="project-meta">
                <div class="tech-tags">
                  <!-- <span>InDesign</span>
                        <span>Motion</span> -->
                </div>
                <!-- <span class="year">2023</span> -->
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item isotope-item differentiation">
          <div class="project-card">
            <div class="image-wrapper">
              <img src="/images/benefits/benefit3.png" alt="Project showcase" class="img-fluid" loading="lazy">
              <div class="hover-overlay">
                <!-- <div class="overlay-actions">
                      <a href="assets/img/portfolio/portfolio-9.webp" class="glightbox action-btn" data-gallery="portfolio">
                        <i class="bi bi-eye"></i>
                      </a>
                      <a href="#" class="action-btn">
                        <i class="bi bi-link-45deg"></i>
                      </a>
                    </div> -->
              </div>
              <!-- <span class="category-badge">Branding</span> -->
            </div>
            <div class="project-info">
              <h3>Warehouse Centric by Design</h3>
              <p>Deeply integrated with warehouse workflows including GRN, MRN, ASN,
                inventory updates, and goods receipt processes.</p>
              <div class="project-meta">
                <div class="tech-tags">
                  <!-- <span>InDesign</span>
                        <span>Motion</span> -->
                </div>
                <!-- <span class="year">2023</span> -->
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item isotope-item differentiation">
          <div class="project-card">
            <div class="image-wrapper">
              <img src="/images/benefits/benefit9.png" alt="Project showcase" class="img-fluid" loading="lazy">
              <div class="hover-overlay">
                <!-- <div class="overlay-actions">
                  <a href="/images/benefits/benefit9.png" class="glightbox action-btn" data-gallery="portfolio">
                    <i class="bi bi-eye"></i>
                  </a>
                  <a href="#" class="action-btn">
                    <i class="bi bi-link-45deg"></i>
                  </a>
                </div> -->
              </div>
              <!-- <span class="category-badge">Branding</span> -->
            </div>
            <div class="project-info">
              <h3>Handles Real-World Complexity</h3>
              <p> Manage multiple suppliers, warehouses, approvals, and stakeholders
                through a single platform built for enterprise-scale operations.</p>
              <div class="project-meta">
                <div class="tech-tags">
                  <!-- <span>InDesign</span>
                        <span>Motion</span> -->
                </div>
                <!-- <span class="year">2023</span> -->
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item isotope-item differentiation">
          <div class="project-card">
            <div class="image-wrapper">
              <img src="/images/benefits/benefit14.png" alt="Project showcase" class="img-fluid" loading="lazy">
              <div class="hover-overlay">
                <!-- <div class="overlay-actions">
                  <a href="assets/img/portfolio/portfolio-9.webp" class="glightbox action-btn" data-gallery="portfolio">
                    <i class="bi bi-eye"></i>
                  </a>
                  <a href="#" class="action-btn">
                    <i class="bi bi-link-45deg"></i>
                  </a>
                </div> -->
              </div>
              <!-- <span class="category-badge">Branding</span> -->
            </div>
            <div class="project-info">
              <h3>AI-Ready Architecture</h3>
              <p>Extend workflows with AI-powered document processing, automated data
                extraction, and intelligent supply chain automation.</p>
              <div class="project-meta">
                <div class="tech-tags">
                  <!-- <span>InDesign</span>
                        <span>Motion</span> -->
                </div>
                <!-- <span class="year">2023</span> -->
              </div>
            </div>
          </div>
        </div>


      </div>

    </div>



    <div class="cta-section" data-aos="zoom-in" data-aos-delay="300">
      <div class="cta-content">
        <span class="cta-label"><i class="bi bi-lightning-charge-fill"></i> Ready to Start?</span>
        <h3>Take Control of Your Supply Chain with Collab</h3>
        <p>Connect suppliers, warehouses, and procurement teams on one centralized platform. Reduce delays, increase transparency, and drive operational efficiency across your entire network.</p>
        <div class="cta-buttons">
          <a href="#contact" class="btn-cta-primary">Get Started <i class="bi bi-arrow-right"></i></a>
          <a href="#features" class="btn-cta-secondary"><i class="bi bi-play-circle"></i>Explore Features</a>
        </div>
      </div>
      <div class="cta-decoration">
        <div class="floating-shape shape-1"></div>
        <div class="floating-shape shape-2"></div>
        <div class="floating-shape shape-3"></div>
      </div>
    </div>

  </div>

</section>
<!-- /Portfolio Section -->




<!-- Why Us Section -->
<!-- <section id="why-us" class="why-us section light-background">

      <div class="container section-title" data-aos="fade-up">
        <h2>Why Choose Us</h2>
        <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
      </div>

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row g-5">
          <div class="col-lg-5" data-aos="fade-right" data-aos-delay="200">
            <div class="sidebar-content">
              <div class="badge-wrapper">
                <span class="section-badge"><i class="bi bi-stars"></i> Our Difference</span>
              </div>
              <h2>Transform Your Vision Into Digital Excellence</h2>
              <p class="description">Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum.</p>

              <div class="stat-cards">
                <div class="stat-card" data-aos="zoom-in" data-aos-delay="300">
                  <div class="stat-value">
                    <span class="purecounter" data-purecounter-start="0" data-purecounter-end="180" data-purecounter-duration="2">180</span>+
                  </div>
                  <div class="stat-text">Successful Campaigns</div>
                </div>
                <div class="stat-card" data-aos="zoom-in" data-aos-delay="350">
                  <div class="stat-value">
                    <span class="purecounter" data-purecounter-start="0" data-purecounter-end="95" data-purecounter-duration="2">95</span>%
                  </div>
                  <div class="stat-text">Customer Satisfaction</div>
                </div>
                <div class="stat-card" data-aos="zoom-in" data-aos-delay="400">
                  <div class="stat-value">
                    <span class="purecounter" data-purecounter-start="0" data-purecounter-end="320" data-purecounter-duration="2">320</span>%
                  </div>
                  <div class="stat-text">Growth Achieved</div>
                </div>
              </div>

              <div class="action-buttons">
                <a href="#" class="btn-main">Get Started Today</a>
                <a href="#" class="btn-outline">Explore Portfolio</a>
              </div>
            </div>
          </div>

          <div class="col-lg-7" data-aos="fade-left" data-aos-delay="200">
            <div class="features-grid">
              <div class="feature-box highlight" data-aos="fade-up" data-aos-delay="250">
                <div class="feature-ribbon">Top Rated</div>
                <div class="feature-icon">
                  <i class="bi bi-rocket-takeoff-fill"></i>
                </div>
                
                <div class="feature-content">
                  <h4>Rapid Implementation</h4>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit sed do eiusmod tempor incididunt ut labore.</p>
                  <a href="#" class="feature-link">Discover How <i class="bi bi-chevron-right"></i></a>
                </div>
              </div> 
             

              <div class="feature-box" data-aos="fade-up" data-aos-delay="300">
                <div class="feature-icon">
                  <i class="bi bi-bar-chart-line-fill"></i>
                </div>
                <div class="feature-content">
                  <h4>Analytics-First Approach</h4>
                  <p>Excepteur sint occaecat cupidatat non proident sunt in culpa qui officia deserunt mollit.</p>
                  <a href="#" class="feature-link">Discover How <i class="bi bi-chevron-right"></i></a>
                </div>
              </div>
              

              <div class="feature-box" data-aos="fade-up" data-aos-delay="350">
                <div class="feature-icon">
                  <i class="bi bi-award-fill"></i>
                </div>
                <div class="feature-content">
                  <h4>Award-Winning Team</h4>
                  <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla.</p>
                  <a href="#" class="feature-link">Discover How <i class="bi bi-chevron-right"></i></a>
                </div>
              </div>
            </div>

            <div class="process-timeline" data-aos="fade-up" data-aos-delay="400">
              <h5 class="timeline-title"><i class="bi bi-diagram-3-fill"></i> Our Proven Methodology</h5>
              <div class="timeline-steps">
                <div class="timeline-step">
                  <div class="step-marker">1</div>
                  <div class="step-info">
                    <strong>Research</strong>
                    <span>Gathering insights</span>
                  </div>
                </div>
                <div class="timeline-connector"></div>
                <div class="timeline-step">
                  <div class="step-marker">2</div>
                  <div class="step-info">
                    <strong>Blueprint</strong>
                    <span>Creating roadmap</span>
                  </div>
                </div>
                <div class="timeline-connector"></div>
                <div class="timeline-step">
                  <div class="step-marker">3</div>
                  <div class="step-info">
                    <strong>Build</strong>
                    <span>Developing solution</span>
                  </div>
                </div>
                <div class="timeline-connector"></div>
                <div class="timeline-step">
                  <div class="step-marker">4</div>
                  <div class="step-info">
                    <strong>Refine</strong>
                    <span>Iterating results</span>
                  </div>
                </div>
              </div>
            </div>

            <div class="capabilities-section" data-aos="fade-up" data-aos-delay="450">
              <h5 class="capabilities-heading">What We Bring to the Table</h5>
              <div class="capabilities-grid">
                <div class="capability-card">
                  <div class="capability-icon">
                    <i class="bi bi-bullseye"></i>
                  </div>
                  <h6>Strategic Consulting</h6>
                  <p>Nam libero tempore cum soluta nobis est eligendi optio cumque nihil impedit quo minus.</p>
                </div>
                <div class="capability-card">
                  <div class="capability-icon">
                    <i class="bi bi-code-slash"></i>
                  </div>
                  <h6>Tailored Development</h6>
                  <p>Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet.</p>
                </div>
                <div class="capability-card">
                  <div class="capability-icon">
                    <i class="bi bi-arrow-repeat"></i>
                  </div>
                  <h6>Continuous Enhancement</h6>
                  <p>Itaque earum rerum hic tenetur a sapiente delectus ut aut reiciendis voluptatibus maiores.</p>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </section> -->
<!-- /Why Us Section -->

<!-- Testimonials Section -->
<section id="testimonials" class="testimonials section">
  <div class="container section-title">
    <h2>What Our Clients Say</h2>
    <p>See how businesses are transforming supplier collaboration, procurement workflows, and supply chain visibility with Collab.</p>
  </div>
  <div class="container">

    <div class="row">

      <!-- Left Sidebar -->
      <div class="col-lg-4">
        <div class="testimonials-sidebar">
          <div class="avatar-stack">
            <img src="/images/testimonial/amol.webp" alt="Happy Client" class="avatar" loading="lazy">
            <img src="/images/testimonial/prashant.webp" alt="Happy Client" class="avatar" loading="lazy">
            <img src="/images/testimonial/sanjay.webp" alt="Happy Client" class="avatar" loading="lazy">
            <!-- <img src="assets/img/person/person-f-4.webp" alt="Happy Client" class="avatar" loading="lazy"> -->
            <span class="avatar-count">+1k</span>
          </div>
          <div class="sidebar-content">
            <span class="satisfied-badge"><i class="bi bi-heart-fill"></i> Satisfied Clients</span>
            <h3>Trusted by Supply Chain Teams Across Industries</h3>
            <p>From logistics providers and manufacturers to retail chains and multi-location enterprises, organizations rely on Collab to streamline supplier communication, improve visibility, and drive operational efficiency.</p>
            <!-- <a href="#" class="btn-view-all">View All Reviews <i class="bi bi-arrow-right"></i></a> -->
          </div>
        </div>
      </div><!-- End Left Sidebar -->

      <!-- Right Testimonials Slider -->
      <div class="col-lg-8">
        <div class="testimonials-carousel swiper init-swiper">
          <script type="application/json" class="swiper-config">
            {
              "loop": true,
              "speed": 700,
              "autoplay": {
                "delay": 5000
              },
              "slidesPerView": 1,
              "spaceBetween": 24,
              "pagination": {
                "el": ".swiper-pagination",
                "type": "bullets",
                "clickable": true
              },
              "breakpoints": {
                "768": {
                  "slidesPerView": 2
                }
              }
            }
          </script>

          <div class="swiper-wrapper">

            <!-- Testimonial Card 1 -->
            <div class="swiper-slide h-100">
              <div class="testimonial-card">
                <div class="card-top">
                  <div class="stars">
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                  </div>
                  <span class="quote-mark"><i class="bi bi-quote"></i></span>
                </div>
                <h4>Delay - Not in their Dictionary<br><br></h4>
                <p class="testimonial-text">Meeting deadlines is what defines success of our business. Many of our orders are bound by strict deadlines. AWL India's team delivers the order on time with real time en-route updates. We highly enjoy and recommend their service.</p>
                <div class="author-info">
                  <img src="/images/testimonial/amol.webp" alt="Client" class="author-img" loading="lazy">
                  <div class="author-details">
                    <h5>Mr. Amol Prasadi</h5>
                    <span>Associate General Manager<br>(Kaya Limited)</span>
                  </div>
                </div>
              </div>
            </div><!-- End Testimonial Card -->

            <!-- Testimonial Card 2 -->
            <div class="swiper-slide h-100">
              <div class="testimonial-card">
                <div class="card-top">
                  <div class="stars">
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                  </div>
                  <span class="quote-mark"><i class="bi bi-quote"></i></span>
                </div>
                <h4>Best Customer Service</h4>
                <p class="testimonial-text">Bow down to the entire team of AWL India. Together they helped to push an emergency shipment as early as possible. They didn't call it quits after the first few attempts to find the closest possible truck went failed. By far the best customer service from a logistics company in a long time.</p>
                <div class="author-info">
                  <img src="/images/testimonial/prashant.webp" alt="Client" class="author-img" loading="lazy">
                  <div class="author-details">
                    <h5>Mr. Prashant Singh</h5>
                    <span>Country Head(Callaway Golf India PVT Ltd)</span>
                  </div>
                </div>
              </div>
            </div><!-- End Testimonial Card -->

            <!-- Testimonial Card 3 -->
            <div class="swiper-slide h-100">
              <div class="testimonial-card">
                <div class="card-top">
                  <div class="stars">
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                  </div>
                  <span class="quote-mark"><i class="bi bi-quote"></i></span>
                </div>
                <h4>Professional, Courteous and Willing to help</h4>
                <p class="testimonial-text">Our entire team is indebted and values AWL India. Many times we have reached out to them for emergency shipments and they have never let us down. Every employee on their team is highly responsible, professional and courteous. Kudos to the amazing service, keep it up..!!</p>
                <div class="author-info">
                  <img src="/images/testimonial/sanjay.webp" alt="Client" class="author-img" loading="lazy">
                  <div class="author-details">
                    <h5>Mr. Sanjay Jain</h5>
                    <span>Chief Executive Officer</span>
                  </div>
                </div>
              </div>
            </div><!-- End Testimonial Card -->

          </div>

          <div class="swiper-pagination"></div>

        </div>
      </div><!-- End Right Testimonials Slider -->

    </div>

  </div>

</section><!-- /Testimonials Section -->




<!-- Contact Section -->
<section id="contact" class="contact section">

  <!-- Section Title -->
  <div class="container section-title">
    <h2>Get in Touch</h2>
    <!-- <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p> -->
  </div><!-- End Section Title -->

  <div class="container">

    <div class="row gy-5 align-items-stretch">

      <div class="col-lg-5" data-aos-delay="200">
        <div class="info-panel">
          <div class="panel-header">
            <span class="section-badge">
              <i class="bi bi-chat-dots-fill"></i>
              Get In Touch
            </span>
            <h3>Ready to Transform Your Supplier Operations?</h3>
            <p>Say goodbye to scattered emails and disconnected systems.
Bring your entire supplier network onto one unified platform with Collab.</p>
          </div>

          <div class="contact-methods">
            <div class="method-item">
              <div class="method-icon">
                <i class="bi bi-envelope-paper-fill"></i>
              </div>
              <div class="method-details">
                <span class="method-label">Email Us</span>
                <a href="mailto:info@awlindia.com">info@awlindia.com</a>
              </div>
            </div>

            <div class="method-item">
              <div class="method-icon">
                <i class="bi bi-headset"></i>
              </div>
              <div class="method-details">
                <span class="method-label">Call Us</span>
                <a href="tel:+919876543210">+91-124-427-9462</a>
              </div>
            </div>

            <div class="method-item">
              <div class="method-icon">
                <i class="bi bi-pin-map-fill"></i>
              </div>
              <div class="method-details">
                <span class="method-label">Visit Us</span>
                <span>Vatika Atrium, Ground Floor, Tower-B Golf Course Road,
Sector -53, Gurgaon – 122002, India</span>
              </div>
            </div>
          </div>

          <!-- <div class="stats-strip">
            <div class="stat-item">
              <span class="stat-number">98%</span>
              <span class="stat-text">Satisfaction</span>
            </div>
            <div class="stat-item">
              <span class="stat-number">24/7</span>
              <span class="stat-text">Support</span>
            </div>
            <div class="stat-item">
              <span class="stat-number">100+</span>
              <span class="stat-text">Clients</span>
            </div>
          </div> -->

          <div class="social-connect">
            <span>Follow Us</span>
            <div class="social-icons">
              <a href="https://www.facebook.com/awlindia" aria-label="Facebook"><i class="bi bi-facebook"></i></a>
              <a href="https://twitter.com/awlindia" aria-label="Twitter"><i class="bi bi-twitter-x"></i></a>
              <a href="https://www.linkedin.com/company/awlindia" aria-label="LinkedIn"><i class="bi bi-linkedin"></i></a>
              <a href="https://www.instagram.com/awlindia" aria-label="Instagram"><i class="bi bi-instagram"></i></a>
            </div>
          </div>
        </div>
      </div><!-- End Info Panel -->

      <div class="col-lg-7">
        <div class="form-card">
          <div class="form-card-header">
            <div class="header-icon">
              <i class="bi bi-send-fill"></i>
            </div>
            <div class="header-text">
              <h4>Send Us a Message</h4>
              <p>Fill out the form and our team will respond within 24 hours.</p>
            </div>
          </div>

         <form action="{{ route('contact.store') }}" method="post" class="php-email-form">
          @csrf

            <div class="row g-4">

              <!-- Name -->
              <div class="col-md-6">
                <div class="input-group-custom">
                  <label>Name<span class="text-danger">*</span></label>
                  <div class="input-wrapper">
                    <i class="bi bi-person"></i>
                    <input type="text" name="name" placeholder="Enter your name" required>
                    @error('name')
                      <div class="error-message">{{ $message }}</div>
                    @enderror
                  </div>
                </div>
              </div>

              <!-- Email -->
              <div class="col-md-6">
                <div class="input-group-custom">
                  <label>Email Address<span class="text-danger">*</span></label>
                  <div class="input-wrapper">
                    <i class="bi bi-envelope"></i>
                    <input type="email" name="email" placeholder="test@example.com" required>
                    @error('email')
                      <div class="error-message">{{ $message }}</div>
                    @enderror
                  </div>
                </div>
              </div>

              <!-- Contact Number -->
              <div class="col-md-6">
                <div class="input-group-custom">
                  <label>Contact Number<span class="text-danger">*</span></label>
                  <div class="input-wrapper">
                    <i class="bi bi-telephone"></i>
                    <input type="tel" name="phone" placeholder="+91 9999999999" required>
                    @error('phone')
                      <div class="error-message">{{ $message }}</div>
                    @enderror
                  </div>
                </div>
              </div>

              <!-- Subject -->
              <div class="col-md-6">
                <div class="input-group-custom">
                  <label>Subject<span class="text-danger">*</span></label>
                  <div class="input-wrapper">
                    <i class="bi bi-chat-square-text"></i>
                    <input type="text" name="subject" placeholder="How can we help?" required>
                    @error('subject')
                      <div class="error-message">{{ $message }}</div>
                    @enderror
                  </div>
                </div>
              </div>

              <!-- Message -->
              <div class="col-12">
                <div class="input-group-custom">
                  <label>Your Message</label>
                  <div class="input-wrapper textarea-wrapper">
                    <i class="bi bi-pencil-square"></i>
                    <textarea name="message" rows="5" placeholder="Tell us about your requirements..."></textarea>
                    @error('message')
                      <div class="error-message">{{ $message }}</div>
                    @enderror
                  </div>
                </div>
              </div>

            </div>

            <div class="form-actions">

                  @if(session('success'))
                      <div class="alert alert-success mb-3">
                          {{ session('success') }}
                      </div>
                  @endif

                  @if($errors->any())
                      <div class="alert alert-danger mb-3">
                          Please correct the errors and try again.
                      </div>
                  @endif

                  <button type="submit" class="btn-submit">
                      <span>Send Message</span>
                      <i class="bi bi-arrow-right-circle-fill"></i>
                  </button>

                  <div class="secure-note">
                      <i class="bi bi-lock-fill"></i>
                      <span>Your data is encrypted and secure</span>
                  </div>

                </div>
          </form>
        </div>
      </div><!-- End Form Card -->

    </div>

  </div>

</section><!-- /Contact Section -->



<!-- Brand Section -->
@endsection
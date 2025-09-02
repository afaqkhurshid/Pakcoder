@extends('layouts.default')
@section('title', 'Home - PakCoder')
@section('content')

<style>

   .icon-circle {
      background: #198754;
      color: #fff;
      border-radius: 50%;
      width: 36px;
      height: 36px;
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 16px;
      flex-shrink: 0;
    }
/* 
    .select-drop-down {
      appearance: auto !important;
      background: #fff !important;
    } */

    /* .btn-success {
      background: linear-gradient(135deg, #198754, #28a745);
      border: none;
    }

    .btn-success:hover {
      background: linear-gradient(135deg, #157347, #218838);
    } */
  .modal-dialog {
    max-width: 950px; /* control size */
  }
  .modal-content {
    border-radius: 12px; /* rounded edges */
  }

  /* Mobile adjustments */
  @media (max-width: 576px) {
    .modal-dialog {
      max-width: 92%; /* almost full screen on small devices */
    }
    #popupForm .form-control {
      padding: 6px 10px;
      font-size: 14px;
      height: 34px;
    }
    #popupForm textarea.form-control {
      height: 70px !important;
    }
    #popupForm button {
      padding: 6px;
      font-size: 14px;
    }
  }
  
  .hero-visual form {
    background: rgba(0, 0, 0, 0.6); 
    padding: 20px;
    border-radius: 10px;
    color: #fff;
  }

  .hero-visual .form-control,
  .hero-visual select,
  .hero-visual textarea {
    background: rgba(255, 255, 255, 0.05);
    border: 1px solid rgba(255, 255, 255, 0.2);
    color: #fff;
  }

  .hero-visual .form-control::placeholder {
    color: rgba(255, 255, 255, 0.6);
  }

  .select-drop-down option{
    background: rgb(0 0 0);
    color: #fff;
  }

  .hero-visual .form-control:focus {
    background: rgba(255, 255, 255, 0.1);
    border-color: #00d084; /* theme green */
    color: #fff;
    box-shadow: none;
  }

  .hero-visual button {
    background-color: #00d084;
    border: none;
    font-weight: bold;
  }

  .hero-visual button:hover {
    background-color: #00b36b;
  }

  /* Responsive adjustments */
  @media (max-width: 992px) {
    .hero-content {
      text-align: center;
    }
    .hero-visual {
      margin-top: 20px;
    }
    .hero-visual form {
      width: 100%;
    }

    .about.section {
      padding-top: 0 !important;
    }
    .team-image-size {
      height: 330px !important;
    }
  }

  .team-image-size {
    width: 500px;
    height: 250px;
  }
</style>

<main class="main">

  <section id="hero" class="hero section dark-background">
    <div class="hero-background">
      <img src="img/bg/bg-14.webp" alt="" data-aos-duration="1000">
      <div class="overlay"></div>
    </div>
    <div class="container">

      <div class="row align-items-center">
        
        <!-- Left Text -->
        <div class="col-lg-6">
          <div class="hero-content">
            <span class="hero-badge">IT SOLUTIONS EXPERTS</span>
            <h1>Fast, Scalable & Custom Web Solutions</h1>
            <p>PakCoder builds fast, secure, and scalable products in Laravel, PHP, Mern, Mean, WordPress, and Shopify—plus UI/UX and digital marketing to grow them.</p>

            <div class="hero-actions gap-7px mb-2 d-flex justify-content-center justify-content-lg-start">
              <a href="https://wa.me/923114810055" class="btn btn-success" style="width: 125px;display: flex;gap: 8px;justify-content:center;">
                WhatsApp<i class="bi bi-whatsapp"></i>
              </a>
              <a href="{{ route('contact') }}" class="btn btn-outline-light">Get Started</a>
            </div>
          </div>
        </div>

        <!-- Right Form -->
        <div class="col-lg-6">
          <div class="hero-visual">
            <form method="post" class="php-email-form">
              @csrf
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control border-green" placeholder="Your Name" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" name="email" class="form-control border-green lead-input"  data-type="email"  placeholder="Your Email" required>
                </div>
              </div>

              <div class="row mt-3">
                <div class="col-md-6 form-group">
                  <select class="form-control select-drop-down border-green" name="service" required>
                    <option value="" disabled selected>What service do you need?</option>
                    <option value="web-development">Web Development (Laravel/PHP)</option>
                    <option value="wordpress">WordPress Development</option>
                    <option value="shopify">Shopify/eCommerce</option>
                    <option value="ui-ux">UI/UX Design</option>
                    <option value="digital-marketing">Digital Marketing</option>
                    <option value="other">Other</option>
                  </select>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="number" name="phone" class="form-control border-green lead-input" data-type="number" placeholder="Your Phone" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control border-green" name="message" rows="5" placeholder="Tell us about your project" required></textarea>
              </div>
              <div class="form-submit mt-3">
                <button type="submit" class="btn btn-primary w-100">Reach Us</button>
              </div>
            </form>
          </div>
        </div>

      </div>
    </div>
  </section>

    <section id="hero-about" >

      <div class="container">
         <div class="content">
            {{-- <h2>Turning Your Ideas Into Reality</h2> --}}
            <img src="img/bg/mainDesign.webp" alt="About Us" class="img-fluid">
        </div>
      </div>

  </section>

  <!-- About Section -->
  <section id="about" class="about section">

    <div class="container">

      <div class="row align-items-center">
        <div class="col-lg-6">
          <div class="content">
            <h2>Transforming Ideas Into Powerful Digital Experiences</h2>
            <p class="lead">With 6+ years of expertise, we specialize in creating scalable web solutions tailored to your business. Having delivered 150+ projects for 40+ clients, our team ensures reliable, on-time results with a proven 95% success rate.</p>
            <p>As a complete solution agency specializing in Laravel, PHP, MERN Stack, and modern front-end technologies, and maintained a 95% success rate. Our team is skilled, dedicated, and always on time — because your deadlines matter to us.</p>
            {{-- <p>Share your idea with us, and we’ll transform it into a fully functional reality that not only works but helps your business grow. Let’s make it happen together.</p> --}}

            <div class="stats-container">
              <div class="row">
                <div class="col-md-4">
                  <div class="stat-item">
                    <div class="number">6+</div>
                    <div class="label">Years Experience</div>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="stat-item">
                    <div class="number">150+</div>
                    <div class="label">Projects Completed</div>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="stat-item">
                    <div class="number">95%</div>
                    <div class="label">Success Rate</div>
                  </div>
                </div>
              </div>
            </div>

            <div class="cta-wrapper">
              <a href="#portfolio" class="btn btn-primary">View Our Work</a>
              <a href="{{ route('contact') }}" class="btn btn-outline">Book a Meeting</a>
            </div>
          </div>
        </div>

        <div class="col-lg-6">
          <div class="image-wrapper">
            <img src="img/about/about-square-8.webp" alt="About Us" class="img-fluid main-image">
            <div class="floating-card">
              <div class="card-content">
                <i class="bi bi-award"></i>
                <div class="text">
                  <h5>Client Satisfaction Award</h5>
                  <span>95% Success Rate</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>

  </section>
  <!-- /About Section -->

  <!-- Clients Section -->
  <section id="clients" class="clients section">

    <div>

      <div class="clients-slider swiper init-swiper">
        <script type="application/json" class="swiper-config">
          {
            "loop": true,
            "speed": 6000,
            "autoplay": {
              "delay": 1,
              "disableOnInteraction": false
            },
            "centeredSlides": true,
            "slideToClickedSlide": true,
            "slidesPerView": "auto",
            "spaceBetween": 40,
            "breakpoints": {
              "320": {
                "slidesPerView": 2,
                "spaceBetween": 20
              },
              "640": {
                "slidesPerView": 3,
                "spaceBetween": 20
              },
              "992": {
                "slidesPerView": 4,
                "spaceBetween": 30
              },
              "1200": {
                "slidesPerView": 6,
                "spaceBetween": 40
              }
            }
          }
        </script>

        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <div class="client-logo">
              <img src="img/clients/clients-1.webp" class="img-fluid" alt="">
            </div>
          </div><!-- End Client Item -->

          <div class="swiper-slide">
            <div class="client-logo">
              <img src="img/clients/clients-2.webp" class="img-fluid" alt="">
            </div>
          </div><!-- End Client Item -->

          <div class="swiper-slide">
            <div class="client-logo">
              <img src="img/clients/clients-3.webp" class="img-fluid" alt="">
            </div>
          </div><!-- End Client Item -->

          <div class="swiper-slide">
            <div class="client-logo">
              <img src="img/clients/clients-4.webp" class="img-fluid" alt="">
            </div>
          </div><!-- End Client Item -->

          <div class="swiper-slide">
            <div class="client-logo">
              <img src="img/clients/clients-5.webp" class="img-fluid" alt="">
            </div>
          </div><!-- End Client Item -->

          <div class="swiper-slide">
            <div class="client-logo">
              <img src="img/clients/clients-6.webp" class="img-fluid" alt="">
            </div>
          </div><!-- End Client Item -->

          <div class="swiper-slide">
            <div class="client-logo">
              <img src="img/clients/clients-1.webp" class="img-fluid" alt="">
            </div>
          </div><!-- End Client Item -->

          <div class="swiper-slide">
            <div class="client-logo">
              <img src="img/clients/clients-2.webp" class="img-fluid" alt="">
            </div>
          </div><!-- End Client Item -->

          <div class="swiper-slide">
            <div class="client-logo">
              <img src="img/clients/clients-3.webp" class="img-fluid" alt="">
            </div>
          </div><!-- End Client Item -->

          <div class="swiper-slide">
            <div class="client-logo">
              <img src="img/clients/clients-4.webp" class="img-fluid" alt="">
            </div>
          </div><!-- End Client Item -->

          <div class="swiper-slide">
            <div class="client-logo">
              <img src="img/clients/clients-5.webp" class="img-fluid" alt="">
            </div>
          </div><!-- End Client Item -->

          <div class="swiper-slide">
            <div class="client-logo">
              <img src="img/clients/clients-6.webp" class="img-fluid" alt="">
            </div>
          </div><!-- End Client Item -->
        </div>
      </div>
    </div>
  </section><!-- /Clients Section -->

  <!-- Featured Services Section -->
  <section id="featured-services" class="featured-services section light-background">

    <!-- Section Title -->
    <div class="container section-title">
      <h2>Our Key Services</h2>
      <p>Building Brands and Driving Conversions for Lasting Growth</p>
    </div><!-- End Section Title -->

    <div class="container">

      <div class="row">
        <div class="col-lg-6">
          <div class="services-content" data-aos-duration="900">
            <span class="subtitle">Full-Service IT & Marketing Solutions</span>
            <h2>From Clicks to Conversions. We Build & Market for Growth</h2>
            <p data-aos-duration="800">
             We don’t just run ads. We build complete systems to turn strangers into customers. From high-performance websites and apps to targeted marketing campaigns, our team covers everything: Facebook, Instagram, WhatsApp, YouTube, Google Ads, Laravel, Symfony, MERN, React, Node.js, Tailwind, and more. Our expert developers and marketers work together to ensure your campaigns bring real sales, not just traffic.
            </p>
            <div class="mt-4" data-aos-duration="1100">
              <a href="{{ route('contact') }}" class="btn-consultation">
                <span>Get a Free Strategy Session</span><i class="bi bi-arrow-right"></i>
              </a>
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="services-image">
            <img src="img/services/it-marketing-team.webp" alt="IT & Marketing Solutions" class="rounded-4" style="width:100%; height: auto;">
            <div class="shape-circle"></div>
            <div class="shape-accent"></div>
          </div>
        </div>
      </div>

      <!-- Slider -->
      <div class="row mt-5" data-aos-duration="1000">
        <div class="col-12">
          <div class="services-slider swiper init-swiper">
            <script type="application/json" class="swiper-config">
              {
                "slidesPerView": 3,
                "spaceBetween": 20,
                "loop": true,
                "speed": 600,
                "autoplay": {
                  "delay": 5000
                },
                "navigation": {
                  "nextEl": ".swiper-nav-next",
                  "prevEl": ".swiper-nav-prev"
                },
                "breakpoints": {
                  "320": {
                    "slidesPerView": 1
                  },
                  "768": {
                    "slidesPerView": 2
                  },
                  "992": {
                    "slidesPerView": 3
                  }
                }
              }
            </script>
            <div class="swiper-wrapper">

              <!-- Digital Marketing -->
              <div class="swiper-slide">
                <div class="service-card">
                  <div class="icon-box"><i class="bi bi-megaphone-fill"></i></div>
                  <a href="#" class="arrow-link"><i class="bi bi-arrow-right"></i></a>
                  <div class="content">
                    <h4><a href="#">Digital Marketing Campaigns</a></h4>
                    <p>High-ROI Facebook, Instagram, WhatsApp, YouTube & Google Ads that bring customers ready to buy.</p>
                    <div class="service-number">01</div>
                  </div>
                </div>
              </div>

              <!-- Web Development -->
              <div class="swiper-slide">
                <div class="service-card">
                  <div class="icon-box"><i class="bi bi-code-slash"></i></div>
                  <a href="#" class="arrow-link"><i class="bi bi-arrow-right"></i></a>
                  <div class="content">
                    <h4><a href="#">Custom Web & App Development</a></h4>
                    <p>Laravel, Symfony, MERN, React, Node.js & Tailwind — tailored solutions for speed, scalability & sales.</p>
                    <div class="service-number">02</div>
                  </div>
                </div>
              </div>

              <!-- Conversion Optimization -->
              <div class="swiper-slide">
                <div class="service-card">
                  <div class="icon-box"><i class="bi bi-graph-up-arrow"></i></div>
                  <a href="#" class="arrow-link"><i class="bi bi-arrow-right"></i></a>
                  <div class="content">
                    <h4><a href="#">Conversion Rate Optimization</a></h4>
                    <p>We track, test, and tweak every step of your funnel so clicks turn into paying customers.</p>
                    <div class="service-number">03</div>
                  </div>
                </div>
              </div>

              <!-- Branding & Creative -->
              <div class="swiper-slide">
                <div class="service-card">
                  <div class="icon-box"><i class="bi bi-lightbulb-fill"></i></div>
                  <a href="#" class="arrow-link"><i class="bi bi-arrow-right"></i></a>
                  <div class="content">
                    <h4><a href="#">Branding & Creative Design</a></h4>
                    <p>Eye-catching designs & brand strategies that connect emotionally and stand out in the market.</p>
                    <div class="service-number">04</div>
                  </div>
                </div>
              </div>

              <!-- Maintenance & Scaling -->
              <div class="swiper-slide">
                <div class="service-card">
                  <div class="icon-box"><i class="bi bi-shield-check"></i></div>
                  <a href="#" class="arrow-link"><i class="bi bi-arrow-right"></i></a>
                  <div class="content">
                    <h4><a href="#">Ongoing Support & Scaling</a></h4>
                    <p>Dedicated team to maintain, update, and scale your business as it grows.</p>
                    <div class="service-number">05</div>
                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>
      </div>

      <!-- Slider Nav -->
      <div class="row">
        <div class="col-12">
          <div class="swiper-navigation">
            <button class="swiper-nav-prev"><i class="bi bi-chevron-left"></i></button>
            <button class="swiper-nav-next"><i class="bi bi-chevron-right"></i></button>
          </div>
        </div>
      </div>

    </div>

  </section>
  <!-- /Featured Services Section -->

    <!-- Team Section -->
  <section id="team" class="team section">
    <!-- Section Title -->
    <div class="container section-title">
      <h2>Our Team</h2>
      <p>Meet the dedicated experts driving PakCoder’s innovation, quality, and client success.</p>
    </div><!-- End Section Title -->

    <div class="container">

      <div class="team-slider swiper init-swiper">
        <script type="application/json" class="swiper-config">
          {
            "loop": true,
            "speed": 800,
            "autoplay": {
              "delay": 5000
            },
            "slidesPerView": 1,
            "spaceBetween": 30,
            "pagination": {
              "el": ".swiper-pagination",
              "type": "bullets",
              "clickable": true
            },
            "navigation": {
              "nextEl": ".swiper-button-next",
              "prevEl": ".swiper-button-prev"
            },
            "breakpoints": {
              "576": {
                "slidesPerView": 2
              },
              "992": {
                "slidesPerView": 3
              },
              "1200": {
                "slidesPerView": 4
              }
            }
          }
        </script>
        <div class="swiper-wrapper">

          <div class="swiper-slide">
            <div class="team-card">
              <div class="team-image">
                <img src="img/team/3.webp" class="img-fluid team-image-size" alt="" loading="lazy" >
              </div>
              <div class="team-content">
                <h3>Hamza Aziz</h3>
                <span>Team Lead MERN Stack Developer & React Native</span>
                <p>Oversees project execution and builds robust MERN stack solutions that meet business needs and timelines.</p>
              </div>
            </div><!-- End Team Card -->
          </div><!-- End slide item -->

          <div class="swiper-slide">
            <div class="team-card">
              <div class="team-image">
                <img src="img/team/7.webp" class="img-fluid team-image-size" alt="" loading="lazy" >
              </div>
              <div class="team-content">
                <h3>Awais Khizar</h3>
                <span>Digital Marketing Expert</span>
                <p>Founder and leader of PakCoder, specializing in delivering complete digital marketing solutions that boost brand growth and online presence.</p>
              </div>
            </div>
            <!-- End Team Card -->
          </div><!-- End slide item -->

          <div class="swiper-slide">
            <div class="team-card">
              <div class="team-image">
                <img src="img/team/8.webp" class="img-fluid team-image-size" alt="" loading="lazy" >
              </div>
              <div class="team-content">
                <h3>Hafiz Sammad</h3>
                <span>Senior MERN Stack Developer & React Native</span>
                <p>Oversees project execution and builds robust MERN stack solutions that meet business needs and timelines.</p>
              </div>
            </div><!-- End Team Card -->
          </div><!-- End slide item -->

          <div class="swiper-slide">
            <div class="team-card">
              <div class="team-image">
                <img src="img/team/5.webp" class="img-fluid team-image-size" alt="" loading="lazy" >
              </div>
              <div class="team-content">
                <h3>Azan Rashid</h3>
                <span>Kotlin & Java Mobile App Developer</span>
                <p>Specialist in creating powerful and user-friendly Android applications using Kotlin and Java.</p>
              </div>
            </div><!-- End Team Card -->
          </div><!-- End slide item -->

          
          <div class="swiper-slide">
            <div class="team-card">
              <div class="team-image">
                <img src="img/team/1.webp" class="img-fluid team-image-size" alt="" loading="lazy" >
              </div>
              <div class="team-content">
                <h3>Abdul Moiz</h3>
                <span>Full-Stack Developer</span>
                <p>Expert in Laravel, PHP, MERN & MEAN stacks, delivering scalable and high-performance applications for clients worldwide.</p>
              </div>
            </div><!-- End Team Card -->
          </div><!-- End slide item -->

          <div class="swiper-slide">
            <div class="team-card">
              <div class="team-image">
                <img src="img/team/4.webp" class="img-fluid team-image-size" alt="" loading="lazy" >
              </div>
              <div class="team-content">
                <h3>Muhammad Jibran</h3>
                <span>Senior MERN Stack Developer & React Native</span>
                <p>Oversees project execution and builds robust MERN stack solutions that meet business needs and timelines.</p>
              </div>
            </div><!-- End Team Card -->
          </div><!-- End slide item -->

          <div class="swiper-slide">
            <div class="team-card">
              <div class="team-image">
                <img src="img/team/2.webp" class="img-fluid team-image-size" alt="" loading="lazy" >
              </div>
              <div class="team-content">
                <h3>Haseeb Ahmad</h3>
                <span>Shopify & WordPress Developer</span>
                <p>Expert in building custom Shopify stores and dynamic WordPress websites that are fast, secure, and easy to manage.</p>
              </div>
            </div><!-- End Team Card -->
          </div><!-- End slide item -->

          <div class="swiper-slide">
            <div class="team-card">
              <div class="team-image">
                <img src="img/team/6.webp" class="img-fluid team-image-size" alt="" loading="lazy" >
              </div>
              <div class="team-content">
                <h3>Afaq Khurshid</h3>
                <span>Full-Stack Developer</span>
                <p>Expert in Laravel, PHP, MERN & MEAN stacks, delivering scalable and high-performance applications for clients worldwide.</p>
              </div>
            </div><!-- End Team Card -->
          </div><!-- End slide item -->

        </div>

        <div class="swiper-pagination"></div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
      </div>
    </div>

    <!-- Video Section -->
    <section id="about-video" class="about-video section py-5">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-6">
            <h2 class="fw-bold mt-2">Development Agency</h2>
            <p>As a top web design and development company in Pakistan and the Middle East, we offer our clients 
              the best solutions to help them increase their market share and accomplish their goals and objectives 
              within the allotted time frame.
            </p>
            <p>
              PakCoder is a leading web design firm, run by experts in their domains who are constantly working 
              to give our esteemed clients innovative, custom-made solutions via creative problem-solving. 
              Along with modern <strong>Shopify customization, Custom coding development and app development</strong>, 
              we deliver cutting-edge websites and applications tailored to business needs. 
              Our goal is to offer innovative, scalable, and future-ready digital solutions.
            </p>
            <h5 class="fw-bold">Our Objective</h5>
            <p>
              As a forward–thinking web design company in Pakistan and the Middle East, we support 
              hand-coded websites, Shopify stores, and custom applications with complete client customization.
            </p>
          </div>

          <!-- Right Side: Video -->
          <div class="col-lg-6 text-center">
            <div class="ratio ratio-16x9 rounded shadow">
              <script src="https://fast.wistia.com/player.js" async></script><script src="https://fast.wistia.com/embed/zg0zpvu00z.js" async type="module"></script><style>wistia-player[media-id='zg0zpvu00z']:not(:defined) { background: center / contain repeat url('https://fast.wistia.com/embed/medias/zg0zpvu00z/swatch'); display: block; filter: blur(5px); padding-top:56.25%; }</style> <wistia-player media-id="zg0zpvu00z" aspect="1.7777777777777777"></wistia-player>
            </div>
          </div>

        </div>
      </div>
    </section>
    <!-- /Video Section -->

  </section><!-- /Team Section -->

  <!-- Services Section -->
  <section id="services" class="services section light-background">

    <!-- Section Title -->
    <div class="container section-title">
      <h2>Services</h2>
      <p>CHECK OUR SERVICES</p>
    </div><!-- End Section Title -->

    <div class="container">

      <div class="row gy-4">

        <div class="col-lg-6 col-md-6">
          <div class="service-card featured">
            <div class="service-icon">
              <i class="bi bi-code-slash"></i>
            </div>
            <div class="service-content">
              <h3>Web Development</h3>
              <p>Laravel, PHP, Symfony for secure, scalable apps. WordPress for fast corporate sites & blogs. Payment gateways, role-based auth, and multilingual support.</p>
              <div class="service-meta">
                <span class="badge popular">Most Popular</span>
                <!-- <span class="price">Starting at $2,999</span> -->
              </div>
              <a href="{{ route('contact') }}" class="btn-cta">
                <span>Get Started</span>
                <i class="bi bi-arrow-right"></i>
              </a>
            </div>
            <div class="service-bg"></div>
          </div>
        </div>

        <div class="col-lg-6 col-md-6">
          <div class="service-card">
            <div class="service-icon">
              <i class="bi bi-shop"></i>
            </div>
            <div class="service-content">
              <h3>eCommerce & Shopify</h3>
              <p>Shopify builds & customizations. Product, shipping & tax setup. Payment & fulfillment integrations. Conversion rate optimization.</p>
              <div class="service-meta">
                <!-- <span class="price">Starting at $1,899</span> -->
              </div>
              <a href="{{ route('contact') }}" class="btn-cta">
                <span>Learn More</span>
                <i class="bi bi-arrow-right"></i>
              </a>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6">
          <div class="service-card compact">
            <div class="service-icon">
              <i class="bi bi-graph-up-arrow"></i>
            </div>
            <div class="service-content">
              <h3>Digital Marketing</h3>
              <p>We craft data-driven marketing campaigns that boost your brand visibility, attract the right audience, and drive measurable growth for your business.</p>
              <a href="https://wa.me/923134672846" class="btn-cta">
                <span>Explore</span>
                <i class="bi bi-arrow-right"></i>
              </a>
            </div>
            <div class="service-bg"></div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6">
          <div class="service-card compact">
            <div class="service-icon">
              <i class="bi bi-shield-check"></i>
            </div>
            <div class="service-content">
              <h3>Security Solutions</h3>
              <p>We implement robust security measures to protect your website, data, and users from cyber threats — ensuring peace of mind and uninterrupted operations.</p>
              <a href="https://wa.me/923134672846" class="btn-cta">
                <span>Discover</span>
                <i class="bi bi-arrow-right"></i>
              </a>
            </div>
            <div class="service-bg"></div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6">
          <div class="service-card compact">
            <div class="service-icon">
              <i class="bi bi-cloud-upload"></i>
            </div>
            <div class="service-content">
              <h3>Cloud Services</h3>
              <p>We offer scalable cloud hosting (AWS, Azure, cPanel), storage, and deployment solutions — giving your business the flexibility, speed, and reliability it needs to grow.</p>
              <a href="https://wa.me/923134672846" class="btn-cta">
                <span>Get Quote</span>
                <i class="bi bi-arrow-right"></i>
              </a>
            </div>
            <div class="service-bg"></div>
          </div>
        </div>


      </div>

      <div class="stats-highlight">
        <div class="row">
          <div class="col-lg-3 col-md-6">
            <div class="stat-item">
              <div class="stat-number">150+</div>
              <div class="stat-label">Projects Completed</div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6">
            <div class="stat-item">
              <div class="stat-number">95%</div>
              <div class="stat-label">Client Satisfaction</div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6">
            <div class="stat-item">
              <div class="stat-number">24/7</div>
              <div class="stat-label">Support Available</div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6">
            <div class="stat-item">
              <div class="stat-number">6+</div>
              <div class="stat-label">Years Experience</div>
            </div>
          </div>
        </div>
      </div>

    </div>

  </section><!-- /Services Section -->

  <!-- Call To Action Section -->
  <!-- <section id="call-to-action" class="call-to-action section light-background">
    <div class="container">
      <div class="cta-wrapper">
        <div class="cta-shapes">
          <div class="shape shape-1"></div>
          <div class="shape shape-2"></div>
          <div class="shape shape-3"></div>
        </div>
        <div class="row g-0">
          <div class="col-lg-7">
            <div class="cta-content p-5">
              <span class="badge-custom">Best-Selling Offer</span>
              <h2 class="mt-4 mb-4">Shopify & WordPress Development + Marketing Campaign</h2>
              <p class="mb-4">
                Get a complete online store setup on <strong>Shopify</strong> or <strong>WordPress</strong> with a tailored
                marketing campaign strategy to boost your sales from day one. This is our highest-selling package, trusted by clients worldwide.
              </p>

              <div class="row benefits-row mb-5">
                <div class="col-md-6">
                  <div class="benefit-item">
                    <div class="icon-box">
                      <i class="bi bi-lightning-charge-fill"></i>
                    </div>
                    <div class="benefit-content">
                      <h5>Complete Store Setup</h5>
                      <p>Fully functional Shopify or WordPress eCommerce store, ready to launch.</p>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="benefit-item">
                    <div class="icon-box">
                      <i class="bi bi-megaphone-fill"></i>
                    </div>
                    <div class="benefit-content">
                      <h5>Marketing Campaign</h5>
                      <p>Custom ad strategy for UAE or Pakistan to bring targeted customers fast.</p>
                    </div>
                  </div>
                </div>
              </div>

              <div class="action-buttons">
                <a href="#" class="btn btn-primary">Get Started</a>
                <a href="#" class="btn btn-outline">Learn More</a>
                <div class="guarantee-badge">
                  <i class="bi bi-patch-check-fill"></i>
                  <span>AED 300 / PKR 25,000</span>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-5">
            <div class="cta-image-container">
              <img src="img/illustration/illustration-3.webp" alt="Shopify & WordPress Offer" class="img-fluid main-image">
              <div class="floating-element element-1">
                <i class="bi bi-star-fill"></i>
                <span>4.9 Rating</span>
              </div>
              <div class="floating-element element-2">
                <i class="bi bi-people-fill"></i>
                <span>10k+ Happy Clients</span>
              </div>
              <div class="pattern-dots"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section> -->
  <!-- /Call To Action Section -->


  <!-- Testimonials Section -->
  <section id="testimonials" class="testimonials section">

    <div class="container">

      <div class="swiper init-swiper">
        <script type="application/json" class="swiper-config">
          {
            "loop": true,
            "speed": 600,
            "autoplay": {
              "delay": 5000
            },
            "slidesPerView": "auto",
            "pagination": {
              "el": ".swiper-pagination",
              "type": "bullets",
              "clickable": true
            },
            "breakpoints": {
              "320": {
                "slidesPerView": 1,
                "spaceBetween": 40
              },
              "1200": {
                "slidesPerView": 3,
                "spaceBetween": 1
              }
            }
          }
        </script>
        <div class="swiper-wrapper">

          <div class="swiper-slide">
            <div class="testimonial-item">
              <p>
                <i class="bi bi-quote quote-icon-left"></i>
                <span>PakCoder built our Shopify store from the ground up with a strong focus on performance and scalability. Their expertise helped Mughaliaz.com grow faster, and they continue to be a reliable partner for our eCommerce journey.</span>
                <i class="bi bi-quote quote-icon-right"></i>
              </p>
              {{-- <img src="img/team/person-m-9.webp" class="testimonial-img" alt=""> --}}
              <h3>Moon Ali</h3>
              <h4>Founder – Mughaliaz.com</h4>
            </div>
          </div>

          <div class="swiper-slide">
            <div class="testimonial-item">
              <p>
                <i class="bi bi-quote quote-icon-left"></i>
                <span>We partnered with PakCoder to run digital campaigns for NICS CSS Academy, and the results were excellent. Their strategic approach brought us high-quality leads and greater visibility among our target audience.</span>
                <i class="bi bi-quote quote-icon-right"></i>
              </p>
              {{-- <img src="img/team/person-f-5.webp" class="testimonial-img" alt=""> --}}
              <h3>Muhammad Farukh</h3>
              <h4>CEO – NICS CSS Academy</h4>
            </div>
          </div>

          <div class="swiper-slide">
            <div class="testimonial-item">
              <p>
                <i class="bi bi-quote quote-icon-left"></i>
                <span>PakCoder designed and executed a successful lead generation campaign for Data Estate. Their work delivered measurable results, and we saw a significant increase in client conversions thanks to their efforts.</span>
                <i class="bi bi-quote quote-icon-right"></i>
              </p>
              {{-- <img src="img/team/person-f-12.webp" class="testimonial-img" alt=""> --}}
              <h3>Ijaz Ahmad</h3>
              <h4>Founder – Data Estate</h4>
            </div>
          </div>

          <div class="swiper-slide">
            <div class="testimonial-item">
              <p>
                <i class="bi bi-quote quote-icon-left"></i>
                <span>We trusted PakCoder to build our Laravel project with Bootstrap from scratch, and they delivered flawlessly. They deployed it to our server, ensuring a smooth launch. Their technical depth and reliability set them apart.</span>
                <i class="bi bi-quote quote-icon-right"></i>
              </p>
              {{-- <img src="img/team/person-m-12.webp" class="testimonial-img" alt=""> --}}
              <h3>Majid Sheikh</h3>
              <h4>CTO – AMS</h4>
            </div>
          </div>

        </div>
        <div class="swiper-pagination"></div>
      </div>

    </div>

  </section>
  <!-- /Testimonials Section -->


  <section id="portfolio" class="portfolio section">

    <!-- Section Title -->
    <div class="container section-title">
    <h2>Portfolio</h2>
    <p>Explore our work — from custom websites to powerful web applications, showcasing creativity, performance, and results.</p>

    </div><!-- End Section Title -->

    <div class="container">

        <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">

          <ul class="portfolio-filters isotope-filters" data-aos="fade-up" data-aos-delay="100">
            <li data-filter="*" class="filter-active">All</li>
            <li data-filter=".filter-wordpress">WordPress</li>
            <li data-filter=".filter-laravel-symfony">Laravel & Symfony</li>
            <li data-filter=".filter-shopify">Shopify</li>
            <li data-filter=".filter-digital">Digital Marketing</li>
          </ul>

          <div class="row gy-4 isotope-container" data-aos="fade-up" data-aos-delay="200">

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-laravel-symfony">
              <div class="rounded shadow-sm h-100 d-flex flex-column" style="border: 4px solid #12a16b">
                <img src="img/portfolio/africa-mobility-solutions.webp" class="img-fluid w-100" alt="" style="height:250px; object-fit:cover;">
                <div class="portfolio-info flex-grow-1">
                  <h4>Africa Mobility Solutions (ME)</h4>
                  <p>Laravel, Bootstrap, PHP</p>
                  <a href="/img/portfolio/africa-mobility-solutions.webp" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="https://africa-mobility-solutions-me.com/" class="details-link"> <i class="bi bi-arrow-right-short"></i></a>
                  {{-- <a href="{{ route('portfolio', ['id' => 1]) }}" class="details-link"> <i class="bi bi-arrow-right-short"></i></a> --}}
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-wordpress">
              <div class="rounded shadow-sm h-100 d-flex flex-column" style="border: 4px solid #12a16b">
                <img src="img/portfolio/almarfa.webp" class="img-fluid w-100" alt="" style="height:250px; object-fit:cover;">
                <div class="portfolio-info flex-grow-1">
                  <h4>Almarfa</h4>
                  <p>PHP, Wordpress</p>
                  <a href="/img/portfolio/almarfa.webp" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="https://almarfa.com.sa/" class="details-link"> <i class="bi bi-arrow-right-short"></i></a>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-laravel-symfony">
              <div class="rounded shadow-sm h-100 d-flex flex-column" style="border: 4px solid #12a16b">
                <img src="img/portfolio/mile.webp" class="img-fluid w-100" alt="" style="height:250px; object-fit:cover;">
                <div class="portfolio-info flex-grow-1">
                  <h4>MileNow</h4>
                  <p>Symfony, PHP, Tailwind</p>
                  <a href="/img/portfolio/mile.webp" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="https://www.milenow.com/en/" class="details-link"> <i class="bi bi-arrow-right-short"></i></a>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-wordpress">
              <div class="rounded shadow-sm h-100 d-flex flex-column" style="border: 4px solid #12a16b">
                <img src="img/portfolio/milenow.webp" class="img-fluid w-100" alt="" style="height:250px; object-fit:cover;">
                <div class="portfolio-info flex-grow-1">
                  <h4>MileNow Wordpress</h4>
                  <p>PHP, Wordpress</p>
                  <a href="/img/portfolio/milenow.webp" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="https://www.milenow.com/en/new-dropshipping-management/" class="details-link"> <i class="bi bi-arrow-right-short"></i></a>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-wordpress">
              <div class="rounded shadow-sm h-100 d-flex flex-column" style="border: 4px solid #12a16b">
                <img src="img/portfolio/xytech.webp" class="img-fluid w-100" alt="" style="height:250px; object-fit:cover;">
                <div class="portfolio-info flex-grow-1">
                  <h4>Xytech</h4>
                  <p>PHP, Wordpress</p>
                  <a href="/img/portfolio/xytech.webp" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="https://xytech.io/" class="details-link"> <i class="bi bi-arrow-right-short"></i></a>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-laravel-symfony">
              <div class="rounded shadow-sm h-100 d-flex flex-column" style="border: 4px solid #12a16b">
                <img src="img/portfolio/rx.webp" class="img-fluid w-100" alt="" style="height:250px; object-fit:cover;">
                <div class="portfolio-info flex-grow-1">
                  <h4>RxOnTrack (Netlify demo)</h4>
                  <p>React, Node, Mern</p>
                  <a href="/img/portfolio/rx.webp" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="https://rxontrack.netlify.app/" class="details-link"> <i class="bi bi-arrow-right-short"></i></a>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-laravel-symfony">
              <div class="rounded shadow-sm h-100 d-flex flex-column" style="border: 4px solid #12a16b">
                <img src="img/portfolio/compareparkingprices.webp" class="img-fluid w-100" alt="" style="height:250px; object-fit:cover;">
                <div class="portfolio-info flex-grow-1">
                  <h4>Compare Parking Prices</h4>
                  <p>Laravel, Bootstrap, PHP, Vue.Js</p>
                  <a href="/img/portfolio/compareparkingprices.webp" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="https://www.compareparkingprices.co.uk/" class="details-link"><i class="bi bi-arrow-right-short"></i></a>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-laravel-symfony">
              <div class="rounded shadow-sm h-100 d-flex flex-column" style="border: 4px solid #12a16b">
                <img src="img/portfolio/bellezabh.webp" class="img-fluid w-100" alt="" style="height:250px; object-fit:cover;">
                <div class="portfolio-info flex-grow-1">
                  <h4>Belleza BH</h4>
                  <p>Laravel, Bootstrap, PHP ,Stripe, Paypal</p>
                  <a href="/img/portfolio/bellezabh.webp" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="https://bellezabh.com/" class="details-link"> <i class="bi bi-arrow-right-short"></i></a>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-wordpress">
              <div class="rounded shadow-sm h-100 d-flex flex-column" style="border: 4px solid #12a16b">
                <img src="img/portfolio/viocell.webp" class="img-fluid w-100" alt="" style="height:250px; object-fit:cover;">
                <div class="portfolio-info flex-grow-1">
                  <h4>Visiocell</h4>
                  <p>PHP, Wordpress</p>
                  <a href="/img/portfolio/viocell.webp" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="https://visiocell.com/" class="details-link"> <i class="bi bi-arrow-right-short"></i></a>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-laravel-symfony">
              <div class="rounded shadow-sm h-100 d-flex flex-column" style="border: 4px solid #12a16b">
                <img src="img/portfolio/liftsoul.webp" class="img-fluid w-100" alt="" style="height:250px; object-fit:cover;">
                <div class="portfolio-info flex-grow-1">
                  <h4>LiftSol</h4>
                  <p>Laravel, Bootstrap, PHP ,React.js</p>
                  <a href="/img/portfolio/liftsoul.webp" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="https://liftsol.com" class="details-link"> <i class="bi bi-arrow-right-short"></i></a>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-shopify">
              <div class="rounded shadow-sm h-100 d-flex flex-column" style="border: 4px solid #12a16b">
                <img src="img/portfolio/samarqand.webp" class="img-fluid w-100" alt="" style="height:250px; object-fit:cover;">
                <div class="portfolio-info flex-grow-1">
                  <h4>Samarqand Fabrics</h4>
                  <p>Shopify</p>
                  <a href="/img/portfolio/samarqand.webp" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="https://samarqandfabrics.com/" class="details-link"> <i class="bi bi-arrow-right-short"></i></a>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-shopify">
              <div class="rounded shadow-sm h-100 d-flex flex-column" style="border: 4px solid #12a16b">
                <img src="img/portfolio/mughaliazw.webp" class="img-fluid w-100" alt="" style="height:250px; object-fit:cover;">
                <div class="portfolio-info flex-grow-1">
                  <h4>Mughaliaz</h4>
                  <p>Shopify</p>
                  <a href="/img/portfolio/mughaliazw.webp" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="https://mughaliaz.com/" class="details-link"> <i class="bi bi-arrow-right-short"></i></a>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-wordpress">
              <div class="rounded shadow-sm h-100 d-flex flex-column" style="border: 4px solid #12a16b">
                <img src="img/portfolio/h3Account.webp" class="img-fluid" alt="" style="height:250px; object-fit:cover;">
                <div class="portfolio-info flex-grow-1">
                  <h4>H3 Accountants</h4>
                  <p>Php,Wordpress</p>
                  <a href="/img/portfolio/h3Account.webp" class="glightbox preview-link">
                    <i class="bi bi-zoom-in"></i>
                  </a>
                  <a href="https://h3accountants.com.au/" class="details-link">
                    <i class="bi bi-arrow-right-short"></i>
                  </a>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-shopify">
              <div class="rounded shadow-sm h-100 d-flex flex-column" style="border: 4px solid #12a16b">
                <img src="img/portfolio/sunnybloom.webp" class="img-fluid w-100" alt="" style="height:250px; object-fit:cover;">
                <div class="portfolio-info flex-grow-1">
                  <h4>Sunny Bloom</h4>
                  <p>Shopify</p>
                  <a href="/img/portfolio/sunnybloom.webp" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="https://sunnybloom.co.uk/" class="details-link"> <i class="bi bi-arrow-right-short"></i></a>
                </div>
              </div>
            </div>

            {{-- digital marketing --}}

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-digital">
              <div class="rounded shadow-sm h-100 d-flex flex-column" style="border: 4px solid #12a16b">
                <img src="img/portfolio/nics.webp" class="img-fluid w-100" alt="" style="height:250px; object-fit:cover;">
                <div class="portfolio-info flex-grow-1">
                  <h4>NICS CSS Leads Ads</h4>
                  <p>We generate 500+ Leads in just one week</p>
                  <a href="/img/portfolio/nics.webp" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="https://www.facebook.com/NICSLHR" class="details-link"> <i class="bi bi-arrow-right-short"></i></a>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-digital">
              <div class="rounded shadow-sm h-100 d-flex flex-column" style="border: 4px solid #12a16b">
                <img src="img/portfolio/Mughaliaz.webp" class="img-fluid w-100" alt="" style="height:250px; object-fit:cover;">
                <div class="portfolio-info flex-grow-1">
                  <h4>Mughaliaz Sales Ads</h4>
                  <p>2-10 million sale in just Three Month</p>
                  <a href="/img/portfolio/Mughaliaz.webp" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="https://mughaliaz.com/" class="details-link"> <i class="bi bi-arrow-right-short"></i></a>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-digital">
              <div class="rounded shadow-sm h-100 d-flex flex-column" style="border: 4px solid #12a16b">
                <img src="img/portfolio/hotel.webp" class="img-fluid w-100" alt="" style="height:250px; object-fit:cover;">
                <div class="portfolio-info flex-grow-1">
                  <h4>Toor Hotel Appartments Leads Ads</h4>
                  <p>We deliver 300+ targeted leads.</p>
                  <a href="/img/portfolio/hotel.webp" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="https://www.facebook.com/toorhotelapartments" class="details-link"> <i class="bi bi-arrow-right-short"></i></a>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-digital">
              <div class="rounded shadow-sm h-100 d-flex flex-column" style="border: 4px solid #12a16b">
                <img src="img/portfolio/spectra.webp" class="img-fluid w-100" alt="" style="height:250px; object-fit:cover;">
                <div class="portfolio-info flex-grow-1">
                  <h4>Sunny Bloom</h4>
                  <p>Generated 5M+ in sales within 4 months.</p>
                  <a href="/img/portfolio/spectra.webp" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="https://sunnybloom.co.uk/" class="details-link"> <i class="bi bi-arrow-right-short"></i></a>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div><!-- End Portfolio Container -->

  </section>

    <!-- How We Work Section -->
  <section id="how-we-work" class="how-we-work section">

    <!-- Section Title -->
    <div class="container section-title text-center">
      <h2>How We Work</h2>
      <p>From concept to launch — your full-stack development & digital growth partner</p>
    </div><!-- End Section Title -->

    <div class="container">

      <div class="steps-grid">

        <!-- Step 1 -->
        <div class="step-card">
          <div class="step-icon" style="color:#12a16b;">
            <i class="bi bi-search"></i>
          </div>
          <div class="step-number">Step 1</div>
          <h3>Discovery &amp; Planning</h3>
          <p>We start by understanding your goals, target audience, and business challenges — defining clear success metrics and a project roadmap.</p>
          <div class="step-arrow" style="color:#12a16b;">
            <i class="bi bi-arrow-right"></i>
          </div>
        </div>

        <!-- Step 2 -->
        <div class="step-card">
          <div class="step-icon" style="color:#12a16b;">
            <i class="bi bi-lightbulb"></i>
          </div>
          <div class="step-number">Step 2</div>
          <h3>Creative &amp; Technical Solutions</h3>
          <p>Our team designs intuitive UI/UX and scalable architectures — from Laravel & PHP to MERN stack — ensuring your product is future-ready.</p>
          <div class="step-arrow" style="color:#12a16b;">
            <i class="bi bi-arrow-right"></i>
          </div>
        </div>

        <!-- Step 3 -->
        <div class="step-card">
          <div class="step-icon" style="color:#12a16b;">
            <i class="bi bi-gear"></i>
          </div>
          <div class="step-number">Step 3</div>
          <h3>Development &amp; Integration</h3>
          <p>We build secure, high-performance solutions with clean code — integrating APIs, payment gateways, and other business-critical services.</p>
          <div class="step-arrow" style="color:#12a16b;">
            <i class="bi bi-arrow-right"></i>
          </div>
        </div>

        <!-- Step 4 -->
        <div class="step-card">
          <div class="step-icon" style="color:#12a16b;">
            <i class="bi bi-rocket-takeoff"></i>
          </div>
          <div class="step-number">Step 4</div>
          <h3>Launch &amp; Ongoing Support</h3>
          <p>After launch, we provide continuous monitoring, maintenance, and feature enhancements to ensure your product keeps growing with your business.</p>
        </div>

      </div>

    </div>

  </section>
  <!-- /How We Work Section -->


  <!-- FAQ Section -->
  <section id="faq" class="faq section bg-light">
    <div class="container">
      <div class="section-title text-center">
        <h2 class="mb-3">Your Questions Answered</h2>
        <p class="lead">Everything you need to know about working with PakCoder</p>
      </div>

      <div class="row justify-content-center">
        <div class="col-lg-9">
          <div class="accordion" id="faqAccordion">

            <!-- Question 1 -->
            <div class="accordion-item border-0 mb-3 shadow-sm">
              <h3 class="accordion-header" id="headingOne">
                <button class="accordion-button bg-white rounded-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                  <i class="bi bi-clock-history me-3" style="color:#12a16b;"></i>
                  How long does a typical project take?
                </button>
              </h3>
              <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#faqAccordion">
                <div class="accordion-body">
                  <ul class="list-unstyled">
                    <li class="mb-2"><strong>Landing sites:</strong> 2-4 weeks</li>
                    <li class="mb-2"><strong>Shopify stores:</strong> 3-5 weeks (depending on products)</li>
                    <li class="mb-2"><strong>Custom web apps:</strong> 6-12 weeks (MVP timeline)</li>
                    <li>We provide a detailed timeline after our discovery session and stick to it with 95% on-time delivery.</li>
                  </ul>
                </div>
              </div>
            </div>

            <!-- Question 2 -->
            <div class="accordion-item border-0 mb-3 shadow-sm">
              <h3 class="accordion-header" id="headingTwo">
                <button class="accordion-button collapsed bg-white rounded-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                  <i class="bi bi-code-square me-3" style="color:#12a16b;"></i>
                  Can you work with my existing site or theme?
                </button>
              </h3>
              <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#faqAccordion">
                <div class="accordion-body">
                  <p>Absolutely. We specialize in:</p>
                  <div class="row">
                    <div class="col-md-6">
                      <ul>
                        <li>WordPress theme customization</li>
                        <li>Shopify theme modifications</li>
                        <li>Laravel/Symfony code refactoring</li>
                      </ul>
                    </div>
                    <div class="col-md-6">
                      <ul>
                        <li>Legacy system modernization</li>
                        <li>Performance optimization</li>
                        <li>Security hardening</li>
                      </ul>
                    </div>
                  </div>
                  <p class="mt-3">We'll audit your current setup and recommend the most cost-effective approach.</p>
                </div>
              </div>
            </div>

            <!-- Question 3 -->
            <div class="accordion-item border-0 mb-3 shadow-sm">
              <h3 class="accordion-header" id="headingThree">
                <button class="accordion-button collapsed bg-white rounded-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                  <i class="bi bi-speedometer2 me-3" style="color:#12a16b;"></i>
                  What about SEO and performance optimization?
                </button>
              </h3>
              <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#faqAccordion">
                <div class="accordion-body">
                  <div class="d-flex align-items-start mb-4">
                    <div class="flex-shrink-0 me-3">
                      <div style="background-color:#12a16b1a;" class="p-3 rounded-circle">
                        <i class="bi bi-search" style="color:#12a16b; font-size:1.5rem;"></i>
                      </div>
                    </div>
                    <div>
                      <h5 class="mb-2">SEO Foundations Included</h5>
                      <ul class="mb-4">
                        <li>Technical SEO audit</li>
                        <li>Core Web Vitals optimization</li>
                        <li>Structured data markup</li>
                        <li>Mobile-first indexing</li>
                      </ul>
                    </div>
                  </div>
                  <div class="d-flex align-items-start">
                    <div class="flex-shrink-0 me-3">
                      <div style="background-color:#12a16b1a;" class="p-3 rounded-circle">
                        <i class="bi bi-lightning-charge" style="color:#12a16b; font-size:1.5rem;"></i>
                      </div>
                    </div>
                    <div>
                      <h5 class="mb-2">Performance Guarantees</h5>
                      <ul>
                        <li>Page load under 2 seconds</li>
                        <li>90+ Lighthouse scores</li>
                        <li>Image/web font optimization</li>
                        <li>Caching strategy implementation</li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Question 4 -->
            <div class="accordion-item border-0 mb-3 shadow-sm">
              <h3 class="accordion-header" id="headingFour">
                <button class="accordion-button collapsed bg-white rounded-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                  <i class="bi bi-shield-check me-3" style="color:#12a16b;"></i>
                  Do you provide ongoing maintenance?
                </button>
              </h3>
              <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#faqAccordion">
                <div class="accordion-body">
                  <div class="row">
                    <div class="col-md-6 mb-4 mb-md-0">
                      <h5 class="mb-3">Maintenance Plans</h5>
                      <div class="d-flex mb-3">
                        <div style="background-color:#12a16b1a;" class="badge text-primary rounded-pill me-3">
                          <span style="color:#12a16b;">Basic</span>
                        </div>
                        <div>Security updates & bug fixes</div>
                      </div>
                      <div class="d-flex mb-3">
                        <div style="background-color:#12a16b1a;" class="badge text-primary rounded-pill me-3">
                          <span style="color:#12a16b;">Standard</span>
                        </div>
                        <div>+ Performance monitoring</div>
                      </div>
                      <div class="d-flex">
                        <div style="background-color:#12a16b1a;" class="badge text-primary rounded-pill me-3">
                          <span style="color:#12a16b;">Premium</span>
                        </div>
                        <div>+ Feature development</div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <h5 class="mb-3">Retainer Benefits</h5>
                      <ul>
                        <li>Priority support response</li>
                        <li>Monthly performance reports</li>
                        <li>Discounts on additional work</li>
                        <li>Dedicated project manager</li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Question 5 -->
            <div class="accordion-item border-0 mb-3 shadow-sm">
              <h3 class="accordion-header" id="headingFive">
                <button class="accordion-button collapsed bg-white rounded-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                  <i class="bi bi-cash-coin me-3" style="color:#12a16b;"></i>
                  What's your pricing model?
                </button>
              </h3>
              <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#faqAccordion">
                <div class="accordion-body">
                  <div class="row g-4">
                    <div class="col-md-6">
                      <div class="p-4 rounded-3 h-100" style="background-color:#12a16b1a;">
                        <h5 class="d-flex align-items-center">
                          <i class="bi bi-currency-dollar me-2" style="color:#12a16b;"></i> Fixed Price
                        </h5>
                        <ul>
                          <li>Ideal for well-defined projects</li>
                          <li>Clear deliverables & timeline</li>
                          <li>No surprise costs</li>
                          <li>50% upfront, 50% on delivery</li>
                        </ul>
                        <p class="mb-0"><strong>Best for:</strong> Shopify stores, WordPress sites, landing pages</p>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="p-4 rounded-3 h-100" style="background-color:#12a16b1a;">
                        <h5 class="d-flex align-items-center">
                          <i class="bi bi-hourglass-split me-2" style="color:#12a16b;"></i> Time & Materials
                        </h5>
                        <ul>
                          <li>Flexible for evolving products</li>
                          <li>Weekly sprints & demos</li>
                          <li>Transparent time tracking</li>
                          <li>Monthly billing cycles</li>
                        </ul>
                        <p class="mb-0"><strong>Best for:</strong> Custom web apps, MVPs, long-term projects</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Question 6 -->
            <div class="accordion-item border-0 shadow-sm">
              <h3 class="accordion-header" id="headingSix">
                <button class="accordion-button collapsed bg-white rounded-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                  <i class="bi bi-file-earmark-lock me-3" style="color:#12a16b;"></i>
                  Will you sign an NDA?
                </button>
              </h3>
              <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix" data-bs-parent="#faqAccordion">
                <div class="accordion-body">
                  <div class="d-flex">
                    <div class="flex-shrink-0 me-3">
                      <i class="bi bi-check-circle-fill" style="color:#12a16b; font-size:1.5rem;"></i>
                    </div>
                    <div>
                      <p class="mb-1"><strong>Yes, we take confidentiality seriously.</strong> Our standard contract includes comprehensive confidentiality clauses, and we're happy to sign project-specific NDAs.</p>
                      <p class="mb-0">All team members are bound by strict confidentiality agreements regardless of formal NDAs.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="text-center mt-5 pt-4">
            <h4 class="mb-4">Still have questions?</h4>
            <a href="https://wa.me/923134672846" class="btn btn-lg px-4" style="background-color:#12a16b; border:none; color:white">
              <i class="bi bi-chat-left-text me-2"></i> Get Personalized Answers
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>

</main>

<div class="container text-center py-5"  style="display:none;">
  <button class="btn btn-success" id="model-open-show" data-bs-toggle="modal" data-bs-target="#offerModal">
    Open Modal Demo
  </button>
</div>

<div class="modal fade" id="offerModal" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-xl modal-dialog-centered">
    <div class="modal-content">

      <div class="modal-header border-0">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      
      <div class="modal-body p-4">
        <div class="row g-4">
          
          <!-- Left Section -->
          <div class="col-12 col-md-6">
            <h4 class="fw-bold mb-4">
              🚀 Get Your Website, Plus <br> So Much More
            </h4>

            <ul class="list-unstyled">
              <li class="d-flex align-items-start mb-3">
                <span class="icon-circle me-3">🎨</span>
                <div>
                  <strong>Free Business Logo Design</strong><br>
                  <small>Crafted to Match Your Brand Vision</small>
                </div>
              </li>
              <li class="d-flex align-items-start mb-3">
                <span class="icon-circle me-3">🌐</span>
                <div>
                  <strong>Free Hosting for 1 Month</strong><br>
                  <small>Reliable Hosting. No Extra Charges</small>
                </div>
              </li>
              <li class="d-flex align-items-start mb-3">
                <span class="icon-circle me-3">📈</span>
                <div>
                  <strong>Free SEO for 1 Month</strong><br>
                  <small>Boost Rankings on Google from Day One</small>
                </div>
              </li>
              <li class="d-flex align-items-start mb-3">
                <span class="icon-circle me-3">💷</span>
                <div>
                  <strong>Spread Your Cost Over 12 Months</strong><br>
                  <small>Start Now. Pay Monthly, Stress-Free.</small>
                </div>
              </li>
            </ul>

            {{-- <hr> --}}
            {{-- <p class="small mb-0">🌟 We’re rated <strong>4.7 ★</strong> on Google with 98% five-star reviews.</p> --}}
          </div>

          <!-- Right Section (Form) -->
          <div class="col-12 col-md-6">
            <h4 class="fw-bold mb-3">Ready to Build Something Great? Let’s Talk.</h4>
            <p class="small text-muted">⏳ This is a limited-time offer. Fill in the form to claim your bonuses.</p>

            <!-- Laravel Form -->
              <form id="contactForm" method="post" class="php-email-form">
                  @csrf
                  <div class="row">
                      <div class="col-md-6 mb-2">
                      <label for="name" class="form-label">Full Name</label>
                      <input type="text" id="name" name="name" class="form-control" placeholder="Your Name" required>
                      </div>

                      <div class="col-md-6 mb-2">
                      <label for="phone" class="form-label">Phone No</label>
                      <input type="number" id="phone" name="phone" class="form-control lead-input" data-type="number" placeholder="Your Phone" required>
                      </div>

                      <div class="col-md-6 mb-2">
                      <label for="service" class="form-label">Service Required</label>
                      <select id="service" name="service" class="form-control select-drop-down" required>
                          <option value="" disabled selected>What service do you need?</option>
                          <option value="web-development">Web Development (Laravel/PHP)</option>
                          <option value="wordpress">WordPress Development</option>
                          <option value="shopify">Shopify/eCommerce</option>
                          <option value="ui-ux">UI/UX Design</option>
                          <option value="digital-marketing">Digital Marketing</option>
                          <option value="other">Other</option>
                      </select>
                      </div>

                      <div class="col-md-6 mb-2">
                      <label for="email" class="form-label">Email address</label>
                      <input type="email" id="email" name="email" class="form-control lead-input" data-type="email" placeholder="Your Email" required>
                      </div>

                      <div class="col-12 mb-2">
                      <label for="message" class="form-label">Message</label>
                      <textarea id="message" name="message" class="form-control" rows="4" placeholder="Tell us about your project" required></textarea>
                      </div>
                  </div>
                  <button type="submit" class="btn btn-success w-100">Submit</button>
              </form>


          </div>

        </div>
      </div>
    </div>
  </div>
</div>

<script>

  $(document).ready(function() {

    setTimeout(function() {
       $('#model-open-show').trigger('click');
    }, 30000);

    $('.php-email-form').submit(function(e) {
        e.preventDefault();
        
        var form = $(this);
        var submitBtn = form.find('button[type="submit"]');

        if(submitBtn.length === 0) {
            console.error('Submit button not found in the form');
            return;
        }
        
        var originalBtnText = submitBtn.html();
        submitBtn.prop('disabled', true).html('<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> Sending...');
        
        $.ajax({
            url: form.attr('action') || '{{ route("contact.submit") }}', // Fallback if action attribute is missing
            type: 'post',
            data: form.serialize(),
            dataType: 'json',
            success: function(response) {
                if(response.success) {
                    // Show success message
                    form.prepend(
                        '<div class="alert alert-success alert-dismissible fade show" role="alert">' +
                        'Thank you! Your message has been sent. We will contact you soon.' +
                        '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>' +
                        '</div>'
                    );
                    
                    gtag('event', 'conversion', {
                        'send_to': 'AW-17487709730/Xww0CP-WpowbEKKM5ZJB'
                    });
                    
                    // Reset form
                    form.trigger('reset');
                } else {
                    // Show error message
                    form.prepend(
                        '<div class="alert alert-danger alert-dismissible fade show" role="alert">' +
                        'Error: ' + (response.message || 'Something went wrong. Please try again.') +
                        '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>' +
                        '</div>'
                    );
                }
            },
            error: function(xhr) {
                var errorMessage = 'An error occurred. Please try again.';
                if(xhr.responseJSON && xhr.responseJSON.message) {
                    errorMessage = xhr.responseJSON.message;
                } else if(xhr.statusText) {
                    errorMessage = xhr.statusText;
                }
                
                form.prepend(
                    '<div class="alert alert-danger alert-dismissible fade show" role="alert">' +
                    errorMessage +
                    '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>' +
                    '</div>'
                );
            },
            complete: function() {
                submitBtn.prop('disabled', false).html(originalBtnText);
                
                // Remove alerts after 5 seconds
                setTimeout(function() {
                    form.find('.alert').fadeOut(500, function() {
                        $(this).remove();
                    });
                }, 5000);
            }
        });
    });

  });

</script>

@endsection
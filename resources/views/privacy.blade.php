@extends('layouts.default')

@section('title', 'Privacy Policy - Passion')

@section('content')

<main class="main">

    <!-- Page Title -->
    <div class="page-title dark-background" style="background-image: url(assets/img/bg/bg-14.webp);">
      <div class="container position-relative">
        <h1>Privacy Policy</h1>
        <p>Your privacy matters to us. Learn how we collect, use, and safeguard your information.</p>
        <nav class="breadcrumbs">
          <ol>
            <li><a href="{{ url('/') }}">Home</a></li>
            <li class="current">Privacy Policy</li>
          </ol>
        </nav>
      </div>
    </div><!-- End Page Title -->

    <!-- Privacy Policy Section -->
    <section id="privacy-policy" class="privacy-policy section">

      <div class="container">
        <!-- Page Header -->
        <div class="policy-header text-center">
          <span class="last-updated">Last Updated: February 27, 2025</span>
          <h2>Privacy Policy</h2>
          <p>This Privacy Policy explains how we collect, use, and protect your personal information when you use our services.</p>
        </div>

        <!-- Content -->
        <div class="policy-content">

          <!-- Information Collection -->
          <div id="information-collection" class="content-section">
            <h3>1. Information We Collect</h3>
            <p>We collect different types of information for various purposes to provide and improve our services:</p>
            <ul class="list-items">
              <li>Personal details (name, email, phone number, billing info)</li>
              <li>Account information and login credentials</li>
              <li>Usage data (IP address, browser type, device details, pages visited)</li>
              <li>Cookies and tracking technologies</li>
            </ul>
          </div>

          <!-- Use of Information -->
          <div id="use-of-information" class="content-section">
            <h3>2. How We Use Your Information</h3>
            <p>We use collected data for purposes such as:</p>
            <ul class="list-items">
              <li>Providing and maintaining our services</li>
              <li>Improving user experience and performance</li>
              <li>Processing payments and transactions</li>
              <li>Sending important updates and promotional messages</li>
              <li>Ensuring security and preventing fraud</li>
            </ul>
          </div>

          <!-- Cookies -->
          <div id="cookies" class="content-section">
            <h3>3. Cookies and Tracking</h3>
            <p>We use cookies and similar tracking technologies to track activity on our website and improve functionality.</p>
            <div class="info-box">
              <i class="bi bi-cookie"></i>
              <p>You can disable cookies in your browser settings, but some parts of our service may not function properly.</p>
            </div>
          </div>

          <!-- Data Sharing -->
          <div id="data-sharing" class="content-section">
            <h3>4. Sharing of Information</h3>
            <p>We do not sell or trade your personal information. However, we may share it with trusted third parties when necessary to:</p>
            <ul class="list-items">
              <li>Provide and improve services</li>
              <li>Comply with legal obligations</li>
              <li>Prevent fraud or misuse of services</li>
              <li>Support business operations (payment processors, hosting, etc.)</li>
            </ul>
          </div>

          <!-- Data Security -->
          <div id="security" class="content-section">
            <h3>5. Data Security</h3>
            <p>We implement security measures to protect your data. However, no method of transmission over the Internet is 100% secure, and we cannot guarantee absolute security.</p>
          </div>

          <!-- User Rights -->
          <div id="user-rights" class="content-section">
            <h3>6. Your Rights</h3>
            <p>You have the right to:</p>
            <ul class="list-items">
              <li>Access, update, or delete your personal data</li>
              <li>Request a copy of your stored information</li>
              <li>Withdraw consent for marketing communications</li>
              <li>Restrict or object to data processing</li>
            </ul>
          </div>

          <!-- Third-Party Services -->
          <div id="third-party" class="content-section">
            <h3>7. Third-Party Services</h3>
            <p>Our service may include links to third-party websites or services. We are not responsible for the privacy practices of such third parties.</p>
          </div>

          <!-- Policy Updates -->
          <div id="policy-updates" class="content-section">
            <h3>8. Changes to This Privacy Policy</h3>
            <p>We may update this Privacy Policy from time to time. Any changes will be posted on this page with an updated "Last Updated" date.</p>
          </div>

        </div>

        <!-- Contact Section -->
        <div class="policy-contact">
          <div class="contact-box">
            <div class="contact-icon">
              <i class="bi bi-envelope"></i>
            </div>
            <div class="contact-content">
              <h4>Questions About Privacy?</h4>
              <p>If you have any questions about this Privacy Policy, feel free to contact us.</p>
              <a href="mailto:thepakcoder@gmail.com" class="contact-link">Contact Support</a>
            </div>
          </div>
        </div>
      </div>

    </section><!-- /Privacy Policy Section -->

</main>

@endsection

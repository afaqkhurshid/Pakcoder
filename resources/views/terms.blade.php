@extends('layouts.default')

@section('title', 'Terms & Conditions - Passion')

@section('content')

<main class="main">

    <!-- Page Title -->
    <div class="page-title dark-background" style="background-image: url({{ asset('assets/img/bg/bg-14.webp') }});">
        <div class="container position-relative">
            <h1>Terms & Conditions</h1>
            <p>Welcome to Passion. Please review our Terms & Conditions carefully before using our services.</p>
            <nav class="breadcrumbs">
                <ol>
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li class="current">Terms & Conditions</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- End Page Title -->

    <!-- Terms Of Service Section -->
    <section id="terms-of-service" class="terms-of-service section">
        <div class="container">

            <!-- Page Header -->
            <div class="tos-header text-center">
                <span class="last-updated">Last Updated: {{ now()->format('F d, Y') }}</span>
                <h2>Terms of Service</h2>
                <p>By accessing and using our services, you agree to the following terms.</p>
            </div>

            <!-- Content -->
            <div class="tos-content">

                <div id="agreement" class="content-section">
                    <h3>1. Agreement to Terms</h3>
                    <p>By using our website and services, you agree to be bound by these Terms. If you do not agree, please discontinue use immediately.</p>
                </div>

                <div id="intellectual-property" class="content-section">
                    <h3>2. Intellectual Property</h3>
                    <p>All content, branding, and features of our services are owned by us and protected under international intellectual property laws.</p>
                    <ul class="list-items">
                        <li>Content is for personal, non-commercial use</li>
                        <li>No copying, modification, or redistribution without consent</li>
                        <li>Trademarks and logos cannot be used without permission</li>
                    </ul>
                </div>

                <div id="user-accounts" class="content-section">
                    <h3>3. User Accounts</h3>
                    <p>You must provide accurate details when creating an account. You are responsible for safeguarding your password and account activity.</p>
                </div>

                <div id="prohibited" class="content-section">
                    <h3>4. Prohibited Activities</h3>
                    <p>You agree not to misuse our services. Restricted activities include:</p>
                    <ul class="list-items">
                        <li>Unauthorized access or hacking attempts</li>
                        <li>Distributing malware or harmful content</li>
                        <li>Data scraping or automated retrieval</li>
                        <li>Framing or impersonation of our services</li>
                    </ul>
                </div>

                <div id="disclaimer" class="content-section">
                    <h3>5. Disclaimer</h3>
                    <p>Our services are provided "AS IS" without any guarantees of availability, accuracy, or error-free performance.</p>
                </div>

                <div id="limitation" class="content-section">
                    <h3>6. Limitation of Liability</h3>
                    <p>We are not liable for any indirect, incidental, or consequential damages resulting from the use of our services.</p>
                </div>

                <div id="indemnification" class="content-section">
                    <h3>7. Indemnification</h3>
                    <p>You agree to indemnify and hold us harmless from any claims, damages, or losses arising from your use of our services.</p>
                </div>

                <div id="termination" class="content-section">
                    <h3>8. Termination</h3>
                    <p>We reserve the right to suspend or terminate your account if you violate these Terms.</p>
                </div>

                <div id="governing-law" class="content-section">
                    <h3>9. Governing Law</h3>
                    <p>These Terms are governed by the laws of <strong>[Your Country]</strong>, without regard to conflicts of law.</p>
                </div>

                <div id="changes" class="content-section">
                    <h3>10. Changes to Terms</h3>
                    <p>We may update these Terms periodically. Continued use of our services after changes means you accept the updated Terms.</p>
                </div>
            </div>

            <!-- Contact Section -->
            <div class="tos-contact mt-5">
                <div class="contact-box">
                    <div class="contact-icon">
                        <i class="bi bi-envelope"></i>
                    </div>
                    <div class="contact-content">
                        <h4>Have Questions?</h4>
                        <p>If you have any questions about our Terms, please reach out to us.</p>
                        <a href="{{ url('/#contact') }}" class="contact-link">Contact Support</a>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- /Terms Of Service Section -->

</main>

@endsection

@extends('layouts.default')

@section('title', 'Portfolio - Passion')

@section('content')

<main class="main">

    <!-- Page Title -->
    <div class="page-title dark-background" style="background-image: url(assets/img/bg/bg-14.webp);">
      <div class="container position-relative">
        <h1>Contact Us</h1>
        {{-- <p>Esse dolorum voluptatum ullam est sint nemo et est ipsa porro placeat quibusdam quia assumenda numquam molestias.</p> --}}
        <nav class="breadcrumbs">
          <ol>
            <li><a href="">Home</a></li>
            <li class="current">Contact Us</li>
          </ol>
        </nav>
      </div>
    </div><!-- End Page Title -->

     

  <!-- Contact Section -->
  <section id="contact" class="contact section">
    <!-- Section Title -->
    <div class="container section-title">
      <h2>Let's Build Something</h2>
      <p>Get in touch for a free strategy session</p>
    </div><!-- End Section Title -->

    <div class="container">
      {{-- <div class="contact-main-wrapper"> --}}
        {{-- <div class="map-wrapper">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3022.21520917933!2d-73.987844924266!3d40.74844097138986!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c259a9b3117469%3A0xd134e199a405a163!2sEmpire%20State%20Building!5e0!3m2!1sen!2sus!4v1712345678901!5m2!1sen!2sus" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div> --}}

        <div class="contact-content">
          <div class="contact-cards-container">
            <div class="contact-card">
              <div class="icon-box">
                <i class="bi bi-geo-alt"></i>
              </div>
              <div class="contact-text">
                <h4>Location</h4>
                <p>Lahore, Pakistan</p>
              </div>
            </div>

            <div class="contact-card">
              <div class="icon-box">
                <i class="bi bi-envelope"></i>
              </div>
              <div class="contact-text">
                <h4>Email</h4>
                <p>
                  <a href="mailto:contact@pakcoder.com" class="text-decoration-none">
                    contact@pakcoder.com
                  </a>
                </p>
              </div>
            </div>

            <div class="contact-card">
              <div class="icon-box">
                <i class="bi bi-telephone"></i>
              </div>
              <div class="contact-text">
                <h4>Call/WhatsApp</h4>
                <p>
                  <a href="https://wa.me/923134672846" target="_blank" class="text-decoration-none">
                    +92 313 4672846
                  </a>
                </p>
              </div>
            </div>

            <div class="contact-card">
              <div class="icon-box">
                <i class="bi bi-clock"></i>
              </div>
              <div class="contact-text">
                <h4>Open Hours</h4>
                <p>Monday-Saturday: 10AM - 10PM (PST)</p>
              </div>
            </div>
          </div>

          <div class="contact-form-container">
            <h3>Get a Free Strategy Session</h3>
            <p>Have a project in mind? Contact us for a free consultation. We'll respond within 24 hours.</p>

            <form method="post" class="php-email-form">
              @csrf
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control border-green" id="name" placeholder="Your Name" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control border-green lead-input" data-type="email" name="email" id="email" placeholder="Your Email" required>
                </div>
              </div>
                <div class="row mt-3">
                  <div class="col-md-6 form-group">
                    <select class="form-control  border-green" name="service" id="service" required>
                      <option value="" disabled selected>What service do you need?</option>
                      <option value="web-development">Web Development (Laravel/PHP)</option>
                      <option value="wordpress">WordPress Development</option>
                      <option value="shopify">Shopify/eCommerce</option>
                      <option value="ui-ux">UI/UX Design</option>
                      <option value="digital-marketing">Digital Marketing</option>
                    </select>
                  </div>
                  <div class="col-md-6 form-group mt-3 mt-md-0">
                      <input type="number" name="phone" class="form-control border-green lead-input" data-type="number" id="phone" placeholder="Your Phone" required>
                  </div>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control border-green" name="message" rows="5" placeholder="Tell us about your project" required></textarea>
              </div>

              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>

              <div class="form-submit">
                <button type="submit" class="btn btn-primary">Reach Us</button>
                <div class="social-links mt-3">
                  <a href="https://wa.me/923134672846" target="_blank" title="WhatsApp"><i class="bi bi-whatsapp"></i></a>
                  {{-- <a href="https://twitter.com/pakcoder" target="_blank" title="Twitter"><i class="bi bi-twitter-x"></i></a>
                  <a href="https://linkedin.com/company/pakcoder" target="_blank" title="LinkedIn"><i class="bi bi-linkedin"></i></a> --}}
                </div>
              </div>
            </form>
          </div>
        </div>
      {{-- </div> --}}
    </div>
  </section><!-- /Contact Section -->
  
<script>

$(document).ready(function() {

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


</main>

@endsection
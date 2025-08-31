<footer id="footer" class="footer position-relative dark-background">
  <div class="container footer-top">
    <div class="row gy-4">
      <div class="col-lg-5 col-md-12 footer-about">
        <a href="" class="logo d-flex align-items-center">
                      <img src="{{ asset('/img/logopak.png') }}" alt="Passion Logo" style="max-height: 170px; position:absolute;">

        </a>
        <p>
          We are your end-to-end digital partner, transforming ideas into powerful online assets. Our team specializes in building modern, secure, and scalable websites and applications that perform. Then, we amplify your reach with strategic digital marketing to drive growth and engagement. From initial concept to development and final promotion, we provide a seamless, integrated solution under one roof, ensuring your brand not only launches successfully but thrives in the competitive digital landscape. Let's build your future online.
        </p>
        <div class="social-links d-flex mt-4">
          {{-- <a href=""><i class="bi bi-twitter-x"></i></a>
          <a href=""><i class="bi bi-facebook"></i></a>
          <a href=""><i class="bi bi-instagram"></i></a>
          <a href=""><i class="bi bi-linkedin"></i></a> --}}
        </div>
      </div>
      <div class="col-lg-2 col-6 footer-links">
        <h4>Useful Links</h4>
        <ul>
          <li><a href="#">Home</a></li>
          <li><a href="#about">About us</a></li>
          <li><a href="#services">Services</a></li>
          <li><a href="{{ url('/terms-conditions') }}">Terms of service</a></li>
          <li><a href="{{ url('/privacy-policy') }}">Privacy policy</a></li>
        </ul>
      </div>
      <div class="col-lg-2 col-6 footer-links">
        <h4>Our Services</h4>
        <ul>
          <li><a href="{{ url('/') }}#portfolio">WordPress</a></li>
          <li><a href="{{ url('/') }}#portfolio">Laravel & Symfony</a></li>
          <li><a href="{{ url('/') }}#portfolio">Shopify</a></li>
          <li><a href="{{ url('/') }}#portfolio">Digital Marketing</a></li>
        </ul>
      </div>
      <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
        <h4>Contact Us</h4>
        <p>Nayaab Villa</p>
        <p>Near DHA Phase 1,</p>
        <p>Lahore, Pakistan</p>
        <p class="mt-4"><strong>Phone:</strong> <span>+92 313 4672846</span></p>
        <p><strong>Email:</strong> <a href="mailto:contact@pakcoder.com"><span>contact@pakcoder.com</span></a></p>
      </div>
    </div>
  </div>
  <div class="container copyright text-center mt-4">
    <p>© <span>Copyright</span> <strong class="px-1 sitename">PakCoder</strong> <span>All Rights Reserved</span></p>
    <div class="credits">
      <!-- All the links in the footer should remain intact. -->
      <!-- You can delete the links only if you've purchased the pro version. -->
      <!-- Licensing information: https://bootstrapmade.com/license/ -->
      <!-- Purchase the pro version with working PHP/AJAX contact form: [buy-url] -->
      {{-- Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a> --}}
    </div>
  </div>
</footer>
<script>

$(document).ready(function() {

  $(document).on('blur', '.lead-input', function() {
    var value = $(this).val();
    var type = $(this).attr('data-type');
    if (value) {
      var data = {};
      data[type] = value;
      $.ajax({
        url: "{{ route('leads.store') }}",
        method: 'POST',
        data: Object.assign(data, {_token: '{{ csrf_token() }}'}),
        success: function(response) {
          // Optionally show a success message
        },
        error: function(xhr) {
          // Optionally show an error message
        }
      });
    }
  });
  
});
</script>
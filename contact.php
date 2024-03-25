<?php include 'header.php'; ?>

<section id="hero" class="d-flex justify-cntent-center align-items-center contactpage">
  <div id="heroCarousel" class="container carousel carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">
    <!-- Slide 1 -->
    <div class="carousel-item active">
      <div class="carousel-container">
        <h2 class="animate__animated animate__fadeInDown">Contact us</h2>
        <p class="animate__animated animate__fadeInUp">
          Let's have a
          talk together.
        </p>
        <a href="" class="btn-get-started animate__animated animate__fadeInUp">Read More</a>
      </div>
    </div>
  </div>
</section>

<main id="main">
  <!-- ======= Our Services Section ======= -->
  <section class="breadcrumbs">
    <div class="container">
      <div class="d-flex justify-content-between align-items-center">
        <h2>Contact us</h2>
        <ol>
          <li><a href="index.html">Home</a></li>
          <li>Contact us</li>
        </ol>
      </div>
    </div>
  </section>
  <!-- End Our Services Section -->

  <!-- ======= Contact Section ======= -->
  <section id="contact" class="section-bg">
    <div class="container" data-aos="fade-up">
      <div class="section-header text-center">
        <h5>CONTACT US</h5>
        <p>Send us a message and our team will get back to your shortly!</p>
      </div>

      <div class="row contact-info">
        <div class="col-md-4">
          <div class="contact-address">
            <i class="bi bi-geo-alt"></i>
            <h3>Address</h3>
            <address> khattak sons i-9/3, islamabad, pakistan</address>
          </div>
        </div>

        <div class="col-md-4">
          <div class="contact-phone">
            <i class="bi bi-phone"></i>
            <h3>Phone Number</h3>
            <p><a href="tel:+155895548855">+923197376043</a></p>
          </div>
        </div>

        <div class="col-md-4">
          <div class="contact-email">
            <i class="bi bi-envelope"></i>
            <h3>Email</h3>
            <p><a href="mailto:info@example.com"> fawadgul311@gmail.com</a></p>
          </div>
        </div>
      </div>

      <div class="form">
        <form action="forms/contact.php" method="post" role="form" class="php-email-form">
          <div class="row">
            <div class="form-group col-md-6">
              <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required />
            </div>
            <div class="form-group col-md-6 mt-3 mt-md-0">
              <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required />
            </div>
          </div>
          <div class="form-group mt-3">
            <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required />
          </div>
          <div class="form-group mt-3">
            <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
          </div>
          <div class="my-3">
            <div class="loading">Loading</div>
            <div class="error-message"></div>
            <div class="sent-message">
              Your message has been sent. Thank you!
            </div>
          </div>
          <div class="text-center">
            <button type="submit">Send Message</button>
          </div>
        </form>
      </div>
    </div>
  </section>
  <!-- End Contact Section -->
</main>
<!-- End #main -->

<!-- ======= Footer ======= -->
<?php include 'footer.php'; ?>

<!-- Vendor JS Files -->
<script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
<script src="assets/vendor/aos/aos.js"></script>
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
<script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
<script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
<script src="assets/vendor/php-email-form/validate.js"></script>

<!-- Template Main JS File -->
<script src="assets/js/main.js"></script>
</body>

</html>
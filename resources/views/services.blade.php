@include ('navbar')
    <div class="page-banner bg-img bg-img-parallax overlay-dark" style="background-image: url({{asset('img')}}/bg_image_3.jpg);">
      <div class="container h-100">
        <div class="row justify-content-center align-items-center h-100">
          <div class="col-lg-8">
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb breadcrumb-dark bg-transparent justify-content-center py-0">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Services</li>
              </ol>
            </nav>
            <h1 class="fg-white text-center">Services</h1>
          </div>
        </div>
      </div>
    </div> <!-- .page-banner -->
  </header>



  <div class="container mt-5 mb-3">
    <div class="row">
        <div class="col-md-4">
        @foreach($datadenah as $tampil )
            <div class="card p-3 mb-2">
                <div class="d-flex justify-content-between">
                    <div class="d-flex flex-row align-items-center">
                        <div class="icon"> <i class="bx bxl-mailchimp"></i> </div>
                    </div>
                  <?php $number=1;?>
                    <div class="badge"><?php echo $number++; ?> </div>
                </div>
                <div class="mt-5">
                    <h6 class="heading">{{$tampil -> nama}} &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; {{$tampil -> prodi}}</h6>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>






  <main>
    <div class="page-section">
      <div class="container">
        <div class="text-center">
          <div class="subhead">Our Services</div>
          <h2 class="title-section">See what can we do for your Projects</h2>
        </div>

        <div class="row justify-content-center">
          <div class="col-md-6 col-lg-4 col-xl-3 py-3 mb-3">
            <div class="text-center">
              <div class="img-fluid mb-4">
                <img src="{{asset('img')}}/icons/web_development.svg" alt="">
              </div>
              <h5>Web Development</h5>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 col-xl-3 py-3 mb-3">
            <div class="text-center">
              <div class="img-fluid mb-4">
                <img src="{{asset('img')}}/icons/graphics_design.svg" alt="">
              </div>
              <h5>Graphics Design</h5>
            </div>
          </div>

          <div class="col-md-6 col-lg-4 col-xl-3 py-3 mb-3">
            <div class="text-center">
              <div class="img-fluid mb-4">
                <img src="{{asset('img')}}/icons/seo_and_marketing.svg" alt="">
              </div>
              <h5>SEO & Marketing</h5>
            </div>
          </div>

          <div class="col-md-6 col-lg-4 col-xl-3 py-3 mb-3">
            <div class="text-center">
              <div class="img-fluid mb-4">
                <img src="{{asset('img')}}/icons/customer_services.svg" alt="">
              </div>
              <h5>Customer Services</h5>
            </div>
          </div>

          <div class="col-md-6 col-lg-4 col-xl-3 py-3 mb-3">
            <div class="text-center">
              <div class="img-fluid mb-4">
                <img src="{{asset('img')}}/icons/app_development.svg" alt="">
              </div>
              <h5>App Development</h5>
            </div>
          </div>

          <div class="col-md-6 col-lg-4 col-xl-3 py-3 mb-3">
            <div class="text-center">
              <div class="img-fluid mb-4">
                <img src="{{asset('img')}}/icons/ui_ux_design.svg" alt="">
              </div>
              <h5>UI/UX Design</h5>
            </div>
          </div>

          <div class="col-md-6 col-lg-4 col-xl-3 py-3 mb-3">
            <div class="text-center">
              <div class="img-fluid mb-4">
                <img src="{{asset('img')}}/icons/product_design.svg" alt="">
              </div>
              <h5>Product Design</h5>
            </div>
          </div>

          <div class="col-md-6 col-lg-4 col-xl-3 py-3 mb-3">
            <div class="text-center">
              <div class="img-fluid mb-4">
                <img src="{{asset('img')}}/icons/data_analyst.svg" alt="">
              </div>
              <h5>Data Analyst</h5>
            </div>
          </div>

        </div>
      </div> <!-- .container -->
    </div> <!-- .page-section -->

    <!-- Testimonials -->
    <div class="page-section">
      <div class="container">
        <div class="owl-carousel testimonial-carousel">
          <div class="card-testimonial">
            <div class="content">
              The quick, brown fox jumps over a lazy dog. DJs flock by when MTV ax quiz prog. Junk MTV quiz graced by fox whelps. Bawds jog, flick quartz, vex nymphs. Waltz, bad nymph
            </div>
            <div class="author">
              <div class="avatar">
                <img src="{{asset('img')}}/person/person_1.jpg" alt="">
              </div>
              <div class="d-inline-block ml-2">
                <div class="author-name">Sam Watson</div>
                <div class="author-info">CEO - Mosh Elite Ltd.</div>
              </div>
            </div>
          </div>

          <div class="card-testimonial">
            <div class="content">
              The quick, brown fox jumps over a lazy dog. DJs flock by when MTV ax quiz prog. Junk MTV quiz graced by fox whelps. Bawds jog, flick quartz, vex nymphs. Waltz, bad nymph
            </div>
            <div class="author">
              <div class="avatar">
                <img src="{{asset('img')}}/person/person_2.jpg" alt="">
              </div>
              <div class="d-inline-block ml-2">
                <div class="author-name">Edinson Alfa</div>
                <div class="author-info">CEO - Mosh Elite Ltd.</div>
              </div>
            </div>
          </div>

          <div class="card-testimonial">
            <div class="content">
              The quick, brown fox jumps over a lazy dog. DJs flock by when MTV ax quiz prog. Junk MTV quiz graced by fox whelps. Bawds jog, flick quartz, vex nymphs. Waltz, bad nymph
            </div>
            <div class="author">
              <div class="avatar">
                <img src="{{asset('img')}}/person/person_3.jpg" alt="">
              </div>
              <div class="d-inline-block ml-2">
                <div class="author-name">May Halloway</div>
                <div class="author-info">CEO - Mosh Elite Ltd.</div>
              </div>
            </div>
          </div>

          <div class="card-testimonial">
            <div class="content">
              The quick, brown fox jumps over a lazy dog. DJs flock by when MTV ax quiz prog. Junk MTV quiz graced by fox whelps. Bawds jog, flick quartz, vex nymphs. Waltz, bad nymph
            </div>
            <div class="author">
              <div class="avatar">
                <img src="{{asset('img')}}/person/person_1.jpg" alt="">
              </div>
              <div class="d-inline-block ml-2">
                <div class="author-name">Sam Watson</div>
                <div class="author-info">CEO - Mosh Elite Ltd.</div>
              </div>
            </div>
          </div>

          <div class="card-testimonial">
            <div class="content">
              The quick, brown fox jumps over a lazy dog. DJs flock by when MTV ax quiz prog. Junk MTV quiz graced by fox whelps. Bawds jog, flick quartz, vex nymphs. Waltz, bad nymph
            </div>
            <div class="author">
              <div class="avatar">
                <img src="{{asset('img')}}/person/person_2.jpg" alt="">
              </div>
              <div class="d-inline-block ml-2">
                <div class="author-name">Edinson Alfa</div>
                <div class="author-info">CEO - Mosh Elite Ltd.</div>
              </div>
            </div>
          </div>

          <div class="card-testimonial">
            <div class="content">
              The quick, brown fox jumps over a lazy dog. DJs flock by when MTV ax quiz prog. Junk MTV quiz graced by fox whelps. Bawds jog, flick quartz, vex nymphs. Waltz, bad nymph
            </div>
            <div class="author">
              <div class="avatar">
                <img src="{{asset('img')}}/person/person_3.jpg" alt="">
              </div>
              <div class="d-inline-block ml-2">
                <div class="author-name">May Halloway</div>
                <div class="author-info">CEO - Mosh Elite Ltd.</div>
              </div>
            </div>
          </div>

        </div> <!-- .row -->
      </div> <!-- .container -->
    </div> <!-- .page-section -->

    <div class="page-section">
      <div class="container-fluid">
        <div class="row row-cols-md-3 row-cols-lg-5 justify-content-center text-center">
          <div class="py-3 px-5">
            <img src="{{asset('img')}}/clients/airbnb.png" alt="">
          </div>
          <div class="py-3 px-5">
            <img src="{{asset('img')}}/clients/google.png" alt="">
          </div>
          <div class="py-3 px-5">
            <img src="{{asset('img')}}/clients/mailchimp.png" alt="">
          </div>
          <div class="py-3 px-5">
            <img src="{{asset('img')}}/clients/paypal.png" alt="">
          </div>
          <div class="py-3 px-5">
            <img src="{{asset('img')}}/clients/stripe.png" alt="">
          </div>
        </div>
      </div> <!-- .container-fluid -->
    </div> <!-- .page-section -->
  </main>


  <footer class="page-footer">
    <div class="container">
      <div class="row">
        <div class="col-lg-3 py-3">
          <h3>Reve<span class="fg-primary">Tive.</span></h3>
        </div>
        <div class="col-lg-3 py-3">
          <h5>Contact Information</h5>
          <p>301 The Greenhouse, Custard Factory, London, E2 8DY.</p>
          <p>Email: example@mail.com</p>
          <p>Phone: +00 112323980</p>
        </div>
        <div class="col-lg-3 py-3">
          <h5>Company</h5>
          <ul class="footer-menu">
            <li><a href="#">Career</a></li>
            <li><a href="#">Resources</a></li>
            <li><a href="#">News & Feed</a></li>
          </ul>
        </div>
        <div class="col-lg-3 py-3">
          <h5>Newsletter</h5>
          <form action="#">
            <input type="text" class="form-control" placeholder="Enter your email">
            <button type="submit" class="btn btn-primary btn-sm mt-2">Submit</button>
          </form>
        </div>
      </div>

      <hr>

      <div class="row mt-4">
        <div class="col-md-6">
          <p>Copyright 2020. This template designed by <a href="https://macodeid.com">MACode ID</a></p>
        </div>
        <div class="col-md-6 text-right">
          <div class="sosmed-button">
            <a href="#"><span class="mai-logo-facebook-f"></span></a>
            <a href="#"><span class="mai-logo-twitter"></span></a>
            <a href="#"><span class="mai-logo-youtube"></span></a>
            <a href="#"><span class="mai-logo-linkedin"></span></a>
          </div>
        </div>
      </div>
    </div>
  </footer>

  
<script src="../assets/js/jquery-3.5.1.min.js"></script>

<script src="../assets/js/bootstrap.bundle.min.js"></script>

<script src="../assets/vendor/owl-carousel/js/owl.carousel.min.js"></script>

<script src="../assets/vendor/wow/wow.min.js"></script>

<script src="../assets/vendor/fancybox/js/jquery.fancybox.min.js"></script>

<script src="../assets/vendor/isotope/isotope.pkgd.min.js"></script>

<script src="../assets/js/google-maps.js"></script>

<script src="../assets/js/theme.js"></script>

</body>
</html>
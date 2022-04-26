@include ('navbar')
    <div class="page-banner bg-img bg-img-parallax overlay-dark" style="background-image: url({{asset('img')}}/bg_image_3.jpg);">
      <div class="container h-100">
        <div class="row justify-content-center align-items-center h-100">
          <div class="col-lg-8">
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb breadcrumb-dark bg-transparent justify-content-center py-0">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">About</li>
              </ol>
            </nav>
            <h1 class="text-center" style="color:white;">Information</h1>
          </div>
        </div>
      </div>
    </div> <!-- .page-banner -->
  </header>

  <main>
    <div class="page-section">
      <div class="container">
        @foreach  ($info as $info )
        <div class="row align-items-center">
          <div class="col-lg-6 py-3">
            <div class="subhead">{{$info -> Tanggal}}</div>
            <h2 class="title-section"><span class="fg-primary">{{$info -> Judul}}</span> </h2>

            <p>{{$info -> Deskripsi}}</p>
          </div>
          <div class="col-lg-6 py-3">
            <div class="about-img" style="height:300px; width:800px">
              <img src="{{url('images/informationimages/'.$info -> Gambar)}}" alt="">
            </div>
          </div>
        </div>
        @endforeach
      </div> <!-- .container -->
    </div> <!-- .page-section -->

    <div class="page-section">
      <div class="container">
        <div class="text-center">
          <div class="subhead">Our Teams</div>
          <h2 class="title-section">The Expert Team on ReveTive</h2>
        </div>

        <div class="owl-carousel team-carousel mt-5">
          <div class="team-wrap">
            <div class="team-profile">
              <img src="{{asset('img')}}/teams/team_1.jpg" alt="">
            </div>
            <div class="team-content">
              <h5>Walter White</h5>
              <div class="text-sm fg-grey">Chief Executive Officer</div>

              <div class="social-button">
                <a href="#"><span class="mai-logo-facebook-messenger"></span></a>
                <a href="#"><span class="mai-call"></span></a>
                <a href="#"><span class="mai-mail"></span></a>
              </div>
            </div>
          </div>

          <div class="team-wrap">
            <div class="team-profile">
              <img src="{{asset('img')}}/teams/team_2.jpg" alt="">
            </div>
            <div class="team-content">
              <h5>Sarah Johanson</h5>
              <div class="text-sm fg-grey">Chief Technology Officer</div>

              <div class="social-button">
                <a href="#"><span class="mai-logo-facebook-messenger"></span></a>
                <a href="#"><span class="mai-call"></span></a>
                <a href="#"><span class="mai-mail"></span></a>
              </div>
            </div>
          </div>

          <div class="team-wrap">
            <div class="team-profile">
              <img src="{{asset('img')}}/teams/team_3.jpg" alt="">
            </div>
            <div class="team-content">
              <h5>Anna Anderson</h5>
              <div class="text-sm fg-grey">Product Manager</div>

              <div class="social-button">
                <a href="#"><span class="mai-logo-facebook-messenger"></span></a>
                <a href="#"><span class="mai-call"></span></a>
                <a href="#"><span class="mai-mail"></span></a>
              </div>
            </div>
          </div>

        </div>
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

  @include ('footer')

  


</body>
</html>
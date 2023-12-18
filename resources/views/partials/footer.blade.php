<footer class="page-footer">

  <section class="footer-links py-5" style="background-image:url({{ Vite::asset('resources/img/footer-bg.jpg') }}) ">
    <div class="container">
      {{-- row 1 --}}
      <div class="row gap-3">
        {{-- col 1 --}}
        <div class="col-auto">
          <h3 class="text-uppercase text-light">dc comics</h3>
          <ul class="dc-comics-links">
            <li>
              <a href="#">characters</a>
            </li>
            <li>
              <a href="#">comics</a>
            </li>
            <li>
              <a href="#">movies</a>
            </li>
            <li>
              <a href="#">TV</a>
            </li>
            <li>
              <a href="#">Games</a>
            </li>
            <li>
              <a href="#">videos</a>
            </li>
            <li>
              <a href="#">news</a>
            </li>
          </ul>
          <h3 class="text-uppercase text-light">shop</h3>
          <ul class="shop-links">
            <li>
              <a href="#">shop DC</a>
            </li><li>
              <a href="#">shop DC Collections</a>
            </li>
          </ul>
        </div>
        {{-- end col 1 --}}
        {{-- col 2 --}}
        <div class="col-auto">
          <h3 class="text-uppercase text-light">dc</h3>
          <ul class="dc-links">
            <li>
              <a href="#">terms of use</a>
            </li>
            <li>
              <a href="#">privacy policy</a>
            </li>
            <li>
              <a href="#">ad choices</a>
            </li>
            <li>
              <a href="#">advertising</a>
            </li>
            <li>
              <a href="#">jobs</a>
            </li>
            <li>
              <a href="#">subscriptions</a>
            </li>
            <li>
              <a href="#">talent workshops</a>
            </li>
            <li>
              <a href="#">CPSC Certificates</a>
            </li>
            <li>
              <a href="#">rating</a>
            </li>
            <li>
              <a href="#">shop help</a>
            </li>
            <li>
              <a href="#">contact us</a>
            </li>
          </ul>
        </div>
        {{-- end col 2 --}}
        {{-- col 3 --}}
        <div class="col-auto">
          <h3 class="text-uppercase text-light">sites</h3>
          <ul class="sites-links">
            <li>
              <a href="#">DC</a>
            </li>
            <li>
              <a href="#">MAD Magazine</a>
            </li>
            <li>
              <a href="#">DC kids</a>
            </li>
            <li>
              <a href="#">DC Universe</a>
            </li>
            <li>
              <a href="#">DC Power Visa</a>
            </li>
          </ul>
        </div>
        {{-- end col 3 --}}
      </div>
      {{-- end row 1 --}}
      <div class="row">
        <div class="col-auto">
          <div class="terms-policy">
            All site content TM and &copy; 2020 DC Entertainment, unless otherwise <span><a href="#">noted here</a></span>. All rights reserved. <span><a href="#">Cookies Settings</a></span>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="footer-contacts py-5">
    <div class="container">
      <div class="row justify-content-between align-items-center">
        <div class="col-auto">
          <a class="sign-up text-light text-uppercase" href="#">sign up now!</a>
        </div>
        <div class="col-auto">
          <div class="socials d-flex align-items-center gap-3">
            <span class="follow text-uppercase fw-bold fs-4">follow us</span>
            <img src="{{ Vite::asset('resources/img/footer-facebook.png') }}" alt="facebook social">
            <img src="{{ Vite::asset('resources/img/footer-periscope.png') }}" alt="periscope social">
            <img src="{{ Vite::asset('resources/img/footer-pinterest.png') }}" alt="pinterest social">
            <img src="{{ Vite::asset('resources/img/footer-twitter.png') }}" alt="twitter social">
            <img src="{{ Vite::asset('resources/img/footer-youtube.png') }}" alt="youtube social">
          </div>
        </div>
      </div>
    </div>
  </section>
  
</footer>
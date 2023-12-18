<header class="page-header">

  {{-- small banner section --}}
  <section class="small-banner text-light py-1">
    <div class="container">
      <div class="row justify-content-end gap-4">
        <div class="col-auto">DC POWER&trade; VISA &#174;</div>
        <div class="col-auto">ADDITIONAL DC SITES &#9660;</div>
      </div>
    </div>
  </section>

  <nav class="nav-section py-3">
    <div class="container">
      <div class="row align-items-center justify-content-between">
        {{-- logo --}}
        <div class="col-auto">
          <img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="dc logo">
        </div>
        {{-- navbar --}}
        <div class="col-auto">
          <ul class="nav-links d-flex gap-4">
            <li class="nav_link">
              <a href="#">characters</a>
            </li>
            <li class="nav_link active">
              <a href="{{ route('comics.index') }}">comics</a>
            </li>
            <li class="nav_link">
              <a href="#">movies</a>
            </li>
            <li class="nav_link">
              <a href="#">tv</a>
            </li>
            <li class="nav_link">
              <a href="#">games</a>
            </li>
            <li class="nav_link">
              <a href="#">collectibles</a>
            </li>
            <li class="nav_link">
              <a href="#">videos</a>
            </li>
            <li class="nav_link">
              <a href="#">fans</a>
            </li>
            <li class="nav_link">
              <a href="#">news</a>
            </li>
            <li class="nav_link d-flex gap-2">
              <a href="#">shop</a>
              <span>&#9660;</span>
            </li>
          </ul>
        </div>
        {{-- search bar --}}
        <div class="col-auto">
          <div class="input-search">
            <input type="text" placeholder="Search">
          </div>
        </div>
      </div>
    </div>
  </nav>

  {{-- hero section --}}
  <section class="hero" style="background-image:url({{ Vite::asset('resources/img/jumbotron.jpg') }}) ">

  </section>

</header>

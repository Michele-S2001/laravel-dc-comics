@extends('layouts.default')

@section('page-title', 'Home')

@section('content')
  <section class="current-series text-light">
    <div class="container">
      <h3 class="text-uppercase d-inline-block">current series</h3>
      <div class="row">
        @foreach ($comics as $comic)

          <div class="col-2 mb-4">
            <img class="w-100 mb-2" src="{{ $comic['thumb'] }}">
            <span class="text-uppercase comic-title">
                <a href="{{ route('comics.show', $comic) }}">
                    {{ $comic['title'] }}
                </a>
            </span>
          </div>

        @endforeach
      </div>
    </div>
    <div class="load-more text-center text-uppercase py-4">
      <a class="load-btn" href="#">load more</a>
    </div>
  </section>

  <section class="dc-more text-light py-5">
    <div class="container">
      <div class="row justify-content-between align-items-center">
        <div class="col-auto">
          <div class="dc-more__card">
            <img src="{{ Vite::asset('resources/img/buy-comics-digital-comics.png') }}">
            <span class="text-uppercase">digital comics</span>
          </div>
        </div>
        <div class="col-auto">
          <div class="dc-more__card">
            <img src="{{ Vite::asset('resources/img/buy-comics-merchandise.png') }}">
            <span class="text-uppercase">digital comics</span>
          </div>
        </div>
        <div class="col-auto">
          <div class="dc-more__card">
            <img src="{{ Vite::asset('resources/img/buy-comics-shop-locator.png') }}">
            <span class="text-uppercase">digital comics</span>
          </div>
        </div>
        <div class="col-auto">
          <div class="dc-more__card">
            <img src="{{ Vite::asset('resources/img/buy-comics-subscriptions.png') }}">
            <span class="text-uppercase">digital comics</span>
          </div>
        </div>
        <div class="col-auto">
          <div class="dc-more__card">
            <img class="power-svg" src="{{ Vite::asset('resources/img/buy-dc-power-visa.svg') }}">
            <span class="text-uppercase">digital comics</span>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection

@extends('layouts.default')

@section('page-title', 'Details')

@section('content')

  <section class="thumb pb-3 pt-5">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-10">
          <img class="thumbnail" src="{{ $comic->thumb }}">
        </div>
      </div>
    </div>
  </section>

  <section class="comic-details py-5">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-10">
          <div class="row">
            <div class="col-8">
              <h4 class="text-uppercase mb-3"> {{ $comic->title }} </h4>
              <div class="comic-state d-flex mb-3 px-3">
                <div class="price flex-grow-1">U.S. Price: <span class="text-light"> {{ $comic->price }} </span></div>
                <div class="availability d-flex">
                  <div class="availability__state text-uppercase px-3">
                    available
                  </div>
                  <div class="availability__check ps-3 text-light">
                    Check availability &#9660;
                  </div>
                </div>
              </div>
              <div class="comic-desc">
                {{ $comic->description }}
              </div>
            </div>
            <div class="col-4">
              <span class="text-uppercase">advertisement</span>
              <img src="https://picsum.photos/300/300">
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="comic-additional-details py-4">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-10">
          <div class="row">
            <div class="col-6">
              <div class="talent">
                <h4 class="pb-4 title">Talent</h4>
                <div class="detail pt-2 art d-flex justify-content-between">
                  <p>Art by:</p>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus ipsam amet optio veritatis? </p>
                </div>
                <div class="detail pt-2 art d-flex justify-content-between">
                  <p>Written by:</p>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus ipsam amet optio veritatis? </p>
                </div>
              </div>
              </div>
            <div class="col-6">
              <div class="specs">
                <h4 class="pb-4 title">Specs</h4>
                <div class="detail pt-2 art d-flex justify-content-between">
                  <p>Series:</p>
                  <p> {{ $comic->series }} </p>
                </div>
                <div class="detail pt-2 art d-flex justify-content-between">
                  <p>U.S.Price:</p>
                  <p> {{ $comic->price }} </p>
                </div>
                <div class="detail pt-2 art d-flex justify-content-between">
                  <p>On sale date:</p>
                  <p> {{ $comic->sale_date }} </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

@endsection

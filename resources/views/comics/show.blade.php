@extends('layouts.default')

@section('page-title', 'Details')

@section('content')
    
  <section class="thumb pb-3 pt-5">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-10">
          <img class="thumbnail" src="https://picsum.photos/200/300">
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
              <h4 class="text-uppercase mb-3">Lorem ipsum dolor sit amet consectetur.</h4>
              <div class="comic-state d-flex mb-3 px-3">
                <div class="price flex-grow-1">U.S. Price: <span class="text-light">$19.90</span></div>
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
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus maxime porro quasi magnam enim. Ea ut laboriosam excepturi temporibus illum quis sunt nostrum dolorum distinctio minima praesentium sapiente totam eius incidunt perspiciatis debitis ad explicabo vitae, corporis quidem aliquid quas ipsum? Architecto, nam eos alias est id magni, dicta laudantium adipisci culpa quas modi quis veritatis inventore, dolores ullam in. Nobis delectus, quos totam mollitia numquam iste minima quam odit voluptate laborum voluptatum expedita eligendi autem praesentium consectetur officia earum?
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
                  <p>LOREM IPSUM</p>
                </div>
                <div class="detail pt-2 art d-flex justify-content-between">
                  <p>U.S.Price:</p>
                  <p>$19.90</p>
                </div>
                <div class="detail pt-2 art d-flex justify-content-between">
                  <p>On sale date:</p>
                  <p>mm/dd/yyyy</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

@endsection
@extends('frontend.layouts.main')

@section('main-container')

  <!-- portfolio section -->

  <section class="portfolio_section layout_padding">
    <div class="container">
      <div class="heading_container">
        <h2>
          Our portfolio
        </h2>
        <p>
          minim veniam, quis nostrud exercitation ullamco laboris nisi
        </p>
      </div>
      <div class="portfolio_container layout_padding2">
        <div class="box-1">
          <div class="img-box b-1">
            <img src="{{url('frontend/images/p-1.jpg')}}" alt="">
            <div class="btn-box">
              <a href="" class="btn-1">

              </a>
            </div>
          </div>
          <div class="img-box b-2">
            <img src="{{url('frontend/images/p-2.jpg')}}" alt="">
            <div class="btn-box">
              <a href="" class="btn-1">

              </a>
            </div>
          </div>
        </div>
        <div class="box-2">
          <div class="box-2-top">
            <div class="img-box b-3">
              <img src="{{url('frontend/images/p-3.jpg')}}" alt="">
              <div class="btn-box">
                <a href="" class="btn-1">

                </a>
              </div>
            </div>
          </div>
          <div class="box-2-top2">
            <div class="img-box b-4">
              <img src="{{url('frontend/images/p-4.jpg')}}" alt="">
              <div class="btn-box">
                <a href="" class="btn-1">

                </a>
              </div>
            </div>
          </div>
          <div class="box-2-btm">
            <div class="img-box b-5">
              <img src="{{url('frontend/images/p-5.jpg')}}" alt="">
              <div class="btn-box">
                <a href="" class="btn-1">

                </a>
              </div>
            </div>
            <div class="img-box b-6">
              <img src="{{url('frontend/images/p-6.jpg')}}" alt="">
              <div class="btn-box">
                <a href="" class="btn-1">

                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="see_btn">
        <a href="">
          See More
        </a>
      </div>
    </div>

  </section>

  <!-- end about section -->

  <!-- info section -->
  <section class="info_section ">
    <div class="container">
      <div class="info_container">
        <div class="info_social">
          <div class="d-flex justify-content-center">
            <h4 class="">
              Follow on
            </h4>
          </div>
          <div class="social_box">
            <a href="">
              <img src="{{url('frontend/images/fb.png')}}" alt="">
            </a>
            <a href="">
              <img src="{{url('frontend/images/twitter.png')}}" alt="">
            </a>
            <a href="">
              <img src="{{url('frontend/images/instagram.png')}}" alt="">
            </a>
            <a href="">
              <img src="{{url('frontend/images/linkedin.png')}}" alt="">
            </a>
            <a href="">
              <img src="{{url('frontend/images/dribble.png')}}" alt="">
            </a>
            <a href="">
              <img src="{{url('frontend/images/pinterest.png')}}" alt="">
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end info_section -->

 @endsection
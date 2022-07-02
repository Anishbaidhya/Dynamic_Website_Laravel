@extends('frontend.layouts.main')

@section('main-container')

  <!-- about section -->

  <section class="about_section layout_padding">
    <div class="container">
      <div class="heading_container">
        <h2>
          About Studio
        </h2>
      </div>
      <div class="box">
        <div class="img-box">
          <img src="{{url('frontend/images/about-img.jpg')}}" alt="">
          
        </div>
        <div class="detail-box">
          <p>
            It is a long established fact that a reader will be distracted by the readable content of a page when
            looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of
            letters,
          </p>
          <div>
            <a href="">
              about More
            </a>
          </div>
        </div>
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
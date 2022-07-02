@extends('frontend.layouts.main')

@section('main-container')

 <!-- slider section -->
 <section class=" slider_section position-relative">
      <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="container-fluid">
              <div class="row">
                <div class="col-md-5 offset-md-1 ">
                  <div class="detail_box">
                    <h1>
                      photography <br>
                      studio
                    </h1>
                    <p>
                      It is a long established fact that a reader will be distracted by the readable content
                    </p>
                    <div class="btn-box">
                      <a href="" class="btn-1">
                        About Us
                      </a>
                      <a href="" class="btn-2">
                        Get A Quote
                      </a>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 px-0">
                  <div class="img-box">
                    <img src="{{url('frontend/images/slider-img.jpg')}}" alt="">
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="container-fluid">
              <div class="row">
                <div class="col-md-5 offset-md-1">
                  <div class="detail_box">
                    <h1>
                      photography <br>
                      studio
                    </h1>
                    <p>
                      It is a long established fact that a reader will be distracted by the readable content
                    </p>
                    <div class="btn-box">
                      <a href="" class="btn-1">
                        About Us
                      </a>
                      <a href="" class="btn-2">
                        Get A Quote
                      </a>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 px-0">
                  <div class="img-box">
                    <img src="{{url('frontend/images/slider-img.jpg')}}" alt="">
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="container-fluid">
              <div class="row">
                <div class="col-md-5 offset-md-1">
                  <div class="detail_box">
                    <h1>
                      photography <br>
                      studio
                    </h1>
                    <p>
                      It is a long established fact that a reader will be distracted by the readable content
                    </p>
                    <div class="btn-box">
                      <a href="" class="btn-1">
                        About Us
                      </a>
                      <a href="" class="btn-2">
                        Get A Quote
                      </a>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 px-0">
                  <div class="img-box">
                    <img src="{{url('frontend/images/slider-img.jpg')}}" alt="">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="carousel_btn-container">
          <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>

    </section>
    <!-- end slider section -->
  </div>

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

  <!-- achieve section -->

  <section class="achieve_section layout_padding">
    <div class="container">
      <div class="heading_container">
        <h2>
          ACHIEVEMENTS
        </h2>
        <p>
          minim veniam, quis nostrud exercitation ullamco laboris nisi
        </p>
      </div>
      <div class="achieve_container">
        <div class="box">
          <div class="img-box">
            <img src="{{url('frontend/images/a-1.png')}}" alt="">
          </div>
          <div class="detail-box">
            <h2>
              1000+
            </h2>
            <h6>
              Photo Session
            </h6>
          </div>
        </div>
        <div class="box">
          <div class="img-box">
            <img src="{{url('frontend/images/a-2.png')}}" alt="">
          </div>
          <div class="detail-box">
            <h2>
              9000+
            </h2>
            <h6>
              Happy Customers
            </h6>
          </div>
        </div>
        <div class="box">
          <div class="img-box">
            <img src="{{url('frontend/images/a-3.png')}}" alt="">
          </div>
          <div class="detail-box">
            <h2>
              1000+
            </h2>
            <h6>
              Archive Photographs
            </h6>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end achieve section -->

  <!-- client section -->

  <section class="client_section layout_padding-bottom">
    <div class="container">
      <div class="heading_container">
        <h2>
          Testimonial
        </h2>
        <p>
          minim veniam, quis nostrud exercitation ullamco laboris nisi
        </p>
      </div>
      <div class="layout_padding2-top">
        <div id="carouselExample2Controls" class="carousel slide" data-ride="carousel">
          <div class="row">
            <div class="col-md-3">
              <div class="btn_container">
                <a class="carousel-control-prev" href="#carouselExample2Controls" role="button" data-slide="prev">
                  <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExample2Controls" role="button" data-slide="next">
                  <span class="sr-only">Next</span>
                </a>
              </div>
            </div>
            <div class="col-md-9 col-lg-8">
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <div class="detail-box">
                    <h4>
                      Aloz den
                    </h4>
                    <p>
                      Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                      labore
                      et
                      dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                      aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                      cillum
                    </p>
                  </div>
                </div>
                <div class="carousel-item ">
                  <div class="detail-box">
                    <h4>
                      Aloz den
                    </h4>
                    <p>
                      Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                      labore
                      et
                      dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                      aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                      cillum
                    </p>
                  </div>
                </div>
                <div class="carousel-item ">
                  <div class="detail-box">
                    <h4>
                      Aloz den
                    </h4>
                    <p>
                      Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                      labore
                      et
                      dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                      aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                      cillum
                    </p>
                  </div>
                </div>
              </div>
            </div>

          </div>

        </div>
      </div>
    </div>
  </section>


  <!-- end client section -->

  <!-- contact section -->

  <section class="contact_section layout_padding">
    <div class="bg-img1">
      <img src="{{url('frontend/images/bg-img-1.png')}}" alt="">
    </div>
    <div class="bg-img2">
      <img src="{{url('frontend/images/bg-img-2.png')}}" alt="">
    </div>
    <div class="container">
      <div class="heading_container">
        <h2>
          Contact Us
        </h2>
      </div>
      <div class="">
        <div class="row">
          <div class="col-md-8 mx-auto">
            <form action="">
              <div class="contact_form-container">
                <div>
                  <div>
                    <input type="text" placeholder="Name">
                  </div>
                  <div>
                    <input type="text" placeholder="Phone Number">
                  </div>
                  <div>
                    <input type="email" placeholder="Email">
                  </div>
                  <div class="">
                    <input type="text" placeholder="Message" class="message_input">
                  </div>
                  <div class=" d-flex justify-content-center ">
                    <button type="submit">
                      Send
                    </button>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- end contact section -->


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
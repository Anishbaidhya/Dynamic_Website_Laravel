@extends('frontend.layouts.main')

@section('main-container')

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
           @php $token = md5(now()) @endphp
            <form action="{{url('contact-form', $token)}}", method="post">
            
              <div class="contact_form-container">
                <div>
                  <div>
                    <input type="text" placeholder="Name" name="name">
                  </div>
                  <div>
                    <input type="text" placeholder="Phone Number" name="phone">
                  </div>
                  <div>
                    <input type="email" placeholder="Email" name="email">
                  </div>
                  <div class="">
                    <input type="text" placeholder="Message" class="message_input" name="message">
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

 @endsection
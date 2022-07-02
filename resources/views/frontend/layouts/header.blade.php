<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>Uliya</title>


  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="{{url('frontend/css/bootstrap.css')}}" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="{{url('frontend/css/style.css')}}" rel="stylesheet" />
  <!-- responsive style -->
  <link href="{{url('frontend/css/responsive.css')}}" rel="stylesheet" />
</head>

<body>

  <div class="hero_area">
    <!-- header section strats -->
    <header class="header_section">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-11 offset-lg-1">
            <nav class="navbar navbar-expand-lg custom_nav-container ">
              <a class="navbar-brand" href="{{url('/')}}">
                <img src="{{url('frontend/images/logo.png')}}" alt="">
                <span>
                  Uliya
                </span>
              </a>
              </a>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>

              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <div class="d-flex ml-auto flex-column flex-lg-row align-items-center">
                  <ul class="navbar-nav  ">
                    <li class="nav-item active">
                      <a class="nav-link" href="{{url('/')}}">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="{{url('/about')}}"> About</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="{{url('/portfolio')}}"> Portfolio </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="{{url('contact')}}">Contact Us</a>
                    </li>
                  </ul>
                  <form class="form-inline">
                    <button class="btn  my-2 my-sm-0 nav_search-btn" type="submit"></button>
                  </form>
                </div>

              </div>
            </nav>
          </div>
        </div>
      </div>
    </header>
    <!-- end header section -->
   
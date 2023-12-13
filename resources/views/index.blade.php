<!DOCTYPE html>
<html lang="en">

<!-- {{asset('landing/
    
    ')}} -->

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
  <meta name="google-adsense-account" content="ca-pub-2582016512728310">

  <title>Music Box</title>


  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="{{asset('landing/css/bootstrap.css')}}" />

  <!-- font awesome style -->
  <link href="{{asset('landing/css/font-awesome.min.css')}}" rel="stylesheet" />

  <!-- Custom styles for this template -->
  <link href="{{asset('landing/css/style.css')}}" rel="stylesheet" />
  <!-- responsive style -->
  <link href="{{asset('landing/css/responsive.css')}}" rel="stylesheet" />
  <link href="https://cdn.datatables.net/v/dt/dt-1.13.7/datatables.min.css" rel="stylesheet">

</head>

<body>

  <div class="hero_area">
    <!-- header section strats -->
    <header class="header_section">
      <div class="container-fluid">
        <nav class="navbar navbar-expand-lg custom_nav-container ">
          <a class="navbar-brand" href="#">
            <span>
              Music Box
            </span>
          </a>

          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class=""> </span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav  ">
              <li class="nav-item active">
                <a class="nav-link" href="index.html">Home </a>
              </li>
              
              <li class="nav-item">
                <a class="nav-link" href="{{route('registerAcc')}}">Register Account</a>
              </li>
              
            </ul>
            <div class="quote_btn-container">
              <a href="{{ route('login') }}" class="quote_btn">
                Login
              </a>
            </div>
          </div>
        </nav>
      </div>
    </header>
    <!-- end header section -->
    <!-- slider section -->
    <section class="slider_section ">
      <div id="customCarousel1" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="container ">
              <div class="row">
                <div class="col-md-6">
                  <div class="img-box">
                    <img src="{{asset('landing/images/slider-img1.png')}}" alt="">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="detail-box">
                    <h1>
                        Tune In, Turn Up: Where Melodies Come to Life
                    </h1>
                    <p>
                    Discover a symphony of possibilities! Join us on this melodic adventure by registering for an account. Explore a world where music is more than sound; it's an experience to be shared
                    </p>
                    <div class="btn-box">
                      <a href="{{route('registerAcc')}}" class="btn1">
                        Register
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item ">
            <div class="container ">
              <div class="row">
                <div class="col-md-6">
                  <div class="img-box">
                    <img src="{{asset('landing/images/slider-img2.png')}}" alt="">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="detail-box">
                    <h1>
                        Notes of Joy: Your Gateway to Musical Bliss
                    </h1>
                    <p>
                    Step into our sonic universe! Register now to sync up with a community that breathes music. Uncover unique features and share the magic of melodies with fellow enthusiasts.
                    </p>
                    <div class="btn-box">
                      <a href="{{ route('login') }}" class="btn1">
                        Login
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item ">
            <div class="container ">
              <div class="row">
                <div class="col-md-6">
                  <div class="img-box">
                    <img src="{{asset('landing/images/slider-img1.jpg')}}" alt="">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="detail-box">
                    <h1>
                        Soundscapes of Passion: Unleash the Music within You
                    </h1>
                    <p>
                    Welcome, music enthusiast! Your gateway to a harmonious community awaits. Register to unveil exclusive features, connect with like-minded souls, and let the music-sharing begin!
                    </p>
                    <div class="btn-box">
                      <a href="{{ route('login') }}" class="btn1">
                        Explore Us
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <ol class="carousel-indicators">
          <li data-target="#customCarousel1" data-slide-to="0" class="active"></li>
          <li data-target="#customCarousel1" data-slide-to="1"></li>
          <li data-target="#customCarousel1" data-slide-to="2"></li>
        </ol>
      </div>

    </section>
    <!-- end slider section -->
  </div>

  <!-- service section -->
  <!-- <section class="service_section layout_padding">
    <div class="container">
      <div class="heading_container">
        <h2>
          Available Features
        </h2>
        <p>
          We have the following available features
        </p>
      </div>
      <div class="row">
        <div class="col-md-6 col-lg-3">
          <div class="box">
            <div class="img-box">
              <img src="{{asset('landing/images/s1.png')}}" alt="">
            </div>
            <div class="detail-box">
              <h5>
                Link Building
              </h5>
              <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit,
              </p>
              <a href="">
                <span>
                  Read More
                </span>
                <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
              </a>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-3">
          <div class="box">
            <div class="img-box">
              <img src="{{asset('landing/images/s2.png')}}" alt="">
            </div>
            <div class="detail-box">
              <h5>
                On page SEO
              </h5>
              <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit,
              </p>
              <a href="">
                <span>
                  Read More
                </span>
                <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
              </a>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-3">
          <div class="box">
            <div class="img-box">
              <img src="{{asset('landing/images/s3.png')}}" alt="">
            </div>
            <div class="detail-box">
              <h5>
                Online Marketing
              </h5>
              <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit,
              </p>
              <a href="">
                <span>
                  Read More
                </span>
                <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
              </a>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-3">
          <div class="box">
            <div class="img-box">
              <img src="{{asset('landing/images/s4.png')}}" alt="">
            </div>
            <div class="detail-box">
              <h5>
                Email Marketing
              </h5>
              <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit,
              </p>
              <a href="">
                <span>
                  Read More
                </span>
                <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
              </a>
            </div>
          </div>
        </div>
      </div>
      <div class="btn-box">
        <a href="">
          View More
        </a>
      </div>
    </div>
  </section> -->
  <!-- end service section -->


  <section class="service_section layout_padding">
    <div class="container">
      <div class="heading_container">
        <h2>
          Sample Uploads Available
        </h2>
        <p>
          We have the following available features
        </p>
      </div>
    </div>
    <div class="container">

              
          <div class="container table-responsive py-5"> 
          <table id="example" class="table table-striped" style="width:100%">
          <thead>
											<tr>
												<th>#</th>
												<th>Title</th>
												<th>Composer</th>
												<th>Arranger</th>
												<th>Type</th>
												
												<th>Upload date</th>
												<th>Download</th>
											</tr>
										</thead>
										<tbody>
										@foreach($data as $record)
											<tr>
												<td>{{ $loop->iteration }}</td>
												<td>{{ $record->title }}</td>
												<td>{{ $record->composer }}</td>
												<td>{{ $record->arranger }}</td>
												<td>{{ $record->type }}</td>
												
												<td>{{ \Carbon\Carbon::parse($record->upload_date)->format('d-m-Y') }}</td>
												<td>
													@if ($record->path)
													<a href="{{ route('ViewMusic', ['id' => $record->id]) }}" class="btn btn-success"> <i class="fa fa-download" aria-hidden="true"></i></a>
													@endif
				
												</td>
											</tr>
											@endforeach	
										</tbody>
        
        </table>
          </div>

    
    </div>
  </section>

  <section class="service_section layout_padding">
    <div class="container">
      <div class="heading_container">
        <h2>
          Sample Video Uploads Available
        </h2>
        <p>
          Here is a sample of the shared music attempts we have received.
        </p>
      </div>
    </div>
    <div class="container">

      <iframe width="1200" height="500" src="https://www.youtube.com/embed/887gmteM09E?si=wTEntfC4azunuyS7" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
    
    </div>
  </section>



  <!-- about section -->

  <section class="about_section layout_padding">
    <div class="container  ">
      <div class="row">
        <div class="col-md-6">
          <div class="detail-box">
            <div class="heading_container">
              <h2>
                About Us
              </h2>
            </div>
            <p>
                Meet the faces behind the beats! We're a group of music enthusiasts on a mission to share our passion with you. Join the groove and let's make musical memories together.
            </p>
            <a href="{{ route('login') }}">
              Explore
            </a>
          </div>
        </div>
        <div class="col-md-6 ">
          <div class="img-box">
            <img src="{{asset('landing/images/about-img.png')}}" alt="">
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- end about section -->

  <!-- case section -->

  <section class="case_section layout_padding">
    <div class="container">
      <div class="heading_container">
        <h2>
          Our Case Studies
        </h2>
      </div>
      <div class="row">
        <div class="col-md-6">
          <div class="box">
            <div class="img-box">
              <img src="{{asset('landing/images/case-1.jpg')}}" alt="">
            </div>
            <div class="detail-box">
              <h5>
                Elevate Your Soul: Dive into the Rhythms of Music
              </h5>
              <p>
                Unleashing creativity through sound! Get to know the wizards behind the scenes at Music Box. We're not just about music; we're about crafting experiences that resonate with you
              </p>
              <a href="">
                <span>
                  Read More
                </span>
                <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
              </a>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="box">
            <div class="img-box">
              <img src="{{asset('landing/images/case-2.jpg')}}" alt="">
            </div>
            <div class="detail-box">
              <h5>
                Harmonize Your World: A Musical Journey Awaits
              </h5>
              <p>
                Dive into a world where music isn't just heard; it's felt. Join us by registering, and let's create a symphony of memories together, one note at a time.
              </p>
              <a href="">
                <span>
                  Read More
                </span>
                <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end case section -->

  <!-- client section -->
  <section class="client_section ">
    <div class="container">
      <div class="heading_container heading_center">
        <h2>
          Testimonial
        </h2>
      </div>
    </div>
    <div id="customCarousel2" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <div class="container">
            <div class="row">
              <div class="col-md-10 mx-auto">
                <div class="box">
                  <div class="img-box">
                    <img src="{{asset('landing/images/client.jpg')}}" alt="">
                  </div>
                  <div class="detail-box">
                    <div class="client_info">
                      <div class="client_name">
                        <h5>
                          Morojink
                        </h5>
                        <h6>
                          Customer
                        </h6>
                      </div>
                      <i class="fa fa-quote-left" aria-hidden="true"></i>
                    </div>
                    <p>
                        I stumbled upon Music Box at a time when I was craving a fresh, authentic music experience. From the moment I registered, I felt the warmth of a community that genuinely celebrates the beauty of sound. The features are intuitive, and the team behind the scenes is passionate about curating a space where music lovers can connect, share, and discover. Music Box has become my go-to platform for musical inspiration, and I'm grateful for the unique experiences it has brought into my life. Kudos to the team for creating something truly special!
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <div class="container">
            <div class="row">
              <div class="col-md-10 mx-auto">
                <div class="box">
                  <div class="img-box">
                    <img src="{{asset('landing/images/client.jpg')}}" alt="">
                  </div>
                  <div class="detail-box">
                    <div class="client_info">
                      <div class="client_name">
                        <h5>
                          Morojink
                        </h5>
                        <h6>
                          Customer
                        </h6>
                      </div>
                      <i class="fa fa-quote-left" aria-hidden="true"></i>
                    </div>
                    <p>
                    Discovering Music Box has been a game-changer for me! The incredible selection of music, the vibrant community, and the seamless user experience make it my go-to platform for all things musical. The team behind Music box has truly created a space where the love for music thrives. Highly recommended!
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <div class="container">
            <div class="row">
              <div class="col-md-10 mx-auto">
                <div class="box">
                  <div class="img-box">
                    <img src="{{asset('landing/images/client.jpg')}}" alt="">
                  </div>
                  <div class="detail-box">
                    <div class="client_info">
                      <div class="client_name">
                        <h5>
                        John Doe
                        </h5>
                        <h6>
                            Music Enthusiast
                        </h6>
                      </div>
                      <i class="fa fa-quote-left" aria-hidden="true"></i>
                    </div>
                    <p>
                    Joining Music Box has been a game-changer for my music journey. The platform's user-friendly interface and diverse music community have given me the opportunity to connect with fellow enthusiasts and discover new sounds. The personalized playlists and exclusive features make every visit an exciting experience. Thanks to Music Box, music has become more than a hobby; it's a community I'm proud to be a part of.
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <ol class="carousel-indicators">
        <li data-target="#customCarousel2" data-slide-to="0" class="active"></li>
        <li data-target="#customCarousel2" data-slide-to="1"></li>
        <li data-target="#customCarousel2" data-slide-to="2"></li>
      </ol>
    </div>
  </section>
  <!-- end client section -->



  <!-- contact section -->

  <section class="contact_section layout_padding">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-5 col-lg-4 offset-md-1">
          <div class="form_container">
            <div class="heading_container">
              <h2>
                Request A Call back
              </h2>
            </div>
            <form action="">
              <div>
                <input type="text" placeholder="Full Name " />
              </div>
              <div>
                <input type="email" placeholder="Email" />
              </div>
              <div>
                <input type="text" placeholder="Phone number" />
              </div>
              <div>
                <input type="text" class="message-box" placeholder="Message" />
              </div>
              <div class="d-flex ">
                <button>
                  SEND
                </button>
              </div>
            </form>
          </div>
        </div>
        <div class="col-md-6 col-lg-7 px-0">
          <div class="map_container">
            <div class="map">
              <div id="googleMap"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end contact section -->

  <div class="footer_container">
    <!-- info section -->

    <section class="info_section ">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-lg-3 ">
            <div class="info_detail">
              <h4>
                Music Box
              </h4>
              <p>
                Necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful
              </p>
            </div>
          </div>
          <div class="col-md-6 col-lg-2 mx-auto">
            <div class="info_link_box">
              <h4>
                Links
              </h4>
              <div class="info_links">
                <a class="" href="">
                  Home
                </a>
                <a class="" href="{{route('loginAcc')}}">
                  Login
                </a>
                
                <a class="" href="{{route('registerAcc')}}">
                  Register
                </a>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3 ">
            <h4>
              Subscribe
            </h4>
            <form action="#">
              <input type="text" placeholder="Enter email" />
              <button type="submit">
                Subscribe
              </button>
            </form>
          </div>
          <div class="col-md-6 col-lg-3 mb-0 ml-auto">
            <div class="info_contact">
              <h4>
                Address
              </h4>
              <div class="contact_link_box">
                <a href="">
                  <i class="fa fa-map-marker" aria-hidden="true"></i>
                  <span>
                    Location
                  </span>
                </a>
                <a href="">
                  <i class="fa fa-phone" aria-hidden="true"></i>
                  <span>
                    Call +01 1234567890
                  </span>
                </a>
                <a href="">
                  <i class="fa fa-envelope" aria-hidden="true"></i>
                  <span>
                    demo@gmail.com
                  </span>
                </a>
              </div>
            </div>
            <div class="info_social">
              <a href="">
                <i class="fa fa-facebook" aria-hidden="true"></i>
              </a>
              <a href="">
                <i class="fa fa-twitter" aria-hidden="true"></i>
              </a>
              <a href="">
                <i class="fa fa-linkedin" aria-hidden="true"></i>
              </a>
              <a href="">
                <i class="fa fa-instagram" aria-hidden="true"></i>
              </a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- end info section -->

    <!-- footer section -->
    <footer class="footer_section">
      <div class="container">
        <p>
          &copy; <span id="displayYear"></span> All Rights Reserved By
          <a href="">Music Box</a>
        </p>
      </div>
    </footer>
    <!-- footer section -->
  </div>

  <!-- jQery -->
  <script src="{{asset('landing/js/jquery-3.4.1.min.js')}}"></script>
  
  <!-- popper js -->
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
  </script>
  <!-- bootstrap js -->
  <script src="{{asset('landing/js/bootstrap.js')}}"></script>
  <script src="{{asset('landing/js/custom.js')}}"></script>

  <script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.13.7/datatables.min.js"></script> 

  <script>
        $(document).ready(function() {
    $('#example').DataTable();
} );
    </script>
  <!-- Google Map -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCh39n5U-4IoWpsVGUHWdqB6puEkhRLdmI&callback=myMap"></script>
  <!-- End Google Map -->

</body>

</html>
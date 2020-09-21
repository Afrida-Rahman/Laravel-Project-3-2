<!doctype html>
<html lang="en">
  <head>
    <title>Welcome Page</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300, 400, 700" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('fontend/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('fontend/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('fontend/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('fontend/css/bootstrap-datepicker.css') }}">
    <link rel="stylesheet" href="{{ asset('fontend/css/jquery.timepicker.css') }}">
    <link rel="stylesheet" href="{{ asset('fontend/fonts/fontawesome/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('fontend/fonts/flaticon/font/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('fontend/css/style.css') }}">
<!--     <link rel="stylesheet" href="{{ asset('fontend/css/owl.css') }}">
 -->    <link rel="stylesheet" href="{{ asset('fontend/css/bootstrap-datetimepicker.min.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

   




  </head>
  <body>
    
    <header role="banner">
      <div class="top-bar">
        <div class="container">
          <div class="row">
            <div class="col-md-6 col-sm-6 col-5">
              <ul class="social list-unstyled">
                <li><a href="#"><span class="fa fa-facebook"></span></a></li>
                <li><a href="#"><span class="fa fa-twitter"></span></a></li>
                <li><a href="#"><span class="fa fa-instagram"></span></a></li>
              </ul>
            </div>
            <div class="col-md-6 col-sm-6 col-7 text-right">
              <p class="mb-0">
                <a href="#" class="cta-btn" data-toggle="modal" data-target="#modalAppointment">Make an Appointment</a>
                <a href="#" class="cta-btn" data-toggle="modal" data-target="#modalContact">Contact</a></p>

              </div>
            
          </div>
        </div>
      </div>
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
          <a class="navbar-brand" style="font-size:30px"><b>&nbsp;Hospital Management System</b> </a><br>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample05" aria-controls="navbarsExample05" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarsExample05">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                <a class="nav-link active" href="#">Home</a>
              </li>
              
              <li class="nav-item">
                <a class="nav-link" href="#about">About</a>
              </li>
             
            </ul>
          </div>
        </div>
      </nav>
    </header>
    <!-- END header -->
    
      <!-- slider show  -->

    <section class="owl-carousel"> 
 

        <table style="border:1px solid black;">
          @foreach ($sliders as $slider)
         
              <img style="width: 500px; height:400px"  class="" src="{{ URL::asset('uploads/slider/'.$slider->image) }}" alt=""/>
             &nbsp;
          
          @endforeach
        </table>
        

        </section><br><br><br><br><br><br>

    <!-- END slider -->

    
    <section class="container home-feature mb-5">
      <div class="row">
        <div class="col-md-4 p-0 one-col element-animate">
          <div class="col-inner p-xl-5 p-lg-5 p-md-4 p-sm-4 p-4">
            <span class="icon flaticon-hospital-bed"></span>
            <h2>Patient Services</h2>
            <p>Hospital manager positions include titles such as hospital administrators, patient care managers and practice managers. They typically manage an entire facility, a medical practice group of physicians, or a specific clinical area or department such as finance, materials management or patient care services</p>
          </div>
          <a href="#" class="btn-more">Read More</a>
        </div>
        <div class="col-md-4 p-0 two-col element-animate">
          <div class="col-inner p-xl-5 p-lg-5 p-md-4 p-sm-4 p-4">
            <span class="icon flaticon-first-aid-kit"></span>
            <h2>Medical Services</h2>
            <p>Hospital manager positions include titles such as hospital administrators, patient care managers and practice managers. They typically manage an entire facility, a medical practice group of physicians, or a specific clinical area or department such as finance, materials management or patient care services</p>
          </div>
          <a href="#" class="btn-more">Read More</a>
        </div>
        <div class="col-md-4 p-0 three-col element-animate">
          <div class="col-inner p-xl-5 p-lg-5 p-md-4 p-sm-4 p-4">
            <span class="icon flaticon-hospital"></span>
            <h2>Amenities</h2>
            <p>Hospital manager positions include titles such as hospital administrators, patient care managers and practice managers. They typically manage an entire facility, a medical practice group of physicians, or a specific clinical area or department such as finance, materials management or patient care services</p>
          </div>
          <a href="#" class="btn-more">Read More</a>
        </div>
      </div>
    </section><br><br><br><br>
    <!-- END section -->  
      <!--   About US -->
    <section id="about"class="container home-feature mb-5">
    <div class="element-animate">

      <div class="slider-item">
        <img src="{{ asset('fontend/img/slider-2.jpg') }}" height="500px">

        <div class="container">
          <div class="row slider-text align-items-center">
           <!--  <div class="col-md-7 col-sm-12 element-animate"> -->
            
              <h1>About Us</h1>
              <p>Hospital management and business processes in hospitals have changed considerably over the previous years, as did the use of Information Technology (IT) in their daily works. It was found in our analysis that the use of IS in the hospitals did not develop according to the needs and developments in the hospital organizations over the past decade.</p>
 <p>Health care in Bangladesh, as in many other countries, is confronted with a growing demand for medical treatments and services, due to factors such as, a ‘growing’ population, and higher individual standards for quality of life.

This work is focused on the development of a computer aided Hospital Management System and specifically on hospital information systems (IS). An interesting question is how organisational, managerial and IT developments take place in hospitals, and how these developments influence each other, in terms of impact, alignment, and reinforcement.</p>
 <p>Modern hospitals nowadays supply professional services, in stead of products. Hospitals had a high cost technological infrastructure in order to sell medical services. This organisational type is now under pressure, due to the changes in society, politics and population. Hospitals can respond to these pressures by transforming into ‘functional specialization’. In this way the organisation tries to reduce costs and to improve the quality of specialized medical services.</p>
            </div>
          </div>
        </div>
</div>
    

    </section>
 <!--   end About US -->
    <a href="#" class="cta-link element-animate" data-animate-effect="fadeIn" data-toggle="modal" data-target="#modalAppointment">
      <span class="sub-heading">Ready to Visit?</span>
      <span class="heading">Make an Appointment</span>
    </a>
    <!-- END cta-link -->

    <footer class="site-footer" role="contentinfo">
      <div class="container">
        <div class="row mb-5 element-animate">
          
          <div class="col-md-3 mb-5">
            <h3>Location &amp; Contact</h3>
            <p class="mb-5">Rajshahi</p>

            <h4 class="text-uppercase mb-3 h6 text-white">Email</h5>
            <p class="mb-5"><a href="mailto:afrida.r.samma@gmail.com">afrida.r.samma@gmail.com</a></p>
            
            <h4 class="text-uppercase mb-3 h6 text-white">Phone</h5>
            <p>+8801521300135</p>

          </div>
        </div>

        <div class="row pt-md-3 element-animate">
          <div class="col-md-12">
            <hr class="border-t">
          </div>
         
          <div class="col-md-6 col-sm-12 text-md-right text-sm-left">
            <a href="#" class="p-2"><span class="fa fa-facebook"></span></a>
            <a href="#" class="p-2"><span class="fa fa-twitter"></span></a>
            <a href="#" class="p-2"><span class="fa fa-instagram"></span></a>
          </div>
        </div>
      </div>
    </footer>
    <!-- END footer -->

<!--     <img src="{{ asset('fontend/img/bg_1.jpg') }}" class="img-responsive section-icon hidden-sm hidden-xs">
 -->    <!-- Modal -->
    <div class="modal fade" id="modalAppointment" tabindex="-1" role="dialog" aria-labelledby="modalAppointmentLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="modalAppointmentLabel"><b>Appointment</b></h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
          <form class="reservation-form" method="post" action="{{ route('reservation.reserve') }}">
            @csrf
              <div class="form-group">
                <label for="name" class="text-black">Full Name</label>
                <input type="text" class="form-control" id="name" name="name">
              </div>
              <div class="form-group">
                <label for="phone" class="text-black">phone</label>
                <input type="text" class="form-control" id="phone" name="phone">
              </div>
              <div class="form-group">
                <label for="email" class="text-black">Email</label>
                <input type="text" class="form-control" id="email" name="email">
              </div>
              <div class="form-group">
                    <label for="doctor_name" class="text-black">Doctor name</label>
                    <input type="text" class="form-control" id="doctor_name" name="doctor_name">
              </div>   
              <div class="form-group">
                <label for="datetimepicker1" class="text-black">Time</label>
                <input type="text" class="form-control" id="datetimepicker1" name="date_and_time">
              </div><br><br>
              
                

            
              <div class="form-group">
                <center><input type="submit" value="Send Message" name="submit" class="btn btn-primary"></center>
              </div><br><br><br><br>
            </form>
          </div>
          
        </div>
      </div>
    </div>

    <!-- model for contact -->

    <div class="modal fade" id="modalContact" tabindex="-1" role="dialog" aria-labelledby="modalAppointmentLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="modalAppointmentLabel"><center><b>Contact Message</b></center></h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
          <form class="reservation-form" method="post" action="{{ route('contact.send') }}">
                        @csrf
              <div class="form-group">
                <label for="name" class="text-black">Full Name</label>
                <input type="text" class="form-control" id="name" name="name">
              </div>
              <div class="form-group">
                <label for="phone" class="text-black">phone</label>
                <input type="text" class="form-control" id="phone" name="phone">
              </div>
              <div class="form-group">
                <label for="email" class="text-black">Email</label>
                <input type="text" class="form-control" id="email" name="email">
              </div>
              <div class="form-group">
                    <label for="subject" class="text-black">Subject</label>
                    <input type="text" class="form-control" id="subject" name="subject">
              </div>   
              <div class="form-group">
                <label for="message" class="text-black">Message</label>
                <input type="text" class="form-control" id="message" name="message">
              </div><br><br>
              
                

            
              <div class="form-group">
                <center><input type="submit" value="Send Message" name="submit" class="btn btn-primary"></center>
              </div><br><br>
            </form>
          </div>
          
        </div>
      </div>
    </div>

    <script src="{{ asset('fontend/js/jquery-3.2.1.min.js') }}"></script>
    <script src="{{ asset('fontend/js/popper.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('fontend/js/jquery.mixitup.min.js') }}" ></script>
    <script src="{{ asset('fontend/js/wow.min.js') }}"></script>
    <script src="{{ asset('fontend/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('fontend/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('fontend/js/bootstrap-datepicker.js') }}"></script>
    <script src="{{ asset('fontend/js/jquery.timepicker.min.js') }}"></script>
    <script src="{{ asset('fontend/js/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('fontend/js/main.js') }}"></script>
    <script src="{{ asset('fontend/js/owl.js') }}"></script>
    <script src="{{ asset('fontend/js/bootstrap-datetimepicker.min.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script src="{{ asset('fontend/js/jquery-1.11.2.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('fontend/js/jquery.flexslider.min.js') }}"></script>
    <script type="text/javascript">
        $(window).load(function() {
            $('.flexslider').flexslider({
                animation: "slide",
                controlsContainer: ".flexslider-container"
            });
        });
    </script>
    @if ($errors->any())
        @foreach ($errors->all() as $error)
          <script>
              toastr.error('{{ $error }}');
          </script>
        @endforeach
    @endif
    <script>
    $(function () {
        $('#datetimepicker1').datetimepicker({
            format: "dd MM yyyy - HH:11 P",
            showMeridian: true,
            autoclose: true,
            todayBtn: true
        });
    })
</script>
{!! Toastr::message() !!}

  </body>
</html>
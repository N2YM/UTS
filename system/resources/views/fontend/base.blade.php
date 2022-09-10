<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>AA Blogspot</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700|Playfair+Display:400,700,900" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" rel="stylesheet">
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.1.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.css">
    <link rel="stylesheet" href="{{ url('public/assets') }}/css/animate.css">
    <link rel="stylesheet" href="{{ url('public/assets') }}/css/main.css">

</head>

<body>
    <!--Navbar -->
    @include('fontend.section.navbar2')

    <!--/.Navbar -->
    <!--Carousel Wrapper-->
    <div id="carousel-thumb" class="carousel slide carousel-fade carousel-thumbnails" data-ride="carousel">
        <!--Slides-->
        <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
                <img class="d-block w-100" src="{{ url('public/assets') }}/images/banner-image-4.jpg" alt="First slide">
                 <div class="gradient"></div>
                  <div class="carousel-caption">
                   <h1>Woman walking in the green fields.</h1>
                   <p class="lead">Woman walking in the green fields...</p>
                  </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="{{ url('public/assets') }}/images/banner-image-2.jpg" alt="Third slide">
                 <div class="gradient"></div>
                  <div class="carousel-caption">
                   <h1>Beautiful sunsetting in the mountains.</h1>
                   <p class="lead">Beautiful sunsetting in the mountains...</p>
                   <a class="btn btn-primary" href="about.html"><span>Learn more</span></a>
                  </div>
            </div>
           
        </div>
        <!--/.Slides-->
        <!--/.Controls-->
        
    </div>
    <!--/.Carousel Wrapper-->

    <!-- Page Content -->


    <section class="blog">
        <div class="container">
            <div class="row">
                <div class=" col-md-12 left-side">
                    <h2 style="text-align: center">ARTIKEL </h2>
                    <div class="row">
                        <div class="col-md-6">
                            
                        </div>
                        @yield('client_content')
                    </div>
                </div>
                
            </div>
        </div>
    </section>

    <!-- Footer -->
    @include('fontend.section.footer2')

    <!-- Return to Top -->
    <a href="javascript:" id="return-to-top"><i class="fa fa-long-arrow-up" aria-hidden="true"></i></a>

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.js"></script>
    <!-- Custom JavaScript -->
    <script src="{{ url('public/assets') }}/js/animate.js"></script>
    <script src="{{ url('public/assets') }}/js/custom.js"></script>
    <script>
        $(document).on('click', '[data-toggle="lightbox"]', function(event) {
            event.preventDefault();
            $(this).ekkoLightbox();
        });
    </script>
</body>

</html>

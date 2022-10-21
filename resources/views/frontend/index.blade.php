<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Shirley</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="Free Website Template" name="keywords">
        <meta content="Free Website Template" name="description">

        <!-- Favicon -->
       
        <link href="{{asset('assets/frontend/img/favicon.png')}}" rel="icon">

        <!-- Google Font -->
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap" rel="stylesheet">

        <!-- CSS Libraries -->
        {{-- {{ asset('assets/frontend/css/style.css') }} --}}
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="{{ asset('assets/frontend/lib/animate/animate.min.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/frontend/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/frontend/lib/lightbox/css/lightbox.min.css') }}" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="{{ asset('assets/frontend/css/style.css') }}" rel="stylesheet">
    </head>

    <body data-spy="scroll" data-target=".navbar" data-offset="51">
        {{-- navbar --}}
        @include('frontend.includes.navbar')
        {{-- navbar ends here --}}

        <!-- Hero Start -->
        @include('frontend.sections.headercontent')
        <!-- Hero End -->


        <!-- About Start -->
        <div class="about wow fadeInUp mt-2" data-wow-delay="0.1s" id="about">


                    <div class="container-fluid">

                        <!-- abount content -->
                        @include('frontend.sections.about')
                        <!-- abount content ends here -->

                        <div class="mt-5"></div>

                    {{-- expertise --}}
                    @include('frontend.sections.expertise')
                        {{-- expertise ends here --}}

                    </div>


        </div>
        <!-- About End -->
        
        
        <!-- Service Start -->
        @include('frontend.sections.service')
        <!-- Service End -->
        
        
         <!-- Experience Start -->
        @include('frontend.sections.experience')
        <!-- Job Experience End -->



        <!-- donation Start -->
        @include('frontend.sections.donation')
        <!-- donation End -->
        
        



        <!-- Portfolio Start -->
        @include('frontend.sections.portfolio')
        <!-- Portfolio End -->
        
               
        <!-- Testimonial Start -->
        @include('frontend.sections.testimonial')
        <!-- Testimonial End -->


        <!-- Team Start -->
        @include('frontend.sections.team')
        <!-- Team End -->
        
        
        <!-- Contact Start -->
        @include('frontend.sections.contact')
        <!-- Contact End -->


        <!-- concerns Start -->
        @include('frontend.sections.concerns')
        <!-- concerns End -->


        <!-- Footer Start -->
        @include('frontend.includes.footer')
        <!-- Footer End -->
        
        
        <!-- Back to top button -->
        <a href="#" class="btn back-to-top"><i class="fa fa-chevron-up"></i></a>
        
        
        <!-- Pre Loader -->
        <div id="loader" class="show">
            <div class="loader"></div>
        </div>

        {{-- {{ asset('assets/frontend/css/style.css') }} --}}
        <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
        <script src="{{ asset('assets/frontend/lib/easing/easing.min.js') }}"></script>
        <script src="{{ asset('assets/frontend/lib/wow/wow.min.js') }}"></script>
        <script src="{{ asset('assets/frontend/lib/waypoints/waypoints.min.js') }}"></script>
        <script src="{{ asset('assets/frontend/lib/typed/typed.min.js') }}"></script>
        <script src="{{ asset('assets/frontend/lib/owlcarousel/owl.carousel.min.js') }}"></script>
        <script src="{{ asset('assets/frontend/lib/isotope/isotope.pkgd.min.js') }}"></script>
        <script src="{{ asset('assets/frontend/lib/lightbox/js/lightbox.min.js') }}"></script>
        
        <!-- Contact Javascript File -->
        <script src="{{ asset('assets/frontend/mail/jqBootstrapValidation.min.js') }}"></script>
        <script src="{{ asset('assets/frontend/mail/contact.js') }}"></script>

        <!-- Template Javascript -->
        <script src="{{ asset('assets/frontend/js/main.js') }}"></script>
    </body>
</html>

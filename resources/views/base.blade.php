<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Dr. OP Singh Classes</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="{{ url('public/img/favicon.ico') }}" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ url('public/lib/animate/animate.min.css') }}" rel="stylesheet">
	<link href="{{ url('public/lib/lightbox/css/lightbox.min.css') }}" rel="stylesheet">
    <link href="{{ url('public/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ url('public/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ url('public/css/style.css') }}" rel="stylesheet">
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->


    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0">
        <a href="index" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
           <img src="{{ url('public/img/logo.svg') }}" alt="" height="130px">
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="index" class="nav-item nav-link active">Home</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">About Us</a>
                    <div class="dropdown-menu fade-down m-0">
                        <a href="aboutopsingh" class="dropdown-item">About Dr. OP Singh</a>
                        <a href="about" class="dropdown-item">About Dr. OP Singh Classes</a>
                        <a href="mission" class="dropdown-item">Mission &amp; Vision</a>
                        <a href="govtassociation" class="dropdown-item">Government Associations</a>
                        <a href="testseries" class="dropdown-item">Dr. OP Singh Test Series</a>
                        <a href="videoseries" class="dropdown-item">Dr. OP Singh Video Series</a> 
                    </div>
                </div>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Courses</a>
                    <div class="dropdown-menu fade-down m-0">
                        <a href="courses" class="dropdown-item">NEET Based Courses</a>
                        <a href="upsc" class="dropdown-item">SSC/NDA/Railways/Banking Exams preparation</a>
                        <a href="techmed" class="dropdown-item">TechMed learning solutions <br> ( Medical Representative Training Course)</a>
                        <a href="msclife" class="dropdown-item">M.Sc Life Science Entrance Exam</a>
                        <a href="computertraining" class="dropdown-item">Computer Training Courses</a>
                        <a href="englishcourse" class="dropdown-item">IELTS, PTE and English Speaking</a>
                        <a href="charitable" class="dropdown-item">Charitable Activities</a>
                    </div>
                </div>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Study Material</a>
                    <div class="dropdown-menu fade-down m-0">
                        <a href="studymaterial" class="dropdown-item">Sample Study Material</a>
                        <a href="studyvideo" class="dropdown-item">Sample Video Lectures</a>
                    </div>
                </div>
				<!--<a href="courses" class="nav-item nav-link">Our Team</a>-->
				

                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Gallery</a>
                    <div class="dropdown-menu fade-down m-0">
                        <a href="photogallery" class="dropdown-item">Photo Gallery</a>
                        <a href="videogallery" class="dropdown-item">Video Gallery</a>
                        <a href="media" class="dropdown-item">Media Coverage</a>
                        <a href="appgallery" class="dropdown-item">Appreciation Gallery</a>
                    </div>
                </div>
				<a href="testimonial" class="nav-item nav-link">Testimonials</a>
                <a href="contact" class="nav-item nav-link">Contact</a>
            </div>
            <a href="queryform" class="btn btn-primary py-4 px-lg-5 d-none d-lg-block">Join Us<i class="fa fa-arrow-right ms-3"></i></a>
        </div>
    </nav>
    <!-- Navbar End -->


    @yield('content')
        

   <!-- Footer Start -->
   <div class="container-fluid bg-dark text-light footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-3">Quick Link</h4>
                    <a class="btn btn-link" href="about">About Us</a>
                    <a class="btn btn-link" href="contact">Contact Us</a>
                    <a class="btn btn-link" href="testimonial">Testimonials</a>
                    <a class="btn btn-link" href="photogallery">Gallery</a>
                     </div>
				<div class="col-lg-5 col-md-6">
                    <h4 class="text-white mb-3">Courses</h4>
                    <a class="btn btn-link" href="courses">NEET</a>
                    <a class="btn btn-link" href="techmed">Medical Sales Representative Training </a>
                    <a class="btn btn-link" href="msclife">M.Sc Life Sciences Entrance Exams Preparation</a>
                    <a class="btn btn-link" href="computertraining">Computer Training Courses</a>
                    <a class="btn btn-link" href="englishcourse">IELTS, PTE and English Speaking</a>
                   <a class="btn btn-link" href="charitable">Charitable Activities</a>
                </div>
                <div class="col-lg-4 col-md-6">
                    <h4 class="text-white mb-3">Contact</h4>
                    <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>SCF 28, Top Floor, Sector 15
                </br> Panchkula, Haryana, Pincode:- 134113</p>
                    <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+91-98152-19741</p>
                    <p class="mb-2"><i class="fa fa-envelope me-3"></i>opsinghclasses@gmail.com</p>
                    <div class="d-flex pt-2">
                        <a class="btn btn-outline-light btn-social" href="https://twitter.com/OPSingh18363648?t=_GzL3UDAr42MljVLUyHaXQ&s=09" target="_blank"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-outline-light btn-social" href="https://www.facebook.com/profile.php?id=100063556975250&mibextid=ZbWKwL" target="_blank"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-outline-light btn-social" href="https://youtube.com/@opsingh959" target="_blank"><i class="fab fa-youtube" target="_blank"></i></a>
						<a class="btn btn-outline-light btn-social" href=" https://www.instagram.com/p/CNu8__7AqW_/?igshid=MTc4MmM1YmI2Ng==" target="_blank"><i class="fab fa-instagram" target="_blank"></i></a>
                        <a class="btn btn-outline-light btn-social" href="https://web.whatsapp.com/" target="_blank"><i class="fab fa-whatsapp"></i></a>
						<a class="btn btn-outline-light btn-social" href=" https://play.google.com/store/apps/details?id=co.iron.topmz"><i class="fab fa-android"></i></a>
                    </div>
                </div>
               
               
            </div>
        </div>
        <div class="container">
            <div class="copyright">
                <div class="row">
                    <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                        &copy; <a href="#">OP Singh Classes</a>. All Right Reserved 2023.

                        
                    </div>
                    <div class="col-md-6 text-center text-md-end">
                        <div class="footer-menu">
                            <a href="">Home</a>
                            <a href="">Privacy Policy</a>
                            <a href="">Terms &amp; Conditions </a>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>


 <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ url('public/lib/wow/wow.min.js') }}"></script>
    <script src="{{ url('public/lib/easing/easing.min.js') }}"></script>
    <script src="{{ url('public/lib/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ url('public/lib/owlcarousel/owl.carousel.min.js') }}"></script>
    <script src="{{ url('public/lib/lightbox/js/lightbox.min.js') }}"></script>
    <!-- Template Javascript -->
    <script src="{{ url('public/js/main.js') }}"></script>
	
</body>

</html>
@extends('base')
@section('content')


    <!-- Header Start -->
    <div class="container-fluid bg-primary py-5 mb-5 page-header">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-10 text-center">
                    <h1 class="display-3 text-white animated slideInDown">Gallery</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a class="text-white" href="#">Home</a></li>
                            <li class="breadcrumb-item text-white active" aria-current="page">Galley</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->
     <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container">
           

			
  <div class="container-xxl py-6 pt-5" id="project">
        <div class="container">
            <div class="row g-5 mb-5 align-items-center wow fadeInUp" data-wow-delay="0.1s">
                <div class="col-lg-6">
                    <h1 class="display-5 mb-0">Gallery</h1>
                </div>
				 <div class="col-lg-6 text-lg-end">
                    <ul class="list-inline mx-n3 mb-0" id="portfolio-flters">
                        <li class="mx-3 active" data-filter="*">All Projects</li>
                        <li class="mx-3" data-filter=".first">UI/UX Design</li>
                        <li class="mx-3" data-filter=".second">Graphic Design</li>
                    </ul>
                </div>
              </div>
            <div class="row g-4 portfolio-container wow fadeInUp" data-wow-delay="0.1s">
                <div class="col-lg-4 col-md-6 portfolio-item first">
                    <div class="portfolio-img rounded overflow-hidden ">
                       <a class="gal a" href="img/c1.jpg" data-lightbox="portfolio"> <img class="img-fluid" src="img/c1.jpg" alt="">
                        </a>
						
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 portfolio-item second">
                    <div class="portfolio-img rounded overflow-hidden ">
                       <a class="gal a" href="img/about.jpg" data-lightbox="portfolio"> <img class="img-fluid" src="img/about.jpg" alt="">
                        </a>
						
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 portfolio-item first">
                    <div class="portfolio-img rounded overflow-hidden ">
                       <a class="gal a" href="img/c1.jpg" data-lightbox="portfolio"> <img class="img-fluid" src="img/c1.jpg" alt="">
                        </a>
						
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 portfolio-item first">
                    <div class="portfolio-img rounded overflow-hidden ">
                       <a class="gal a" href="img/about.jpg" data-lightbox="portfolio"> <img class="img-fluid" src="img/about.jpg" alt="">
                        </a>
						
                    </div>
                </div>
				 <div class="col-lg-4 col-md-6 portfolio-item second">
                    <div class="portfolio-img rounded overflow-hidden ">
                       <a class="gal a" href="img/c1.jpg" data-lightbox="portfolio"> <img class="img-fluid" src="img/c1.jpg" alt="">
                        </a>
						
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 portfolio-item first">
                    <div class="portfolio-img rounded overflow-hidden ">
                       <a class="gal a" href="img/about.jpg" data-lightbox="portfolio"> <img class="img-fluid" src="img/about.jpg" alt="">
                        </a>
						
                    </div>
                </div>
                    </div>
                </div>
            </div>
        </div>
    </div>			
			
			
			
        </div>
    </div>
    <!-- About End -->
        


@endsection
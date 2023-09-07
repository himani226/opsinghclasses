@extends('base')
@section('content')


<!-- Header Start -->
<div class="container-fluid bg-primary py-5 mb-5 page-header-vm">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-10 text-center">
                    <h1 class="display-3 text-white animated slideInDown head_txt">Mission &amp; Vision </h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a class="text-white" href="#">Home</a></li>
                            <li class="breadcrumb-item"><a class="text-white" href="#">About</a></li>
                            <li class="breadcrumb-item text-white active" aria-current="page">Mission &amp; Vision</li>
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
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        <img class="img-fluid position-absolute w-100 h-100" src="{{ url('public/img/vm.jpg') }}" alt="" style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                    <h6 class="section-title bg-white text-start text-primary pe-3">Mission &amp; Vision </h6>
                    <h1 class="mb-4 head_txt">Mission</h1>
					
                    <p class="mb-4">The mission of OP Singh Classes Coaching Institute's website is to provide high-quality coaching and training programs to empower individuals and enhance their skills in various domains. We aim to support students and professionals in achieving their academic and career goals by offering comprehensive courses and resources.
</p>
					<br><br>
					<h1 class="mb-4 head_txt">Vision</h1>
                    <p class="mb-4">The vision of OP Singh Classes Coaching Institute's website is to be a leading platform for educational and career development, recognized for our commitment to excellence and holistic growth. We strive to create a positive and inclusive learning environment that fosters innovation, personal growth, and professional success. Through our offerings, we aim to equip individuals with the knowledge, skills, and confidence to excel in their chosen fields.
</p>
                  
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->



@endsection
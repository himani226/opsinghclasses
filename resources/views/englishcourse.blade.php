@extends('base')
@section('content')


<!-- Header Start -->
<div class="container-fluid bg-primary py-5 mb-5 page-header-courses">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-10 text-center">
                    <h1 class="display-3 text-white animated slideInDown head_txt">IELTS, PTE and English Speaking</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a class="text-white" href="#">Home</a></li>
                            <li class="breadcrumb-item"><a class="text-white" href="#">Courses</a></li>
                            <li class="breadcrumb-item text-white active" aria-current="page">IELTS, PTE and English Speaking</li>
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
            <div class="row g-5 text-justify">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        <img class="img-fluid position-absolute w-100 h-100" src=" {{ url('public/img/eng.jpg') }}" alt="" style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                    <h6 class="section-title bg-white text-start text-primary pe-3">English Course</h6>
                    <h1 class="mb-4 head_txt">IELTS & PTE Coaching and English Speaking</h1>
                    <p class="mb-4  txt-just">IELTS and PTE exam prep centers offer personalized learning, experienced instructors, study materials, mock tests, time management guidance, speaking practice, feedback, flexibility, motivation, and support to help students improve their English proficiency and excel in these exams.</p>
                    <p class="mb-4 txt-just">Welcome to LanguageSuccess Prep Center, your premier destination for achieving English proficiency excellence. Our experienced instructors are dedicated to guiding you towards success in the IELTS and PTE exams. With personalized learning plans, we address your unique needs and goals.</p><br/>
                    <p>Our extensive collection of study materials, including textbooks, practice tests, and online resources, comprehensively covers every aspect of these exams. Regular mock tests help you track your progress and refine your strategies.</p><br>
    
                </div>
            </div>
			<div class="txt-just"><br><br>
			<p class="mb-4"> For the speaking component, our one-on-one practice sessions boost your confidence and fluency in spoken English. Our instructors provide detailed feedback on your assignments, ensuring constant improvement. <br>
			<p>We understand the demands of your busy life, which is why we offer flexible scheduling to accommodate your commitments while ensuring effective exam preparation.</p> <br/>
			<p> Our mission is not only to teach but also to motivate and support you throughout your journey. Ultimately, our goal is to help you achieve the scores you need for your academic or career aspirations abroad. Join us at LanguageSuccess Prep Center and embark on your path to excellence!</p>
			
			
			</div>

			
 
        </div>
    </div>			
			
			
			
        </div>
    </div>
    <!-- About End -->

@endsection
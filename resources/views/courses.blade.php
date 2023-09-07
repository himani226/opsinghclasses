@extends('base')
@section('content')


    <!-- Header Start -->
    <div class="container-fluid bg-primary py-5 mb-5 page-header-courses">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-10 text-center">
                    <h1 class="display-3 text-white animated slideInDown head_txt">NEET Courses</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a class="text-white" href="#">Home</a></li>
                            <li class="breadcrumb-item"><a class="text-white" href="#">Courses</a></li>
                            <li class="breadcrumb-item text-white active" aria-current="page">NEET Courses</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->

     <!-- Courses Start -->
     <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">Courses</h6>
                <h1 class="mb-5 head_txt">Courses Offered </h1>
            </div>
			<h5></h5>
            <div class="row g-4 justify-content-center">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="course-item bg-light">
                        <div class="position-relative overflow-hidden">
                            <img class="img-fluid" src="{{ url('public/img/course1.jpg') }}" alt="">
                           
                        </div>
                        <div class="text-center p-4 pb-0">
                                                  
                            <h3 class="mb-4 subhead_txt">+1 and +2 Batches</h3>
							<p class="mb-4">Our detailed batches for students in the Plus One and Plus Two levels will commence from April and continue until February. These batches will provide comprehensive coaching and guidance for the respective academic years, helping you excel in your studies.<br> &nbsp;</p><br>
                        </div>
                       
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="course-item bg-light">
                        <div class="position-relative overflow-hidden">
                            <img class="img-fluid" src="{{ url('public/img/course2.jpg') }}" alt="">
                           
                        </div>
                        <div class="text-center p-4 pb-0">
                                                  
                            <h3 class="mb-4 subhead_txt">NEET Batches</h3>
							<p class="mb-4">We understand the significance of NEET preparation for aspiring medical professionals. Therefore, we have introduced specialized NEET batches that will run from April to February. These batches will focus on rigorous training and extensive practice to help you achieve success in the NEET entrance examination.</p><br>
                        </div>
                       
                    </div>
                </div>
				 <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="course-item bg-light">
                        <div class="position-relative overflow-hidden">
                            <img class="img-fluid" src="{{ url('public/img/course3.jpg') }}" alt="">
                           
                        </div>
                        <div class="text-center p-4 pb-0">
                                                  
                            <h3 class="mb-4 subhead_txt">Crash Courses</h3>
							<p class="mb-4">For students looking for quick and intensive exam preparation, we offer crash courses. These courses will be conducted from April to May and will cover important topics and exam strategies in a concise and targeted manner. They are designed to help you optimize your preparation in a short period.</p><br>
                        </div>
                      
                    </div>
                </div>
            </div>
			
			<br><br>
			
			<div class="row g-4 justify-content-center">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="course-item bg-light">
                        <div class="position-relative overflow-hidden">
                            <img class="img-fluid" src="{{ url('public/img/course4.jpg') }}" alt="">
                           
                        </div>
                        <div class="text-center p-4 pb-0">
                                                  
                            <h3 class="mb-4 subhead_txt">Dropper's / Repeater's Batches</h3>
							<p class="mb-4">If you are planning to take a drop year to improve your performance and aim for better results, we have dedicated dropper batches for you. These batches will commence from June onwards and provide specialized guidance to help you enhance your knowledge and skills for competitive exams.<br><br><br></p><br>
                        </div>
                       <!-- <div class="d-flex mb-4 ">
                           <button type="button" class="btn btn-primary btn-sm text-center">Enroll Now</button>
                        </div>-->
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="course-item bg-light">
                        <div class="position-relative overflow-hidden">
                            <img class="img-fluid" src="{{ url('public/img/course5.jpg') }}" alt="">
                           
                        </div>
                        <div class="text-center p-4 pb-0">
                                                  
                            <h3 class="mb-4 subhead_txt">Job-Oriented and Competitive Exams</h3>
							<p class="mb-4">OP Singh Classes recognizes the importance of job-oriented and competitive exams conducted by various public service commissions and state staff selection boards. We will align our coaching schedules and curriculum with the relevant exam dates to ensure you receive comprehensive guidance for these examinations.</p><br>
                        </div>
                       
                    </div>
                </div>
				 <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="course-item bg-light">
                        <div class="position-relative overflow-hidden">
                            <img class="img-fluid" src="{{ url('public/img/course6.jpg') }}" alt="">
                           
                        </div>
                        <div class="text-center p-4 pb-0">
                                                  
                            <h3 class="mb-4 subhead_txt">Medical Representative Training Course</h3>
							<p class="mb-4">After completing your graduation exams, we offer a specialized training course for aspiring medical representatives. This course will equip you with the necessary skills, knowledge, and industry insights required to excel in the field of medical sales and representation.<br><br></p><br>
                        </div>
                      
                    </div>
                </div>
            </div>
			<br><br>
			 <div class="row g-4 justify-content-center">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="course-item bg-light">
                        <div class="position-relative overflow-hidden">
                            <img class="img-fluid" src="{{ url('public/img/course7.jpg') }}" alt="">
                           
                        </div>
                        <div class="text-center p-4 pb-0">
                                                  
                            <h3 class="mb-4 subhead_txt">Computer Training Course</h3>
							<p class="mb-4">Throughout the year, we provide a selected computer training course that covers essential computer skills and applications. This course aims to enhance your proficiency in computer usage, which is becoming increasingly important in various fields and professions.</p><br>
                        </div>
                     
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="course-item bg-light">
                        <div class="position-relative overflow-hidden">
                            <img class="img-fluid" src="{{ url('public/img/course8.jpg') }}" alt="">
                           
                        </div>
                        <div class="text-center p-4 pb-0">
                                                  
                            <h3 class="mb-4 subhead_txt">OP Singh Test Series</h3>
							<p class="mb-4">Test series for plus one,plus two, NEET and all other competitive classes will be conducted online portal through CLASS PLUS <br><br><br><br></p><br>
                        </div>
                      
                    </div>
                </div>
				 <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="course-item bg-light">
                        <div class="position-relative overflow-hidden">
                            <img class="img-fluid" src="{{ url('public/img/course9.jpg') }}" alt="">
                           
                        </div>
                        <div class="text-center p-4 pb-0">
                                                  
                            <h3 class="mb-4 subhead_txt">Philanthropic Activities</h3>
							<p class="mb-4">At OP Singh Classes Coaching Institute, we believe in giving back to society. We engage in philanthropic activities aimed at supporting underprivileged students, providing scholarships, and contributing to educational initiatives that promote equal opportunities for all.</p><br>
                        </div>
                      
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="course-item bg-light">
                        <div class="position-relative overflow-hidden">
                            <img class="img-fluid" src="{{ url('public/img/course10.jpg') }}" alt="">
                           
                        </div>
                        <div class="text-center p-4 pb-0">
                                                  
                            <h3 class="mb-4 subhead_txt">General Duty Assistant (GDA)</h3>
							<p class="mb-4">The GDA course is an ideal starting point for a healthcare career, providing comprehensive training in patient care, anatomy, and ethics. GDAs support patients' well-being in diverse settings and can pursue further specialization. It's a rewarding path dedicated to serving others with compassion and skill</p><br>
                        </div>
                      
                    </div>
                </div> 
            </div>
			
			<br><br>
			<h5>We are committed to providing quality education and personalized attention to our students. Our experienced faculty members and comprehensive study materials will assist you in achieving your academic and career goals. For more details regarding batch timings, fees, and enrollment procedures, please visit our center or contact our administrative office.</h5>
        </div>
    </div>
    <!-- Courses End -->

@endsection
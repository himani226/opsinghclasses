@extends('base')
@section('content')


 <!-- Header Start -->
 <div class="container-fluid bg-primary py-5 mb-5 page-header-courses">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-10 text-center">
                    <h1 class="display-3 text-white animated slideInDown head_txt">Computer Training Courses</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a class="text-white" href="#">Home</a></li>
                            <li class="breadcrumb-item"><a class="text-white" href="#">Courses</a></li>
                            <li class="breadcrumb-item text-white active" aria-current="page">Computer Training Courses</li>
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
                <h1 class="mb-5 head_txt">Computer Training Courses Offered <br> (Basic and Advance Level) </h1>
            </div>
			<h4>Computer science-related training courses as well as industrial training courses for professional students:</h4><br>
            <div class="row g-4 justify-content-center">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="course-item bg-light">
                        <div class="position-relative overflow-hidden">
                            <img class="img-fluid" src="{{ url('public/img/cc1.jpg') }}" alt="">
                           
                        </div>
						
                        <div class="text-center p-4 pb-0">
                               
							
							
                            <h3 class="mb-4">PLC Automation</h3>
							<p class="mb-4">(Advanced Level)<br> This course focuses on Programmable Logic Controllers (PLCs) used in industrial automation. It covers topics such as ladder logic programming, HMI (Human-Machine Interface), industrial communication protocols, and troubleshooting techniques.<br> &nbsp;</p><br>
                        </div>
                       
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="course-item bg-light">
                        <div class="position-relative overflow-hidden">
                            <img class="img-fluid" src="{{ url('public/img/cc2.jpg') }}" alt="">
                           
                        </div>
                        <div class="text-center p-4 pb-0">
                                                  
                            <h3 class="mb-4">Coding Test Series with C++ Book</h3>
							<p class="mb-4">This test series and book are designed to help students enhance their coding skills in C++. It includes various coding exercises and programming challenges to improve proficiency and problem-solving abilities.</p><br>
                        </div>
                       
                    </div>
                </div>
				 <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="course-item bg-light">
                        <div class="position-relative overflow-hidden">
                            <img class="img-fluid" src="{{ url('public/img/cc3.jpg') }}" alt="">
                           
                        </div>
                        <div class="text-center p-4 pb-0">
                                                  
                            <h3 class="mb-4">STEAM Test Series</h3>
							<p class="mb-4">The STEAM (Science, Technology, Engineering, Arts, and Mathematics) test series provides a comprehensive evaluation of students' knowledge in these areas. It covers multiple-choice questions related to various STEAM subjects.<br> &nbsp;&nbsp;</p><br>
                        </div>
                      
                    </div>
                </div>
            </div>
			
			<br><br>
			
			<div class="row g-4 justify-content-center">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="course-item bg-light">
                        <div class="position-relative overflow-hidden">
                            <img class="img-fluid" src="{{ url('public/img/cc4.jpg') }}" alt="">
                           
                        </div>
                        <div class="text-center p-4 pb-0">
                                                  
                            <h3 class="mb-4">Digital CV &nbsp;LinkedIn Profile Building</h3>
							<p class="mb-4">This course assists professionals in creating impactful digital CVs, resumes, and LinkedIn profiles. It covers strategies for showcasing skills, experience, and achievements effectively to attract potential employers.<br><br><br></p><br>
                        </div>
                       <!-- <div class="d-flex mb-4 ">
                           <button type="button" class="btn btn-primary btn-sm text-center">Enroll Now</button>
                        </div>-->
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="course-item bg-light">
                        <div class="position-relative overflow-hidden">
                            <img class="img-fluid" src="{{ url('public/img/cc5.jpg') }}" alt="">
                           
                        </div>
                        <div class="text-center p-4 pb-0">
                                                  
                            <h3 class="mb-4">Programming via C and C++</h3>
							<p class="mb-4">(Basic Level) and  (Advanced Level) <br>  This course focuses on system-level programming using C and C++. It covers topics such as memory management, file handling, process management, multithreading, and socket programming.<br> <br> <br> </p><br>
                        </div>
                       
                    </div>
                </div>
				 <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="course-item bg-light">
                        <div class="position-relative overflow-hidden">
                            <img class="img-fluid" src="{{ url('public/img/cc6.jpg') }}" alt="">
                           
                        </div>
                        <div class="text-center p-4 pb-0">
                                                  
                            <h3 class="mb-4">Embedded System</h3>
							<p class="mb-4"> (Basic Level), (Advanced Level)<br>  This course introduces students to embedded systems, including microcontrollers and their applications. It covers topics such as programming microcontrollers, interfacing sensors and actuators, and developing real-time embedded systems.
<br><br></p><br>
                        </div>
                      
                    </div>
                </div>
            </div>
			<br><br>
			 <div class="row g-4 justify-content-center">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="course-item bg-light">
                        <div class="position-relative overflow-hidden">
                            <img class="img-fluid" src="{{ url('public/img/cc7.jpg') }}" alt="">
                           
                        </div>
                        <div class="text-center p-4 pb-0">
                                                  
                            <h3 class="mb-4">Entrepreneurship Skills</h3>
							<p class="mb-4"> (Basic Level) and  (Advanced Level)<br> 
Description: This course provides students with essential skills and knowledge required to start and manage their own businesses. It covers topics such as ideation, business planning, marketing, financial management, and pitching ideas to investors.</p><br>
                        </div>
                     
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="course-item bg-light">
                        <div class="position-relative overflow-hidden">
                            <img class="img-fluid" src="{{ url('public/img/cc8.jpg') }}" alt="">
                           
                        </div>
                        <div class="text-center p-4 pb-0">
                                                  
                            <h3 class="mb-4">UI &amp;UX</h3>
							<p class="mb-4"> (Basic Level) and  (Advanced Level) <br> This course focuses on User Interface (UI) and User Experience (UX) design principles and practices. It covers topics such as wireframing, prototyping, visual design, usability testing, and interaction design.<br> &nbsp;
</p><br>
                        </div>
                      
                    </div>
                </div>
			
            </div>
			
			
        </div>
    </div>
    <!-- Courses End -->

@endsection
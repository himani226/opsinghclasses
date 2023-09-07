@extends('base')
@section('content')


    <!-- Header Start -->
    <div class="container-fluid bg-primary py-5 mb-5 page-header">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-10 text-center">
                    <h1 class="display-3 text-white animated slideInDown head_txt">Query Form</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a class="text-white" href="#">Home</a></li>
                            <li class="breadcrumb-item text-white active" aria-current="page">Query Form</li>
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
				 <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">Join Us</h6>
                <h1 class="mb-5 head_txt">Please Feel Free any Query </h1>
            </div>
				
				<h4>Your responses to these questions will help us get to know you better and assess your fit for our program. We will review all applications carefully and make a decision as soon as possible.</h4>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        <img class="img-fluid position-absolute w-100 h-100" src="{{ url('public/img/qf1.jpg') }}" alt="" style="object-fit: cover;">
                    </div>
                </div>
            <div class="col-lg-6 col-md-12 wow fadeInUp" data-wow-delay="0.5s">
                    <!-- Success message -->
                    @if(Session::has('success'))
                        <div class="alert alert-success">
                            {{Session::get('success')}}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('query.store') }}" id="QueryForm">
                        @csrf
                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" name="name" id="name" placeholder="Your Name">
                                    <label for="name">Your Name</label>
                                </div>
                            </div>
							 <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" name="year" id="name" placeholder="Birth Year">
                                    <label for="name">Year of Birth</label>
                                </div>
                            </div>
							
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="email" class="form-control" name="email" id="email" placeholder="Your Email">
                                    <label for="email">Your Email</label>
                                </div>
                            </div>
							<div class="col-md-6">
                                <div class="form-floating">
                                    <input type="test" class="form-control" name="phone" id="email" placeholder="Mobile number">
                                    <label for="email">Your Mobile</label>
                                </div>
                            </div>
							 <div class="col-12">
                                <div class="form-floating">
                                    <input type="text" class="form-control" name="qualification" id="qualification" placeholder="qualification">
                                    <label for="subject">Qualification</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="courses" name="courses" placeholder="Courses Interested In">
                                    <label for="subject">Course Interested In</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <textarea class="form-control" placeholder="Leave a message here" name="message" id="message" style="height: 150px"></textarea>
                                    <label for="message">Message</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary w-100 py-3" type="submit">Send Message</button>
                            </div>
                        </div>
                    </form>
                </div>
			</div>
			
 
        </div>
    </div>			
			
			
			
        </div>
    </div>
    <!-- About End -->


@endsection
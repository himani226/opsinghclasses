@extends('base')
@section('content')


     <!-- Header Start -->
     <div class="container-fluid bg-primary py-5 mb-5 page-header">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-10 text-center">
                    <h1 class="display-3 text-white animated slideInDown head_txt">Government Association</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a class="text-white" href="#">Home</a></li>
                            <li class="breadcrumb-item"><a class="text-white" href="#">Government Association</a></li>
                            
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
                <h6 class="section-title bg-white text-center text-primary px-3">Government Association</h6>
                <h1 class="mb-5 head_txt">List of Associations</h1>
            </div>
				
					               
				<table class="table-bordered table-hover px-3">
  <thead>
    <tr>
      <th scope="col" class="px-3 py-2">#</th>
      <th scope="col" class="px-3 py-2">Name</th>
      <th scope="col" class="px-3 py-2">Document</th>
      
    </tr>
  </thead>
  <tbody>
     <tr>
      <th scope="row" class="px-3 py-2">1</th>
      <td class="px-3 py-2">MSME Empanelment Certificate</td>
        <td class="px-3 py-2"><a href="{{ url('public/data/msme.jpg') }}">View </a> &nbsp;  <i class="fas fa-file-alt"></i></td>
      
    </tr>
    <tr>
      <th scope="row" class="px-3 py-2">2</th>
      <td class="px-3 py-2" >Himachal Pradesh One Month Crash Course</td>
         <td class="px-3 py-2"><a href="{{ url('public/data/hp_association.jpg') }}">View </a> &nbsp;  <i class="fas fa-file-alt"></i></td>
     
    </tr>
    <tr>
      <th scope="row" class="px-3 py-2">3</th>
      <td class="px-3 py-2">Empanelment of Medha Protsahan Yojana, Himachal Pradesh</td>
         <td class="px-3 py-2"><a href="{{ url('public/data/hp2.jpg') }}">View </a> &nbsp;  <i class="fas fa-file-alt"></i></td>
    </tr>
	  <tr>
      <th scope="row" class="px-3 py-2">4</th>
      <td class="px-3 py-2">Free of Cost Crash Course HP </td>
         <td class="px-3 py-2"><a href="{{ url('public/data/Free coaching (HP).pdf') }}">View </a> &nbsp;  <i class="fas fa-file-alt"></i></td>
      
    </tr>
    <tr>
      <th scope="row" class="px-3 py-2">5</th>
      <td class="px-3 py-2" >Free of Cost Crash Course for Meritorious Students HP </td>
         <td class="px-3 py-2"><a href="{{ url('public/data/hp_course.pdf') }}">View </a> &nbsp;  <i class="fas fa-file-alt"></i></td>
     
    </tr>
    <tr>
      <th scope="row" class="px-3 py-2">6</th>
      <td class="px-3 py-2">Free of Cost NEET Crash Course for Meritorious Students, Punjab </td>
         <td class="px-3 py-2"><a href="{{ url('public/data/free crash course_punjab.pdf') }}">View </a> &nbsp;  <i class="fas fa-file-alt"></i></td>
    </tr> 
  </tbody>
</table>	
					
			
					
			</div>
			
 
        </div>
  		
			
			
			
        </div>
   
    <!-- About End -->


@endsection
@extends('base')
@section('content')


    <!-- Header Start -->
    <div class="container-fluid bg-primary py-5 mb-5 page-header-courses">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-10 text-center">
                    <h1 class="display-3 text-white animated slideInDown head_txt">Study Material Notes</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a class="text-white" href="#">Home</a></li>
                            <li class="breadcrumb-item"><a class="text-white" href="#">Courses</a></li>
                            <li class="breadcrumb-item"><a class="text-white" href="#">Study Material</a></li>
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
                <h6 class="section-title bg-white text-center text-primary">Study Material</h6>
                <h1 class="mb-5 head_txt">Study Material Notes (Biology)</h1>
            </div>
				
				<h1 class="head_txt">List of Study Material (Biology) </h1>
               
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
      <td class="px-3 py-2">Anatomy of Flowering Plants</td>
        <td class="px-3 py-2"><a href=" {{ url('public/data/ANATOMY OF FLOWERING PLANTS Learning to Digram.docx') }}">View </a> &nbsp;  <i class="fas fa-file-alt"></i></td>
      
    </tr>
    <tr>
      <th scope="row" class="px-3 py-2">2</th>
      <td class="px-3 py-2" >Animalia Learning Through Figures</td>
         <td class="px-3 py-2"><a href=" {{ url('public/data/Animalia Learning Through Figures.docx') }}">View </a> &nbsp;  <i class="fas fa-file-alt"></i></td>
     
    </tr>
    <tr>
      <th scope="row" class="px-3 py-2">3</th>
      <td class="px-3 py-2">Sexual Reproduction in Flowering Plants</td>
         <td class="px-3 py-2"><a href=" {{ url('public/data/Assertion and Reason Questions.docx') }}">View </a> &nbsp;  <i class="fas fa-file-alt"></i></td>
    </tr>
	  <tr>
      <th scope="row" class="px-3 py-2">4</th>
      <td class="px-3 py-2">Plant and Plant Morphology</td>
         <td class="px-3 py-2"><a href=" {{ url('public/data/COMP--Plant Morphology.doc') }}">View </a> &nbsp;  <i class="fas fa-file-alt"></i></td>
      
    </tr>
    <tr>
      <th scope="row" class="px-3 py-2">5</th>
      <td class="px-3 py-2" >Larva Of Animals</td>
         <td class="px-3 py-2"><a href=" {{ url('public/data/Larva Of animals.docx') }}">View </a> &nbsp;  <i class="fas fa-file-alt"></i></td>
     
    </tr>
    <tr>
      <th scope="row" class="px-3 py-2">6</th>
      <td class="px-3 py-2">Cell Cycle and Cell Reproduction</td>
         <td class="px-3 py-2"><a href=" {{ url('public/data/learning mcq through different way.doc') }}">View </a> &nbsp;  <i class="fas fa-file-alt"></i></td>
    </tr> 
	  
	  <tr>
      <th scope="row" class="px-3 py-2">7</th>
      <td class="px-3 py-2">Life History of an Angiospermic Plant</td>
         <td class="px-3 py-2"><a href=" {{ url('public/data/Learning through Digram.docx') }}">View </a> &nbsp;  <i class="fas fa-file-alt"></i></td>
      
    </tr>
    <tr>
      <th scope="row" class="px-3 py-2">8</th>
      <td class="px-3 py-2" >New Pattern Medical Entrances Questions </td>
        <td class="px-3 py-2"><a href=" {{ url('public/data/Medical Entrances Questions.docx') }}">View </a> &nbsp;  <i class="fas fa-file-alt"></i></td>
    </tr>
    <tr>
      <th scope="row" class="px-3 py-2">9</th>
      <td class="px-3 py-2">Photosyntesis</td>
         <td class="px-3 py-2"><a href=" {{ url('public/data/Photosyntesis.docx') }}">View </a> &nbsp;  <i class="fas fa-file-alt"></i></td>
    </tr> 
	  
	   <tr>
      <th scope="row" class="px-3 py-2">10</th>
      <td class="px-3 py-2">Scientific Names:Plants and Animals</td>
        <td class="px-3 py-2"><a href=" {{ url('public/data/SCIENTIFIC NAMES  mcq.doc') }}">View </a> &nbsp;  <i class="fas fa-file-alt"></i></td>
      
    </tr>
    <tr>
      <th scope="row" class="px-3 py-2">11</th>
      <td class="px-3 py-2" >Sheet for Competition</td>
         <td class="px-3 py-2"><a href=" {{ url('public/data/SHEET FOR COMPETITION (Plant) differences.doc') }}">View </a> &nbsp;  <i class="fas fa-file-alt"></i></td>
     
    </tr>
    <tr>
      <th scope="row" class="px-3 py-2">12</th>
      <td class="px-3 py-2">Some Antibiotics Derived from Fungi</td>
         <td class="px-3 py-2"><a href=" {{ url('public/data/Some antibiotics derived from fungi.doc') }}">View </a> &nbsp;  <i class="fas fa-file-alt"></i></td>
    </tr>
	   <tr>
      <th scope="row" class="px-3 py-2">13</th>
      <td class="px-3 py-2">Table Learning Anatomy</td>
         <td class="px-3 py-2"><a href=" {{ url('public/data/TABLE learning anatomy.doc') }}">View </a> &nbsp;  <i class="fas fa-file-alt"></i></td>
      
    </tr>
    <tr>
      <th scope="row" class="px-3 py-2">14</th>
      <td class="px-3 py-2" >Transports in Plants</td>
      <td class="px-3 py-2"><a href=" {{ url('public/data/Transports in plants learning in another way.doc') }}">View </a> &nbsp;  <i class="fas fa-file-alt"></i></td>
     
    </tr>
 
  </tbody>
</table>	
					
			
					
			</div>
			
 
        </div>
  		
			
			
			
        </div>
   
    <!-- About End -->

@endsection
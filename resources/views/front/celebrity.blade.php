@extends('layouts.front')
@section('content')
   <main id="main" class="site-main">
      <div class="container">
         <div class="row">
            <div class="col-lg-12 col-sm-12 mb-sm-4">
               <div class="text-center iq-title-box iq-title-default">
                  <h2 class="iq-title text-capitalize">
                     Celebrity
                  </h2>
                  <p class="iq-title-desc">Your Streamit is build by one of the best and well experienced web developers and an <br>awarded Envato Elite Author.</p>
               </div>
            </div>
         </div>
      </div>
      <div class="container-md container-fluid">
         <div class="row about-us-detail">

            <div class="col-md-3 mb-4">
            <a href="{{route('home.celebrity_detail',['id' => 5, 'slug' => 'advanced-web-hindi'])}}">
               <div class="image-box">
                  <img width="265" height="345" src="{{ asset('/assets/front_template/images')}}/about-us/02.jpg" class="img-fluid attachment-large size-large" alt="" loading="lazy">
               </div>
               <div class="icon-box-content">
                  <div class="widget-container">
                     <p class="heading-title size-default">Singer</p>
                  </div>
                  <div class="widget-container">
                     <h4 class="heading-title size-default">Tonny Smith</h4>
                  </div>
               </div>
               </a>
            </div>

            <div class="col-md-3 mb-4">
           
               <div class="image-box">
                  <img width="265" height="345" src="{{ asset('/assets/front_template/images')}}/about-us/03.jpg" class="img-fluid attachment-large size-large" alt="" loading="lazy">
               </div>
               <div class="icon-box-content">
                  <div class="widget-container">
                     <p class="heading-title size-default">Singer</p>
                  </div>
                  <div class="widget-container">
                     <h4 class="heading-title size-default">Barry Tech</h4>
                  </div>
               </div>
        
            </div>
            <div class="col-md-3 mb-4">
      
               <div class="image-box">
                  <img width="265" height="345" src="{{ asset('/assets/front_template/images')}}/about-us/04.jpg" class="img-fluid attachment-large size-large" alt="" loading="lazy">
               </div>
               <div class="icon-box-content">
                  <div class="widget-container">
                     <p class="heading-title size-default">Singer</p>
                  </div>
                  <div class="widget-container">
                     <h4 class="heading-title size-default">kep John</h4>
                  </div>
               </div>
             
            </div>
            <div class="col-md-3 mb-4">
       
               <div class="image-box">
                  <img width="265" height="345" src="{{ asset('/assets/front_template/images')}}/about-us/05.jpg" class="img-fluid attachment-large size-large" alt="" loading="lazy">
               </div>
               <div class="icon-box-content">
                  <div class="widget-container">
                     <p class="heading-title size-default">Music Composer</p>
                  </div>
                  <div class="widget-container">
                     <h4 class="heading-title size-default">Monty Rock</h4>
                  </div>
               </div>
             
            </div>
         </div>
      </div>


 
   </main>
@endsection
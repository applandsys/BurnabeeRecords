@extends('layouts.front')
@section('content')
   <div class="iq-main-slider site-video">
      <div class="container-fluid">
    
      </div>
   </div>
   <div class="main-content movi">
         <div >


            <div class="container-fluid">

            <div class="row align-items-center">
               <div class="col-sm-12">
                  <nav aria-label="breadcrumb" class="text-center iq-breadcrumb-two">
                     <h2 class="title">Videos</h2>
                     <ol class="breadcrumb main-bg">
                           <li class="breadcrumb-item"><a href="">Home</a></li> 
                           <li class="breadcrumb-item active">Videos</li>
                     </ol>
                  </nav>
               </div>
            </div> 

               <div class="row">
                  <div class="col-lg-12">
                     <div class="row"> 
                        <div class="iq-main-header d-flex align-items-center justify-content-between mt-5 mt-lg-0">
                           <h4 class="main-title">Videos</h4>
                        </div>
                        <ul class=" row list-inline  mb-0 iq-rtl-direction ">
                        @foreach($latest_video as $latest)
                           <li class="slide-item col-lg-3 col-md-4 col-6 mb-4">
                              <div class="block-images position-relative  watchlist-first">
                                 <div class="img-box">
                                    <img src="{{ asset('uploads/video/thumbnail')}}/{{$latest->thubmnail_image}}" class="img-fluid" alt="" loading="lazy">
                                 </div>
                                 <div class="block-description">
                                    <h6 class="iq-title text-left"><a href="../html/genres-detail.html">Pirates of Sea</a></h6>
                                    <div class="movie-time d-flex align-items-center my-2">
                                       <span class="text-white">1hr : 45mins</span>
                                    </div>
                                    <div class="hover-buttons text-left">
                                       <a href="../html/genres-detail.html" role="button" class="btn btn-hover"><i class="fa fa-play mr-1"
                                             aria-hidden="true"></i>
                                          Play Now</a>
                                    </div>
                                 </div>
                                 <div class="block-social-info">
                                    <ul class="list-inline p-0 m-0 music-play-lists">
                                       <li class="share">
                                          <span><i class="ri-share-fill"></i></span>
                                          <div class="share-box">
                                             <div class="d-flex align-items-center">
                                                <a href="https://www.facebook.com/sharer?u=https://iqonic.design/wp-themes/streamit_wp/movie/shadow/"
                                                   target="_blank" rel="noopener noreferrer" class="share-ico" tabindex="0"><i
                                                      class="ri-facebook-fill"></i></a>
                                                <a href="https://twitter.com/intent/tweet?text=Currentlyreading" target="_blank"
                                                   rel="noopener noreferrer" class="share-ico" tabindex="0"><i
                                                      class="ri-twitter-fill"></i></a>
                                                <a href="#" data-link="https://iqonic.design/wp-themes/streamit_wp/movie/shadow/"
                                                   class="share-ico iq-copy-link" tabindex="0"><i class="ri-links-fill"></i></a>
                                             </div>
                                          </div>
                                       </li>
                                       <li>
                                          <span><i class="ri-heart-fill"></i></span>
                                          <span class="count-box">+3</span>
                                       </li>
                                       <li><span><i class="ri-add-line"></i></span></li>
                                    </ul>
                                 </div>
                              </div>
                           </li>
                           @endforeach
                           </ul>


                           <nav aria-label="Page navigation example">
                           <ul class="pagination">
                              <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                              <li class="page-item"><a class="page-link" href="#">1</a></li>
                              <li class="page-item"><a class="page-link" href="#">2</a></li>
                              <li class="page-item"><a class="page-link" href="#">3</a></li>
                              <li class="page-item"><a class="page-link" href="#">Next</a></li>
                           </ul>
                        </nav>

                        </div>
                     </div>
                  </div>
               </div>

               <div class="row">
                  <div class="col-sm-12">
            
                   
                  </div>
               </div>


            </div>
      </div>

@endsection
